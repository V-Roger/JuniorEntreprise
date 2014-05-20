<?php
/* @var $this FraisController */
/* @var $model Frais */

$this->breadcrumbs=array(
	'Fraises'=>array('index'),
	$model->Num_Frais=>array('view','id'=>$model->Num_Frais),
	'Update',
);

$this->menu=array(
	array('label'=>'List Frais', 'url'=>array('index')),
	array('label'=>'Create Frais', 'url'=>array('create')),
	array('label'=>'View Frais', 'url'=>array('view', 'id'=>$model->Num_Frais)),
	array('label'=>'Manage Frais', 'url'=>array('admin')),
);
?>

<h1>Update Frais <?php echo $model->Num_Frais; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>