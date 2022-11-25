<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container">
      <div class="box">
        <div class="card-login m-auto py-5 rounded-4">
          <div class="card-main">
            <div class="card-header text-center">
              <h1>Form Login</h1>
            </div>
            <div class="card-body mt-4">
              <form
                class="form-login d-flex flex-column m-auto"
                action="login-prosses.php"
                method="POST"
                autocomplete="off"
              >
                <label class="form-label">Username</label>
                <input type="username" name="username" class="form-input" />
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-input" />
                <button type="submit" name="submit" class="btn btn-login">
                  Login
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- script -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <!-- script -->
  </body>
</html>
