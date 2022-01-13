<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Phone Dialer
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
   </head>
    <body>
        <div class="dialer">
            <div id="number"></div>
            <table>
                <tr>
                    <td><p class="dial-no">1</p><p class="alphabets"></p></td>
                    <td><p class="dial-no">2</p><p class="alphabets">ABC</p></td>
                    <td><p class="dial-no">3</p><p class="alphabets">DEF</p></td>
                </tr>
                <tr>
                    <td><p class="dial-no">4</p><p class="alphabets">GHI</p></td>
                    <td><p class="dial-no">5</p><p class="alphabets">JKL</p></td>
                    <td><p class="dial-no">6</p><p class="alphabets">MNO</p></td>
                </tr>
                <tr>
                    <td><p class="dial-no">7</p><p class="alphabets">PQRS</p></td>
                    <td><p class="dial-no">8</p><p class="alphabets">TUV</p></td>
                    <td><p class="dial-no">9</p><p class="alphabets">WXYX</p></td>
                </tr>
                <tr>
                    <td><p class="dial-no">*</p><p class="alphabets"></p></td>
                    <td><p class="dial-no">0</p><p class="alphabets"></p></td>
                    <td><p class="dial-no">#</p><p class="alphabets"></p></td>
                </tr>
                <tr>
                    <td><p class="dial-no signs"><i class="fa fa-star-o" aria-hidden="true"></i></p></td>
                    <td class="dial"><p class="dial-no signs"><i class="fa fa-phone" aria-hidden="true"></i></p></td>
                    <td><p id="del" class=" dial-no signs"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></p></td>
                </tr>
            </table>
        </div>
        <script src="script.js"></script>
    </body>
</html>
