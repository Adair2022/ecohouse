@yield('menu')
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- CSS only -->
</head>
<div class="wrapper ">
    <div class="sidebar" data-color="green">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          EH
        </a>
        <a href="#" class="simple-text logo-normal">
          EcoHouse
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/">
              <i class="fa-sharp fa-solid fa-house"></i>
              <p>Inicio</p>
            </a>
          </li>
          <li>
            <a href="/usuarios">
              <i class="fa-solid fa-user"></i>
              <p>Usuarios</p>
            </a>
          </li>
          <li>
            <a href="/t_usuario">
              <i class="fa-solid fa-users"></i>
              <p>Tipo Usuario</p>
            </a>
          </li>
          <li>
            <a href="/estados">
              <i class="fa-solid fa-users"></i>
              <p>Estados</p>
            </a>
          </li>
          <li>
            <a href="/municipios">
              <i class="fa-solid fa-users"></i>
              <p>Municipios</p>
            </a>
          </li>
          <li>
            <a href="/ubicacion">
              <i class="fa-sharp fa-solid fa-location-dot"></i>
              <p>Invernadero</p>
            </a>
          </li>
          
          <li>
            <a href="/sensor">
              <i class="fa-sharp fa-solid fa-video"></i>
              <p>Sensor</p>
            </a>
          </li>
          <li>
            <a href="/requisitos">
              <i class="fa-sharp fa-solid fa-clipboard"></i>
              <p>Surcos</p>
            </a>
          </li>
        </ul>
      </div>
    </div>