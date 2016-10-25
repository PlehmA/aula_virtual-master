<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>..--|Aula virtual|--..</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body style="background-color: #fdd8e0">
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<h1 class="text-center">Sube tu proyecto</h1>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="titulo">Titulo</label>
  <div class="col-md-5">
  <input id="titulo" name="titulo" type="text" placeholder="Escriba aquí el titulo" class="form-control input-md" required="">
  <span class="help-block">Campo obligatorio</span>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcion">Descripcion</label>
  <div class="col-md-4">
    <textarea class="form-control" id="descripcion" name="descripcion">Contenido</textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectup">Destino</label>
  <div class="col-md-5">
    <select id="selectup" name="selectup" class="form-control">
      <option value="">Option one</option>
      <option value="">Option two</option>
    </select>
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="subida">Complementos</label>
  <div class="col-md-4">
    <input id="subida" name="subida" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Subir</button>
  </div>
</div>

</fieldset>
</form>
<?php include_once "footer.php" ?>
<script src="JS\jquery-3.1.1.js" charset="utf-8"></script>
<script src="JS\bootstrap.js" charset="utf-8"></script>
<script src="JS\ie10-viewport-bug-workaround.js" charset="utf-8"></script>
<script src="JS\npm.js" charset="utf-8"></script>
  </body>
</html>
