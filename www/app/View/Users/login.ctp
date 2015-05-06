<?php echo $this->Html->css('login'); ?>
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
      
        </ul>
        
        <script type="text/javascript">
         //<![CDATA[
         $('ul#menu-header').nav-bar();
          //]]>
        </script>
        
      </div>  
      </div>
      
</nav>
<div class="row">
    <div class="five columns">

<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<?php
 echo $this->Html->link( "Register Here",   array('action'=>'add') ); 

?>
</div>
    <!--<div class="seven columns">

<!-- app/View/Users/add.ctp -->
<!--<div class="users form">
 
<!--<form action="/users/add" id="UserAddForm" method="post" accept-charset="utf-8">
    // <fieldset>
        // <legend><?php
//		echo __('Add User'); ?></legend>
        // <?php
//		echo $this->Form->input('username');
        // echo $this->Form->input('email');
        // echo $this->Form->input('password');
        // echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
        // echo $this->Form->input('role', array(
            // 'options' => array( 'User' => 'User', 'Admin' => 'Admin')
        // ));
         
       
// ?>
    <!--</fieldset>
   <?php 
	 // echo $this->Form->submit('Add User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); ?>
// <?php 
//echo $this->Form->end(); ?>
// </div>
// <?php 
// if($this->Session->check('Auth.User')){
// echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') ); 
// echo "<br>";
// echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
// }else{
// echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
// }
// ?>
<?php /**
if($this->Session->check('Auth.User')){
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
} **/
?>



    </div>
</div>