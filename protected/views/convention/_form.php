<?php
/* @var $this ConventionController */
/* @var $model Convention */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convention-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Convention'); ?>
		<?php echo $form->textField($model,'Num_Convention'); ?>
		<?php echo $form->error($model,'Num_Convention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nom_Projet'); ?>
		<?php echo $form->textField($model,'Nom_Projet',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Nom_Projet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Entreprise'); ?>
		<?php echo $form->textField($model,'Num_Entreprise'); ?>
		<?php echo $form->error($model,'Num_Entreprise'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrixJour'); ?>
		<?php echo $form->textField($model,'PrixJour'); ?>
		<?php echo $form->error($model,'PrixJour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nature_Etu'); ?>
		<?php echo $form->textField($model,'Nature_Etu',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Nature_Etu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date_Convention'); ?>
		<?php echo $form->textField($model,'Date_Convention'); ?>
		<?php echo $form->error($model,'Date_Convention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Duree_Projet'); ?>
		<?php echo $form->textField($model,'Duree_Projet'); ?>
		<?php echo $form->error($model,'Duree_Projet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date_Finprevu'); ?>
		<?php echo $form->textField($model,'Date_Finprevu'); ?>
		<?php echo $form->error($model,'Date_Finprevu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Proj_Fini'); ?>
		<?php echo $form->textField($model,'Proj_Fini'); ?>
		<?php echo $form->error($model,'Proj_Fini'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->