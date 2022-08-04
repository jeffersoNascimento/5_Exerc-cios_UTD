
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Formulário</title>
    <style>
        body{
            background-color: #87CEFA;
        }
    </style>
</head>
<body>

    <!-- Crie um formulário que receba 6 informações distintas de um cadastro e exiba-as na tela. (1 esc) -->

    <div class="container-fluid">
        <div class="row">
          <div class="col-2"></div>
          <div class="clo-8">
            <h1 class="texte-cente">Formulário</h1><hr>
            <div class="row">
                <form action="recebe.php" method="GET">

                    <div class="mb-3 col-4">
                        <label for="text" class="form-label">
                        <span>Nome</span>
                        </label>
                        <input type="text" class="form-control" id="nome completo" placeholder="Digite seu nome" name="nome">
                    </div>

                    <div class="mb-3 col-4">
                        <label for="text" class="form-label">
                        <span>Sobrenome</span>
                        </label>
                        <input type="text" class="form-control" id="nome completo" placeholder="Digite seu sobrenome" name="sobrenome">
                    </div>

                    <div class="mb-3 col-4">
                        <label for="cpf" class="form-label">
                        <span>CPF</span>
                        </label>
                        <input type="cpf" class="form-control" id="nome completo" placeholder="Digite seu CPF" name="cpf">
                    </div>

                    <div class="mb-3 col-4">
                        <label for="date" class="form-label">
                        <span>Nome</span>
                        </label>
                        <input type="date" class="form-control" id="dtnasc" placeholder="Data de nascimento" name="dtnasc">
                    </div>

                    <div class="mb-3 col-4">
                        <label for="email" class="form-label">
                        <span>Email</span>
                        </label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
                    </div>

                    <div class="mb-3 col-4">
                        <label for="password" class="form-label">
                        <span>Senha</span>
                        </label>
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">
                    </div>



                    <div class="mb-3 col-7 text-center">
                        <button type="submit" class="btn btn-outline-primary">
                            <span class="iconify" data-icon="fluent:send-20-filled">
                                Enviar Dados
                            </span>
                        </button>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
    
</body>
</html>