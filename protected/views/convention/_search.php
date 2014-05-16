<?php
/* @var $this ConventionController */
/* @var $model Convention */
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
		<?php echo $form->label($model,'Nom_Projet'); ?>
		<?php echo $form->textField($model,'Nom_Projet',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_Entreprise'); ?>
		<?php echo $form->textField($model,'Num_Entreprise'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrixJour'); ?>
		<?php echo $form->textField($model,'PrixJour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nature_Etu'); ?>
		<?php echo $form->textField($model,'Nature_Etu',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Convention'); ?>
		<?php echo $form->textField($model,'Date_Convention'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Duree_Projet'); ?>
		<?php echo $form->textField($model,'Duree_Projet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Finprevu'); ?>
		<?php echo $form->textField($model,'Date_Finprevu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Proj_Fini'); ?>
		<?php echo $form->textField($model,'Proj_Fini'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->