<div>
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Listes des Agents</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Dashboard</li>
                            <li>Agents</li>
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
                        <h3>Listes des Agents</h3>
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
                            @foreach ($agents as $agent)
                            @if ($agent->hasRole('Agent'))
                            <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>
                                    {{ $agent->nom }}
                                </td>
                                <td>
                                    {{ $agent->prenoms }}
                                </td>
                                <td>
                                    {{ $agent->ville }}
                                </td>
                                <td>
                                    {{ $agent->email }}
                                </td>
                                <td>
                                    {{ $agent->phone }}
                                </td>
                                <td>
                                    @if ($agent->ville_id)
                                    {{ $agent->villeAssigner->name }}

                                    @else
                                        pas de ville Assigner
                                    @endif
                                </td>
                                <td>
                                    {{implode(',', $agent->roles()->pluck('name')->toArray())}}
                                   {{-- {{  $agent->roles->pluck('name') }} --}}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2" wire:click.prevent='getElementById({{$agent['id']}})'>Assigner une ville</a></li>
                                            <li><a class="dropdown-item"  href="#" wire:click.prevent="deleteAgent({{$agent['id']}})">Supprimer</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{-- {{$agents->links()}} --}}
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
    @include('livewire.dashboard.agents.modalAssignerVille')

</div>
@section('scripts')
<script src="{{ asset('assets/dash/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/dash/js/jbox.all.min.js') }}"></script>
@endsection
