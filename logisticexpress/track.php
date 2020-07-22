<?php require_once 'html_header.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['trackingid'])) {
        $ti = $_POST['trackingid'];
        $query = "SELECT * FROM `shipments` WHERE `trackingid` = '$ti' ";
        $run = mysqli_query($link, $query);

        if (mysqli_num_rows($run) > 0) {
            $shipment = mysqli_fetch_object($run);
            $data = "<section class='contact-section'>

            <div class='container'>
                <div class='row'>
                    <div class='col-12 text-center'>
                        <h2 class='contact-title'>Shipment Details</h2>
                    </div>
                </div>
        
                <div class='row'>
                    <div class='col-12 text-center'>
                        <table border='1'>
                            <th>Tracking ID</th>
                            <th>Sender's name</th>
                            <th>Receiver's name</th>
                            <th>Sender's address</th>
                            <th>Receiver's address</th>
                            <th>Nature of goods</th>
                            <th>Goods in kg</th>
                            <th>Location of shipment</th>
                            <th>Status</th>
                            <th>date of departure</th>
                            <th>date of arrival</th>
                            <tr>
                            <td>$shipment->trackingid</td>
                            <td>$shipment->sender</td>
                            <td>$shipment->receiver</td>
                            <td>$shipment->senderaddr</td>
                            <td>$shipment->receiveraddr</td>
                            <td>$shipment->nature</td>
                            <td>$shipment->goods</td>
                            <td>$shipment->location</td>
                            <td>$shipment->status</td>
                            <td>$shipment->ddate</td>
                            <td>$shipment->adate</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        
        </section>";
        } else {
            echo "<script>alert('Sorry, there is no shipment with the ID : $ti')</script>";
        }
        
    } else {
        echo "<script>
        window.alert('Your Tracking ID cannot be empty')
        </script>";
    }
    
}
?>
<style>
    .search-form button{
        border: none;
        cursor: pointer;
    }
    
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
<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1 >Track <span>Shipments</span></h1>
                            </div>
                            <!--Hero form -->
                            <form class="search-box" method="post">
                                <div class="input-form">
                                    <input type="text" name="trackingid" placeholder="Your Tracking ID">
                                </div>
                                <div class="search-form">
                                    <button>Track & Trace</button>
                                </div>	
                            </form>	
                            <!-- Hero Pera -->
                            <div class="hero-pera">
                                <p>For shipment status inquiry</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<!-- slider Area End-->

<!-- ================ shipment section start ================= -->
<?php if (isset($data)) :echo $data; endif; ?>
<!-- ================ shipment section end ================= -->

</main>
<?php require_once 'footer.php'; ?>