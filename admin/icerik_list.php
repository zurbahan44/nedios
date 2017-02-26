<?php
include "functions.php";

$data=icerik_list();

?>

<table>
    <td>
        <tr>İçerik Başlığı </tr>
        <tr>İçerik Kategorisi </tr>
        <tr>İçerik Açıklaması </tr>
        <tr>Üye ID Numarası </tr>
    </td>
</table>
<?php
foreach ($data as $item)
{
    ?>
<tr><td><?php echo $item['icerik_title']; ?> </td>
    <td><?php echo $item['icerik_kategori']; ?></td>
    <td><?php echo $item['icerik_desc']; ?></td>
    <td><?php echo $item['uye_id']; ?></td>
    <td><a href="icerik_delete.php?id=<?php echo $item['icerik_id']; ?>">Sil</a></td>
</tr>
<?php
}

?>
