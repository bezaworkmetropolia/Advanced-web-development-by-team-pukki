<h1> Comments </h1>

<table>
	<tr>
		<th>ID</th>
		<th>Topic Title</th>
		
	</tr>
	<?php foreach($posts as $post) : ?>
	<tr>
		<td><?php echo $this->Html->link($post['Post']['id'], array('controller'=>'posts','action'=>'view',$post['Post']['id'])); ?> </td>	
		<td><?php echo $this->Html->link($post['Topic']['title'], array('controller'=>'posts','action'=>'view',$post['Post']['id'])); ?> </td>	
	</tr>
 <?php endforeach; ?>
 <?php unset($post); ?>
</table>