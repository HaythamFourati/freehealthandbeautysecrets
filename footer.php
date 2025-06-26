<footer class="bg-dark text-light/70 pt-16 pb-8">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
      
      <!-- Site Info -->
      <div>
        <a href="<?php echo home_url(); ?>" class="flex items-center justify-center md:justify-start mb-4">
            <svg class="h-6 w-6 mr-2 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.375a9.375 9.375 0 01-6.913-3.162c-2.429-2.585-.33-6.033 3.162-8.243a9.375 9.375 0 0112.022 1.413 9.375 9.375 0 01-1.413 12.022A9.33 9.33 0 0112 18.375zM12 5.25a.75.75 0 00-.75.75v6c0 .414.336.75.75.75s.75-.336.75-.75v-6a.75.75 0 00-.75-.75z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.375a9.375 9.375 0 01-6.913-3.162c-2.429-2.585-.33-6.033 3.162-8.243a9.375 9.375 0 0112.022 1.413 9.375 9.375 0 01-1.413 12.022A9.33 9.33 0 0112 18.375zM12 5.25a.75.75 0 00-.75.75v6c0 .414.336.75.75.75s.75-.336.75-.75v-6a.75.75 0 00-.75-.75z" transform="rotate(45 12 12)" />
            </svg>
            <span class="font-serif text-xl text-light"><?php bloginfo('name'); ?></span>
        </a>
        <p class="text-sm text-white">Your daily dose of trusted beauty, health, and wellness secrets.</p>
      </div>

      <!-- Quick Links -->
      <div>
        <h3 class="font-serif text-lg text-light mb-4">Quick Links</h3>
        <?php 
          wp_nav_menu( array(
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'space-y-2 text-white',
            'fallback_cb' => false,
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 1,
          ) );
        ?>
      </div>

      <!-- Social Media -->
      <div>
        <h3 class="font-serif text-lg text-light mb-4">Follow Us</h3>
        <div class="flex justify-center md:justify-start space-x-4">
          <a href="#" class="text-text-white hover:text-primary transition-colors"><span class="sr-only">Facebook</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v2.385z" /></svg></a>
          <a href="#" class="text-white hover:text-primary transition-colors"><span class="sr-only">Instagram</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.012 3.584-.07 4.85c-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.85s.012-3.584.07-4.85c.148-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z" /></svg></a>
          <a href="#" class="text-white hover:text-primary transition-colors"><span class="sr-only">Twitter</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616v.064c0 2.298 1.634 4.212 3.791 4.649-.69.188-1.423.23-2.16.084.616 1.923 2.394 3.316 4.491 3.355-1.749 1.371-3.946 2.185-6.34 2.185-.41 0-.816-.023-1.215-.073 2.261 1.448 4.953 2.289 7.825 2.289 9.325 0 14.425-7.75 14.425-14.425 0-.219 0-.437-.015-.654.988-.711 1.844-1.604 2.523-2.616z" /></svg></a>
          <a href="#" class="text-white hover:text-primary transition-colors"><span class="sr-only">Pinterest</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.79-.018-1.67.232-2.42.266-.813.555-1.643.555-1.643s-.149-.298-.149-.736c0-.69.42-1.212.942-1.212.446 0 .66.332.66.726 0 .437-.285 1.095-.437 1.706-.126.524.262.94.795.94.946 0 1.688-1.003 1.688-2.462 0-1.297-.955-2.248-2.14-2.248-1.452 0-2.316 1.09-2.316 2.18 0 .41.155.858.345 1.14.075.11.085.13.06.22-.02.07-.135.53-.155.61-.025.1-.09.12-.21.07-1.095-.24-1.78-1.15-1.78-2.382 0-1.982 1.45-3.59 4.04-3.59 2.125 0 3.765 1.522 3.765 3.345 0 2.01-1.275 3.562-3.02 3.562-.625 0-1.22-.32-1.42-.686-.17-.31.22-1.27.22-1.27.22-.49.42-.98.42-1.47 0-.726-.4-1.33-1.12-1.33-.835 0-1.52.864-1.52 1.965 0 .58.25 1.22.25 1.22l-1.04 4.34c-.45 1.88.15 4.38.15 4.38.3 1.25.98 1.69 1.12 1.78.17.11.34.02.42-.12.08-.14.155-1.75.155-1.75.125-1.02.685-1.94.685-1.94.625 1.14 2.08 2.03 3.56 2.03 4.795 0 8.58-4.38 8.58-9.428 0-5.11-3.5-9.25-8.25-9.25z" /></svg></a>
        </div>
      </div>

    </div>

    <div class="border-t border-light/10 mt-8 pt-8 text-center text-sm text-white">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
