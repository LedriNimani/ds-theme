<?php   get_header();?>



<h1> Hello </h1>

<div>
<?php  
  if(have_posts()):
    while(have_posts()): the_post();
?>

<h2><?php the_title(); ?></h2>


<small class="post-categories"><?php the_time('Y/m/d')?></small>
<?php   ?>

<p><?php   the_content(); ?></p>



<?php endwhile; ?>
<?php endif;?>
  </div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">

<img class= "d-block w-100" src="<?php bloginfo("template_directory");?>/img/slide.png" alt="First Slide">
</div>
<div class="carousel-item">

<img src="" alt="Second slide">
</div>
<div class="carousel-item ">

<img src="" alt="Third slide">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>


</div>











<div id="sidebar-primary" class="sidebar">
  <?php   if ( is_active_sidebar('primary')); ?>
  <?php   dynamic_sidebar('primary'); ?>
  <?php    else: ?>
    <!-- Add Some text or widgets -->
     <?php  endif; ?>
</div>



<div id="primary" class="sidebar">
     <?php do_action('before_sidebar');?>
     <?php if(! dynamic_sidebar('sidebar_primary'));?>
        <aside id="search" class="widget widget_search">
          <?php get_search_form();?>  
        </aside>

        <aside id="archives" class="widget">
          <h3 class="widget_title"><?php  _e('Archives', 'shape');?></h3>
          <ul>
            <?php wp_get_archives(array('type' => 'monthly'));?>
          </ul>

        </aside>
        <aside id="meta" class="widget">
          <h3 class="widget_title"><?php _e('Meta', 'shape'); ?></h3>
          <ul>
            <?php wp_register();?>
            <li><?php wp_loginout();?></li>
            <?php wp_meta();?>
          </ul>
        </aside>

        <?php endif;?>
</div>

<?php   get_footer();?>