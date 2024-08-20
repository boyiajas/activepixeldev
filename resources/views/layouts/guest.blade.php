<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>
		@yield('title') 
	</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{URL::to('assets/img/favicon.png')}}">
	<link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('assets/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}"> 
	<link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
    <link rel="stylesheet" href="{{URL::to('assets/css/front-end.css')}}">

	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	{{-- message toastr --}}
	

    
    <style>
         .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
			z-index: 999;
			margin-top: 80px;
			
        }
        .navbar-nav {
            flex-direction: row;
        }
        .nav-item {
            margin-right: 15px;
        }
        .nav-item:last-child {
            margin-right: 0;
        }
        .navbar-nav.ml-auto {
            margin-left: auto;
        } 
		.navbar {
        background-color: #0097b2; /* Change to your desired color */
    }

    .navbar-nav .nav-link {
        color: #ffffff; /* Change to the color you want for text */
		font-weight: bold;
    }

	.navbar-nav .nav-link:hover {
        color: #f0f0f0; /* Text color on hover */
        background-color: #5ce1e6; /* Background color on hover */
        text-decoration: underline; /* Underline on hover */
		border-radius: 2px;
		transition: background-color 0.3s, color 0.3s;
	}
	.navbar-nav .nav-link img {
        height: 24px; /* Set the height of the icon */
        background-color: transparent; /* Ensure the background is transparent */
        border: none; /* Remove any border */
        padding: 0; /* Remove any padding */

	}

		.navbar-nav.transparent-image {
        display: block; /* Ensure the image is treated as a block element */
        width: 300px; /* Adjust width as needed */
        height: auto; /* Maintain aspect ratio */
        background-color: transparent; /* Ensure no background color is applied */
    }
		
    
	
    </style>
</head>
<body>
	{{-- message --}}
	{!! Toastr::message() !!}
    <nav class="navbar">
        <div class="container">
            <!-- Left-aligned links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#events">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">About Us</a>
                </li>
            </ul>

            <!-- Centered Logo -->
            <a class="navbar-brand" href="#">
                <img src="assets/img/ActivePixel.PNG" alt="Site Logo" style="height: 150px;">
            </a>

            <!-- Right-aligned links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login/Signup</a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="/cart">
					<i class="fa-solid fa-cart-shopping"></i>
                        <!-- <img src="assets/img/cart.jpg" alt="Transparent Image" class="transparent-image" style="height: 24px;"> -->
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <style>
        .crumb {
            background-image: url('assets/img/runners.jpeg');
            filter: brightness(0.5);
            height: 200px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            animation: fadeInImage 2s ease-in forwards;
            z-index: 1;

        }

        @keyframes fadeInImage {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .overlay-text {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 2;
            padding: 10px 20px;
            /* Optional: Adds some padding around the text */
            /* Optional: Rounds the corners of the background */
        }

        .overlay-text h1 {
            font-size: 70px;
            /* Adjust the font size as needed */
            margin: 0;
            /* Removes default margin */
            font-family: 'Arial', sans-serif;
            /* Optional: Customize the font */
            color: white;
            font-weight: bold;
        }

        .about-icon-box {
            width: 300px;
        }

        .about-icon-box img {
            box-shadow: 2px 2px 2px 2px #aaa;
            border-radius: 15px;
            width: 200px;
            height: 150px;
        }
    </style>
    <div class="crumb">
        <div class="overlay-text">
            <h1>@yield('crumb-overlay-text') </h1>
        </div>
    </div>

	@yield('content')

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<!-- the navbar content ends here -->


	<!-- the footer content goes in here -->
    
    <footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>MORE INFO</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-divider"></div> <!-- Divider -->
        <div class="footer-section">
            <h3>LEGALS & HELP</h3>
            <ul>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">POPIA</a></li>
                <li><a href="#">Need Help?</a></li>
            </ul>
        </div>
        <div class="footer-divider"></div> <!-- Divider -->
        <div class="footer-section">
            <h3>FOLLOW US</h3>
            <div class="social-icons">
                <a href="#"><img src="instagram_icon.png" alt="Instagram"></a>
                <a href="#"><img src="facebook_icon.png" alt="Facebook"></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright © 2024 | All Rights Reserved | Powered by LeoSath.jpeg</p>
    </div>
</footer>

<style>
   footer {
    color: #fff;
    text-align: center;
    font-family: Arial, sans-serif;
}

.footer-container {
    padding: 20px;
    background-color: #0097b2;
    display: flex;
    justify-content: space-around;
    align-items: stretch; /* Ensures all sections have the same height */
    flex-wrap: wrap;
}

.footer-section {
    text-align: center;
    padding: 0 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.footer-section h3 {
    margin-bottom: 15px;
    font-size: 18px;
    text-transform: uppercase;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
    flex-grow: 1; /* Makes the ul take up available space */
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: #5ce1e6;
    text-decoration: none;
    font-size: 14px;
}

.footer-section ul li a:hover {
    text-decoration: underline;
}

.footer-divider {
    width: 1px;
    height: auto; /* The divider will now adjust to the height of the container */
    background-color: #ffffff;
    margin: 0 20px;
}

.social-icons {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1; /* Ensures the social icons take up available space */
}

.social-icons a {
    margin: 0 10px;
    display: inline-block;
}

.social-icons img {
    width: 30px;
    height: 30px;
}

.footer-bottom {
    padding: 20px;
    font-size: 14px;
    background-color: #5ce1e6;
}

.footer-bottom p {
    margin: 0;
}




</style>
    

	<!-- the footer content ends here -->


	<script src="{{URL::to('assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{URL::to('assets/js/popper.min.js')}}"></script>
	<script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::to('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{URL::to('assets/js/script.js')}}"></script>
</body>

</html>