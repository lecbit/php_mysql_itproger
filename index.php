<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once "functions/functions.php";
$title = 'Новости обо всем';
require_once "blocks/head.php";
$news = getNews (3, "");
?>
</head>
<body>
    <?php require_once "blocks/header.php"?>
    <div id="wrapper">
        <div id="leftCol">
            <?php
            for($i = 0;$i<count($news);$i++){
                if($i == 0)
                echo "<div id=\"bigArticle\">";
                else
                echo "<div class=\"article\">";
                echo '<img src="img/title_'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'">
                <h2>Статья '.$news[$i]["title"].'</h2>
                <p>'.$news[$i]['intro_text'].'</p>
                <a href="/article.php?id='.$news[$i]["id"].'"><div class="more">Далее</div></a>
            </div>';
            }
            if($i == 0)
            echo "<div class=\"clear\"><br></div>";
            ?>
            <!-- <div id="bigArticle">
                <img src="img/title_1.jpg" alt="Статья 1">
                <h2>Статья 1</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione dolorem fugit autem velit explicabo! Repellat obcaecati officiis repudiandae molestias animi similique in, veritatis quae ipsam doloremque, ex tempore illum nobis reiciendis accusamus! Quaerat quos itaque, esse quis corrupti dolorum omnis veniam fugiat eos voluptatibus quas. Explicabo ad tenetur ducimus quas iure dolore corrupti exercitationem cum provident. Aliquam placeat mollitia atque maiores dolor molestiae autem, maxime dolorum amet minus saepe vero optio, sed minima molestias soluta quasi distinctio cupiditate perferendis natus porro eligendi voluptatibus nulla corrupti. Quo dolorum perferendis dignissimos id, deserunt, numquam ipsam voluptatem accusantium fuga rerum voluptatibus sequi!</p>
                <a href="/article.php"><div class="more">Далее</div></a>
            </div>
            <div class="clear"><br></div>
            <div class="article">
            <img src="img/title_2.jpg" alt="Статья 1">
                <h2>Статья 1</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione dolorem fugit autem velit explicabo! Repellat obcaecati officiis repudiandae molestias animi similique in, veritatis quae ipsam doloremque, ex tempore illum nobis reiciendis accusamus! Quaerat quos itaque, esse quis corrupti dolorum omnis veniam fugiat eos voluptatibus quas. Explicabo ad tenetur ducimus quas iure dolore corrupti exercitationem cum provident. Aliquam placeat mollitia atque maiores dolor molestiae autem, maxime dolorum amet minus saepe vero optio, sed minima molestias soluta quasi distinctio cupiditate perferendis natus porro eligendi voluptatibus nulla corrupti.</p>
                <a href="/article.php"><div class="more">Далее</div></a>
            </div>
            <div class="article">
                <img src="img/title_3.jpg" alt="Статья 1">
                <h2>Статья 1</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione dolorem fugit autem velit explicabo! Repellat obcaecati officiis repudiandae molestias animi similique in, veritatis quae ipsam doloremque, ex tempore illum nobis reiciendis accusamus! Quaerat quos itaque, esse quis corrupti dolorum omnis veniam fugiat eos voluptatibus quas. Explicabo ad tenetur ducimus quas iure dolore corrupti exercitationem cum provident. Aliquam placeat mollitia atque maiores dolor molestiae autem, maxime dolorum amet minus saepe vero optio, sed minima molestias soluta quasi distinctio cupiditate perferendis natus porro eligendi voluptatibus nulla corrupti.</p>
                <a href="/article.php"><div class="more">Далее</div></a>
            </div> -->
        </div>
        <?php require_once "blocks/rightCol.php"?>
    </div>
    <?php require_once "blocks/footer.php"?>
</body>
</html>