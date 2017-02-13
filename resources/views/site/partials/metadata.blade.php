<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cleartype" content="on">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<!-- If less than IE11 then forward to message -->
<!--[if lt IE 11]>
   <script type="text/javascript">window.location = "/update";</script>
<![endif]-->
<title>{{config('site.title')}}</title>

<meta name="description" content="{{config('site.description')}}">
<meta itemprop="name" content="{{config('site.title')}}">
<meta itemprop="image" content="{{config('site.google.image')}}">

<link rel="canonical" href="">

<meta name="robots" content="index,follow,noodp">
<meta name="googlebot" content="index,follow">
<meta name="format-detection" content="telephone=no">
<meta name="_token" content="{{csrf_token()}}" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{config('site.twitter.handle')}}">
<meta name="twitter:title" content="{{config('site.title')}}">
<meta name="twitter:description" content="{{config('site.description')}}">
<meta name="twitter:creator" content="{{config('site.twitter.handle')}}">
<meta name="twitter:image:src" content="{{config('site.twitter.image')}}">

<meta property="og:title" content="{{config('site.title')}}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{config('site.url')}}" />
<meta property="og:image" content="{{config('site.facebook.image')}}" />
<meta property="og:description" content="{{config('site.description')}}" />
<meta property="og:site_name" content="{{config('site.title')}}" />
<meta property="og:locale" content="en_GB">
<meta property="fb:admins" content="{{config('site.facebook.admin_id')}}" />
<meta property="fb:app_id" content="{{config('site.facebook.app_id')}}" />

<meta name="msvalidate.01" content="{{config('site.microsoft.verification_code')}}" />

<link rel="icon" href="/imgs/icons/favicon-16.png" sizes="16x16" type="image/png">
<link rel="icon" href="/imgs/icons/favicon-32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/imgs/icons/favicon-48.png" sizes="48x48" type="image/png">
<link rel="icon" href="/imgs/icons/favicon-62.png" sizes="62x62" type="image/png">
<link rel="icon" href="/imgs/icons/favicon-192.png" sizes="192x192" type="image/png">

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "url": "{{config('site.ulr')}}",
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
        "{{config('site.youtube.url')}}"
    ]
}
</script>
@if (App::environment('live')) {
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '{{config('site.google.code')}}', 'auto');
  ga('send', 'pageview');

</script>
@endif
