<h1>comment</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('topic_id');
echo $this->Form->input('body');
echo $this->Form->end('Comment');
?>

