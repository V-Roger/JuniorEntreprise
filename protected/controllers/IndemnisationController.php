<?php

class IndemnisationController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        public function calculateAcomptes($data, $row)
        {
            $totalAcomptes = Yii::app()->db->createCommand()
            ->select('sum(Montant_HT)')
            ->from('ACOMPTE')
            ->where('Num_SS=:Num_SS and Num_Convention =:Num_Convention', array(':Num_SS' => $data->Num_SS, ':Num_Convention' => $data->Num_Convention))
            ->queryScalar();
            
            return($totalAcomptes);
        }
        
        public function calculateIndemnisation($data, $row)
        {
            $indemnisationVersee = 0;
            
            $indemnisationVersee = $data->Montant_Rem - $this->calculateAcomptes($data, $row);
            return($indemnisationVersee);
        }
        
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
            $dataProvider=new CActiveDataProvider('Remuneration', array(
                        'criteria'=>array(
                            'condition'=>"Num_Convention = $id",
                        ),
                    )
                );
		$this->render('view',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Indemnisation;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Indemnisation']))
		{
			$model->attributes=$_POST['Indemnisation'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Num_RF));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Indemnisation']))
		{
			$model->attributes=$_POST['Indemnisation'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Num_RF));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Convention', array(
                        'criteria'=>array(
                            'condition'=>"Proj_Fini = 1",
                        ),
                    )
                );
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Indemnisation('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Indemnisation']))
			$model->attributes=$_GET['Indemnisation'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Indemnisation the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Indemnisation::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Indemnisation $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='indemnisation-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
