<main>


    <div class="container">
        <section>
            <a href="/www.escola.com.br/Controller/ControllerCurso.php">
                <button class="btn btn-success ml-3"> Voltar</button>
            </a>

        </section>
        <h2 class="mt-3 ml-3"><?= TITLECURSO ?></h2>

        <form method="POST">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="nomeCursoID">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?=$obcurso->nome?>"id="nomeCursoID" placeholder="Análise e Desenvolvimento de Sistemas">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label >Data Criação</label>
                    <input type="date" class="form-control"value="<?=$obcurso->datacriacao?>" name="datacriacao">
                </div>
                <div class="form-group col-md-4">
                    <label>Conceito ENADE</label>
                    <input type="number" class="form-control" value="<?=$obcurso->enade?>" name="enade" id="conceitoENADEID">
                </div>
                <!-- <div class="form-group col-md-4">
                    <label for="areaID">Área</label>
                    <select name="area" id="areaID" class="form-control">
                        Não foi possível conectar. could not find drive
                    </select>
                </div>-->
                <div class="form-group col-md-4">
                    <label>Area</label>
                    <input type="text" class="form-control" value="<?=$obcurso->area?>" name="area" >
                </div>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
</main>