<?php $page='over-ons'; include 'partials/data.php'; ?>
<!doctype html><html lang="nl"><head><?php include 'partials/head.php'; ?><title>Over Suzan & Freek | Fansite</title></head>
<body><?php include 'partials/header.php'; ?>
<main>
<section class="page-hero"><span class="eyebrow">HET VERHAAL</span><h1>Suzan &amp; Freek</h1><p>Een plek om het muzikale verhaal van het Nederlandse duo te ontdekken.</p></section>
<section class="section split">
  <div><span class="eyebrow">SAMEN MUZIEK MAKEN</span><h2>Van covers naar een eigen geluid.</h2></div>
  <div><p>Suzan Stortelder en Freek Rikkerink vormen samen het bekende Nederlandse duo Suzan &amp; Freek. Ze werden breed bekend met hun muziekvideo's en covers en bouwden daarna verder aan een eigen carrière.</p><p>Op deze fansite houden we het verhaal overzichtelijk en laten we ruimte voor hun muziek, optredens en momenten die fans herkennen.</p></div>
</section>
<section class="section timeline">
<?php foreach($timeline as $item): ?><article><strong><?=htmlspecialchars($item['year'])?></strong><div><h3><?=htmlspecialchars($item['title'])?></h3><p><?=htmlspecialchars($item['text'])?></p></div></article><?php endforeach; ?>
</section>
</main><?php include 'partials/footer.php'; ?></body></html>