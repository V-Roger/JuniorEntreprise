<?php
/* @var $this RemunerationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Remunerations',
);

$this->menu=array(
	//array('label'=>'Create Remuneration', 'url'=>array('create')),
	array('label'=>'Gérer les rémunerations', 'url'=>array('admin')),
);
?>

<h1>Remunerations</h1>

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
		'Num_SS',
		'Num_Remuneration',
		'Montant_Rem',
		'NbreJoursTravail',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
