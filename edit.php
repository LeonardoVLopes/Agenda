<?php
    include_once 'templates/header.php';
?>

   <div class="container">
    <?php include_once 'templates/backbtn.html'; ?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">
        <div class="form-group">
            <label for="name">Nome do Contato:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome do Contato" value="<?= $contact['name'] ?>" required> 
        </div>
        <div class="form-group">
            <label for="phone">Telefone do Contato:</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefone do Contato" value="<?= $contact['phone'] ?>" required> 
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea class="form-control" name="observations" id="observations" placeholder="Observações" rows="3"><?= $contact['observations'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
   </div>

<?php
    include_once 'templates/footer.php';
?>