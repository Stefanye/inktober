<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Inktober project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="/dist/css/main.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <span class="header_wrapper">
            <img class="header_wrapper_logo" src="/img/inktober_logo.png" alt="Inktober">
        </span>
    </header>

    <main class="content" role="main">
        <div class="content_container">
            <h1 class="content_container_title">Project by <a href="http://schatten.hu" target="_blank">Stefanie</a></h1>

            <?php include('2017.php') ?>
        </div>
    </main>

    <footer class="footer">
        <div class="footer_container">
            <a href="http://schatten.hu">schatten.hu</a> &copy; <?php echo date("Y"); ?>
        </div>
    </footer>
</body>
</html>
