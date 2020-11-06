<main>
  <div>
    <h2 class="mt-3">Excluir Instituicao</h2>

    <form method="post">

      <div class="form-group">
        <p>Você deseja realmente excluir a instituicao <strong><?= $obinstituicao->nome ?></strong>?</p>
      </div>

      <div class="form-group">
        <a href="/www.escola.com.br/Controller/controllerInstituicao.php">
          <button type="button" class="btn btn-success">Cancelar</button>
        </a>

        <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
      </div>

    </form>
  </div>
</main>