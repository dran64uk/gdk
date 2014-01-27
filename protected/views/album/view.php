<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	$model->user->username=>array('user/'.$model->user->id),
	$model->title,
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
