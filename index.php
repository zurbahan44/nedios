<?php
$title = "asdasde";
include "header.php";
?>
<?php
$stmt=$pdo->query("SELECT * FROM icerik");
foreach ($stmt as $key=>$listele): ?>

<center>
<div style="display: inline-block;width: 492px">
    <h1><?php echo $listele['icerik_title'];?></h1>
    <a href="detay.php?id=<?php echo $listele['icerik_id'];?>"> <img width="492" height="262" src="http://lorempixel.com/492/262/sports/1/" alt="Adamın Bacağı Koptu" title="Adamın Bacağı Koptu"/>
    </a>

    <p><?php echo $listele['icerik_desc'];?></p>
</div>
    <?php endforeach; ?>
<div style="margin-left:30px;display: inline-block;width: 492px">

</center>


<?php
include "footer.php";
?>