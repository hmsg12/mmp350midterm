<?php
/**
 * Template part for displaying MY posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sample_Theme
 */

?>

<div class="myPostContainer" id="id-<?php the_ID(); ?>" >
    
    
    <div class="myPostTitle">
    <?php 
    the_title();
    ?>
    </div>

    <div class="myPostContent">
    <?php
    the_content();
    ?>

    </div>
        <div class="postInfo">
    By <?php the_author() ?> on 
    <?php the_date( 'F j, Y g:i A' ) ?>

    </div>
</div><br>