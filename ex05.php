<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Exercício 05</title>
    <style>
        body{
            background-color: #87CEFA;
        }
    </style>
</head>
<body>

    <!-- Crie um formulário onde seja possível receber um email e uma senha. Compare os valores recebidos com o email "admin@email.com" e a senha "123456". Exiba os possíveis resultados, em cada teste:
    "Você errou seu email"; "Você errou sua senha"; "Email não cadastrado"; (1 esc) -->

    <div class="container-fluid">
        <div class="row">
          <div class="col-2"></div>
          <div class="clo-8">
            <h1 class="texte-cente">Formulário</h1><hr>
            <div class="row">

                <form action="recebe03.php" method="POST">

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