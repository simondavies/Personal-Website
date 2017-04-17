<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cleartype" content="on">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
@empty($browser)
<!-- If less than IE11 then forward to message -->
<!--[if lt IE 11]>
   <script type="text/javascript">window.location = "/update";</script>
<![endif]-->
@endempty
<title>{{config('site.title')}}</title>

<meta name="description" content="{{config('site.description')}}">
<meta itemprop="name" content="{{config('site.title')}}">
<meta itemprop="image" content="{{config('site.url')}}{{config('site.google.image')}}">

<link rel="canonical" href="{{config('site.url')}}">

<meta name="robots" content="index,follow,noodp">
<meta name="googlebot" content="index,follow">
<meta name="format-detection" content="telephone=no">
<meta name="_token" content="{{csrf_token()}}" />

@if (App::environment('production')) {
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5PKRD2Q');</script>
<!-- End Google Tag Manager -->
@endif

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{config('site.twitter.handle')}}">
<meta name="twitter:title" content="{{config('site.title')}}">
<meta name="twitter:description" content="{{config('site.description')}}">
<meta name="twitter:creator" content="{{config('site.twitter.handle')}}">
<meta name="twitter:image:src" content="{{config('site.url')}}{{config('site.twitter.image')}}">

<meta property="og:title" content="{{config('site.title')}}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{config('site.url')}}" />
<meta property="og:image" content="{{config('site.url')}}{{config('site.facebook.image')}}" />
<meta property="og:description" content="{{config('site.description')}}" />
<meta property="og:site_name" content="{{config('site.title')}}" />
<meta property="og:locale" content="en_GB">
<meta property="fb:admins" content="{{config('site.facebook.admin_id')}}" />
<meta property="fb:app_id" content="{{config('site.facebook.app_id')}}" />

<meta name="p:domain_verify" content="{{config('site.pinterest.verification_code')}}"/>

<meta name="msvalidate.01" content="{{config('site.microsoft.analytics.verification_code')}}" />

{{-- <link rel="icon" href="/imgs/icons/favicon-16.png" sizes="16x16" type="image/png">
<link rel="icon" href="/imgs/icons/favicon-32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/imgs/icons/favicon-48.png" sizes="48x48" type="image/png">
<link rel="icon" href="/imgs/icons/favicon-62.png" sizes="62x62" type="image/png">
<link rel="icon" href="/imgs/icons/favicon-192.png" sizes="192x192" type="image/png"> --}}

<script type="application/ld+json">
[{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "url": "{{config('site.url')}}",
    "name": "{{config('site.name')}}",
    "author": {
        "@type": "Person",
        "name": "{{config('site.author')}}"
    },
    "description": "{{config('site.description')}}",
    "publisher": "{{config('site.author')}}",
    "sameAs" : [
        "{{config('site.twitter.url')}}",
        "{{config('site.facebook.url')}}",
        "{{config('site.google.url')}}",
        "{{config('site.youtube.url')}}",
        "{{config('site.stackoverflow.url')}}",
        "{{config('site.github.url')}}"
    ]
},
{
    "@context" : "http://schema.org",
    "@type" : "WebPage",
    "headline" :"{{config('site.name')}}",
    "description" :"{{config('site.description')}}",
    "url" :"{{config('site.url')}}",
    "keywords" : "{{config('site.keywords')}}"
}]
</script>