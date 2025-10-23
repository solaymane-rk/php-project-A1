
<?php
$current_page = 'ej';

require_once '../../includes/navbar.php';

?>
<form action="402-resumen.php" method="post" class="p-4 border rounded bg-light">
  <legend class="mb-3 fw-bold">Formulario</legend>

  <label for="nombre-apellidos" class="form-label">Nombre y apellidos</label>
  <input type="text" name="nombre-apellidos" id="nombre-apellidos" class="form-control mb-3" placeholder="Nombre y apellidos" required>

  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" id="email" class="form-control mb-3" placeholder="correo@ejemplo.com" required>

  <label for="url" class="form-label">URL personal</label>
  <input type="url" name="url" id="url" class="form-control mb-3" placeholder="https://ejemplo.com" required>

  <label class="form-label d-block">Sexo</label>
  <div class="form-check form-check-inline">
    <input type="radio" name="sexo" id="sexo_h" value="hombre" class="form-check-input" required>
    <label for="sexo_h" class="form-check-label">Hombre</label>
  </div>
  <div class="form-check form-check-inline">
    <input type="radio" name="sexo" id="sexo_m" value="mujer" class="form-check-input">
    <label for="sexo_m" class="form-check-label">Mujer</label>
  </div>  

  <br><br>
  <label for="convivientes" class="form-label">Número de convivientes</label>
  <input type="number" name="convivientes" id="convivientes" class="form-control mb-3" min="0" required>

  <label class="form-label d-block">Aficiones</label>
  <div class="form-check">
    <input type="checkbox" name="aficiones[]" id="lectura" value="Lectura" class="form-check-input">
    <label for="lectura" class="form-check-label">Lectura</label>
  </div>
  <div class="form-check">
    <input type="checkbox" name="aficiones[]" id="deporte" value="Deporte" class="form-check-input">
    <label for="deporte" class="form-check-label">Deporte</label>
  </div>
  <div class="form-check">
    <input type="checkbox" name="aficiones[]" id="musica" value="Música" class="form-check-input">
    <label for="musica" class="form-check-label">Música</label>
  </div>
  <div class="form-check mb-3">
    <input type="checkbox" name="aficiones[]" id="viajar" value="Viajar" class="form-check-input">
    <label for="viajar" class="form-check-label">Viajar</label>
  </div>

  <label for="menu" class="form-label">Menú favorito (selección múltiple)</label>
  <select name="menu[]" id="menu" class="form-select mb-3" multiple required>
    <option value="Italiana">Italiana</option>
    <option value="Mexicana">Mexicana</option>
    <option value="Japonesa">Japonesa</option>
    <option value="Mediterránea">Mediterránea</option>
  </select>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>