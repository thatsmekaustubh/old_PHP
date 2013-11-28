<?php
/* @var $this AlertbufferController */
/* @var $model Alertbuffer */

$this->breadcrumbs=array(
	'Alertbuffers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Alertbuffer', 'url'=>array('index')),
	array('label'=>'Create Alertbuffer', 'url'=>array('create')),
	array('label'=>'Update Alertbuffer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Alertbuffer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alertbuffer', 'url'=>array('admin')),
);
?>

<h1>View Alertbuffer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'needid',
		'status',
		'copy',
	),
)); ?>
