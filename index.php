<?php
    if (!isset($password)) {
      $password = '';
    }
    if (!isset($username)) {
      $username= '';
    }
    if (!isset($password2)) {
      $password2 = '';
    }
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://bootswatch.com/5/morph/bootstrap.min.css"
    />
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">

    <title>PHP form-Validation</title>
</head>
<body>
  

  <div class="row mt-5 pt-5">
  <div class="col-md-6 col-sm-4 m-auto">
    <div class="card card-body">
      <h1 class="text-center mb-3"><i class="fa fa-id-card" aria-hidden="true"></i>Register</h1>
      <?php if (isset($password_length)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <p><?php echo($password_length) ?></p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php  } ?>
      <?php if (isset($password_match_err)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <p><?php echo($password_match_err) ?></p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php  } ?>
      <form action="result.php" method="POST">
        <div class="form-group">
          <label for="email">Username:</label>
          <input
            value="<?php echo htmlspecialchars($username) ?>"
            type="text"
            id="username"
            name="user_name"
            class="form-control"
            placeholder="Enter username"
            required
            tabindex="2"
            />
            <?php if (isset($error_name)) { ?>
              <p> <?php echo($error_name) ?></p>
              <?php } ?>
            </div>
            <div class="form-group mt-2">
              <label for="password">Password:</label>
              <input
            value="<?php echo htmlspecialchars($password) ?>"
              type="password"
              id="password"
            name="user_password"
            class="form-control"
            placeholder="Enter Password"
            required
            tabindex="2"
            />
            <?php if (isset($error_password2)) { ?>
              <p><?php echo($error_password2) ?></p>
              <?php } ?>
            </div>
            <div class="form-group mt-2">
              <label for="password">confirm password</label>
              <input
            value="<?php echo htmlspecialchars($password2) ?>"
              type="password"
              id="password"
            name="user_password2"
            class="form-control"
            placeholder="confirm Password"
            />
            <?php if (isset($error_password2)) { ?>
              <p><?php echo($error_password2) ?></p>
              <?php } ?>
            </div>
            <button type="submit" value="register" class="btn btn-primary btn-block mt-3 w-100">Register</button>
          </form>
        </div>
      </div>
    </div>
    
    
    <!-- <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
    ></script>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"
    ></script>
    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"
    ></script> -->
    <script src="./public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="./public/js/popper.min.js"></script>
  </body>
  </html>