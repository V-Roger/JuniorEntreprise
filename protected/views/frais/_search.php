<?php
/* @var $this FraisController */
/* @var $model Frais */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Num_Frais'); ?>
		<?php echo $form->textField($model,'Num_Frais'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Note'); ?>
		<?php echo $form->textField($model,'Date_Note'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Montant_Frais'); ?>
		<?php echo $form->textField($model,'Montant_Frais'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_SS'); ?>
		<?php echo $form->textField($model,'Num_SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_Convention'); ?>
		<?php echo $form->textField($model,'Num_Convention'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_RF'); ?>
		<?php echo $form->textField($model,'Num_RF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->