<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="entry-content">
      <div class="text-center">
        <?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'single-image')); ?> 
      </div>
    <div class="content">
        <?php the_content(); ?>
    </div>
      <div class="physician-information">
        <div class="separator line-separator"></div>

          <?php if (types_render_field("doc-hours", array('raw' => 'true'))) { ?>
              <p class="header">Office Hours: </p><p><?= types_render_field("doc-hours", array('raw' => 'true')); ?></p>
          <?php } ?>

          <?php if (types_render_field("doc-email", array('raw' => 'true'))) { ?>
              <p class="header">Email: </p><p><a href="mailto:<?= types_render_field("doc-email", array('raw' => 'true')); ?>"><?= types_render_field("doc-email", array('raw' => 'true')); ?></a></p>
          <?php } ?>

          <?php if (types_render_field("doc-phone", array('raw' => 'true'))) { ?>
              <p class="header">Phone: </p><p><a href="tel:<?= types_render_field("doc_phone"); ?>"><?= types_render_field("doc-phone", array('raw' => 'true')); ?></a></p>
          <?php } ?>

          <?php if (types_render_field("doc-undergrad", array('raw' => 'true'))) { ?>
              <p class="header">Undergraduate: </p><p><?= types_render_field("doc-undergrad", array('raw' => 'true')); ?></p>
          <?php } ?>

          <?php if (types_render_field("doc-grad", array('raw' => 'true'))) { ?>
              <p class="header">Graduate: </p><p><?= types_render_field("doc-grad", array('raw' => 'true')); ?></p>
          <?php } ?>

          <?php if (types_render_field("doc-intern", array('raw' => 'true'))) { ?>
              <p class="header">Internships: </p><p><?= types_render_field("doc-intern", array('raw' => 'true')); ?></p>
          <?php } ?>

          <?php if (types_render_field("doc-fellow", array('raw' => 'true'))) { ?>
              <p class="header">Fellowships: </p><p><?= types_render_field("doc-fellow", array('raw' => 'true')); ?></p>
          <?php } ?>

          <?php if (types_render_field("doc-societies", array('raw' => 'true'))) { ?>
              <p class="header">Medical Societies: </p><p><?= types_render_field("doc-societies", array('raw' => 'true')); ?></p>
          <?php } ?>

          <?php if (types_render_field("doc-boards", array('raw' => 'true'))) { ?>
              <p class="header">Board Certifications: </p><p><?= types_render_field("doc-boards", array('raw' => 'true')); ?></p>
          <?php } ?>

          <?php if (types_render_field("doc-affiliations", array('raw' => 'true'))) { ?>
              <p class="header">Affiliations: </p><p><?= types_render_field("doc-affiliations", array('raw' => 'true')); ?></p>
          <?php } ?>

          <?php if (types_render_field("doc-exp", array('raw' => 'true'))) { ?>
              <p class="header">Years of Experience: </p><p><?= types_render_field("doc-exp", array('raw' => 'true')) ;?></p>
          <?php } ?>

          <?php if (types_render_field("doc-publications", array('raw' => 'true'))) { ?>
              <p class="header">Publications: </p><p><?= types_render_field("doc-publications", array('raw' => 'true')) ;?></p>
          <?php } ?>

          <?php if (types_render_field("doc-health-grades", array('raw' => 'true'))) { ?>
              <p class="header">External Links: </p>
                <div class="col-lg-3">
                    <p><a href="<?= types_render_field("doc-health-grades", array('raw' => 'true')); ?>" target="_blank">Healthgrades <i class="fa fa-external-link"></i></a></p>
                </div>

                <?php if (types_render_field("doc-google", array('raw' => 'true'))) { ?>
                  <div class="col-lg-3">
                    <p><a href="<?= types_render_field("doc-google", array('raw' => 'true')); ?>" target="_blank">Google <i class="fa fa-external-link"></i></a></p>
                  </div>
                <?php } ?>

                <?php if (types_render_field("doc-facebook", array('raw' => 'true'))) { ?>
                    <div class="col-lg-3">
                        <p><a href="<?= types_render_field("doc-facebook", array('raw' => 'true')); ?>" target="_blank">Facebook <i class="fa fa-external-link"></i></a></p>
                    </div>
                <?php } ?>

                <?php if (types_render_field("doc-youtube", array('raw' => 'true'))) { ?>
                    <div class="col-lg-3">
                        <p><a href="<?= types_render_field("doc-youtube", array('raw' => 'true')); ?>" target="_blank">YouTube <i class="fa fa-external-link"></i></a></p>
                    </div>
                <?php } ?>

                <?php if (types_render_field("doc-linkedin", array('raw' => 'true'))) { ?>
                    <div class="col-lg-3">
                        <p><a href="<?= types_render_field("doc-linkedin", array('raw' => 'true')); ?>" target="_blank">LinkedIn <i class="fa fa-external-link"></i></a></p>
                    </div>
                <?php } ?>

                <?php if (types_render_field("doc-twitter", array('raw' => 'true'))) { ?>
                    <div class="col-lg-3">
                      <p><a href="<?= types_render_field("doc-twitter", array('raw' => 'true')); ?>" target="_blank">Twitter <i class="fa fa-external-link"></i></a></p>
                    </div>
                <?php } ?>

                <?php if (types_render_field("doc-personal", array('raw' => 'true'))) { ?>
                  <div class="col-lg-3">
                    <p><a href="<?= types_render_field("doc-personal", array('raw' => 'true')); ?>" target="_blank">Personal Site <i class="fa fa-external-link"></i></a></p>
                  </div>
                <?php } ?>
          <?php } ?>
      </div>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
