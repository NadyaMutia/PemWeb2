<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <link rel="icon" href="images/bp/fav.ico" type="image/x-icon" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  <body class="hold-transition login-page" style="background-color: #E1AAC5;">
    <div class="login-box">
      <!-- /.login-logo -->
      <div data-aos="zoom-in"
      data-aos-duration="3000">
        <div>
          <div class="col-md-6 offset-md-3">
          <a href="index.php"><img src="images/bp/logo3.png" class="img-fluid" alt="..."></a>
          </div>
        </div>
        <div class="card-body login-card-body rounded">
          <form
            name="formLogin"
            action="dashboard.php"
            onsubmit="return login()"
            method="post"
          >
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                id="username"
                placeholder="admin"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <p class="mb-3 text-danger" id="error1"></p>
            <div class="input-group">
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="12345"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <p class="mb-3 text-danger" id="error2"></p>
            <div class="d-flex justify-content-between">
              <div class="col-">
                <div class="checkbox-content icheck-primary">
                  <input type="checkbox" id="remember" />
                  <label for="remember" style="color: #892857;">Ingatkan saya</label>
                </div>
              </div>
              <div class="col- text-end mt-1">
                <a href="#" style="color: #892857;">Lupa password?</a>
              </div>
            </div>

            <div class="col align-self-center mt-3">
              <button type="submit" class="btn btn-primary btn-block" style="background-color: #ae3771;">
                Login
              </button>
            </div>
            <p class="mb-0 mt-2">
              <a href="register.html" class="text-center" style="color: #892857;">Registrasi user</a>
            </p>
          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
    <script>
      AOS.init();
    </script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<script></script>