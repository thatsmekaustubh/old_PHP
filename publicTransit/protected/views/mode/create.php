<?php
/* @var $this ModeController */
/* @var $model Mode */

$this->breadcrumbs=array(
	'Modes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mode', 'url'=>array('index')),
	array('label'=>'Manage Mode', 'url'=>array('admin')),
);
?>

<h1>Create Mode</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>