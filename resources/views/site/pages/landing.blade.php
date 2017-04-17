@extends('site.templates.landing')
@section('content')
    <main class="landing-wrapper">
        <div class="landing-content">
            <div class="site-title-wrapper">
                <h1>Simon Davies</h1>
                <h2>Web Developer/Designer</h2>
                <div class="construction-msg">Site creativity, is currently being refurbished...</div>
            </div>
            @include('site.partials.social-icons',['class' => 'landing'])
        </div><!-- eo:landing-content -->
        <div class="landing-overlay"></div>
        <!-- eo:landing-overlay -->
        <div class="background-wrapper"
            style="background-image: url(/imgs/backgrounds/simon-davies-mexico-relatation.jpg)"
            itemscope itemtype="http://schema.org/ImageObject">
            <meta itemprop="contentUrl" content="/imgs/backgrounds/simon-davies-mexico-relatation.jpg" />
            <meta itemprop="name" content="Mexico Holiday - 2016" />
            <meta itemprop="contentLocation" content="Play del Carmen, Cancun, Mexico" />
            <meta itemprop="datePublished" content="2016-05-23" />
            <meta itemprop="dateModified" conent="2017-02-20" />
            <meta itemprop="description" content="Simon Davies relaxing and catching some rays, and simply chilaxing..." />
        </div><!-- eo:landing-wrapper -->
    </main><!-- eo:landing-wrapper -->

    <cookies-popup></cookies-popup>
@stop
