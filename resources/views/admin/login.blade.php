<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin login</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin_assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin_assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin_assets/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">

    <div>


      <div class="login_wrapper">

        

          <section class="login_content">

            <form action="login_submit" method="post">
              @csrf

              <h1>Login Form</h1>

              <div>

                <input type="text" class="form-control" placeholder="Email" name="email" required="" />

              </div>

              <div>

                <input type="password" class="form-control" placeholder="Password" name="password" required="" />

              </div>

              <div>

                <input type="submit" class="btn btn-success" name="submit" value="Log in">

              </div>

            </form>

          </section>

        

      </div>

    </div>

  </body>

</html>
