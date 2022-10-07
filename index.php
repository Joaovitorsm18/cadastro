<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
     <div class="row">
      <div class="col-sm-2">
    </div>
        <div class="col-sm-8 mt-5">
                <div><h1 class="text-primary">Cadastro para entrega</h1></div>
                <form action="login.php" method="post">
                    <div class="form-group">
                    <input type="text" name="txt_name" class="form-control" id="formGroupExampleInput" placeholder="Nome" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <input type="email" name="txt_email" class="form-control" id="inputEmail4" placeholder="Email"required>
                        </div>
                        <div class="form-group col-6">
                            <input type="password" name="txt_senha" class="form-control" id="inputPassword4" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txt_rua"class="form-control" id="inputAddress" placeholder="Rua" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txt_bairro" class="form-control" id="inputAddress2" placeholder="Bairro" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="txt_cidade" class="form-control" id="inputCity" placeholder="Cidade" required>
                        </div>
                        <div class="form-group col-3">
                            <select name="op_estado" id="estado" class="form-control" required>
                                <option disabled selected>Estado</option>
                                <option value="Minas Gerais">Minas Gerais</option>
                                <option value="São Paulo">São Paulo</option>
                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                            </select>
                        </div>
                        <div class="form-group col-3">
                            <input type="text" name="tx_cep" class="form-control" id="inputCep" placeholder="CEP">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
        </div>
        <div class="col-sm">       
    </div>
</div> 
 <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>