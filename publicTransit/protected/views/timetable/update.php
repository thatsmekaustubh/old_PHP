<?php
/* @var $this TimetableController */
/* @var $model Timetable */

$this->breadcrumbs=array(
	'Timetables'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Timetable', 'url'=>array('index')),
	array('label'=>'Create Timetable', 'url'=>array('create')),
	array('label'=>'View Timetable', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Timetable', 'url'=>array('admin')),
);
?>

<h1>Update Timetable <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>