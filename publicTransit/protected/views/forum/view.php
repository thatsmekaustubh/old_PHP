<?php
/* @var $this ForumController */
/* @var $model Forum */

$this->breadcrumbs=array(
	'Forums'=>array('index'),
	$model->id,
);
/*
$this->menu=array(
	array('label'=>'List Forum', 'url'=>array('index')),
	array('label'=>'Create Forum', 'url'=>array('create')),
	array('label'=>'Update Forum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Forum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Forum', 'url'=>array('admin')),
);*/
?>

<h1>View Forum #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'comment',
		'parentcomment',
		'timestamp',
		'order',
		'personid',
	),
)); ?>

<hr/>
<h2>Comments</h2>
<br/>

<div>
<form method="post" action="/pt_miniproject/index.php?r=forum/create" id="forum-form">
	<input type="text" id="Forum_comment" name="Forum[comment]" maxlength="800" size="60">
	
	<input type="hidden" id="Forum_parentcomment" name="Forum[parentcomment]" value="<?php echo $model->id;?>">
	<input type="hidden" id="Forum_timestamp" name="Forum[timestamp]" maxlength="50" size="50" value="<?php echo time(); ?>">
	<input type="hidden" id="Forum_order" name="Forum[order]" value="<?php echo "0"; ?>">
	
	<?php
			$query='select * from person where userid="'.Yii::app()->user->getId().'"'; 
			$list= Yii::app()->db->createCommand($query)->queryAll();
			foreach($list as $item){
				//echo "<option value='".$item['id']."'>".$item['title']."</option>";
			}
	?>
	<input type="hidden" id="Forum_personid" name="Forum[personid]" value="<?php echo $item['id'];?>">
	<br/>
	<input type="submit" value="Comment" name="yt0">	</div>

</form>
</div>
