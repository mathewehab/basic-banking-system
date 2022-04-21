<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">

      <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1>Mathew's Basic Banking System</h1>
                </div>
              </div>
      </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user1.jpg" width="245" height="245" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/money1.png" width="626" height="417" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/hist1.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>Copyright @2022. Made by <b>Mathew Ehab</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
