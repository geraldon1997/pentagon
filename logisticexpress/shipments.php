<?php require_once 'html_header.php'; ?>
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
            <h2 class="contact-title">Shipments</h2>
        </div>
        
            <div class="col-12 text-center">

                <table border="1">
                    <th>S/N</th>
                    <th>Tracking no</th>
                    <th>Sender's name</th>
                    <th>Receiver's name</th>
                    <th>Sender's address</th>
                    <th>Receiver's address</th>
                    <th>Goods in kg</th>
                    <th>Location of shipment</th>
                    <th>Status</th>
                    <th>date of departure</th>
                    <th>date of arrival</th>

                    <?php
                    $sql = "SELECT * FROM `shipments` ORDER BY `id` DESC";
                    $run = mysqli_query($link, $sql);
                    $sn = 1;
                    while($shipment =  mysqli_fetch_assoc($run)){
                        $tr = $shipment['trackingid'];
                        $se = $shipment['sender'];
                        $re = $shipment['receiver'];
                        $sa = $shipment['senderaddr'];
                        $ra = $shipment['receiveraddr'];
                        $go = $shipment['goods'];
                        $lo = $shipment['location'];
                        $st = $shipment['status'];
                        $dd = $shipment['ddate'];
                        $ad = $shipment['adate'];

                        echo "<tr>";
                        echo "<td>".$sn++."</td>";
                        echo "<td>$tr</td>";
                        echo "<td>$se</td>";
                        echo "<td>$re</td>";
                        echo "<td>$sa</td>";
                        echo "<td>$ra</td>";
                        echo "<td>$go</td>";
                        echo "<td>$lo</td>";
                        echo "<td>$st</td>";
                        echo "<td>$dd</td>";
                        echo "<td>$ad</td>";
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