<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lorem ipsum dolor, sit amet consectetur adipisicing elit">
    <title>EA</title>
    <?php wp_head();?>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</header>
    <div class="container">
        <div class="jumbotron">
            <h1>Bienvenue</h1>
        </div>   
    </div>

    <section>
        <div class="container">
            <div class="col-xs-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/fifa.jpg" alt="" class="img-responsive">           
            </div>
            <div class="col-xs-10">
                <h5>Titre de l'article</h5>
                <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nam voluptate. Quae est pariatur provident odio nihil exercitationem natus, 
                numquam, enim iure nulla sed quam libero dignissimos saepe tempore fugit!
                
                
                </p>

            
            
            </div>
        
        
        </div>
    
    
    </section>



</body>
<?php wp_footer();?> 
</html>