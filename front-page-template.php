<?php /* Template Name: Front Page */ ?>

<?php $meta = get_fields(); ?>

<?php get_header(); ?>

<main>
  <section class="px-8">
    <div class="min-h-[100vh] max-w-7xl mx-auto my-8">
      <div class="grid grid-cols-2 gap-4">
        <div class="flex flex-col justify-center font-Mont-Medium">
          <h1 class="text-5xl capitalize max-w-[450px]"><?php echo $meta['main_hero_text']; ?></h1>
          <p class="mt-6 max-w-[410px]"><?php echo $meta['hero_subtext']; ?></p>
          <div class="mt-4"><a href="<?php echo esc_url(site_url('/services')); ?>" class="inline-block py-2 px-4 border-2 border-black rounded">Explore Our Packages</a></div>
        </div>

        <div>
          <div class="relative">
            <div class="rounded overflow-hidden">
              <img src="<?php echo wp_get_attachment_image_url($meta['large_hero_image'], 'large'); ?>">
            </div>
            <div class="rounded overflow-hidden absolute w-1/3 -bottom-[10%] -right-[5%]">
              <img src="<?php echo wp_get_attachment_image_url($meta['small_hero_image'], 'large'); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>