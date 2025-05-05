
<?php
   get_header();
?>
   <main id="other-pages">
      <section id="other-pages__hero">
        <div class="container">
          <div class="row g-4 g-md-5 align-items-center justify-content-around">
            <div class="col-12 col-lg-6">
              <h1>Our Blogs</h1>
              <h2>Learn <span>More</span><br />From Us</h2>
              <p>
                News From impact And Around The World Of Web Design And Online
                Marketing.
              </p>
              <a href="#contact-form">
                <button class="btn-all">Get Free Proposal</button>
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-5">
              <my-form></my-form>
            </div>
          </div>
        </div>
      </section>
      <section id="blogs-grid">
        <div class="container">
          <div class="section-heading">
            <h2>Our Blogs</h2>
          </div>
          <div class="row g-4 g-md-5">
                
              
                <?php 
                while(have_posts())
                {
                  the_post();
                  
                
                ?>
                <div class="col-12 col-md-6 col-lg-4">
                <div class="card" data-aos="fade-up" data-aos-duration="2000"></div>
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
            <div class="pagination pt-5">
             <?php echo wp_pagenavi(); ?> 
             </div>
               
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module">
      import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";
      const swiper = new Swiper(".swiper", {
        direction: "horizontal",
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,
        breakpoints: {
          // when window width is >= 0px
          0: {
            slidesPerView: 1,
          },
          // when window width is >= 768px
          768: {
            slidesPerView: 2,
          },
          // when window width is >= 992px
          992: {
            slidesPerView: 3,
          },
        },
        autoplay: {
          delay: 3000,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script>
      new PureCounter();
    </script>
  
