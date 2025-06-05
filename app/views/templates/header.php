<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Site</title>
    <link rel="stylesheet" href="/movie/public/assets/css/style.css">
</head>
<body>
<header>
    <div class="user-info">
        Logged in as: <?= htmlspecialchars($_SESSION['user']['username']) ?> 
        <br/>
        (<a class="log-out" href="/movie/public/logout.php">Log Out?</a>)
    </div>
    <h1>Find the Perfect Movie</h1>
    <nav>
        <ul>
            <li><a href="/movie/index.php?action=movies">Home</a></li>
            <li><a href="/movie/index.php?action=discussion">Discussion</a></li>
            <li><a href="/movie/app/views/statistic.php">Statistic</a></li>
            <li><a href="http://localhost:5000/form">Getting bored?</a></li>
        </ul>
    </nav>
</header>