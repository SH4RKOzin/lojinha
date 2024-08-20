<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S4 LOJINHA</title>
    <link rel="icon" href="/assets/img/S4 LOGO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="./assets/js/script.js">
    <link rel="stylesheet" href="./assets/css/style1.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--<link rel="stylesheet" href="/assets/css/style.css">-->

    <style>

    </style>
</head>
<body>
    <header>
        <nav class="nav">
          <ul>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
          </svg>
          <li><a class="nav-link active" aria-current="page" href="#">+258 878791020</a></li>
            </ul></nav>
           

 <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="btn btn-primary nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login / Cadastrar</a>
  </li>
</ul>
  </header>

<!-- Modal Login -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="POST">
          <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <input type="text" class="form-control" name="user" id="user" required>
          </div>
          <div class="mb-3">
            <label for="pass" class="form-label">Senha</label>
            <input type="password" class="form-control" name="pass" id="pass" required>
          </div>
          <button type="submit" class="btn btn-primary d-block mx-auto">Login</button>
          <hr>
          <p class="mt-3 text-center">Não tem uma conta? <a data-bs-toggle="modal" data-bs-target="#cadastro" style="color:blue">Crie uma conta</a>.</p>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Cadastro -->
<div class="modal fade" id="cadastro" tabindex="-1" aria-labelledby="cadastroLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="cadastroLabel">Criar Conta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="criarusuario.php" method="POST">
          <div class="mb-3">
            <label for="userCadastro" class="form-label">Usuário</label>
            <input type="text" class="form-control" name="user" id="userCadastro" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="mb-3">
            <label for="passCadastro" class="form-label">Senha</label>
            <input type="password" class="form-control" name="pass" id="passCadastro" required>
          </div>
          <button type="submit" class="btn btn-primary d-block mx-auto">Criar Usuário</button>
          <p class="mt-3 text-center">Já possui uma conta? <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color:blue">Faça login</a>.</p>
        </form>
      </div>
    </div>
  </div>
</div>






    <div class="h3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="--bs-scroll-height: 100px;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Lojinha S4</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Produtos
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Headsets</a></li>
                      <li><a class="dropdown-item" href="#">Microfones</a></li>
                      <!--<li><hr class="dropdown-divider"></li>-->
                      <li><a class="dropdown-item" href="#">Combos</a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item">
                    <a href="#" class="nav-link">Sobre nos</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Ajuda</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </div>

<!-- carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/img/image3.png" class="d-block w-100 "style="" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/img/image3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/img/image3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Proximo</span>
        </button>
      </div>
<br>

<!--SLIDER-->
<h2>PRODUTOS EM DESTAQUE</h2>
    <div class="slider js-slider"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"
        integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js"
        integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="./assets/js/script.js"></script>



    <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="owl-carousel owl-simple" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "margin": 30,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items": 2
                        },
                        "450": {
                            "items": 3
                        },
                        "630": {
                            "items": 4
                        },
                        "930": {
                            "items": 5
                        },
                        "1060": {
                            "items": 6
                        },
                        "1310": {
                            "items": 6,
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>
                <a href="#" class="brand">
                    <img src="./assets/img/marcas/1.png" alt="Apple logo">
                </a>
                <a href="#" class="brand">
                    <img src="./assets/img/marcas/2.png" alt="Microsoft 365 logo">
                </a>
                <a href="#" class="brand">
                    <img src="./assets/img/marcas/3.png" alt="PHC logo">
                </a>
                <a href="#" class="brand">
                    <img src="./assets/img/marcas/4.png" alt="HP logo">
                </a>
                <a href="#" class="brand">
                    <img src="./assets/img/marcas/5.png" alt="Dell logo">
                </a>
                <a href="#" class="brand">
                    <img src="./assets/img/marcas/6.png" alt="Samsung logo">
                </a>
                <a href="#" class="brand">
                    <img src="./assets/img/marcas/7.png" alt="Lenovo logo">
                </a>
            </div>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>

</script>
















</body>
</html>
