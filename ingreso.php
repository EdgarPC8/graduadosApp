<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <title>Educational Bootstrap 5 Login Page Website Tampalte</title>
</head>

<body>
  <section class="form-02-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="_lk_de">
            <div class="form-03-main">
              <div class="logo">
                <img src="assets/images/user.png">
              </div>
              <form id="form1" name="form1" method="post" action="controller_login.php">
                <div class="form-group">
                  <input type="text" name="usuario" class="form-control _ge_de_ol" type="text" placeholder="Ingrese Usuario" required="" aria-required="true">
                </div>
                <div class="form-group">
                  <input type="password" name="clave" class="form-control _ge_de_ol" type="text" placeholder="Ingrese clave" required="" aria-required="true">
                  <input type="hidden" name="tipo" id="tipo" value="ADMIN">
                  <input type="hidden" name="entrar" id="entrar" value="entrar">
                </div>
                <div class="form-group">
                    <input class="_btn_04" type="submit" name="login" id="login" value="Ingresar">
                    <input type="hidden" name="entrar" id="entrar" value="entrar">

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>