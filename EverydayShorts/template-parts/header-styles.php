<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 96px;
}
.u-header .u-menu-1 {
  margin: 30px auto 0;
}
.u-header .u-nav-1 {
  font-weight: 500;
  font-size: 1rem;
  text-transform: uppercase;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-header .u-social-icons-1 {
  height: 56px;
  min-height: 16px;
  width: 123px;
  min-width: 42px;
  margin: -46px auto 20px 0;
}
.u-header .u-icon-1 {
  height: 100%;
}
.u-header .u-icon-2 {
  height: 100%;
}
@media (max-width: 1199px) {
  .u-header .u-menu-1 {
    margin-left: 540px;
  }
  .u-header .u-nav-1 {
    letter-spacing: normal;
  }
  .u-header .u-social-icons-1 {
    margin-left: 113px;
  }
  .u-header .u-icon-1 {
    color: rgb(210, 34, 21) !important;
  }
}
@media (max-width: 991px) {
  .u-header .u-menu-1 {
    margin-left: 355px;
  }
  .u-header .u-social-icons-1 {
    margin-left: 78px;
  }
}
@media (max-width: 767px) {
  .u-header .u-menu-1 {
    margin-left: 204px;
  }
  .u-header .u-social-icons-1 {
    margin-left: 49px;
  }
}
@media (max-width: 575px) {
  .u-header .u-menu-1 {
    margin-left: 36px;
  }
  .u-header .u-social-icons-1 {
    margin-left: 17px;
  }
}</style>
