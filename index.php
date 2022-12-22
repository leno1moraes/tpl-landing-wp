

<?php get_header(); ?>

<main>

  <div class="container cards-estilos">
    <div class="container estilos-grid">

      <div class="row">

        <div class="col">
          <div class="card align-items-center box-estilos" >      
              <div class="dropdown mt-5">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Escolha o campus
                </button>      
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Alta Floresta</a></li>        
                  <li><a class="dropdown-item" href="#">Cuiabá</a></li>
                  <li><a class="dropdown-item" href="#">Sinop</a></li>
                </ul>      
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card align-items-center box-estilos" >                                               
            <img class="img-fluid mt-2" width="40%" height="40%" src="<?php echo get_template_directory_uri(); ?>/imgs/logo reitoria vertical png.png" alt="Logo IFMT">
          </div>
        </div>

      </div>

    </div>
  </div>

</main>

<?php get_footer(); ?>