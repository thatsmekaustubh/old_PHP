<?php
/* @var $this NeedController */
/* @var $data Need */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('srcstop')); ?>:</b>
	<?php echo CHtml::encode($data->srcstop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deststop')); ?>:</b>
	<?php echo CHtml::encode($data->deststop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depttime')); ?>:</b>
	<?php echo CHtml::encode($data->depttime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrtime')); ?>:</b>
	<?php echo CHtml::encode($data->arrtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modechoice1')); ?>:</b>
	<?php echo CHtml::encode($data->modechoice1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modechoice2')); ?>:</b>
	<?php echo CHtml::encode($data->modechoice2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modechoice3')); ?>:</b>
	<?php echo CHtml::encode($data->modechoice3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alerttimebef')); ?>:</b>
	<?php echo CHtml::encode($data->alerttimebef); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workdayflag')); ?>:</b>
	<?php echo CHtml::encode($data->workdayflag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caseflag')); ?>:</b>
	<?php echo CHtml::encode($data->caseflag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personid')); ?>:</b>
	<?php echo CHtml::encode($data->personid); ?>
	<br />

	*/ ?>

</div>