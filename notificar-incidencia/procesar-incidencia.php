<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $usuario = $_POST["usuario"];
      $departamento = $_POST["departamento"];
      $incidencia = $_POST["incidencia"];
      $contrasena = $_POST["contrasena"];

      // Verificamos la contraseña
      if ($contrasena === "4213") { // Reemplaza "tucontrasena" con la contraseña real
          // Mostramos el mensaje
          echo "<p>Incidencia notificada por $usuario del departamento de $departamento. Descripción de la incidencia:</p>";
          echo "<p>$incidencia</p>";
      } else {
          echo "<p>Contraseña incorrecta. No tienes autorización para notificar la incidencia.</p>";
      }
  }
  ?>
