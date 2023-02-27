<div>
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Dashboard</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        <!-- Start Overview Back Area -->
        <div class="overview-content-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-audience d-flex justify-content-between align-items-center">
                            <div class="audience-content">
                                <h5>Total produits</h5>
                                <h4>{{ $produits->count() }}</h4>
                            </div>
                            <div class="icon">
                                <img src="assets/dash/images/icon/note-2.svg" alt="white-profile-2user">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="single-audience d-flex justify-content-between align-items-center">
                            <div class="audience-content">
                                <h5>Total articles</h5>
                                <h4>{{ $articles->count() }}</h4>
                            </div>
                            <div class="icon">
                                <img src="assets/dash/images/icon/user-2.svg" alt="eye">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="single-audience d-flex justify-content-between align-items-center">
                            <div class="audience-content color-style-fe5957">
                                <h5>Total Utilisateurs</h5>
                                <h4>{{ $users->count() }}</h4>
                            </div>
                            <div class="icon">
                                <img src="assets/dash/images/icon/people.svg" alt="timer">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="single-audience d-flex justify-content-between align-items-center">
                            <div class="audience-content">
                                <h5>Total Commandes</h5>
                                <h4>{{ $commandes->count() }}</h4>
                            </div>
                            <div class="icon">
                                <img src="assets/dash/images/icon/profile-2.svg" alt="mask">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-audience d-flex justify-content-between align-items-center">
                            <div class="audience-content">
                                <h5>Total Alerts</h5>
                                <h4>{{ $alerts->count() }}</h4>
                            </div>
                            <div class="icon">
                                <img src="assets/dash/images/icon/profile-2.svg" alt="mask">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-audience d-flex justify-content-between align-items-center">
                            <div class="audience-content">
                                <h5>Total Newletters</h5>
                                <h4>{{ $newletters->count() }}</h4>
                            </div>
                            <div class="icon">
                                <img src="assets/dash/images/icon/profile-2.svg" alt="mask">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-audience d-flex justify-content-between align-items-center">
                            <div class="audience-content">
                                <h5>Total Agents</h5>
                                <h4>{{ $agents->count() }}</h4>

                            </div>
                            <div class="icon">
                                <img src="assets/dash/images/icon/profile-2.svg" alt="mask">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-audience d-flex justify-content-between align-items-center">
                            <div class="audience-content">
                                <h5>Total Employees</h5>
                                <h4>502</h4>
                            </div>
                            <div class="icon">
                                <img src="assets/dash/images/icon/profile-2.svg" alt="mask">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Overview Back Area -->

        <!-- Start Footer Area -->
        @include('livewire.dashboard.partials.footer')
        <!-- End Footer Area -->
    </main>
</div>
