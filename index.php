<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Contador de Visitas</title>
<style>body{font-family:Arial;text-align:center;padding:80px 20px;background:#1a1a2e;color:#eee}
.counter{font-size:4em;color:#e94560;font-weight:bold}.info{color:#aaa;margin-top:20px}</style>
</head>
<body>
<h1>Bem-vindo!</h1>
<p>Voce e o visitante numero</p>
<div class="counter"><?php
$f="contador.txt";$c=file_exists($f)?(int)file_get_contents($f):0;$c++;file_put_contents($f,$c);echo $c;
?></div>
<p class="info">IP: <?php echo $_SERVER["REMOTE_ADDR"]; ?></p>
<p class="info">Data: <?php echo date("d/m/Y H:i:s"); ?></p>
</body></html>
