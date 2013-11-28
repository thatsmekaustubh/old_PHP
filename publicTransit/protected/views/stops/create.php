<?php
/* @var $this StopsController */
/* @var $model Stops */

$this->breadcrumbs=array(
	'Stops'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stops', 'url'=>array('index')),
	array('label'=>'Manage Stops', 'url'=>array('admin')),
);
?>

<h1>Create Stops</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>