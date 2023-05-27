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
    <link rel="stylesheet" href="./styleCalculadora.css">
</head>
<body>
    <header class="header">
        <img src="../img/logo.jpeg" alt="" class="header__img--logo">
        <h1 class="header__title">Cuantificacion de bacterias</h1>
        <div class="header__menu">
            <i class="bi bi-list header__menu--i"></i>
            <ul class="header__menu--content right">
                <a href="../index.html"><li>Inicio</li></a>
                <a href="./conocenos.html"><li>Conocenos</li></a>
                <a href="./conceptos.html"><li>Conceptos</li></a>
                <a href="../paginaTraducida/calculator.php"><li>Traducir</li></a>
            </ul>
        </div>
    </header>
    <main class="main">
        <section class="main__calculadora">
            <section class="main__calculadora--result">
                <h1>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                            echo "El resultado del promedio es ".strval($result);
                        }
                        
                    ?>
                </h1>
            </section>
            <form action="./calculadora.php" method="post" class="main_calculadora--form">
                <section class="main_calculadora--form--section">
                    <article class="main_calculadora--form-article">
                        <div class="main__calculadora--form--number">
                            <label for="num1">Numero 1</label>
                            <input type="number" name="num1" id="num1">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num2">Numero 2</label>
                            <input type="number" name="num2" id="num2">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num3">Numero 3</label>
                            <input type="number" name="num3" id="num3">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num4">Numero 4</label>
                            <input type="number" name="num4" id="num4">
                        </div>
                    </article>
                    <article class="main_calculadora--form-article">
                        <div class="main__calculadora--form--number">
                            <label for="num5">Numero 5</label>
                            <input type="number" name="num5" id="num5">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num6">Numero 6</label>
                            <input type="number" name="num6" id="num6">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num7">Numero 7</label>
                            <input type="number" name="num7" id="num7">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num8">Numero 8</label>
                            <input type="number" name="num8" id="num8">
                        </div>
                    </article>
                    <article class="main_calculadora--form-article">
                        <div class="main__calculadora--form--number">
                            <label for="num9">Numero 9</label>
                            <input type="number" name="num9" id="num9">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num10">Numero 10</label>
                            <input type="number" name="num10" id="num10">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num11">Numero 11</label>
                            <input type="number" name="num11" id="num11">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num12">Numero 12</label>
                            <input type="number" name="num12" id="num12">
                        </div>
                    </article>
                    <article class="main_calculadora--form-article">
                        <div class="main__calculadora--form--number">
                            <label for="num13">Numero 13</label>
                            <input type="number" name="num13" id="num13">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num14">Numero 14</label>
                            <input type="number" name="num14" id="num14">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num15">Numero 15</label>
                            <input type="number" name="num15" id="num15">
                        </div>
                        <div class="main__calculadora--form--number">
                            <label for="num16">Numero 16</label>
                            <input type="number" name="num16" id="num16">
                        </div>
                    </article>
                </section>
                <article class="main__calculadora--form--submit">
                    
                        <button type="submit">Calcular Promedio</button>
                    
                </article>
            </form>
        </section>
        <section class="main__calculadora2">
            <section class="main__calculadora2--result">
                <h1>Numero de individuos</h1>
            </section>
            <form action="./php/numeroIndividuos.php" method="post" class="main_calculadora2--form" >
                 <div class="main_calculadora2--form--input">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="main_calculadora2--form--input">
                    <label for="promedio">Promedio</label>
                    <input type="number" name="promedio" id="name" value="<?php echo $result?>" required>
                </div>
                <div class="main_calculadora2--form--input">
                    <button type="submit">Calcular</button>
                </div>
            </form>
        </section>
        <section class="main__calculadora3">
            <section class="main__calculadora3--result">
                <h1>Crecimiento exponencial</h1>
            </section>
            <form action="./php/crecimientoExponencial.php" method="post" class="main_calculadora3--form" >
                <article>
                    <div class="main_calculadora3--form--input">
                        <label for="nInicial">N0 o N inicial</label>
                        <input type="text" name="nInicial" id="nInicial" required>
                    </div>
                    <div class="main_calculadora3--form--input">
                        <label for="nActual">N o N actual</label>
                        <input type="number" name="nActual" id="nActual" required>
                    </div>
                </article>
                <article>
                    <div class="main_calculadora3--form--input">
                        <label for="tInicial">T0 o T inicial</label>
                        <input type="text" name="tInicial" id="tInicial" required>
                    </div>
                    <div class="main_calculadora3--form--input">
                        <label for="tActual">T o T actual</label>
                        <input type="number" name="tActual" id="tActual" required>
                    </div>
                </article>
                <div class="main_calculadora3--form--input">
                    <button type="submit">Calcular</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="footer">
        <section class="footer-credits">
            <h1>Correo: amzaacg@udistrital.edu.co</h1>
            <h1>Nombre: Aida Marcela Zaac Gonzalez</h1>
            <h2>Tel: +57 3209297377</h1>
        </section>
        <section class="footer-contactMe">
            <h1>Contactanos</h1>
            <form action="">
                <div class="fullName">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name">
                    <label for="lastName">Apellido</label>
                    <input type="text" name="lastName" id="lastName">
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="cellphone">
                    <label for="cellphone">Telefono</label>
                    <input type="number" name="cellphone" id="cellphone">
                </div>
                <div class="submit">
                    <input type="submit">
                </div>
            </form>
        </section>
    </footer>
</body>
</html>