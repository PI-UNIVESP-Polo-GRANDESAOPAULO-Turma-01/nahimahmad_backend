<?php

include 'conexao.php';

$buscar_cadastros = " SELECT * FROM  CADASTRO";
$query_cadastros = mysqli_query($conn, $buscar_cadastros);

    ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="shortcut icon" href="imagens/fav_icon.png" type="image/x-icon"/>

  <link rel="stylesheet" href="/styles/buscar.css" />

  <title>Buscar cadastro</title>

</head>

<body>

  <nav class="navbar navbar-expand-md" style="background-color: #324572;">
    <a class="navbar-brand" href="https://colegioahmad.com.br">
        <img class="logo" src="imagens/logo.png" alt="Logo do colégio Nahim Ahmad">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link link-nav" href="sobre.html">Sobre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-nav" href="cadastro.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastro
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item link-nav-dropdown" href="cadastro.html">Aluno</a>
            <a class="dropdown-item link-nav-dropdown" href="cadastro.html">Chromebook</a>
            <a class="dropdown-item link-nav-dropdown" href="cadastro.html">Contrato</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link link-nav" href="buscar.html">Buscar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-nav" href="perfil.html">Perfil</a>
        </li>
      </ul>
    </div>
  </nav>

  <div>

    <h1>Diretório de Chromebooks</h1>

    <div>
      <form>

        <div class="form-row">
          <div class="form-group col-md-5">
              <label for="consulta">Consultar informações</label>
              <input type="consulta" id="txt_consulta" class="form-control" placeholder="Busque pelo nome do aluno">
          </div>
          <div class="form-group col-md-3">
              <label for="data_entrega">Data de entrega</label>
              <input type="data" class="form-control" placeholder="DD/MM/AAAA" id="date_consulta">
          </div>
          <div class="form-group col-md-4">
            <label for="serie">Nº de série</label>
            <input type="serie" class="form-control" placeholder="01234" id="serie_consulta">
        </div>
      </div>
    </form>
    </div>

    <div>

      <table id="tabela" class="table table-hover">
        <thead>
          <tr>
            <th>
              <input class="form-check-input" type="checkbox" id="gridCheck">
            </th>
            <th>aluno</th>
            <th>EMAIL</th>
            <th>conservacao</th>
            <th>dt_entrega</th>
            <th>matricula</th>
            <th>n_de_serie</th>
          </tr>
        </thead>
        <tbody>
            
            <?php
            while($receber_cadastros = mysqli_fetch_array($query_cadastros))
            {
            
            $receber_cadastros['aluno'];
            $receber_cadastros ['EMAIL'];
            $receber_cadastros['conservacao'];
            $receber_cadastros['dt_entrega'];
            $receber_cadastros['matricula'];
            $receber_cadastros['n_de_serie'];
            
            ?>
            
          <tr>
              
              <td scope="row"> <?php echo $ $aluno; ?></td>
              <td>               <?php echo $EMAIL; ?></td>
              <td>               <?php echo $conservacao; ?></td>
              <td>               <?php echo $dt_entrega; ?></td>
              <td>               <?php echo $matricula; ?></td>
              <td>               <?php echo $n_de_serie; ?></td>
              
           </tr>
          <?php }; ?>
          
          
        </tbody>
      </table>

    </div>

  </div>

  <footer class="footer">
    <div>
      <div class="footer_endereco">
        <p>Avenida Esperança, nº 191 - Centro, Guarulhos/SP <br> Todos os direitos reservados © 2023</p>
      </div>
    </div>

    <div class="footer_redes">
      <div>
        <p>Nos siga nas redes sociais:</p>
      </div>
      <div>
        <a href="https://www.facebook.com/colegioahmad" class="facebook" target="_blank"><img src="imagens/facebook.png" alt="logo do facebook" width="30px" height="30px"></a>
        <a href="https://www.instagram.com/colegioahmad/" class="instagram" target="_blank"><img src="imagens/instagram.png" alt="logo do instagram" width="30px" height="30px"></a>
        <a href="https://twitter.com/colegioahmad" class="twitter" target="_blank"><img src="imagens/twitter.png" alt="logo do twitter" width="30px" height="30px"></a>
        <a href="https://www.youtube.com/colegioahmad" class="youtube" target="_blank"><img src="imagens/youtube.png" alt="logo do youtube" width="30px" height="30px"></a>   
      </div>
    </div>
  </footer>

  <script>
    $('input#txt_consulta').quicksearch('table#tabela tbody tr');
  </script>

  <script>
    $('input#date_consulta').quicksearch('table#tabela tbody tr');
  </script>

  <script>
    $('input#serie_consulta').quicksearch('table#tabela tbody tr');
  </script>

</body>

</html>