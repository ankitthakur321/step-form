<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading" class="purple-text text-center">SUCCESS !</h2>
                    <h5 class="purple-text text-center">You Payment is Successful.</h5>
                    <form id="msform">
                        <fieldset>
                            <div class="card bg-light">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Payment Details
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 my-2">
                                            Name:
                                        </div>
                                        <div class="col-6 my-2">
                                            <?=$name ?>
                                        </div>
                                        <div class="col-6 my-2">
                                            Contact No. :
                                        </div>
                                        <div class="col-6 my-2">
                                            <?=$contact_no ?>
                                        </div>
                                        <div class="col-6 my-2">
                                            Email Id: 
                                        </div>
                                        <div class="col-6 my-2">
                                            <?=$email  ?>
                                        </div>
                                        <div class="col-6 my-2">
                                            Address:
                                        </div>
                                        <div class="col-6 my-2">
                                            <?=$address ?>
                                        </div>
                                        <div class="col-6 my-2">
                                            Pincode :
                                        </div>
                                        <div class="col-6 my-2">
                                            <?=$pincode ?>
                                        </div>
                                        <div class="col-6 my-2">
                                            City:
                                        </div>
                                        <div class="col-6 my-2">
                                            <?=$city ?>
                                        </div>
                                        <div class="col-6 my-2">
                                            State:
                                        </div>
                                        <div class="col-6 my-2">
                                            <?=$state ?>
                                        </div>
                                        <div class="col-6 my-2">
                                            Transaction Id :
                                        </div>
                                        <div class="col-6 my-2">
                                            <?=$transaction_id ?>
                                        </div>
                                        <div class="col-6 my-2">
                                            Payment Date:
                                        </div>
                                        <div class="col-6 my-2">
                                            <?=date("Y/m/d") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?= base_url('assets/js/script.js') ?>"></script>

</html>