<?php
/* @var $this AcompteController */
/* @var $model Acompte */

$this->breadcrumbs=array(
	'Acomptes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Acompte', 'url'=>array('index')),
	array('label'=>'Manage Acompte', 'url'=>array('admin')),
);
?>

<h1>Create Acompte</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>