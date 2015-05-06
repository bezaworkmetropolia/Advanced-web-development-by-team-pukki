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
<div class="users form">
<h1>Users</h1>
<table>
    <thead>
		<tr>
			<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'Username');?>  </th>
			<th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
			<th><?php echo $this->Paginator->sort('created', 'Created');?></th>
			<th><?php echo $this->Paginator->sort('modified','Last Update');?></th>
			<th><?php echo $this->Paginator->sort('role','Role');?></th>
			<th><?php echo $this->Paginator->sort('status','Status');?></th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>						
		<?php $count=0; ?>
		<?php foreach($users as $user): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			<td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
			<td><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?></td>
			<td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
			<td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
			<td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['modified']); ?></td>
			<td style="text-align: center;"><?php echo $user['User']['role']; ?></td>
			<td style="text-align: center;"><?php echo $user['User']['status']; ?></td>
			<td >
			<?php echo $this->Html->link(    "Edit",   array('action'=>'edit', $user['User']['id']) ); ?> | 
			<?php
				if( $user['User']['status'] != 0){ 
					echo $this->Html->link(    "Delete", array('action'=>'delete', $user['User']['id']));}else{
					echo $this->Html->link(    "Re-Activate", array('action'=>'activate', $user['User']['id']));
					}
			?>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($user); ?>
	</tbody>
</table>
<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
</div>				
<?php echo $this->Html->link( "Add A New User.",   array('action'=>'add'),array('escape' => false) ); ?>
<br/>
<?php 
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
?>