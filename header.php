<!doctype html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php bloginfo( 'name' ); ?> </title>

    <?php wp_head(); ?>

    <style>
      body {
            background: rgb(255 255 255 / 30%);
            background: url(<?php echo wp_get_attachment_image_url( get_theme_mod( 'set_media_background' ), 'full') ?>) no-repeat center center fixed;
            height: 100%;
            width: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
      }

      .box-estilos{
        height: 10rem;
        max-width: 18rem;
        background: rgb(255 255 255 / 60%);

      }

      @media screen and (max-width: 600px) {
        .estilos-grid{
          width: 100%;
        }
      }

      @media screen and (min-width: 700px) {
        .estilos-grid{
          width: 50%;
        }
      }

      @media screen and (min-width: 700px) {
        .cards-estilos{
          position: fixed;
          right: calc(50% - 100vw);
          left: 0;
          top: 40%;
          bottom: 0;
        }
      }     
    </style>

  </head>
  <body <?php body_class(); ?> >
<?php wp_body_open(); ?>
  
<!-- HEADER -->
<header>

  <nav class="navbar navbar-expand-lg navbar-light menu-estilos" style="background: rgb(255 255 255 / 70%);">

    <div class="container-fluid">
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>   
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">

          <li class="nav-item border border-1 rounded-3">
            <a class="nav-link active text-black" aria-current="page" href="https://ifmt.edu.br/conteudo/pagina/politica-de-comunicacao-do-ifmt/">Pol??tica de Comunica????o</a>
          </li>

          <li class="nav-item border border-1 rounded-3">
            <a class="nav-link text-black" href="https://qualificamais.ifmt.edu.br/">Bolsa de Forma????o</a>
          </li>     

          <li class="nav-item border border-1 rounded-3">
            <a class="nav-link text-black" href="https://ifmt.edu.br/conteudo/pagina/portal-do-aluno/">Portal do Aluno</a>            
          </li>      

          <li class="nav-item border border-1 rounded-3">
            <a class="nav-link text-black" href="https://selecao.ifmt.edu.br/">Processos Seletivos e Concursos</a>
          </li>   

        </ul>
      </div>  

    </div>  

  </nav>

</header>