<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	$model->album->user->username =>array('user/'.$model->album->user->id),
	$model->album->title=>array('album/'.$model->album->id),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Photo', 'url'=>array('index')),
	array('label'=>'Create Photo', 'url'=>array('create')),
	array('label'=>'View Photo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);

?>

<h1><?php echo $model->album->title . ': ' . $model->title; ?></h1>

<?php 
	echo CHtml::image(Yii::app()->getBaseUrl(true) . $model->path, '', array('style' => 'width: 100%;'));
	echo "<p>$model->description</p>";
 ?>
