<?php
$c = 8654.00;
// taxa inicia 2% para 24x e aumenta 0.3% para cada opção seguinte
$options = [
    24 => 0.02,
    36 => 0.02 + 0.003,
    48 => 0.02 + 0.003*2,
    60 => 0.02 + 0.003*3
];

$results = [];
foreach ($options as $n => $i) {
    // Montante composto: M = C * (1 + i)^n
    $montante = $c * pow((1 + $i), $n);
    $parcela = $montante / $n;
    $results[$n] = ['i'=>$i, 'montante'=>$montante, 'parcela'=>$parcela];
}
?>
<!doctype html><html><meta charset="utf-8"><body>
<h2>Exercício 9 — juros compostos</h2>
<p>Valor à vista: R$ <?=number_format($c,2,',','.')?></p>
<table border="1" cellpadding="6">
<tr><th>Parcelas</th><th>Taxa (por período)</th><th>Montante total</th><th>Parcela</th></tr>
<?php foreach($results as $n=>$r): ?>
<tr>
  <td><?=$n?></td>
  <td><?=number_format($r['i']*100,3)?>%</td>
  <td>R$ <?=number_format($r['montante'],2,',','.')?></td>
  <td>R$ <?=number_format($r['parcela'],2,',','.')?></td>
</tr>
<?php endforeach; ?>
</table>
</body></html>
