
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bootstrap Template</title>
    <style>
        .navbar-top {
            background-color: black;
        }
        .navbar-bottom {
            background-color: white;
        }
        .footer {
            background-color: #000;
            padding: 20px;
            text-align: center;
        }
        .footer-title{
            color:white;
        }
        .title-column{

            display: inline-block;
            font-size: 50px;
            border-bottom: 2px solid #0062cc;
            padding-bottom: 4px;
            color:#0062cc;
            font-weight: bold;
        }
        .padding-style{
            padding: 15px;
        }
        .section{
            padding: 51px;
            margin: 0;
        }
        .image-container {
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            width: 100%;
        }

        .overlay h2,
        .overlay p {
            margin: 0;
        }
        .violet-section {
            background-color: #3c0069;
            color: white;
            padding: 50px 0;
        }

        .violet-section h2,
        .violet-section p {
            margin: 0;
        }

        .banner {
            position: relative;
            /*width: 100%;*/
            height: 500px;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .banner-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .banner-content h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .banner-content p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
        }
        .formBox{
            /*margin-top: 90px;*/
            /*padding: 50px;*/
        }
        .formBox  h1{
            margin: 0;
            padding: 0;
            text-align: center;
            margin-bottom: 50px;
            text-transform: uppercase;
            font-size: 48px;
        }
        .inputBox{
            position: relative;
            box-sizing: border-box;
            margin-bottom: 50px;
        }
        .inputBox .inputText{
            position: absolute;
            /*font-size: 24px;*/
            line-height: 50px;
            transition: .5s;
            opacity: .5;
        }
        .inputBox .input{
            position: relative;
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 24px;
            border-bottom: 1px solid rgba(0,0,0,.5);

        }
        .focus .inputText{
            transform: translateY(-30px);
            font-size: 18px;
            opacity: 1;
            color: #00bcd4;

        }
        textarea{
            height: 100px !important;
        }
        .button{
            width: 100%;
            height: 50px;
            border: none;
            outline: none;
            background: #0062cc;
            color: #fff;
            margin: 10px;
        }
        .form-title{
            font-weight: bold;
        }
        p{
            justify-content: right;
        }
        .image-new {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card {
            position: absolute;
            bottom: -90px;
            left: 53%;
            transform: translateX(-50%);
            width: 80%;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .content {
            margin-bottom: 20px;
        }
    </style>
</head>
<div>
<nav class="navbar navbar-expand-lg navbar-top">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active" style="padding: 8px;color: white;">
                    <i class="fa fa-phone">(870) 781-3386</i>
                </li>
                <li class="nav-item" style="padding: 8px;color: white;">
                    <i class="fa fa-envelope">info@citybay.com</i>
                </li>
                <li class="nav-item" style="padding: 8px;color: white;">
                    <i class="fa fa-twitter"></i>
                </li>
                <li class="nav-item" style="padding: 8px;color: white;">
                    <i class="fa fa-facebook"></i>
                </li>
                <li class="nav-item" style="padding: 8px;color: white;">
                    <i class="fa fa-youtube-play"></i>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-bottom">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="https://img1.wsimg.com/isteam/ip/bbbae122-b45c-49e3-a878-153a1b457c9c/City-of-Bay-logo-1%20(1)%20with%20motto%20large.jpg/:/rs=w:399,h:200,cg:true,m/cr=w:399,h:200/qt=q:95" width="200"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">City of goverment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Police & Fire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Community Center Rentals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="banner">
        <img src="https://www.bayfuture.com/clientuploads/Mclaren_Bay_Region.jpg" alt="Banner Image">
        <div class="banner-content">
            <h2>Welcome to our website</h2>
            <p>Explore our products and services</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </div>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="padding-style">
                    <h class="title-column">City of Bay</h>
                    <h1>Where Great</h1>
                    <h1>Citizens Create</h1>
                    <h1>A Great City</h1>
                </div>
            </div>
            <div class="col-md-6">
                <h2></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at bibendum lorem. Quisque pretium, nulla accumsan condimentum porttitor, risus magna malesuada turpis, eget tempus lorem lectus sed est. Morbi suscipit dolor tincidunt ligula tristique, sed mattis lorem imperdiet. Aenean aliquet hendrerit nisl. Praesent ut ligula eget justo cursus aliquet. </p>
                <p>Sed sed erat a augue consequat congue. Aliquam mattis hendrerit diam, ut efficitur quam tincidunt eu. Suspendisse potenti. Duis consequat nulla orci. Donec arcu quam, placerat vel ipsum at, semper semper nisi. Vestibulum rutrum blandit sapien, non sodales diam luctus ut. Cras quis nisi eu tellus vulputate gravida at sed risus. Donec eleifend sem sed mattis lobortis.</p>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>DEPARTMENTS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed faucibus arcu.</p>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="https://images.indianexpress.com/2020/10/police-6.jpg?resize=718,405?w=414" alt="Image 1">
                    <div class="overlay">
                        <h2>Police Department</h2>
                        <p>This is some text overlaid on Image 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="https://lonestareg.com/img/_uploads/Carrollton.jpg" alt="Image 2">
                    <div class="overlay">
                        <h2>TFire Department</h2>
                        <p>This is some text overlaid on Image 2.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="image-container">
                    <img src="https://aiph.org/wp-content/uploads/2021/04/Gardens-by-the-Bay-1200x800-1.jpg" alt="Image 3">
                    <div class="overlay">
                        <h2>City Goverment</h2>
                        <p>This is some text overlaid on Image 3.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="https://cdn.britannica.com/73/121773-050-EE1F2F0D/Brown-County-Courthouse-Green-Bay-Wis.jpg" alt="Image 4">
                    <div class="overlay">
                        <h2>Water Department</h2>
                        <p>This is some text overlaid on Image 4.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Announcements</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed faucibus arcu.</p>
                </div>
                <div class="col-md-3">
                    <img class="image-new" src="https://aiph.org/wp-content/uploads/2021/04/Gardens-by-the-Bay-1200x800-1.jpg" alt="Background Image">
                </div>
                <div class="col-md-6">
                    <img class="image-new" src="https://aiph.org/wp-content/uploads/2021/04/Gardens-by-the-Bay-1200x800-1.jpg" alt="Background Image">
                    <div class="card">
                        <div class="content">
                            <h1 style="color:blue;">Announe Coming <br> events</h1>
                            <p><b>New events announced</b></p>
                            <p>Held at city of bay hall</p>
                            <p><a href="">Know More -> </a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img class="image-new" src="https://aiph.org/wp-content/uploads/2021/04/Gardens-by-the-Bay-1200x800-1.jpg" alt="Background Image">
                </div>
            </div>
        </div>
    </section>
<section style="background-color: #3c0069;color: white;padding: 50px 0;margin-top: 124px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image-container">
                    <img src="https://www.citypng.com/public/uploads/preview/2023-june-white-calendar-free-png-11657066302musmvnfz5b.png" alt="Image 1">
                </div>
            </div>
            <div class="col-md-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed faucibus arcu. Cras sollicitudin leo et tortor commodo feugiat. Nullam vel nulla erat. Maecenas eu justo vitae magna rhoncus tempus. Curabitur faucibus ligula sed finibus vulputate. Donec condimentum ante nec vehicula pretium. Nam ipsum augue, maximus et posuere sit amet,tincidunt eu dui. Ut a congue lectus. Nam nec ante sollicitudin, convallis ante sed, faucibus orci. In commodo sed enim vitae faucibus. Sed sapien neque, mollis quis facilisis posuere, ultrices at nunc. Maecenas consectetur leo non arcu rhoncus, bibendum venenatis orci sodales. Morbi at orci imperdiet, condimentum leo ac, semper quam. Nunc dignissim ligula at ipsum tincidunt, a euismod lorem blandit.
                </p>
               <p>
                   Nulla nunc quam, efficitur a fringilla eu, finibus sit amet ex. Ut vel nibh nisi. Sed commodo massa eget dui finibus, at tristique purus luctus. Vivamus porta, orci eget mollis consectetur, est diam volutpat magna, at ultricies risus orci porttitor sem. Cras turpis nisl, molestie efficitur lacinia ac, consectetur eu nunc. Pellentesque lobortis, dui ut tincidunt posuere, sapien quam ullamcorper ex, vel sodales turpis quam id erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin non tellus tellus. Fusce molestie, sapien sit amet vulputate interdum
               </p>
            </div>

        </div>
    </div>
</section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="form-title">Better Yet,<br>
                        See us in<br>
                        Person!
                    </h1>
                    <p>We love our citizens, so feel free to visit during <br>normal business hours.</p>
                    <p></p>
                    <p style="color:#0062cc;font-weight: bold">sales@cityofbay.org</p>
                    <p></p>
                    <p style="color:#0062cc;font-weight: bold">(870) 781-3386</p>
                </div>
                <div class="col-md-8">
                    <div class="formBox">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Complete the form below...</h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="inputBox ">
                                        <div class="inputText">First Name</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">Last Name</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">Email</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">Mobile</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="inputBox">
                                        <div class="inputText">Email</div>
                                        <textarea class="input"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" name="" class="button" value="Send a request">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-title">Contact Us</h3>
                <p>123 Street, City</p>
                <p>Email: info@example.com</p>
                <p>Phone: 123-456-7890</p>
            </div>
            <div class="col-md-4">
                <h3 class="footer-title">Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="footer-title">Map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5363644662897!2d-73.98542828459344!3d40.74881797932894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25903d9f19bcb%3A0x9d8cb3edf1f1b5e4!2sTimes%20Square%2C%20New%20York%2C%20NY%2010018%2C%20USA!5e0!3m2!1sen!2sca!4v1611305468005!5m2!1sen!2sca" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
