<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');

$uname = CakeSession::read("Auth.User.username");
?>

<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <meta charset="utf-8" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>AWP Booky 2015</title>  

  
  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

<!-- ######################## Main Menu ######################## -->
 
<nav class="top-bar" data-topbar role="navigation">

     <div class="twelve columns header_nav">
         <div class="row">
      
        <ul id="menu-header" class="nav-bar horizontal">
        
         <li class="active"><a href="http://www.probableimpossibilities.com/Index.php/pages/home">Home</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/books">Books</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/about">About</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/products-pages">Pages</a></li>
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
      
      
<!-- ######################## Header ######################## -->
        
        <header>
              <h1 class="heading_supersize">BOOKY 2015</h1>
              <h2 class="welcome_text">“The more that you read, the more things you will know. The more that you learn, the more places you'll go.”
-Dr. Seuss</h2>    
        </header>
        
<!-- ######################## Section ######################## -->
     
    <section class="section_light" style="height: 122px;">
   
        <div class="row">
        
         <div class="four columns">
            <h3><a href="favorites.html"><span class="dropcap_red lsf-icon-dropcap" title="good"></span> Favorites</h3>
            <p></p>
         </div>
         
      
          <div class="four columns">
            <h3><a href="books.html"><span class="dropcap_black lsf-icon-dropcap" title="memo"></span> Genre</h3>
            <p> </p>
          </div>
          
          
          <div class="four columns">
            <h3><a href="must_read.html"><span class="dropcap_black lsf-icon-dropcap" title="book"></span> Must Read</h3>
            <p></p>
          </div>
        
        </div>
        
    </section><br>



   <section  class="section_dark">
   
      <div class="row"> 
      
      <h2>Latest Books by Our Members</h2>
      
          <div class="two columns">
          <a href="#" class="th"><img src = " http://users.metropolia.fi/~bezaworh/images/thumb1.jpg " alt="desc" height="223px" width="133px"></a>
          </div>
		  <div class="two columns">
          <a href="#" class="th"><img src = " http://users.metropolia.fi/~bezaworh/images/thumb2.jpg " alt="desc" height="223px" width="133px"></a>
          </div>
			<div class="two columns">
          <a href="#" class="th"><img src = " http://users.metropolia.fi/~bezaworh/images/thumb3.jpg " alt="desc" height="223px" width="133px"></a>
          </div>
          <div class="two columns">
          <a href="#" class="th"><img src = " http://users.metropolia.fi/~bezaworh/images/thumb4.jpg " alt="desc" height="223px" width="133px"></a>
          </div>
       <div class="two columns">
          <a href="#" class="th"><img src = " http://users.metropolia.fi/~bezaworh/images/thumb5.jpg " alt="desc" height="223px" width="133px"></a>
          </div>
		  <div class="two columns">
          <a href="#" class="th"><img src = " http://users.metropolia.fi/~bezaworh/images/thumb6.jpg " alt="desc" height="223px" width="133px"></a>
          </div>
          
          
          
         
    
          
        
          
          

      
      </div>
      
    </section>
      
<!-- ######################## Section ######################## -->

<section class="section_main">

      <h2 style="text-align:center">Discover Hidden Treasures</h2>
      
      <div class="row">
      
          <article class="six columns">
                <div class="panel">
                    <h3>Lorem Ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus.</p>
                  <a href="#" class="button secondary small radius">Learn More &raquo;</a>
                </div>
          </article>
          
              
          <article class="six columns">
                <div class="panel">
                    <h3>Lorem Ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus.</p>
                  <a href="#" class="button secondary small radius">Learn More &raquo;</a>
                </div>
          </article>
  
      </div>
      
      
</section>


</body>
</html>
