<?php 
get_header();

?>
  <main id="other-pages">
    <section id="other-pages__hero">
        <div class="container">
          <div class="row g-4 g-md-5 align-items-center justify-content-center">
            <div class="col-12">
              <h1><?php the_title(); ?></h1>
             
             
                <p class="card-text"> <?php 
    $excerpt = get_the_excerpt(); 
    echo wp_trim_words( strip_tags($excerpt), 10, '.' ); 
  ?></p>
             
              <a href="#contact-form">
                <button class="btn-all mt-4">Get Free Proposal</button>
              </a>
            </div>
           
          </div>
        </div>
      </section>
      <section id="single-blog-content">
        <div class="container">
          <div class="row pt-5">
            <div class="col-12">
                <?php
            the_post_thumbnail('large', ['class' => 'img-fluid']);
            ?>
              
            </div>
           
            <article>
              <div class="row single-post-row">
                <div class="col-12">
               
                  <p>
                    <?php the_content(); ?>
                  </p>
                 
                   
                </div>
                
                  
              
                </div>
              </div> 
            </article>

           
           
          </div>
      
      </section>
    </main>
<?php 
get_footer();
?>