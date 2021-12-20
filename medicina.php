<?php
   require('cabecera.php');
?>
      <div id="informacionA">
         <p><marquee>SECCIÓN DE REGISTRO </marquee></p>
         <form method="POST" action="">
         <fieldset><legend>Datos Paciente</legend>
            <label>DNI Paciente:</label>
            <input type="text" name="txt_dni" required maxlength="8"><br>
            <label>Apellido Paterno:</label>
            <input type="text" name="txt_pat" required><br>
            <label>Apellido Materno:</label>
            <input type="text" name="txt_mat"><br>
            <label>Nombre:</label>
            <input type="text" name="txt_usu">
            <label>Contraseña:</label>
            <input type="password" name="txt_cont" maxlength="2"><br>
         </fieldset>
            <input type="submit" name="btn_enviar" value="ENVIAR">
         </form>
         
      </div>
<?php
   require('pie.php');
?>