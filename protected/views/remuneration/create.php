<?php
/* @var $this RemunerationController */
/* @var $model Remuneration */

$this->breadcrumbs=array(
	'Remunerations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Remuneration', 'url'=>array('index')),
	array('label'=>'Manage Remuneration', 'url'=>array('admin')),
);
?>

<h1>Create Remuneration</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>