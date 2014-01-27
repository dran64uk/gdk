<?php
/* @var $this PhotoController */
/* @var $data Photo */
?>

<div class="view">

<?php
	echo $data->title. "<br>";
			echo CHtml::link( 
			CHtml::image(Yii::app()->getBaseUrl(true) . $data->path, '', array('style' => 'width: 250px;')) . "<br>",
			array('/photo/'.$data->id)
			);
?>

</div>