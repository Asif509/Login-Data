<?php include "include/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center fw-bolder ">Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="?page=login-submit" method="post">


                            <div class="row">
                                <label for="email" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" required placeholder="Enter Your Email" name="email"/>
                                </div>
                            </div>


                            <div class="row mt-2">
                                <label for="password" class="col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" required placeholder="Enter Your Password" name="password"/>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for=""  class="col-md-4"></label>
                                <div class="col-md-8" >
                                    <input type="submit" class="btn btn-success"  value="Log In" >
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "include/footer.php"; ?>
