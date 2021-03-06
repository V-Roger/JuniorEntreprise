<?php
/* @var $this EtudiantController */
/* @var $model Etudiant */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'etudiant-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Numéro Sécurité Sociale'); ?>
		<?php echo $form->textField($model,'Num_SS'); ?>
		<?php echo $form->error($model,'Num_SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nom Étudiant'); ?>
		<?php echo $form->textField($model,'Nom_Etu',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nom_Etu'); ?>
	</div>

	<div class="row">
             <?php echo $form->labelEx($model,'Date de Naissance'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'Date_Naissance',
                'options'=>array(
                    'dateFormat'=>'yy-mm-dd',
                    'defaultDate'=>'1990-06-15',     
                ),
                'htmlOptions' => array(
                    'size' => '10',         // textField size
                    'maxlength' => '10',    // textField maxlength
                ),
            ));
            ?>
            <?php echo $form->error($model,'Date_Naissance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Adresse Étudiant'); ?>
		<?php echo $form->textField($model,'Adresse_Etu',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Adresse_Etu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->