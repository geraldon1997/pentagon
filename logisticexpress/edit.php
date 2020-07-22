<?php require_once 'html_header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $se = $_POST['se'];
    $re = $_POST['re'];
    $sa = $_POST['sa'];
    $ra = $_POST['ra'];
    $na = $_POST['na'];
    $go = $_POST['go'];
    $lo = $_POST['lo'];
    $st = $_POST['st'];
    $dd = $_POST['dd'];
    $dt = $_POST['dt'];
    $ad = $_POST['ad'];
    $at = $_POST['at'];

    $query = "UPDATE `shipments` SET 
        `sender` = '$se',
        `receiver` = '$re',
        `senderaddr` = '$sa',
        `receiveraddr` = '$ra',
        `nature` = '$na',
        `goods` = '$go',
        `location` = '$lo',
        `status` = '$st',
        `ddate` = '$dd',
        `dtime` = '$dt',
        `adate` = '$ad',
        `atime` = '$at' WHERE `id` = '$id'
        ";

    mysqli_query($link, $query);

}
?>

<style>
    .col-12{
        overflow: auto;
    }
    table{
        border-width: 2px;
        margin: 0 auto;
    }
    th{
        padding: 10px;
        border-width: 2px;
        white-space: nowrap;
    }
    td{
        white-space: nowrap;
        padding: 5px;
    }
</style>

<!-- ================ shipment section start ================= -->

<section class="contact-section">

    <?php require_once 'menu.php'; ?>

    <hr>

    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2 class="contact-title">Edit Shipment</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <table border="1">
                    <th>S/N</th>
                    <th>Tracking no</th>
                    <th>Sender's name</th>
                    <th>Receiver's name</th>
                    <th>Sender's address</th>
                    <th>Receiver's address</th>
                    <th>Nature of goods</th>
                    <th>Goods in Kg</th>
                    <th>Location of shipment</th>
                    <th>Status</th>
                    <th>date of departure</th>
                    <th>time of departure</th>
                    <th>date of arrival</th>
                    <th>time of arrival</th>
                    <th>Action</th>

                    <?php
                    $sql = "SELECT * FROM `shipments` ORDER BY `id` DESC";
                    $run = mysqli_query($link, $sql);
                    $sn = 1;
                    while($shipment =  mysqli_fetch_assoc($run)){
                        $id = $shipment['id'];
                        $tr = $shipment['trackingid'];
                        $se = $shipment['sender'];
                        $re = $shipment['receiver'];
                        $sa = $shipment['senderaddr'];
                        $ra = $shipment['receiveraddr'];
                        $na = $shipment['nature'];
                        $go = $shipment['goods'];
                        $lo = $shipment['location'];
                        $st = $shipment['status'];
                        $dd = $shipment['ddate'];
                        $dt = $shipment['dtime'];
                        $ad = $shipment['adate'];
                        $at = $shipment['atime'];

                        echo "<tr>";
                        echo "<td>".$sn++."</td>";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='id' value='$id'>";
                        echo "<td>$tr</td>";
                        echo "<td><input name='se' value='$se'></td>";
                        echo "<td><input name='re' value='$re'></td>";
                        echo "<td><input name='sa' value='$sa'></td>";
                        echo "<td><input name='ra' value='$ra'></td>";
                        echo "<td><input name='na' value='$na'></td>";
                        echo "<td><input name='go' value='$go'></td>";
                        echo "<td><input name='lo' value='$lo'></td>";
                        echo "<td><input name='st' value='$st'></td>";
                        echo "<td><input name='dd' value='$dd'></td>";
                        echo "<td><input name='dt' value='$dt'></td>";
                        echo "<td><input name='ad' value='$ad'></td>";
                        echo "<td><input name='at' value='$at'></td>";
                        echo "<td><button class='button btn'>update</button></td>";
                        echo "</form>";
                        echo "</tr>";
                    }
                    ?>

                </table>
            </div>
            
        </div>

    </div>
    
</section>

<!-- ================ shipment section end ================= -->

<?php require_once 'footer.php'; ?>