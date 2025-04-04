<?php 
get_header();
the_post();
?>
<div class="container">
    <div class="row other-page-hero">
        <div class="col-12">
        <h1><?php the_title(); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item" aria-current="page"><?php the_title(); ?></li>
            </ol>
          </nav>
        </div>
    </div>
    <div class="row page-content">
    <?php the_content(); ?>
    </div>



</div>
<?php 
get_footer();
?>