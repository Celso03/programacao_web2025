<?php
// Exemplo usando C = 8654 (valor à vista)
// Taxa inicial 1.5% para 24x, aumenta 0.5% para cada nível (36,48,60)
$c = 8654.00;
$options = [
    24 => 0.015,
    36 => 0.015 + 0.005,
    48 => 0.015 + 0.005*2,
    60 => 0.015 + 0.005*3
];

$results = [];
foreach ($options as $n => $i) {
    // Juros simples: montante = C * (1 + i * n)
    $montante = $c * (1 + $i * $n);
    $parcela = $montante / $n;
    $results[$n] = ['i'=>$i, 'montante'=>$montante, 'parcela'=>$parcela];
}
?>
<!doctype html><html><meta charset="utf-8"><body>
<h2>Exercício 8 — juros simples</h2>
<p>Valor à vista: R$ <?=number_format($c,2,',','.')?></p>
<table border="1" cellpadding="6">
<tr><th>Parcelas</th><th>Taxa (por período)</th><th>Montante total</th><th>Parcela</th></tr>
<?php foreach($results as $n=>$r): ?>
<tr>
  <td><?=$n?></td>
  <td><?=($r['i']*100).'%'?></td>
  <td>R$ <?=number_format($r['montante'],2,',','.')?></td>
  <td>R$ <?=number_format($r['parcela'],2,',','.')?></td>
</tr>
<?php endforeach; ?>
</table>
</body></html>
