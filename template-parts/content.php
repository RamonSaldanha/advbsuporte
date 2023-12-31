<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KnowledgeCenter
 * @subpackage KnowledgeCenter
 * @since KnowledgeCenter 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('media'); ?>>
    <div class="media-content">
        <p class="title is-6">
            <!-- create img tag with src on url wordpress -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/document-microsoft.png" class="inline-icon">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </p>
    </div>
    <div class="media-right">
        <a href="<?php the_permalink();?>"><span class="kc-icon icon-long-arrow-right"></span></a>
    </div>
</article>