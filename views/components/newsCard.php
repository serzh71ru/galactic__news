<?php
    $datetime = new DateTime($news['date']);
    $date = $datetime->format('d.m.Y')
?>
<div class="card">
    <div class="card__date">
        <?php echo $date ?>
    </div>
    <h2 class="card__title">
        <?php 
            if ($isDetailPage) {
                echo $news['announce'];
            } else {
                echo $news['title'];
            }
        ?>
    </h2>
    <div class="card__description">
        <?php
            if ($isDetailPage) {
                echo $news['content'];
            } else {
                echo $news['announce'];
            }
        ?>
    </div>
    <div class="card__btn">
        <?php
            if ($isDetailPage) {
                echo '<a href="' . htmlspecialchars($backUrl) .'" class="btn">
                <span class="arrow">&#8592;</span>
                        НАЗАД К НОВОСТЯМ 
                    </a>';
            } else {
                echo '<a href="/public/?id='.$news['id'].'" class="btn">
                        ПОДРОБНЕЕ 
                        <span class="arrow">&#8594;</span>
                    </a>';
            }
        ?>
        
    </div>
</div>