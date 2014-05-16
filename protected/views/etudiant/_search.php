<?php
/* @var $this EtudiantController */
/* @var $model Etudiant */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Num_SS'); ?>
		<?php echo $form->textField($model,'Num_SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nom_Etu'); ?>
		<?php echo $form->textField($model,'Nom_Etu',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Naissance'); ?>
		<?php echo $form->textField($model,'Date_Naissance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Adresse_Etu'); ?>
		<?php echo $form->textField($model,'Adresse_Etu',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->