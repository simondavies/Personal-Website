<!DOCTYPE html>
<html lang="en-GB" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <head>
        @include('site.partials.metadata')
        <link rel="stylesheet" href="/css/head.css">
    </head>
    <body itemscope="" itemtype="http://schema.org/WebPage">
        <div id="page-app" class="site-wrapper">
            @yield('content')
        </div>
        <link rel="stylesheet" href="/css/foot.css">
    </body>
</html>
