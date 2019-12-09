<?php
/**
 * The template for displaying the footer
 * @package rossross
 */
?>

</main>

<footer class="footer">

	<div class="pre-socket"></div><!--pre-socket-->

	<div class="socket">

		<div class="container cols-4">

			<div class="col colophon">&copy; Ross & Ross <?php echo date ('Y');?></div>

			<div class="col rossross">

				<a href="https://rossross.co.uk"><?php get_template_part('inc/img/rossross', 'logo');?></a>

			</div>

			<div class="col mandatory">

				<a href="<?php echo home_url() . '/terms-conditions'; ?>">Terms</a>

				<span class="divider">|</span>

				<a href="<?php echo home_url() . '/privacy-policy'; ?>">Privacy</a>

			</div>

		</div>

	</div>

	</div><!--socket-->

</footer>

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
