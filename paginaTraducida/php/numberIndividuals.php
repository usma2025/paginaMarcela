<?php
$name = $_REQUEST['name'];
$promedio = intval($_REQUEST['promedio']);
$result = $promedio*25*50*1000;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../pagina/styleCalculadora.css">
</head>
<body>
    <header class="header">
        <img src="../../img/logo.jpeg" alt="" class="header__img--logo">
        <h1 class="header__title">Bacteria quantification</h1>
    </header>
    <main class="main">
        <nav class="navResult">
            <section class="main__section">
                <article class="main__article">
                    <h1>researcher <?php echo $name ?> the number of individuals (N) is (cells/mL)</h1>
                </article>
                <article class="main__article">
                    <h1><?php echo $result ?></h1>
                </article>
                <div class="main_div">
                    <a href="../calculator.php"><button>Return</button></a>
                </div>
            </section>
        </nav>
    </main>
</body>
</html>