<?php
<?php

include 'conexao.php';

$buscar_cadastros = " SELECT * FROM  CADASTRO";
$query_cadastros = mysqli_query($conn, $buscar_cadastros);

    ?>


<!doctype html>
<html lang="en">
  <head>
	<title>DIRETORIO DE CHROMEBOOKS</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
	<div class="container">
 <table class="table">
	     
	<thead>
		<tr>
			<th>aluno</th>
			<th>EMAIL</th>
			<th>dt_entrega</th>
			<th>matricula</th>
			<th>n_de_serie</th>
		</tr>
	</thead>
	<tbody>
	     <?php
            while($receber_cadastros = mysqli_fetch_array($query_cadastros))
            {
            
            $aluno = $receber_cadastros['aluno'];
            $EMAIL = $receber_cadastros ['EMAIL'];
            $conservacao = $receber_cadastros['conservacao'];
            $dt_entrega = $receber_cadastros['dt_entrega'];
            $matricula = $receber_cadastros['matricula'];
            $n_de_serie = $receber_cadastros['n_de_serie'];
            
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

		<tr>
			<td scope="row">mateus</td>
			<td>mateus.vaz</td>
			<td>20</td>
			<td>222</td>
			<td>111</td>
		</tr>
	</tbody>
 </table>
    </div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

 ?>