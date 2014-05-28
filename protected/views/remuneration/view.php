<?php
/* @var $this RemunerationController */
/* @var $model Remuneration */

$this->breadcrumbs=array(
	'Remunerations'=>array('index'),
	$model->Num_Remuneration,
);

$this->menu=array(
	array('label'=>'List Remuneration', 'url'=>array('index')),
	array('label'=>'Create Remuneration', 'url'=>array('create')),
	array('label'=>'Update Remuneration', 'url'=>array('update', 'id'=>$model->Num_Remuneration)),
	array('label'=>'Delete Remuneration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Num_Remuneration),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Remuneration', 'url'=>array('admin')),
);
?>

<h1>View Remuneration #<?php echo $model->Num_Remuneration; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Num_Convention',
		'Num_SS',
		'Num_Remuneration',
		'Montant_Rem',
		'NbreJoursTravail',
	),
)); ?>
