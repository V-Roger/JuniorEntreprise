<?php
/* @var $this ConventionController */
/* @var $model Convention */

$this->breadcrumbs=array(
	'Conventions'=>array('index'),
	$model->Num_Convention,
);

$this->menu=array(
	array('label'=>'List Convention', 'url'=>array('index')),
	array('label'=>'Create Convention', 'url'=>array('create')),
	array('label'=>'Update Convention', 'url'=>array('update', 'id'=>$model->Num_Convention)),
	array('label'=>'Delete Convention', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Num_Convention),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Convention', 'url'=>array('admin')),
);
?>

<h1>View Convention #<?php echo $model->Num_Convention; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Num_Convention',
		'Nom_Projet',
		'Num_Entreprise',
		'PrixJour',
		'Date_Convention',
		'Duree_Projet',
		'Date_Finprevu',
		'Proj_Fini',
	),
)); ?>

<h1>Etudiants</h1>

<?php 
$modelParticipe = Participe::model()->findbyAttributes(array('Num_Convention' =>$model->Num_Convention));
$dataprovider=new CActiveDataProvider('participe'); 

        $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataprovider,
        'filter'=>$modelParticipe,
	'columns'=>array(
		'Num_Convention',
		'Num_SS',
		'Nature_Etu',
                                    array(
                                        'class'=>'CButtonColumn',
                                        'template'=>'{voiretudiant}',
                                        'buttons'=>array(
                                            'voiretudiant'=>array(
                                            'label'=>'voir Etudiant',
                                            'imageUrl'=>'',
                                            'options'=>array( 'class'=>'icon-user'),
                                            'url'=>'Yii::app()->createUrl("etudiant/view",array("id"=> $data->Num_SS))',
                                        ),
                                   ),
                              ),
	),
)); ?>


