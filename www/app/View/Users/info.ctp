<?php
$uname = CakeSession::read("Auth.User.username");
$ucreated = CakeSession::read("Auth.User.created");
$id = CakeSession::read("Auth.User.id");

echo $this->Html->css('user');

?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />

  <title>Booky 2015</title>

  
  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<nav class="top-bar" data-topbar role="navigation">

     <div class="twelve columns header_nav">
     <div class="row">
      
        <ul id="menu-header" class="nav-bar horizontal">
        
         <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/home">Home</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/books">Books</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/about">About</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/product-page">Pages</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/blog">Blog</a></li>
		    <li class=""><a href="http://www.probableimpossibilities.com/Index.php/topics/index">Forum</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/contact">Contact</a></li>
           <?php 
if($this->Session->check('Auth.User')){
          echo'<li class="has-dropdown"><a href="#">';
    echo $uname . "</a>";
    echo "<ul class='dropdown'> <li>";
    
    echo $this->Html->link( "Profile",   '/users/info' );
    echo '</li><li>'.$this->Html->link( "Logout",   '/users/logout' ).'</li></ul>';
    }else{  echo'<li class="">';
    echo $this->Html->link( "Login",   array('action'=>'login') ); 

}
              ?></li>
            
              

        </ul>
        
        <script type="text/javascript">
         //<![CDATA[
         $('ul#menu-header').nav-bar();
          //]]>
        </script>
        
      </div>  
      </div>
      
</nav>
     
<!--
<div class="users index">

	<h2><?php echo $uname; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tbody>
	<tr>
		<td><?php echo $uname; ?>&nbsp;</td>
		<td><?php echo $umail; ?>&nbsp;</td>
		<td><?php echo $ucreated; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $id)); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $id)); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete Acount', $id), array(), __('Are you sure you want to delete' . $uname . '?')); ?>
		</td>
	</tr>
	</tbody>
	</table>
	<p>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
	</ul>
</div>
--> 


 <div id="w">
    <div id="content" class="clearfix">
      <h1><?php echo $uname; ?></h1>

      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#bio" class="sel">Bio</a></li>
          <li><a href="#activity">Activity</a></li>
          <li><a href="#friends">Friends</a></li>
          <li><a href="#settings">Settings</a></li>
            
        </ul>
      </nav>
      
      <section id="bio">
        <?php 
          // echo nl2br($bio);
          ?>
      </section>
      
      <section id="activity" class="hidden">
        <p>Most recent actions:</p>
        
        <p class="activity">@10:15PM - Submitted a news article</p>
        
        <p class="activity">@9:50PM - Submitted a news article</p>
        
        <p class="activity">@8:15PM - Posted a comment</p>
        
        <p class="activity">@4:30PM - Added <strong>someusername</strong> as a friend</p>
        
        <p class="activity">@12:30PM - Submitted a news article</p>
      </section>
      
      <section id="friends" class="hidden">
        <p>Friends list:</p>
        
        <?php $friends;?>
      </section>
      
      <section id="settings" class="hidden">
<div class="users form">
<form action="<?php echo '/users/edit/' . $id;?>" id="UserInfoForm" method="post" enctype="multipart/form-data" accept-charset="utf-8">

        <?php 
        echo $this->Form->hidden('id', array('value' => $id));
        echo $this->Form->input('username', array('value' => $uname, 'readonly' => 'readonly', 'label' => 'Usernames cannot be changed!'));
        
        echo $this->Form->input('email',  array('value' => $email));
        
        echo $this->Form->input('password_update', array( 'label' => 'New Password (leave empty if you do not want to change)', 'maxLength' => 255, 'type'=>'password','required' => 0));
        
        echo $this->Form->input('password_confirm_update', array('label' => 'Confirm New Password *', 'maxLength' => 255, 'title' => 'Confirm New password', 'type'=>'password','required' => 0));

        // echo $this->Form->textarea('bio', array('value' => $bio, 'label' => 'Edit Bio', 'maxLength' => 400, 'rows'=>10, 'type' => 'text', 'required' => 0));?>
    <br> <?php

echo $this->Form->input('image', array('label' => 'Add profiel picture',  'type' => 'file', 'required' => 0));?> <br> <?php
 
        
        echo $this->Form->submit('Edit User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
<?php echo $this->Form->end(); ?>
    <br>
    <?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $id), array(), __('Are you sure you want to delete' . $uname . '?')); ?>
</div>      
        </section>
    </div><!-- @end #content -->
  </div><!-- @end #w -->
     
<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>
