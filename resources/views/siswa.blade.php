<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <div class="bio" style="text-align: center;">
    <h3>Nama :{{ $siswas['nama'] }}</h3>
    <h3>Kelas : {{ $siswas['kelas'] }}</h3>
    <h3>NIS : {{ $siswas['nis'] }}</h3>
    <hr>
     <h3>Nama :{{ $siswa->nama }}</h3>
    <h3>Kelas : {{ $siswa->kelas }}</h3>
    <h3>NIS : {{ $siswa->nis }}</h3>
    </div>

</body>
</html>