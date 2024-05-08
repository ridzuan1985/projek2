@extends('Layouts.master')
@section('Content')
    @php
    $nama = "Harimau";
    $bapa = "Malaya";
@endphp

<div class="text-center">
    <h1>Nama saya {{$nama}} bin <?php echo $bapa; ?></h1>
    <p>Selamat Datang</p>
    <p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Tigerramki.jpg" class="img-fluid" alt="Harimau" width="50%" height="50%">
    </p>
</div>
    <h3>Hi Ahmad</h3>
    
@endsection