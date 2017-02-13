<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <head>
        @include('site.partials.metadata')
    </head>
    <body itemscope="" itemtype="http://schema.org/WebPage">
        <div id="page-app" class="site-wrapper">
            @yield('content')
        </div>
    </body>
</html>
