<?php require_once 'html_header.php'; ?>
<style>
    .search-form button{
        border: none;
        cursor: pointer;
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
</main>
<?php require_once 'footer.php'; ?>