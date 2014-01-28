<?php
/* @var $this AlbumController */
/* @var $data Album */
?>

<div class="view">

	<?php echo CHtml::encode($data->user->username) . "'s <b>" . CHtml::encode($data->title); ?></b>
	<?php 
		if ($data->public)
			echo ": public";
		else
			echo ": private";
	?>
	<br />
	<?php
		echo CHtml::link( 
			CHtml::image(Yii::app()->getBaseUrl(true) . $data->photos[0]->path, '', array('style' => 'width: 250px;')) . "<br>",
			array('/album/view/'.$data->id)
			);	
	?>


</div>