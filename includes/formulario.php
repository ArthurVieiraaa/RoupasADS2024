<section class="formulario">
    <h1>Formulário de Contato:</h1>
    <form action="enviar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome..." required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email..." required>
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" placeholder="Digite sua mensagem..." required></textarea>
        <button type="submit">Enviar</button>
    </form>
</section>