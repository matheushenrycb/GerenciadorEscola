<main>


    <div class="container">
        <section>
            <a href="/www.escola.com.br/Controller/ControllerInstituicao.php">
                <button class="btn btn-success ml-3"> Voltar</button>
            </a>

        </section>
        <h2 class="mt-3 ml-3"><?= TITLEINSTITUICAO ?></h2>

        <form method="POST">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="nomeinstituicaoID">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?=$obinstituicao->nome?>"id="nomeinstituicaoID" placeholder="Análise e Desenvolvimento de Sistemas">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label >Data Criação</label>
                    <input type="date" class="form-control"value="<?=$obinstituicao->datacriacao?>" name="datacriacao">
                </div>
                <div class="form-group col-md-4">
                    <label>Tipo</label>
                    <input type="text" class="form-control" value="<?=$obinstituicao->tipo?>" name="tipo" id="conceitoENADEID">
                </div>
               
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
</main>