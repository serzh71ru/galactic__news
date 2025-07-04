<?php
    $isDetailPage = true;
?>
<hr>
    <main class="main">
        <div class="container">
            <div class="breadcrumbs">
                <a href="/public/">Главная</a>
                <?php foreach ($breadcrumbs as $name => $url): ?>
                    &nbsp;/&nbsp;
                    <?php if ($url): ?>
                        <a href="<?= htmlspecialchars($url) ?>"><?= htmlspecialchars($name) ?></a>
                    <?php else: ?>
                        <span><?= htmlspecialchars($name) ?></span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <h1><?php echo $news['title']?></h1>
            <div class="news__content">
                <?php include 'components/newsCard.php'?>
                <div class="news__image">
                    <img src="<?php echo asset('/images/' . $news['image'])?>" alt="image">
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>