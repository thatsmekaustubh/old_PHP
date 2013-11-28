<?php
/* @var $this ModeController */
/* @var $model Mode */

$this->breadcrumbs=array(
	'Modes'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mode', 'url'=>array('index')),
	array('label'=>'Create Mode', 'url'=>array('create')),
	array('label'=>'View Mode', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mode', 'url'=>array('admin')),
);
?>

<h1>Update Mode <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>