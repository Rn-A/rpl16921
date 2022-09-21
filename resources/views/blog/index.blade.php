@extends('layout.template')

@section('headscript')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@section('title', 'Halaman Home Blog RPL')

@section('judul_halaman')
Ini adalah halaman Home dari Blog RPL
@endsection

@section('content')
<div class="w3-container">
    <table class="w3-table w3-striped w3-border w3-bordered w3-hoverable">
        <tr class="w3-teal">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>NIS</td>
        </tr>
        <?php $i = 1; ?>
        @foreach($data as $datas)
        <tr>
            <td>{{$i}}</td>
            <td>{{$datas->nama}}</td>
            <td>{{$datas->kelas}}</td>
            <td>{{$datas->nis}}</td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table>
</div>
@endsection