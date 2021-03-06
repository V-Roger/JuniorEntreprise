<?php
/* @var $this ConventionController */
/* @var $model Participe */

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

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                                 'Num_Convention',  
                                 'Num_SS',  
                                 'Nature_Etu',
                        ),
)); ?>

<h1>Ajout Etudiant <?php echo $model->Num_Convention; ?></h1>


<?php $this->renderPartial('ajoutEtu', array('model'=>$model)); ?>

