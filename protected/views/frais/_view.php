<?php
/* @var $this FraisController */
/* @var $data Frais */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Frais')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Num_Frais), array('view', 'id'=>$data->Num_Frais)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_Note')); ?>:</b>
	<?php echo CHtml::encode($data->Date_Note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Montant_Frais')); ?>:</b>
	<?php echo CHtml::encode($data->Montant_Frais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_SS')); ?>:</b>
	<?php echo CHtml::encode($data->Num_SS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Convention')); ?>:</b>
	<?php echo CHtml::encode($data->Num_Convention); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_RF')); ?>:</b>
	<?php echo CHtml::encode($data->Num_RF); ?>
	<br />


</div>