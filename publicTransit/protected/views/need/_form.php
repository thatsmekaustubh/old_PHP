<?php
/* @var $this NeedController */
/* @var $model Need */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'need-form',
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
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Need_srcstop" type="text" name="Need[srcstop]">';
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
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Need_deststop" type="text" name="Need[deststop]">';
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
		<?php echo $form->textField($model,'depttime',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'depttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrtime'); ?>
		<?php echo $form->textField($model,'arrtime',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'arrtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modechoice1'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from mode')->queryAll();
			echo '<select id="Need_modechoice1" type="text" name="Need[modechoice1]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'modechoice1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modechoice2'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from mode')->queryAll();
			echo '<select id="Need_modechoice2" type="text" name="Need[modechoice2]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'modechoice2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modechoice3'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from mode')->queryAll();
			echo '<select id="Need_modechoice3" type="text" name="Need[modechoice3]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'modechoice3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alerttimebef'); ?>
		<?php echo $form->textField($model,'alerttimebef'); ?>
		<?php echo $form->error($model,'alerttimebef'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workdayflag'); ?>
		<?php echo $form->textField($model,'workdayflag'); ?>
		<?php echo $form->error($model,'workdayflag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caseflag'); ?>
		<?php echo $form->textField($model,'caseflag'); ?>
		<?php echo $form->error($model,'caseflag'); ?>
	</div>

	<div class="row">
		<?php
			$query='select * from person where userid="'.Yii::app()->user->getId().'"'; 
			$list= Yii::app()->db->createCommand($query)->queryAll();
			foreach($list as $item){
				//echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo '<input id="Need_personid" type="hidden" name="Need[personid]" value='.$item['id'].'>';
		?>
		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->