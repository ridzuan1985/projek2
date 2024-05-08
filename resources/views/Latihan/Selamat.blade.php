<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        @php
        $nama = "AHMAD";
    @endphp
    <?php
    $bapa = "Ismail";
    ?>
    <div class="text-center">
        <h1>Nama saya {{$nama}} bin <?php echo $bapa; ?></h1>
 <p>Selamat Datang</p>
 <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Tigerramki.jpg" class="img-fluid" alt="Harimau" width="50%" height="50%">
    </div>
  
      </div>
      <h1 class="h3 mb-4 text-gray-800">Main Page</h1>
  </body>
</html>