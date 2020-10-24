<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Controle de Acesso - Portaria</title>
        <link rel="stylesheet" href="../Css/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Css/padrao.css">
        <link rel="stylesheet" href="../JS/DataTables-1.10.22/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../FA/css/all.css">
    </head>
    <body>
        <div class="navbar navbar-expand navbar-dark nvg text-light sticky-top"> 
            <a class="navbar-brand" href="#">Controle de Acesso</a>
            <div class="ml-auto d-inline-flex align-items-center">
                <label class="m-0">Bem vindo ...</label>
                <a class="nav-link" href="#"><i class="fas fa-door-open"></i>Deslogar</a>
            </div>
        </div>
        <div class="row conteudo">
            <div class="col-2 menu-lateral ">
                <ul class="nav flex-column position-fixed">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="fas fa-home"></i>
                            Inicio</a>
                        <hr class="my-0">
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link menu-link" href="/Cadastro">
                            <i class="fas fa-user-plus"></i>
                            Cadastrar
                        </a>
                        <hr class="my-0">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Relatorios">
                            <i class="fas fa-chart-pie"></i>
                            Relatórios
                        </a>
                        <hr class="my-0">
                    </li>
                </ul>
            </div>
            <div class="col-10 principal" >
                <div class="container-fluid align-items-center justify-content-center" >
                    <div class="row align-items-center justify-content-center my-5 py-5">
                        <form class="col-11 justify-content-center align-items-center" method="POST" id="frmCadTemp" name="frmCadTemp" action="/cad_temp"> 
                            <div class="card card-block w-100">
                                <div class="card-header">
                                    <h5 class="lead">Cadastro Temporario</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <input type="hidden" name="hdnId_Operacional" value="1">
                                        <input type="hidden" name="hdnId_Morador" value="1">
                                        <div class="col-4">
                                            <label for="txtNome">Nome:</label>
                                            <input class="form-control" type="text" id="txtNome" name="txtNome" placeholder="Digite o nome">
                                        </div>
                                        <div class="col-4">
                                            <label for="txtCPF">CPF:</label>
                                            <input 
                                            class="form-control"
                                            type="text"
                                            id="txtCPF"
                                            name="txtCPF"
                                            placeholder="Digite o CPF">
                                        </div>
                                        <div class="col-4">
                                            <label for="txtTelefone">Telefone:</label>
                                            <input 
                                            class="form-control" 
                                            type="text" 
                                            id="txtTelefone" 
                                            name="txtTelefone" 
                                            placeholder="Digite o telefone">
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center pt-5">
                                        <div class="col-4">
                                            <label for="txtRG">RG:</label>
                                            <input 
                                            class="form-control" 
                                            type="text" 
                                            id="txtRG" 
                                            name="txtRG" 
                                            placeholder="Digite o RG">
                                        </div>
                                        <div class="col-2">
                                            <label for="slcUF">UF:</label>
                                            <select class="form-control" id="slcUF" name="slcUF">
                                                <option selected value="N/A">Escolha</option>
                                                <option value="SP">SP</option>
                                                <option value="RJ">RJ</option>
                                                <option value="CE">CE</option>
                                                <option value="PA">PA</option>
                                                <option value="BA">BA</option>
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <label for="txtEmissor">Emissor:</label>
                                            <input 
                                            class="form-control" 
                                            type="text" 
                                            id="txtEmissor" 
                                            name="txtEmissor" 
                                            placeholder="Digite o Emissor">
                                        </div>
                                        <div class="col-4">
                                            <label for="txtVeiculo">Possui veiculo?</label>                                       
                                            <div class="form-check">
                                                <input 
                                                class="form-check-input" 
                                                type="radio" 
                                                name="rdoVeiculo"
                                                id="rdoVSim" 
                                                value="Sim">
                                                <label 
                                                class="form-check-label" 
                                                for="rdoVSim">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input 
                                                class="form-check-input" 
                                                type="radio" 
                                                id="rdoVNao" 
                                                name="rdoVeiculo" 
                                                value="Nao">
                                                <label 
                                                class="form-check-label" 
                                                for="rdoVNao">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center pt-5">
                                        <div class="col-4">
                                            <label for="txtPlaca">Placa:</label>
                                            <input 
                                            class="form-control" 
                                            type="text" 
                                            id="txtPlaca" 
                                            name="txtPlaca" 
                                            placeholder="Digite a placa" disabled>
                                        </div>
                                        <div class="col-4">
                                            <label for="txtMorador">Morador:</label>
                                            <input 
                                            class="form-control" 
                                            type="text" 
                                            id="txtMorador" 
                                            name="txtMorador" 
                                            placeholder="Digite a morador">
                                        </div>
                                        <div class="col-4">
                                            <label for="slcRazao">Tipo:</label>
                                            <select class="form-control" id="slcRazao" name="slcRazao">
                                                <option selected value="N/A">Escolha</option>
                                                <option value="Prestador">Prestador</option>
                                                <option value="Visita">Visita</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row pt-4 d-flex justify-content-center">
                                        <div class="col-6  d-flex justify-content-center">
                                            <button class="btn-danger btn" type="button" id="btnCancelar" value="Cancelar" onclick="window.location.href='/''">Cancelar</button>
                                        </div>
                                        <div class="col-6  d-flex justify-content-center">
                                            <button class="btn-primary btn" type="submit" id="btnSubmit">Cadastrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="d-flex justify-content-center fixed-bottom w-100">
            <p class="lead text-light">Centro Paula Souza - 2020</p>
        </footer>
        <script src="../JS/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
        <script src="../JS/DataTables-1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="../JS/DataTables-1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="../JS/datatable.js"></script>
        <script src="../FA/js/all.min.js" crossorigin="anonymous"></script>
    </body>
</html>