<?php
/* @var $this AcompteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Acomptes',
);

$this->menu=array(
	array('label'=>'Create Acompte', 'url'=>array('create')),
	array('label'=>'Manage Acompte', 'url'=>array('admin')),
);
?>

<h1>Acomptes</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'Num_Acompte',
                'Num_Convention',
                'Num_SS',
		'Montant_HT',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
