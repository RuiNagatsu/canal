<?php
//$nome = $_GET['nome'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$nome = '';
$periodo = '';
$nome = $_POST['nome'];
$periodo = $_POST['periodo'];
}
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <title>Primeira Aplicação</title>
</head>
<body>
<h1>  
<?php if($periodo == 'm'): ?>
        Bom dia <?= $nome ?>
        <?php elseif($periodo == 't'): ?>
            boa tarde <?= $nome ?>
            <?php elseif($periodo == 'n'): ?>
                boa noite <?= $nome ?>
                <?php endif ?>
                </h1> 
    <h1>OLÁ</h1>
    <form action="?index.php" method="post">
        <label for="periodo">Selecione o Período</label>
        <select name="periodo">
            <option value="m">Manhã</option>
            <option value="t">Tarde</option>
            <option value="n">Noite</option>
        </select>
         <br> <br>
        <input type="text" name="nome" id="nome"/>
        <button type="submit">enviar</button>
    </form>
</body>
</html>