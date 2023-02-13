
<!DOCTYPE html>
<html lang="fr">
<head>
    <!--
    meta tags
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    title tag
    -->
    <title>GES-3D</title>

    <!--
    favicon
    -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/site/images/ewaste.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/site/images/ewaste.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/site/images/ewaste.png') }}">
    <link rel="manifest" href="{{ asset('assets/site/images/favicon/site.webmanifest.html') }}">

    <!--
    stylesheets
    -->
    @include('livewire.site.partials.style')
    @livewireStyles()
</head>
<body>

    <div class="main-wrapper">

    <!--
    preloader - start
    -->
    @include('livewire.site.partials.preloader')

    <!--
    preloader - end
    -->

    <!--
    navigation - start
    -->
    @include('livewire.site.partials.header')

    <!--
    navigation - end
    -->
    {{-- start contenu --}}
    {{$slot}}
    {{-- end contenu --}}

    <!--
    footer - start
    -->
    @include('livewire.site.partials.footer')

    <!--
    footer - end
    -->

    </div>

    <!--
    scripts
    -->

    @livewireScripts()
    @include('livewire.site.partials.script')
</body>
</html>
