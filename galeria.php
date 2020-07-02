
<?php
 include "cabecalho.php";


session_start();
require "./repository/LivrosRepositoryPDO.php";
require "./util/Mensagem.php";

$LivrosRepository = new LivrosRepositoryPDO();
$livros = $LivrosRepository->listarTodos();


/*$livro1 = [
  "titulo"=>"Eu sou a Lenda",
  "nota"=>8.5,
  "avaliacao"=>"A história se passa em um futuro não muito distante, quando todo o mundo é assolado por uma impiedosa praga. Homens, mulheres e até crianças são transformados em monstros carnívoros, e é nesse cenário pós-apocalíptico, tomado por criaturas da noite sedentas de sangue, que Robert Neville se torna o último homem na Terra e passa os dias em busca de comida e suprimentos, lutando para manter-se vivo e são. Mas os infectados espreitam pelas sombras, prontos para acabar com o último bastião da humanidade",
  "capa"=>"https://images-na.ssl-images-amazon.com/images/I/91rccrIivLL.jpg"
];*/

// $livros =[$livro1, $livro2, $livro3];
?>


<div class="row">
    <?php
    foreach ($livros as $livro) :

    ?>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo $livro->capa ?>">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title black-text"><?php echo $livro->titulo ?></span>
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text ">star</i><?php echo $livro->nota ?>
                    </p>
                    <p><?php echo $livro->avaliacao ?></p>
                </div>
            </div>

        </div>

    <?php endforeach ?>
</div>
<?= Mensagem::mostrar(); ?>

</body>

</html>