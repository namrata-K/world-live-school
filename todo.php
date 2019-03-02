<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="Simple todo app made with HTML5, CSS3,
    PHP, MySQL, jQuery and Bootstrap" />
    <meta name="author" content="ivke11080" />

    <meta property="og:title" content="Minimal Todo" />
    <meta property="og:type" content="application" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="Simple todo web app made with
    html, css, php, mysql, bootstrap and jquery" />

    <title>Minimal Todo</title>

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!--[if lt IE 9]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js">
        </script>
    <![endif]-->
</head>
<body>

    <div class="container">
        <div class="add-todo">
            <p class="add-par">
                Add new todo (Double click to remove):
            </p>
            <div class="input-group">
                <input type="text" class="form-control input-box"
                placeholder="Enter new todo here..." />
                <span class="input-group-addon post" type="submit">
                    <i class="glyphicon glyphicon-plus"></i>
                </span>
            </div>
        </div>
        <div class="output">
            <?php require('show_posts.php'); ?>
        </div>
    </div>

    <!-- js scripts -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
