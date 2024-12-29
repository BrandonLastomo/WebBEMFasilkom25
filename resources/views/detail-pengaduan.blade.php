<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pengaduan</title>
</head>
<body>

<form action="apr/downloadpf/{{ $item->id }}" method="GET"></form>

<p>Pengadu :</p>
<p style="text-transform:uppercase"><b>{{ $item->pengadu }}</b></p>
<br>
<p>Judul :</p>
<p style="text-transform:uppercase"><b>{{ $item->judul }}</b></p>
<br>
<p>Kategori : </p>
<p style="text-transform:uppercase"><b>{{ $item->kategori }}</b></p>
<br>
<p>Isi Pengaduan : </p>
<p><b>{{ $item->isi_pengaduan }}</b></p>