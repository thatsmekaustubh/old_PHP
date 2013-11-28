<?php
/* @var $this AlertbufferController */
/* @var $model Alertbuffer */

$this->breadcrumbs=array(
	'Alertbuffers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alertbuffer', 'url'=>array('index')),
	array('label'=>'Create Alertbuffer', 'url'=>array('create')),
	array('label'=>'View Alertbuffer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Alertbuffer', 'url'=>array('admin')),
);
?>

<h1>Update Alertbuffer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>