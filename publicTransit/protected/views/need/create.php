<?php
/* @var $this NeedController */
/* @var $model Need */

$this->breadcrumbs=array(
	'Needs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Need', 'url'=>array('index')),
	array('label'=>'Manage Need', 'url'=>array('admin')),
);
?>

<h1>Create Need</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>