<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{!! asset('./bootstrap/dist/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('./css/style.css') !!}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('./imagens/favicon.ico') !!}" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('bootstrap-icons/font/bootstrap-icons.css') !!}">
    <script src="{!! asset('./jquery/dist/jquery.min.js') !!}"></script>
    <title>Programa Transformar</title>
</head>
<body style="overflow-x: hidden !important;">
  @include('components.cadastro')
  @include('components.alert')
  @include('components.cadastro_ajuda')
  <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-0 px-0 shadow">
      <a class="navbar-brand col-3 text-light text-center pt-3 px-4" href="#" id="brand-logo">
        <div class="row">
          <div class="col mt-2">
            <img class="pb-3" src="{!! asset('./imagens/coracao-logo.png') !!}" alt="logo de coração"> Programa Transformar
          </div>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-center">
          <li class="nav-item">
            <a class="nav-link d-block py-2 px-4 btn">
             <i class='fas fa-home'></i> Home  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-block py-2 px-4 btn">
              <i class='fas fa-hands-helping'></i> Colaborar 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-block py-2 px-4 btn">
              <i class='fas fa-diagnoses'></i> Sobre 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-block py-2 px-4 btn">
              <i class="fa fa-child"></i> Ações 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-block py-2 px-4 btn">
              <i class='fas fa-comments'></i> Contate-nos 
            </a>
          </li>
        </ul>
          <a href="{!! route('login') !!}" class="d-flex m-auto py-1 px-3 btn btn-primary justify-content-center">
            <i class="bi bi-door-open"></i>&nbsp; Entrar
          </a>
      </div>
    </nav>
  </header>
  <main>
    <section>
      <div class="jumbotron jumbotron-fluid bg-light d-lg-none mt-1 pt-4 pb-0 mb-0">
          <div class="container">
            <h2 class="">Faça parte do nosso projeto Programa Transformar</h2>
            <p class="">O projeto "Programa Transformar" é completamente colaborativo e sem fins lucrativos. A idéia é ajudar as pessoas mais necessitadas de forma ágil e em grande escala. Colabore conosco para ajudar o próximo, doando agasalhos, cobertores, roupas e alimentos.</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro">Quero Participar!</a>
          </div>
          <img class="img-fluid" src="{!! asset('./imagens/jumb2.png') !!}" alt="pessoas se ajudando">
      </div>
      <div class="jumbotron jumbotron-fluid bg-light d-lg-none mt-0 pt-0 pb-4">
        <div class="container">
          <h2 class="">Compartilhe Coisas Boas, Compartilhe Amor</h2>
          <p class="">Os tempos não estão fáceis pra ninguém, não é mesmo!? Mas se você pode, seja a resposta do pedido de alguém, roupas e alimentos podem ser tudo que precisam. Seja um colaborador!</p>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro">Quero Contribuir!</a>
        </div>
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
                  <h5 class="rounded py-2">Faça parte do nosso projeto Programa Transformar</h5>
                </div>
                <div class="row justify-content-end">
                  <p class="rounded py-2 text-justify">O projeto "Programa Transformar" é completamente colaborativo e sem fins lucrativos. A idéia é ajudar as pessoas mais necessitadas de forma ágil e em grande escala. Colabore conosco para ajudar o próximo, doando agasalhos, cobertores, roupas e alimentos.</p>
                </div>
                <div class="row justify-content-center">
                  <a href="#" class="btn btn-outline-primary btn-lg offset-4" data-target="#modalCadastro" data-toggle="modal">
                    <i class="bi bi-emoji-smile"></i> Quero Participar!
                  </a>
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
                  <p class="rounded py-2 text-justify">Os tempos não estão fáceis pra ninguém, não é mesmo!? Mas se você pode, seja a resposta do pedido de alguém, roupas e alimentos podem ser tudo que precisam. Seja um colaborador!</p>
                </div>
                <div class="row justify-content-center">
                  <a href="#" class="btn btn-outline-primary btn-lg offset-4" data-toggle="modal" data-target="#modalCadastro">
                    <i class="bi bi-emoji-smile"></i> Quero Contribuir!
                  </a>
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
            <p class="card-text pb-4">Neste frio nada melhor do que um agasalho bem aconchegante! 😄</p>
            <a href="#" class="btn btn-primary bt-card" data-toggle="modal" data-target="#modalCadastro">
              <i class="bi bi-basket"></i>&nbsp; Doar Roupas!
            </a>
          </div>
        </div>
        <div class="card col-10 col-lg-3 col-md-5">
          <img class="card-img-top" src="{!! asset('./imagens/card2.png') !!}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Alimentos</h5>
            <p class="card-text pb-4">Cestas básicas compostas por alimentos não perecíveis serão de grande ajuda! Lembre-se que qualquer ajuda é bem vinda! 🥰</p>
            <a href="#" class="btn btn-primary bt-card" data-toggle="modal" data-target="#modalCadastro">
              <i class="bi bi-cart4"></i>&nbsp; Doar Alimentos!
            </a>
          </div>
        </div>
        <div class="card col-10 col-lg-3 col-md-5">
          <img class="card-img-top" src="{!! asset('./imagens/card3.jpg') !!}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Seja um Voluntário!</h5>
            <p class="card-text pb-4">Você pode fazer parte do time também na linha de frente! 👊</p>
            <a href="#" class="btn btn-primary bt-card" data-toggle="modal" data-target="#modalCadastro">
              <i class="bi bi-person-check"></i>&nbsp; Ser Um Membro!
            </a>
          </div>
        </div>
        <div class="card col-10 col-lg-3 col-md-5">
          <img class="card-img-top" src="{!! asset('./imagens/card4.jpg') !!}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Pix</h5>
            <p class="card-text pb-4">Você pode ajudar também fazendo um pix. Você pode consultar todas as doações através da sessão "Ações", mostrando como ele foi utilizado. (gasolina pra locomoção, alimentos, roupas e etc) 💰</p>
            <a href="#" class="btn btn-primary bt-card" data-toggle="modal" data-target="#modalCadastro">
              <i class="bi bi-cash-coin"></i>&nbsp; Fazer Um Pix!
            </a>
          </div>
        </div>
      </article>
    </section>
    <article class="row my-5">
      <div class="col-12 second-article border-0 text-center" id="extrato">
        <h2 class="mb-4">Está precisando de ajuda? Fale Conosco!</h2>
        <p>
          <i class="h5">"Acreditar em si mesmo é muito importante, mas uma ajudinha de outras pessoas pode ser uma grande bênção." -Iroh</i>
        </p>
        <p>Caso necessite você pode solicitar roupas, alimentos ou uma ajuda financeira, psicologica e espiritual.</p>
        <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#cadastro-ajuda">
          <i class="bi bi-chat-right-dots"></i>&nbsp; Solicitar ajuda
        </button>
      </div>
    </article>
    <section class="container">
        <article class="row py-3">
            <h2 class="border-bottom col pb-2 mb-3" id="sobre">Sobre plataforma "Programa Transformar" </h2>
            <p>A idéia surgiu após uma conversa no grupo da familia no whatsapp. Estavamos falando sobre o frio que tem feito nos últimos dias e sobre como deve ser difícil para quem não tem um teto pra se abrigar quando a noite chega. O projeto propõe o seguinte fluxo:</p>
            <div class="col-lg-6">
            <h4>1º Acesso ao site</h4>
            <p>Primeiro contato com a plataforma.</p>
            <h4>2º Quer Colaborar</h4>
            <p>Aqui a pessoa decide também se quer:
              <ul>
                <li>Fazer uma doação.
                  <ul>
                    <li>Entregar em um ponto de recolhimento. <i>Neste caso ela pode escolher se quer se identificar ou não.</i></li>
                    <li>Aguardar pela equipe buscar a doação em sua casa.</li>
                  </ul>
                </li>
                <li>Ser um membro do time de entregas.</li>
              </ul>
            </p>
            <h4>3º Cadastro Rápido</h4>
            <p>Nessa etapa existem duas possibilidades:
              <ul>
                <li>O colaborador que optar por fazer uma doação entregando em um ponto de recolhimento e não quer se identificar, não faz o cadastro.</li>
                <li>O cadastro consiste em 3 informações basicamente: O nome do colaborador, o produto nos casos de doações e o endereço caso o colaborador opte por aguardar a equipe em sua casa.</li>
              </ul>
              Este cadastro será mostrado na seção "Ações", mostrando todo o histórico de colaborações realizadas. <strong>O endereço é um dado sigiloso e ficará salvo somente até a equipe visualizar, logo após será apagado automáticamente pelo sistema.</strong>
            </p>
            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modalCadastro">
              <i class="bi bi-handbag"></i>&nbsp; Fazer uma doação
            </button>
            <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalCadastro">
              <i class="bi bi-person-check"></i>&nbsp; Fazer parte da equipe
            </button>
          </div>
          <div class="col">
            <img src="{!! asset('./imagens/diagrama.png') !!}" alt="imagem do diagrama">
          </div>
    </section>
        <section>
            <h3 class="title py-4 mb-0 shadow" id="acoes"><strong>Ultimas Ações</strong></h3>
              <div class="container-fluid">
                <div class="row justify-content-center">
                 <!-- <a href="#" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mx-0 px-0"><img src="" width="100%"  alt=""></a> -->
                 <h4 class="my-4">Nenhuma ação realizada até o momento :(</h4>
                </div>
              </div>
        </section>
        <section class="container-fluid">
            <article class="row">
                <div class="col-12 second-article text-center" id="extrato">
                    <h2>Seja o primeiro a colaborar!</h2>
                    <p>Nenhuma doação até o momento :(</p>
                </div>
            </article>
        </section>
        <footer class="container-fluid bg-dark">
            <div class="container text-light">
              <div class="row pt-5 pb-3 rodape">
                  <div class="col-12 col-md-2">
                      <p>Programa Transformar</p>
                  </div>
                  <div class="col-12 col-md-5">
                      <p>A plataforma "Programa Transformar" não possui fins lucrativos e é 100% colaborativa. Os dados só são salvos caso o usuário permita. Dados sigilosos como endereço não são expostos e excluídos automaticamente pelo sistema assim que visualizados pela equipe interna. Em caso de doações via Pix, será mostrado todo histórico na aba de ações, e como o recurso foi utilizado, com total transparencia ao usuário.</p>
                  </div>
                  <div class="col-12 col-md-5">
                      <p>Em caso de dúvidas ou sugestões você pode entrar em contato diretamente com nossa equipe.</p>
                      <ul>
                        <li><a class="footer-links" href="https://api.whatsapp.com/send?phone=553892056762&text=Ol%C3%A1%2C%20gostaria%20de%20conversar%20sobre%20a%20plataforma%20abra%C3%A7o%20quentinho." target="_blank">Samuel Nunes - Desenvolvedor do sistema</a></li>
                        <li><a class="footer-links" href="https://api.whatsapp.com/send?phone=5538988451471&text=Ol%C3%A1%2C%20gostaria%20de%20conversar%20sobre%20a%20plataforma%20abra%C3%A7o%20quentinho." target="_blank">Lucas Queiroz - Administrador do sistema</a></li>
                    </ul>
                  </div>
              </div>
            </div>
        </footer>
    </main>
    <script src="{!! asset('./js/font-awesome.js') !!}"></script>
    <script src="{!! asset('./bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('/js/jquery.mask.min.js') !!}"></script>
    <script>
      $(function() {

        $('.endereco, #errocep').hide()

        let content = $('html, body')
        let altura_colaborar = $('.card:first').position().top - 100
        let altura_sobre = $('#sobre').position().top - 100
        let altura_acoes = $('#acoes').position().top - 100
        let altura_extrato = $('#extrato').position().top - 100
        let altura_contate = $('footer').position().top

        $(window).on('resize', function() {
          altura_colaborar = $('.card:first').position().top - 100
          altura_sobre = $('#sobre').position().top - 100
          altura_acoes = $('#acoes').position().top - 100
          altura_extrato = $('#extrato').position().top - 100
          altura_contate = $('footer').position().top
        })

        $('li .nav-link:eq(0), #brand-logo').on('click', function() {
          content.animate({scrollTop: 0}, 1000)
        })

        $('li .nav-link:eq(1)').on('click', function() {
          content.animate({scrollTop: altura_colaborar}, 1000)
        })

        $('li .nav-link:eq(2)').on('click', function() {
          content.animate({scrollTop: altura_sobre}, 1000)
        })

        $('li .nav-link:eq(3)').on('click', function() {
          content.animate({scrollTop: altura_acoes}, 1000)
        })

        $('li .nav-link:eq(4)').on('click', function() {
          content.animate({scrollTop: altura_extrato}, 1000)
        })

        $('li .nav-link:eq(5)').on('click', function() {
          content.animate({scrollTop: altura_contate}, 1000)
        })

        $('#tipoC').on('change', function() {
          if (this.value == 0) {
            $('#anonimo').show(500)
            $('#tipoD').fadeIn()
            $('[name="produto"]').fadeIn()
            if ($('#tipoD').children('select').val() == 1) {
              $('#tipoD').children('select').change()
            }
            
          } else {
            $('#anonimo').fadeOut()
            $('.endereco').fadeOut()
            $('.campo-endereco').attr('required', false)
            $('#tipoD').fadeOut().toggleClass('col-8')
            $('[name="produto"]').fadeOut()
          }
        })

        $('#tipoD').on('change', function() {
          if($(this).children('select').val() == 1) {
            $('.endereco').show(500)
            $('.campo-endereco').attr('required', true)
          } else {
            $('.endereco').hide(500)
            $('.campo-endereco').attr('required', false)
          }
        })

        $('[name="cep"]').on('keyup', function(e) {
          let cep = this.value
          $(this).mask('99999-999')

          if(cep.length == 9) {
            cep.replace('-', '')
            $.ajax({
              url: `https://viacep.com.br/ws/${cep}/json/`,
              crossDomain: true,
              contentType: "application/json",
              dataType: "json",
              success: function (response) {
                console.log(response)
                if (!(response.erro)) {
                  $('[name="rua"]').val(response.logradouro).attr('readonly', true)
                  $('[name="bairro"]').val(response.bairro).attr('readonly', true)
                  $('[name="cidade"]').val(response.localidade).attr('readonly', true)
                } else {
                  $('#errocep').show(500)
                }
              }
            });
          } else {
            $('#errocep').fadeOut()
            $('[name="rua"]').val('').attr('readonly', false)
            $('[name="bairro"]').val('').attr('readonly', false)
            $('[name="cidade"]').val('').attr('readonly', false)
          }
        })

        $('[name="whatsapp"]').on('keyup', function() {
          $(this).mask('99 99999-9999')
        })
      })
    </script>
</body>
</html>