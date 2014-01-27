<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	$model->user->username=>array('user/'.$model->user->id),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Album', 'url'=>array('index')),
	array('label'=>'Create Album', 'url'=>array('create')),
	array('label'=>'Update Album', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Album', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Album', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->user->username . '\'s ' .$model->title; ?></h1>

<?php 
	foreach ($model->photos as $photo)
	{
		echo $photo->title. "<br>";
			echo CHtml::link( 
			CHtml::image(Yii::app()->getBaseUrl(true) . $photo->path, '', array('style' => 'width: 250px;')) . "<br>",
			array('/photo/view/'.$photo->id)
			);
	}
?>
