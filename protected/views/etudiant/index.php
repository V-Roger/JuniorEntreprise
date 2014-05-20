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
                'Nom_Etu',
                'Date_Naissance',
                'Adresse_Etu',
		'Num_SS',
            
            ),       
    ));
?>
