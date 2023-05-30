<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Leitura_Gravacao_Arquivos</title>
  </head>


  <body style="background-color: rgb(195, 195, 195);">

    <div class="container text-center">
      <div class="row">

        <div class="col-1">
          &nbsp;
        </div>

        <div class="col">

          <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark" style="padding-left: 9px;">

            <div class="container-fluid">
              <a class="navbar-brand" href="#">SISTEMA WEB</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Escrever no Arquivo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ler.php">Leitura do Arquivo</a>
                  </li>
                </ul>
              </div>
            </div>

          </nav>

        </div>

        <div class="col-1">
          &nbsp;
        </div>

      </div>
    </div>

    <div class="container text-left">

      <div class="row">

        <div class="col-1">
          &nbsp;
        </div>


        <div class="col">

          <div class="p-4" style="background-color: white;">

            <form method="POST" action="Resultado.php">
    <p>Qual é a sua opção preferida?</p>
    <input type="radio" name="opcao" value="opcao1"> Etec ZL<br>
    <input type="radio" name="opcao" value="opcao2">  Etec Tereza Nunes <br>
    <input type="radio" name="opcao" value="opcao3">  Etec São Mathues<br>
    <input type="radio" name="opcao" value="opcao4">  Etec Santa Ifigênia<br>


              <button type="submit" class="btn btn-primary">Salvar</button>
            
            </form>
          </div>
        </div>
        <div class="col-1">
          &nbsp;
        </div>

      </div>
    </div>

  </body>

</html>