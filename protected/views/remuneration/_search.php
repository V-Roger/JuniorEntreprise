<?php
/* @var $this RemunerationController */
/* @var $model Remuneration */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Num_Convention'); ?>
		<?php echo $form->textField($model,'Num_Convention'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_SS'); ?>
		<?php echo $form->textField($model,'Num_SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_Remuneration'); ?>
		<?php echo $form->textField($model,'Num_Remuneration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Montant_Rem'); ?>
		<?php echo $form->textField($model,'Montant_Rem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NbreJoursTravail'); ?>
		<?php echo $form->textField($model,'NbreJoursTravail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Paiement'); ?>
		<?php echo $form->textField($model,'Date_Paiement'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->