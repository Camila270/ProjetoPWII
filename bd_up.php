<?php

$bd = new SQLite3("livros.db");

$sql = "DROP TABLE IF EXISTS livros";
if ($bd->exec($sql)) 
    echo "\n Tabela apagada\n";



$sql = "CREATE TABLE livros (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR (200) NOT NULL,
    capa VARCHAR (200),
    avaliacao TEXT,
    nota DECIMAL (2,1)
)";  

    if ($bd->exec($sql)) 
        echo "\n tabela criada com sucesso \n";
    

    $sql = "INSERT INTO livros (titulo,capa, avaliacao, nota) VALUES (
        'Eu sou a Lenda',
        'https://images-na.ssl-images-amazon.com/images/I/91rccrIivLL.jpg',
        'A história se passa em um futuro não muito distante, quando todo o mundo é assolado por uma impiedosa praga. Homens, mulheres e até crianças são transformados em monstros carnívoros, e é nesse cenário pós-apocalíptico, tomado por criaturas da noite sedentas de sangue, que Robert Neville se torna o último homem na Terra e passa os dias em busca de comida e suprimentos, lutando para manter-se vivo e são. Mas os infectados espreitam pelas sombras, prontos para acabar com o último bastião da humanidade',
        '8.5'
    )";

    if ($bd->exec($sql)) 
        echo "\n Deu certo \n";
        else echo "Deu ruim";

   

      
?>
