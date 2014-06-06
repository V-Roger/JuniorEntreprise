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

	<?php echo $form->errorSummary($model); 
        $criteria=new CDbCriteria;
        $criteria2=new CDbCriteria;

        $criteria->select='Num_SS,Nom_Etu';
        $criteria2->select='Num_Convention,Num_Entreprise';             

        $num_etudiants=Etudiant::model()->findAll($criteria);
        $num_convention=Convention::model()->findAll($criteria2);
                
        ?>
	<!--<div class="row">
		<?php echo $form->labelEx($model,'Num_Frais'); ?>
		<?php echo $form->textField($model,'Num_Frais'); ?>
		<?php echo $form->error($model,'Num_Frais'); ?>
	</div>-->
        
        <div class="row">
            <?php echo $form->labelEx($model,'Date_Note'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'Date_Note',
                'options'=>array(
                    'dateFormat'=>'yy-mm-dd',
                ),
                'htmlOptions' => array(
                    'size' => '10',         // textField size
                    'maxlength' => '10',    // textField maxlength
                ),
            ));
            ?>
            <?php echo $form->error($model,'Date_Convention'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'Montant_Frais'); ?>
		<?php echo $form->textField($model,'Montant_Frais'); ?>
		<?php echo $form->error($model,'Montant_Frais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Étudiant'); ?>
                <?php echo CHtml::activeDropDownList($model, 'Num_SS', CHtml::listData($num_etudiants,'Num_SS','Num_SS','Nom_Etu')); ?>
		<?php echo $form->error($model,'Num_SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Convention'); ?>
                <?php echo CHtml::activeDropDownList($model, 'Num_Convention', CHtml::listData($num_convention,'Num_Convention','Num_Convention','Num_Entreprise')); ?>
		<?php echo $form->error($model,'Num_Convention'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Num_RF'); ?>
		<?php echo $form->textField($model,'Num_RF'); ?>
		<?php echo $form->error($model,'Num_RF'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->