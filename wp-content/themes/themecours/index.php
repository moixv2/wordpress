<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>theme</title>
    <?php wp_head(); ?>
</head>
<body>
<?php if (have_posts()):
                        while(have_posts()):
                            the_post();
                            the_title();echo '<br>';
                        endwhile;
                else:
                        echo "Pas de résultats.";
                endif;
                die();
                ?>

<div class="card" style="width: 18rem;">
  <img src= "<?php echo get_template_directory_uri(); ?>/screenshot.jpg"
  class ="car-img-top">
  <div class="card-body" alt="...">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card 
    title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</body>
<?php wp_footer(); ?>
</html>