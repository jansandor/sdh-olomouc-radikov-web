<!DOCTYPE html>
<html lang="cs">
<head>
    <?php include 'head.php'; ?>
    <link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body class="grid-container">
<?php include 'header.php'; ?>

<main class="grid-item-main">
    <section class="teaser">
        <h2>Nejbližší akce: <a href="kalendar.php">25. května 2019 | Hasičský pochod</a></h2>
    </section>
    <section class="flex-article-list">
        <article class="flex-article-list-item">
            <header>
                <a href="article-page.php#start"><h2>Bratislava – Rusovce 2018</h2></a>
                <p>19. 9. 2018 | aktualizovano: 19. 9. 2018 15:37</p>
            </header>
            <p>
                Jako každý rok,tak ani letos tomu nebylo jinak,že sestry a bratři hasiči z Hanáckého okrsku jedou podpořit místní borce na jejich krásnou soutěž s historickou technikou v Bratislavě-Rusovcích.
            </p>
            <footer>
                <p>Napsal: <a href="">Honza Novák</a></p>
            </footer>
        </article>
        <?php include 'article-view.php'; ?>
        <?php include 'article-view.php'; ?>
        <?php include 'article-view.php'; ?>
        <?php include 'article-view.php'; ?>
    </section>
</main>
<?php include 'footer.php'; ?>
</body>
</html>