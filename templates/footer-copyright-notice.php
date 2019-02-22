<?php
/**
 * Footer copyright-text template.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 * @since      5.1.0
 */

?>
<div class="fusion-copyright-notice">
	<?php
	/**
	 * The 'footer_text' setting is not sanitized.
	 * In order to be able to take advantage of this,
	 * a user would have to gain access to the database
	 * in which case the footer text is the least on your worries.
	 */
	?>
	<div>
		<?php
			$cdate = date('Y');
			$bname = get_bloginfo('name');
			echo "Copyright &copy" . " " . $cdate . " " . $bname . " " . "| All Rights Reserved ";
			if(is_front_page()) { 
				echo "| <a class='footer-copyright-link' href='https://www.bluefrogdm.com' target='_blank'>Website Design and Development by Blue Frog Dynamic Marketing</a>"; 
			} 
		?>
	</div>
</div>
