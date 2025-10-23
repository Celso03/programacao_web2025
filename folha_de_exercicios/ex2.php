<?php
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = intval($_POST['n']);
    if ($n % 2 === 0) $msg = "Valor divisível por 2";
    else $msg = "O valor não é divisível por 2";
}
?>
<!doctype html><html><meta charset="utf-8"><body>
<h2>Exercício 2 — divisível por 2</h2>
<form method="post">
  Número: <input type="number" name="n" required>
  <button>Testar</button>
</form>
<?php if ($msg): ?><p><?=htmlspecialchars($msg)?></p><?php endif; ?>
</body></html>
