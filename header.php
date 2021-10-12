<?php
// Header
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Asset Guide</title>

    <?php wp_head(); ?>
</head>
<body>
    
<!-- Header -->


<nav class="navbar navbar-expand-lg navbar-light sticky-top justify-content-between nav-section">
    <div class="cbag-logo">
        <a href="<?php echo home_url('/') ?>">
           <img src="<?php echo get_template_directory_uri(). "/images/site-logo/logo.svg"?> " alt="">
       </a> 
    </div>
    <div >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse cbag-menu" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="<?php if(is_home()){echo "current-page";} ?>" href="<?php echo home_url('/') ?>">Our Story</a>
            </li>
            <li class="nav-item">
                <a class="<?php if(is_page('our-values')){echo "current-page";} ?>" href="<?php echo home_url('/our-values') ?>">Our Values</a>
            </li>
            <li class="nav-item">
                <a class="<?php if(is_page('brand-assets-guide')){echo "current-page";} ?>" href="<?php echo home_url('/brand-assets-guide') ?>">Brand Assets Guide</a>
            </li>
            <li class="nav-item">
                <a class="<?php if(is_page('brand-assets-kit')){echo "current-page";} ?>" href="<?php echo home_url('/brand-assets-kit') ?>">Brand Assets Kit</a>
            </li>
            <!-- <li class="nav-item">
                <a id="btn-class" href="" class="btn-class">Help/FAQ</a>
            </li> -->
          </ul>
        </div>
    </div>
  </nav>


<!-- End of Header -->