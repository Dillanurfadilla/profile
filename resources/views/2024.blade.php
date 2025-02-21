<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kependudukan 2024</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <div class="container">
        <h2>Profil Kependudukan 2024</h2>
        <a href="{{ url('/arship') }}" class="btn btn-secondary mb-3">⬅ Kembali ke Arship</a>
        <a href="{{ url('/home') }}" class="btn btn-primary mb-3">⬅ Kembali ke Dashboard</a>

        <ul class="list-group">
        <li class="list-group-item"><a href="{{ url('/downloads/Kecamatan.pdf') }}" download>Kecamatan</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/desa.pdf') }}" download>Desa</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/penduduk.pdf') }}" download>Penduduk</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/keluarga.pdf') }}" download>Keluarga</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/kepemilikan_kk.pdf') }}" download>Kepemilikan KK</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/agama.pdf') }}" download>Agama</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/umur.pdf') }}" download>Umur</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/pendidikan.pdf') }}" download>Pendidikan</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/pekerjaan.pdf') }}" download>Pekerjaan</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/golongan_darah.pdf') }}" download>Golongan Darah</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/status_kawin.pdf') }}" download>Status Kawin</a></li>
            <li class="list-group-item"><a href="{{ url('/downloads/disabilitas.pdf') }}" download>Disabilitas</a></li>
        </ul>
    </div>
</body>
</html>
