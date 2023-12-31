<div class="col-lg-12">
    <div class="pagination text-center">
        <?php the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( '<i class="las la-arrow-left"></i>', 'walpost' ),
            'next_text' => __( '<i class="las la-arrow-right"></i>', 'walpost' ),
            ) ); 
        ?>
    </div> 
</div>