<?php

$nome1 = "joão";

echo $nome1;

echo "<br>";

$sobreNome = "Rangel";

$nomeCompleto = $nome1 ." " .$sobreNome;

echo $nomeCompleto;

exit;

unset($nome1);

if(isset($nome1)){
    echo $nome1;
}

?>