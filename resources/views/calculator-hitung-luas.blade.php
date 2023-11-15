<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="{{ asset('styles/main-2.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/header-2.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/footer-2.css') }}">    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <header class="header">
        <p class="page">Simple Calculator</p>
        <div class="left-section">
            <a href="/1">
                <img class="left-arrow" src="images/left.png">
            </a>
            <a href="/3">
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
            <div class="header-box">
                <p class="heder-box-text">Hitung Luas Bangun Datar</p>
                <div class="box-radio">
                    <div class="radios">
                        <form action="index.html" method="post">
                            <div class="radios">
                                <label  for="radio-1">
                                    <input  type="radio" name="shape" id="radio-1" value="persegi">
                                </label>persegi

                                <label for="radio-2">                    
                                    <input  type="radio" name="shape" id="radio-2" value="persegi-panjang">  
                                </label>persegi panjang 
                            </div>
                            
                            <div class="radios-2">
                                <label  for="radio-3">
                                    <input  type="radio" name="shape" id="radio-3" value="segitiga">
                                </label>segitiga
                                <label  for="radio-4"> 
                                    <input  type="radio" name="shape" id="radio-4" value="lingkaran">
                                </label>lingkaran
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
            <div class="card-container">
                <p id="card-text">Angka Pertama</p>
                <input id="input" type="number" name="angka1" placeholder="Masukkan Angka:" >
                <p id="card-text-2">Angka Kedua</p>
                <input id="input" type="number" name="angka2" placeholder="Masukkan Angka:" >
            </div>
            <div class="button-result">
                <button type="submit" name="hitung" class="hasil-button-centimeter">CM</button>  
                <button type="submit" name="hitung" class="hasil-button-meter">M</button>  
                <button type="submit" name="hitung" class="hasil-button-kilometer">KM</button>  
            </div>
        </div> 
        <div class="calculator-container-2">
            <div class="header-box">
                <p class="heder-box-text">HASIL</p>
            </div>
            <div id="hasil-type" class="hasil-type-persegi panjang">
                <p id="rumus-text">Silahkan Pilih Rumus Bangun Datar</p>
            </div>
            <div class="hasil-type-2">
                <div class="image-hasil">
                <img id="image-persegi-panjang" src="images/persegi-panjang.png" alt="" hidden>
                <img id="image-segitiga" src="images/segitiga.png" alt="" hidden>
                <img id="image-lingkaran" src="images/lingkaran.png" alt="" hidden>
                <img id="image-persegi" src="images/persegi.png" alt="" hidden>
            </div>
                <p id="text-persegi-panjang">Hasil Hitung Luas:</p>
                <p class="text-hasil-persegi-panjang" id="result" >0cm</p>
            </div>
        </div>
    </div>
    <footer class="footer-container">
        <img class="strips-icon" src="images/strips.png">
    </footer>
    <script>

    function togglePlaceholder() {
        var selectedShape = $("input[name='shape']:checked").val();
        var cardText = $(".card-container #card-text");
        var cardText2 = $(".card-container #card-text-2");
            
        if (selectedShape === "persegi") {
            cardText.text("Sisi");
            cardText2.text("Sisi");
        
        } else if (selectedShape === "persegi-panjang") {
            cardText.text("Panjang");
            cardText2.text("Lebar");
            
        } else if (selectedShape === "segitiga") {
            cardText.text("Alas");
            cardText2.text("Tinggi");

            
        } else if (selectedShape === "lingkaran") {
            cardText.text("Jari-Jari");
            cardText2.text("Jari-Jari");

        }
    }
    
    function calculateArea() {

        togglePlaceholder(); 
        var selectedShape = $("input[name='shape']:checked").val();
        var alas = parseFloat($("input[name='angka1']").val());
        var tinggi = parseFloat($("input[name='angka2']").val());
    
        var result = 0;
    
        if (selectedShape === "persegi") {
            result = alas * alas;
        } else if (selectedShape === "persegi-panjang") {
            result = alas * tinggi;
        } else if (selectedShape === "segitiga") {
            result = (alas * tinggi) / 2;
        } else if (selectedShape === "lingkaran") {
            result = 3.14 * (alas) * (alas);
        }
    
        if (isNaN(result)) {
            $("#result").text("Tolong masukkan angka yang valid!");
        } else {
            $("#result").text(result + " cm²");
        }
    
    }
        
    function calculateAreaInMeter() {

        togglePlaceholder();
        var selectedShape = $("input[name='shape']:checked").val();
        var alas = parseFloat($("input[name='angka1']").val());
        var tinggi = parseFloat($("input[name='angka2']").val());

        var result = 0;

        if (selectedShape === "persegi") {
            result = (alas * alas) / 10000; 
        } else if (selectedShape === "persegi-panjang") {
            result = (alas * tinggi) / 10000; 
        } else if (selectedShape === "segitiga") {
            result = (alas * tinggi) / 20000; 
        } else if (selectedShape === "lingkaran") {
            result = (3.14 * alas * alas) / 10000; 
        }

        if (isNaN(result)) {
            $("#result").text("Tolong masukkan angka yang valid!");
        } else {
            $("#result").text(result + " m²");
        }
    }
        
    function calculateAreaInKilometer() {
        togglePlaceholder();
        var selectedShape = $("input[name='shape']:checked").val();
        var alas = parseFloat($("input[name='angka1']").val());
        var tinggi = parseFloat($("input[name='angka2']").val());

        var result = 0;

        if (selectedShape === "persegi") {
            result = (alas * alas) / 100000000; 
        } else if (selectedShape === "persegi-panjang") {
            result = (alas * tinggi) / 100000000; 
        } else if (selectedShape === "segitiga") {
            result = (alas * tinggi) / 200000000; 
        } else if (selectedShape === "lingkaran") {
            result = (3.14 * alas * alas) / 100000000; 
        }

        if (isNaN(result)) {
            $("#result").text("Tolong masukkan angka yang valid!");
        } else {
            $("#result").text(result + " km²");
        }
    }

    function resetInput() {
        $("input[name='angka1']").val("");
        $("input[name='angka2']").val("");
    }

    function resetResult() {
        $("#result").text("0cm");
    }    
    
    $("input[name='shape']").on("change", function() {
        togglePlaceholder();
        resetResult();
        resetInput();

        var selectedShape = $("input[name='shape']:checked").val();
        var hasilType = "Kamu Menghitung Rumus Luas " + selectedShape;
        $("#hasil-type").text(hasilType);
    
        $("#image-persegi-panjang, #image-segitiga, #image-lingkaran, #image-persegi").hide();
        if (selectedShape === "persegi") {
            $("#image-persegi").show();
        } else if (selectedShape === "persegi-panjang") {
            $("#image-persegi-panjang").show();
        } else if (selectedShape === "segitiga") {
            $("#image-segitiga").show();
        } else if (selectedShape === "lingkaran") {
            $("#image-lingkaran").show();
        }

    });

    $(".hasil-button-centimeter").on("click", function() {
        calculateArea();
    });

    $(".hasil-button-meter").on("click", function() {
        calculateAreaInMeter();
    });

    $(".hasil-button-kilometer").on("click", function() {
            calculateAreaInKilometer();
    });

    

    </script>    
</body>


