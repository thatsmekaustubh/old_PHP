<?php
/* @var $this TimetableController */
/* @var $data Timetable */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('inchargeid')); ?>:</b>
	<?php echo CHtml::encode($data->inchargeid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workdaysflag')); ?>:</b>
	<?php echo CHtml::encode($data->workdaysflag); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('caseflag')); ?>:</b>
	<?php echo CHtml::encode($data->caseflag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentJourney')); ?>:</b>
	<?php echo CHtml::encode($data->parentJourney); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abbrevation')); ?>:</b>
	<?php echo CHtml::encode($data->abbrevation); ?>
	<br />

	*/ ?>

</div>