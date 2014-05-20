<?php
/* @var $this AcompteController */
/* @var $model Acompte */

$this->breadcrumbs=array(
	'Acomptes'=>array('index'),
	$model->Num_Acompte=>array('view','id'=>$model->Num_Acompte),
	'Update',
);

$this->menu=array(
	array('label'=>'List Acompte', 'url'=>array('index')),
	array('label'=>'Create Acompte', 'url'=>array('create')),
	array('label'=>'View Acompte', 'url'=>array('view', 'id'=>$model->Num_Acompte)),
	array('label'=>'Manage Acompte', 'url'=>array('admin')),
);
?>

<h1>Update Acompte <?php echo $model->Num_Acompte; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>