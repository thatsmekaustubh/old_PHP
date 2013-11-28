<?php
/* @var $this TimetableController */
/* @var $model Timetable */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'timetable-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'srcstop'); ?>
		<?php //echo $form->textField($model,'srcstop'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Timetable_srcstop" type="text" name="Timetable[srcstop]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'srcstop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deststop'); ?>
		<?php //echo $form->textField($model,'deststop'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Timetable_deststop" type="text" name="Timetable[deststop]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'deststop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'depttime'); ?>
		<?php echo $form->textField($model,'depttime'); ?>
		<?php echo $form->error($model,'depttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrtime'); ?>
		<?php echo $form->textField($model,'arrtime'); ?>
		<?php echo $form->error($model,'arrtime'); ?>
	</div>

	<div class="row">
		<?php
			$query='select * from person where userid="'.Yii::app()->user->getId().'"'; 
			$list= Yii::app()->db->createCommand($query)->queryAll();
			foreach($list as $item){
				//echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo '<input id="Timetable_inchargeid" type="hidden" name="Timetable[inchargeid]" value='.$item['id'].'>';
		?>
		
		<?php //echo $form->labelEx($model,'inchargeid'); ?>
		<?php //echo $form->textField($model,'inchargeid',array('type'=>'hidden','value'=>1)); ?>
		<?php //echo $form->error($model,'inchargeid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workdaysflag'); ?>
		<?php echo $form->textField($model,'workdaysflag'); ?>
		<?php echo $form->error($model,'workdaysflag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caseflag'); ?>
		<?php echo $form->textField($model,'caseflag'); ?>
		<?php echo $form->error($model,'caseflag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentJourney'); ?>
		<?php echo $form->textField($model,'parentJourney'); ?>
		<?php echo $form->error($model,'parentJourney'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abbrevation'); ?>
		<?php echo $form->textField($model,'abbrevation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'abbrevation'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->