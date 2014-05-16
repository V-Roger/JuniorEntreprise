<?php
/* @var $this ConventionController */
/* @var $data Convention */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Convention')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Num_Convention), array('view', 'id'=>$data->Num_Convention)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nom_Projet')); ?>:</b>
	<?php echo CHtml::encode($data->Nom_Projet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Entreprise')); ?>:</b>
	<?php echo CHtml::encode($data->Num_Entreprise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrixJour')); ?>:</b>
	<?php echo CHtml::encode($data->PrixJour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nature_Etu')); ?>:</b>
	<?php echo CHtml::encode($data->Nature_Etu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_Convention')); ?>:</b>
	<?php echo CHtml::encode($data->Date_Convention); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Duree_Projet')); ?>:</b>
	<?php echo CHtml::encode($data->Duree_Projet); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_Finprevu')); ?>:</b>
	<?php echo CHtml::encode($data->Date_Finprevu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Proj_Fini')); ?>:</b>
	<?php echo CHtml::encode($data->Proj_Fini); ?>
	<br />

	*/ ?>

</div>