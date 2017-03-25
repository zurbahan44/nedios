<?php
include "functions.php";

$data=madde_list();

?>
<a href="maddeler_add.php">Madde Ekle</a>
<br>
<br>

    <table border="1">
        <tr>
            <th>Madde Başlığı  </th>
            <th>Madde İçeriği   </th>
            <th>İçerik ID    </th>
        </tr>
<?php
foreach ($data as $item)
{
    ?>
    <tr><td><?php echo $item['madde_baslik']; ?> </td>
        <td><?php echo $item['madde_icerik']; ?></td>
        <td><?php echo $item['icerik_id']; ?></td>
        <td><a href="madde_delete.php?id=<?php echo $item['madde_id']; ?>">Sil</a></td>
        <td><a href="madde_update.php?id=<?php echo $item['madde_id']; ?>">Güncelle</a></td>

    </tr>
    <?php
}



?>
    </table>

