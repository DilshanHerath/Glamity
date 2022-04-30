<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GLAMITY | Home</title>

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


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body style="background: #D9D8C9">
<div>
    <div style="
  background-image: url('../../images/coverimg2.jpeg');
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  height: 45vw;
  width: 100%;
  /*margin-bottom: 5%;*/
  padding: 0;">

        <div style="width: 90%">
            <div style="justify-content: flex-end;display: flex" id="home">
                <nav class="navbar navbar-expand-lg navbar-light " style="background: transparent">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active subtittle" aria-current="page" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link subtittle" href="#category">Clothing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link subtittle" href="#footer" tabindex="-1" aria-disabled="true">Contact
                                        Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link subtittle" href="/login">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>

            <div>
                <img src="../../images/logo.png" class="img-fluid logoimg" alt="">
            </div>
        </div>
        <div style="display: flex;justify-content: center;align-items: center;margin-top: 5%">
            <div class="divblack">
                <div style="margin-top: 5%;margin-bottom: 3%;justify-content: center;display: flex">
                    <div><h2 class="tittle" style="color: blue">passion instead of fashion</h2></div>
                </div>
                <div style="justify-content: center;display: flex;margin-bottom: 3%">
                    <div><h3 style="color: blue;font-size: 25px" class="subtittle2">Smart | Stylish | On-Trend</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div style="background: #D9D8C9">
        <!---------------------------------------------------category-------------------------------------------------------->

        <section id="category" class="category" style="background: #D9D8C9">
            <div
                style="background: #363636;height: 50px;display: flex;align-items: center;justify-content: center;margin-top: 5%">
                <h1 class="maintittle">Category</h1>
            </div>
            <hr class="hr1">
            <hr>

            <div class="row div4 mt-5">

                @foreach ($Category as $object)
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 div2" style="position: relative">
                    <a href="{{ route('category_list' , $object->id) }}">
                        <div class="div1">
                            <figure class="snip1581 m-0" style="min-width: fit-content  !important;">
<!--                                <p>{{url('storage/'.$object->image) }}-----{{$object->image}}</p>-->
                            <img style="" class="image1" src="{{url('storage/'.$object->image) }}" alt="..."/>
                            </figure>
                            <div class="overlay">
                                <div class="text">{{ $object->name }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
            <!--  <hr style="margin: 0">-->
        </section>

        <!------------------------------------------------------Dress-------------------------------------------------------->

        <section>
            <div
                style="background: #363636;height: 50px;display: flex;align-items: center;justify-content: center;margin-top: 3%">
                <h1 class="maintittle">Dresses</h1>
            </div>
            <hr class="hr1">
            <hr>
            <div style="display: flex;justify-content: center;align-items: center">
                <div class="row div3">
                    @foreach(($Item->where('cat_id','16')->slice(0, 4)) as $item)
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 div2">
                        <a href="/dresses" style="text-decoration: none;color: black">
                            <div class="card cardbody" style="width: 300px">
                                <img src="{{url('storage/'.$item->image) }}" class="card-img-top image" alt="...">
                                <div class="card-body" style="background: white;">
                                    <div style="display: flex;flex-direction: row;justify-content: space-between">
                                        <h5 style="text-align: center;margin: 0;font-weight: bold;font-size: 18px"
                                            class="card-title">{{ $item->name }}</h5>
                                        <p style="text-align: center;margin: 0" class="card-text">{{ $item->material }}</p>
                                        <p style="text-align: center;margin: 0" class="card-text">Rs {{ $item->price }}/-</p>
                                    </div>
                                    <div
                                        style="display: flex;align-items: center;justify-content: space-between;margin-top: 2%">
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
                        </a>

                    </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-------------------------------------------------------Tops-------------------------------------------------------->


        <section>
            <div
                style="background: #363636;height: 50px;display: flex;align-items: center;justify-content: center;margin-top: 3%">
                <h1 class="maintittle">Tops</h1>
            </div>
            <hr class="hr1">
            <hr>
            <div style="justify-content: center;display: flex;align-items: center">
                <div class="row div3">
                    @foreach(($Item->where('cat_id','17')->slice(0, 4) ) as $item)
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 div2" style="">
                        <a href="/tops" style="color: black;text-decoration: none">
                            <div class="card cardbody" style="width: 300px">
                                <img src="{{url('storage/'.$item->image) }}" class="card-img-top image" alt="...">
                                <div class="card-body" style="background: white;">
                                    <div style="display: flex;flex-direction: row;justify-content: space-between">
                                        <h5 style="text-align: center;margin: 0;font-weight: bold;font-size: 18px"
                                            class="card-title">{{ $item->name }}</h5>
                                        <p style="text-align: center;margin: 0" class="card-text">{{ $item->material }}</p>
                                        <p style="text-align: center;margin: 0" class="card-text">Rs {{ $item->price }}/-</p>
                                    </div>
                                    <div
                                        style="display: flex;align-items: center;justify-content: space-between;margin-top: 2%">
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
                        </a>

                    </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!--------------------------------------------------tshirt/office---------------------------------------------------->

        <section>


            <div style="align-items: center;display: flex;justify-content: center">
                <div class="row" style="width: 100%;flex-direction: row;display: flex;align-items: center;
  justify-content: space-between;margin-bottom: 5%">

                    <div class="col-12 col-sm-12 col-md-6 col-xl-6">
                        <div class="officecoverimg">
                            <div class="overlay1">
                                <div class="text mb-5">Office Wear
                                    <a href="/office">
                                        <button style="background: black;opacity: 0.7" type="button"
                                                class="btn btn-primary bntcheckout"><p class="m-0">Check Out</p>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-sm-12 col-md-6 col-xl-6">
                        <div class="tshirtcoverimg">
                            <div class="overlay1">
                                <div class="text mb-5">T-Shirt Collection
                                    <a href="/tshirts">
                                        <button style="background: black;opacity: 0.7" type="submit"
                                                class="btn btn-primary bntcheckout2"><p class="m-0">Check Out</p>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </section>


    </div>
</div>

<!--------------------------------------------------footer-------------------------------------------->

<!---->
<!--<button type="submit" onclick="f()" class="btn btn-primary">Primary</button>-->


<section id="footer" style="background: #67032F">
    <div>
        <div style="justify-content: center;align-items: center;display: flex">
            <div class="row"
                 style="width: 90%;align-items: center;justify-content: space-between;display: flex;margin-top: 2%">
                <div class="col-12 col-sm-12 col-md-6 col-xl-6" style="">
                    <h2 style="font-size: 30px;margin: 0;color: white">Glamity</h2>
                    <p style="color: #f2f2f2;">passion instead of fashion</p>
                </div>
                <div class="mb-2 col-12 col-sm-12 col-md-6 col-xl-6 m-0 p-0"
                     style="flex-direction: row;display: flex;align-items: center;justify-content: space-between">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-9 col-xl-9 p-0">
                            <input type="text" style="background: #faf7f7;opacity: 0.8" class="form-control"
                                   id="exampleInputEmail1" placeholder="Enter Your Email" aria-describedby="emailHelp"/>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-xl-3">
                            <button type="submit" class="btn btn-primary btnsubs">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: flex;align-items: center;justify-content: center;width: 100%">
            <div class="row" style="display: flex;justify-content: space-between;width: 90%;margin-top: 2%">
                <div class="col-6 col-sm-6 col-md-6 col-xl-2" style="margin-bottom: 3%">
                    <h2 class="f_tittle">Quick Links</h2>
                    <div style="">
                        <p class="p3">About Us</p>
                        <p class="p3">Order Status</p>
                        <p class="p3">Contact Us</p>
                        <p class="p3">Privacy Policy</p>
                        <p class="p3">Terms Of Use</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-4" style="margin-bottom: 3%">

                    <h2 class="f_tittle">Online Customer Care Hotline</h2>
                    <div style="">
                        @foreach ($Footer as $object)
                        <p class="p2">Phone : {{$object->contact}}</p>
                        <p class="p2">Opening Hours : Every Day {{$object->online_open_at}} - {{$object->online_close_at}}</p>
                        <p class="p2">Email : {{$object->email}}</p>
                        @endforeach
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-4" style="margin-bottom: 3%">
                    <h2 class="f_tittle">Glamity Flagship Store</h2>
                    <div style="">
                        <p class="p2">Address : {{$object->address}}</p>
                        <p class="p2">Phone : {{$object->land_line}}</p>
                        <p class="p2">Opening Hours : Every Day {{$object->shop_open_at}} - {{$object->shop_close_at}}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-2" style="margin-bottom: 3%">
                    <h2 class="f_tittle">Follow Us</h2>
                    <div style="">
                        <div style="display: flex">
                            <img class="icnlogo" src="../../images/facebookicon.png" alt="">
                            <div style=";align-items: center;justify-content: center;display: flex">
                                <p class="p3" style="margin: 0;">Facebook</p>
                            </div>

                        </div>
                        <div style="display: flex">
                            <img class="icnlogo" src="../../images/instagramicon.png" alt="">
                            <div style=";align-items: center;justify-content: center;display: flex">
                                <p class="p3" style="margin: 0;">Instagram</p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<script>

    function f() {
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
        });
    }
</script>

</body>


<style>

    .image1 {
        display: block;
        width: 100%;
        height: auto;
        /*transform: scale(0,0.25);*/
    }


    .overlay {
        position: absolute;
        padding: 0;
        margin-top: 50%;
        bottom: 0;
        left: 0;
        right: 0;
        height: 30%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-image: linear-gradient(to bottom, rgba(255, 0, 0, 0), black);
    }

    .overlay1 {
        position: absolute;
        padding: 0;
        margin-top: 50%;
        bottom: 0;
        left: 2%;
        right: 0;
        height: 100%;
        /*width: 80%;*/
        opacity: 0;
        transition: .5s ease;
        background-image: linear-gradient(to bottom, rgba(255, 0, 0, 0), black);
    }


    .div1:hover .overlay {
        opacity: 1;
        /*position: relative;*/
        /*width: 50%;*/
    }

    .div1 {
        align-items: center;
        display: flex;
        justify-content: center;
        padding: 0;
        margin: 0;
    }

    .text {
        color: white;
        font-family: 'Righteous', cursive;
        font-size: 30px;
        letter-spacing: 5px;
        font-weight: bolder;
        position: absolute;
        width: 100%;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .cardbody:hover {
        box-shadow: 6px 6px 17px -3px #000000;
        transition: .3s ease;
    }



    .hr1 {
        border: 1.5px solid black;
        opacity: 1;
    }

    .officecoverimg {
        background-image: url('../../images/officecover.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 45vw;
        width: 100%;
        border-radius: 5px;
        padding: 0;
        margin: 0;
    }

    .tshirtcoverimg {
        background-image: url('../../images/tshirtcover.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 45vw;
        width: 100%;
        border-radius: 5px;
        padding: 0;
        margin: 0;
    }

    .officecoverimg :hover {
        opacity: 1;
    }

    .tshirtcoverimg :hover {
        opacity: 1;
    }

    .div2 {
        width: fit-content;
        margin-bottom: 5%
    }

    .subtittle {
        font-weight: bold;
        cursor: pointer
    }


    .subtittle2 {
        font-weight: bold;
        font-family: 'Baloo Tammudu 2', cursive;
    }

    .tittle {
        font-family: 'Lobster', cursive;
        font-size: 35px;
        letter-spacing: 2px;
    }

    .maintittle {
        font-family: 'Alfa Slab One', cursive;
        letter-spacing: 4px;
        opacity: 0.9;
        font-size: 28px;
        text-align: center;
        color: white;
        font-weight: bold;
        margin-top: 1.5%;
        margin-bottom: 1.5%;
    }

    .logoimg {
        width: 91px;
        height: 90px;
        margin-left: 4%;
    }

    .divblack {
        opacity: 0.8;
        background-color: black;
        width: 50%;
        border-radius: 10px;
    }

    .div3 {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: row;
        margin-top: 5%;
    }

    .div4 {
        align-items: center;
        justify-content: space-around;
    }


    /*---------------------------------------------------------media Quary-------------------------------------------------------------*/

    @media only screen and  (min-width: 320px)and (max-width: 375px) {
        .logoimg {
            display: none;
        }

        .divblack {
            display: none;
        }

        .subtittle {
            padding: 0;
        }

        .maintittle {
            font-size: 21px;
        }

        .officecoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .tshirtcoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .text {
            font-size: 21px;
        }

        .bntcheckout {
            margin-top: 5%;
        }

        .div3 {
            justify-content: center;
        }

        .div4 {
            justify-content: center;
        }

    }

    @media only screen and  (min-width: 375px)and (max-width: 425px) {


        .logoimg {
            display: none;
        }

        .divblack {
            display: none;
        }

        .subtittle {
            padding: 0;
        }

        .maintittle {
            font-size: 23px;
        }

        .div3 {
            justify-content: center;
        }

        .div4 {
            justify-content: center;
        }

        .officecoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .tshirtcoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .bntcheckout2 {
            margin-top: 5%;
        }
    }

    @media only screen and  (min-width: 425px)and (max-width: 575px) {


        .logoimg {
            display: none;
        }

        .divblack {
            display: none;
        }

        .subtittle {
            padding: 0;
        }

        .maintittle {
            font-size: 25px;
        }

        .div3 {
            justify-content: center;
        }

        .div4 {
            justify-content: center;
        }

        .officecoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .tshirtcoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .bntcheckout2 {
            margin-top: 5%;
        }

    }

    @media only screen and  (min-width: 575px)and (max-width: 675px) {

        .logoimg {
            display: none;
        }

        .divblack {
            display: none;
        }

        .subtittle {
            padding: 0;
        }

        .maintittle {
            font-size: 23px;
        }

        .div3 {
            justify-content: center;
        }

        .div4 {
            justify-content: center;
        }

        .officecoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .tshirtcoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .bntcheckout2 {
            margin-top: 5%;
        }
    }

    @media only screen and  (min-width: 675px)and (max-width: 768px) {

        .logoimg {
            /*display: none;*/
        }

        .divblack {
            display: none;
        }

        .subtittle {
            padding: 0;
        }

        .maintittle {
            font-size: 23px;
        }

        .div3 {
            justify-content: center;
        }

        .div4 {
            justify-content: center;
        }

        .officecoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .tshirtcoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

    }


    @media only screen and  (min-width: 768px)and (max-width: 991px) {
        .logoimg {
            /*display: none;*/
        }

        .divblack {
            display: none;
        }

        .subtittle {
            padding: 0;
        }

        .maintittle {
            font-size: 23px;
        }

        .div3 {
            justify-content: center;
        }

        .div4 {
            justify-content: center;
        }

        .officecoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

        .tshirtcoverimg {
            height: 100vw;
            margin-bottom: 8%;
        }

    }

    /*footer style*/

    .p2 {
        margin: 0;
        font-size: 12px;
        color: #d4cbcb;
    }

    .p3 {
        margin: 0;
        font-size: 12px;
        cursor: pointer;
        color: #d4cbcb;
    }

    .p3:hover {
        color: yellow;
    }

    .f_tittle {
        color: #dbdbdb;
        margin: 0;
        font-size: 22px;
        margin-bottom: 3%;
    }

    .btnsubs {
        background: black;
        border: none;
        opacity: 0.9;
        letter-spacing: 3px;
        font-size: 16px;
        font-weight: bold;
    }

    .icnlogo {
        width: 40px;
        height: 40px;
    }

    /*---------------------------------------------------------media Quary-------------------------------------------------------------*/


    @media only screen and  (min-width: 320px)and (max-width: 375px) {
        .f_tittle {
            font-size: 11px;
            color: #05ff3b;
            /*margin: 0;*/
        }

        .btnsubs {
            margin-top: 5%;
        }

        .p2 {
            font-size: 10px;
        }

        .p3 {
            font-size: 10px;
        }

        .icnlogo {
            width: 30px;
            height: 30px;
        }

    }

    @media only screen and  (min-width: 375px)and (max-width: 425px) {
        .f_tittle {
            font-size: 15px;
        }

        .btnsubs {
            margin-top: 5%;
        }

        .p2 {
            font-size: 11px;
        }

        .p3 {
            font-size: 11px;
        }

        .icnlogo {
            width: 30px;
            height: 30px;
        }

    }

    @media only screen and  (min-width: 425px)and (max-width: 575px) {
        .btnsubs {
            margin-top: 5%;
        }
    }

    @media only screen and  (min-width: 575px)and (max-width: 675px) {
        .btnsubs {
            margin-top: 5%;
        }
    }

    @media only screen and  (min-width: 675px)and (max-width: 768px) {
        .btnsubs {
            margin-top: 5%;
        }
    }


    @media only screen and  (min-width: 768px)and (max-width: 991px) {
        .btnsubs {
            margin-top: 5%;
        }
    }

    @media only screen and  (min-width: 991px) {
    }


</style>

</html>
