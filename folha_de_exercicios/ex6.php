<?php
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // preços por kg e quantidades
    $itens = [
        'maçã' => ['preco' => floatval($_POST['preco_maca']), 'qtd' => floatval($_POST['qtd_maca'])],
        'melancia' => ['preco' => floatval($_POST['preco_melancia']), 'qtd' => floatval($_POST['qtd_melancia'])],
        'laranja' => ['preco' => floatval($_POST['preco_laranja']), 'qtd' => floatval($_POST['qtd_laranja'])],
        'repolho' => ['preco' => floatval($_POST['preco_repolho']), 'qtd' => floatval($_POST['qtd_repolho'])],
        'cenoura' => ['preco' => floatval($_POST['preco_cenoura']), 'qtd' => floatval($_POST['qtd_cenoura'])],
        'batatinha' => ['preco' => floatval($_POST['preco_batatinha']), 'qtd' => floatval($_POST['qtd_batatinha'])]
    ];
    $total = 0.0;
    foreach ($itens as $nome => $v) {
        $total += $v['preco'] * $v['qtd'];
    }
    $disponivel = 50.0;
    if (abs($total - $disponivel) < 0.0001) {
        $msg = "<p style='color:green'>Saldo esgotado. Total da compra: R$ ".number_format($total,2,',','.')."</p>";
    } elseif ($total > $disponivel) {
        $faltou = $total - $disponivel;
        $msg = "<p style='color:red'>Faltou R$ ".number_format($faltou,2,',','.')." (total: R$ ".number_format($total,2,',','.').")</p>";
    } else {
        $sobra = $disponivel - $total;
        $msg = "<p style='color:blue'>Ainda pode gastar R$ ".number_format($sobra,2,',','.')." (total: R$ ".number_format($total,2,',','.').")</p>";
    }
}
?>
<!doctype html><html><meta charset="utf-8"><body>
<h2>Exercício 6 — compra do Joãozinho</h2>
<form method="post">
  <!-- para cada produto: preço por kg e quantidade em kg -->
  <h3>Maçã</h3> Preço/kg: <input name="preco_maca" type="number" step="any" required> Qtd(kg): <input name="qtd_maca" type="number" step="any" required><br>
  <h3>Melancia</h3> Preço/kg: <input name="preco_melancia" type="number" step="any" required> Qtd(kg): <input name="qtd_melancia" type="number" step="any" required><br>
  <h3>Laranja</h3> Preço/kg: <input name="preco_laranja" type="number" step="any" required> Qtd(kg): <input name="qtd_laranja" type="number" step="any" required><br>
  <h3>Repolho</h3> Preço/kg: <input name="preco_repolho" type="number" step="any" required> Qtd(kg): <input name="qtd_repolho" type="number" step="any" required><br>
  <h3>Cenoura</h3> Preço/kg: <input name="preco_cenoura" type="number" step="any" required> Qtd(kg): <input name="qtd_cenoura" type="number" step="any" required><br>
  <h3>Batatinha</h3> Preço/kg: <input name="preco_batatinha" type="number" step="any" required> Qtd(kg): <input name="qtd_batatinha" type="number" step="any" required><br>
  <button>Calcular Compra</button>
</form>
<?php if($msg) echo $msg; ?>
</body></html>
