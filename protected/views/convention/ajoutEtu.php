<?php
/* @var $this ConventionController */
/* @var $model Participe */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=  ConventionController::beginWidget('CActiveForm', array(
	'id'=>'convention-ajoutEtu-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'Nature_Etu'); ?>
		<?php echo $form->textField($model,'Nature_Etu'); ?>
		<?php echo $form->error($model,'Nature_Etu'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ?'Create' : 'Save'); ?>
	</div>

<?php  ConventionController::endWidget(); ?>

</div><!-- form -->