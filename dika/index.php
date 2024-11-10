<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Andika - Dynamic Website</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="assets/css/custom.css" rel="stylesheet">
  <!-- DataTables CSS for Bootstrap 5 -->
  <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body>
  <!-- Header with Navbar -->
  <header>
    <?php include "includes/navbar.php"; ?>
  </header>

  <!-- Main Container -->
  <div class="container" id="pageContent">
    <?php include "content.php"; ?>
  </div>

  <!-- Footer -->
  <footer class="text-center mt-5">
    <p>&copy; 2024 Andika. Semua Hak Dilindungi.</p>
    <div class="contact-info mb-3">
      <p>Telepon: (62) 813-8820-9195</p>
      <p>Email: dikkwell@gmail.com</p>
    </div>
    <div class="social-icons">
      <a href="https://www.instagram.com/andkkwan_?igsh=cmpyd2YwOXExaWZ3&utm_source=qr_" target="_blank" class="me-3"><i class="fab fa-instagram fa-2x"></i></a>
      <a href="https://x.com/waanz_z" target="_blank" class="me-3"><i class="fab fa-twitter fa-2x"></i></a>
      <a href="https://github.com/wota" target="_blank" class="me-3"><i class="fab fa-github fa-2x"></i></a>
      <a href="https://www.linkedin.com/wota" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables JavaScript and Bootstrap Integration -->
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
</body>

</html>