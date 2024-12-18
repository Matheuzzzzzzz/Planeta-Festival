<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Components/css/homecss.css">

    <title>Planeta Festival-cadastro</title>
</head>

<body>
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

                            <li><a href="../view/cadastroespaco">Espaços Festivos</a></li>
                            <li><a href="../view/cadastrocliente.php">Cadastro Cliente</a></li>
                            <li><a href="../view/usuario.php">Pagina de Usuário</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <h1><img id="astronalta" src="https://images.vexels.com/media/users/3/205157/isolated/preview/3a1d0d70d14ba68cd27271c889618e51-ilustracao-do-espaco-astronauta.png" alt=""><a href="pag_inicial.php">Planeta Festival</a></h1>
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
            <div id="CadastroCliente"> CADASTRO ESPAÇO </div>
            <form action="../controller/insertespaco.php" method="POST" class="foorm">
                <div class="form-containerr">
                    <div class="inputt">
                        <label for="nomeespaco" class="form-label">Nome do Espaço:</label><br>
                        <input type="text" id="nomeespaco" name="nomeespaco" class="form-control" placeholder="Digite um nome para o espaço" required><br>
                    </div>
                    <div class="inputt">
                        <label for="nomelocal" class="form-label">Nome do Local:</label><br>
                        <input type="text" class="form-control" id="nomelocal" name="nomelocal" placeholder="Digite o nome do local" required><br>
                    </div>
                    <div class="inputt">
                        <label for="tipo" class="form-label">Tipo:</label><br>
                        <select name="tipo">
                            <option value="Casa">Casa</option>
                            <option value="Sitio">Sitío</option>
                            <option value="Espaço de Eventos">Espaço de Eventos</option>
                            <option value="Casa de Show">Casa de Show</option>
                            <option value="Salão de Festa">Salão de Festa</option>
                        </select>
                    </div><br>
                    <div class="inputt">
                        <label for="descricao" class="form-label">Descrição do Local:</label><br>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Escolha o tipo do local" required><br>
                    </div>
                    <div class="inputt">
                        <label for="imagem" class="form-label">Link da Imagem:</label><br>
                        <input type="text" class="form-control" id="imagem" name="imagem" placeholder="coloque o link da imagem" required><br>

                    </div>
                    <div class="inputt">
                        <label for="rua" class="form-label">Rua:</label><br>
                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite o nome da rua" required><br>
                    </div>
                    <div class="inputt">
                        <label for="numero" class="form-label">Número:</label><br>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o número da casa" required><br>
                    </div>
                    <div class="inputt">
                        <label for="bairro" class="form-label">Bairro:</label><br>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o nome do bairro" required><br>
                    </div>
                    <div class="inputt">
                        <label for="cidade" class="form-label">Cidade:</label><br>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite o nome da cidade" required><br>
                    </div>
                </div>
                <button id="btnconfig" type="submit" class="btn btn-primary">Inserir</button>
               <div class="liink"> <a href="../controller/dadosespaco.php" class="btn btn-primary">Ver Dados</a></div>
            </form>
        </div>
    </div>
    <script src="../TrabalhoProjetoDeSoftaware-main-2/ProjetoSoftware/js/script.js"></script>
</body>

</html>