<?php
    include_once 'templates/header.php';
?>

   <div class="container">
    <?php include_once 'templates/backbtn.html'; ?>
    <h1 id="main-title">Criar Contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Nome do Contato:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome do Contato" required> 
        </div>
        <div class="form-group">
            <label for="phone">Telefone do Contato:</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefone do Contato" required> 
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea class="form-control" name="observations" id="observations" placeholder="Observações" rows=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
   </div>

<?php
    include_once 'templates/footer.php';
?>