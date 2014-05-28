<?php
/* @var $this RemunerationController */
/* @var $model Remuneration */

$this->breadcrumbs=array(
	'Remunerations'=>array('index'),
	$model->Num_Remuneration=>array('view','id'=>$model->Num_Remuneration),
	'Update',
);

$this->menu=array(
	array('label'=>'List Remuneration', 'url'=>array('index')),
	array('label'=>'Create Remuneration', 'url'=>array('create')),
	array('label'=>'View Remuneration', 'url'=>array('view', 'id'=>$model->Num_Remuneration)),
	array('label'=>'Manage Remuneration', 'url'=>array('admin')),
);
?>

<h1>Update Remuneration <?php echo $model->Num_Remuneration; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>