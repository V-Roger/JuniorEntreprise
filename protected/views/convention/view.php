<?php
/* @var $this ConventionController */
/* @var $model Convention */

$this->breadcrumbs=array(
	'Conventions'=>array('index'),
	$model->Num_Convention,
);

$this->menu=array(
	array('label'=>'Lister les conventions', 'url'=>array('index')),
	array('label'=>'Créer convention', 'url'=>array('create')),
	array('label'=>'Mettre à jour convention', 'url'=>array('update', 'id'=>$model->Num_Convention)),
	array('label'=>'Supprimer convention', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Num_Convention),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gérer convention', 'url'=>array('admin')),
);
?>

<h1>D&eacute;tails de la convention #<?php echo $model->Num_Convention; ?></h1>

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

<br>
<hr>
<br>
<h1>&Eacute;tudiants</h1>

<?php 
$dataprovider=new CActiveDataProvider('Participe', array(
            'criteria'=>array(
                'condition'=>"Num_Convention=$model->Num_Convention",
            ),
        )
    ); 

        $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataprovider,
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


