<?php
/**

*/ 

 { ?>
        
    <div class="clearfooter"> </div>
</div>
<!-- /main -->

</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="foot-nav">                     
             <?php	wp_nav_menu( array(  
                   'menu' => 'Top nav',
                   'container'  => '',
                   'menu_class' => 'nav',
                   'depth' => '1',                                
                   )
           );	?>                    
           </div>
        </div>
    </div>
<?php } ?>

<!-- Footer Section -->
<div class="footer-section">
	<div class="container">
		<div class="row">
                    <div class="footer-social-link">
                        <a href="https://www.facebook.com/pages/Academy-Smart-Ltd/167899486656056?pnref=lhc"><i class="fa fa-facebook-square"></i> Facebook</a>
                        <a href="https://www.linkedin.com/company/1629913?trk=prof-exp-company-name"><i class="fa fa-linkedin-square "></i> Linkedin</a>
                        <a href="mailto:info@smart-academy.com"><i class="fa fa-envelope"></i> info@smart-academy.com</a>
                        <span><i class="fa fa-phone"></i> +38 057 762-66-69</span>
						<?php $page = get_page_by_title("Contacts"); ?>
						<a class="#directions" href="<?php echo get_permalink($page->ID); ?>#direction"><i class="fa fa-map-marker"></i> Directions to our office</a>
                    </div>
                    <div class="copyright">
                        &copy;<?php echo date('Y')?> Academy Smart LTD
                    </div>
		</div>
	</div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>