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
