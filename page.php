<?php 
get_header();
the_post();
?>
<div class="container-full other-page-hero">
  <div class="container ">
    <div class="row ">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
        <h1><?php the_title(); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item breadcrumb-title" aria-current="page"><?php the_title(); ?></li>
            </ol>
          </nav>
        </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row page-content">
    <?php the_content(); ?>
    </div>
    </div>



<?php 
get_footer();
?>