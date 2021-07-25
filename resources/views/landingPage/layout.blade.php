@include('landingPage.header')
@include('landingPage.nav')

<!-- Hero Unit -->
<section class="hero-unit">

    <div class="row">
        <div class="large-12 columns">
            <hgroup>
                <h1>Code. Design. Education.</h1>
                <h3>Just keep learning. Make new opportunities.</h3>
            </hgroup>
        </div>

        <div class="large-12 columns">
            <div class="small-12 small-centered medium-6 medium-centered large-3 large-centered columns clients">
                <a href="#">
                    <h6 class="text-center">Clients Click Here</h6>
                    <p class="text-center">
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-angle-right fa-inverse fa-stack-1x"></i>
                        </span>
                    </p>
                </a>
            </div>
            <!-- end .clients -->
        </div>

    </div>
</section>
{{-- @include('landingPage.about') --}}

@yield('content')

@include('landingPage.contact')
@include('landingPage.footer')
