<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">UPet</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Animais</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toogle="dropdown" aria-expanded="false" href="#">Suprimentos</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Manutenção</a></li>
                                    <li><a class="dropdown-item" href="#">Alimentação</a></li>
                                    <li><a class="dropdown-item" href="#">Medicos</a></li>
                                    <li><a class="dropdown-item" href="#">EPI</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Financeiro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Funcionarios</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-3"></div><!--Div vazia-->
            <div class="col-md-6 m-3 p-3">
                <h1>Cadastro de Animais</h1>
                <form action="cadastraAnimal.php" method="get">
                    <div class="mb-3">
                        <label for="familia" class="form-label">Família</label>
                        <select class="form-select" name="familia">
                            <option value="1">Felino</option>
                            <option value="2">Canídeo</option>
                            <option value="3">Aves</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nome">Nome do Animal</label>
                        <input class="form-control" type="text" name="nome">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tutor" >Tutor</label>
                        <select class="form-select" name="tutor">
                            <option value="1">João</option>
                            <option value="2">Maria</option>
                            <option value="3">José</option>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                    <label class="form-label" for="porte">Porte do Animal</label>
                       <select class="form-select" name="porte">
                        <option value="1">Pequeno</option>
                        <option value="2">Médio</option>
                        <option value="3">Grande</option>
                       </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="peso">Peso</label>
                        <input class="form-control" type="text" name="peso">
                    </div>
                    <div class="mb-3">
                        <label for="">Gênero:  </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" value="F">
                            <label class="form-check-label" for="genero">Fêmea</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" value="M">
                            <label class="form-check-label" for="genero">Macho</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="dn">Data de Nascimento</label>
                        <input type="date" name="dn" class="form-control">
                    </div>
                    <input class="btn btn-outline-danger" type="button" value="Cancelar">
                    <input class="btn btn-outline-success   " type="button" value="Salvar">
                </form>

            </div><!--Div FORM-->
            <div class="col-md-3"></div><!--Div vazia-->
        </div>
    </div>
</body>

</html>