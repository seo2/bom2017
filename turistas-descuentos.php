<?
/*

Template name: Descuentos turistas

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>
<?php
$dias  = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>
    <section class="main_content">
       <div class="titulo_seccion">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4 class="divider">Descuentos Turistas</h4>
            </div>
            <div class="col-sm-12 col-md-2">
              <a href="<?php bloginfo('url'); ?>/novedades/#novedades" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

      <div class="container">
      <div class="row">
        <section class="cartelera clearfix">
        <div id="cartelera" class="anchor_seccion"></div>
            <div class="container">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>                  
              <div class="row">
                <div class="col-sm-12">
                   <?php the_content(); ?>
                </div>
              </div>            
              <div class="row">
                <div class="col-sm-12">
                   <?php the_content(); ?>
                </div>
              </div>
			<?php endwhile; ?>
			<?php endif; ?>             
            </div><!-- container -->
      </section><!-- cartelera -->
    </div><!-- row -->
<?php include('footer.php') ?>

