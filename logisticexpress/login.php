<?php require_once 'html_header.php'; ?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if (!empty($user) && !empty($pass)) {
        $sql = "SELECT * FROM `users` WHERE `username` = '$user' AND `password` = '$pass' LIMIT 1 ";
        $login = mysqli_query($link, $sql);

        if (mysqli_num_rows($login) > 0) {
            echo "<script>window.location = 'dashboard.php'</script>";
            $_SESSION['username'] = $user;
        } else {
            echo "<script>alert('$user is not a user on this platform')</script>";
        }
    }else{
        echo "<script>alert('please fill all your details')</script>";
    }
}
?>
    <main>
        
        <!-- ================ login section start ================= -->
        <section class="contact-section">
            <div class="container">
                
                <div class="row">
                    <div class="col-6 offset-3 text-center">
                        <h2 class="contact-title">Login</h2>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                    <form class="form-contact contact_form" method="post" id="loginForm" novalidate="novalidate">
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="username" id="username" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your username'" placeholder="Enter your username">
                                    </div>
                                </div>
                              
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder="Enter your password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Process</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- ================ login section end ================= -->
    </main>
<?php require_once 'footer.php'; ?>