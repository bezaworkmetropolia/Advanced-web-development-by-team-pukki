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
          <li class="active"><a href="http://www.probableimpossibilities.com/Index.php/pages/contact">Contact</a></li>
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
              <h1 class="welcome_text">Contact Us!</h1>    
        </header>
      <section class="section_light">
            

      <div class="row">
        <div class="six columns">
          <<h3>Address</h3>

          <p><strong>Business INC</strong></p>

          <p>Telephone: 99 88 77 66<br />
          E-mail: lingdinglinh@doe.com</p>

          <p><strong>Office: mon-fri 10.00 - 16.30</strong><br />
          <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum porttitor lacus.</em></p>
          
          <!-- Contact Form -->
          
          
          <h3>Contact Form</h3>

          <!-- Row Layout for forms -->
          <form>
            <label>Name</label>
            <input type="text" placeholder="John Doe" />
            <label>Address</label>
            <input type="text" class="twelve" placeholder="Street" />
            <div class="row">
              <div class="six columns">
                <input type="text" placeholder="City" />
              </div>
              <div class="three columns">
                <input type="text" placeholder="State" />
              </div>
              <div class="three columns">
                <input type="text" placeholder="ZIP" />
              </div>
            </div>
            <textarea placeholder="Message"></textarea>
            <input type="submit" value="Submit" class="button success" />
          </form>
          
        </div>

        <div class="six columns">
          <h3>Where to find us</h3><iframe src=
          "http://maps.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=Dieter+Schneider,+Hafstadvegen+34,+F%C3%B8rde&amp;aq=0&amp;oq=hafstadvegen+34+&amp;sll=61.450282,5.85535&amp;sspn=0.008368,0.027874&amp;g=hafstadvegen+34&amp;ie=UTF8&amp;hq=Dieter+Schneider,&amp;hnear=Hafstadvegen+34,+6800+F%C3%B8rde,+Sogn+og+Fjordane&amp;t=m&amp;ll=61.453106,5.857172&amp;spn=0.009536,0.019913&amp;z=15&amp;iwloc=A&amp;output=embed"
          style="width:400px; height:375px; border:0"></iframe><br />
          <small><a style="color: #0000ff; text-align: left;" href=
          "http://maps.google.no/maps?f=q&amp;source=embed&amp;hl=no&amp;geocode=&amp;q=Dieter+Schneider,+Hafstadvegen+34,+F%C3%B8rde&amp;aq=0&amp;oq=hafstadvegen+34+&amp;sll=61.450282,5.85535&amp;sspn=0.008368,0.027874&amp;g=hafstadvegen+34&amp;ie=UTF8&amp;hq=Dieter+Schneider,&amp;hnear=Hafstadvegen+34,+6800+F%C3%B8rde,+Sogn+og+Fjordane&amp;t=m&amp;ll=61.453106,5.857172&amp;spn=0.009536,0.019913&amp;z=15&amp;iwloc=A">
          Enlarge map</a></small>
        </div>
      </div>

        </section>
        
		<!-- end section -->
        


  
</body>
</html>