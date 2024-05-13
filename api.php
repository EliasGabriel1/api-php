<?php
header("Content-Type: application/json; charset=UTF-8");

$usuarios = [
    [
        "id" => 1,
        "nome" => "João",
        "email" => "joao@example.com"
    ],
    [
        "id" => 2,
        "nome" => "Maria",
        "email" => "maria@example.com"
    ],
    [
        "id" => 3,
        "nome" => "Pedro",
        "email" => "pedro@example.com"
    ]
];

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuarioEncontrado = null;
    foreach($usuarios as $usuario) {
        if($usuario['id'] == $id) {
            $usuarioEncontrado = $usuario;
            break;
        }
    }
    if($usuarioEncontrado !== null) {
        echo json_encode($usuarioEncontrado);
    } else {
        http_response_code(404);
        echo json_encode(array("mensagem" => "Usuário não encontrado."));
    }
} else {
    echo json_encode($usuarios);
}
?>
