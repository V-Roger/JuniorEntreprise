<?php
/* @var $this FraisController */
/* @var $model Frais */

$this->breadcrumbs=array(
	'Fraises'=>array('index'),
	$model->Num_Frais,
);

$this->menu=array(
	array('label'=>'List Frais', 'url'=>array('index')),
	array('label'=>'Create Frais', 'url'=>array('create')),
	array('label'=>'Update Frais', 'url'=>array('update', 'id'=>$model->Num_Frais)),
	array('label'=>'Delete Frais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Num_Frais),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Frais', 'url'=>array('admin')),
);
?>

<h1>View Frais #<?php echo $model->Num_Frais; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Num_Frais',
		'Date_Note',
		'Montant_Frais',
		'Num_SS',
		'Num_Convention',
		'Num_RF',
	),
)); ?>
