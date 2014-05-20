<?php
/* @var $this FraisController */
/* @var $model Frais */

$this->breadcrumbs=array(
	'Fraises'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Frais', 'url'=>array('index')),
	array('label'=>'Create Frais', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#frais-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fraises</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'frais-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Num_Frais',
		'Date_Note',
		'Montant_Frais',
		'Num_SS',
		'Num_Convention',
		'Num_RF',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
