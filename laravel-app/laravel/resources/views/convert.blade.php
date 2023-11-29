{{-- resources/views/roman_palindrome.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Roma Rakamları ve Palindrom Kontrolü</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Roma Rakamları ve Palindrom Kontrolü</h1>

        <div class="form-group">
            <h2>Roma Rakamlarını Çevir</h2>
            <input type="text" id="romanInput" placeholder="Roma Rakamı Girin">
            <button onclick="convertToNumber()">Çevir</button>
        </div>
        <div id="romanOutput">Sonuç: </div>

        <div class="form-group">
            <h2>Palindrom Kontrolü</h2>
            <input type="text" id="palindromeInput" placeholder="Sayı Girin">
            <button onclick="checkPalindrome()">Kontrol Et</button>
        </div>
        <div id="palindromeOutput">Sonuç: </div>
    </div>

    <script>
        function convertToNumber() {
            const roman = document.getElementById('romanInput').value;
            fetch(`/convert/${roman}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('romanOutput').innerText = 'Sonuç : ' + data;
                })
                .catch(error => console.error('Hata', error));
        }

        function checkPalindrome() {
            const palin = document.getElementById('palindromeInput').value;
            fetch(`/is-palindrome/${palin}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('palindromeOutput').innerText = data;
                })
                .catch(error => console.error('Hata', error));
        }
    </script>
</body>
</html>
