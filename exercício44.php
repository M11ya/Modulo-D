<?php

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    public static $usuarios = [];
    private static $proximoId = 1; 

    public function __construct($nome, $email, $senha) {
        $this->id = Usuario::$proximoId++; 
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public static function cadastrar($nome, $email, $senha) {
        foreach (Usuario::$usuarios as $usuario) {
            if ($usuario->email === $email) {
                echo "Erro: E-mail já cadastrado!\n";
                return false;
            }
        }

        $novoUsuario = new Usuario($nome, $email, $senha);
        Usuario::$usuarios[] = $novoUsuario;
        echo "Usuário cadastrado com sucesso! ID: {$novoUsuario->id}\n";
        return true;
    }

    public static function alterar($id, $nome, $email, $senha) {
        foreach (Usuario::$usuarios as $usuario) {
            if ($usuario->id == $id) {
                $usuario->nome = $nome;
                $usuario->email = $email;
                $usuario->senha = $senha;
                echo "Usuário atualizado com sucesso!\n";
                return true;
            }
        }
        echo "Erro: Usuário não encontrado!\n";
        return false;
    }

    public static function deletar($id) {
        foreach (Usuario::$usuarios as $key => $usuario) {
            if ($usuario->id == $id) {
                unset(Usuario::$usuarios[$key]);
                Usuario::$usuarios = array_values(Usuario::$usuarios);
                echo "Usuário deletado com sucesso!\n";
                return true;
            }
        }
        echo "Erro: Usuário não encontrado!\n";
        return false;
    }

    public static function mostrarTodos() {
        if (empty(Usuario::$usuarios)) {
            echo "Nenhum usuário cadastrado!\n";
            return;
        }

        foreach (Usuario::$usuarios as $usuario) {
            echo "ID: {$usuario->id}, Nome: {$usuario->nome}, Email: {$usuario->email}\n";
        }
    }

    public static function BuscarPorEmail($email) {
        foreach (Usuario::$usuarios as $usuario) {
            if ($usuario->email === $email) {
                echo "Usuário encontrado: ID: {$usuario->id}, Nome: {$usuario->nome}, Email: {$usuario->email}\n";
                return $usuario;
            }
        }
        echo "Erro: Usuário não encontrado!\n";
        return null;
    }
}

while (true) {
    echo "\nMenu:\n";
    echo "1. Cadastrar usuário\n";
    echo "2. Alterar usuário\n";
    echo "3. Deletar usuário\n";
    echo "4. Mostrar todos os usuários\n";
    echo "5. Buscar por e-mail\n";
    echo "6. Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case '1':
            $nome = readline("Nome: ");
            $email = readline("Email: ");
            $senha = readline("Senha: ");
            Usuario::cadastrar($nome, $email, $senha);
            break;

        case '2':
            $id = readline("ID do Usuário a ser Alterado: ");
            $nome = readline("Novo nome: ");
            $email = readline("Novo email: ");
            $senha = readline("Nova senha: ");
            Usuario::alterar($id, $nome, $email, $senha);
            break;

        case '3':
            $id = readline("ID do usuário a ser deletado: ");
            Usuario::deletar($id);
            break;

        case '4':
            Usuario::mostrarTodos();
            break;

        case '5':
            $email = readline("Digite o email do usuário: ");
            Usuario::buscarPorEmail($email);
            break;

        case '6':
            echo "Saindo...\n";
            exit;

        default:
            echo "Opção inválida!\n";
    }
}

?>