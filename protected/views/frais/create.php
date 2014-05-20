<?php
/* @var $this FraisController */
/* @var $model Frais */

$this->breadcrumbs=array(
	'Fraises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Frais', 'url'=>array('index')),
	array('label'=>'Manage Frais', 'url'=>array('admin')),
);
?>

<h1>Create Frais</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>