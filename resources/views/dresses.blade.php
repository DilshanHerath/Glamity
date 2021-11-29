<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GLAMITY | Dresses</title>

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


    <!-----------------------------------------------------------------  fonts  ----------------------------------------------------------------->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>

<div>
    <a href="/">
        <img src="../../images/logo.png" style="z-index: 1000000;position: fixed;bottom: 20px;right: 20px;width: 80px" class="img-fluid logoimg" alt="">
    </a>
</div>

<section class="sec1">

    <div style="background: #bfb6b6;height: 80px;align-items: center;justify-content: center;display: flex">
        <h2 class="tittle2">Dresses</h2>
    </div>

    <div style="display: flex;justify-content: center;align-items: center">
        <div class="row"
             style="width: 100%;display: flex;align-items: center;justify-content: center;margin-top: 5%">
            @foreach(($Dress->where('cat_id','16')) as $dress)
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 div2">
                <div class="card cardbody" style="width: 300px">
                    <img src="{{url('storage/'.$dress->image) }}" class="card-img-top image" alt="..." data-bs-toggle="modal"
                         data-bs-target="#staticBackdrop">
                    <div class="card-body" style="background: white;">
                        <div style="display: flex;flex-direction: row;justify-content: space-between">
                            <h5 style="text-align: center;margin: 0;font-weight: bold;font-size: 18px"
                                class="card-title">{{ $dress->name }}</h5>
                            <p style="text-align: center;margin: 0" class="card-text">{{ $dress->material }}</p>
                            <p style="text-align: center;margin: 0" class="card-text">Rs {{ $dress->price }}/-</p>
                        </div>
                        <div style="display: flex;align-items: center;justify-content: space-between;margin-top: 2%">
                            <h2 style="font-size: 15px;text-align: center;margin: 0">Sizes</h2>
                            <div style="width: 25px;height: 25px;border: 2px solid #b3b3b3;border-radius: 30%;display: flex;
           flex-direction: row;align-items: center;justify-content: center">
                                <h3 style="font-size: 12px;margin:0;padding: 5px;text-align: center">XS</h3>
                            </div>
                            <div style="width: 25px;height: 25px;border: 2px solid #b3b3b3;border-radius: 30%;display: flex;
           flex-direction: row;align-items: center;justify-content: center">
                                <h3 style="font-size: 12px;margin:0;padding: 5px;text-align: center">L</h3>
                            </div>
                            <div style="width: 25px;height: 25px;border: 2px solid #b3b3b3;border-radius: 30%;display: flex;
           flex-direction: row;align-items: center;justify-content: center">
                                <h3 style="font-size: 12px;margin:0;padding: 5px;text-align: center">XL</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</section>

<section>

    <!--------------------------------------------------- Pagination -------------------------------------------------------->

    <div style="display: flex;justify-content: center;align-items: center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="">Previous</a></li>
                <li class="page-item"><a class="page-link" href="">1</a></li>
                <li class="page-item"><a class="page-link" href="">2</a></li>
                <li class="page-item"><a class="page-link" href="">3</a></li>
                <li class="page-item"><a class="page-link" href="">Next</a></li>
            </ul>
        </nav>
    </div>


    <!--------------------------------------------------- Modal -------------------------------------------------------->


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="justify-content: center;align-items: center;display: flex">
                        <div class="card " style="width: 18rem;border: none">
                            <img src="../../images/dress4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 style="text-align: center;margin: 0" class="card-title">GL001</h5>
                                <p style="text-align: center;margin: 0" class="card-text">Cotton</p>
                                <p style="text-align: center;margin: 0" class="card-text">Rs 1200/-</p>
                                <hr>
                                <p style="text-align: center;margin: 0;color: red;font-size: 13px;margin-bottom: 3%"
                                   class="card-text">
                                    * Please Select Option</p>
                                <div style="justify-content: center;align-items: center;display: flex">
                                    <p>STYLE SIZE</p>
                                </div>
                                <div
                                    style="display: flex;align-items: center;justify-content: space-between;margin-top: 2%">

                                    <input type="radio" class="btn-check" name="options-outlined"
                                           id="btn-check-outlined"
                                           autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btn-check-outlined">S</label>

                                    <input type="radio" class="btn-check" name="options-outlined"
                                           id="btn-check-2-outlined"
                                           autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btn-check-2-outlined">M</label>

                                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                           autocomplete="off">
                                    <label class="btn btn-outline-primary" for="success-outlined">L</label>

                                    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                                           autocomplete="off">
                                    <label class="btn btn-outline-primary" for="danger-outlined">XL</label>
                                </div>

                                <hr>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex;justify-content: space-around">
                        <label for="quantity">Quantity : </label>
                        <input class="col-6" type="number" id="quantity" name="quantity" min="1" max="100">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary col-12" data-bs-dismiss="modal"
                            style="background: #8963EF"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">Add To Cart
                    </button>
                    <!--          <button type="button" class="btn btn-primary">Understood</button>-->
                </div>
            </div>
        </div>
    </div>
</section>


<section>


    <!--------------------------------------cart------------------------------------->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header" style="">
            <h4 style="margin: 0;font-size: 18px;" id="offcanvasRightLabel">My Cart</h4>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
            <div class="card mb-3" style="max-width: 540px;border: none">
                <div style="display: flex;justify-content: flex-end">
                    <button style="font-size: 10px" type="button" class="btn-close text-reset"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="row g-0">
                    <div class="col-md-4">
                        <img style="width: 100px;height: 120px" src="../../images/dress10.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p style="font-size: 18px" class="card-title">GL001</p>
                            <h3 style="font-size: 14px;color: #bab8b8">S</h3>
                            <div style="display: flex">
                                <div><h5 style="font-size: 13px;color: #bab8b8" class="card-title">1 x </h5></div>
                                <div><h5 style="font-size: 15px;margin-left: 5px" class="card-title">Rs. 1200</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="card mb-3" style="max-width: 540px;border: none">
                <div style="display: flex;justify-content: flex-end">
                    <button style="font-size: 10px" type="button" class="btn-close text-reset"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="row g-0">
                    <div class="col-md-4">
                        <img style="width: 100px;height: 120px" src="../../images/dress8.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p style="font-size: 18px" class="card-title">GL004</p>
                            <h3 style="font-size: 14px;color: #bab8b8">M</h3>
                            <div style="display: flex">
                                <div><h5 style="font-size: 13px;color: #bab8b8" class="card-title">1 x </h5></div>
                                <div><h5 style="font-size: 15px;margin-left: 5px" class="card-title">Rs. 1800</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div style="display: flex;width: 70%;justify-content: space-between">
                <h3 style="font-size: 17px"><p>Sub Total :</p></h3>
                <p>Rs.3000</p>
            </div>

            <div class="col-12">
                <button style="width: 100%;background: black;color: white;border: none" type="button"
                        class="btn btn-dark">Proceed to Checkout
                </button>
                <br><br>

                <button style="width: 100%; border: 2px solid black;color: black;background: transparent"
                        type="button" class="btn btn-danger">Cancel Order
                </button>
            </div>


        </div>
    </div>


</section>

</body>

<style>
    .mat-radio-button ~ .mat-radio-button {
        margin-left: 16px;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .cardbody:hover {
        box-shadow: 6px 6px 17px -3px #000000;
        transition: .3s ease;
    }

    .div2 {
        width: fit-content;
        margin-bottom: 5%
    }

    .tittle2 {
        font-family: 'Alfa Slab One', cursive;
        letter-spacing: 4px;
        opacity: 0.9;
        text-align: center;
        color: black;
        font-weight: bold;
        font-size: 30px;
        text-shadow: 2px 2px #FF0000;
    }

</style>
</html>
