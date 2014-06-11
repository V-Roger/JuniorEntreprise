<?php
/* @var $this AcompteController */
/* @var $model Acompte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'acompte-form',
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
		<?php echo $form->labelEx($model,'Num_Acompte'); ?>
		<?php echo $form->textField($model,'Num_Acompte'); ?>
		<?php echo $form->error($model,'Num_Acompte'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Montant_HT'); ?>
		<?php echo $form->textField($model,'Montant_HT'); ?>
		<?php echo $form->error($model,'Montant_HT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Étudiant'); ?>
                <?php echo CHtml::activeDropDownList($model, 'Num_SS', CHtml::listData($num_etudiants,'Num_SS','Num_SS','Nom_Etu')); ?>
		<?php echo $form->error($model,'Num_SS'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'Num_Convention'); ?>
                <?php echo CHtml::activeDropDownList($model, 'Num_Convention', CHtml::listData($num_convention,'Num_Convention','Num_Convention','Num_Entreprise'))?>
		<?php echo $form->error($model,'Num_Convention'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
