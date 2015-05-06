<h1> <?php  echo $topic['Topic']['title']; ?> </h1>
		<?php echo $this->Html->link('Create a post in this topic' , array('controller'=>'posts','action'=>'add',$topic['Topic']['id'])); ?>
		<table>
		
		<?php
		<pre><?php print_r($topic); ?></pre>
			// foreach($topic['Post'] as $post){
				// echo $post['body']."<br>";
				
			// <tr><td></td><td>Sr . No .</td><td>".$post['user_id']."</td><td>".$post['body']."</td><td></td>;
				
				}
			?>