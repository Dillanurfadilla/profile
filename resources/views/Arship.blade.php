<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arship</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</head>
<body class="p-4">
    <div class="container">
        <h2>Arship</h2>
        <a href="{{ url('/home') }}" class="btn btn-primary mb-3">⬅ Kembali ke Dashboard</a>
        <ul class="list-group">
            @foreach (['2024', '2025'] as $letter)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>Profile Kependudukan {{ $letter }}</span>
                    <a href="{{ url('/arship/' . strtolower($letter) . '.zip') }}" download class="btn btn-success">
                        <i class="fas fa-file-archive"></i> Unduh ZIP
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
