<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        <>
        body {
            margin: 0;
            font-family: sans-serif;
            background-color: #f3f4f6;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            justify-content: center;
            padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .menu-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 280px;
            overflow: hidden;
            text-decoration: none;
            transition: transform 0.2s ease;
            display: flex;
            flex-direction: column;
        }

        .menu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.15);
        }

        .menu-card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-bottom: 1px solid #eee;
        }

        .btn-wrapper {
            padding: 16px;
        }

        .btn-direct {
            display: block;
            width: 100%;
            background-color: #0d6efd;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        .menu-card:hover .btn-direct {
            background-color: #0b5ed7;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center; margin-top: 40px; color: #333;">Pilih Halaman</h2>

    <div class="menu-container">

        <a href="{{ route('meet1') }}" class="menu-card">
            <img src="/menu-assets/meet1.png" alt="Preview Page 1">
            <div class="btn-wrapper">
                <button class="btn-direct">Buka Page 1</button>
            </div>
        </a>

        <a href="{{ route('meet2') }}" class="menu-card">
            <img src="/menu-assets/meet2.png" alt="Preview Page 2">
            <div class="btn-wrapper">
                <button class="btn-direct">Buka Page 2</button>
            </div>
        </a>
        <a href="{{ route('meet3') }}" class="menu-card">
            <img src="/menu-assets/meet3.png" alt="Preview Page 3">
            <div class="btn-wrapper">
                <button class="btn-direct">Buka Page 3</button>
            </div>
        </a>
        <a href="{{ route('meet3-tugas') }}" class="menu-card">
            <img src="/menu-assets/meet3-tugas.png" alt="Preview Page 4">
            <div class="btn-wrapper">
                <button class="btn-direct">Buka Page 4</button>
            </div>
        </a>
        <a href="{{ route('meet4-tugas') }}" class="menu-card">
            <img src="/menu-assets/meet4-tugas.png" alt="Preview Page 5">
            <div class="btn-wrapper">
                <button class="btn-direct">Buka Page 5</button>
            </div>
        </a>
        <a href="{{ route('meet5') }}" class="menu-card">
            <img src="/menu-assets/meet5.png" alt="Preview Page 6">
            <div class="btn-wrapper">
                <button class="btn-direct">Buka Page 6</button>
            </div>
        </a>
        <a href="{{ route('meet5-tugas') }}" class="menu-card">
            <img src="/menu-assets/meet5-tugas.png" alt="Preview Page 7">
            <div class="btn-wrapper">
                <button class="btn-direct">Buka Page 7</button>
            </div>
        </a>
        <a href="{{ route('meet5-tugas') }}" class="menu-card">
            <img src="/menu-assets/meet5-tugas.png" alt="Preview Page 7">
            <div class="btn-wrapper">
                <button class="btn-direct">Buka Page 7</button>
            </div>
        </a>

        </div>
</body>

</html>
