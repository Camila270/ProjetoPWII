<?php include "cabecalho.php"?>


<div class="row">
    <form action="avaliacao.php" method="POST">

        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastro de livros</span>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" name="titulo" type="text" class="validate" required>
                            <label for="titulo">Titulo </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="avaliacao" name="avaliacao" class="materialize-textarea" required></textarea>
                                <label for="avaliacao">O que você achou?</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" name="nota" step="0.1" min=0 max=10 class="validate">
                            <label for="nota">Nota </label>
                        </div>
                    </div>

                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="capa">
                        </div>
                    </div>







                    <div class="card-action">
                        <a href="galeria.php" class="waves-effect waves-light btn grey">Cancelar</a>
                        <button type= "submit" class="waves-effect waves-light btn">Adicionar</button> 
                    </div>
                </div>
            </div>
    </form>

</div>


</body>

</html>