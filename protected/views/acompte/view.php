<?php
/* @var $this AcompteController */
/* @var $model Acompte */

$this->breadcrumbs=array(
	'Acomptes'=>array('index'),
	$model->Num_Acompte,
);

$this->menu=array(
	array('label'=>'List Acompte', 'url'=>array('index')),
	array('label'=>'Create Acompte', 'url'=>array('create')),
	array('label'=>'Update Acompte', 'url'=>array('update', 'id'=>$model->Num_Acompte)),
	array('label'=>'Delete Acompte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Num_Acompte),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Acompte', 'url'=>array('admin')),
);
?>

<h1>View Acompte #<?php echo $model->Num_Acompte; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Num_Acompte',
		'Montant_HT',
		'Num_SS',
		'Num_Convention',
	),
)); ?>
