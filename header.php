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

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <?php wp_head(); ?>
</head>
<body>
    
<!-- Header -->


<nav class="navbar navbar-expand-lg navbar-light sticky-top justify-content-between nav-section">
    <div class="logo">
        <a href="<?php echo home_url('/') ?>">
           <img src="<?php echo get_template_directory_uri(). "/images/site-logo/logo.svg"?> " alt="">
       </a> 
    </div>
    <div >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse menu" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="<?php echo home_url('/') ?>">Our Story</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo home_url('/our-values') ?>">Our Values</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo home_url('/brand-assets-guide') ?>">Brand Assets Guide</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo home_url('/terms-conditions') ?>">Tutorials</a>
            </li>
            <li class="nav-item">
                <a id="btn-class" href="" class="btn-class">Help/FAQ</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>


<!-- End of Header -->