<div class="bg-hero-pattern rounded-lg overflow-hidden group transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border border-gray-200/80 flex flex-col">
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" class="block overflow-hidden h-56">
      <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
    </a>
  <?php endif; ?>
  <div class="p-6 flex flex-col flex-grow">
    <div class="mb-3">
      <?php
      $categories = get_the_category();
      if (!empty($categories)) {
          echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="text-sm font-semibold text-primary uppercase tracking-wider">' . esc_html($categories[0]->name) . '</a>';
      }
      ?>
    </div>
    <h3 class="font-serif text-xl text-dark mb-3 flex-grow">
      <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors"><?php the_title(); ?></a>
    </h3>
    <div class="text-dark/80 mb-4 text-sm">
      <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
    </div>
    <div class="mt-auto">
      <a href="<?php the_permalink(); ?>" class="text-primary font-semibold hover:underline flex items-center group">
      Reveal the Secret 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>
  </div>
</div>
