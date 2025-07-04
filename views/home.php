<?php
    $newsArray = $data['newsForPage'];
    $isDetailPage = false;
?>
   
    
    <div class="banner">
        <div class="banner__image__container">
            <img src="<?php echo asset('/images/' . $data['lastNews']['image'])?>" alt="banner image" class="banner__image">
        </div>
        <div class="banner__text">
            <div class="banner__text__title"><?php echo htmlspecialchars($data['lastNews']['title']) ?></div>
            <div class="banner__text__description">
                <?php echo $data['lastNews']['announce'] ?>
            </div>
            
        </div>
    </div>
    <main class="main">
        <h2 class="title">Новости</h2>
        <div class="news__container">
            <?php foreach($newsArray as $news): ?>
                <?php include 'components/newsCard.php'?>
            <?php endforeach?>
        </div>
        <div class="pagination">
            <div class="pagination__btns">
                <?php
                    if($data['currentPage'] == 1){
                        echo '<button class="btn pagination__btn arrow back hidden">&#8592;</button>';
                    } else {
                        echo '<button class="btn pagination__btn arrow back">&#8592;</button>';
                    }
                    for ($i = 1; $i <= $data['totalPages']; $i++) { 
                        if ($i == $data['currentPage']) {
                            echo '<button class="btn pagination__btn active" disabled>'.$i.'</button>';
                        } else {
                            echo '<button class="btn pagination__btn">'.$i.'</button>';
                        }
                    }
                    if($data['currentPage'] == $data['totalPages']){
                        echo '<button class="btn pagination__btn arrow back hidden">&#8594;</button>';
                    } else {
                        echo '<button class="btn pagination__btn arrow forward">&#8594;</button>';
                    }
                ?>
            </div>
        </div>
    </main>

</div>