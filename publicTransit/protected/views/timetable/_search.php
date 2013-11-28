<?php
/* @var $this TimetableController */
/* @var $model Timetable */
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
		<?php echo $form->label($model,'srcstop'); ?>
		<?php echo $form->textField($model,'srcstop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deststop'); ?>
		<?php echo $form->textField($model,'deststop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'depttime'); ?>
		<?php echo $form->textField($model,'depttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arrtime'); ?>
		<?php echo $form->textField($model,'arrtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inchargeid'); ?>
		<?php echo $form->textField($model,'inchargeid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workdaysflag'); ?>
		<?php echo $form->textField($model,'workdaysflag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caseflag'); ?>
		<?php echo $form->textField($model,'caseflag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentJourney'); ?>
		<?php echo $form->textField($model,'parentJourney'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abbrevation'); ?>
		<?php echo $form->textField($model,'abbrevation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->