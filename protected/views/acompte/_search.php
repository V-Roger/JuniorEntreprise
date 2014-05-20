<?php
/* @var $this AcompteController */
/* @var $model Acompte */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Num_Acompte'); ?>
		<?php echo $form->textField($model,'Num_Acompte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Montant_HT'); ?>
		<?php echo $form->textField($model,'Montant_HT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_SS'); ?>
		<?php echo $form->textField($model,'Num_SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_Convention'); ?>
		<?php echo $form->textField($model,'Num_Convention'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->