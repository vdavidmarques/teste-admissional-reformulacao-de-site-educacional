</div>
</div>
<footer
role="contentinfo"
itemscope
itemtype="http://schema.org/WPFooter">
<div class="waves wave-1a"></div>
    <div class="container">
        <div class="about-me-footer" id="quem-somos">
            <div class="content">
                <p>Com mais de 20 anos de tradição, a Escola Fictícia é referência em educação de qualidade, sempre acolhendo nossos alunos e preparando-os para o futuro. Além do ensino de excelência, priorizamos a formação de cidadãos conscientes e preparados para enfrentar os desafios da sociedade. Por meio de atividades extracurriculares, projetos sociais e programas de apoio ao estudante, oferecemos uma educação que vai além da sala de aula, formando indivíduos comprometidos com o futuro.</p>        
                <div class="social-networks">
                    <a
                        target="_blank"
                        href="mailto:"
                        class="scroll-effect">
                        <img
                            src="<?php echo $root ?>/dist/icons/email.svg"
                            alt=""
                            itemprop="image"
                            class="ease-in-out" />
                    </a>
                    <a
                        target="_blank"
                        href="https://www.instagram.com/"
                        class="scroll-effect">
                        <img
                            src="<?php echo $root ?>/dist/icons/instagram.svg"
                            alt=""
                            itemprop="image"
                            class="ease-in-out" />
                    </a>
                    <a
                        target="_blank"
                        href="#"
                        class="scroll-effect">
                        <img
                            src="<?php echo $root ?>/dist/icons/facebook.svg"
                            alt=""
                            itemprop="image"
                            class="ease-in-out" />
                    </a>
                </div>
            </div>
            <div class="form">
                <?php 
                    include 'components/form.php';          
                ?>         
            </div>
        </div>
        <div class="wpp-float">
            <a
                target="_blank"
                href="#">
                <img
                    src="<?php echo $root ?>/dist/icons/whatsapp.svg"
                    alt="WhatsApp"
                    class="ease-in-out"
                    itemprop="image" />
            </a>
        </div>
        <button class="scroll-to-top-btn" id="scrollToTopBtn">
            Subir para o topo
        </button>
    </div>
    <div class="after-footer-bg">
        <div class="container after-footer">
            <div id="copyright" itemprop="copyrightHolder">
                &copy; 2024 Teste Site Educacional
            </div>
        </div>
    </div>
</footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script
    type="text/javascript"
    src="<?php echo $root ?>/dist/js/scripts.js"
    id="script-js-js">
</script>

</body>

</html>