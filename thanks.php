<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Thank you For Submission</title>
     <link rel="icon" type="image/x-icon" href="./img/seostairs-favicon.webp" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <header id="header" class="sticky-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/" aria-label="logo of SeoStairs">
            <img
              src="img/logo-hd.webp"
              class="img-fluid"
              width="369px"
              height="82px"
              alt="Seostairs Logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto gap-lg-5">
              <li class="nav-item">
                <a class="nav-link" href=" / ">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Service
                  <span><i class="bi bi-caret-down-fill"></i></span>
                </a>
                <ul class="dropdown-menu p-4">
                  <li>
                    <a
                      class="dropdown-item"
                      href="web-design-and-development-services"
                      >Web Design and Development</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item disabled"
                      href="digital-marketing-services"
                      >Digital Marketing &raquo;
                    </a>
                    <ul class="submenu dropdown-menu p-4">
                      <li>
                        <a
                          class="dropdown-item"
                          href="digital-marketing-services"
                          >Digital Marketing</a
                        >
                      </li>
                      <li>
                        <a class="dropdown-item" href="seo-services">SEO </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="content-writing-services"
                          >Content Writing</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="social-media-marketing-services"
                          >Social Media Marketing</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="dropdown-item" href="web-hosting-services"
                      >Web Hosting</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us ">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog ">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact ">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main id="thankyou">
      <section class="thanks">
        <div class="container">
          <h1>Thanks for submission</h1>
          <p>We've received your mail. If you have any query contact us.</p>
          <a href="contact " class="btn-all">Contact us</a>
        </div>
      </section>
    </main>
    <footer id="footer">
      <section id="contact-form" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
          <div class="section-heading">
            <h2>Get In Touch</h2>
          </div>
          <div class="row align-items-center justify-content-around">
            <div class="col-12 col-md-6 col-lg-4">
              <img src="/img/service-girl.svg" alt="Contact Us Girl" />
            </div>
            <div class="col-12 col-lg-8">
              <div class="card">
                <div class="card-body">
                  <p class="text-center">
                    Fill out the form below to get your Free Proposal.
                  </p>
                  <form
                    action="https://formsubmit.co/info@seostairs.com"
                    method="POST"
                  >
                    <div class="row g-4 gx-md-5">
                      <div class="col-12 col-md-6">
                        <label for="form_name" class="form-label">Name*</label>
                        <input
                          type="text"
                          class="form-control"
                          id="form_name"
                          placeholder="John Doe"
                          name="Name:"
                          required
                        />
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="form_email" class="form-label"
                          >Email address*</label
                        >
                        <input
                          type="email"
                          class="form-control"
                          id="form_email"
                          placeholder="name@example.com"
                          name="Email:"
                          required
                        />
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="form_company" class="form-label"
                          >Company</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="form_company"
                          placeholder="Amazon"
                          name="Company:"
                          required
                        />
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="form_url" class="form-label">Website</label>
                        <input
                          type="url"
                          class="form-control"
                          id="form_url"
                          placeholder="www.example.com"
                          name="Url:"
                          required
                        />
                      </div>
                      <div class="col-12">
                        <div class="row">
                          <label class="form-label"
                            >Select the services that you want</label
                          >
                          <div class="col-12 col-md-4">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="Service Web Design"
                                value="Website Design"
                                id="flexCheckDefault1"
                              />
                              <label
                                class="form-check-label"
                                for="flexCheckDefault1"
                              >
                                Website Design
                              </label>
                            </div>
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="Service SEO"
                                value="SEO"
                                id="flexCheckDefault2"
                              />
                              <label
                                class="form-check-label"
                                for="flexCheckDefault2"
                              >
                                SEO
                              </label>
                            </div>
                          </div>
                          <div class="col-12 col-md-4">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="Service SEO Content Writing"
                                value="SEO Content Writing"
                                id="flexCheckDefault3"
                              />
                              <label
                                class="form-check-label"
                                for="flexCheckDefault3"
                              >
                                SEO Content Writing
                              </label>
                            </div>
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="Service Social Media Marketing"
                                value="Social Media Marketing"
                                id="flexCheckDefault4"
                              />
                              <label
                                class="form-check-label"
                                for="flexCheckDefault4"
                              >
                                Social Media Marketing
                              </label>
                            </div>
                          </div>
                          <div class="col-12 col-md-4">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="Service Pay Per Click"
                                value="Pay Per Click Service"
                                id="flexCheckDefault5"
                              />
                              <label
                                class="form-check-label"
                                for="flexCheckDefault5"
                              >
                                Pay Per Click Service
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="form_message"
                          >Message</label
                        >
                        <textarea
                          class="form-control"
                          id="form_message"
                          name="Message"
                          rows="3"
                          required
                        ></textarea>
                        <input
                          type="hidden"
                          name="_next"
                          value="www.seostairs.com/thanks "
                        />
                      </div>
                      <div class="col-12">
                        <button class="btn-all">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="whatsapp-chat">
        <div class="container">
          <button
            type="button"
            onclick="show()"
            class="fixed-whatsapp-btn"
            aria-label="Popup for Whatsapp"
          >
            <i class="bi bi-whatsapp"></i>
          </button>
          <div class="row">
            <div
              class="col-11 col-md-4 col-lg-3 whatsapp-card"
              id="showWhatsapp"
              style="visibility: hidden"
            >
              <div class="card">
                <div class="card-header">
                  <div class="chat-icon">
                    <i class="bi-chat-dots"></i>
                  </div>
                  <div class="chat-person">
                    <p>Bikash Khanal</p>
                    <h6>Text Us in Whatsapp</h6>
                  </div>
                  <button
                    type="button"
                    onclick="closeWhatsapp()"
                    class="btn-close btn-close-white"
                  ></button>
                </div>
                <div class="card-body">
                  <p class="text-box">
                    <span>Bikash Khanal</span><br />
                    Hi, there!<br />
                    How can I help you?
                  </p>
                </div>
                <div class="card-footer">
                  <a
                    href="https://wa.link/zoor57"
                    target="_blank"
                    class="card-btn-all"
                  >
                    <i class="bi-whatsapp me-3"></i>Start Chat
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <button onclick="topFunction()" id="goTop" title="Go to top">
        <i class="bi-arrow-up"></i>
      </button>

      <section class="top-footer">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <h3>SeoStairs</h3>
              <p>
                SeoStairs is all about increasing your brand popularity,
                bringing in more customers, generating boost of sales, and
                seeing our clients succeed.
              </p>
              <a
                href="https://twitter.com/seostairs"
                target="_blank"
                aria-label="Link For Twitter page Seostairs"
              >
                <i class="bi-twitter"> </i>
              </a>
              <a
                href="https://www.facebook.com/profile.php?id=100086005885093"
                target="_blank"
                aria-label="Link For Facebook page Seostairs"
              >
                <i class="bi-facebook"> </i>
              </a>
              <a
                href="https://www.instagram.com/seo_stairs/"
                target="_blank"
                aria-label="Link For Instagram page Seostairs"
              >
                <i class="bi-instagram"> </i>
              </a>
              <a
                href="https://www.linkedin.com/company/seostairs/"
                target="_blank"
                aria-label="Link For LinkedIn page Seostairs"
              >
                <i class="bi-linkedin"> </i>
              </a>
            </div>
            <div class="col-12 col-lg-3">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="/#why-us">Why Choose Us</a></li>
                <li><a href="about-us ">About Us</a></li>
                <li><a href="contact ">Contact Us</a></li>
                <li>
                  <a href="terms-and-conditions ">Terms and Conditions</a>
                </li>
                <li><a href="privacy-policy ">Privacy Policy</a></li>
                <li><a href="blog ">Blogs</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h4>Our Services</h4>
              <ul>
                <li>
                  <a href="web-design-and-development-services"
                    >Web Design and Development</a
                  >
                </li>
                <li><a href="web-hosting-services">Web Hosting</a></li>
                <li>
                  <a href="digital-marketing-services">Digital Marketing</a>
                </li>
                <li><a href="seo-services">SEO</a></li>
                <li>
                  <a href="content-writing-services">SEO Content Writing</a>
                </li>
                <li>
                  <a href="social-media-marketing-services"
                    >Social Media Marketing</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="bottom-footer">
        <div class="container text-center">
          <h4>© Copyright SeoStairs. All Rights Reserved</h4>
        </div>
      </section>
    </footer>
    <script src="main.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
