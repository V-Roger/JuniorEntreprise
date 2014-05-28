<?php
/* @var $this RemunerationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Remunerations',
);

$this->menu=array(
	array('label'=>'Create Remuneration', 'url'=>array('create')),
	array('label'=>'Manage Remuneration', 'url'=>array('admin')),
);
?>

<h1>Remunerations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
