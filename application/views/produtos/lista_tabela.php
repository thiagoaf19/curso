<!DOCTYPE html>
<html lang=<"en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Produtos</h1>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // variável produtos veio do Controller
            // permite percorrer a lista de produtos
            foreach($produtos as $p){ //$p: permite trabalhar com mais linhas
                echo "<tr>".
                    "  <td>".$p->codigo."</td>". 
                    "  <td>".$p->nome."</td>".
                    "  <td>".$p->preco."</td>".
                    "</tr>";
                }
        ?>
        </tbody>
    </table>
</body>
</html>