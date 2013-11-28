<?php
/* @var $this AlertbufferController */
/* @var $model Alertbuffer */

$this->breadcrumbs=array(
	'Alertbuffers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alertbuffer', 'url'=>array('index')),
	array('label'=>'Manage Alertbuffer', 'url'=>array('admin')),
);
?>

<h1>Create Alertbuffer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>