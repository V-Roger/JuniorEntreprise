<?php
/* @var $this EtudiantController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Etudiants',
);

$this->menu=array(
	array('label'=>'Create Etudiant', 'url'=>array('create')),
	array('label'=>'Manage Etudiant', 'url'=>array('admin')),
);
?>

<h1>Etudiants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
