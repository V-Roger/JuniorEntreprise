<?php
/* @var $this ConventionController */
/* @var $model Convention */

$this->breadcrumbs=array(
	'Conventions'=>array('index'),
	$model->Num_Convention=>array('view','id'=>$model->Num_Convention),
	'Update',
);

$this->menu=array(
	array('label'=>'List Convention', 'url'=>array('index')),
	array('label'=>'Create Convention', 'url'=>array('create')),
	array('label'=>'View Convention', 'url'=>array('view', 'id'=>$model->Num_Convention)),
	array('label'=>'Manage Convention', 'url'=>array('admin')),
);
?>

<h1>Update Convention <?php echo $model->Num_Convention; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>