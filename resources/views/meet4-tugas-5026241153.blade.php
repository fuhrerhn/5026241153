<!--
Nama : Farhan Fitran Maulana
NRP : 5026241153
Kelas : PWEB(A)
Berikut adalah Tugas Pertemuan 4, yaitu redesign sebuah web dengan menerapkan grid layout Bootstrap.
Pada file ini, saya mendesain ulang halaman testimoni seperti layaknya testimoni Bootcamp Digital,
4 orang tersebut (teman saya) adalah peserta Bootcamp Digital tersebut.
-->
<!DOCTYPE html>
<html>

<head>
    <title>5026241153</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@600;700&family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #ecedef;
            padding-top: 30px;
        }

        .container {
            max-width: 1250px;
        }

        .judul h1 {
            font-family: 'Oswald', sans-serif;
            letter-spacing: 2px;
            font-weight: bold;
            margin-bottom: 50px;
        }

        .testimoni {
            display: flex;
            align-items: flex-start;
            gap: 30px;
            padding: 20px 10px;
            background-color: ;
        }

        #content-testimoni {
            background-color: #ffffff;
            padding: 70px 60px;
        }

        .testimoni img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
        }

        .testimoni .quote {
            font-style: italic;
            margin-bottom: 10px;
            text-align: justify;
            min-height: 145px;
        }

        .testimoni .Nama {
            font-family: 'Lato ', sans-serif;
            letter-spacing: -0.5px;
            font-weight: bold;
            margin-bottom: 1px;
        }

        .testimoni .Jabatan {
            color: #555;
        }

        .logo-perusahaan {
            background-color: #d2d5d8;
            height: 65px;
            padding: 0 100px;
            align-items: center;
            margin-top: 30px;
            margin-left: -60px;
            margin-right: -60px;
            margin-bottom: -70px;
        }

        .logo-perusahaan img {
            max-height: 35px;
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <section id="content-testimoni" class="container">
        <!-- Baris 1. Judul/ Headline -->
        <div class="row judul">
            <div class="col text-center">
                <h1 style="font-family: Oswald;">OUR CLIENTS LOVE US</h1>
            </div>
        </div>
        <!-- Baris 2. Testimoni -->
        <div class="row">
            <div class="col-md-6">
                <div class="testimoni">
                    <div><img
                            src="https://media.licdn.com/dms/image/v2/D5603AQHeARNlG828JA/profile-displayphoto-crop_800_800/B56ZzgYVXbKMAI-/0/1773291005818?e=1778716800&v=beta&t=7rLa2x7QyfvOV0OQCJttGg3BKsdWedRQpF6_nxbHQLQ"
                            alt="Foto Akhtar Ibrahim" /></div>
                    <div>
                        <p class="quote">
                            "Bootcamp ini memberikan pemahaman yang sangat praktis tentang data analysis dan problem
                            solving berbasis bisnis. Materinya langsung relevan dengan tantangan yang saya hadapi
                            sebagai consultant, terutama dalam mengolah data dan menyusun insight yang lebih strategis
                            untuk klien."
                        </p>
                        <p class="Nama">AKHTAR IBRAHIM</p>
                        <p class="Jabatan">Senior Consultant at PwC Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="testimoni">
                    <div><img
                            src="https://media.licdn.com/dms/image/v2/D5603AQGfxGF1r2QIRg/profile-displayphoto-crop_800_800/B56ZweYuX4IsAI-/0/1770036324516?e=1778716800&v=beta&t=Gw5o_LlL_AqfQggdgtg3Z6_vlKSmFPMxDqJzA_48sEE"
                            alt="Foto Kaka Agastya" /></div>
                    <div>
                        <p class="quote">
                            "Sebagai founder, saya membutuhkan pemahaman yang kuat tentang bagaimana teknologi dan
                            strategi digital dapat mengembangkan bisnis. Bootcamp ini membantu saya memahami digital
                            strategy, product thinking, dan bagaimana membangun sistem yang scalable untuk perusahaan."
                        </p>
                        <p class="Nama">KAKA AGASTYA</p>
                        <p class="Jabatan">CEO of Tanam Cabai Indonesia</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Baris 3. Testimoni -->
        <div class="row">

            <div class="col-md-6">
                <div class="testimoni">
                    <div><img
                            src="https://media.licdn.com/dms/image/v2/D4D03AQHAIog2qZCSag/profile-displayphoto-shrink_800_800/B4DZUsaf7tHkAc-/0/1740206900947?e=1778716800&v=beta&t=O3jKnSdN3eDwn5b2YStP0XIEHUNkPeZ9CxGdUCKKi6M"
                            alt="Foto Rafif Taqiy" /></div>
                    <div>
                        <p class="quote">
                            "Bootcamp ini sangat mendalam secara teknis dan fokus pada implementasi nyata machine
                            learning. Mulai dari model development hingga deployment, semuanya dijelaskan secara
                            sistematis sehingga sangat membantu meningkatkan kemampuan saya sebagai ML Engineer."
                        </p>
                        <p class="Nama">RAFIF TAQIY</p>
                        <p class="Jabatan">ML Engineer at Google Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="testimoni">
                    <div><img
                            src="https://media.licdn.com/dms/image/v2/D4D03AQHz2QSoUr48fg/profile-displayphoto-shrink_800_800/B4DZrBFThzKQAc-/0/1764175986022?e=1778716800&v=beta&t=xGFbBeMPI7Wm0kyuQQpT8xzH3bmAG9KSgShhmFaK4CU"
                            alt="Foto I Gusti Made" />
                    </div>
                    <div>
                        <p class="quote">
                            "Bootcamp ini sangat membantu saya memperdalam proses design thinking dan user-centered
                            design. Studi kasus yang diberikan sangat relevan dengan industri digital saat ini, sehingga
                            saya dapat meningkatkan kualitas desain dan pengalaman pengguna dalam setiap produk yang
                            saya kerjakan."
                        </p>
                        <p class="Nama">I GUSTI MADE</p>
                        <p class="Jabatan">UI/UX Designer at Tokopedia Indonesia</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Baris 4. Logo Perusahaan -->
        <div class="logo-perusahaan row text-center">
            <div class="col-md-2 col-4">
                <img src="https://www.pngkit.com/png/full/223-2232266_pwc-logo.png" class="img-fluid" alt="PwC">
            </div>

            <div class="col-md-2 col-4">
                <img src="https://www.freepnglogos.com/uploads/google-logo-png-hd-11.png" class="img-fluid"
                    alt="Google">
            </div>

            <div class="col-md-2 col-4">
                <img src="https://1.bp.blogspot.com/-GQEHSrfXoZ4/XzaIUlMv_yI/AAAAAAAAANc/XC5J0j4q-agEVCJy-y8ZwZ82qf0jb5T9QCLcBGAsYHQ/s3390/logo%2Bgojek%2Byogiancreative%2B2.png"
                    class="img-fluid" alt="Gojek">
            </div>

            <div class="col-md-2 col-4">
                <img src="https://1.bp.blogspot.com/-M8L5nZiXMpk/X2H14EBayoI/AAAAAAAAAXA/yoo-qlBm224VriUmYfbW0DaJszOs0T8CgCLcBGAsYHQ/s3237/tokped%2Blogo%2B2.png"
                    class="img-fluid" alt="Tokopedia">
            </div>

            <div class="col-md-2 col-4">
                <img src="https://pngimg.com/uploads/amazon/amazon_PNG6.png" class="img-fluid" alt="Amazon">
            </div>

            <div class="col-md-2 col-4">
                <img src="https://www.gsma.com/mobilefordevelopment/wp-content/uploads/2021/07/eFishery.png"
                    class="img-fluid" alt="EFishery">
            </div>
        </div>
    </section>
</body>

</html>
