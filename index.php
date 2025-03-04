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













<?php   get_footer();?>