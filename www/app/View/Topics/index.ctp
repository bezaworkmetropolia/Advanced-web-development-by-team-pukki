
<?php	

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

	App::import('Controller', 'Users');
	App::uses('Debugger', 'Utility');
	$uname = CakeSession::read("Auth.User.username");
?>
<html class="no-js" lang="en">

<head>
	 <meta charset="utf-8" />
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
	<title>AWP Booky index 2015</title> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
</head>

<body>
<nav class="top-bar" data-topbar role="navigation">

     <div class="twelve columns header_nav">
         <div class="row">
      
        <ul id="menu-header" class="nav-bar horizontal">
        
         <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/home">Home</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/books">Books</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/about">About</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/products-page">Pages</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/blog">Blog</a></li>
		   <li class=""><a href="http://www.probableimpossibilities.com/Index.php/topics/index">Forum</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/contact">Contact</a></li>
            
            <?php 
if($this->Session->check('Auth.User')){
          echo'<li class="has-dropdown" style="float:right; margin-right:1%;"><a href="#">';
    echo $uname . "</a>";
    echo "<ul class='dropdown'> <li>";
    
    echo $this->Html->link( "Profile",   '/users/info' );
    echo '</li><li>'.$this->Html->link( "Logout",   '/users/logout' ).'</li></ul>';
    }else{  echo'<li class="right" style="float:right">';
    echo $this->Html->link( "Login",   array('controller' => 'users', 'action'=>'login') ); 

}
              ?></li>
              

        </ul>
        
        <script type="text/javascript">
         //<![CDATA[
         $('ul#menu-header').nav-bar();
          //]]>
        </script>
        
      
    </div>
      
</nav>
<header>
              
           <h2 class="subheader" align="center">Type in what is new in the Digital world</h2>    
   </header>
<div class="panel clearfix">
	<h3 class="text-left"> <?php echo $this->Html->link('Create Topic', array('controller'=>'topics','action'=>'add')); ?> </h3>
 </div>
<br>

<table>
<thead>
	<tr>
		<th width= "400">Title</th>
		<th width= "300">User Name</th>
		
		<th width= "300">Created</th>
		<th width= "300">Modified</th>
			<?php if(AuthComponent::user('role') == 2): ?>
				<th>Published</th>
				<th>Edit</th>
				<th>Delete</th>
			<?php endif; ?>	
	</tr>
</thead>
<tbody>
	<?php foreach($topics as $topic) : ?>
	<tr>
	<?php if(AuthComponent::user('role') == 2): ?>
		<td><?php echo $this->Html->link($topic['Topic']['title'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?> </td>	
		<td><?php echo $topic['User']['username']; ?></td>
		
		<td><?php echo $topic['Topic']['created']; ?></td>
		<td><?php echo $topic['Topic']['modified']; ?></td>
		<?php if(AuthComponent::user('role') == 2): ?>
		<td><?php echo $topic['Topic']['visible']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('controller'=>'topics','action'=>'edit',$topic['Topic']['id'])); ?> </td>	
		<td><?php echo $this->Form->postLink('Delete', array('controller'=>'topics','action'=>'delete',$topic['Topic']['id']), array('confirm'=>'Are you sure you want to delete this Topic' )); ?> </td>	
	<?php endif; ?>
	</tr>
<?php endif; ?>
<?php if(AuthComponent::user('role') == 1 || !AuthComponent::user() ): ?>
<?php if($topic['Topic']['visible'] == 1) : ?>
<td><?php echo $this->Html->link($topic['Topic']['title'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?> </td>	
		<td><?php echo $topic['User']['username']; ?></td>
		
		<td><?php echo $topic['Topic']['created']; ?></td>
		<td><?php echo $topic['Topic']['modified']; ?></td>
		<?php if(AuthComponent::user('role') == 2): ?>
		<td><?php echo $topic['Topic']['visible']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('controller'=>'topics','action'=>'edit',$topic['Topic']['id'])); ?> </td>	
		<td><?php echo $this->Form->postLink('Delete', array('controller'=>'topics','action'=>'delete',$topic['Topic']['id']), array('confirm'=>'Are you sure you want to delete this Topic' )); ?> </td>	
<?php endif; ?>	
	</tr>

<?php endif; ?>	
<?php endif; ?>	
 <?php endforeach; ?>
 <?php unset($topic); ?>
 </tbody>
</table>