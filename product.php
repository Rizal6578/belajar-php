<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assest/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Landing Page</title>
</head>
<body>
    <h1>Selamat datang di Landing Page Kami</h1>
    
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assest/image/minuman 1.jpg" alt="Slide 1">
                <div class="carousel-caption">
                    <h3>Alpukat Squash</h3>
        <p>Nikmati sensasi segar dan lezat dengan Minuman Alpukat Squash kami! Kafe kami dengan bangga menghadirkan minuman unik ini yang menggabungkan kelezatan alpukat yang kaya akan nutrisi dengan keharuman dan keasaman segar dari squash. Alpukat Squash adalah pilihan sempurna untuk Anda yang mencari kombinasi yang mengejutkan dan menyegarkan.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assest/image/minuman 2.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Strawbery Aquash</h3>
                    <p>Stroberi Squash adalah minuman segar yang memukau dengan sentuhan manis stroberi segar. Kami mencampur stroberi matang dengan gula secukupnya untuk menciptakan rasa yang sempurna. Minuman ini adalah pilihan yang luar biasa di hari panas atau saat Anda ingin memanjakan diri dengan sesuatu yang manis dan menyegarkan.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assest/image/minuman 3.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Korean Strawbery Milk</h3>
                    <p>Korean Stroberi Milk adalah minuman yang menghadirkan rasa stroberi yang khas dengan kelembutan susu. Kami menggunakan stroberi segar yang dicampur dengan susu kental manis untuk memberikan sentuhan lembut pada rasa stroberi yang segar. Ini adalah minuman yang cocok untuk menghadirkan cita rasa Korea yang unik dalam setiap tegukan.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assest/image/minuman 4.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Cappucino Ice</h3>
                    <p>Cappuccino Ice adalah minuman kopi yang menyegarkan dan membangunkan. Kami meracik espresso berkualitas tinggi yang disajikan di atas es batu yang lembut. Kemudian, kami menambahkan susu untuk memberikan rasa yang lembut dan creamy pada kopi. Cappuccino Ice adalah pilihan yang tepat untuk pecinta kopi yang ingin merasakan kopi dengan nuansa dingin yang menyegarkan.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assest/image/snack 1.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Nasi Goreng</h3>
                    <p>Nikmati kelezatan Nasi Goreng kami yang lezat. Kami meracik nasi yang gurih dan renyah dengan bumbu-bumbu khas yang memberikan rasa yang lezat dan memanjakan lidah Anda. Ditambah dengan pilihan tambahan seperti telur, ayam, atau udang, Nasi Goreng kami pasti akan memuaskan selera Anda.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assest/image/snack 2.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Kentang Goreng</h3>
        <p>Kentang Goreng kami adalah camilan yang sempurna untuk menemani waktu bersantai Anda. Kami memotong kentang segar menjadi potongan-potongan kecil, kemudian menggorengnya hingga keemasan dan mengenyangkan. Dapatkan sensasi renyah dan gurih yang tak tertandingi dengan setiap gigitan.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assest/image/snack 3.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Piscok (Pisang Coklat)</h3>
        <p>Piscok, atau Pisang Coklat Keju, adalah hidangan manis yang sangat disukai oleh banyak orang. Kami menggoreng pisang matang hingga keemasan dan kemudian memberikan sentuhan coklat dan keju yang lezat. Rasakan paduan manis pisang, coklat, dan keju dalam setiap suapan Piscok kami.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assest/image/snack 4.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Keripik Pisang</h3>
                    <p>Keripik Pisang kami adalah camilan ringan yang enak dan lezat. Kami memotong pisang menjadi irisan tipis, kemudian menggorengnya dengan sempurna untuk menghasilkan keripik yang renyah dan manis. Ini adalah pilihan camilan yang cocok untuk dinikmati sambil bersantai di kafe kami.</p>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</body>
</html>
