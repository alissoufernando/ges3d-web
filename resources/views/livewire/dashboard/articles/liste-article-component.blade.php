<div>
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Listes des articles</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Dashboard</li>
                            <li>articles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="table-responsive" data-simplebar>
                    <div class="others-title d-flex justify-content-between align-items-center">
                        <h3>Listes des articles</h3>

                        <div class="add-export text-end">
                            <a type="button" class="btn  btn-info btn-sm float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                Ajouter
                            </a>
                        </div>
                    </div>

                    @if (Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                    @endif

                    <table class="table align-middle mb-0">
                        {{-- <thead>
                            <tr>
                                <th class="">N°</th>
                                <th class="">Numero</th>
                                <th class="">Adresse</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead> --}}
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($articles as $article)
                            <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>
                                    {{ $article->titre }}
                                </td>

                                <td>
                                    {{ $article->path }}
                                </td>
                                <td>
                                    {{ $article->decription }}
                                </td>
                                <td>
                                  
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2" wire:click.prevent='getElementById({{$article['id']}})'>Modification</a></li>
                                            <li><a class="dropdown-item"  href="#" wire:click.prevent="deleteArticle({{$article['id']}})">Supprimer</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{$articles->links()}}

                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact List Area -->

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        @include('livewire.dashboard.partials.footer')

        <!-- End Footer Area -->
    </main>
    @include('livewire.dashboard.articles.modal')

</div>
@section('scripts')
<script src="{{ asset('assets/dash/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/dash/js/jbox.all.min.js') }}"></script>
@endsection
