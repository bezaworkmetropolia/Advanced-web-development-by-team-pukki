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

  <title>Theme by CssTemplateHeaven</title>
  
  
  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

<!-- ######################## Main Menu ######################## -->
 <?php $uname = CakeSession::read("Auth.User.username");
?>
<nav class="top-bar" data-topbar role="navigation">

     <div class="twelve columns header_nav">
     <div class="row">
      
        <ul id="menu-header" class="nav-bar horizontal">
        
         <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/home">Home</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/books">Books</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/about">About</a></li>
          <li class="active"><a href="http://www.probableimpossibilities.com/Index.php/pages/products-page">Pages</a></li>
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
      
      
<!-- ######################## Header ######################## -->
        
        <header>
              <h1 class="welcome_text">Popular Products</h1>    
        </header>
        
<!-- ######################## Section ######################## -->
   
       <section class="section_light">

        
			<div class="main">
				<div id="mi-slider" class="mi-slider">
					
					<ul>
						<li><a href="#"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb1.jpg', array('width' => '100', 'height' => '100', 'alt' => 'img01', 'style' => 'height:205px; width:150px')); ?>
                            <h4>Twilight</h4></a>
                        </li>
						<li><a href="#"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb2.jpg', array('width' => '100', 'height' => '100', 'alt' => 'img02', 'style' => 'height:205px; width:150px')); ?>
                            <h4>Harry Potter</h4></a></li>
						<li><a href="#"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb6.jpg', array('width' => '100', 'height' => '100', 'alt' => 'img03', 'style' => 'height:205px; width:150px')); ?>
                            <h4>Budapest</h4></a></li>
						<li><a href="#"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb5.jpg', array('width' => '100', 'height' => '100', 'alt' => 'img05', 'style' => 'height:205px; width:150px')); ?><h4>Hobbit</h4></a></li>
					</ul>
			
					<!--<ul>
						<li><a href="#"><img src="ItemSlider/images/5.jpg" alt="img05"><h4>Belts</h4></a></li>
						<li><a href="#"><img src="ItemSlider/images/6.jpg" alt="img06"><h4>Hats &amp; Caps</h4></a></li>
						<li><a href="#"><img src="ItemSlider/images/7.jpg" alt="img07"><h4>Sunglasses</h4></a></li>
						<li><a href="#"><img src="ItemSlider/images/8.jpg" alt="img08"><h4>Scarves</h4></a></li>
					</ul>-->
					
                    
					<nav>
						<a href="#">Favorite</a>
						<a href="#">Blog</a>
						<a href="#">Latest</a>
						<a href="#">Quotes</a>
					</nav>
                    
				</div>
			</div>
     
</section>
		
<!-- ######################## Section ######################## -->

   <section class="section_normal">
   
      <div class="row"> 
      
      <h2>Latest Products</h2>
      
      
		<div id="container">
			<!-- product box -->
			<div class='box photo col2'>
				<a href="product-single.html"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/prod_thumb.png', array('alt' => 'placeholder')); ?></a>
				<p>
					Product Name
				</p>
				<p style='text-align:center; margin-bottom:12px'>
					<a href='product-single.html' class='button small secondary round'>More Info &#187;</a>
				</p>
			</div>
			<!-- product box -->
			<div class='box photo col2'>
				<a href="product-single.html"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/prod_thumb.png', array('alt' => 'placeholder')); ?></a>
				<p>
					Product Name
				</p>
				<p style='text-align:center; margin-bottom:12px'>
					<a href='product-single.html' class='button small secondary round'>More Info &#187;</a>
				</p>
			</div>
			<!-- product box -->
			<div class='box photo col2'>
				<a href="product-single.html"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/prod_thumb.png', array('alt' => 'placeholder')); ?></a>
				<p>
					Product Name
				</p>
				<p style='text-align:center; margin-bottom:12px'>
					<a href='product-single.html' class='button small secondary round'>More Info &#187;</a>
				</p>
			</div>
			<!-- product box -->
			<div class='box photo col2'>
				<a href="product-single.html"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/prod_thumb.png', array('alt' => 'placeholder')); ?></a>
				<p>
					Product Name
				</p>
				<p style='text-align:center; margin-bottom:12px'>
					<a href='product-single.html' class='button small secondary round'>More Info &#187;</a>
				</p>
			</div>
			<!-- product box -->
			<div class='box photo col2'>
				<a href="product-single.html"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/prod_thumb.png', array('alt' => 'placeholder')); ?></a>
				<p>
					Product Name
				</p>
				<p style='text-align:center; margin-bottom:12px'>
					<a href='product-single.html' class='button small secondary round'>More Info &#187;</a>
				</p>
			</div>
			<!-- product box -->
			<div class='box photo col2'>
				<a href="product-single.html"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/prod_thumb.png', array('alt' => 'placeholder')); ?></a>
				<p>
					Product Name
				</p>
				<p style='text-align:center; margin-bottom:12px'>
					<a href='product-single.html' class='button small secondary round'>More Info &#187;</a>
				</p>
			</div>
			<!-- product box -->
			<div class='box photo col2'>
				<a href="product-single.html"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/prod_thumb.png', array('alt' => 'placeholder')); ?></a>
				<p>
					Product Name
				</p>
				<p style='text-align:center; margin-bottom:12px'>
					<a href='product-single.html' class='button small secondary round'>More Info &#187;</a>
				</p>
			</div>
			<!-- product box -->
			<div class='box photo col2'>
				<a href="product-single.html"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/prod_thumb.png', array('alt' => 'placeholder')); ?></a>
				<p>
					Product Name
				</p>
				<p style='text-align:center; margin-bottom:12px'>
					<a href='product-single.html' class='button small secondary round'>More Info &#187;</a>
				</p>
			</div>
		</div>
        
        </div>
        
        </section>
        

</footer>		  

		<script>
			jQuery.noConflict()(function($){	
                 $( '#mi-slider' ).catslider();
			});
		</script>
        
       
		<script type="text/javascript">
//<![CDATA[
      jQuery.noConflict()(function($){	
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