<main>
  <div>
    <h2 class="mt-3">Excluir Area</h2>

    <form method="post">

      <div class="form-group">
        <p>Você deseja realmente excluir a area <strong><?= $obarea->nome ?></strong>?</p>
      </div>

      <div class="form-group">
        <a href="/www.escola.com.br/Controller/controllerArea.php">
          <button type="button" class="btn btn-success">Cancelar</button>
        </a>

        <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
      </div>

    </form>
  </div>
</main>