<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>NEWPOST</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="http://localhost/newpost/assets/css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7fa_ntyynAakB4rJ8BeYrmxHWvBuqON8"></script>
</head>
    <body>
        <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form class="form-signin" method="POST" action="<?php echo BASE_URL.'index.php/autenticar';?>">
                  <div class="form-label-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                  </div>

                  <div class="form-label-group">
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
                    <label for="inputPassword">Senha</label>
                  </div>

                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                </form>
                <span>
                    <?php
                        if (!empty($mensagem)) {
                            echo $mensagem;
                        }
                    ;?>
              </span>
              </div>




            </div>
          </div>
        </div>
      </div>
    </body>
</html>