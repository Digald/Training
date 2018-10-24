<footer>
    <p>this is my footer</p>
    <!-- adding custom menu to the footer calling the secondary name from functions.php -->
    <?php wp_nav_menu(array('theme_location' => 'secondary'));?>
</footer>
<!-- function to include scripts from functions.php -->
<?php wp_footer();?>
</body>
</html>
