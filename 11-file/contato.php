<?php include "includes/cabecalho.php"; ?>

<h2>Página de contato</h2>
            <p>Entre em contato conosco:</p>

<div class="container mt-4">
    <h2 class="mb-3">Formulário de Contato</h2>

    <form action="#" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome completo:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="tel" name="telefone" id="telefone" class="form-control">
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>         

<?php include "includes/rodape.php"; ?>