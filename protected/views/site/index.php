<head>
<link type="text/css" rel="stylesheet" href="s.css" /> 
</head>

<?php
/* @var $this SiteController */
/* @var $model Album with Photos */
$this->pageTitle=Yii::app()->name;
?>
<h1>Albums</h1>


<?php
	foreach ($model as $album) {
		echo CHtml::link("<h2>$album->title</h2>", array('album/view/'.$album->id));
		foreach ($album->photos as $photo) {
			echo $photo->title. "<br>";
			echo CHtml::link( 
			CHtml::image(Yii::app()->getBaseUrl(true) . $photo->path, '', array('style' => 'width: 250px;')) . "<br>",
			array('/photo/view/'.$photo->id)
			);
		}
		echo "<hr>";
	}
	
		
?>
