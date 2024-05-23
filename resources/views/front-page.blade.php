@extends('layouts.app')

@section('content')
<!-- Úvodní stranka  -->
<section class="main">
    <div class="main-header">
        <div class="container">
            <div class="main-header-content">
                <img class="logo" src="{{ Vite::image('logo-linkcity.svg') }}" alt="logo" width="120.16" height="55.25">
                <div class="main-header-right">
                    <p class="dashicons dashicons-menu"></p>
                    <p class="main-header-language">CZE</p>
                </div>
            </div>
        </div>
    </div>
    <div class="center">
        <div class="container">
            <div>
                <div class="main-content">
                    <div>
                        <h1>Linkcity Česká republika</h1>
                        <p>Project figjam arrow bullet link. Layout rectangle arrow auto scale
                            vector.
                            Export
                            star vertical ellipse star. Vertical horizontal inspect comment shadow arrange.</p>
                        <button>Kontaktujte nás</button>
                    </div>
                </div>

                <div class="main-footer">
                    <div class="container">
                        <div class="main-footer-content">
                            <div class="main-footer-slide-numbers">
                                <p>1</p>
                                <hr>
                                <p>2</p>
                                <p>3</p>
                                <p>4</p>
                            </div>
                            <div class="main-footer-social-media">
                                <a href="#"><span class="dashicons dashicons-facebook"></span></a>
                                <a href="#"><span class="dashicons dashicons-instagram"></span></a>
                                <a href="#"><span class="dashicons dashicons-linkedin"></span></a>
                                <a href="#"><span class="dashicons dashicons-twitter"></span></a>
                                <a href="#"><span class="dashicons dashicons-youtube"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projekty -->
<section class="projects center">
    <div>
        <div class="container">
            <div>
                <div class="projects-header">
                    <h1>PROJEKTY</h1>
                    <div class="projects-header-right">
                        <p class="projects-header-active">Vše<sup>47</sup></p>
                        <p>Industriální<sup>12</sup></p>
                        <p>Rezidenční<sup>31</sup></p>
                        <p>Urbanistické<sup>4</sup></p>
                    </div>
                </div>
                <div class="projects-content">
                    <div class="projects-card">
                        <div class="projects-card-image">
                            <img src="{{Vite::image('project1.jfif')}}" alt="projekt">
                        </div>
                        <div class="projects-card-small">
                            <small>Industriální</small>
                            <small>2020 – 2022</small>
                        </div>
                        <p><strong>Orlickoústecká nemocnice</strong></p>
                        <a>Zobrazit více <span class="dashicons dashicons-arrow-right-alt"></span></a>
                    </div>
                    <div class="projects-card">
                        <div class="projects-card-image">
                            <img src="{{Vite::image('project2.jfif')}}" alt="projekt">
                        </div>
                        <div class="projects-card-small">
                            <small>Rezidenční</small>
                            <small>2011 – 2021</small>
                        </div>
                        <p><strong>Rezidence Chrudimpark</strong></p>
                        <a>Zobrazit více <span class="dashicons dashicons-arrow-right-alt"></span></a>
                    </div>
                    <div class="projects-card">
                        <div class="projects-card-image">
                            <img src="{{Vite::image('project3.jfif')}}" alt="projekt">
                        </div>
                        <div class="projects-card-small">
                            <small>Industriální</small>
                            <small>2014 – 2016</small>
                        </div>
                        <p><strong>ČVUT - Institut robotiky a kybernetiky</strong></p>
                        <a>Zobrazit více <span class="dashicons dashicons-arrow-right-alt"></span></a>
                    </div>
                    <div class="projects-card">
                        <div class="projects-card-image">
                            <img src="{{Vite::image('main-bg.jpg')}}" alt="projekt">
                        </div>
                        <div class="projects-card-small">
                            <small>Rezidenční</small>
                            <small>2021 – 2022</small>
                        </div>
                        <p><strong>Viladomy Lučištníků</strong></p>
                        <a>Zobrazit více <span class="dashicons dashicons-arrow-right-alt"></span></a>
                    </div>
                    <div class="projects-card">
                        <div class="projects-card-image">
                            <img src="{{Vite::image('project5.jfif')}}" alt="projekt">
                        </div>
                        <div class="projects-card-small">
                            <small>Industriální</small>
                            <small>2017 – 2018</small>
                        </div>
                        <p><strong>Nexen European Plant Project</strong></p>
                        <a>Zobrazit více <span class="dashicons dashicons-arrow-right-alt"></span></a>
                    </div>
                    <div class="projects-card">
                        <div class="projects-card-image">
                            <img src="{{Vite::image('project6.jfif')}}" alt="projekt">
                        </div>
                        <div class="projects-card-small">
                            <small>Rezidenční</small>
                            <small>2016 – 2018</small>
                        </div>
                        <p><strong>Bytové domy Na Radosti II</strong></p>
                        <a>Zobrazit více <span class="dashicons dashicons-arrow-right-alt"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="projects-show-more">
            <button class="projects-btn">Zobrazit více</button>
        </div>
    </div>
</section>

<!-- Aktuality -->
<section class="news center">
    <div class="container">
        <div>
            <div class="news-header">
                <h1>AKTUALITY</h1>
                <div class="news-header-right">
                    <div class="news-header-arrow-left">
                        <p class="dashicons dashicons-arrow-left-alt2"></p>
                    </div>
                    <div class="news-header-arrow-right">
                        <p class="dashicons dashicons-arrow-right-alt2"></p>
                    </div>
                </div>
            </div>
            <div class="news-content">
                <img src="{{ Vite::image('../images/news.jfif') }}" alt="Aktualita">

                <div class="news-content-right">
                    <small>29. 5. 2023 | ESG</small>
                    <h2>Best Practice in Creating Social Value Beyond London</h2>
                    <p>Connection content share edit hand. Share shadow edit team arrange flows mask italic effect.
                        Bullet
                        stroke scrolling selection pixel opacity vector subtract arrange. Rectangle layer figjam variant
                        text
                        edit ipsum ellipse fill frame. Draft mask component follower create flows figma rectangle.</p>
                    <button><span class="dashicons dashicons-download"></span> Stáhnout výroční zprávu</button>
                </div>
            </div>

            <div class="news-all-btn">
                <button>Všechny aktuality</button>
            </div>
        </div>
    </div>
</section>

<!-- Obrazky -->
<section class="images">
    <img class="images-1" src="{{ Vite::image('image1.jfif') }}" alt="obrazek">
    <img class="images-2" src="{{ Vite::image('image2.jfif') }}" alt="obrazek">
    <img class="images-3" src="{{ Vite::image('project1.jfif') }}" alt="obrazek">
</section>

<!-- O nás -->
<section class="about-us center">
    <div class="container">
        <div class="about-us-content">
            <div class="about-us-left">
                <h1>O LinkCity</h1>
                <p>Project figjam arrow bullet link. Layout rectangle arrow auto scale vector. Export star vertical
                    ellipse
                    star. Vertical horizontal inspect comment shadow arrange draft follower boolean arrow.</p>
                <h2>O LinkCity</h2>
                <p>Project figjam arrow bullet link. Layout rectangle arrow auto scale vector. Export star vertical
                    ellipse
                    star. Vertical horizontal inspect comment shadow arrange draft follower boolean arrow.</p>
                <div class="responsive-btn-center">
                    <button>Conversion button</button>
                </div>
            </div>

            <img src="{{ Vite::image('about-us.jfif') }}" alt="O nás">
        </div>
    </div>
</section>

<!-- Footer projekt -->
<section class="footer-project center">
    <div class="container">
        <div class="footer-project-content">
            <div class="footer-project-left">
                <h1>Nexen European Plant Project</h1>
                <p>Project figjam arrow bullet link. Layout rectangle arrow auto scale vector. Export star vertical
                    ellipse
                    star.</p>
            </div>
            <div class="responsive-btn-center">
                <button>Více o projektu</button>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<section class="footer center">
    <div class="container">
        <div>
            <img src="{{ Vite::image('logo-linkcity.svg') }}" alt="logo" width="120.16" height="55.25">

            <div class="footer-content">
                <div>
                    <a href="#">Domů</a>
                    <a href="#">O nás</a>
                    <a href="#">Naše projekty</a>
                    <a href="#">Aktuality</a>
                    <a href="#">Kontakt</a>
                </div>
                <div>
                    <p><strong>Sociální sítě</strong></p>
                    <a href="#">O nás</a>
                    <a href="#">Naše projekty</a>
                    <a href="#">Aktuality</a>
                    <a href="#">Kontakt</a>
                </div>
                <div>
                    <p><strong>Adresa</strong></p>
                    <a href="#">Na Harfě 337/3,
                        <br>Praha 9</a>
                    <a href="#">+420 226 056 605</a>
                    <a href="#">info@linkcity.cz</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection