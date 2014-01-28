<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->username); ?></b>	
	<br />
	<ul>
	<?php 

		foreach ($data->albums as $album) {
			echo '<li>'. CHtml::link($album->title, array('/album/view/'.$album->id)). '</li>';
		}
	?>
	</ul>
</div>