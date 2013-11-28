<?php
/* @var $this PersonController */
/* @var $model Person */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mname'); ?>
		<?php echo $form->textField($model,'mname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userid'); ?>
		<?php echo $form->textField($model,'userid',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pwd'); ?>
		<?php echo $form->textField($model,'pwd',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addr1'); ?>
		<?php echo $form->textField($model,'addr1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addr2'); ?>
		<?php echo $form->textField($model,'addr2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addr3'); ?>
		<?php echo $form->textField($model,'addr3',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pincode'); ?>
		<?php echo $form->textField($model,'pincode',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lcontactno'); ?>
		<?php echo $form->textField($model,'lcontactno',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcontactno'); ?>
		<?php echo $form->textField($model,'mcontactno',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailid'); ?>
		<?php echo $form->textField($model,'emailid',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homestopid1'); ?>
		<?php echo $form->textField($model,'homestopid1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homestopid2'); ?>
		<?php echo $form->textField($model,'homestopid2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homestopid3'); ?>
		<?php echo $form->textField($model,'homestopid3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officestopid1'); ?>
		<?php echo $form->textField($model,'officestopid1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officestopid2'); ?>
		<?php echo $form->textField($model,'officestopid2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officestopid3'); ?>
		<?php echo $form->textField($model,'officestopid3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->