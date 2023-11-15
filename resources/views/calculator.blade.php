<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/footer.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <header class="header">
        <p class="page">Simple Calculator</p>
        <div class="left-section">
            <a href="/3">
                <img class="left-arrow" src="images/left.png">
            </a>
            <a href="/2">
                <img class="right-arrow" src="images/right.png">
            </a>
            <img class="cross" src="images/cross.png">
            <img class="home-img" src="images/home.png">     
        </div>

        <div class="middle-section">
            <input class="search-bar" type="text" placeholder="https://localhost">
            <a href="https://youtu.be/dQw4w9WgXcQ">
                <img class="search-icon" src="images/search.png">
            </a>
        </div>
    </header>

    <div class="main-container" >    
        <div class="calculator-container">
            <h4 class="card-title">Kalkulator penambahan</h4>
            <div class="card-container">
                <p class="card-text">Angka Pertama</p>
                <input type="number" name="angka1" placeholder="Masukan Angka:">
                <p class="card-text">Angka Kedua</p>
                <input type="number" name="angka2" placeholder="Masukan Angka:">
                <P id="hasil-1">Hasil:  </P>
            </div>
            <button type="submit" name="hitung" class="hasil-button">Hitung</button>  
        </div>
        
        <div class="calculator-container-2">
            <h4 class="card-title">Kalkulator pengurangan</h4>
                <div class="card-container">
                    <p class="card-text">Angka Pertama</p>
                    <input type="number" name="angka3" placeholder="Masukan Angka:">
                    <p class="card-text">Angka Kedua</p>
                    <input type="number" name="angka4" placeholder="Masukan Angka:">
                    <P id="hasil-2">Hasil: </P>
                </div>
                <button type="submit" name="hitung" class="hasil-button-2">Hitung</button>
            </div>

        <div class="calculator-container-2">
            <h4 class="card-title">Kalkulator perkalian</h4>
                <div class="card-container">
                    <p class="card-text">Angka Pertama</p>
                    <input type="number" name="angka5" placeholder="Masukan Angka:">
                    <p class="card-text">Angka Kedua</p>
                    <input type="number" name="angka6" placeholder="Masukan Angka:">
                    <P id="hasil-3">Hasil:  </P>
                </div>
            <button type="submit" name="hitung" class="hasil-button-3">Hitung</button>
        </div>
        <div class="main-container-2" >
            <div class="calculator-container">
                <h4 class="card-title">Kalkulator pembagian</h4>
                    <div class="card-container">
                        <p class="card-text">Angka Pertama</p>
                        <input type="number" name="angka7" placeholder="Masukan Angka:">
                        <p class="card-text">Angka Kedua</p>
                        <input type="number" name="angka8" placeholder="Masukan Angka:">
                        <p id="hasil-4">Hasil: </p> 
                    </div>
                <button type="submit" name="hitung" class="hasil-button-4">Hitung</button>
            </div>

            <div class="calculator-container-2">
                <h4 class="card-title">Kalkulator modulus</h4>
                    <div class="card-container">
                        <p class="card-text">Angka Pertama</p>
                        <input type="number" name="angka9" placeholder="Masukan Angka:">
                        <p class="card-text">Angka Kedua</p>
                        <input type="number" name="angka10" placeholder="Masukan Angka:"> 
                        <P id="hasil-5">Hasil:  </P>
                    </div>
                <button type="submit" name="hitung" class="hasil-button-5">Hitung</button>
            </div>
        </div>
    </div>
    <footer class="footer-container">
        <img class="strips-icon" src="images/strips.png">
    </footer>
</body>
<script>
    $(document).ready(function () {
    function calculate(operation, input1, input2, resultId) {
        const number1 = parseFloat($(`input[name='${input1}']`).val());
        const number2 = parseFloat($(`input[name='${input2}']`).val());

        if (isNaN(number1) || isNaN(number2)) {
            $(`#${resultId}`).text("Please enter valid numbers");
        } else {
            const result = operation(number1, number2);
            $(`#${resultId}`).text(`Hasil: ${result}`);
        }
    }

    $(".hasil-button").click(function () {
        calculate((a, b) => a + b, 'angka1', 'angka2', 'hasil-1');
    });

    $(".hasil-button-2").click(function () {
        calculate((a, b) => a - b, 'angka3', 'angka4', 'hasil-2');
    });

    $(".hasil-button-3").click(function () {
        calculate((a, b) => a * b, 'angka5', 'angka6', 'hasil-3');
    });

    $(".hasil-button-4").click(function () {
        calculate((a, b) => a / b, 'angka7', 'angka8', 'hasil-4');
    });

    $(".hasil-button-5").click(function () {
        calculate((a, b) => a % b, 'angka9', 'angka10', 'hasil-5');
    });
});

</script>

</html>


