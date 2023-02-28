<div class="header-area header-style-three">
    <div class="container-fluid">
        <div class="header-content-wrapper">
            <div class="header-content d-flex justify-content-between align-items-center">
                <div class="header-left-content d-flex">
                    <div class="responsive-burger-menu d-block d-lg-none">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </div>

                    <div class="main-logo">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('assets/site/images/ewaste.png') }}" alt="main-logo" width="100" height="100">
                        </a>
                    </div>

                    <form class="search-bar d-flex">
                        <img src="assets/dash/images/icon/search-normal.svg" alt="search-normal">

                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>

                    <div class="option-item for-mobile-devices d-block d-lg-none">
                        <i class="search-btn ri-search-line"></i>
                        <i class="close-btn ri-close-line"></i>

                        <div class="search-overlay search-popup">
                            <div class='search-box'>
                                <form class="search-form">
                                    <input class="search-input" name="search" placeholder="Search" type="text">

                                    <button class="search-button" type="submit">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-right-content d-flex align-items-center">
                    <div class="header-right-option">
                        <a href="" class="dropdown-item fullscreen-btn" id="fullscreen-button">
                            <img src="assets/dash/images/icon/maximize.svg" alt="maximize">
                        </a>
                    </div>
                    <div class="header-right-option notification-option dropdown">
                        <div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="notification-btn">
                                <img src="assets/dash/images/icon/notification.svg" alt="notification">
                                <span class="badge">4</span>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                                <span class="title d-inline-block">6 New Notifications</span>
                                <span class="mark-all-btn d-inline-block">Mark all as read</span>
                            </div>

                            <div class="dropdown-wrap" data-simplebar>
                                <a href="" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-message-rounded-dots'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Just sent a new message!</span>
                                        <p class="sub-text mb-0">2 sec ago</p>
                                    </div>
                                </a>

                                <a href="" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-user'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">New customer registered</span>
                                        <p class="sub-text mb-0">5 sec ago</p>
                                    </div>
                                </a>

                                <a href="" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-layer'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Apps are ready for update</span>
                                        <p class="sub-text mb-0">3 min ago</p>
                                    </div>
                                </a>

                                <a href="" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-hourglass'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Your item is shipped</span>
                                        <p class="sub-text mb-0">7 min ago</p>
                                    </div>
                                </a>

                                <a href="" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-comment-dots'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Steven commented on your post</span>
                                        <p class="sub-text mb-0">1 sec ago</p>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-footer">
                                <a href="" class="dropdown-item">View All</a>
                            </div>
                        </div>
                    </div>

                    <div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
                        <a class="dropdown-item dropdown-toggle avatar d-flex align-items-center" href="" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/dash/images/avatar.png') }}" alt="avatar">
                            <div class="d-none d-lg-block d-md-block">
                                <h3>{{ auth()->user()->nom }} {{ auth()->user()->prenoms }}</h3>
                                <span>Super Admin</span>
                            </div>
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
                                    <img src="{{ asset('assets/dash/images/avatar.png') }}" class="rounded-circle" alt="avatar">
                                </div>

                                <div class="info text-center">
                                    <span class="name">{{ auth()->user()->nom }} {{ auth()->user()->prenoms }}</span>
                                    <p class="mb-3 email">
                                        <a href="../../cdn-cgi/l/email-protection.html#3f555057514c525653585e7f575a535350115c5052"><span class="__cf_email__" data-cfemail="d1bbbeb9bfa2bcb8bdb6b091b9b4bdbdbeffb2bebc">{{ auth()->user()->email }}</span></a>
                                    </p>
                                </div>
                            </div>

                            <div class="dropdown-wrap">
                                <ul class="profile-nav p-0 pt-3">

                                </ul>
                            </div>

                            <div class="dropdown-footer">
                                <ul class="profile-nav">
                                    <li class="nav-item">
                                        <a href="" class="nav-link">
                                            <i class="ri-login-circle-line"></i>
                                            <span>Déconnexion</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="header-right-option template-option">
                        <a class="dropdown-item" href="lms-academy.html#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <img src="assets/dash/images/icon/setting.svg" alt="setting">
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
