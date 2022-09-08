<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Enter Your Payment Details</h2>
                    <p>Fill all form field to go to next step</p>
                    <form id="msform" method="POST" action="result">
                        <!-- progressbar -->
                        <ul id="progressbar" class="d-flex justify-content-center">
                            <li class="active" id="personal"><strong>Personal</strong></li>
                            <li id="location"><strong>Address</strong></li>
                            <li id="payment"><strong>Payment</strong></li>
                            <!-- <li id="confirm"><strong>Finish</strong></li> -->
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>

                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 3</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">First Name: *</label>
                                <input type="text" id="fname" name="fname" placeholder="First Name"
                                    onkeydown="return /[a-zA-Z]/i.test(event.key)" />
                                <span id="fnameWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                                <label class="fieldlabels">Last Name: *</label>
                                <input type="text" id="lname" name="lname"
                                    onkeydown="return /[a-zA-Z]/i.test(event.key)" placeholder="Last Name" />
                                <span id="lnameWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                                <label class="fieldlabels">Contact No.: *</label>
                                <input type="text" id="phno" name="phno" placeholder="Contact No."
                                    onkeyup="this.value=this.value.replace(/[^\d]/,'')" />
                                <span id="phnoWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                                <label class="fieldlabels">Email: *</label>
                                <input type="email" id="email" name="email" placeholder="Email Id" />
                                <span id="emailWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Address Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 3</h2>
                                    </div>
                                </div>

                                <label class="fieldlabels">Address: *</label>
                                <input type="text" id="address" name="address" placeholder="Enter Address" />
                                <span id="addrWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                                <label class="fieldlabels">Pincode: *</label>
                                <input type="text" id="pincode" name="pincode"
                                    onkeyup="this.value=this.value.replace(/[^\d]/,'')" placeholder="Enter Pincode" />
                                <span id="pincodWarn" class="text-danger" style="display:none; font-size:12px;"
                                    onkeydown="return /[a-zA-Z]/i.test(event.key)"></span><br />
                                <label class="fieldlabels">City: *</label>
                                <input type="text" id="city" name="city" placeholder="Enter City"
                                    onkeydown="return /[a-zA-Z]/i.test(event.key)" />
                                <span id="cityWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                                <label class="fieldlabels">State: *</label>
                                <input type="text" id="state" name="state" placeholder="Enter State"
                                    onkeydown="return /[a-zA-Z]/i.test(event.key)" />
                                <span id="stateWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Enter Payment Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 3</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Card Number:</label>
                                <input type="text" id="cardno" name="cardno" placeholder="Enter card number"
                                    onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                                <span id="cardWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                                <label class="fieldlabels">Valid Thru:(Month)</label>
                                <input type="text" id="month" name="month" placeholder="MM"
                                    onkeyup="this.value=this.value.replace(/[^\d]/,'')" />
                                <span id="monWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                                <label class="fieldlabels">Valid Thru:(Year)</label>
                                <input type="text" id="year" name="year" placeholder="YYYY"
                                    onkeyup="this.value=this.value.replace(/[^\d]/,'')" />
                                <span id="yearWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                                <label class="fieldlabels">CVV:</label>
                                <input type="password" id="cvv" name="cvv" placeholder="CVV"
                                    onkeyup="this.value=this.value.replace(/[^\d]/,'')" />
                                <span id="cvvWarn" class="text-danger"
                                    style="display:none; font-size:12px;"></span><br />
                            </div>
                            <input type="submit" name="next" class="next action-button" value="Submit" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
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