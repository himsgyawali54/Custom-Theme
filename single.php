<?php 
get_header();
$category = get_categories(); 
?>
  <main id="single-blog">
      <section id="single-blog-content">
        <div class="container">
          <div class="row pt-5">
            <div class="col-12">
                <?php
            the_post_thumbnail('large', ['class' => 'img-fluid']);
            ?>
              
            </div>
            <div class="col-12">
              <div class="blog-category text-secondary text-center py-4">
              <span class="pe-3 d-inline-block">
    <i class="bi bi-person"></i> By: <?php the_author(); ?>
  </span>
                <i class="bi-calendar-week pe-3 d-inline-block"> <?php echo get_the_date(); ?></i>
                <i class="bi-folder d-inline-block"> SEO</i>
              </div>
           
            </div>
            <article>
              <div class="row single-post-row">
                <div class="col-12 col-md-8">
                <h1><?php the_title(); ?></h1>
                  <p>
                    <?php the_content(); ?>
                  </p>
                 
                    <?php comment_form(); ?>
                </div>
                <div class="col-12 col-md-4 ">
                  <div class="sidebar">
                  <?php dynamic_sidebar('sidebar') ?>
                  </div>
                  <h2 class="pb-4">Category</h2>
                  <div class="category-list">
                  <?php 
                  foreach ($category as $categoryvalue){
                   
                   ?>
<ul><li>
                  <a href="<?php echo get_category_link( $categoryvalue -> term_id); ?>">
                  <p><?php echo $categoryvalue -> name; ?> ( <?php echo $categoryvalue -> count; ?> ) </p>

                  </a></li></ul>
                  <?php } ?>
                </div>
                </div>
              </div> 
            </article>

            <div class="col-12 recent-posts">
              <hr />
              <div class="row g-4 justify-content-around">
                <div class="col-12 col-md-4">
                  <p class="text-secondary">&lang; Previous Post</p>
                  <h4>
                    <a
                      href="how-to-calculate-conversion-rate"
                      class="stretched-link"
                      >How Do You Calculate Conversion Rate? Best Practices
                      Revealed!</a
                    >
                  </h4>
                </div>
                <div class="col-12 col-md-4">
                  <p class="text-secondary text-end">Next Post &rang;</p>
                  <h4 class="text-end">
                    <a
                      href="what-is-google-eeat-and-why-is-it-important-for-seo"
                      class="stretched-link"
                      >What is E-E-A-T? Why is E-E-A-T Important for SEO in
                      2023?</a
                    >
                  </h4>
                </div>
              </div>
              <hr />
            </div>
           
          </div>
        </div>
      </section>
    </main>
<?php 
get_footer();
?>