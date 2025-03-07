<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #site-container div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 */

?>

<?php 

//Contact Section Fields
$contact_address = get_field('address', 'option');
$contact_email = get_field('email', 'option');
$contact_quote = get_field('footer_content', 'option');
$contact_copyright = get_field('copyright_text', 'option');

?>

<footer>
    <div class="footer-upper">
        <div>
            <h3><?php echo esc_html($contact_quote); ?></h3>
            <a href="https://www.buymeacoffee.com/kanishkchaudhary" target="_blank">
                <img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee"
                    style="width: 200px;">
            </a>
        </div>
        <div>
            <h3>Contact Me</h3>
            <ul>
                <li>Email: <a href="mailto:<?php echo esc_html($contact_email); ?>"><?php echo esc_html($contact_email); ?></a></li>
                <li>Location: <a href="https://www.google.com/maps?q=<?php echo esc_html($contact_address); ?>"><?php echo esc_html($contact_address); ?></a></li>
            </ul>
        </div>
    </div>
    <p><?= $contact_copyright; ?></p>
</footer>

<?php wp_footer(); ?>

</body>
</html>
