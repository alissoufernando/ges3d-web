<div>
    <!--
    page header - start
    -->
    <div class="page-header">
        <div class="page-header-wrapper">
            <div class="page-header-inner">
                <div class="container">
                    <div class="row d-lg-flex align-items-lg-end">
                        <div class="col-lg-6">
                            <div class="page-header-content c-white">
                                <h1>Contactez-nous</h1>
                                <ul>
                                    <li>
                                        <a href="{{ route('welcome') }}" class="link-underline">
                                            <span>Accueil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="las la-angle-right"></i>
                                        <a href="{{ route('site.contact') }}" class="link-underline">
                                            <span>Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="page-header-search">
                                <form>
                                    <input type="text" placeholder="Search">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-pattern background-pattern-1">
                <div class="background-pattern-img background-loop" style="background-image: url(assets/images/patterns/pattern.jpg);"></div>
                <div class="background-pattern-gradient"></div>
                <div class="background-pattern-bottom">
                    <div class="image" style="background-image: url(assets/images/patterns/pattern-1.jpg)"></div>
                </div>
            </div>
        </div>
    </div>
    <!--
    page header - end
    -->
    <!--
    contact details - start
    -->
    <div class="contact-details">
        <div class="contact-details-wrapper">
            <div class="container">
                <!--
                contact details heading - start
                -->
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="section-heading center width-55">
                            <div class="sub-heading c-green upper ls-1">
                                <i class="las la-handshake"></i>
                                <h5>Contactez-nous</h5>
                            </div>
                            <div class="main-heading c-dark">
                                <h1>De nombreux moyens de nous joindre aujourd'hui.</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                contact details heading - end
                -->
                <!--
                contact details row - start
                -->
                <div class="row gx-5 details-row">
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-1">
                            <div class="app-feature-single-wrapper">
                                <div class="icon">
                                    <i class="las la-phone-volume"></i>
                                </div>
                                <h3 class="c-dark">Appelez-nous</h3>
                                <p class="c-grey">
                                    Télephone:
                                    <a href="tel:+123456789" class="link-underline link-underline-1">
                                        <span>+123 456 789</span>
                                    </a>
                                </p>
                                <p class="c-grey">
                                    Fax:
                                    <a href="tel:+123456789" class="link-underline link-underline-1">
                                        <span>+123 456 789</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-1">
                            <div class="app-feature-single-wrapper">
                                <div class="icon">
                                    <i class="las la-envelope-open"></i>
                                </div>
                                <h3 class="c-dark">Envoyez-nous un courriel</h3>
                                <p class="c-grey">
                                    <a href="mailto:contact@ges3d.com.com" class="link-underline link-underline-1">
                                        <span>contact@ges3d.com</span>
                                    </a>
                                </p>
                                <p class="c-grey">
                                    <a href="mailto:support@ges3d.com" class="link-underline link-underline-1">
                                        <span>support@ges3d.com</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-1">
                            <div class="app-feature-single-wrapper">
                                <div class="icon">
                                    <i class="las la-map-marked-alt"></i>
                                </div>
                                <h3 class="c-dark">Trouvez-nous</h3>
                                <p class="c-grey">Bénin calavi.</p>
                                <p class="c-grey">IITA , pharmacie IITA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                contact details row - end
                -->
            </div>
        </div>
    </div>
    <!--
    contact details - end
    -->

    <!--
    contact form section - start
    -->
    <div class="contact-form-section">
        <div class="contact-form-section-wrapper">
            <div class="container">
                <div class="row gx-5 contact-form-section-row">
                    <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <!--
                        contact form - start
                        -->
                        <div class="contact-form drop-shadow-2">
                            <div class="contact-form-wrapper">
                                <div class="section-heading section-heading-2 center">
                                    <div class="sub-heading c-green upper ls-1">
                                        <i class="las la-envelope"></i>
                                        <h5>contact</h5>
                                    </div>
                                    <div class="main-heading c-dark">
                                        <h1>Écrire le message</h1>
                                    </div>
                                    @if (Session::has('message'))
                                    <div class="alert alert-success">{{Session::get('message')}}</div>
                                    @endif
                                </div>
                                <form wire:submit.prevent='saveContact'>

                                    <div class="form-floating">
                                        <input class="input form-control" id="name-field" type="text" placeholder="Votre nom" wire:model="nom">
                                        <label for="name-field">Nom</label>
                                        @error('nom')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input class="input form-control" id="email-field" type="email" placeholder="Votre adresse mail" wire:model="email">
                                        <label for="email-field">Adresse</label>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input class="input form-control" id="message-field" type="text" placeholder="Message" wire:model="message">
                                        <label for="message-field">Message</label>
                                        @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="button button-2">
                                        <span class="button-inner">
                                            <span class="button-content">
                                                <span class="text">Envoyer</span>
                                            </span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!--
                        contact form - end
                        -->
                    </div>
                    <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <!--
                        newsletter form - start
                        -->
                        <div class="contact-form contact-form-1 drop-shadow-2">
                            <div class="contact-form-wrapper">
                                <div class="section-heading section-heading-2 center">
                                    <div class="sub-heading c-green upper ls-1">
                                        <i class="las la-envelope-open"></i>
                                        <h5>s'abonner</h5>
                                    </div>
                                    <div class="main-heading c-dark">
                                        <h1>Notre newsletter</h1>
                                    </div>
                                    @if (Session::has('messageN'))
                                    <div class="alert alert-success">{{Session::get('messageN')}}</div>
                                    @endif
                                </div>
                                <div class="contact-form-icon">
                                    <i class="las la-envelope-open-text"></i>
                                </div>
                                <form wire:submit.prevent='saveNewLetter'>

                                    <div class="form-floating">
                                        <input class="input form-control" id="email-field-1" type="email" placeholder="Votre adresse mail" wire:model="emailNewletter">
                                        <label for="email-field-1">Adresse mail</label>
                                        @error('emailNewletter')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="button button-3">
                                        <span class="button-inner">
                                            <span class="button-content">
                                                <span class="text">s'abonner</span>
                                            </span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!--
                        newsletter form - end
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    contact form section - end
    -->
</div>
