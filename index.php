<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>Home</title>
</head>

<body>

<?php include("nav.php"); ?>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Permissão de cookies</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Aceite ou decline para continuar</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Aceito</button>
        <button type="button" class="btn btn-primary">Recuso</button>
      </div>
    </div>
  </div>
</div>

        <div class="row">
            <div class="col">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <br>

        <div class="container main" id="main">
            <div class="container text-center">
                <div class="row">
                    <p id="h3">ETEC da Zona Leste</h3>
                    <div class="col">
                        <p class="mar">Em 6 de abril de 2002 foi inaugurando o centro tecnológico da zona leste,
                            constituído
                            por ensino superior (FATEC) e cursos técnicos (ETEC). Em 2009 foi instinto o centro
                            tecnológico
                            e foram criadas duas unidades: A ETEC da Zona Leste e a FATEC da Zona Leste. A ETEC da
                            Zona
                            Leste está localizada na Avenida Águia de Haia, 2633, com fácil acesso de transporte
                            público,
                            perto do terminal A.E Carvalho e também do metrô Arthur Alvim
                        </p>
                    </div>
                </div>
            </div>

            <br>

            <div class="container text-center" id="HomeBody">
                <h3 id="ttl">Eventos</h3>
                <div class="row">
                    <div class="col">
                        <img src="img/photo1.jpg" width="250" height="400" id="ppd">
                        <br>
                    </div>
                    <div class="col">
                        <img src="img/photo2.jpg" width="250" height="400" id="ppd">
                        <br>
                    </div>
                    <pre></pre>
                    <hr>
                </div>
                <pre></pre>
                <div class="row">
                    <div class="col">
                        <img src="img/photo3.jpg" width="250" height="400" id="ppd">
                        <br>
                    </div>
                    <div class="col">
                        <img src="img/photo4.jpg" width="250" height="400" id="ppd">
                        <br>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col text-center">
                        <h4 id="ttl">Veja eventos lugares visitados por nossos alunos.</h4>
                    </div>
                    <pre></pre>
                    <hr>
                </div>
            </div>
            <br>

            <div class="container text-center" id="HomeBody2">
                <div class="row">
                    <h4 id="ttl">Cursos da nossa unidade: </h4>
                    <div class="col">
                        <img src="img/adm.png" width="175" height="175" id="ppq">
                        <p>Adiministração</p>
                    </div>
                    <div class="col">
                        <img src="img/ds.png" width="175" height="175" id="ppq">
                        <p>Desenvolvimento de sistemas</p>
                    </div>
                    <div class="col">
                        <img src="img/rh.png" width="175" height="175" id="ppq">
                        <p>Recursos humanos</p>
                    </div>
                </div>

                <div class="container text-center" id="HomeBody2">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-danger" id="btn"
                                href="https://www.eteczonaleste.com.br/">Saiba mais</button>
                        </div>
                    </div>
                    <br>
                </div>

                <br>
            </div>
        </div>
    </body>

    </html>