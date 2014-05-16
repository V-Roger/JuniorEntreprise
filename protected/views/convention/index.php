<?php
/* @var $this ConventionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conventions',
);

$this->menu=array(
	array('label'=>'Create Convention', 'url'=>array('create')),
	array('label'=>'Manage Convention', 'url'=>array('admin')),
);
?>

<h1>Conventions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
