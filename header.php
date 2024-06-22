<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <section> 
    <div class="max-w-7xl mx-auto p-4 flex justify-between items-center">
      <a href="<?php echo esc_url(site_url('/')); ?>" class="inline-flex flex-col justify-center text-xl">
        <span class="font-Mont-SemiB text-center">Sparkle & Shine</span>
        <span class="font-Mont-Light -mt-2 text-center">Cleaning Service</span>
      </a>

      <div class="font-Mont-Medium bg-gradient-to-b from-white to-white/20">
        <?php wp_nav_menu(array(
          'menu' => 'main_menu',
          'menu_class' => 'ct_main_menu'
          )); ?>
      </div>
    </div>
  </section>
</header>