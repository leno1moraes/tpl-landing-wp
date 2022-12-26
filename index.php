

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
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/cba">Cuiabá</a></li>
                  <li><a class="dropdown-item" href="/svc">São Vicente</a></li>
                  <li><a class="dropdown-item" href="/cas">Cáceres</a></li>
                  <li><a class="dropdown-item" href="/blv">Bela Vista</a></li>
                  <li><a class="dropdown-item" href="/plc">Pontes e Lacerda</a></li>
                  <li><a class="dropdown-item" href="/cnp">Campo Novo do Parecis</a></li>
                  <li><a class="dropdown-item" href="/jna">Juína</a></li>
                  <li><a class="dropdown-item" href="/cfs">Confresa</a></li>
                  <li><a class="dropdown-item" href="/roo">Rondonópolis</a></li>
                  <li><a class="dropdown-item" href="/srs">Sorriso</a></li>
                  <li><a class="dropdown-item" href="/vgd">Várzea Grande</a></li>
                  <li><a class="dropdown-item" href="/bag">Barra Do Garcas</a></li>
                  <li><a class="dropdown-item" href="/pdl">Primavera do Leste</a></li>
                  <li><a class="dropdown-item" href="/alf">Alta Floresta</a></li>
                  <li><a class="dropdown-item" href="/tga">Tangará da Serra</a></li>
                  <li><a class="dropdown-item" href="/dmt">Diamantino</a></li>
                  <li><a class="dropdown-item" href="/lrv">Lucas do Rio Verde</a></li>
                  <li><a class="dropdown-item" href="/snp">Sinop</a></li>
                </ul>      
              </div>
          </div>
        </div>

        <div class="col">
          <a href="/rtr">
            <div class="card align-items-center box-estilos" >  
              
                <img class="img-fluid mt-2" width="40%" height="40%" src="<?php echo get_template_directory_uri(); ?>/imgs/logo reitoria vertical png.png" alt="Logo IFMT">
              
            </div>
          </a>
        </div>

      </div>

    </div>
  </div>

</main>

<?php get_footer(); ?>