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
    <title>ベース</title>
    
    <link rel="stylesheet" href="css/style.css">
    @if(Request::routeIs('user.detail-screen'))
    <link rel="stylesheet" href="css/detail-style.css">
    @elseif(Request::routeIs('user.contact'))
    <link rel="stylesheet" href="css/kim4page.css">
@endif

   
</head>
<body>
    <header id="header">
        <div class="hf_top"></div>
        <div class="hf_bottom"></div>
        <div><img src="img/logo.png" alt="じゃがじゃがみやざき"></div>
    </header>
    <div class="base-wrapper">
{{ $slot }}
    </div>
    <footer id="footer">
        <div class="hf_top"></div>
        <div class="hf_bottom"></div>
        <div class="copyright">&copy;Live93 2024</div>
    </footer>
</body>
</html>