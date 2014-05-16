<?php
/* @var $this EtudiantController */
/* @var $model Etudiant */

$this->breadcrumbs=array(
	'Etudiants'=>array('index'),
	$model->Num_SS=>array('view','id'=>$model->Num_SS),
	'Update',
);

$this->menu=array(
	array('label'=>'List Etudiant', 'url'=>array('index')),
	array('label'=>'Create Etudiant', 'url'=>array('create')),
	array('label'=>'View Etudiant', 'url'=>array('view', 'id'=>$model->Num_SS)),
	array('label'=>'Manage Etudiant', 'url'=>array('admin')),
);
?>

<h1>Update Etudiant <?php echo $model->Num_SS; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>