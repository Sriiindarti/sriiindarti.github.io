<?php
      require_once "koneksi.php";
      $sql = "SELECT*FROM berbagi WHERE category in('color','generator','tool')";
      $result = mysqli_query($con,$sql);
?>

<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <link href="css/siinBerbagi.css" rel="stylesheet" type="text/css" media="screen" />

      <title>Color, Tools, Generator</title>
</head>

<body>
      <!-- Navbar Start -->

      <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.html">
                  <img src="image/LGOGO SIIN.png" height="64" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="index.html">Home</a>
                        <a class="nav-item nav-link" href="allProject.html">Project</a>
                        <a style="color: #FFD37A;" class="nav-item nav-link" href="siinBerbagi.html">Siin Berbagi</a>
                        <a class="nav-item nav-link" href="about.html">About Me</a>
                        <a class="nav-item nav-link" href="contact.html">Contact</a>
                  </div>
            </div>
      </nav>


      <div class="about marginDiv mb-5" style="text-align: center;">
            <h4>COLOR, TOOLS AND GENERATOR WEBSITE</h4>
      </div>

      <div class="col-12 about">
            <table id="tabel-data" class="table table-striped table-bordered table-hover">
                  <thead>
                        <tr style="background-color: #1A5862; text-align: center;">
                              <th>Review</th>
                              <th>Website Name</th>
                              <th>Link Website</th>
                              <th>Category</th>
                        </tr>

                        <?php while ($data = mysqli_fetch_row($result)): ?>
                        <tr style="color: #ffffff; font-style: normal;font-weight: 600;">
                              <td style="text-align: center;"><input type="checkbox"></td>
                              <td><?php echo $data[1]; ?></td>
                              <td><a href="<?php echo $data[2]; ?>"><?php echo $data[2]; ?></a></td>
                              <td style="text-transform: capitalize; text-align: center;"><?php echo $data[3]; ?></td>
                        </tr>
                        <?php endwhile; ?>
                  </thead>
            </table>
      </div>



      <footer class="container-fluid">
            <hr color="white" />
            <div class="row">
                  <div class="col-lg-4 footerLeft">
                        <p class="footerText">© 2021 - 2023 Sri Indarti</p>
                  </div>
                  <div class="col-lg-4 footerCenter">
                        <p class="footerText">KEEP A SMILE ON YOUR FACE</p>
                  </div>
                  <div class="col-lg-4 footerRight">
                        <a class="link" href="https://www.linkedin.com/in/sriindarti-0312/" target="_blank">
                              <ion-icon class="iconCss" name="logo-linkedin"></ion-icon>
                        </a>
                        <a class="link" href="https://www.instagram.com/sriiiindarti_/" target="_blank">
                              <ion-icon class="iconCss" name="logo-instagram"></ion-icon>
                        </a>
                        <a class="link" href="https://www.behance.net/sriindarti" target="_blank">
                              <ion-icon class="iconCss" name="logo-behance"></ion-icon>
                        </a>
                        <a class="link" href="https://dribbble.com/sriindarti" target="_blank">
                              <ion-icon class="iconCss" name="logo-dribbble"></ion-icon>
                        </a>
                  </div>
            </div>

      </footer>




      <!-- ICON IONS -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
      </script>

</body>

</html>

