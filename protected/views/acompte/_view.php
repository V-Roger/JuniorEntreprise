<?php
/* @var $this AcompteController */
/* @var $data Acompte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Acompte')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Num_Acompte), array('view', 'id'=>$data->Num_Acompte)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Montant_HT')); ?>:</b>
	<?php echo CHtml::encode($data->Montant_HT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_SS')); ?>:</b>
	<?php echo CHtml::encode($data->Num_SS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Convention')); ?>:</b>
	<?php echo CHtml::encode($data->Num_Convention); ?>
	<br />


</div>