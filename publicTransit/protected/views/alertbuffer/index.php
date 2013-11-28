<?php
/* @var $this AlertbufferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alertbuffers',
);

$this->menu=array(
	array('label'=>'Create Alertbuffer', 'url'=>array('create')),
	array('label'=>'Manage Alertbuffer', 'url'=>array('admin')),
);
?>

<h1>Alertbuffers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
