<?php

/* 
* Template Name: Front Page
* Our Story Page 
*/

get_header();
?>


<section class="our-story-one bg-padding-top">
<div class="container">
    <div class="row ">
        <div class="our-story-content center-content text-center">
            <h1 class="font-size-56"> Welcome to coreplus</h1>
            <p>We are all about making life easy for every Australian health provider.</p>
            <div class="center-content">
                <div class="our-story-hero-image">
                    <img src="<?php echo get_template_directory_uri(). "/images/our-story.svg" ?> "  alt="">
                </div>

            </div>
            
        </div>

    </div>
</div>
</section>

<section class="our-story-two bg-spacing-top">
    <div class="container text-center">
        <div class="section-spacing">
            <h1 class="font-size-56">Who We Are</h1>
            <p class="bg-spacing-top-30 ">Since its inception in 2009, coreplus quickly became a standout in the allied health space with a drive to connect and align with the evolving Australian digital health landscape and the needs of the service providers within the sphere. At present, thousands of medical practitioners across Australia use coreplus everyday to transfer their tedious paper-based workflows to the digital health sphere and dedicate themselves to growing their business and focusing their time towards what really matters, providing quality healthcare to their patients.</p>

          <div class="download-brandbook">
            <a href="#"> Download Brandbook &nbsp;&nbsp; <i class="fas fa-cloud-download-alt"></i></a>
          </div>
               
           
        </div>

    </div>
</section>

<section>
    <div class="container bg-spacing-top">
        <hr class="border-color" >
    </div>
</section>

<section class="who-we-are">
    <div class="container ">
        <div class="row">
            <div class="col-lg-5 col-md-7 col-sm-12 center-content">
                <div class="who-we-are-image">
                    <img src="<?php echo get_template_directory_uri(). "/images/practitioners.svg" ?>" alt="">
                </div>
                
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12 center-content">
                <div class="text-center">
                    <h1>Who We Serve</h1>
                </div>
                
                <p>Coreplus caters to all the modern health professionals who are seeking digital tools that enable them to manage their practice efficiently and effectively, provide quality patient care and much more.</p>
                <p><b><i style="color: black;">
                    “It doesn’t matter what type of health provider you are, coreplus can scale and grow to suit your needs now and into the future, it’s never been easier.”</i></b>
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <hr class="border-color" >
    </div>
</section>

<section class="mission-vision">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="mv-div our-mission">
                    <img src="<?php echo get_template_directory_uri(). "/images/mission.svg" ?>" class="similar-height" alt="">
                    <h5>Our Mission</h5>
                    <p>To enable Allied Health Practices to utilize their preferred tools to improve clinical outcomes for patients.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mv-div">
                    <img class="similar-height" src="<?php echo get_template_directory_uri(). "/images/vision.svg" ?>" alt="">
                    <h5>Our Vision</h5>
                    <p>To be the Australian leader in online health patient & practice management software as a service.</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container">
        <hr class="border-color" >
    </div>
</section>

<section>
    <div class="container"></div>
    <div class="row">
        <div  class="text-center what-we-believe">
            <h1>What We Believe</h1>
            <div style="max-width: 700px; margin:auto;">
                <p style="margin-top: 50px;">At coreplus, our core purpose is to connect, help and grow Australia's health providers using our core online patient & practice management system. The plus represents innovation supporting health billing & claiming, online add-ons, patient referrals & eHealth readiness. This is all so you, can have a "Practice Happy” experience.</p>

            </div>
            <div style="max-width: 700px; margin:auto;">
                <p><b><i style="color: black;">
                    By implementing and using coreplus and its partner network, you are freeing up time and money lost on admin, bespoke systems and managing inefficiency and ineffectiveness, creating the right dynamics so that, now and into the future, you “Practice Happy”.
                 </i> </b> </p>
            </div>
            
        </div>

    </div>
</section>

<section>
    <div class="container">
        <hr class="border-color" >
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="our-story-video text-center">
                <img src="<?php echo get_template_directory_uri(). "/images/our-story/video.svg" ?>" alt="">
            </div>
            <div class="our-brand-values text-center">
                <a href="<?php echo home_url('/our-values') ?>">Our Brand Values &#8594;</a>
            </div>

        </div>
    </div>
</section>


<?php 

get_footer();
?>