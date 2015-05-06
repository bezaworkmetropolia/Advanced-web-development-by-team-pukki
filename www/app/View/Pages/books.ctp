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
<?php $uname = CakeSession::read("Auth.User.username");
?>

     <div class="twelve columns header_nav">
     <div class="row">
      
        <ul id="menu-header" class="nav-bar horizontal">
        
         <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/home">Home</a></li>
          <li class="active"><a href="http://www.probableimpossibilities.com/Index.php/pages/books">Books</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/about">About</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/products-page">Pages</a></li>
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
      
       <header>
              <h1 class="welcome_text">Books</h1>    
        </header>
      <section class="section_light">
      
      <div class="row">
  
		<div id="container">
        
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin1.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin2.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin3.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin4.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin5.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin6.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin7.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin8.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin9.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin10.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin11.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin12.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin1.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin9.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin6.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin3.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin4.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin5.jpg " alt="desc" ></a>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin2.jpg " alt="desc" ></a>
			</div>
            
            <!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src = " http://users.metropolia.fi/~bezaworh/images/pin10.jpg " alt="desc" ></a>
			</div>
            

            


		</div> <!-- end Masonry container -->
		</div>
        </section>
        
		<!-- end section -->
>	
        
        
		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/foundation.min.js" type="text/javascript">
		</script>
		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js" type="text/javascript">
		</script>
		<!-- Masonry for galleries -->
		<script src="javascripts/masonry.js" type="text/javascript">
		</script>
		<script type="text/javascript">
//<![CDATA[
      $(function(){
        var $container = $('#container');
        $container.imagesLoaded( function(){
          $container.masonry({
            itemSelector : '.box',
                        isFitWidth: true,
                        isAnimated: true
          });
        });
      });
  //]]>
  </script>
		<!-- END Masonry -->
		</body>
		</html>