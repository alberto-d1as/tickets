<?php
// LIGAR A BASE DE DADOS
$link = mysqli_connect("localhost", "root", "", "fornecedor");

// VERIFICAR CONEXÃO
if($link === false){
    die("ERRO AO LIGAR À BASE DE DADOS. " . mysqli_connect_error());
}

// ESCAPE INPUTS
$ticket = mysqli_real_escape_string($link, $_POST['txtTicket']);
$fornecedor = mysqli_real_escape_string($link, $_POST['txtFornecedor']);
$descricao = mysqli_real_escape_string($link, $_POST['txtDescricao']);
$data = mysqli_real_escape_string($link, $_POST['txtData']);

// INSERIR DADOS NA TABELA
$sql = 'INSERT INTO fornecedor (TICKET,FORNECEDOR,DESCRICAO,DATA_ABERTURA) VALUES 
("'.$ticket.'","'.$fornecedor.'","'.$descricao.'","'.$data.'")';

// VOLTAR A PAGINA DO FORMULARIO
if(mysqli_query($link, $sql)){
    mysqli_close($link);
    header('Location: sucesso.html');
    exit;
} else {
    echo "Não foi possível cadastrar o protocolo.";
}
?>;