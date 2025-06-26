<?php get_header(); ?>

<main class="bg-light">
  <!-- Hero Section -->
  <section class="bg-hero-pattern pt-10 md:pt-16 overflow-hidden">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center justify-between">
        <!-- Text Content -->
        <div class="md:w-6/12 text-center md:text-left mb-10 md:mb-0 md:pb-12">
          <div class="flex items-center justify-center md:justify-start space-x-2 text-primary font-semibold mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <span>Award-Winning Aesthetic Medicine</span>
          </div>
          <h1 class="text-5xl md:text-7xl font-serif text-dark leading-none mb-4">
            Your daily dose <br/> of beauty <span class="text-primary">Secrets</span>
          </h1>
          <p class="max-w-xl mx-auto md:mx-0 text-lg text-dark/80 mb-8">
            Explore the latest trends, expert tips, and self-care secrets to enhance your natural beauty and confidence.
          </p>

          <?php
          $uncategorized_id = get_cat_ID('Uncategorized');
          $categories = get_categories(array(
              'orderby'    => 'count',
              'order'      => 'DESC',
              'number'     => 6,
              'hide_empty' => true,
              'exclude'    => $uncategorized_id ? array($uncategorized_id) : '',
          ));

          if ($categories) :
          ?>
            <div class="flex flex-wrap justify-center md:justify-start items-center gap-3 mt-8 mb-8">
              <?php foreach ($categories as $category) : ?>
                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="block bg-transparent border border-dark text-dark px-4 py-2 rounded-full hover:bg-primary hover:text-white hover:border-primary transition-all duration-300 text-sm font-medium">
                  <?php echo esc_html($category->name); ?>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <a href="#" class="bg-primary hover:opacity-90 transition-opacity inline-block text-white font-semibold px-8 py-3 rounded-md">
              Book a Consultation
          </a>
        </div>
        <!-- Image Content -->
        <div class="md:w-5/12">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.png" alt="Woman with a secret" class="w-full h-auto">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

<!-- Blog Posts Section -->
  <section class="py-10 pt-20 md:py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl md:text-5xl font-serif text-dark text-center mb-2">Latest Health & <span class="text-primary"> Beauty Insights </span></h2>
      <p class="text-lg text-dark/80 text-center mb-12">Stay informed with expert advice, treatment insights, <br/> and the latest trends in aesthetic medicines</p>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        $latest_posts = new WP_Query(array(
          'posts_per_page' => 3,
          'post_status'    => 'publish',
          'meta_key'       => '_thumbnail_id', // Only posts with a featured image
        ));

        if ($latest_posts->have_posts()) : while ($latest_posts->have_posts()) : $latest_posts->the_post();
        ?>
          <?php get_template_part('template-parts/components/blog-post-card'); ?>
        <?php 
        endwhile; 
        wp_reset_postdata();
        else : 
        ?>
          <p class="text-center col-span-full">No posts with featured images found.</p>
        <?php endif; ?>
      </div>

    </div>
  </section>
  <!-- End Blog Posts Section -->

  <!-- Trust-Building Section -->
  <section class="py-10 md:py-20 bg-light">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Left Column: Slider -->
        <div class="text-center lg:text-left">
                    <h2 class="text-4xl md:text-5xl font-serif text-dark mb-8">Why Over 10,000 Readers Trust<br/> Our <span class="text-primary"> Beauty Secrets </span>?</h2>
          <p class="text-dark/80 mb-12 max-w-3xl mx-auto lg:mx-0">With over 17 years of experience pioneering the U.S. launch of leading non-surgical technologies like Thermage and Emface, we bring unparalleled expertise to the world of aesthetics. Drawing insights from over 17,000 client consultations, our philosophy is simple: we only offer 100% safe, zero-downtime treatments that deliver real, natural results. Our work, featured in publications like Vogue and The New York Times, is dedicated to helping you achieve radiant skin without invasive procedures.</p>

          <!-- Tailwind CSS Testimonial Slider -->
          <div id="testimonial-slider-container" class="relative">
            <!-- Scrollable Area -->
            <div id="testimonial-slider" class="flex overflow-x-auto scroll-smooth snap-x snap-mandatory pb-6 -mb-6 no-scrollbar cursor-grab active:cursor-grabbing">
              <!-- Slide 1 -->
              <div class="w-full flex-shrink-0 snap-start px-2">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center flex flex-col h-full">
                  <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Maria S." class="w-20 h-20 rounded-full object-cover mx-auto mb-4">
                  <blockquote class="text-dark/80 italic mb-4 flex-grow">
                    <p>"Absolutely love the advice here! My skin has never looked better. The tips are practical and easy to follow."</p>
                  </blockquote>
                  <footer class="font-semibold text-dark">- Maria S.</footer>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="w-full flex-shrink-0 snap-start px-2">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center flex flex-col h-full">
                  <img src="https://images.pexels.com/photos/91227/pexels-photo-91227.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Jessica L." class="w-20 h-20 rounded-full object-cover mx-auto mb-4">
                  <blockquote class="text-dark/80 italic mb-4 flex-grow">
                    <p>"I was skeptical at first, but the results speak for themselves. The articles are well-researched and easy to understand. Highly recommended."</p>
                  </blockquote>
                  <footer class="font-semibold text-dark">- Jessica L.</footer>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="w-full flex-shrink-0 snap-start px-2">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center flex flex-col h-full">
                  <img src="https://images.pexels.com/photos/1065084/pexels-photo-1065084.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Sarah K." class="w-20 h-20 rounded-full object-cover mx-auto mb-4">
                  <blockquote class="text-dark/80 italic mb-4 flex-grow">
                    <p>"A fantastic resource for anyone interested in health and beauty. The community is so supportive and the content is top-notch."</p>
                  </blockquote>
                  <footer class="font-semibold text-dark">- Sarah K.</footer>
                </div>
              </div>

              <!-- Slide 4 -->
              <div class="w-full flex-shrink-0 snap-start px-2">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center flex flex-col h-full">
                  <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="David R." class="w-20 h-20 rounded-full object-cover mx-auto mb-4">
                  <blockquote class="text-dark/80 italic mb-4 flex-grow">
                    <p>"The best beauty blog out there, period. I've learned so much and my confidence has skyrocketed. Thank you!"</p>
                  </blockquote>
                  <footer class="font-semibold text-dark">- David R.</footer>
                </div>
              </div>
            </div>
          </div>

          <!-- Badges & Certifications -->
          <div class="flex flex-wrap justify-center lg:justify-start items-center pt-12 gap-8 md:gap-12">
            <div class="flex items-center gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span class="font-semibold text-dark">Award-Winning Aesthetic Medicine</span>
            </div>
            <div class="flex items-center gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
              <span class="font-semibold text-dark">Certified Skincare Experts</span>
            </div>
          </div>
        </div>
        
        <!-- Right Column: Image -->
        <div class="hidden lg:block">
          <img src="https://media.licdn.com/dms/image/v2/D4E03AQEFWazvsNJgmw/profile-displayphoto-shrink_800_800/B4EZZj2nhSHYAc-/0/1745431984739?e=1756339200&v=beta&t=uIWIG87r2NYWI989tzvXeUsFjOrcnbPtds4DY4Rfit4" alt="Woman smiling" class="rounded-lg shadow-xl w-full h-auto object-cover">
        </div>
      </div>
    </div>
  </section>
  <!-- End Trust-Building Section -->

  <?php get_template_part('template-parts/components/lead-magnet'); ?>

  <?php get_template_part('template-parts/components/branding-quote'); ?>


</main>

<?php get_footer(); ?>
