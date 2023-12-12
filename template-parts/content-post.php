<section class="post__section">     
     <div class="container">
            <div class="single__banner">
                <img alt="main banner" src="<?php the_field('main-banner'); ?>">
                <h1 class="single__post-title"><?php the_title(); ?></h1>
                <p class="single__post-time"><?php the_time('d.m.y'); ?></p>
            </div>
            <div class="single__container">
                <div class="post__content">
                    <?php the_content(); ?>
                    <?php 
                    $images = get_field('gallery');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $images ): ?>
                    if( $images ): ?>
                        <div class="single-post__slider2 swiper-container">
                            <ul class="swiper-wrapper " id="lightgallery">
                            <?php foreach( $images as $image_id ): ?>
                                <li class="swiper-slide">
                                    <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                            <div class="swiper-pagination"></div>  
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>        
                        </div>
                        <div thumbsSlider="" class="single-post__slider">
                            <ul class="swiper-wrapper ">
                            <?php foreach( $images as $image_id ): ?>
                                <li class="swiper-slide">
                                    <?php echo wp_get_attachment_image( $image_id ); ?>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                            <!-- <div class="swiper-pagination"></div>  
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>   -->
                        </div>
                    <?php endif; ?> 
                    <!-- <button id="show-more-buttom">ще фото</button>
                    <div id="additional-photos" style="display:none;"></div> -->
                </div>
               <?php get_template_part( 'template-parts/aside-posts'); ?>
            </div> 
      </div>
</section>

<?php get_template_part( 'template-parts/join-us'); ?>