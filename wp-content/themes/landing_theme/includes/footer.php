<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col1">
        <p>Un proyecto de:</p>
        <img src="<?php bloginfo('template_url')?>/img/logos/cumbrera.png" alt="Cumbrera" />
        <p>&copy; <?php echo date('Y'); ?></p>
      </div>
      <div class="col-md-4 col2">
        <img src="<?php bloginfo('template_url')?>/img/logos/lima-footer.png" alt="Lima" />
      </div>
      <div class="col-md-4 col3">
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="#">Nota Legal</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<div class="con-modal">
  <div class="close-modal"><i class="fa fa-times" aria-hidden="true"></i></div>
  <div class="wrap-fix">
      <figure></figure>
  </div>
</div>

<?php wp_footer(); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1848923068742787'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1848923068742787&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112422655-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112422655-1');
</script>
</body>
</html>
