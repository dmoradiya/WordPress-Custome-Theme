<nav>
    <h2>Footer Navigation</h2>
    <?php
      wp_nav_menu( 
        array( // This name is set in: functions.php
          'theme_location' => 'footer_menu'
        )
      );
    ?>
  </nav>
  <footer>    
    <p>
      &copy;
      <?php echo date( 'Y' ); ?>
      <a href="<?php echo site_url(); ?>">
        <?php bloginfo( 'title' ); ?>
      </a>
      All Rights Reserved.
    </p>
  </footer>
  <?php
    // Similar to wp_head(), but for footer scripts
    // and output.
    wp_footer();
  ?>
</body>
</html>