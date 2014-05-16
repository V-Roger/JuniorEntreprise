<?php
/* @var $this EtudiantController */
/* @var $data Etudiant */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_SS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Num_SS), array('view', 'id'=>$data->Num_SS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nom_Etu')); ?>:</b>
	<?php echo CHtml::encode($data->Nom_Etu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_Naissance')); ?>:</b>
	<?php echo CHtml::encode($data->Date_Naissance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Adresse_Etu')); ?>:</b>
	<?php echo CHtml::encode($data->Adresse_Etu); ?>
	<br />


</div>