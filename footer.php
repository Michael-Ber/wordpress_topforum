<!-- FOOTER -->
<footer class="footer">
        <div class="container">
            <div class="footer__upper">
                <ul class="footer__links">
                    <li><span class="footer__link-title">TOP FORUM</span></li>
                    <li><a href="#" class="footer__link">Sponsors</a></li>
                    <li><a href="#" class="footer__link">Exhibitors</a></li>
                    <li><a href="#" class="footer__link">Speakers</a></li>
                    <li><a href="#" class="footer__link">Media</a></li>
                </ul>
                <ul class="footer__contacts">
                    <li><span class="footer__link-title">CONTACT</span></li>
                    <li><span class="footer__link-text"><?php the_field('company_name', 10); ?></span></li>
                    <li><span class="footer__link-text"><?php the_field('company_address', 10); ?></span></li><br>
                    <li><a href="tel:+421221025322" class="footer__link"><?php the_field('company_phone', 10); ?></a></li>
                    <li><a href="mailto:info@topforum.com" class="footer__link"><?php the_field('company_email', 10); ?></a></li>
                </ul>
                <div class="footer__followus">
                    <span class="footer__link-title">FOLLOW US</span>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__rights"><span><?php the_field('copyright', 10); ?></span></div>
                <div class="footer__logo">
                    <span><?php the_field('developer_text', 10); ?></span>
                    <img src="<?php the_field('developer_logo', 10); ?>" alt="mamont">
                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <?php 
        wp_footer();
    ?>
</body>
</html>