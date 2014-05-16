<?php
/* @var $this ConventionController */
/* @var $model Convention */

$this->breadcrumbs=array(
	'Conventions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Convention', 'url'=>array('index')),
	array('label'=>'Manage Convention', 'url'=>array('admin')),
);
?>

<h1>Create Convention</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>