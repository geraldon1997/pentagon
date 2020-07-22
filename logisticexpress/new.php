<?php require_once 'html_header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (!empty($_POST['sender'])) {

        $trackingid = uniqid('pcscs');
        $sender = $_POST['sender'];
        $receiver = $_POST['receiver'];
        $senderaddr = $_POST['senderaddress'];
        $receiveraddr = $_POST['receiveraddress'];
        $nature = $_POST['nature'];
        $goods = $_POST['goods'];
        $location = $_POST['location'];
        $status = $_POST['status'];
        $ddate = $_POST['ddate'];
        $adate = $_POST['adate'];

        $query = "CREATE TABLE IF NOT EXISTS `shipments` (
            `id` INT PRIMARY KEY AUTO_INCREMENT,
            `trackingid` VARCHAR(20),
            `sender` VARCHAR(40),
            `receiver` VARCHAR(40),
            `senderaddr` VARCHAR(255),
            `receiveraddr` VARCHAR(255),
            `nature` VARCHAR(255),
            `goods` VARCHAR(100),
            `location` VARCHAR(100),
            `status` VARCHAR(100),
            `ddate` VARCHAR(20),
            `adate` VARCHAR(20)
        ) ";

        mysqli_query($link, $query);
        
        $sql = "INSERT INTO `shipments` (
                `trackingid`,`sender`,`receiver`,`senderaddr`,`receiveraddr`,`nature`,`goods`,`location`,`status`,`ddate`,`adate`
            ) VALUES (
                '$trackingid','$sender','$receiver','$senderaddr','$receiveraddr','$nature','$goods','$location','$status','$ddate','$adate'
            )";

        mysqli_query($link, $sql);
        echo "<script>window.location = 'shipments.php'</script>";
    }
}
?>

<!-- ================ shipment section start ================= -->
<section class="contact-section">

    <?php require_once 'menu.php'; ?>

    <hr>
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="contact-title">Add new shipment</h2>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                        <form class="form-contact contact_form" method="post" id="addshipmentForm" novalidate="novalidate">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="sender" id="sender\'s name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter sender\'s name'" placeholder="Enter sender's name">
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="receiver" id="receiver\'s name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter receiver\'s name'" placeholder="Enter receiver's name">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="senderaddress" id="sender\'s name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter sender\'s address'" placeholder="Enter sender's address">
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="receiveraddress" id="receiver\'s address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter receiver\'s address'" placeholder="Enter receiver's address">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nature" id="nature" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter nature of goods'" placeholder="Enter nature of goods">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="goods" id="goods" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter goods weight in kg'" placeholder="Enter goods weight in kg">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="location" id="location" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter location of shipment'" placeholder="Enter location of shipment">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="status" id="status" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter status of shipment'" placeholder="Enter status of shipment">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="ddate" id="date" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date of Departure'" placeholder="Date of Departure" title="Date of Departure">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="adate" id="date" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date of Arrival'" placeholder="Date of Arrival" title="Date of Arrival">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Add</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- ================ shipment section end ================= -->

<?php require_once 'footer.php'; ?>