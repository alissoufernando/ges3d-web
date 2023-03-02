<div>
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Listes des Alerts</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Dashboard</li>
                            <li>Alerts</li>
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
                    <div class="others-title">
                        <h3>Listes des Alerts</h3>
                    </div>

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
                            @foreach ($alerts as $alert)
                            <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>
                                    {{ $alert->user->nom }} {{ $alert->user->prenoms }}
                                </td>


                                <td>
                                    {{ $alert->geo_location }}
                                </td>
                                <td>
                                    {{ $alert->message }}
                                </td>
                                <td>
                                    @if ($alert->agent_id)
                                    {{ $alert->agent->nom }} {{ $alert->agent->prenoms }}

                                    @else
                                    pas d'agent assigné
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2" wire:click.prevent='getElementById({{$alert['id']}})'>Assigner un agent</a></li>
                                            <li><a class="dropdown-item"  href="{{ route('dashboard.datail-alerts', ['id' => $alert->id]) }}">Detail</a></li>
                                            <li><a class="dropdown-item"  href="#" wire:click.prevent="deleteAlert({{$alert['id']}})">Supprimer</a></li>
                                            <li><a class="dropdown-item"  href="#" wire:click.prevent="valideAlert({{$alert['id']}})">Valider</a></li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{$alerts->links()}}

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
    @include('livewire.dashboard.alerts.modal')

</div>
@section('scripts')
<script src="{{ asset('assets/dash/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/dash/js/jbox.all.min.js') }}"></script>
@endsection
