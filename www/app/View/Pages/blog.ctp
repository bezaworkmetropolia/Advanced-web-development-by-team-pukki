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
<?php $uname = CakeSession::read("Auth.User.username");
?>
<!-- ######################## Main Menu ######################## -->
 
<nav class="top-bar" data-topbar role="navigation">

     <div class="twelve columns header_nav">
     <div class="row">
      
        <ul id="menu-header" class="nav-bar horizontal">
        
         <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/home">Home</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/books">Books</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/about">About</a></li>
          <li class=""><a href="http://www.probableimpossibilities.com/Index.php/pages/products-pages">Pages</a></li>
          <li class="active"><a href="http://www.probableimpossibilities.com/Index.php/pages/blog">Blog</a></li>
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

        
      </div>  
      </div>
      
</nav>
    <!-- END main menu -->
        
<!-- ######################## Header (featured posts) ######################## -->
     
<header>
   

        <div class="row">
        
        <h1>Most Read The Last 24 hrs.</h1>
        
<article class="four columns featured_post">
        
             <h3>Lorem Ipsum</h3> 
    <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/demo2_small.jpg', array('alt' => 'desc', 'style' => 'width:100%')); ?>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
              
             <div class="post_meta">
                 <span class="lsf-icon" title="calender">20th oct 2012</span> 
                 <span class="lsf-icon" title="user" style="margin-left:15px"><a href="#">Admin</a></span>
                 <span class="lsf-icon" title="comment" style="margin-left:15px"><a href="#">5</a></span>
             </div> 
         
</article>

         
      
<article class="four columns featured_post">
        
             <h3>Mauris Phatera</h3> 
              <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/demo3_small.jpg', array('alt' => 'desc', 'style' => 'width:100%')); ?>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
              
             <div class="post_meta">
                 <span class="lsf-icon" title="calender">20th oct 2012</span> 
                 <span class="lsf-icon" title="user" style="margin-left:15px"><a href="#">Admin</a></span>
                 <span class="lsf-icon" title="comment" style="margin-left:15px"><a href="#">5</a></span>
             </div> 
         
</article>
          
          

<article class="four columns featured_post">
        
             <h3>Dolores et Mollis</h3> 
              <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/demo1_small.jpg', array('alt' => 'desc', 'style' => 'width:100%')); ?>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
              
             <div class="post_meta">
                 <span class="lsf-icon" title="calender">20th oct 2012</span> 
                 <span class="lsf-icon" title="user" style="margin-left:15px"><a href="#">Admin</a></span>
                 <span class="lsf-icon" title="comment" style="margin-left:15px"><a href="#">5</a></span>
             </div> 
         
</article>


        </div>
        
</header>
      
<!-- ######################## Section ######################## -->

<section>

  <div class="section_main">
   
      <div class="row">
      
          <section class="eight columns">
          
          <h2>Latest</h2>
          
          <article class="blog_post">
          
             <div class="three columns">
             <a href="#" class="th">
                 <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb1.jpg', array('alt' => 'desc')); ?></a>
             </div>
             <div class="nine columns">
              <a href="#"><h3>Lorem Ipsum</h3></a>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
              </div>
              
          </article>
          
          <article class="blog_post">
          
             <div class="three columns">
             <a href="#" class="th"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb2.jpg', array('alt' => 'desc')); ?>></a>
             </div>
             <div class="nine columns">
              <a href="#"><h3>Lorem Ipsum</h3></a>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
              </div>
              
          </article>
          
          
          <article class="blog_post">
          
             <div class="three columns">
             <a href="#" class="th"><?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/pin2.jpg', array('alt' => 'desc')); ?></a>
             </div>
             <div class="nine columns">
              <a href="#"><h3>Lorem Ipsum</h3></a>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus. Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
              </div>
              
          </article>
          
          </section>
          
          <section class="four columns">
          <h2>Sidebar</h2>
             <div class="panel">
             <h3>heading</h3>
               <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus. Vivamus tortor tellus, rutrum sit amet mollis vel.</p> 
               
              <h3>Accordion Panel</h3>

            <ul class="accordion">
              <li class="active">
                <div class="title">
                  <h5>Accordion Panel 1</h5>
                </div>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </li>
              <li>
                <div class="title">
                  <h5>Accordion Panel 2</h5>
                </div>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </li>
              <li>
                <div class="title">
                  <h5>Accordion Panel 3</h5>
                </div>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
              </li>
            </ul>


               
             </div>
          </section>
          
      </div>
      
    </div>
      
</section>


<!-- ######################## Section ######################## -->

   <section>
   
      <div class="section_dark">
      <div class="row"> 
      
      <h2>Most viewed photos the last 24 hrs.</h2>
      
          <div class="two columns">
          <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb1.jpg', array('alt' => 'desc')); ?>
          </div>
          
          <div class="two columns">
          <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb2.jpg', array('alt' => 'desc')); ?>
          </div>
          
          <div class="two columns">
          <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb3.jpg', array('alt' => 'desc')); ?>
          </div>
          
          <div class="two columns">
          <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb4.jpg', array('alt' => 'desc')); ?>
          </div>
          
          <div class="two columns">
          <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb5.jpg', array('alt' => 'desc')); ?>
          </div>
          
          <div class="two columns">
          <?php echo $this->Html->image('http://users.metropolia.fi/~bezaworh/images/thumb6.jpg', array('alt' => 'desc')); ?>
          </div>

      
      </div>
      </div>
      
    </section>

		  


</body>
</html>