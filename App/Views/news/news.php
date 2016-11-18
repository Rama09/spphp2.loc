<?php foreach ($news as $item) : ?>
    <div>
        <a href="/article.php?id=<?= $item->id ?>"><?= $item->name ?></a>
        <div><?= $item->description ?></div>
    </div>
    <br>
<?php endforeach; ?>