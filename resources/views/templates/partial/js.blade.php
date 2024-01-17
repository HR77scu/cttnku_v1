<script src="{{asset('templateku')}}/jquery.js"></script>
<script data-cfasync="false" src="{{asset('templateku/seantheme.com')}}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/js/vendor.min.js"></script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/js/app.min.js"></script>

@yield('js_me')
	
<script async src="{{asset('templateku')}}/www.googletagmanager.com/gtag/js8a79?id=G-Y3Q0VGQKY3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y3Q0VGQKY3');
</script>
<script src="{{asset('templateku/seantheme.com')}}/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="129278f8c17d9ab9f53a08df-|49" defer></script>
<script defer src="{{asset('templateku')}}/static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996" integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ==" data-cf-beacon='{"rayId":"7b7f0d10d87144c6","version":"2023.3.0","r":1,"b":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>

@yield('js_custom')