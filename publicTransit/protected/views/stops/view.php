<?php
/* @var $this StopsController */
/* @var $model Stops */

$this->breadcrumbs=array(
	'Stops'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Stops', 'url'=>array('index')),
	array('label'=>'Create Stops', 'url'=>array('create')),
	array('label'=>'Update Stops', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stops', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stops', 'url'=>array('admin')),
);
?>

<h1>View Stops #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'desc',
		'abbrevation',
	),
)); ?>
