<?php
/*

@package WordPress
@subpackage wpTheme
@since wpTheme

===================================
FOOTER
===================================
* This page generating the footer.
*
*/
?>


</div> <!-- /wrap div-->


<?php tha_footer_before(); ?>

<footer class="container footer-container">
     <?php tha_footer_top(); ?>
     <div class="row footer-widgets">
          <?php
               //add the widget part of the template
               get_template_part( 'template-parts/footer/part', 'widgets' );
          ?>
     </div>
     <div class="spacer-10"></div><!-- /spacer div-->
     <div class="row footer-navigation">
          <?php
               //add the footer navigation bar
               get_template_part( 'template-parts/footer/part', 'navbar-footer' );
          ?>
     </div>
     <div class="spacer-10"></div><!-- /spacer div-->
     <div class="row footer-credits">
          <?php
               //add the footer credits
               get_template_part( 'template-parts/footer/part', 'credit' );
          ?>
     </div>
     <?php tha_footer_bottom(); ?>
</footer>

<?php tha_footer_after(); ?>
<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
