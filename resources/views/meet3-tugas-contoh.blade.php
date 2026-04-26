<!--
Nama : Farhan Fitran Maulana
NRP : 5026241153
Kelas : PWEB(A)
Berikut adalah Tugas Pertemuan 3, yaitu membuat web page dengan menerapkan JS Collapse.
JS Collapse saya terapkan pada tulisan "Lihat Deskripsi Produk ▼" yang ketika diklik akan menampilkan deskripsi produk.
Pada bagian deskripsi produk, saya menjelaskan tentang Nasi Jinggo, yakni hidangan khas Bali.

Di file ini banyak CSS Internal, supaya tampilan Web lebih menarik dan mirip dengan ITSFood:D
Referensi saya: https://itsfood.id/products/show/37137
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ITSFood</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .header {
            display: flex;
            background-color: #0d1b3e;
            color: white;
            padding: 5px;
            align-items: center;
        }

        .logo-tagline {
            display: flex;
            align-items: center;
        }

        .product-cart {
            display: flex;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        .teks-deskripsi {
            font-size: 16px;
            color: #000000;
            text-align: justify;
        }

        #Tagline {
            font-size: 22px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        .order-action {
            display: flex;
            align-items: center;
        }

        .qty-container {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 6px;
            overflow: hidden;
        }

        .qty-container input {
            width: 50px;
            text-align: center;
            border: none;
            font-weight: 500;
        }

        .qty-btn {
            width: 40px;
            height: 40px;
            border: none;
            background: #f3f3f3;
            font-size: 18px;
            cursor: pointer;
        }

        .add-btn {
            margin-left: 10px;
            background: #e3b74c;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .add-btn:hover {
            background: #d7a93d;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo-tagline ml-4">
            <img src="https://itsfood.id/assets/img/itsfood.svg" alt="Logo ITSFood" width="55" height="55">
            <h2 id="Tagline">Pesan. Antar. Kenyang.</h2>
        </div>
    </div>
    <div class="container mt-1">
        <div class="product-cart">
            <div class="product-image">
                <img src="https://itsfood.id/uploads/images/products/display/Product_37137.jpg" alt="Nasi Jinggo"
                    width="350" height="350">
            </div>
            <div class="product-info ml-3">
                <h1>Nasi Jinggo</h1>
                <p>BALE AJENGAN</p>
                <p>⭐ 4.8 (120 ulasan)</p>
                <h3>Rp 10.000</h3>
                <p class="desc-toggle" data-toggle="collapse" data-target="#demo">
                    <bold>Lihat Deskripsi Produk ▼</bold>
                </p>
                <div id="demo" class="collapse">
                    <p class="teks-deskripsi">Nasi Jinggo adalah hidangan khas Bali berupa nasi putih yang dibungkus
                        dengan daun pisang dan disajikan dengan berbagai lauk-pauk. Menu ini dikenal dengan rasanya yang
                        lezat serta penyajiannya yang praktis, sehingga cocok dinikmati sebagai makan siang ataupun
                        camilan. Dalam satu porsi tersedia nasi putih, ayam kampung (1/4 potong), lalapan seperti labu
                        manisa, bayam rebus, dan terong, serta pelengkap berupa tempe atau tahu goreng, ikan asin
                        goreng, sambal tempong, dan kerupuk. Hidangan ini dikemas menggunakan box kardus premium agar
                        tetap rapi dan nyaman saat dibawa atau dinikmati.</p>
                </div>
                <div class="order-action mt-3">

                    <div class="qty-container">

                        <button class="qty-btn">−</button>

                        <input type="text" id="qty" value="1">

                        <button class="qty-btn">+</button>

                    </div>

                    <button class="add-btn">
                        Tambahkan Pesanan
                    </button>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
