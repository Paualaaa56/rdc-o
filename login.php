<?php include'../TestProyecto/TestProyecto/template_pagina_principal/header.php'?>

<div
      class="background"
      style="
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        position: relative;
      "
    >
      <!-- Video de fondo -->
      <video
        autoplay
        muted
        loop
        class="video"
        style="
          position: absolute;
          top: 0;
          width: 100%;
          height: 100%;
          left: 0;
          width: 100%;
          height: 100%;
          object-fit: cover;
          z-index: -1;
        "
      >
        <source src="/TestProyecto/img/video.mp4" type="video/mp4" />
      </video>

      <!-- Contenedor del login -->
      <div class="login" style="z-index: 1">
        <div
          class="login-form"
          style="
            width: 400px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 0px 7px 0px #f1a6bc;
            border: 1px solid white;
          "
        >
          <h1 style="color: white">Iniciar sesión</h1>
          <form>
            <input
              type="text"
              placeholder="Email"
              style="
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 2px solid white;
                border-radius: 8px;
                background: none;
                color: white;
                outline: none;
              "
            /><br /><br />
            <input
              type="password"
              placeholder="Contraseña"
              style="
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 2px solid white;
                border-radius: 8px;
                background: none;
                color: white;
                outline: none;
              "
            /><br /><br />
            <button
              type="submit"
              style="
                background: #7b2cbf;
                color: white;
                padding: 10px 40px;
                font-size: 16px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
              "
            >
              Iniciar Sesión
            </button>
          </form>

         <!-- Letrero con enlace a la pagina registro-->
          <p style="margin-top: 20px; color: white;">¿No tienes cuenta?
          <a href="registrar.php" style="color: #7b2cbf; text-decoration: none;">Regístrate</a></p>
        </div>
      </div>
    </div>
    <?php include'../TestProyecto/TestProyecto/template_pagina_principal/footer.php'?>

