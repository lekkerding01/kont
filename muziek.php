<?php $page='muziek'; include 'partials/data.php'; ?>
<!doctype html><html lang="nl"><head><?php include 'partials/head.php'; ?><title>Muziek | Suzan & Freek Fansite</title></head>
<body><?php include 'partials/header.php'; ?>
<main><section class="page-hero"><span class="eyebrow">DE PLAYLIST</span><h1>Muziek</h1><p>Een fanoverzicht van nummers en releases. Controleer officiële streamingdiensten voor de actuele catalogus.</p></section>
<section class="section">
<div class="music-grid"><?php foreach($songs as $i=>$song): ?><article class="song-card"><div class="song-number"><?=str_pad($i+1,2,'0',STR_PAD_LEFT)?></div><div><h3><?=htmlspecialchars($song[0])?></h3><p><?=htmlspecialchars($song[1])?></p></div><span>♪</span></article><?php endforeach; ?></div>
</section></main><?php include 'partials/footer.php'; ?></body></html>