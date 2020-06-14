<html>
<body>
    <?php
    echo "<right>";
    echo "<table border>";

    echo "<tr>";
    echo "<td> NIM </td>";
    echo "<td>".$_POST['NIM']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama</td>";
    echo "<td>".$_POST['NAMA']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin</td>";
    echo "<td>".$_POST['KELAMIN']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Alamat</td>";
    echo "<td>".$_POST['ALAMAT']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Program Studi</td>";
    echo "<td>".$_POST['PRODI']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Bahasa Pemograman yang dikuasai</td>";
    echo "<td>".$_POST['PEMOGRAMAN']."</td>";
    echo "</tr>";

    echo "</table>";
    echo "</right>";
    ?>
</body>
</html>