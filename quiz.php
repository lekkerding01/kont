<?php
$page='quiz';
$questions = [
 ['q'=>'Welke twee personen vormen Suzan & Freek?','a'=>['Suzan Stortelder en Freek Rikkerink','Suzan de Jong en Freek Janssen','Suzan Bakker en Freek Smit'],'correct'=>0],
 ['q'=>'Wat maken Suzan & Freek vooral?','a'=>['Muziek','Films','Podcasts'],'correct'=>0],
 ['q'=>'Wat is een bekende manier waarop fans muziek kunnen beluisteren?','a'=>['Via streamingdiensten','Alleen op cassette','Alleen in de bioscoop'],'correct'=>0],
];
?>
<!doctype html><html lang="nl"><head><?php include 'partials/head.php'; ?><title>Fanquiz | Suzan & Freek Fansite</title></head>
<body><?php include 'partials/header.php'; ?>
<main><section class="page-hero"><span class="eyebrow">TEST JE KENNIS</span><h1>Fanquiz</h1><p>Drie vragen. Hoeveel weet jij?</p></section>
<section class="section quiz-wrap"><form id="quiz"><?php foreach($questions as $i=>$question): ?><fieldset><legend><?=($i+1)?>. <?=htmlspecialchars($question['q'])?></legend><?php foreach($question['a'] as $j=>$answer): ?><label><input type="radio" name="q<?=$i?>" value="<?=$j?>"> <?=htmlspecialchars($answer)?></label><?php endforeach; ?></fieldset><?php endforeach; ?><button class="btn btn-dark" type="submit">Bekijk score</button></form><div id="result" class="result" hidden></div></section></main>
<script>
const correct = <?=json_encode(array_column($questions,'correct'))?>;
document.getElementById('quiz').addEventListener('submit', e => {
 e.preventDefault(); let score=0;
 correct.forEach((c,i)=>{const x=document.querySelector(`input[name="q${i}"]:checked`); if(x && Number(x.value)===c) score++;});
 const r=document.getElementById('result'); r.hidden=false; r.innerHTML=`<strong>${score}/3 goed!</strong><br>${score===3?'Jij bent een echte fan.':'Leuk geprobeerd — luister nog wat muziek en probeer het opnieuw!'}`;
});
</script>
<?php include 'partials/footer.php'; ?></body></html>