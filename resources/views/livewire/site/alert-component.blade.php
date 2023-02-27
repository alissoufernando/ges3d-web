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
                                <h1>Envoyez nous vos déchets</h1>
                                <ul>
                                    <li>
                                        <a href="{{ route('welcome') }}" class="link-underline">
                                            <span>Accueil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="las la-angle-right"></i>
                                        <a href="{{ route('site.alert') }}" class="link-underline">
                                            <span>Alert</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="page-header-search">
                                <form>
                                    <input type="text" placeholder="Search">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="background-pattern background-pattern-1">
                <div class="background-pattern-img background-loop" style="background-image: url(assets/site/images/patterns/pattern.jpg);"></div>
                <div class="background-pattern-gradient"></div>
                <div class="background-pattern-bottom">
                    <div class="image" style="background-image: url(assets/site/images/patterns/pattern-1.jpg)"></div>
                </div>
            </div>
        </div>
    </div>
    <!--
    page header - end
    -->
    <!--
    contact form section - start
    -->
    <div class="contact-form-section">
        <div class="contact-form-section-wrapper">
            <div class="container" >
                <div class="row gx-5 contact-form-section-row justify-content-center">
                    <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <!--
                        contact form - start
                        -->
                        <div class="contact-form drop-shadow-2">
                            <div class="contact-form-wrapper">
                                <div class="section-heading section-heading-2 center">
                                    <div class="sub-heading c-green upper ls-1">
                                        <i class="las la-envelope"></i>
                                        <h5>Alert</h5>
                                    </div>
                                    <div class="main-heading c-dark">
                                        <h1>Renseignez vos informations</h1>
                                    </div>
                                    @if (Session::has('message'))
                                    <div class="alert alert-success">{{Session::get('message')}}</div>
                                    @endif
                                </div>
                                <form wire:submit.prevent='saveAlert'>

                                    <div class="form-floating">
                                        <input class="input form-control" id="email-field" type="text" placeholder="Votre adresse" wire:model="geo_location">
                                        <label for="email-field">Géolocation</label>
                                        @error('geo_location')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input class="input form-control" id="email-field" type="file" placeholder="Votre photo" wire:model="path">
                                        @error('path')
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

                </div>
            </div>
        </div>
    </div>
    <!--
    contact form section - end
    -->
</div>
