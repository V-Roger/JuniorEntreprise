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
<h3>Projets termin&eacute;s</h3>

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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'Num_Convention',
		'Nom_Projet',
		'Num_Entreprise',
		'PrixJour',
		'Date_Convention',
		'Duree_Projet',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{voirIndemnisation}',
                        'buttons'=>array(
                            'voirIndemnisation' => array(
                                'label'=>'Voir les indemnisations de ce projet',
                                'imageUrl'=>Yii::app()->request->baseUrl.'/themes/bootstrap/img/1pxTransparent.png',
                                'options'=>array('class'=>'icon-euro'),
                                'url'=>'Yii::app()->createUrl("indemnisation/view", array("id"=>$data->Num_Convention))',
                            ),
                        ),
                ),
	),
)); ?>
