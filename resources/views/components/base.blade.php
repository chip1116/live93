<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        (function(d) {
          var config = {
            kitId: 'cbi4ocw',
            scriptTimeout: 3000,
            async: true
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
      </script>
    <title>じゃがじゃがみやざき</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/style.css">
    @if(Request::routeIs('user.detail-screen') || Request::routeIs('user.detail-main') || Request::routeIs('user.category') || Request::routeIs('user.recent') || Request::routeIs('user.search'))
    <link rel="stylesheet" href="/css/detail-style.css">
    @elseif(Request::routeIs('user.contact') || Request::routeIs('user.login') || Request::routeIs('user.newpost') || Request::routeIs('user.post'))
    <link rel="stylesheet" href="/css/pnplc.css">
    @elseif(Request::routeIs('user.register'))
    <link rel="stylesheet" href="/css/register.css">
    @elseif(Request::routeIs('user.mypage'))
    <link rel="stylesheet" href="/css/mypage.css">
    @elseif(Request::routeIs('user.index'))
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css">
    <link rel="stylesheet" href="/css/index.css">
    @endif

   @livewireStyles

</head>
<body>
    <header id="header">
        <div class="header_top"></div>
        <div class="header_bottom"></div>
        <div><a href="{{ route('user.index') }} "><img src="/img/logo.png" alt="じゃがじゃがみやざき"></a></div>
    </header>
    <div class="base-wrapper">
{{ $slot }}
    </div>
    <footer id="footer">
        <div class="footer_top"></div>
        <div class="footer_bottom"></div>
        <div class="copyright">
          <p><img class="text_img" src="/img/logo93_1@2x.png" alt=""></p>
          <small>&copy;live93 2024</small>
        </div>
    </footer>
    @livewireScripts
</body>
</html>