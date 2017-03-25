<?php include "header.php"; ?>

<?php
$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM icerik WHERE icerik_id=$id");
$data = $stmt->fetch();
?>
    <center> <div id="main">
        <div style="display: inline-block;width: 492px">
            <h1><?php echo $data['icerik_title'];?></h1>
                <img width="492" height="262" src="http://lorempixel.com/492/262/sports/1/" alt="Adamın Bacağı Koptu"
                     title="Adamın Bacağı Koptu">
            <p>Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana
                klasik
                Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan
                Latince profesörü
                Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan
                'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa </p>
        </div>
    </div>
<hr>
<h2>Maddeler</h2>
<?php
$stmt=$pdo->query("SELECT * FROM madde");
foreach ($stmt as $key=>$listele): ?>


    <div style="display: inline-block;width: 492px">
        <h3><?php echo $listele['madde_id'];?> - <?php echo $listele['madde_baslik'];?></h3>
        <img width="492" height="262" src="http://lorempixel.com/492/262/sports/1/" alt="Adamın Bacağı Koptu" title="Adamın Bacağı Koptu"/>

        <p><?php echo $listele['madde_icerik'];?></p>
    </div><br>
<?php endforeach; ?>
    </center>
<?php include "footer.php"; ?>