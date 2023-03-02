<div>
     <!-- Start Main Content Area -->
     <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Alerts</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Dashboard</li>
                            <li>Alerts</li>
                            <li>Détail Alerts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Gallery Area -->
        <div class="gallery-area">
            <div class="container-fluid">
                <div class="card-box-style">
                    <div class="others-title d-flex justify-content-between align-items-center">
                        <h3>Les images de l'alert</h3>

                        {{-- <div class="add-export text-end">
                            <button class="btn btn-primary">Add</button>
                            <button class="btn btn-success ms-3">Export</button>
                        </div> --}}
                    </div>
                    <div class="row">
                        @php
                            $images = explode(",",$alert->path);
                            // dd($images);

                        @endphp

                        @foreach ($images as $image)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-gallery">
                                <img src="{{ asset('storage/ImageAlert')}}/{{$image}}" alt="gallery-1">
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery Area -->

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        @include('livewire.dashboard.partials.footer')
        <!-- End Footer Area -->
    </main>
    <!-- End Main Content Area -->
</div>
