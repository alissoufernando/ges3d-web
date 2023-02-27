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
                                <h1>Boutique</h1>
                                <ul>
                                    <li>
                                        <a href="{{ route('welcome') }}" class="link-underline">
                                            <span>Accueil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="las la-angle-right"></i>
                                        <a href="{{ route('site.boutique') }}" class="link-underline">
                                            <span>Boutique</span>
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
    blog list - start
    -->
    <div class="blog-section blog-section-1">
        <div class="blog-section-wrapper">
            <div class="container">
                <div class="row gx-5">
                    <!--
                    blog single - start
                    -->
                    @foreach ($produits as $produit)
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="blog-single blog-single-1">
                            <div class="blog-single-wrapper">
                                <div class="blog-single-content">
                                    <a href="blog-detail-1.html" class="figure">
                                        @if ($produit->path)
                                        <img src="{{ asset('storage') }}/{{ $produit->path }}" alt="{{ $produit->nom }}">
                                        @else
                                        <img src="assets/site/images/bulbs.jpg" alt="{{ $produit->nom }}">

                                        @endif
                                    </a>
                                    <a href="">
                                        <h3>{{ $produit->nom }}</h3>
                                    </a>
                                    <div class="blog-single-details">
                                        <div class="">
                                            <span class="">{{$produit->promo_prix}} FCFA</span>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="">
                                            <del>{{$produit->prix }} FCFA</del>

                                        </div>
                                    </div>
                                    <button type="" class="button button-3">
                                        <span class="button-inner">
                                            <span class="button-content">
                                                <span class="text">Ajouter</span>
                                            </span>
                                        </span>
                                    </button>
                                    {{-- <p>{{ $article->description }}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
                <div class="mt-4">
                    {{$produits->links()}}

                </div>

            </div>
        </div>
    </div>
    <!--
    blog list - end
    -->
</div>
