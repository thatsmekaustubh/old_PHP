<?php
/* @var $this TimetableController */
/* @var $model Timetable */

$this->breadcrumbs=array(
	'Timetables'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Timetable', 'url'=>array('index')),
	array('label'=>'Create Timetable', 'url'=>array('create')),
	array('label'=>'Update Timetable', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Timetable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Timetable', 'url'=>array('admin')),
);
?>

<h1>View Timetable #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'srcstop',
		'deststop',
		'depttime',
		'arrtime',
		'inchargeid',
		'workdaysflag',
		'caseflag',
		'parentJourney',
		'abbrevation',
	),
)); ?>
