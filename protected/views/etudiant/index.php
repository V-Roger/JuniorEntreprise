<?php
/* @var $this EtudiantController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Etudiants',
);

$this->menu=array(
	array('label'=>'Créer Étudiant', 'url'=>array('create')),
	array('label'=>'Gérer les Étudiants', 'url'=>array('admin')),
);
?>

<h1>Étudiants</h1>

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
                array(
                    'class'=>'CButtonColumn',
                    'template'=>'{view}',
               ),         
            ),       
    ));
?>
