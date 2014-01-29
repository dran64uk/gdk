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


</div>