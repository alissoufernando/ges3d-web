<div class="navigation navigation-1">
    <div class="navigation-wrapper">
        <div class="container">
            <div class="navigation-inner">
                <div class="navigation-logo">
                    <a class="logo" href="/">
                        <img src="{{ asset('assets/site/images/ewaste.png') }}" alt="orions-logo" class="ewaste">
                    </a>
                    <a class="logo-white" href="/">
                        <img src="{{ asset('assets/site/images/ewaste.png') }}" alt="orions-logo" style="filter: brightness(0) invert(1);" class="ewaste">
                    </a>
                </div>
                <div class="navigation-menu">
                    <div class="mobile-header">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('assets/site/images/ewaste.png') }}" alt="image" style="filter: brightness(0) invert(1);" class="ewaste">
                            </a>
                        </div>
                        <ul>
                            <li class="close-button">
                                <i class="fas fa-times"></i>
                            </li>
                        </ul>
                    </div>
                    <ul class="parent">
                        <li class="">
                            <a href="{{ route('welcome') }}" class="link-underline link-underline-1">
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="{{ route('site.about') }}" class="link-underline link-underline-1">
                                <span>À propos</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="{{ route('site.sensibilisation') }}" class="link-underline link-underline-1">
                                <span>Sensibilisation</span>
                            </a>
                        </li>
                        <!-- <li class="has-child">
                            <a href="blog-1.html" class="link-underline link-underline-1">
                                <span>Blog</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="{{ route('site.boutique') }}" class="link-underline link-underline-1">
                                <span>Boutique</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('site.contact') }}" class="link-underline link-underline-1">
                                <span>Contactez-nous</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('site.alert') }}" class="link-underline link-underline-1">
                                <span>Alertez-nous</span>
                                <!-- <i class="fab fa-user-circle-o"></i> -->
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('site.login') }}" class="link-underline link-underline-1">
                                <span>Connexion</span>
                                <!-- <i class="fab fa-user-circle-o"></i> -->
                            </a>
                        </li>
                    </ul>
                    <div class="social">
                        <h6>Follow</h6>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="background-pattern">
                        <div class="background-pattern-img background-loop" style="background-image: url(assets/images/patterns/pattern.jpg);"></div>
                        <div class="background-pattern-gradient"></div>
                    </div>
                </div>
                <div class="navigation-bar">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
