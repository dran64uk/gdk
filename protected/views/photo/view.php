<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	$model->album->user->username =>array('user/'.$model->album->user->id),
	$model->album->title=>array('album/'.$model->album->id),
	$model->title,
);
?>

<h1><?php echo $model->album->title . ': ' . $model->title; ?></h1>

<?php 
	echo CHtml::image(Yii::app()->getBaseUrl(true) . $model->path, '', array('style' => 'width: 100%;'));
	echo "<p>$model->description</p>";
 ?>
