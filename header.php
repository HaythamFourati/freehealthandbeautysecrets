<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('font-sans'); ?>>
    <header class="site-header bg-light sticky top-0 z-50">
      <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
          
          <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M5 21c.5 -4.5 2.5 -8 7 -10" />
              <path d="M9 18c6.218 0 10.5 -3.288 11 -12v-2h-4.014c-9 0 -11.986 4 -12 9c0 1 0 3 2 5h3z" />
            </svg>
            <span class="text-xl font-serif text-dark">Free Health & Beauty Secrets</span>
          </a>

          <nav class="hidden md:flex items-center space-x-8">
            <a href="#" class="text-dark hover:text-primary">Home</a>
            <a href="#" class="text-dark hover:text-primary">About</a>
            <a href="#" class="text-dark hover:text-primary">Blog</a>
            <a href="#" class="text-dark hover:text-primary">Services</a>
            <a href="#" class="text-dark hover:text-primary">Contact</a>
            <a href="#" class="bg-primary text-white px-5 py-2 rounded-md hover:opacity-90 transition-opacity text-sm font-medium">Free Consultation</a>
          </nav>

          <div class="md:hidden">
            <button id="mobile-menu-button" class="focus:outline-none">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
          </div>

        </div>
      </div>

      <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:bg-primary hover:text-white">Home</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:bg-primary hover:text-white">About</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:bg-primary hover:text-white">Blog</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:bg-primary hover:text-white">Services</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:bg-primary hover:text-white">Contact</a>
        </div>
        <div class="px-5 pb-4 pt-2">
          <a href="#" class="block w-full text-center bg-primary text-white px-5 py-2.5 rounded-md hover:opacity-90 transition-opacity text-base font-medium">
            Free Consultation
          </a>
        </div>
      </div>
    </header>