<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div id="login">
    <img alt="Junior Entreprise" src="../JuniorEntreprise/themes/bootstrap/img/Logo.png">

    <div class="formulaire">

        <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id'=>'login-form',
        'type'=>'',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        )); ?>


	<?php echo $form->textFieldRow($model,'username'); ?>

	<?php echo $form->passwordFieldRow($model,'password',array(
        'hint'=>'Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>',
        )); ?>


	<div class="formulaire-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Login',
        )); ?>
	</div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>