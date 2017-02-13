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

<link rel="canonical" href="{{config('site.url')}}">

<meta name="robots" content="index,follow,noodp">
<meta name="googlebot" content="index,follow">
<meta name="format-detection" content="telephone=no">
<meta name="_token" content="{{csrf_token()}}" />

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
