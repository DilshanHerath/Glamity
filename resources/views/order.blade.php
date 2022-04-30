<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <link href="https://material.angular.io/components/form-field/examples#form-field-appearance"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=block" rel="stylesheet">


</head>
<body>
<div class="container mt-5 mb-5" style="background: #f5f2f2;border-radius: 10px">
    <div class="row">
        <div class="col-md-6" style="border-right: 1px solid #b0b0b0">
            <div class="mb-4 mt-5">
                <img style="width: 80px;height: 80px" src="../../images/logo.png" class="img-fluid logoimg" alt="">
            </div>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <p class="" style="font-size: 23px;font-weight: 600;color: #404040">Contact Information</p>
                    </div>
                    <div class="col-md-6" style="display: flex;justify-content: center;align-items: center">
                        <p style="font-size: 13px;margin-bottom: 0">Already have an account? </p>
                        <a href="/home"
                           style="font-size: 13px;margin-bottom: 0;color: #3064ff;cursor: pointer;text-decoration: none">&nbsp;
                            Log in</a>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control input_text" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
              <div style="display: flex;align-items: center;justify-content: center">
                  <hr style="height: 1px;width: 80%;text-align: center;color: #404040">
              </div>
                <p class="" style="font-size: 23px;font-weight: 600;color: #404040">Shipping address</p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control input_text" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="First Name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control input_text" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Last Name">
                    </div>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control input_text" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Company Name (Optional)">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control input_text" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Address *">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control input_text" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="City">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control input_text" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Phone">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control input_text" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Postal Code">
                    </div>
                </div>

                <div style="display: flex;align-items: center;justify-content: center">
                    <hr style="height: 1px;width: 80%;text-align: center;color: #404040">
                </div>

                <a href="/welcome">
                    <button
                        style="height: 70px;width: 250px;margin-bottom: 5%;font-size: 18px;font-weight: 600;margin-top: 5%"
                        type="submit" class="btn btn-primary">Continue to Shipping
                    </button>
                </a>
            </form>
        </div>
        <div class="col-md-6" style="">
           <div class="row" style="display: flex;align-items: center;justify-content: center;margin-top: 5%">
               <div class="col-md-3">
                   <img style="width: 150px;height: 150px;border-radius: 10px" src="../../images/top/top12.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-md-6">
                   <h5 style="font-weight: bold;font-size: 14px;color: #404040" class="card-title">D001</h5>
                   <p style="border-radius: 100px;border: 1px solid #404040;width: 30px;text-align: center" class="card-text">M</p>
               </div>
               <div class="col-md-3">
                   <p style="text-align: center" class="card-text">Rs 1500/-</p>
               </div>
           </div>
            <div style="display: flex;align-items: center;justify-content: center">
                <hr style="height: 2px;width: 100%;text-align: center;color: #404040">
            </div>

            <div class="row" style="margin-top: 3%">
                <div class="col-md-8">
                    <p style="font-size: 16px;color: #404040" class="card-title">Sub Total</p>
                </div>
                <div class="col-md-4">
                    <p style="font-weight: 500;font-size: 20px;color: #404040;text-align: center" class="card-title">Rs1500.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p style="font-size: 16px;color: #404040" class="card-title">Shipping</p>
                </div>
                <div class="col-md-4">
                    <p style="font-weight: 500;font-size: 20px;color: #404040;text-align: center" class="card-title">Rs250.00</p>
                </div>
            </div>

            <div style="display: flex;align-items: center;justify-content: center">
                <hr style="height: 2px;width: 100%;text-align: center;color: #404040">
            </div>

            <div class="row" style="margin-top: 3%">
                <div class="col-md-8">
                    <p style="font-size: 16px;color: #404040" class="card-title">Total</p>
                </div>
                <div class="col-md-4">
                    <p style="font-weight: 500;font-size: 25px;color: #404040;text-align: center" class="card-title">Rs1750.00</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<style>
    .input_text {
        height: 52px;
    }
</style>
</html>
