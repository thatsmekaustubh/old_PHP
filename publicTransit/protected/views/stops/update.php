<?php
/* @var $this StopsController */
/* @var $model Stops */

$this->breadcrumbs=array(
	'Stops'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stops', 'url'=>array('index')),
	array('label'=>'Create Stops', 'url'=>array('create')),
	array('label'=>'View Stops', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stops', 'url'=>array('admin')),
);
?>

<h1>Update Stops <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>