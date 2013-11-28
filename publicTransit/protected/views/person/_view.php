<?php
/* @var $this PersonController */
/* @var $data Person */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mname')); ?>:</b>
	<?php echo CHtml::encode($data->mname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::encode($data->userid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pwd')); ?>:</b>
	<?php echo CHtml::encode($data->pwd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addr1')); ?>:</b>
	<?php echo CHtml::encode($data->addr1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('addr2')); ?>:</b>
	<?php echo CHtml::encode($data->addr2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addr3')); ?>:</b>
	<?php echo CHtml::encode($data->addr3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pincode')); ?>:</b>
	<?php echo CHtml::encode($data->pincode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lcontactno')); ?>:</b>
	<?php echo CHtml::encode($data->lcontactno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcontactno')); ?>:</b>
	<?php echo CHtml::encode($data->mcontactno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailid')); ?>:</b>
	<?php echo CHtml::encode($data->emailid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homestopid1')); ?>:</b>
	<?php echo CHtml::encode($data->homestopid1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homestopid2')); ?>:</b>
	<?php echo CHtml::encode($data->homestopid2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homestopid3')); ?>:</b>
	<?php echo CHtml::encode($data->homestopid3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officestopid1')); ?>:</b>
	<?php echo CHtml::encode($data->officestopid1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officestopid2')); ?>:</b>
	<?php echo CHtml::encode($data->officestopid2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officestopid3')); ?>:</b>
	<?php echo CHtml::encode($data->officestopid3); ?>
	<br />

	*/ ?>

</div>