<main>


    <div class="container">
        <section>
            <a href="/www.escola.com.br/Controller/controllerProfessor.php">
                <button class="btn btn-success ml-1"> Voltar</button>
            </a>

        </section>
        <h2 class="mt-3 ml-1"><?= TITLEP ?></h2>
        <form id="formCadastroDeobprofessor" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nomeID">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?= $obprofessor->nome ?>" placeholder="nome">
                </div>
                <div class="form-group col-md-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" value="<?= $obprofessor->cpf ?>" id="cpf" placeholder="CPF" autocomplete="off" maxlength="14">

                </div>

                <div class="form-group col-md-4">
                    <label for="cepID">Sala</label>
                    <input type="text" class="form-control" name="sala" value="<?= $obprofessor->sala ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="cepID">Turma</label>
                    <input type="text" class="form-control" name="turma" value="<?= $obprofessor->turma ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="cepID">Materia</label>
                    <input type="text" class="form-control" name="materia" value="<?= $obprofessor->materia ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-success form-inline">Salvar</button>
        </form>
    </div>
</main>