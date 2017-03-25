<!DOCTYPE html>
<html lang="en-GB" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <head>
        @include('site.partials.metadata')
        <link rel="stylesheet" href="/css/landing.css">
    </head>
    <body itemscope="" itemtype="http://schema.org/WebPage">
        @include('site.partials.google-tag-code')
        <div id="page-app" class="site-wrapper">
            @yield('content')
        </div>
        <script type="text/javascript" src="/js/landing.js"></script>
        <link rel="stylesheet" href="/css/landing-foot.css">
    </body>
</html>
