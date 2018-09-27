<?php if(!class_exists('Rain\Tpl')){exit;}?>        <div class="btn-back-top">
          <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
            <i class="zmdi zmdi-long-arrow-up"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-momentum-scrolling sb-style-overlay" id="menu">
      <header class="ms-slidebar-header">
        <div class="ms-slidebar-login ">
          <div class="btn-group">
            <a href="#" style="padding: 0px; float: left">
              <button type="button" class="btn btn-secondary color-white">
                <i class="zmdi zmdi-account"></i> Usuário
              </button>
            </a>
              <button type="button" class="btn btn-primary color-white" onclick="modalBusiness()">
                <i class="fa fa-briefcase"></i> Empresa
              </button>
          </div>
        </div>
        <div class="ms-slidebar-title" style="background-color: #282828">
          <div class="ms-slidebar-t">
            <label for="search-box-slidebar"><span id="lcity"></span> - <span id="lprovince"></span></label>
          </div>
        </div>
      </header>
      <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
        <li>
          <a data-scroll class="link" href="#home">
            <i class="zmdi zmdi-home"></i> Serviços</a>
        </li>
        <li>
          <a data-scroll class="link" href="#services">
            <i class="zmdi zmdi-flight-takeoff"></i> Categorias</a>
        </li>
        <!--<li>
          <a data-scroll class="link" href="#portfolio">
            <i class="zmdi zmdi-desktop-mac"></i> Portfolio</a>
        </li>
        <li>
          <a data-scroll class="link" href="#pricing">
            <i class="zmdi zmdi-money-box"></i> Pricing</a>
        </li>
        <li>
          <a data-scroll class="link" href="#about">
            <i class="zmdi zmdi-info-outline"></i> About Us</a>
        </li>
        <li>
          <a data-scroll class="link" href="#team">
            <i class="zmdi zmdi-accounts"></i> Team</a>
        </li>
        <li>
          <a data-scroll class="link" href="#contact">
            <i class="zmdi zmdi-email"></i> Contact</a>
        </li>
        <li>
          <a data-scroll class="link" href="index.html">
            <i class="zmdi zmdi-swap"></i> Main Site</a>
        </li>-->
      </ul>
      <div class="ms-slidebar-social ms-slidebar-block">
        <h4 class="ms-slidebar-block-title">Siga-nos</h4>
        <div class="ms-slidebar-social">
          <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-facebook">
            <i class="zmdi zmdi-facebook"></i>
            <!--<span class="badge-pill badge-pill-pink">12</span>-->
          </a>
          <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-twitter">
            <i class="zmdi zmdi-twitter"></i>
          </a>
          <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-youtube">
            <i class="zmdi zmdi-youtube"></i>
          </a>
          <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-instagram">
            <i class="zmdi zmdi-instagram"></i>
          </a>
        </div>
      </div>
    </div>


    <script src="/res/site/js/plugins.min.js"></script>
    <script src="/res/site/autocomplete/jquery.easy-autocomplete.js"></script>

    <?php $counter1=-1;  if( isset($script) && ( is_array($script) || $script instanceof Traversable ) && sizeof($script) ) foreach( $script as $key1 => $value1 ){ $counter1++; ?>
    <script src="<?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?>"></script> 
    <?php } ?>
    <script src="/res/site/js/app.min.js"></script>

    <script src="/res/site/js/lead-full.js"></script>
    <script type="text/javascript">
      function modalBusiness(){
        $("#menu").removeClass('open');
        $("#modalBusiness").modal('show');
        console.log('clicado');
     }
    </script>

   


  </body>
</html>