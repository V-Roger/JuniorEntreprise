<?php
/* @var $this RemunerationController */
/* @var $model Remuneration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'remuneration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        
	<div class="row">
		<!--<?php echo $form->labelEx($model,'Num_Convention'); ?>
		<?php echo $form->textField($model,'Num_Convention'); ?>
		<?php echo $form->error($model,'Num_Convention'); ?>-->
                <?php echo $form->hiddenField($model, 'Num_Convention'); ?>
	</div>
        
        <!--
	<div class="row">
		<?php echo $form->labelEx($model,'Num_SS'); ?>
		<?php echo $form->textField($model,'Num_SS'); ?>
		<?php echo $form->error($model,'Num_SS'); ?>
	</div>

        
	<div class="row">
		<?php echo $form->labelEx($model,'Num_Remuneration'); ?>
		<?php echo $form->textField($model,'Num_Remuneration'); ?>
		<?php echo $form->error($model,'Num_Remuneration'); ?>
	</div>
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'Montant_Rem'); ?>
		<?php echo $form->textField($model,'Montant_Rem'); ?>
		<?php echo $form->error($model,'Montant_Rem'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'Date_Paiement'); ?>
		<?php echo $form->textField($model,'Date_Paiement'); ?>
		<?php echo $form->error($model,'Date_Paiement'); ?>
	</div>
        -->
        
	<div class="row">
		<?php echo $form->labelEx($model,'NbreJoursTravail'); ?>
		<?php echo $form->textField($model,'NbreJoursTravail'); ?>
		<?php echo $form->error($model,'NbreJoursTravail'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->