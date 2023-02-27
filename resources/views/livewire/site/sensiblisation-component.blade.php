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
                                        <a href="{{ route('site.sensibilisation') }}" class="link-underline">
                                            <span>Sensibilisation</span>
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
                    @foreach ($articles as $article)
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="blog-single blog-single-1">
                            <div class="blog-single-wrapper">
                                <div class="blog-single-content">
                                    <a href="blog-detail-1.html" class="figure">
                                        @if ($article->path)
                                        <img src="{{ asset('storage') }}/{{ $article->path }}" alt="{{ $article->titre }}">
                                        @else
                                        <img src="assets/site/images/bulbs.jpg" alt="{{ $article->titre }}">

                                        @endif
                                    </a>
                                    <a href="">
                                        <h3>{{ $article->titre }}</h3>
                                    </a>
                                    <div class="blog-single-details">
                                        <div class="comments">
                                            <i class="las la-comment-alt"></i>
                                            12
                                        </div>
                                        <div class="separator"></div>
                                        <div class="date">
                                            <i class="las la-calendar"></i>
                                            Dec 10, 2020
                                        </div>
                                    </div>
                                    <p>{{ $article->description }}</p>
                                </div>
                                <a href="blog-detail-1.html" class="circle">
                                    <i class="las la-plus"></i>
                                    <i class="las la-angle-right hover"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="mt-4">
                    {{$articles->links()}}

                </div>
            </div>
        </div>
    </div>
    <!--
    blog list - end
    -->
</div>
