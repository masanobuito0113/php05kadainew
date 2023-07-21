
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>   
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    div {
        padding: 10px;
        font-size: 16px;
    }
    </style>
</head>

<body id "main">
        <h1 class="mt-3 mx-3">KADAI PHP 05</h1>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-1 mb-1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4"
                aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="list.php">text一覧</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">新しく登録</a>
                </li>
            </ul>
            </div>
        </nav>

        <?= $content ?>
</body>
</html>