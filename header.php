<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.typekit.net/eyb3tpv.css">

<title><?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>
<body>
    <header class="container-fluid bg1">
  
    <nav class="navbar navbar-expand-md navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="index.html"> 
        <img src="http://206.189.45.97/~mesh21/sub1/wp-content/themes/fremantle_arts_centre/images/FAClogowhite.png" alt="Fremantle Arts Centre logo" height="36"></a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="events.html">Buy tickets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About the venue</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li> 
          </ul>
        </div> 
      </nav>
      <div class="container">
      <div class="container titletext">
      <h1> <span class="mainhead">Live Music At</span> <br> <span class="secondaryhead">Fremantle Arts Centre</span></h1>
    </div>
    </div> <!-- container -->
    <?php wp_head(); ?>
    </header>