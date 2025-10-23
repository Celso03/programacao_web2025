<?php
// Dados do enunciado
$valor_avista = 22500.00;
$parcelas = 60;
$valor_parcela = 489.65;
$total_pago = $valor_parcela * $parcelas;
$juros = $total_pago - $valor_avista;
?>
<!doctype html><html><meta charset="utf-8"><body>
<h2>Exercício 7 — juros pagos no financiamento</h2>
<p>Valor à vista: R$ <?=number_format($valor_avista,2,',','.')?></p>
<p>Parcelas: <?= $parcelas ?> x R$ <?=number_format($valor_parcela,2,',','.')?></p>
<p>Total pago: R$ <?=number_format($total_pago,2,',','.')?></p>
<p><strong>Juros pagos (Total pago - À vista): R$ <?=number_format($juros,2,',','.')?></strong></p>
</body></html>
