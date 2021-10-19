<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="_style.css" />


    <title>Login Petugas</title>
  </head>
  <body>

    <div id="form" class="pt-5">

        <div class="container">

            <div class="row d-flex justify-content-center">

                <div class="col col-4 p-4 bg-light">

                    <h2 class="mb-4">Login Petugas</h2>

                    <form action="_action_login.php" method="POST">

                        <div class="form-group mb-2">
                            <label for="name">Alamat Email</label>
                            <input name="email" id="email" class="form-control" type="email" placeholder="Alamat Email" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">Password</label>
                            <input name="password" id="password" class="form-control" type="password" placeholder="Password" required>
                        </div>

                        <input name="submit" type="submit" value="Masuk" class="btn btn-primary ">

                    </form>

                </div>

            </div>

        </div>

    </div>

  </body>

</html>