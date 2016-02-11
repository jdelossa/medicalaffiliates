<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<!-- Page Content -->
<div id="wrapper">
   <div class="container-fluid">
      
      <div class="row">
         <div class="col-sm-12">
            <div class="jumbotron"></div>
         </div>
      </div>

      <section id="about-us">
         <div class="row">
            <div class="col-sm-8 col-centered">
                  <h3 class="header"><?php $post = get_post(2); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
                  <div class="content">
                     <?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                  </div>
            </div>
         </div>
      </section>

      <section id="medical-staff">
         <div class="row">
            <div class="col-sm-8 col-centered">
                  <h3 class="header"><?php $post = get_post(33); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
                  <div class="content">
                     <?php $post = get_post(33); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                  </div>
            </div>
         </div>
      </section>

      <?php get_template_part('doctor-images'); ?>

      <section id="patient-information">
         <div class="row">
            <div class="col-sm-8 col-centered">
               <h3 class="header"><?php $post = get_post(27); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
               <div class="content">
                  <?php $post = get_post(27); $content = apply_filters('the_content', $post->post_content); echo $content;?>
               </div>
            </div>
         </div>
      </section>

      <div class="row">
         <div class="col-sm-8">
            <div class="sub-section">
               <h4 class="header">Accepted Insurance</h4>
               <div class="content">
                   <div class="insurances aetna"></div>
                   <div class="insurances bluecross"></div>
                   <div class="insurances cigna"></div>
                   <div class="insurances emblemHealth"></div>
                   <div class="insurances ghi"></div>
                   <div class="insurances hip"></div>
                   <div class="insurances magnaCare"></div>
                   <div class="insurances medicare"></div>
                   <div class="insurances multiPlan"></div>
                   <div class="insurances oxford"></div>
                   <div class="insurances vytra"></div>
               </div>
            </div>
         </div>

         <div class="col-sm-4">
            <div class="sub-section">
               <h4 class="header"><?php $post = get_post(30); $content = apply_filters('the_title', $post->post_title); echo $content;?></h4>
               <div>
                  <?php $post = get_post(30); $content = apply_filters('the_content', $post->post_content); echo $content;?>
               </div><br>
            </div>
         </div>
      </div><!-- /.row -->
         

      <div class="row">
         <div class="col-sm-12">
            <section id="contact-us" class="contact-header">
               <h3 class="header"><?php $post = get_post(36); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
               <div class="content">
                  <?php $post = get_post(36); $content = apply_filters('the_content', $post->post_content); echo $content;?>
               </div>
            </section>
         </div>
      </div><!-- /.row -->


   </div><!-- /.container-fluid -->

   <div class="map">
      <div id="map">
         <img src="#" alt="Static fallback image showing the location of South Shore Cardiovascular, West Islip"/>
      </div>
   </div>

</div><!-- /#wrapper -->

<?php 
  // No comments on homepage
  //comments_template();
?>

<?php get_footer(); ?>