<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #333;
            padding: 5px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
        <h1>Tabuada de Multiplicação</h1>
        <table>
            <thead>
                <tr>
                    <th>x</th>
                    <?php 
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<th>$i</th>";
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<tr>";
                        echo "<th>$i</th>"; // primeira coluna com o número base da tabuada
                        for ($j = 1; $j <= 10; $j++) {
                            $resultado = $i * $j;
                            echo "<td>$resultado</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>
    <?php require "footer.php"; ?>
</body>
</html>
