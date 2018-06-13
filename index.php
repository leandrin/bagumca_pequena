<!DOCTYPE HTML>
<HTML>
  <HEAD>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </HEAD>
  <BODY>
  <div class="page">
    <div class="container">
        <div class="left">
          <div class="login">Acessar</div>
          <div class="eula"> Permitido apenas para funcionários da Baguncinha. </div>
        </div>
      <div class="right">
        <svg viewBox="0 0 320 300">
          <defs>
            <linearGradient
                inkscape:collect="always"
                id="linearGradient"
                x1="13"
                y1="193.49992"
                x2="307"
                y2="193.49992"
                gradientUnits="userSpaceOnUse">
                  <stop
                    style="stop-color:#18117c;"
                    offset="0"
                    id="stop876" />
                  <stop
                    style="stop-color:#0e00db;"
                    offset="1"
                    id="stop878" />
            </linearGradient>
          </defs>
          <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
        </svg>
        <form class="form" method="POST" action="valida_login.php" >
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <label for="password">Senha</label>
            <input type="password" id="password" name="passw">
            <input type="submit" id="submit" value="Entrar">
        </form>
      </div>
    </div>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
    <script src="js/script.js"></script>

  </BODY>

</HTML>
