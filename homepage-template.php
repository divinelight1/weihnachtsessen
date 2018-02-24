<?php
/*
Template Name: Homepage Template;
*/
include('header.php');
 ?>
 <div class="col-md-12">
   <div class="extra-nav">
      <nav>
         <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
      </nav>
   </div>
 </div>


 <?php include('footer.php'); ?>
