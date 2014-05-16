<?php
/* @var $this EtudiantController */
/* @var $model Etudiant */

$this->breadcrumbs=array(
	'Etudiants'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Etudiant', 'url'=>array('index')),
	array('label'=>'Manage Etudiant', 'url'=>array('admin')),
);
?>

<h1>Create Etudiant</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>