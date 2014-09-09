<html>
<head>
    <title>Matajuegos - Con una aerodinámica a tu gusto!</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="resources/css/main.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans|Fugaz+One|Jockey+One|Jura:400,600|Orbitron:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
</head>
<body>
<header>
    <a href="index.php" id="logo">
        <h1>MataJuegos</h1>
        <h2>Con una aerodinámica a tu gusto!</h2>
    </a>
    <nav>
        <ul id="menu">
            <li><a href="index.php"><img src="resources/img/home.png" title="Inicio"></a></li>
            <li><a href=""><img src="resources/img/news.png" title="Notícias"></a></li>
            <li><a href=""><img src="resources/img/categories.png" title="Categorías"></a></li>
            <li><a href=""><img src="resources/img/top10.png" title="Top 10"></a></li>
        </ul>
        <input type="text" placeholder="Buscar" id="search">
<!--        TODO: Cambiar el icono del buscador para que sea el botón de buscar.-->
        <ul id="login">
            <li><a href=""><img src="resources/img/interrogante.png" title="Anónimo"></a></li>
            <li><a href=""><img src="resources/img/power.png" title="Inicia sesión"></a></li>
            <li><a href=""><img src="resources/img/register2.png" title="Regístrate"></a></li>
        </ul>
    </nav>
</header>

<script>
    $(function() {
        $( document ).tooltip({
            show: null,
            position: {
                my: "left bottom",
                at: "left top"
            },
            open: function( event, ui ) {
                ui.tooltip.animate({ top: ui.tooltip.position().top + 0 }, "fast" );
            }
        });
    });
</script>
</body>
</html>