<?php	

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

	App::import('Controller', 'Users');
	App::uses('Debugger', 'Utility');
	$uname = CakeSession::read("Auth.User.username");
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	 <meta charset="utf-8" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
   <title>AWP Booky view 2015</title> 
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
              
              <h2 class="welcome_text">“Lets talk about What is new in the book world?.”
</h2>    
        </header>
<h1> <?php  echo $topic['Topic']['title']; ?> </h1>
		<?php echo $this->Html->link('Create a post in this topic' , array('controller'=>'posts','action'=>'add',$topic['Topic']['id'])); ?>
		<br>
		
		<table>
		<tr><td>Sr .No.</td><td>User</td><td>Post</td></tr>
		<?php
			$counter = 1;
			 foreach($topic['Post'] as $post){
				$ucontroller = new UsersController;
				$uname = $ucontroller->getUsernameById($post['user_id']);
				
			echo "<tr><td>".$counter."</td><td>".$uname['User']['username']."</td><td>".$post['body']."</td></tr>";
			$counter++;
				
				}
			