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
            <div class="col-2 menu-lateral">
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
                <div class="container-fluid" >
                    <div class="row d-flex align-content-center justify-content-center my-2">
                        <h1 class="display-3">Cadastros temporarios pendentes</h1>
                    </div>
                    <div class="row d-flex align-content-center justify-content-center my-5">
                        <table class="table table-dark table-striped table-hover table-sm" id="tblPendencia">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Veiculo</th>
                                    <th scope="col">Cor do Veiculo</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Morador</th>
                                    <th scope="col">Razão</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">17</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                                <tr>
                                    <th scope="row">18</th>
                                    <td>Juan Gonzalez</td>
                                    <td>111.111.111-11</td>
                                    <td>ABC1234</td>
                                    <td>Vermelho</td>
                                    <td>R.Esmeralda 145</td>
                                    <td>João dos Santos</td>
                                    <td>Prestação de serviço</td>
                                    <td><i class="fas fa-exclamation-circle" style="color:yellow"></i> Pendente</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container d-flex justify-content-center mt-3">
            <p class="lead text-light">Centro Paula Souza - 2020</p>
        </footer>
        <script src="../JS/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
        <script src="../JS/DataTables-1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="../JS/DataTables-1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="../JS/datatable.js"></script>
        <script src="../FA/js/all.min.js" crossorigin="anonymous"></script>
    </body>
</html>