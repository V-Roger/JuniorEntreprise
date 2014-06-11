<?php
/* @var $this IndemnisationController */
/* @var $model Remuneration */
/*
$this->breadcrumbs=array(
	'Remunerations'=>array('index'),
	$model->Num_Remuneration,
);

$this->menu=array(
	array('label'=>'List Remuneration', 'url'=>array('index')),
	array('label'=>'Create Remuneration', 'url'=>array('create')),
	array('label'=>'Update Remuneration', 'url'=>array('update', 'id'=>$model->Num_Remuneration)),
	array('label'=>'Delete Remuneration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Num_Remuneration),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Remuneration', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>Indemnisations</h1>

<?php 
    
    $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'Num_Convention',
		'Num_SS',
		'Num_Remuneration',
		'Montant_Rem',
		'NbreJoursTravail',
		'Date_Paiement',
                array(
                    'name'=>'Acomptes versés',
                    'value'=>array($this, 'calculateAcomptes'),
                ),
                array(
                    'name'=>'Indemnisation versée',
                    'value'=>array($this, 'calculateIndemnisation'),
                )
                
	),
)); ?>
