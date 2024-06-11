<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
<div class="row">
    <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>
    <div class="col-10 col-sm-10 col-md-4 col-lg-4">
        <br><br><br><br><br>
       <form id="formulario" method="post">
       <h1 class="text-center"> <strong>login</strong> </h1>
       <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required="true" maxlength="10" minlength="3">
       <br>
       <input type="password" class="form-control" id="password" name="password" placeholder="password" required="true" maxlength="10" minlength="3">
       <br>
       <button type="submit">ingresar</button>
       <br><br>
       <div id="alerta"></div>
       </form>
    </div>
    <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>

</div>   


<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>