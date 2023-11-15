<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('styles/main-3.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/header-3.css') }}">
   
    <title>Produk Display</title>
</head>
<body>
    <header class="header">
        <p class="page">Simple Product Generator</p>
        <div class="left-section">
            <a href="/2">
                <img class="left-arrow" src="images/left-3.png">
            </a>
            <a href="/1">
                <img class="right-arrow" src="images/right-3.png">
            </a>
            <img class="cross" src="images/cross-3.png">
            <img class="home-img" src="images/home-3.png">     
        </div>
        <div class="middle-section">
            <input class="search-bar" type="text" placeholder="https://localhost">
            <a href="https://youtu.be/dQw4w9WgXcQ">
                <img class="search-icon" src="produk-5.png">
            </a>
        </div>
    </header>

    <div class="container">
        <div class="generate-form">
            <form method="get">
                <input type="number" name="jumlahProduk" id="jumlahProduk" min="1" value="1" class="form-control mr-3">
                <button type="submit" name="generateButton" class="btn btn-primary">Generate Product</button>
            </form>
        </div>

        <div class="slide-container">
            <div class="slide-content swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    if (isset($_GET['generateButton'])) {
                        $jumlahProduk = isset($_GET['jumlahProduk']) ? intval($_GET['jumlahProduk']) : 1;
                        $productImages = ['produk-1.png', 'produk-2.png', 'produk-3.png', 'produk-4.png', 'produk-5.png', 'produk-6.png'];

                        for ($i = 1; $i <= $jumlahProduk; $i++) {
                            $imageIndex = ($i - 1) % count($productImages);
                            $imageName = $productImages[$imageIndex];

                            $imagePath = asset('images/' . $imageName);
                            echo '
                                <div class="swiper-slide product-card">
                                    <img src="' . $imagePath . '" alt="Produk ' . $i . '">
                                    <div class="card-body">
                                        <h5 class="card-title">Produk ' . $i . '</h5>
                                        <p class="card-text">Deskripsi produk ' . $i . '</p>
                                        <a href="#" class="btn btn-primary">Buy Product</a>
                                    </div>
                                </div>
                            ';
                        }
                    }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <footer class="footer-container">
        <img class="strips-icon" src="produk-6.png">
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: false,
            centerSlide: true,
            fade: true,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
            // Enable mousewheel control
            mousewheel: true,
        });
    });
    </script>
</body>
</html>
