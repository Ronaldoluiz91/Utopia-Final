<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utopia [Página principal]</title>
    <meta name="description" content="Projeto para o Utopia Bar">

    <!-- CSS do plugin lightbox-->
    <link rel="stylesheet" href="css/lightbox.css">
    <!--Buscando o css externo-->
    <link rel="stylesheet" href="css/estilo.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>

<body>
    <header id="topo">
        <div>
            <h1>
                <a id="logotipo" href="index.html"><img src="imagens/utopiaLogo-removebg-preview.png"
                        alt="Logotipo"></a>
            </h1>
            <span id="iconMenu" class="material-symbols-outlined" onclick="clickMenu()">
                menu
            </span>
            <div class="sublinhado"></div>

            <nav id="itens">
                <span id="iconClose" class="material-symbols-outlined" onclick="clickMenu()">
                    close
                </span>
                <a href="index.html" tabindex="1">Home</a>
                <!--tabindex é utilizado para a acessibilidade-->
                <a href="cardapio.html" tabindex="2">Cardapio</a>
                <a href="reserva.php" tabindex="3">Reserva</a>
                <a href="contato.html" tabindex="4">Contato</a>
                <a href="trabalheConosco.html" tabindex="5">Trabalhe Conosco</a>
            </nav>
        </div>
    </header>

    <main class="conteudo">

        <!-- Slide -->
        <div id="imgContainer" class="carousel-container">
            <img id="img1" src="imagens/utopia2.jpeg" class="carousel-img">
            <img id="img2" src="imagens/utopia6.jpeg" class="carousel-img hidden">
            <img id="img3" src="imagens/utopia1.jpeg" class="carousel-img hidden">
            <img id="img4" src="imagens/utopia-noite.jpg" class="carousel-img hidden">
            <img id="img5" src="imagens/group-cocktail-shot.jpg" class="carousel-img hidden">
            <img id="img6" src="imagens/utopia3.jpeg" class="carousel-img hidden">
            <img id="img7" src="imagens/utopia4.jpeg" class="carousel-img hidden">
        </div>

        <br>
        <div class="frase">
            <p> " Ninguém tem a segunda possibilidade de causar a primeira impressão. "</p>
        </div>

        <br>
        <div class="bem-vindo">
            <div class="fundoBemvindo">
                <div class="Cozinha">
                    <div class="cozinha1">
                        <div class="card-bemvindo">
                            <img src="imagens/barman2.webp">
                            <br>
                            <div class="texto1">
                                <p>Ambiente acolhedor e sem frescuras, garçons simpáticos que te chamam pelo nome,
                                    sabem
                                    seu pedido de cor e não deixam faltar chopp em sua mesa. Bar de verdade. </p>
                            </div>
                        </div>
                        <div class="card-bemvindo">
                            <img src="imagens/bar-ambiente.jpg" alt="bar-ambiente">
                            <br>
                            <div class="texto1">
                                <p>Petiscos tradicionais feitos de maneira extraordinária. Poucas e boas
                                    invencionices
                                    espirituosas de botequim além de pratos clássicos saborosos e com muita fartura.
                                </p>
                            </div>
                        </div>
                        <div class="card-bemvindo">
                            <img src="imagens/cozinheiross.jpg">
                            <br>
                            <div class="texto1">
                                <p>Pratos deliciosos, alimentos selecionados com sabor único, que certamente será
                                    inesquecivel, literalmente de "dar agua na boca para o seu paladar..." </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 
        <div class="fundoGaleria"> -->

        <div class="fundoGaleria2">
            <h2> Conheça o espaço utopia ! </h2>
            <figure class="galeria">
                <a data-title="Frente do Utopia Gastrobar" href="imagens/utopia6.jpeg">
                    <img src="imagens/utopia6.jpeg" alt="">
                </a>
                <a data-title="Entrada" href="imagens/utopia2.jpeg">
                    <img src="imagens/utopia2.jpeg" alt="">
                </a>
                <a data-title="Salão Principal" href="imagens/utopia3.jpeg">
                    <img src="imagens/utopia3.jpeg" alt="">
                </a>
                <a data-title="Salão" href="imagens/utopia4.jpeg">
                    <img src="imagens/utopia4.jpeg" alt="">
                </a>

                <a data-title="Salão" href="imagens/utopia5.jpeg">
                    <img src="imagens/utopia5.jpeg" alt="">
                </a>

                <a data-title="Salão" href="imagens/utopia1.jpeg">
                    <img src="imagens/utopia1.jpeg" alt="">
                </a>


                <a data-title="" href="imagens/utopia13.jpg">
                    <img src="imagens/utopia13.jpg" alt="">
                </a>

                <a data-title="" href="imagens/utopia14.jpg">
                    <img src="imagens/utopia14.jpg" alt="">
                </a>

                <a data-title="Frente do Utopia de dia" href="imagens/utopia15.jpg">
                    <img src="imagens/utopia15.jpg" alt="">
                </a>

                <a data-title="Salão" href="imagens/utopia-salao.jpeg">
                    <img src="imagens/utopia-salao.jpeg" alt="">
                </a>

                <a data-title="Frente do Utopia noturna" href="imagens/utopia-noite.jpg">
                    <img src="imagens/utopia-noite.jpg" alt="">
                </a>

                <a data-title="" href="imagens/utopia-salao2.jpg">
                    <img src="imagens/utopia-salao2.jpg" alt="">
                </a>

                <a data-title="" href="imagens/utopia-salao3.jpg">
                    <img src="imagens/utopia-salao3.jpg" alt="">
                </a>

                <a data-title="" href="imagens/utopia-externa1.jpg">
                    <img src="imagens/utopia-externa1.jpg" alt="">
                </a>

                <a data-title="" href="imagens/utopia-frenteeee.jpg">
                    <img src="imagens/utopia-frenteeee.jpg" alt="">
                </a>

            </figure>
        </div>


        <div class="vejaCardapio">
            <h1>Conheça nosso cardapio</h1>

            <p>A combinação perfeita entre ambiente agradavel e gastronomia saborosa !</p>

            <button><a href="cardapio.html"> Veja Nosso Cardapio</a></button>

            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img src="imagens/coxinha-utopia.jpg" alt="">
                    </div>

                    <div class="slide">
                        <img src="imagens/raviolli.jpg" alt="">
                    </div>

                    <div class="slide">
                        <img src="imagens/x-burguer-index.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagens/negroni.webp" alt="">
                    </div>
                </div>
            </div>
        </div>


        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.1175716025114!2d-46.69459782376095!3d-23.528273360379213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef98b0f907357%3A0x23aef49796ca6b81!2sUtopia%20Bar!5e0!3m2!1spt-BR!2sbr!4v1710526037339!5m2!1spt-BR!2sbr"
            width="100%" height="250" style="border:50;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </main>


    <footer class="rodape">
        <div class="endereco">
            <div id="logo-rodape" class="footerColum">
                <a href="index.html"><img src="imagens/utopiaLogo-removebg-preview.png" alt="Logotipo"></a>
            </div>

            <div class="locali">
                <h1>Localização</h1>
                <img class="iconFooter" src="imagens/icones/localizacao.png" alt="">
                <p>Rua Tito - 31 - Vila Romana</p>
                <p>São Paulo - SP</p>

                <h1>Telefone</h1>
                <img class="iconFooter" src="imagens/icones/chamada-telefonica.png" alt="">
                <p>(11) 3865-8028</p>
            </div>

            <div class="funcionamento">

                <h1>Horário de Funcionamento</h1>
                <img class="iconFooter" src="imagens/icones/relogio.png" alt="">
                <p>Segunda a sexta à partir das 14h</p>
                <p>Sabado: 11:00 as 00:00 horas</p>
                <p>Domingo 15:00 as 2:00 horas</p>

            </div>


            <div class="contato">
                <h1>Redes Sociais</h1>
                <img class="iconFooter" src="imagens/icones/instagram (1).png" alt="">
                <p>@utopiaBar</p>

                <!-- <h1>Whatsapp</h1> -->
                <img class="iconFooter" src="imagens/icones/whatsapp.png" alt="">
                <p>(11)96337-6433</p>


            </div>
            <!-- 
            <div class="contato">
                <h1>Telefone</h1>
                <img class="iconFooter" src="imagens/icones/chamada-telefonica.png" alt="">
                <p>(11) 3865-8028</p>
                <h1>Whatsapp</h1>
                <img class="iconFooter" src="imagens/icones/whatsapp.png" alt="">
                <p>(11)96337-6433</p>
            </div> -->

            <!-- <div class="funcionamento">

                <h1>Horário de Funcionamento</h1>
                <img class="iconFooter" src="imagens/icones/relogio.png" alt="">
                <p>Segunda a sexta à partir das 14h</p>
                <p>Sabado: 11:00 as 00:00 horas</p>
                <p>Domingo 15:00 as 2:00 horas</p>

            </div> -->
        </div>

    </footer>

    <div class="assinatura">
        <p>Desenvolvido por <b>Ronaldo e Kennedy</b> Site acadêmico |
            SENAC TITO &copy; 2024</p>
    </div>

    <script src="js/acoes.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/galeria.js"></script>
    <script src="js/lightbox.min.js"></script>


</body>

</html>