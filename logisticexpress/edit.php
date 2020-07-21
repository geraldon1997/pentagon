<?php require_once 'html_header.php'; ?>
<style>
    table{
        border-width: 2px;
    }
    th{
        padding: 5px;
        border-width: 2px;
    }
</style>
<!-- ================ shipment section start ================= -->
<section class="contact-section">
    <?php require_once 'menu.php'; ?>
    <hr>
    <div class="container">
        <div class="row">
            <table border="1">
                <th>S/N</th>
                <th>Sender's name</th>
                <th>Receiver's name</th>
                <th>Receiver's address</th>
                <th>Location of shipment</th>
                <th>date of departure</th>
                <th>date of arrival</th>
                <th>Action</th>
            </table>
        </div>
    </div>
</section>
        <!-- ================ shipment section end ================= -->

<?php require_once 'footer.php'; ?>