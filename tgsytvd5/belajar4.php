<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>latihan4</title>
    <style>
        .warna-baris {
            background-color: yellow;
        }
        </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php
    for( $i = 1; $i <= 6; $i++ ) {
        echo "<tr>";
        for( $j = 1; $j <= 5; $j++) {
            echo "<td>1,1</td>";
            echo "<td>1,5</td>";
            echo "<td>2,5</td>";
        }
    }
    echo "</tr>";
?>
</table>


<table border="1" celpadding="10" cellspacing="0">
   <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1) :?>
            <tr class="warna-baris"></tr>
    <?php endif; ?>
    <?php for( $j = 1; $j <= 5; $j++ ) : ?>
        <td><?= "$i, $j"; ?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>

    </table>


    
</body>
</html>