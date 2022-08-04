<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Exercício 02</title>
    
</head>
<body>

    <!-- Crie um programa capaz de ler os lados de um triangulo e informar se o mesmo é equilátero, isósceles ou escaleno. Use formulários. (3 esc) -->

    <div class="container-fluid">
        <div class="row">
          <div class="col-2"></div>
          <div class="clo-8">
            <h1 class="texte-cente">Exercício 04</h1><hr>
            <div class="row">

                <h3>Dados do Triângulo<br></h3>

                <form action="recebaex04.php" method="POST">

                    <div class="mb-3 col-2">
                        <label for="number" class="form-label">
                        <span>LADO 1</span>
                        </label>
                        <input type="number" class="form-control" id="lado1" placeholder="Digite o valor" name="lado1">
                    </div>

                    <div class="mb-3 col-2">
                        <label for="number" class="form-label">
                        <span>LADO 2</span>
                        </label>
                        <input type="number" class="form-control" id="lado2" placeholder="Digite o valor" name="lado2">
                    </div>

                    <div class="mb-3 col-2">
                        <label for="number" class="form-label">
                        <span>LADO 3</span>
                        </label>
                        <input type="number" class="form-control" id="lado3" placeholder="Digite o valor" name="lado3">
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