<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Inktober project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto+Condensed:400,700|Roboto+Slab:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="/dist/css/main.css" rel="stylesheet">
    <script src="/dist/js/main.js"></script>
</head>
<body>
    <header class="header">
        <span class="header_wrapper">
            <img class="header_wrapper_logo" src="/img/inktober_logo.png" alt="Inktober">
        </span>
    </header>

    <main class="content" role="main">
        <div class="content_container">
            <h1 class="content_container_title">Project by <a href="https://schatten.hu" target="_blank">Stefanie</a></h1>

            <nav class="navigation" role="navigation">
                <ul class="navigation_list">
                    <li class="navigation_list_item">
                        <a class="navigation_list_item_link otherStyle isActive" href="/">Drawings</a>
                    </li>
                    <li class="navigation_list_item">
                        <a class="navigation_list_item_link otherStyle" href="/tools.php">Tools</a>
                    </li>
                </ul>
            </nav>

            <?php include('2017.php') ?>
        </div>
    </main>

    <footer class="footer">
        <div class="footer_container">
            <a href="https://schatten.hu">schatten.hu</a> &copy; <?php echo date("Y"); ?> - A <a href="https://github.com/Stefanye/inktober" target="_blank">Github</a> project.
        </div>
    </footer>

    <script>
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
        })
    </script>
</body>
</html>
