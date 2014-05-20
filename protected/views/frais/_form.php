<?php
/* @var $this FraisController */
/* @var $model Frais */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'frais-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Frais'); ?>
		<?php echo $form->textField($model,'Num_Frais'); ?>
		<?php echo $form->error($model,'Num_Frais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date_Note'); ?>
		<?php echo $form->textField($model,'Date_Note'); ?>
		<?php echo $form->error($model,'Date_Note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Montant_Frais'); ?>
		<?php echo $form->textField($model,'Montant_Frais'); ?>
		<?php echo $form->error($model,'Montant_Frais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_SS'); ?>
		<?php echo $form->textField($model,'Num_SS'); ?>
		<?php echo $form->error($model,'Num_SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Convention'); ?>
		<?php echo $form->textField($model,'Num_Convention'); ?>
		<?php echo $form->error($model,'Num_Convention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_RF'); ?>
		<?php echo $form->textField($model,'Num_RF'); ?>
		<?php echo $form->error($model,'Num_RF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->