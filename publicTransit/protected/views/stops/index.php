<?php
/* @var $this StopsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stops',
);

$this->menu=array(
	array('label'=>'Create Stops', 'url'=>array('create')),
	array('label'=>'Manage Stops', 'url'=>array('admin')),
);
?>

<h1>Stops</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
