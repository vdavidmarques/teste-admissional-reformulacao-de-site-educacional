<div class="form">
    <form action="<?= $root ?>/send-mail.php" method="POST">
        <input type="text" id="name" name="name" placeholder="Nome" required><br><br>        
        <input type="email" id="email" name="email" placeholder="Email"><br><br>        
        <input type="tel" id="phone" name="phone" required placeholder="Telefone "><br><br>        
        <textarea id="message" name="message" placeholder="Mensagem"></textarea><br><br>

        <div class="g-recaptcha" data-sitekey=""></div> 
        <button type="submit" class="button button-default">Enviar</button>
    </form>
</div>