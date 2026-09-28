<?php
$page = 'home';
$nav = [
  'home' => ['label' => 'Home', 'url' => 'index.php'],
  'over-ons' => ['label' => 'Over Suzan & Freek', 'url' => 'over-ons.php'],
  'muziek' => ['label' => 'Muziek', 'url' => 'muziek.php'],
  'nieuws' => ['label' => 'Nieuws', 'url' => 'nieuws.php'],
  'quiz' => ['label' => 'Quiz', 'url' => 'quiz.php'],
];
?>
<!doctype html>
<html lang="nl">
<head>
  <?php include 'partials/head.php'; ?>
  <title>Suzan & Freek Fansite</title>
</head>
<body>
<?php include 'partials/header.php'; ?>

<main>
  <section class="hero">
    <div class="hero-content">
      <span class="eyebrow">DE FANSPOT VOOR LIEFHEBBERS</span>
      <h1>Suzan<br><em>&amp;</em> Freek</h1>
      <p>Een onafhankelijke fansite voor iedereen die graag luistert, meezingt en alles rond Suzan &amp; Freek volgt.</p>
      <div class="hero-buttons">
        <a class="btn btn-light" href="muziek.php">Ontdek de muziek</a>
        <a class="btn btn-outline" href="over-ons.php">Meer over het duo</a>
      </div>
    </div>
    <div class="hero-card">
      <div class="vinyl"><span>SUZAN<br>&amp; FREEK</span></div>
      <p>♪ Muziek die je<br>blijft meezingen</p>
    </div>
  </section>

  <section class="section intro">
    <div>
      <span class="eyebrow">WELKOM</span>
      <h2>Voor fans, door fans.</h2>
    </div>
    <p>Van bekende hits tot mooie momenten uit hun carrière: op deze fansite vind je een overzicht van muziek, nieuws, achtergrond en een leuke quiz.</p>
  </section>

  <section class="cards section">
    <a class="feature-card" href="muziek.php"><span>01</span><h3>Muziek</h3><p>Bekijk een overzicht van nummers en albums.</p><b>Bekijk →</b></a>
    <a class="feature-card" href="over-ons.php"><span>02</span><h3>Het duo</h3><p>Lees meer over Suzan &amp; Freek en hun muzikale verhaal.</p><b>Lees meer →</b></a>
    <a class="feature-card" href="quiz.php"><span>03</span><h3>Fanquiz</h3><p>Hoe goed ken jij Suzan &amp; Freek?</p><b>Start de quiz →</b></a>
  </section>

  <section class="quote section">
    <div class="quote-mark">“</div>
    <blockquote>Dit is een fansite en geen officiële website van Suzan &amp; Freek.</blockquote>
    <p>Deze website is gemaakt voor fans en bevat geen officiële vertegenwoordiging of samenwerking.</p>
  </section>
</main>

<?php include 'partials/footer.php'; ?>
</body>
</html>