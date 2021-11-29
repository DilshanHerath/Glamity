<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GLAMITY | Login</title>

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
<!--<div style="-->
<!--   /*background-image: url('../../images/background2.jpg');*/-->
<!--  background-size: cover;-->
<!--  background-position: center center;-->
<!--  background-repeat: no-repeat;-->
<!--  /*height: 45vw;*/-->
<!--  /*flex-direction: row;*/-->
<!--  align-items: center;-->
<!--  justify-content: center;-->
<!--  display: flex;-->
<!--  height: 639px;-->
<!--  width: 100%;-->
<!--padding: 0;">-->

<div style="
   background-image: url('../../images/background2.jpg');
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  /*height: 45vw;*/
  /*flex-direction: row;*/
  align-items: center;
  justify-content: center;
  display: flex;
  height: 639px;
  width: 100%;
padding: 0;">

    <div class="col-9 col-sm-9 col-md-8 col-xl-4"
         style="opacity: 0.8;background-color: black;padding: 0;border-radius: 20px">
        <form>
            <div style="display: flex;justify-content: center;align-items: center;margin-bottom: 5%;margin-top: 10%">
                <input type="email" class="form-control inp mb-3"
                       id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
            </div>
            <div class="mb-5" style="display: flex;justify-content: center;align-items: center">
                <input type="password" class="form-control inp" id="exampleInputPassword1"
                       placeholder="Password">
            </div>
<!--            <div style="display: flex;justify-content: center;align-items: center">-->
<!--                <div class="form-check p-0 col-md-7" style="margin-top: 5%;margin-bottom: 8%">-->
<!--                    <div style="flex-direction: row;justify-content:space-around;display: flex;">-->
<!--                        <div>-->
<!--                            <input style="width: 20px;height: 20px" type="checkbox" class="form-check-input"-->
<!--                                   id="exampleCheck1">-->
<!--                            <label class="form-check-label mt-1 ml-3" for="exampleCheck1" style="color: #9c9a9a">Remember me</label>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <h2 class="txt" style="" (click)="signUp()">Sign up</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div style="display: flex;justify-content: center;align-items: center;margin-bottom: 10%">
                <button style="" type="submit"
                        (click)="Login()" class="btn btn-primary btnlogin">LOGIN
                </button>
            </div>
        </form>
    </div>


</div>

</body>

<style>
    .img {
        /*width: calc(100% - 560px);*/
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        z-index: 1;
    }

    .inp {
        width: 320px;
        height: 50px;
    }

    .btnlogin {
        width: 320px;
        border: none;
        height: 50px;
        letter-spacing: 3px;
        background: #3b5998;
    }

    .txt {
        cursor: pointer;
        color: #bababa;
        font-size: 16px;
    }

    @media only screen and  (min-width: 320px)and (max-width: 375px) {
        .inp {
            width: 203px;
            height: 36px;
        }

        .btnlogin {
            width: 203px;
            height: 35px;
        }

        .txt {
            font-size: 13px;
        }
    }

    @media only screen and  (min-width: 375px)and (max-width: 425px) {
        .inp {
            width: 250px;
            height: 45px;
        }

        .btnlogin {
            width: 250px;
            height: 37px;
        }

        .txt {
            font-size: 13px;
        }
    }

    @media only screen and  (min-width: 425px)and (max-width: 575px) {
        .inp {
            width: 330px;
            height: 55px;
        }

        .btnlogin {
            width: 330px;
            height: 40px;
        }

        .txt {
            font-size: 16px;
        }
    }

    @media only screen and  (min-width: 575px)and (max-width: 675px) {
        .inp {
            width: 430px;
            height: 55px;
        }

        .btnlogin {
            width: 450px;
            height: 45px;
        }

        .txt {
            font-size: 16px;
        }
    }

    @media only screen and  (min-width: 675px)and (max-width: 768px) {
    }


    @media only screen and  (min-width: 768px)and (max-width: 991px) {
        .inp {
            width: 430px;
            height: 55px;
        }

        .btnlogin {
            width: 450px;
            height: 45px;
        }
    }

    @media only screen and  (min-width: 991px) {
    }

</style>
</html>
