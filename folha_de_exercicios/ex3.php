<?php
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lado = floatval($_POST['lado']);
    $area = $lado * $lado;
    $result = "A área do quadrado de lado {$lado} metros é {$area} metros quadrados";
}
?>
<!doctype html><html><meta charset="utf-8"><body>
<h2>Exercício 3 — área do quadrado</h2>
<form method="post">
 Lado (m): <input name="lado" type="number" step="any" required>
 <button>Calcular</button>
</form>
<?php if($result): ?><p><?=htmlspecialchars($result)?></p><?php endif; ?>
</body></html>
