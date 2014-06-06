<?php
/* @var $this IndemnisationController */
/* @var $dataProvider CActiveDataProvider */

/*
$this->breadcrumbs=array(
	'Indemnisation',
);

$this->menu=array(
	//array('label'=>'Create Remuneration', 'url'=>array('create')),
	array('label'=>'Gérer les rémunerations', 'url'=>array('admin')),
);*/
?>

<h1>Indemnisations</h1>

    <!--<div class="span12">
        <div id="bar" class='nav-pills'>
        <?php
            $this->widget('bootstrap.widgets.TbButtonGroup', array(
                'buttons'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
        ?>
        </div><!-- sidebar
    </div>-->

<?php 
//
//    $dataprovider=new CActiveDataProvider('Remuneration', array(
//            'criteria'=>array(
//                'condition'=>"Date_Paiement != NULL",
//            ),
//        )
//    );
    
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
			'class'=>'CButtonColumn',
		),
	),
)); ?>
