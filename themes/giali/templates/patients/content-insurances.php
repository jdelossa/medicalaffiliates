<div id="insurances">
    <h4><span><?php $post = get_post(40); $title = apply_filters('the_title', $post->post_title); echo $title;?></span></h4>
    <div class="insurances aetna"></div>
    <div class="insurances agewell"></div>
    <div class="insurances bluecross"></div>
    <div class="insurances cigna"></div>
    <div class="insurances emblemHealth"></div>
    <div class="insurances fdny"></div>
    <div class="insurances ghi"></div>
    <div class="insurances healthrepublic"></div>
    <div class="insurances hip"></div>
    <div class="insurances magnacare"></div>
    <div class="insurances medicare"></div>
    <div class="insurances oscar"></div>
    <div class="insurances oxford"></div>
    <div class="insurances united"></div>
    <div class="insurances vytra"></div>
</div>
<!-- Insurance Post -->
<?php $post = get_post(40); $content = apply_filters('the_content', $post->post_content); echo $content;?>
<!-- End Insurance Post -->