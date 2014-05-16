<?php
/* @var $this EtudiantController */
/* @var $model Etudiant */

$this->breadcrumbs=array(
	'Etudiants'=>array('index'),
	$model->Num_SS,
);

$this->menu=array(
	array('label'=>'List Etudiant', 'url'=>array('index')),
	array('label'=>'Create Etudiant', 'url'=>array('create')),
	array('label'=>'Update Etudiant', 'url'=>array('update', 'id'=>$model->Num_SS)),
	array('label'=>'Delete Etudiant', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Num_SS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Etudiant', 'url'=>array('admin')),
);
?>

<h1>View Etudiant #<?php echo $model->Num_SS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Num_SS',
		'Nom_Etu',
		'Date_Naissance',
		'Adresse_Etu',
	),
)); ?>
