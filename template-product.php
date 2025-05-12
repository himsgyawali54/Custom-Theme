
<?php
//Template Name: Product
   get_header();
?>
   <main id="other-pages">
      <section id="other-pages__hero">
        <div class="container">
          <div class="row g-4 g-md-5 align-items-center justify-content-center">
            <div class="col-12">
              <h1>Our products</h1>
              <h2>Perfect <span>solution  </span>for all business sizes  </h2>
              <p>
                News From impact And Around The World Of Web Design And Online
                Marketing.
              </p>
              <a href="#contact-form">
                <button class="btn-all mt-4">Get Free Proposal</button>
              </a>
            </div>
           
          </div>
        </div>
      </section>
      <section id="product-grid">
        <div class="container">
          <div class="section-heading">
            <h2>Our Products List</h2>
          </div>
          <div class="row g-4 g-md-5">
                <?php 
                $wpproduct= array(
                    'post_type' => 'product',
                    'post_status' => 'publish'
                );
                $productquery= new WP_Query($wpproduct);
                while($productquery -> have_posts())
                {
                  $productquery -> the_post();
                ?>
                <div class="col-12 col-md-6 pt-5">
                <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <div class="card-body">
                <?php if (has_post_thumbnail()) {
            the_post_thumbnail('large', ['class' => 'img-fluid']);
          } ?>
                  <h2 class="card-title"><?php the_title(); ?></h2>
                        <p class="card-meta"><?php echo get_the_date(); ?></p>
                        <p class="card-text"> <?php 
    $excerpt = get_the_excerpt(); 
    echo wp_trim_words( strip_tags($excerpt), 15, '...' ); 
  ?></p>
  <div class="mt-5"><a href="<?php the_permalink(); ?>" class="blogs-btn-all "> Read more</a></div>
                </div>
                
              </div>
              <?php 
                }
                ?>

            </div>
            
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
    
  
