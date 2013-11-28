<?php
/* @var $this PersonController */
/* @var $model Person */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mname'); ?>
		<?php echo $form->textField($model,'mname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'userid'); ?>
		<?php echo $form->textField($model,'userid',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'userid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pwd'); ?>
		<?php echo $form->textField($model,'pwd',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pwd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addr1'); ?>
		<?php echo $form->textField($model,'addr1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'addr1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addr2'); ?>
		<?php echo $form->textField($model,'addr2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'addr2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addr3'); ?>
		<?php echo $form->textField($model,'addr3',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'addr3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pincode'); ?>
		<?php echo $form->textField($model,'pincode',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pincode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lcontactno'); ?>
		<?php echo $form->textField($model,'lcontactno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lcontactno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mcontactno'); ?>
		<?php echo $form->textField($model,'mcontactno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mcontactno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailid'); ?>
		<?php echo $form->textField($model,'emailid',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'emailid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from type')->queryAll();
			echo '<select id="Person_type" type="text" name="Person[type]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp',array('size'=>50,'maxlength'=>50,'value'=>time())); ?>
		<?php echo $form->error($model,'timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homestopid1'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Person_homestopid1" type="text" name="Person[homestopid1]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'homestopid1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homestopid2'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Person_homestopid2" type="text" name="Person[homestopid2]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'homestopid2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homestopid3'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Person_homestopid3" type="text" name="Person[homestopid3]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'homestopid3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officestopid1'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Person_officestopid1" type="text" name="Person[officestopid1]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'officestopid1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officestopid2'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Person_officestopid2" type="text" name="Person[officestopid2]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'officestopid2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officestopid3'); ?>
		<?php
			$list= Yii::app()->db->createCommand('select * from stops')->queryAll();
			echo '<select id="Person_officestopid3" type="text" name="Person[officestopid3]">';
			echo "<option value='0'>null</option>";
			foreach($list as $item){
				echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
			echo "</select>";
		?>
		<?php echo $form->error($model,'officestopid3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->