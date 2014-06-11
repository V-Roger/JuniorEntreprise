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
)); 

$criteria=new CDbCriteria;

$criteria->select='Num_SS,Nom_Etu';  

$num_etudiants=Etudiant::model()->findAll($criteria);
$model->Num_Convention=$_GET['id'];


?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">
            <?php echo $form->labelEx($model,'Num_SS'); ?>
            <?php echo CHtml::activeDropDownList($model, 'Num_SS', CHtml::listData($num_etudiants,'Num_SS','Num_SS','Nom_Etu')); ?>
            <?php echo $form->error($model,'Num_SS'); ?>
        </div>

	<div class="row">
		<!--<?php echo $form->labelEx($model,'Num_Convention'); ?>
		<?php echo $form->textField($model,'Num_Convention'); ?>
		<?php echo $form->error($model,'Num_Convention'); ?>-->
                <?php echo $form->hiddenField($model, 'Num_Convention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nature_Etu'); ?>
		<?php echo $form->textField($model,'Nature_Etu'); ?>
		<?php echo $form->error($model,'Nature_Etu'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  ConventionController::endWidget(); ?>

</div><!-- form -->