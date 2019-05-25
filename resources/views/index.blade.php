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

                <section class="body">

                    <header class="header row">
                        <a class="toggle-nav">
                            <i class="fa fa-bars"></i>
                        </a>
                        <h1>REAL STATE</h1>
                        <button class="header-likes-button"><i class="fa fa-heart"></i></button>
                    </header> 

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

                    <div class="releases row section-padding">
                        <div class="wrap-g">

                            <h1>LANÇAMENTOS</h1>

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
                    </div>
                    </div>

                </section>



            </main>

        </div>

    </body>

    <script src="/js/jquery.js"></script>
    <script src="/js/nav.js"></script>
    <script src="/js/formSearch.js"></script>
    <script src="/js/cycle.js"></script>
    <script src="/js/slider.js"></script>

</html>