
<?php
// Template Name: Home
   get_header();
?>
    <main id="index">
      <section id="hero">
        <div class="container">
          <div class="row g-4 g-md-5 align-items-center justify-content-around">
            <div class="col-12 col-lg-6">
              <h1>Best <span>SEO & Website</span> Company</h1>
              <h2>WE GENERATE MORE TRAFFIC</h2>
              <p>CREATING CUSTOM WEBSITES AND SEO SERVICES.</p>
              <a href="contact" class="btn-all">Contact Us</a>
            </div>
            <div class="col-12 col-md-8 col-lg-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/hero-seostairs.svg" alt="Seostairs Hero Image" />
            </div>
          </div>
        </div>
      </section>
      <section id="company">
        <div class="container">
          <div class="section-heading">
            <h2>Company</h2>
            <p>
              Are you looking for the best internet marketing agencies? Well,
              you have found us! Here, we offer the highest quality work with
              100% customer satisfaction at a minimum cost range.
            </p>
          </div>
          <div class="row align-items-center justify-content-around">
            <div class="col-12 col-md-6 col-lg-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company.svg" alt="Seostairs Company" />
            </div>
            <div class="col-12 col-lg-5">
              <p>
                SeoStairs is an SEO company that specializes in structured SEO
                strategies that produce consistent results and a guaranteed
                return on investment (ROI). Whether you want to increase your
                market presence or improve revenues, you can trust us to help
                your business grow. You can rest assured that you are putting
                your SEO and other digital marketing needs in the safe hands of
                our team of experts and specialists.
              </p>
              <p>
                As the market and technology are changing rapidly, we cannot be sure whether the digital marketing techniques used today will still be effective in the future. However, the marketing strategies used by SEO Stairs are designed to cope with the future search engine algorithm changes and shifts in the digital landscape. Our strategies for social media marketing, website design, and <a href="/digital-marketing-services">Digital Marketing Services</a> enable us to offer our clients the best integrated online marketing services that are based on results.
              </p>
              <button
                class="btn-all"
                type="button"
                onclick="$crisp.push(['do', 'chat:open'])"
              >
                Chat With Us
              </button>
            </div>
          </div>
        </div>
      </section>
      <section id="index-services">
        <div class="container">
          <div class="section-heading">
            <h2>Delivering a complete package</h2>
            <p>Boost your brand popularity.</p>
          </div>
          <div class="swiper pb-5 px-3">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/seo.webp" alt="Search Engine Optimization" />
                  <div class="card-body">
                    <div class="card-icon"><i class="bi bi-search"></i></div>
                    <p class="card-category">SEO Marketing</p>
                    <h3>Search Engine Optimization - SEO</h3>
                    <p>
                      SeoStairs ensures significant increase in organic search
                      visibility for the client through Search Engine
                      Optimization. By using researched keywords and conducting
                      both on-page and off-page optimization, we help brands
                      attract high-quality leads and traffic via search engines.
                    </p>
                    <p>
                      <a href="seo-services">Invest in your future</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/socialmedia.webp"
                    alt="Social Media Marketing"
                  />
                  <div class="card-body">
                    <div class="card-icon"><i class="bi bi-facebook"></i></div>
                    <p class="card-category">Socialmedia Marketing</p>
                    <h3>Social Media Marketing</h3>
                    <p>
                      Nowadays, one of the most popular digital marketing
                      platforms is social media. Every day, millions of people
                      are logged in to it. We can reach the target customers for
                      your particular business niche through digital ad
                      campaigns, which subsequently leads to an increase in
                      sales and visibility. The ROI on social media platforms
                      such as Facebook, Instagram, and TikTok is higher than on
                      any other online platforms.
                    </p>
                    <p>
                      <a href="social-media-marketing-services"
                        >Increase your Leads</a
                      >
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/paid-ads.webp" alt="Paid Ads Campaign" />
                  <div class="card-body">
                    <div class="card-icon"><i class="bi bi-cash-coin"></i></div>
                    <p class="card-category">Paid Advertising</p>
                    <h3>Paid Ads Campaign</h3>
                    <p>
                      If you want to promote your services or products in a
                      shorter period of time to impact your niche market, you
                      can rely on Pay Per Click. Paid ad campaigns are quick to
                      produce measurable results. People engage more with ads.
                      So we create highly effective Google, Bing, or Facebook ad
                      campaigns (tailored to your needs) that will reach your
                      target customers and yield an outstanding return on
                      investment (ROI).
                    </p>
                    <p>
                      <a href="digital-marketing-services"
                        >Grow Your Client Base</a
                      >
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/website-1.webp"
                    alt="Web Design and Development"
                  />
                  <div class="card-body">
                    <div class="card-icon"><i class="bi bi-laptop"></i></div>
                    <p class="card-category">Web Development</p>
                    <h3>Web Design and Development</h3>
                    <p>
                      Our features also include the designing of interactive and
                      dynamic websites. Moreover, SeoStairs also develops
                      user-friendly websites and helps them generate the best
                      impression. It converts the viewers into customers. We, as
                      an SEO agency, not only design your websites but also help
                      you to develop SEO-friendly websites that rank.
                    </p>
                    <p>
                      <a href="web-design-and-development-services"
                        >Host your Optimized Website</a
                      >
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/content.webp" alt="Content Creation" />
                  <div class="card-body">
                    <div class="card-icon">
                      <i class="bi bi-vector-pen"></i>
                    </div>
                    <p class="card-category">Content Marketing</p>
                    <h3>Content Creation</h3>
                    <p>
                      Our dedicated team of tech-savvy content creators produce
                      high quality, engaging content with researched keywords
                      that help customers find it faster. Thus, it attracts
                      organic traffic in the search engine. We increase its
                      visibility even on social media. We can also add many
                      features like easy-to-understand infographics and other
                      such interactive effects to your web page. We strictly
                      adhere to Google's standards during content creation.
                    </p>
                    <p>
                      <a href="content-writing-services"
                        >Demonstrate Your Expertise</a
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <section id="call-to-action-seo-report">
        <div class="container">
          <h2>Boost your website traffic!</h2>
          <p>Check your Website
             Score</p>
          <form action="https://formsubmit.co/info@seostairs.com" method="POST">
            <div class="row">
              <div class="col-lg-8">
                <div class="input-group">
                  <input
                    type="url"
                    name="Website URL"
                    class="form-control"
                    placeholder="Web URL"
                    required`
                  />
                  <input
                    type="email"
                    name="Email"
                    class="form-control"
                    placeholder="Email"
                    required
                  />
                  <input
                    type="hidden"
                    name="_next"
                    value="https://www.seostairs.com/thanks"
                  />
                  <button class="btn-all">Check</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
      <section id="why-us">
        <div class="container">
          <div class="section-heading">
            <h2>Why SeoStairs?</h2>
            <p>
              Has traffic to your website slowed down recently? The decline in
              your online presence could be a major blow to your business. Well,
              we have just the right solution. Why not try using our integrated
              marketing services? We understand your problems and can help you
              deal with them. We have what it takes to catapult your brand to
              greater online visibility.
            </p>
          </div>
          <div class="row g-4 g-lg-5">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/roi.svg" alt="Seostairs Roi Guaranteed" />
                  </div>
                  <div class="col-12 col-md-9 col-lg-7">
                    <h3>1. 100% ROI-Guaranteed</h3>
                    <p>
                      Are you afraid of not gaining as much return from the money you have spent on us? Don't worry at all. We have a record of producing 100% Return On Investment (ROI) on each one of our customers. We apply a holistic approach towards our customers. We are not limited to being only an SEO agency providing <a href="/seo-services">SEO Services</a> to boost your Google ranking, but we provide overall integrated marketing. We assure our customers that we will prove it to you through exponential ROI percentage. We are also dedicated towards a hike in your business' social media presence.
                    </p>
                    <a
                      href="https://wa.link/zoor57"
                      target="_blank"
                      class="btn-all"
                      >Chat on whatsapp</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-9 col-lg-7 order-1 order-md-0">
                    <h3>2. Far ahead from competitors</h3>
                    <p>
                      Are you sick and tired of lack of responsiveness from your SEO agency? Have you had it with their mediocre work? Well, you deserve the best in the field. What makes us one of the best SEO companies? The answer is we stay up to date on the latest algorithms, marketing trends, SEO optimized <a href="/content-writing-services">Content Writing</a> as well as other services. We compile all these strategies and put them through data analysis to build effective marketing strategies. We execute these integrated marketing strategies. That is how we deliver extraordinary outcomes that enable the online growth of our clients.
                    </p>
                  </div>
                  <div class="col-12 col-md-3 order-0 order-md-1">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/img/ahead.svg"
                      alt="Seostairs ahead from Competitors"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-3">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/img/client-satisfaction.svg"
                      alt="Seostairs Client Satisfaction"
                    />
                  </div>
                  <div class="col-12 col-md-9 col-lg-7">
                    <h3>3. Client satisfaction is everything</h3>
                    <p>
                      The major goal of our company is client satisfaction, which includes maintaining complete honesty, and upholding integrity. Our team's passion and loyalty are elevated by our company culture, which serves as the foundation for our relationships with our customers. With a large team of highly-qualified specialists, SEO Stairs provides a wide range of services, including a total re-development of your brand, specialized digital marketing strategies, <a href="/web-design-and-development-services">Web Design and Development Services</a>, as well as social media management.
                    </p>
                    <a class="btn-all" href="#contact-form" type="button"
                      >Get Free Proposal</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-9 col-lg-7 order-1 order-md-0">
                    <h3>4. Total Transparency</h3>
                    <p>
                      We have a policy in place to hide nothing from our
                      clients. They can ask us any question and we will answer
                      them honestly. More than clients coming to us with
                      questions, we submit reports to them about the progress.
                      Even with the minor changes in the website, we keep the
                      clients updated. We have kept our SEO costs as low as
                      possible compared to other SEO companies of similar
                      standards. We have kept no hidden or extra charges in your
                      bill. Everything is discussed upfront and finalized.
                    </p>
                  </div>
                  <div class="col-12 col-md-3 order-0 order-md-1">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/img/transparency.svg"
                      alt="Seostairs Total Transparency"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section id="counter">
        <div class="container">
          <div class="row justify-content-evenly">
            <div class="col-12 col-lg-3">
              <p>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="180"
                  class="purecounter"
                  >0</span
                >+
              </p>
              <p>
                <strong>Happy Clients </strong> <br />
                We give more than what they expect to get
              </p>
            </div>
            <div class="col-12 col-lg-3">
              <p>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="256"
                  class="purecounter"
                  >0</span
                >+
              </p>
              <p>
                <strong>Projects</strong> <br />
                Result of client retention ability
              </p>
            </div>
            <div class="col-12 col-lg-3">
              <p>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="24"
                  class="purecounter"
                  >0</span
                >/7
              </p>
              <p>
                <strong> Hours Of Support </strong> <br />
                We are always there for you
              </p>
            </div>
          </div>
          <p class="text-center">
            <a href="mailto:info@seostairs.com" class="btn-all">Email Us Now</a>
          </p>
        </div>
      </section>
      <section id="testimonials">
        <div class="container">
          <div class="section-heading">
            <h2>What Our Clients Are Saying</h2>
          </div>
          <div class="row">
            <div class="swiper pt-1 pb-5 px-3">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="card">
                    <div class="card-body">
                      <p>
                        While building our new web site, the customer service
                        has been prompt and straight forward and the actual
                        services are well documented and logical to our needs.
                        They handle things very efficiently and are available
                        for any questions we have.
                      </p>
                      <div class="client-info">
                        <div class="row">
                          <div class="col-4">
                            <img
                              src="./img/one.webp"
                              alt="Client Linton Close"
                            />
                          </div>
                          <div class="col-8">
                            <h3>Linton Close</h3>
                            <h4>CEO & Founder</h4>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                          </div>
                          <div class="quote-block">
                            <i class="bi-quote"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card">
                    <div class="card-body">
                      <p>
                        There was no comparison between the first company and
                        Seostairs. Professional, Creative, Attentive to Detail,
                        Excellent Communication. If I had contracted with
                        Seostairs the first time I would not have had to do it
                        twice.
                      </p>
                      <div class="client-info">
                        <div class="row">
                          <div class="col-4">
                            <img
                              src="./img/two.webp"
                              alt="Client Clarissa Nelson"
                            />
                          </div>
                          <div class="col-8">
                            <h3>Clarissa Nelson</h3>
                            <h4>Designer</h4>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                          </div>
                          <div class="quote-block">
                            <i class="bi-quote"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card">
                    <div class="card-body">
                      <p>
                        They helped flush out the visual layout and content.
                        Seostairs services are bargain when you weigh the cost
                        versus the product you receive. I was very impressed. I
                        will be using them again in future endeavors. Thanks
                        again!
                      </p>
                      <div class="client-info">
                        <div class="row">
                          <div class="col-4">
                            <img
                              src="./img/three.webp"
                              alt="Cient Sara Gupta"
                            />
                          </div>
                          <div class="col-8">
                            <h3>Sara Gupta</h3>
                            <h4>Designer</h4>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                          </div>
                          <div class="quote-block">
                            <i class="bi-quote"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card">
                    <div class="card-body">
                      <p>
                        Seostairs listened to everything we needed and wanted in
                        a new website, then delivered it! Our new website is
                        fun, exciting and easy to use for me and our audiences.
                        I was listened to and respected through every step.
                      </p>
                      <div class="client-info">
                        <div class="row">
                          <div class="col-4">
                            <img
                              src="./img/four.webp"
                              alt="Client Devon Kimberley"
                            />
                          </div>
                          <div class="col-8">
                            <h3>Devon Kimberley</h3>
                            <h4>Entrepreneur</h4>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                          </div>
                          <div class="quote-block">
                            <i class="bi-quote"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card">
                    <div class="card-body">
                      <p>
                        Our site is beautiful! It is easy to navigate. The
                        support has been remarkable for Wordpress; if I don’t
                        understand something, or can’t accomplish a task,
                        Seostairs is very responsive and they lead me in the
                        correct way.
                      </p>
                      <div class="client-info">
                        <div class="row">
                          <div class="col-4">
                            <img
                              src="./img/five.webp"
                              alt="Client Carl Coupe"
                            />
                          </div>
                          <div class="col-8">
                            <h3>Carl Coupe</h3>
                            <h4>Entrepreneur</h4>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                          </div>
                          <div class="quote-block">
                            <i class="bi-quote"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>
      <section id="call-to-action">
        <div class="container">
          <h2>Do you need our support?</h2>
          <p>
            Then get started with us now. Perfect Solution For Your Company.
            Conveniently grow long-term.
          </p>
          <p>
            <a href="mailto:info@seostairs.com" class="btn-all">Email Us Now</a>
          </p>
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
  </body>
</html>
