<?php
/**
 * Template Name: il-facile-membership
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */
 //get_header(); ?>
<script src="https://code.jquery.com/jquery.min.js"></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/corso-il-facile/style.css" media="screen" type="text/css" />
<?php include("corso-il-facile/corso.php") ?>
<style type="text/css">
.list-group-item-success{
  background: #FC535E;
  }
  a.list-group-item-success, button.list-group-item-success{
    color: white;
  }
  a.list-group-item-success:focus, a.list-group-item-success:hover, button.list-group-item-success:focus, button.list-group-item-success:hover{
   background: #AD4D53; 
  } 
  a.list-group-item-success:focus, a.list-group-item-success:hover, button.list-group-item-success:focus, button.list-group-item-success:hover{
   color: white; 
  }

.btn-primary{
  background: #FC535E;
}
#menu-toggle-2{
    position: absolute;
    left: -19px;
    color: #FC535E;
    top: -21px;
} 

.logo{
  display: block;
  text-indent: -9999px;
  width: 38px;
  height: 42px;
  background:url(http://localhost:8888/blog/wp-content/themes/corsidigrafica2016.0.3/img/logo.svg); 
  background-size: 38px 44px;
  float: left;
  margin-left: 13px;
  margin-top: 10px;
}
#sidebar-wrapper{
  background: #EDEDED;
}
.sidebar-nav li a{font-size: .7em;}
 
 </style>