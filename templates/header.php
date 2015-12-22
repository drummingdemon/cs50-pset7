<!DOCTYPE html>

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>C$50 Finance: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>C$50 Finance</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                    <a href="/"><img alt="C$50 Finance" src="/img/logo.gif"/></a>
            </div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li role="presentation" <?php if (isset($title) && $title == "Quote") echo 'class="active"'; ?>><a href="quote.php"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;</span>Quote</a></li>
                            <li role="presentation" <?php if (isset($title) && $title == "Portfolio") echo 'class="active"'; ?>><a href="/"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;</span>Portfolio</a></li>
                            <li role="presentation" <?php if (isset($title) && $title == "Sell") echo 'class="active"'; ?>><a href="sell.php"><span class="glyphicon glyphicon-usd" aria-hidden="true">&nbsp;</span>Sell</a></li>
                            <li role="presentation" <?php if (isset($title) && $title == "Buy") echo 'class="active"'; ?>><a href="buy.php"><span class="glyphicon glyphicon-plus" aria-hidden="true">&nbsp;</span>Buy</a></li>
                            <li role="presentation" <?php if (isset($title) && $title == "History") echo 'class="active"'; ?>><a href="history.php"><span class="glyphicon glyphicon-book" aria-hidden="true">&nbsp;</span>History</a></li>
                            <li role="presentation" <?php if (isset($title) && $title == "Add To Wallet") echo 'class="active"'; ?>><a href="add.php"><span class="glyphicon glyphicon-plus" aria-hidden="true">&nbsp;</span>Add To Wallet</a></li>
                            <li role="presentation"><a href="logout.php"><span class="glyphicon glyphicon-send" aria-hidden="true">&nbsp;</span>Log out</a></li>
                        </ul>
                    </div>
                </nav>

            <div id="middle">
