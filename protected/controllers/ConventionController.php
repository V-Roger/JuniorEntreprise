<?php

class ConventionController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow no unauthenticated users nothing
                'actions' => array(''),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'index', 'view', 'create', 'update' and 'ajouteretudiant' actions
                'actions' => array('index', 'view', 'create', 'update', 'ajouteretudiant'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'close'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Convention;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Convention'])) {
            $model->attributes = $_POST['Convention'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->Num_Convention));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Convention'])) {
            $model->attributes = $_POST['Convention'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->Num_Convention));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }
    
    // ATTENTION ! en cours de creation / modification
    public function actionAjouterEtudiant($id) {
         $model = new Participe;
         
        if (isset($_POST['Participe'])) {
           $model->attributes = $_POST['Participe'];
           if ($model->save()){               
                $modelRemuneration = new Remuneration;
                $modelRemuneration->Num_Convention = $model->Num_Convention;
                $modelRemuneration->Num_SS = $model->Num_SS;
                $modelRemuneration->save();
                $this->redirect(array('view', 'id' => $model->Num_Convention)); 
            }
        }
       
       $this->render('participeView', array(
               'model'=>$model,
           ));
    }
    
    /*
     * $id = Num_Convention
     * 
     */
    public function actionClose($id){
        $model = $this->loadModel($id);
    
        $model->Proj_Fini = 1;
        
        if($model->save()){
            $modelRemunerations = Remuneration::model()->findAllByAttributes(array('Num_Convention'=>$id));
            foreach($modelRemunerations as $remuneration){
                $remuneration->Date_Paiement = date("Y-m-d");
                $remuneration->save();                
            }
            $this->redirect(array('view', 'id' => $model->Num_Convention));
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Convention');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Convention('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Convention']))
            $model->attributes = $_GET['Convention'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Convention the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Convention::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Convention $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'convention-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
