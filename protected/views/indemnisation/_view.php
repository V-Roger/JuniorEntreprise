<?php
/* @var $this IndemnisationController */
/* @var $data Remuneration */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Remuneration')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Num_Remuneration), array('view', 'id'=>$data->Num_Remuneration)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Convention')); ?>:</b>
	<?php echo CHtml::encode($data->Num_Convention); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_SS')); ?>:</b>
	<?php echo CHtml::encode($data->Num_SS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Montant_Rem')); ?>:</b>
	<?php echo CHtml::encode($data->Montant_Rem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NbreJoursTravail')); ?>:</b>
	<?php echo CHtml::encode($data->NbreJoursTravail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_Paiement')); ?>:</b>
	<?php echo CHtml::encode($data->Date_Paiement); ?>
	<br />


</div>