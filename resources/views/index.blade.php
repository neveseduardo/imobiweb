<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0" />
        <meta name="theme-color" content="#50248e" />
        <meta name="robots" content="all,follow">

        <title>Imobiliaria webapp</title>

        <link rel="shortcut icon" href="/icon.png" />

        <link rel="stylesheet" href="/css/fa/css/all.min.css" />
        <link rel="stylesheet" href="/css/boot.css" />
        <link rel="stylesheet" href="/css/style.css" />

    </head>

    <body>

        <div class="wrapper">

            <main class="main">

                <nav class="nav">
                    <a class="toggle-nav">MENU</a>

                    <div class="nav-container">

                        <ul>
                            <li><a href="">LANÇAMENTOS</a></li>
                            <li><a href="">USADOS</a></li>
                            <li><a href="">INTERNACIONAL</a></li>
                            <li><a href="">EMPREENDIMENTOS</a></li>
                            <li><a href="">COMERCIAIS</a></li>
                        </ul>

                    </div>



                </nav>
                <!--NAV-->

                <section class="body">

                    <header class="header row">
                        <a class="toggle-nav">
                            <i class="fa fa-bars"></i>
                        </a>
                        <h1>REAL STATE</h1>
                        <button class="header-likes-button"><i class="fa fa-heart"></i></button>
                    </header> 
                    <!--HEADER-->

                    <section class="wellcome row">

                        <div class="row">
                            <div class="col col-x form-search">
                                <div>
                                    <h2>Ache seu sonho</h2>

                                    <form method="GET" action="">
                                        <div class="formgroup">
                                            <select name="location">
                                                <option value="0">LOCALIZAÇÃO</option>
                                                <option value="1">BELEM</option>
                                                <option value="2">ANANINDEUA</option>
                                                <option value="3">MARITUBA</option>
                                                <option value="4">BENEVIDES</option>
                                            </select>
                                        </div>

                                        <div class="formgroup">
                                            <select name="type">
                                                <option value="0">TIPO</option>
                                                <option value="1">APARTAMENTO</option>
                                                <option value="2">CASA</option>
                                                <option value="3">ALUGUEL</option>
                                                <option value="4">TERRENO</option>
                                            </select>
                                        </div>

                                        <div class="formgroup">
                                            <input type="number" placeholder="MIN. QUARTOS" name="baths">
                                        </div>

                                        <div class="formgroup">
                                            <input type="number" placeholder="MIN. BANHEIROS" name="roons">
                                        </div>

                                        <div class="formgroup price">
                                            <input type="number" name="price" placeholder="PREÇO: 0 a 3000" disabled="">
                                            <input type="range" min="0" max="3000" step="100" >
                                        </div>

                                        <div class="formgroup area">
                                            <input type="number" name="area" placeholder="AREA: 0 a 3000" disabled="">
                                            <input type="range" min="0" max="3000" step="100" >
                                        </div>

                                        <div class="formgroup">
                                            <button type="submit" name="submit"><i class="fa fa-search"></i>PESQUISAR</button>
                                        </div>


                                    </form>
                                </div>
                            </div>

                            <div class="col col-x show-news">
                                <div class="slider">
                                    <ul>
                                        @for($i = 0; $i < 5; $i++)
                                        <li>
                                            <a href="">
                                                <figure>
                                                    <img src="/img/slide_0{{ $i + 1 }}.jpg" />
                                                    <figcaption>
                                                        <h3>Av. Nazaré, 2255, Nelem PA</h3>
                                                        <p>5 Quartos, 2 suites, 1 vaga, 25m² x 28m²</p>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </li>
                                        @endfor
                                    </ul>

                                    <div class="pager"></div>

                                    <div class="control">
                                        <h2>Imoveis recentes</h2>
                                        <div>
                                            <a class="prev" href=""><i class="fa fa-arrow-left"></i></a>
                                            <a class="next" href=""><i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <!--WELLCOME-->

                    <section class="releases row section-padding">
                        <div class="wrap-g">

                            <h1 class="section-title">LANÇAMENTOS</h1>

                            <div class="row">
                                @for($i = 0; $i < 15; $i++)
                                <article class="col col-s spacing">
                                    <header>
                                        <figure>
                                            <img src="/img/ap.jpg" />
                                            <figcaption></figcaption>
                                        </figure>
                                    </header>

                                    <section>
                                        <h1>APARTAMENTO EM IMPANEMA</h1>

                                        <div>
                                            <span><a><i class="fa fa-tag"></i>3 Dorm</a></span>
                                            <span><a><i class="fa fa-tag"></i>2 Suit</a></span>
                                            <span><a><i class="fa fa-tag"></i>1 Vag</a></span>
                                            <!--expoente ² alt + 0178 -->
                                            <span><a><i class="fa fa-tag"></i>11m² x 12m²</a></span>
                                            <span><a><i class="fa fa-tag"></i>3 Dorm</a></span>
                                        </div>

                                        <p>A partir de: </p><h2>2.028,00</h2>
                                    </section>

                                    <footer>
                                        <ul>
                                            <li><a href=""><i class="fa fa-heart"></i>LIKE</a></li>
                                        </ul>
                                    </footer>
                                </article>
                                @endfor
                            </div>    
                        </div>
                    </section>
                    <!--RELEASES-->

                    <section class="tirelessly row section-padding">

                        <div class="wrap-g">
                            <div class="overlay">
                                <h1>Nós buscamos incansavelmente o melhor pra você cliente</h1>
                                <p>Criamos a mais variada gama de propriedades para que você possa ter uma ótima variedade de escolha!</p>
                                <a href="">ENTRE EM CONTATO</a>
                            </div>

                        </div>

                    </section>
                    <!--TIRELESSLY-->

                    <section class="peoplesays row section-padding">
                        <div class="wrap-g">

                            <h1 class="section-title">Clientes dizem</h1>

                            <div class="row">
                                <div class="col col-m spacing">
                                    <p>15, MARÇO, 2019</p>

                                    <p>Seus gerentes têm sido ativos em sua resposta a reparos e sempre pacientes com nossas frustrações. Você sempre nos encontrou inquilinos maravilhosos.</p>

                                    <div>
                                        <figure></figure>
                                        <div>
                                            <h2>Carol Santiago</h2>
                                            <p>Farmacêutica</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col col-m spacing">
                                    <p>10, AGOSTO, 2019</p>

                                    <p>Recentemente, alugamos um apartamento através do seu site e fomos atendidos por James Thompson. Ele nos forneceu o maior apoio em todas as questões de propriedade.</p>

                                    <div>
                                        <figure></figure>
                                        <div>
                                            <h2>Pedro feitos</h2>
                                            <p>Adminstrador de empresas</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-m spacing">
                                    <p>10, ABRIL, 2019</p>

                                    <p>Eu sempre achei sua equipe extremamente rápida e profissional com todas as negociações que tive com eles. Você sempre me mantém atualizado sobre o progresso.</p>

                                    <div>
                                        <figure></figure>
                                        <div>
                                            <h2>Fabio Ferreira</h2>
                                            <p>Gerente de vendas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-m spacing">
                                    <p>23, JANEIRO, 2019</p>

                                    <p>O seu conselho e apoio da nossa reunião inicial através da ligação com os inquilinos atuais e um programa de marketing polido contribuíram para um grande processo de venda, obrigado!</p>

                                    <div>
                                        <figure></figure>
                                        <div>
                                            <h2>Yussef Lourenço</h2>
                                            <p>Médico</p>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </section>
                    <!--PEOPLESAYS-->
                    
                    <section class="newslatter row section-padding">

                        <div class="wrap-g">

                            <div class="row">
                                <h1>Inscreva-se na nossa newsletter e fique por dentro</h1>
                                <p>Você pode cancelar a inscrição a qualquer momento. Para o efeito, por favor, encontrar nossas informações de contato no aviso legal.</p>
                            </div>

                            <form action="" method="GET">
                                <div class="formgroup">
                                    <input name="newsletter" placeholder="Seu melhor e-mail" />
                                </div>
                                <div class="formgroup">
                                    <button type="submit">INSCREVER-SE</button>
                                </div>
                            </form>

                        </div>

                    </section>
                    <!--NEWLETTER-->

                    <section class="team row section-padding">

                        <div class="wrap-g">

                            <h1 class="section-title">NOSSOS AGENTES</h1>


                            <div class="row"> 
                                @for($i = 0; $i < 4; $i++)
                                <article class="col col-m spacing">
                                    <figure>
                                        <img src="/img/corretor_01.jpg" />
                                        <figcaption>
                                            <h2>Jhon Due</h2>
                                            <h3>Vendedor comercial</h3>
                                            <ul>
                                                <li><a><i class="fab fa-facebook"></i></a></li>
                                                <li><a><i class="fab fa-twitter"></i></a></li>
                                                <li><a><i class="fab fa-instagram"></i></a></li>
                                                <li><a><i class="fab fa-linkedin"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </article>
                                @endfor
                            </div>

                        </div>

                    </section>
                    <!--TEAM-->

                    <footer class="footer row section-padding">

                        <div class="wrap-g">

                            <div class="row">

                                <div class="col col-g spacing">
                                    <h1>Encontre-nos</h1>

                                    <ul>
                                        <li><i class="fa fa-phone"></i>(91) 96666-6666</li>
                                        <li><i class="fa fa-envelope"></i>suporte@realstate.com</li>
                                        <li><i class="fas fa-map-marker"></i>Rua Alvaro Adolf, Pedreira, Belem, PA</li>
                                    </ul>

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15954.15164819834!2d-48.49438422328579!3d-1.45159988306147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a48e9b7390d53b%3A0xed591b301b209742!2zTmF6YXLDqSwgQmVsw6ltIC0gUEE!5e0!3m2!1spt-BR!2sbr!4v1558824647659!5m2!1spt-BR!2sbr" width="100%" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>

                                <div class="col col-g spacing">
                                    <h1>Sobre nós</h1>

                                    <p>Se você está procurando um lugar para comprar ou alugar, nós sabemos o que oferecer a você. Sabemos que a busca por uma casa adequada e sua compra não podem ser comparadas com as compras diárias. Primeiro de tudo, é mais caro e requer uma atitude mais cuidadosa. Se você estiver indo para encontrar uma nova casa, então você está procurando um lugar onde você pode simplesmente esquecer todos os seus problemas e relaxar. Você precisa de um lugar para se esconder do barulho do dia-a-dia e tomar uma xícara de chá com seus amigos e parentes.</p>

                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                    </ul>

                                </div>

                                <div class="col col-g spacing">
                                    <h1>Solicite uma consulta</h1>

                                    <form action="" method="POST">
                                        {{ csrf_field() }}
                                        <div class="formgroup">
                                            <input name="name" placeholder="Nome" type="text" required="">
                                        </div>

                                        <div class="formgroup">
                                            <input name="email" placeholder="E-Mail" type="email" required="">
                                        </div>

                                        <div class="formgroup">
                                            <textarea placeholder="Menssagem" required=""></textarea>
                                        </div>

                                        <div class="formgroup">
                                            <button type="submit"><i class="fa fa-envelope"></i>ENVIAR</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="row">
                                <p>{{ date('Y') }} © Direitos autorais reservados - REAL STATE</p>
                            </div>


                        </div>

                    </footer>
                    <!--FOOTER-->

                    <a class="btn-back"><i class="fa fa-arrow-up"></i></a>                    

                </section>

            </main>

        </div>

    </body>

    <script src="/js/jquery.js"></script>
    <script src="/js/nav.js"></script>
    <script src="/js/formSearch.js"></script>
    <script src="/js/cycle.js"></script>
    <script src="/js/slider.js"></script>
    <script src="/js/btnBack.js"></script>

</html>