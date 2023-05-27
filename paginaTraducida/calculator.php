<?php
$result=0;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $num1 = intval($_REQUEST['num1']);
    $num2 = intval($_REQUEST['num2']);
    $num3 = intval($_REQUEST['num3']);
    $num4 = intval($_REQUEST['num4']);
    $num5 = intval($_REQUEST['num5']);
    $num6 = intval($_REQUEST['num6']);
    $num7 = intval($_REQUEST['num7']);
    $num8 = intval($_REQUEST['num8']);
    $num9 = intval($_REQUEST['num9']);
    $num10 = intval($_REQUEST['num10']);
    $num11 = intval($_REQUEST['num11']);
    $num12 = intval($_REQUEST['num12']);
    $num13 = intval($_REQUEST['num13']);
    $num14 = intval($_REQUEST['num14']);
    $num15 = intval($_REQUEST['num15']);
    $num16 = intval($_REQUEST['num16']);
    $result = ($num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9+$num10+$num11+$num12+$num13+$num14+$num15+$num16)/16;
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../pagina/styleCalculadora.css">
</head>
<body>
    <header class="header">
        <img src="../img/logo.jpeg" alt="" class="header__img--logo">
        <h1 class="header__title">Bacteria quantification</h1>
        <div class="header__menu">
            <i class="bi bi-list header__menu--i"></i>
            <ul class="header__menu--content right">
                <a href="./indexEnglish.html"><li>Home</li></a>
                <a href="./KnowUs.html"><li>Know us</li></a>
                <a href="./concepts.html"><li>Concepts</li></a>
                <a href="../pagina/calculadora.php"><li>Translate</li></a>
            </ul>
        </div>
    </header>
    <main class="main">
        <section class="main__calculadora">
            <section class="main__calculadora--result">
                <h1>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                            echo "The average result is ".strval($result);
                        }
                        
                    ?>
                </h1>
            </section>
            <form action="./calculator.php" method="post" class="main_calculadora--form">
                <section class="main_calculadora--form--section">
                    <article class="main_calculadora--form-article">
                        <div class="main__calculadora--form--number">
                            <label for="num1">Number 1</label>
                            <input type="number" name="num1" id="num1">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num2">Number 2</label>
                            <input type="number" name="num2" id="num2">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num3">Number 3</label>
                            <input type="number" name="num3" id="num3">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num4">Number 4</label>
                            <input type="number" name="num4" id="num4">
                        </div>
                    </article>
                    <article class="main_calculadora--form-article">
                        <div class="main__calculadora--form--number">
                            <label for="num5">Number 5</label>
                            <input type="number" name="num5" id="num5">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num6">Number 6</label>
                            <input type="number" name="num6" id="num6">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num7">Number 7</label>
                            <input type="number" name="num7" id="num7">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num8">Number 8</label>
                            <input type="number" name="num8" id="num8">
                        </div>
                    </article>
                    <article class="main_calculadora--form-article">
                        <div class="main__calculadora--form--number">
                            <label for="num9">Number 9</label>
                            <input type="number" name="num9" id="num9">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num10">Number 10</label>
                            <input type="number" name="num10" id="num10">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num11">Number 11</label>
                            <input type="number" name="num11" id="num11">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num12">Number 12</label>
                            <input type="number" name="num12" id="num12">
                        </div>
                    </article>
                    <article class="main_calculadora--form-article">
                        <div class="main__calculadora--form--number">
                            <label for="num13">Number 13</label>
                            <input type="number" name="num13" id="num13">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num14">Number 14</label>
                            <input type="number" name="num14" id="num14">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num15">Number 15</label>
                            <input type="number" name="num15" id="num15">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num16">Number 16</label>
                            <input type="number" name="num16" id="num16">
                        </div>
                    </article>
                </section>
                <article class="main__calculadora--form--submit">
                    
                        <button type="submit">Calculate average</button>
                    
                </article>
            </form>
        </section>
        <section class="main__calculadora2">
            <section class="main__calculadora2--result">
                <h1>Number of individuals</h1>
            </section>
            <form action="./php/numberIndividuals.php" method="post" class="main_calculadora2--form" >
                 <div class="main_calculadora2--form--input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="main_calculadora2--form--input">
                    <label for="promedio">Average</label>
                    <input type="number" name="promedio" id="name" value="<?php echo $result?>" required>
                </div>
                <div class="main_calculadora2--form--input">
                    <button type="submit">Calculate</button>
                </div>
            </form>
        </section>
        <section class="main__calculadora3">
            <section class="main__calculadora3--result">
                <h1>Exponential growth</h1>
            </section>
            <form action="./php/exponentialGrowth.php" method="post" class="main_calculadora3--form" >
                <article>
                    <div class="main_calculadora3--form--input">
                        <label for="nInicial">N0 or N initial</label>
                        <input type="text" name="nInicial" id="nInicial" required>
                    </div>
                    <div class="main_calculadora3--form--input">
                        <label for="nActual">N or N current</label>
                        <input type="number" name="nActual" id="nActual" required>
                    </div>
                </article>
                <article>
                    <div class="main_calculadora3--form--input">
                        <label for="tInicial">T0 o T initial</label>
                        <input type="text" name="tInicial" id="tInicial" required>
                    </div>
                    <div class="main_calculadora3--form--input">
                        <label for="tActual">T o T current</label>
                        <input type="number" name="tActual" id="tActual" required>
                    </div>
                </article>
                <div class="main_calculadora3--form--input">
                    <button type="submit">Calculate</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="footer">
        <section class="footer-credits">
            <h1>Email: amzaacg@udistrital.edu.co</h1>
            <h1>Name: Aida Marcela Zaac Gonzalez</h1>
            <h2>Cell: +57 3209297377</h1>
        </section>
        <section class="footer-contactMe">
            <h1>Contact us</h1>
            <form action="">
                <div class="fullName">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="lastName">Last name</label>
                    <input type="text" name="lastName" id="lastName">
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="cellphone">
                    <label for="cellphone">Cellphone</label>
                    <input type="number" name="cellphone" id="cellphone">
                </div>
                <div class="submit">
                    <input type="submit" value="Send" >
                </div>
            </form>
        </section>
    </footer>
</body>
</html>