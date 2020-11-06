<main>


    <div class="container">
        <section>
            <a href="/www.escola.com.br/Controller/ControllerArea.php">
                <button class="btn btn-success ml-3"> Voltar</button>
            </a>

        </section>
        <h2 class="mt-3 ml-3"><?= TITLEAREA ?></h2>

        <form method="POST">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="nomeareaID">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?=$obarea->nome?>"id="nomeareaID" placeholder="Análise e Desenvolvimento de Sistemas">
                </div>
            </div>

           
            <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
</main>