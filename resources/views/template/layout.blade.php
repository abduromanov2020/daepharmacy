<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
  <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />
  <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon" />
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <title>Daepharmacy - {{ $title }}</title>
</head>

<body>
  <div class="spinner-wrapper">
    <div class="loading-container">
      <div class="circle"></div>
      <div class="circle"></div>
    </div>
  </div>
  <section class="side-bar">
    <div class="sidebar bg-transparent">
      <div class="logo-content">
        <div class="logo">
          <img src="img/logo.png" class="logo" alt="">
          <div class="logo-name fs-6">대 Pharmacy</div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav_list">
        <li>
          <a href="/">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip fs-7 fw-600">Dashboard</span>
        </li>
        <li>
          <a href="/order">
            <i class="bx bxs-dollar-circle"></i>
            <span class="links_name">Order</span>
          </a>
          <span class="tooltip fs-7 fw-600">Order</span>
        </li>
        <li>
          <a href="/stock">
            <i class="bx bxs-archive"></i>
            <span class="links_name">Stock</span>
          </a>
          <span class="tooltip fs-7 fw-600">Stock</span>
        </li>
        <li>
          <a href="/supplier">
            <i class="bx bxs-truck"></i>
            <span class="links_name">Supplier</span>
          </a>
          <span class="tooltip fs-7 fw-600">Supplier</span>
        </li>
        <li>
          <a href="/recapitulation">
            <i class='bx bxs-book-alt'></i>
            <span class="links_name">Recapitulation</span>
          </a>
          <span class="tooltip fs-7 fw-600">Recapitulation</span>
        </li>
        <li>
          <a href="/user">
            <i class="bx bx-group"></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip fs-7 fw-600">User</span>
        </li>
      </ul>
      <div class="profile_content">
        <div class="profile bg-transparent ps-2">
          <div class="profile_details">
            <img src="img/profile.jpg" alt="" />
            <div class="name_job">
              <div class="name">{{ auth()->user()->username }}</div>
              <div class="job">Admin</div>
            </div>
          </div>
          <form action="/logout" method="post">
            @csrf
            <button class="text-white" onclick="return confirm('Are You Sure Want To Logout?')">
              <i class="bx bx-log-out" id="log_out"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- Main Content -->
  <div class="container home-content">
    <section class="main mb-5">

      @yield('container')

    </section>
  </div>

</body>

@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
<script src="js/script.js"></script>
<script src="../js/script.js"></script>
<script src="../../js/script.js"></script>

</html>