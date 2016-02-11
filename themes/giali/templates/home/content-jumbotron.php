<div class="jumbotron">
    <div class="mission">
        <?php $post = get_post(21); $content = apply_filters('the_content', $post->post_content); echo $content;?>
    </div>
</div>

<div class="mission-aside overlay">
    <?php $post = get_post(21); $content = apply_filters('the_content', $post->post_content); echo $content;?>
    <a href="<?php $bloginfo = get_bloginfo('url'); ?>contact/" class="btn btn-primary">Request An Appointment</a>
</div>