
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
                <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <?php 
                while(have_posts())
                {
                  the_post();
                  $image= the_post_thumbnail('large');
                  
                 
                }
                ?>
                <div class="card-body">
                  <img src="<?php echo $image[0] ?>" alt="">
                </div>
                
              </div>
            </div>
               <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/how-to-perform-an-seo-competitor-analysis-and-why-its-important.webp"
                  alt="How to perform an SEO competitor analysis and why it’s important"
                />
                <div class="card-body">
                  <div class="card-icon"><i class="bi bi-alexa"></i></div>
                  <p class="card-category">
                    SEO
                    <i class="bi-calendar-week ps-3"> 2023/05/11</i>
                  </p>
                  <h3>How To Perform An Seo Competitor Analysis And Why It's Important?</h3>
                  <p>
                    Search engine optimization (SEO) is crucial for any website to increase its visibility and attract more organic traffic. However, it's not just about optimizing your website - it's also essential to understand your competitors' actions.
                  </p>
                  <p>
                    <a
                      href="how-to-perform-an-seo-competitor-analysis-and-why-its-important"
                      class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
            </div>
               <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/how-to-outlast-a-google-core-update.webp"
                  alt="How to Outlast a Google Core Update and Achieve Top Rankings"
                />
                <div class="card-body">
                  <div class="card-icon"><i class="bi bi-google"></i></div>
                  <p class="card-category">
                    SEO
                    <i class="bi-calendar-week ps-3"> 2023/04/04</i>
                  </p>
                  <h3>How to Outlast a Google Core Update and Achieve Top Rankings</h3>
                  <p>
                    Do you ever wonder why some businesses seem to always rank at the top of Google search results? Well, even if you're not an SEO expert or marketer, it's pretty widely known that Google has made huge strides since it first launched way back in 1998.
                  </p>
                  <p>
                    <a
                      href="how-to-outlast-a-google-core-update"
                      class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/tips-for-successful-social-media-marketing.webp"
                  alt="Tips for Social Media Marketing"
                />
                <div class="card-body">
                  <div class="card-icon"><i class="bi bi-facebook"></i></div>
                  <p class="card-category">
                    Social Media Marketing
                    <i class="bi-calendar-week ps-3"> 2023/03/15</i>
                  </p>
                  <h3>Tips for Successful Social Media Marketing</h3>
                  <p>
                    Social media marketing is the process of promoting a brand,
                    product, or service on social media platforms such as
                    Facebook, Twitter, Instagram, LinkedIn, YouTube, and others.
                  </p>
                  <p>
                    <a
                      href="tips-for-successful-social-media-marketing"
                      class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/ways-to-optimize-product-pages-for-more-sales.webp"
                  alt="Ways to optimize your product page"
                />
                <div class="card-body">
                  <div class="card-icon"><i class="bi bi-gear"></i></div>
                  <p class="card-category">
                    SEO
                    <i class="bi-calendar-week ps-3"> 2023/03/10</i>
                  </p>
                  <h3>
                    Want More Sales? 10 Ways to Optimize Your Product Page
                  </h3>
                  <p>
                    Sales is the act of exchanging products or services for
                    payment. It usually refers to the transactions that occur
                    when a customer buys a product or service from the business.
                  </p>
                  <p>
                    <a
                      href="ways-to-optimize-product-pages-for-more-sales"
                      class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/what-is-google-eeat-and-why-is-it-important-for-seo.webp"
                  alt="What is E-E-A-T? Why is E-E-A-T Important for SEO in 2023?"
                />
                <div class="card-body">
                  <div class="card-icon"><i class="bi bi-search"></i></div>
                  <p class="card-category">
                    SEO
                    <i class="bi-calendar-week ps-3"> 2023/03/03</i>
                  </p>
                  <h3>
                    What is E-E-A-T? Why is E-E-A-T Important for SEO in 2023?
                  </h3>
                  <p>
                    E-E-A-T stands for Experience, Expertise, Authoritativeness,
                    and Trustworthiness, and it is a concept that has become
                    increasingly important in the field of search engine
                    optimization (SEO).
                  </p>
                  <p>
                    <a
                      href="what-is-google-eeat-and-why-is-it-important-for-seo"
                      class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/why-seo-is-important-for-business.webp"
                  alt="Why SEO is important for business"
                />
                <div class="card-body">
                  <div class="card-icon">
                    <i class="bi-credit-card-2-front"></i>
                  </div>
                  <p class="card-category">
                    SEO
                    <i class="bi-calendar-week ps-3"> 2023/02/22</i>
                  </p>
                  <h3>Why SEO is important for business</h3>
                  <p>
                    In basic terms, SEO (Search Engine Optimization) aims to
                    enhance your online visibility, attracting more traffic and
                    increasing your chances of providing your product or service
                    to a larger audience.
                  </p>
                  <p>
                    <a
                      href="why-seo-is-important-for-business"
                      class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/how-to-calculate-conversion-rate.webp"
                  alt="How Do You Calculate Conversion Rate? Best Practices Revealed!"
                />
                <div class="card-body">
                  <div class="card-icon"><i class="bi bi-calculator"></i></div>
                  <p class="card-category">
                    Digital Marketing
                    <i class="bi-calendar-week ps-3"> 2023/02/17</i>
                  </p>
                  <h3>
                    How Do You Calculate Conversion Rate? Best Practices
                    Revealed!
                  </h3>
                  <p>
                    Conversion rate is a commonly used metric in marketing,
                    sales and business but it can be misinterpreted and misused.
                    It’s crucial to periodically revisit the definition and use
                    of the metric to avoid misapplication.
                  </p>
                  <p>
                    <a
                      href="how-to-calculate-conversion-rate"
                      class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/online-reputation-marketing.webp"
                  alt="Online Reputations Marketing: Importance, and Why You Need It!"
                />
                <div class="card-body">
                  <div class="card-icon"><i class="bi bi-globe"></i></div>
                  <p class="card-category">
                    Digital Marketing
                    <i class="bi-calendar-week ps-3"> 2023/02/09</i>
                  </p>
                  <h3>
                    Online Reputations Marketing: Importance, and Why You Need
                    It!
                  </h3>
                  <p>
                    Online reputation marketing is similar to managing your
                    brands most effectively online. It refers to how you
                    overlook every detail about your brand once it's presented
                    online. Since everything has become digital and people have
                    started to search for everything online before purchasing,
                    online reputation marketing plays a key role.
                  </p>
                  <p>
                    <a href="online-reputation-marketing" class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/best-time-to-post-on-pinterest.svg"
                  alt="Best Time to Post On Pinterest"
                />
                <div class="card-body">
                  <div class="card-icon"><i class="bi-pinterest"></i></div>
                  <p class="card-category">
                    Digital Marketing
                    <i class="bi-calendar-week ps-3"> 2023/01/20</i>
                  </p>
                  <h3>Best Time to Post On Pinterest</h3>
                  <p>
                    Pinterest looks like a social media platform, but it is not
                    one. Its media contain social media marketing procedures for
                    e-commerce business owners. This social media can help your
                    online store's blog and legacy pages by raising brand
                    awareness.
                  </p>
                  <p>
                    <a
                      href="best-time-to-post-on-pinterest"
                      class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img
                  src="./img/why-does-every-business-need-a-website.webp"
                  alt="Why every Business needs a website?"
                />
                <div class="card-body">
                  <div class="card-icon"><i class="bi-laptop"></i></div>
                  <p class="card-category">
                    Digital Marketing
                    <i class="bi-calendar-week ps-3"> 2022/09/29</i>
                  </p>
                  <h3>Why every Business needs a website?</h3>
                  <p>
                    The growth of the internet has shrunk the world's distances.
                    Humans have fast access to all types of information right at
                    our fingertips.
                  </p>
                  <p>
                    <a href="why-business-need-website" class="stretched-link"
                      >Read More</a
                    >
                  </p>
                </div>
              </div>
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
  
