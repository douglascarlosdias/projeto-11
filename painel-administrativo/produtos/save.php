<?php
header('Content-Type: text/html; charset=utf-8;');

require_once __DIR__ . '/../../src/dao/produtodao.php';

# recebe os valores enviados do formulário via método post.
$nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
$descricao = trim(filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS));
$valor = trim(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS));
$categoria = trim(filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS));
$imagem = trim(filter_input(INPUT_POST, 'imagem', FILTER_SANITIZE_SPECIAL_CHARS));
# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new ProdutoDAO();
$result = $dao->save($nome,$descricao,$valor,$categoria,$imagem);

if ($result) {
    header('location: index.php?msg=Categoria adicionada com sucesso!');
} else {
    header('location: index.php?error=Não foi possível adicionar a categoria!');
}