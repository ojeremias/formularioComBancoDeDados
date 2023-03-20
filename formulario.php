<?php
{
  // if(isset($_POST['submit']))
  //   print_r('Nome:' . $_POST['nome']);
  //   print_r('<br>');
  //   print_r($_POST['email']);
  //   print_r('<br>');
  //   print_r($_POST['telefone']);
  //   print_r('<br>');
  //   print_r($_POST['genero']);
  //   print_r('<br>');
  //   print_r($_POST['data_nascimento']);
  //   print_r('<br>');
  //   print_r($_POST['cidade']);
  //   print_r('<br>');
  //   print_r($_POST['estado']);
  //   print_r('<br>');
  //   print_r($_POST['endereco']);

  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $data_nascimento = $_POST['data_nascimento'];
  $sexo = $_POST['genero'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $endereco = $_POST['endereco'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nascimento, cidade, estado, endereco)
  VALUES('$nome', '$email', '$telefone', '$sexo', '$data_nascimento', '$cidade', '$estado', '$endereco')");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário | JV</title>
    <link rel="stylesheet" href="./formulario.css" />
  </head>
  <body>
    <div class="box">
      <form action="formulario.php" method="POST">
        <fieldset>
          <legend><b>Fórmulário de Clientes</b></legend>
          <br />
          <div class="inputBox">
            <input
              type="text"
              name="nome"
              id="nome"
              class="inputUser"
              required
            />
            <label for="nome" class="labelInput">Nome completo</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="email"
              id="email"
              class="inputUser"
              required
            />
            <label for="email" class="labelInput">Email</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="tel"
              name="telefone"
              id="telefone"
              class="inputUser"
              required
            />
            <label for="telefone" class="labelInput">Telefone</label>
          </div>
          <p>Sexo:</p>
          <input
            type="radio"
            id="feminino"
            name="genero"
            value="feminino"
            required
          />
          <label for="feminino">Feminino</label>
          <br />
          <input
            type="radio"
            id="masculino"
            name="genero"
            value="masculino"
            required
          />
          <label for="masculino">Masculino</label>
          <br />
          <input type="radio" id="outro" name="genero" value="outro" required />
          <label for="outro">Outro</label>
          <br /><br />
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
          <input
            type="date"
            name="data_nascimento"
            id="data_nascimento"
            required
          />
          <br /><br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="cidade"
              id="cidade"
              class="inputUser"
              required
            />
            <label for="cidade" class="labelInput">Cidade</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="estado"
              id="estado"
              class="inputUser"
              required
            />
            <label for="estado" class="labelInput">Estado</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="endereco"
              id="endereco"
              class="inputUser"
              required
            />
            <label for="endereco" class="labelInput">Endereço</label>
          </div>
          <br /><br />
          <input type="submit" name="submit" id="submit" value="Enviar" />
        </fieldset>
      </form>
    </div>
  </body>
</html>
