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
                                <h1>Sensibilisation</h1>
                                <ul>
                                    <li>
                                        <a href="{{ route('welcome') }}" class="link-underline">
                                            <span>Accueil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="las la-angle-right"></i>
                                        <a href="{{ route('site.panier') }}" class="link-underline">
                                            <span>Panier</span>
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
                @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                @if (Session::has('messageN'))
                <div class="alert alert-danger">{{Session::get('messageN')}}</div>
                @endif
                <div class="row gx-5">
                    <table class="table table-striped" style="font-size: 20px;">
                        <thead>
                          <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i =1;
                            @endphp
                            @foreach ($cartItems as $cartItem)
                            {{-- @php
                                $total = $cartItem->produit->promo_prix  * $cartItem->quantite;
                            @endphp --}}
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $cartItem->produit->nom }}</td>
                                <td>{{ $cartItem->produit->promo_prix }}</td>
                                <td>{{ $cartItem->quantite }}</td>
                                <td>{{ $cartItem->total }}</td>
                                <td>
                                    <button wire:click.prevent ="removeFromCart({{$cartItem->produit->id}})" class="btn-close" type="button"></button>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                <div class="row">
                    <div class="col-9">

                    </div>
                    <div class="col-3">
                        <table class="table table-striped" style="font-size: 20px; font-weight: bold;">
                            <tbody>
                                <tr>
                                    <td>Total :</td>

                                    <td>{{ $this->totals }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="row">
                    {{-- <a href="" class="btn "></a>
                    <button type="submit" class="button button-3">
                        <span class="button-inner">
                            <span class="button-content">
                                <span class="text">Commander</span>
                            </span>
                        </span>
                    </button> --}}
                    {{-- wire:click.prevent ="placeOrder()" --}}

                    <a wire:click.prevent ="placeOrder()" type="button" class="btn btn-outline-success btn-lg btn-block mt-5 pt-3 pb-3 mb-5">Commander</a>
                    @if (Session::has('messageN'))
                    <a  type="button" class="btn btn-outline-warning btn-lg btn-block mt-5 pt-3 pb-3">Payer wast</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--
    blog list - end
    -->
    @include('livewire\site\modalOrder')
</div>
