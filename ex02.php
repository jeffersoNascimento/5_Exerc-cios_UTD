<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Exercício 02</title>
    <style>
        body{
            background-color: #87CEFA;
        }
    </style>
</head>
<body>

    <!-- Crie um programa que emule uma calculadora com as operações básicas. Use formulários para essa questão. (3 esc) -->

    <div class="container-fluid">
        <div class="row">
          <div class="col-2"></div>
          <div class="clo-8">
            <h1 class="texte-cente">Calculadora</h1><hr>
            <div class="row">

                <h3>Escolha a operação<br></h3>
                <p><strong>Soma = 1 || Subtração = 2 || Divisão = 3 || Multiplicação = 4</strong></p>

                <form action="resultado.php" method="POST">
                  
                    <div class="mb-3 col-1">
                        <label for="number" class="form-label">
                        <span>Digite a operação</span>
                        </label>
                        <input type="number" class="form-control" id="numero1" placeholder="Operação" name="operacao">
                    </div>

                    <div class="mb-3 col-2">
                        <label for="number" class="form-label">
                        <span>Primeiro numero</span>
                        </label>
                        <input type="number" class="form-control" id="numero1" placeholder="Digite o primeiro numero" name="numero1">
                    </div>

                    <div class="mb-3 col-2">
                        <label for="number" class="form-label">
                        <span>Segundo numero</span>
                        </label>
                        <input type="number" class="form-control" id="numero2" placeholder="Digite o segundo numero" name="numero2">
                    </div>


                    <div class="mb-3 col-6 text-center">
                        <button type="submit" class="btn btn-outline-primary">
                            <span class="iconify" data-icon="fluent:send-20-filled">
                                Resultado
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