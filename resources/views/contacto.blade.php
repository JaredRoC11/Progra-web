<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
<h1>Informacion</h1>

<div>
    <form method="GeT">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $nombre }}"  required="true" id="nombre">

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $email }}" required="true" id="email">

        <br>
        <textarea name="comentario" cols="35" rows="15"></textarea>
        <br>
        <label for="comentario">Comentario</label>
  </form>
</div>

<!-- <script>

   @if(!empty($codigo))
        @if($codigo == 1234)
            document.getElementById('nombre').value = 'Juan el taquero'
            document.getElementById('email').value = 'Juan@tacos.com'
        @endif
    @endif
        
</script> -->
</body>
</html>