<?php
$pastas = array(
  "bsn" => array(
    "3a Fase" => array("desenvWeb","bancoDados 1","engSoft 1"),
    "4a Fase" => array("Intro Web","bancoDados 2","engSoft 2")
  )
);

function imprimeArvore($arr) {
    echo "<ul>";
    foreach ($arr as $key => $val) {
        if (is_array($val)) {
            echo "<li>" . htmlspecialchars($key);
            imprimeArvore($val);
            echo "</li>";
        } else {
            echo "<li>" . htmlspecialchars($val) . "</li>";
        }
    }
    echo "</ul>";
}
?>
<!doctype html><html><meta charset="utf-8"><body>
<h2>Exercício 10 — Árvore recursiva</h2>
<?php imprimeArvore($pastas); ?>
</body></html>
