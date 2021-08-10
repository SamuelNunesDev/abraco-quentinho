<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('./bootstrap/dist/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('./css/style.css') !!}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('./imagens/favicon.ico') !!}" type="image/x-icon">
    <title>Abraço Quentinho</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-0 px-0 shadow">
      <a class="navbar-brand col-3 text-light text-justify pt-3 pb-2 px-4" href="#">
        <img class="pb-2" src="{!! asset('./imagens/coracao-logo.png') !!}" alt="">
        Abraço Quentinho
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-center">
          <li class="nav-item">
            <a class="nav-link d-block py-2 px-4" href="#">
             <i class='fas fa-home'></i> Home  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-block py-2 px-4" href="#">
              <i class="fa fa-child"></i> Ações 
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link d-block py-2 px-4" href="#">
                <i class='fas fa-diagnoses'></i> Quem somos nós 
              </a>
            </li>
          <li class="nav-item">
            <a class="nav-link d-block py-2 px-4" href="#">
              <i class='fas fa-hands-helping'></i> Colaborar 
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link d-block py-2 px-4" href="#">
                <i class='fas fa-list-alt'></i> Extrato 
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-block py-2 px-4" href="#">
              <i class='fas fa-comments'></i> Contate-nos 
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <section>
      <div class="jumbotron jumbotron-fluid bg-light d-lg-none mt-1 pt-4 pb-0 mb-0">
          <div class="container">
            <h2 class="">Faça parte do nosso projeto Abraço Quentinho</h2>
            <p class="">O projeto "Abraço Quentinho" é completamente colaborativo e sem fins lucrativos. A idéia é ajudar as pessoas mais necessitadas de forma ágil e em grande escala. Colabore conosco para ajudar o próximo, doando agasalhos, cobertores, roupas e alimentos.</p>
            <a href="#" class="btn btn-primary">Quero Participar!</a>
          </div>
          <img class="img-fluid" src="{!! asset('./imagens/jumb2.png') !!}" alt="pessoas se ajudando">
      </div>
      <div class="jumbotron jumbotron-fluid bg-light d-lg-none mt-0 pt-0 pb-4">
        <div class="container">
          <h2 class="">Compartilhe Coisas Boas, Compartilhe Amor</h2>
          <p class="">Além da pandemia, nas últimas semanas estamos vivendo em um clima extremamente frio, e neste momento toda ajuda é bem vinda! Faça parte do nosso time colaborando!</p>
          <a href="#" class="btn btn-primary">Quero Contribuir!</a>
        </div>
        <img class="img-fluid" src="{!! asset('./imagens/jumb1.jpeg') !!}" alt="pessoas se ajudando">
      </div>
    </section>
    <section>
      <div id="carouselExampleIndicators" class="carousel slide shadow d-none d-lg-block" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="carousel-img d-block w-50 h-50 mt-3" src="{!! asset('./imagens/background.jpg') !!}" alt="First slide">
              <div class="carousel-caption mb-5">
                <div class="row justify-content-end">
                  <h5 class="rounded py-2">Faça parte do nosso projeto Abraço Quentinho</h5>
                </div>
                <div class="row justify-content-end">
                  <p class="rounded py-2 text-justify">O projeto "Abraço Quentinho" é completamente colaborativo e sem fins lucrativos. A idéia é ajudar as pessoas mais necessitadas de forma ágil e em grande escala. Colabore conosco para ajudar o próximo, doando agasalhos, cobertores, roupas e comida.</p>
                </div>
                <div class="row justify-content-center">
                  <a href="#" class="btn btn-outline-primary btn-lg offset-4">Quero Participar!</a>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block w-50 h-50 mt-3 slide2" src="{!! asset('./imagens/background2.png') !!}" alt="Second slide">
              <div class="carousel-caption mb-5">
                <div class="row justify-content-end">
                  <h5 class="rounded py-2">Compartilhe Coisas Boas, Compartilhe Amor</h5>
                </div>
                <div class="row justify-content-end">
                  <p class="rounded py-2 text-justify">Além da pandemia, nas últimas semanas estamos vivendo em um clima extremamente frio, e neste momento toda ajuda é bem vinda! Faça parte do nosso time colaborando!</p>
                </div>
                <div class="row justify-content-center">
                  <a href="#" class="btn btn-outline-primary btn-lg offset-4">Quero Contribuir!</a>
                </div>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </section>
    <section class="container">
      <article class="row my-4">
      <div class="card col-10 col-lg-3 col-md-5">
          <img class="card-img-top" src="{!! asset('./imagens/card1.jpeg') !!}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Roupas</h5>
            <p class="card-text pb-4">Neste frio nada melhor do que uma roupa bem aconchegante! 😄</p>
            <a href="#" class="btn btn-primary bt-card">Doar Roupas</a>
          </div>
        </div>
        <div class="card col-10 col-lg-3 col-md-5">
          <img class="card-img-top" src="{!! asset('./imagens/card2.png') !!}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Alimentos</h5>
            <p class="card-text pb-4">Cestas básicas compostas por alimentos não perecíveis serão de grande ajuda! Lembre-se que qualquer ajuda é bem vinda! 🥰</p>
            <a href="#" class="btn btn-primary bt-card">Doar Alimentos</a>
          </div>
        </div>
        <div class="card col-10 col-lg-3 col-md-5">
          <img class="card-img-top" src="{!! asset('./imagens/card3.jpg') !!}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Seja um Voluntário!</h5>
            <p class="card-text pb-4">Você pode fazer parte do time também na linha de frente! 👊</p>
            <a href="#" class="btn btn-primary bt-card">Ser Um Membro!</a>
          </div>
        </div>
        <div class="card col-10 col-lg-3 col-md-5">
          <img class="card-img-top" src="{!! asset('./imagens/card4.jpg') !!}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Pix</h5>
            <p class="card-text pb-4">Você pode ajudar também fazendo um pix. Você pode consultar todas as doações através do extrato, mostrando como ele foi utilizado. (gasolina pra locomoção, alimentos, roupas e etc) 💰</p>
            <a href="#" class="btn btn-primary bt-card">Fazer Um Pix</a>
          </div>
        </div>
      </article>
    </section>
    <section class="container">
        <article class="row py-5">
          <div class="col-6">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate pariatur in doloremque necessitatibus magni consequatur?</h2>
            <p>Ipsum, nostrum corporis provident, cumque numquam eos et natus neque amet fugit enim cum molestiae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur esse, veniam, aliquam voluptas repellendus maxime hic culpa quis excepturi eum minus quo deleniti laborum qui blanditiis iste vero quia est?</p>
            <a href="#" class="btn btn-primary">BUTTON</a>
            <a href="#" class="btn btn-secondary">BUTTON</a>
          </div>
          <div class="col-6">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate pariatur in doloremque necessitatibus magni consequatur?</h2>
            <p>Ipsum, nostrum corporis provident, cumque numquam eos et natus neque amet fugit enim cum molestiae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur esse, veniam, aliquam voluptas repellendus maxime hic culpa quis excepturi eum minus quo deleniti laborum qui blanditiis iste vero quia est?</p>
            <p>Ipsum, nostrum corporis provident, cumque numquam eos et natus neque amet fugit enim cum molestiae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur esse, veniam, aliquam voluptas repellendus maxime hic culpa quis excepturi eum minus quo deleniti laborum qui blanditiis iste vero quia est?</p>
          </div>
        </article>
    </section>
        <section>
            <h3 class="title py-4 mb-0 shadow"><strong>Last Articles</strong></h3>
              <div class="container-fluid">
                <div class="row">
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/01.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/02.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/03.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/04.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/05.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/06.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/07.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/08.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/09.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/10.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/11.jpg" width="100%"  alt=""></a>
                  <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="img/articles/12.jpg" width="100%"  alt=""></a>
                </div>
              </div>
        </section>
        <section class="container-fluid bg-dark">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row justify-content-center">
                    <img class="col-8" src="img/slider/slide-01.png" alt="First slide">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row justify-content-center">
                    <img class="col-8" src="img/slider/slide-02.png" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
              </div>
          </div>
        </section>
        <section class="container-fluid">
            <article class="row">
                <div class="col-12 second-article text-center">
                    <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti delectus placeat magnam saepe nesciunt laudantium. Et dolorum id assumenda facilis maxime. Error ea eveniet amet explicabo voluptatibus eum sunt quas?</h2>
                    <p>Error ea eveniet amet explicabo voluptatibus eum sunt quas?</p>
                </div>
            </article>
        </section>
        <footer class="container-fluid bg-dark">
            <div class="container text-light">
              <div class="row py-5 rodape">
                  <div class="col-12 col-md-2">
                      <p>Infusion</p>
                  </div>
                  <div class="col-12 col-md-5">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eum possimus in nam similique facere laborum molestias ipsa nisi? Nemo cupiditate consectetur minima ipsum debitis dicta magni laudantium, porro asperiores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum autem, omnis laborum ab adipisci culpa distinctio sit tempore sed suscipit ipsam quasi placeat modi unde eius harum cumque eos earum?</p>
                  </div>
                  <div class="col-12 col-md-3">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum vel nisi amet quod architecto nulla quia, incidunt eaque harum, consequuntur consequatur quisquam dolore nobis odio maxime nostrum cumque hic rerum.</p>
                  </div>
                  <div class="col-12 col-md-2">
                      <ul>
                          <li><a class="footer-links" href="#">List one</a></li>
                          <li><a class="footer-links" href="#">Page two</a></li>
                          <li><a class="footer-links" href="#">Design</a></li>
                          <li><a class="footer-links" href="#">Work</a></li>
                          <li><a class="footer-links" href="#">Contact me</a></li>
                      </ul>
                  </div>
              </div>
            </div>
        </footer>
    </main>
    <script src="{!! asset('./jquery/dist/jquery.min.js') !!}"></script>
    <script src="{!! asset('./js/font-awesome.js') !!}"></script>
    <script src="{!! asset('./bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
</body>
</html>