<?php
/* @var $this SiteController */
/* @var $model Album with Photos */
$this->pageTitle=Yii::app()->name;
?>
<h1>Albums</h1>

<?php
	foreach ($model as $album) {
		echo "<h2>$album->title</h2>";
		foreach ($album->photos as $photo) {
			echo $photo->title . "<br>";
			echo CHtml::image(Yii::app()->getBaseUrl(true) . $photo->path, '', array('style' => 'width: 250px;')) . "<br>";
		}
		echo "<hr>";
	}
	
		
?>
