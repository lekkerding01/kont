<?php $page='nieuws'; include 'partials/data.php'; ?>
<!doctype html><html lang="nl"><head><?php include 'partials/head.php'; ?><title>Nieuws | Suzan & Freek Fansite</title></head>
<body><?php include 'partials/header.php'; ?>
<main><section class="page-hero"><span class="eyebrow">FANUPDATE</span><h1>Nieuws</h1><p>Een eenvoudige plek voor fanupdates. Voeg hier zelf actuele berichten toe.</p></section>
<section class="section news-grid"><?php foreach($news as $item): ?><article class="news-card"><span><?=htmlspecialchars($item['date'])?></span><h2><?=htmlspecialchars($item['title'])?></h2><p><?=htmlspecialchars($item['text'])?></p><a href="#">Lees meer →</a></article><?php endforeach; ?></section></main>
<?php include 'partials/footer.php'; ?></body></html>