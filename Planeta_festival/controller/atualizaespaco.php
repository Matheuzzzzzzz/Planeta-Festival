<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Components/css/atualizacss.css">
    
    <title>Planeta Festival</title>
    <title>Planeta Festival-atualiza</title>
</head>
<style>

</style>


<header>
    <nav>
        <ul class="listnav">
            <li>
                <div class="dropdown">
                    <a href="">
                        <svg id="svg01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg>
                    </a>
                    <ul class="droplist">
                        <li><a href="../view/cadastroespaco.php">Espaços Festivos</a></li>
                        <li><a href="../view/cadastrocliente.php">Cadastro Cliente</a></li>
                        <li><a href="../view/usuario.php">Pagina de Usuário</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <h1><img id="astronalta" src="https://images.vexels.com/media/users/3/205157/isolated/preview/3a1d0d70d14ba68cd27271c889618e51-ilustracao-do-espaco-astronauta.png" alt=""><a href="../view/pag_inicial.php">Planeta Festival</a></h1>
            </li>

            <li>
                <form class="search-container" action="../view/busca.php" method="get">
                    <input type="text" name="busca" id="search-input" class="search-input" placeholder="Digite sua pesquisa...">
                    <button type="submit" class="search-button">Pesquisar</button>
                </form>
            </li>
            <li>
                <a href="../view/Index.php"><svg id="svg02" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                    </svg></a>
            </li>
        </ul>

    </nav>
</header>
<div id="meio">
    <div id="caixacentral">
        <div id="CadastroCliente"> Atualizar dados</div>

        <?php

        $resultadoSelect = 0;
        $resultadoUpdate;


        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "ProjetoSoftware";


        try {
            $conn = new mysqli($hostname, $username, $password, $database);
        } catch (Exception $e) {
            die("Erro ao conectar: " . $e->getMessage());
        }

        if (isset($_GET['id'])) {
            $sql = "SELECT * FROM cadastroespaco WHERE id = {$_GET['id']}";
            $resultadoSelect = $conn->query($sql);
        } else if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $nomeespaco = $_POST['nomeespaco'];
            $nomelocal = $_POST['nomelocal'];
            $tipo = $_POST['tipo'];
            $descricao = $_POST['descricao'];
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $imagem = $_POST['imagem'];
            $sql = "UPDATE cadastroespaco SET nomeespaco = '{$nomeespaco}', nomelocal = '{$nomelocal}', tipo = '{$tipo}', descricao = '{$descricao}', rua = '{$rua}', numero = '{$numero}', bairro = '{$bairro}', cidade = '{$cidade}', imagem = '{$imagem}' WHERE id = '{$id}'";
            //$sql = "UPDATE `aluno` SET `nome`='{$nome}',`email`='{$email}' WHERE `id` = '$id'";
            $resultadoUpdate = $conn->query($sql);
        }
        ?>
        <?php if ($resultadoSelect) : ?>
            <?php foreach ($resultadoSelect as $r) : ?>
                <form class="foorm" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
                    <div class="mb-4">
                        <div id="caixa">
                        <label for="exampleInputText1" class="form-label" id="txtid">ID Cliente:</label><br><br>
                        <input type="text" class="inputt" disabled value="<?= $r['id'] ?>">
                        <input type="text" name="id" value="<?= $r['id'] ?>" hidden>
                    </div>
                    <div class="form-containerr">
                        <div class="input">
                            <label for="nomeespaco" class="form-label">Nome do Espaço:</label><br><br>
                            <input type="text" id="nomeespaco" name="nomeespaco" class="form-control" placeholder="Digite um nome para o espaço" value="<?= $r['nomeespaco'] ?>">
                        </div>
                        <div class="inputt">
                            <label for="nomelocal" class="form-label">Nome do Local:</label><br><br>
                            <input type="text" class="form-control" id="nomelocal" name="nomelocal" placeholder="Digite o nome do local" value="<?= $r['nomelocal'] ?>">
                        </div>
                        <div class="inputt">
                            <label for="tipo" class="form-label">Tipo:</label><br><br>
                            <select name="tipo">
                                <option value="<?= $r['tipo'] ?>">Casa</option>
                                <option value="<?= $r['tipo'] ?>">Sitío</option>
                                <option value="<?= $r['tipo'] ?>">Espaço de Eventos</option>
                                <option value="<?= $r['tipo'] ?>">Casa de Show</option>
                                <option value="<?= $r['tipo'] ?>">Salão de Festa</option>
                            </select>
                        </div><br>
                        <div class="inputt">
                            <label for="descricao" class="form-label">Descrição do Local:</label><br><br>
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Escolha o tipo do local" value="<?= $r['descricao'] ?>">
                        </div>

                        <div class="inputt">
                            <label for="imagem" class="form-label">Link da Imagem:</label><br><br>
                            <input type="text" class="form-control" id="imagem" name="imagem" placeholder="coloque o link da imagem" value="<?= $r['imagem'] ?>">
                        </div>

                        <div class="inputt">
                            <label for="rua" class="form-label">Rua:</label><br><br>
                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite o nome da rua" value="<?= $r['rua'] ?>">
                        </div>
                        <div class="inputt">
                            <label for="numero" class="form-label">Número da Casa:</label><br><br>
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o número da casa" value="<?= $r['numero'] ?>">
                        </div>
                        <div class="inputt">
                            <label for="bairro" class="form-label">Bairro:</label><br><br>
                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o nome do bairro" value="<?= $r['bairro'] ?>">
                        </div>
                        <div class="inputt">
                            <label for="cidade" class="form-label">Cidade:</label><br><br>
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite o nome da cidade" value="<?= $r['cidade'] ?>">
                        </div>
                    </div>
                    <button id="btnconfig" type="submit" class="btn btn-primary" name="submit">Inserir</button>
                    </div>
                </form>

    </div>
    </form>
<?php endforeach; ?>
<?php elseif (isset($resultadoUpdate)) : ?>
    <?php if ($resultadoUpdate) : ?>
        <div class="atualiza" class="alert alert-sucess" role="alert">
            Atualizado com sucesso
        </div>
        <a href="../view/cadastroespaco.php" class="btn btn-danger" class="atualiza">voltar</a>
    <?php else : ?>
        <div class="alert alert-error" role="alert" class="atualiza">
            erro ao atualizar
        </div>
        <a href="../view/cadastroespaco.php" class="btn btn-danger" class="atualiza">voltar</a>
<?php endif;
        endif; ?>
<script src="../TrabalhoProjetoDeSoftaware-main-2/ProjetoSoftware/js/script.js"></script>

</body>

</html>