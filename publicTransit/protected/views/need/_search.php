<?php
/* @var $this NeedController */
/* @var $model Need */
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
		<?php echo $form->textField($model,'depttime',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arrtime'); ?>
		<?php echo $form->textField($model,'arrtime',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modechoice1'); ?>
		<?php echo $form->textField($model,'modechoice1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modechoice2'); ?>
		<?php echo $form->textField($model,'modechoice2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modechoice3'); ?>
		<?php echo $form->textField($model,'modechoice3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alerttimebef'); ?>
		<?php echo $form->textField($model,'alerttimebef'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workdayflag'); ?>
		<?php echo $form->textField($model,'workdayflag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caseflag'); ?>
		<?php echo $form->textField($model,'caseflag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personid'); ?>
		<?php echo $form->textField($model,'personid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->