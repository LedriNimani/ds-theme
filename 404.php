<?php get_header();?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Page Not Found!</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="404" style="width:100%; padding-top: 150px;">   
            </div>
            <div class="col-4">
                  <?php
                      get_search_form();
                  ?>
            </div>
        </div>
        
    </div>
<?php get_footer();?>