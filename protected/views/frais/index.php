<?php
/* @var $this FraisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fraises',
);

$this->menu=array(
	array('label'=>'Create Frais', 'url'=>array('create')),
	array('label'=>'Manage Frais', 'url'=>array('admin')),
);
?>

<h1>Frais</h1>

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
		'Num_Frais',
                'Num_Convention',
                'Num_SS',
                'Num_RF',
		'Montant_Frais',
                'Date_Note',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
