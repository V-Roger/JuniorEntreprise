<?php
/* @var $this ConventionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conventions',
);

$this->menu=array(
	array('label'=>'Create Convention', 'url'=>array('create')),
	array('label'=>'Manage Convention', 'url'=>array('admin')),
                    array('label'=>'Ajout Etudiant', 'url'=>array('ajouteretudiant')),
);
?>

<h1>Conventions</h1>

    <div class="span12">
        <div id="bar" class='nav-pills'>
        <?php
            $this->widget('bootstrap.widgets.TbButtonGroup', array(
                'buttons'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
        ?>
        </div><!-- sidebar -->
    </div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'Num_Convention',
		'Nom_Projet',
		'Num_Entreprise',
		'PrixJour',
		'Date_Convention',
		'Duree_Projet',
		/*
		'Date_Finprevu',
		'Proj_Fini',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
