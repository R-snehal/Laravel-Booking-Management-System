@extends('layout.baseview')
@section('title','Login')
@section('style')
<style>
    body {
    background-color: #F5F5DC !important; /* Beige */
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
 .navbar-brand img {
  width: 60px;
}
.navbar-nav {
  align-items: center;
}
.navbar .navbar-nav .nav-link {
  
  font-size: 1.1em;
  padding: 0.5em 1em;
}
@media screen and (min-width: 768px) {
  .navbar-brand img {
    width: 80px;
  }
  .navbar-brand {
    margin-right: 0;
    padding: 0 1em;
  }
}
.quick-links {
    float: right; /* Moves the section to the right */
    text-align: right; /* Aligns the text to the right */
}

</style>
@endsection
@section('content')
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <div class="navbar-nav mx-auto text-black">
                        
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('page/team') }}" class="nav-item nav-link text-black">Team</a>
                        <a href="#" class="navbar-brand d-none d-md-block">
                           <img src="{{asset('assets/images/logo.jpg')}}"  alt="Brand Logo">
                        </a>
                        <a href="{{ url('page/about-us') }}" class="nav-link text-black">About Us</a>
                        <a href="{{ url('page/contact-us') }}" class="nav-item nav-link text-black">Contact Us</a>
                       @if(isset($pages) && is_array($pages))
                            @foreach($pages as $page)
                                <a href="{{url('page/'.$page->slug)}}" class="nav-item nav-link text-black">{{$page->name}}</a>                       
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" ></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?cs=srgb&dl=pexels-pixabay-258154.jpg&fm=jpg" class="d-block w-100" alt="Carousel 1" style="max-height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img src="https://marquishotels.in/wp-content/uploads/2019/05/About-Marquis-Resort.png" class="d-block w-100" alt="Carousel 2" style="max-height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img src="https://news.airbnb.com/wp-content/uploads/sites/4/2019/06/PJM020719Q202_Luxe_WanakaNZ_LivingRoom_0264-LightOn_R1.jpg?fit=2500%2C1666" class="d-block w-100" alt="Carousel 3" style="max-height: 100vh;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </header>
    <main class="m-5">
        <section class="container m-4" id="about-us">
            <h6 class="display-5 text-center">About Us</h6>
            <div class="row">
                <div class="col-md-5">
                    <div class="container">
                        <img src="https://sangvish.com/wp-content/uploads/2021/05/how-airbnb-clone-software-works.jpg" class="d-block w-100" alt="About us">
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="text-black-50">
                        Welcome to Serene Stays, your trusted partner in seamless booking management. Whether you own a hotel, manage vacation rentals, or oversee serviced apartments, our platform is designed to simplify your operations and enhance guest experiences.
                    </p>
                    <p>
                        At Serene Stays, we understand the challenges of managing reservations, coordinating guest stays, and handling payments. That’s why we offer an intuitive and reliable system that automates and streamlines these processes, allowing you to focus on what truly matters—providing outstanding hospitality. Our advanced features ensure real-time availability updates, secure transactions, and smooth communication between hosts and guests, all in one centralized platform.We are committed to innovation, efficiency, and customer satisfaction. Our goal is to empower property owners and managers with the tools they need to optimize their business operations while delivering a hassle-free experience for their guests.
                    </p>
                </div>
            </div>
            <br>
            <div class="row">
                <h6 class="display-6 text-center">What Makes us Unique</h6>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-person color-teal icon-lg"></span>
                        <p>Custom Tailored user Options</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-shield-shaded color-teal icon-lg"></span>
                        <p>Privary First Approach</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-list color-teal icon-lg"></span>
                        <p>Multiple Variations</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="container m-4">
            <h6 class="display-5 text-center">Our Innovative Team</h6>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://www.franklin.edu/sites/default/files/styles/btcb_photo/public/fr/back%20to%20college%20blog/main%20images/iStock-536315323.jpg?itok=tow3SZr5">
                            <div class="card-body text-center">
                                <h4 class="card-title"> Sophia Reynolds</h4>
                                <p class="card-text">Frontend Developer</p>
                                <p>. With expertise in modern frameworks and UI/UX best practices, she ensures that every user interaction is seamless and visually appealing</p>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
                            <div class="card-body text-center">
                                <h4 class="card-title">Olivia Carter</h4>
                                <p class="card-text">Backend Developer </p>
                                <p>Specializing in databases, APIs, and server-side logic, she ensures that Serene Stays operates smoothly, efficiently handling bookings and data securely.</p>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://t4.ftcdn.net/jpg/09/56/08/95/240_F_956089574_8AcEJWSrx6EOIoJhko7Ho22cciW2STTE.jpg">
                            <div class="card-body text-center">
                                <h4 class="card-title">Daniel Mitchell</h4>
                                <p class="card-text"> Database Administrator </p>
                                <p> Ensuring that all booking information is securely stored, efficiently managed, and easily accessible when needed. His expertise in data optimization and security keeps Serene Stays reliable and robust.</p>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="container m-4">
            <h6 class="display-5 text-center ">Contact Us</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="container p-3">
                        <p class="text-muted text-center fs-3">Here's our Contact Info</p>
                        <div class="text-black-s text-center fs-4">Our Email</div>
                        <div class="text-black-50 text-center fs-5">support@example.com</div>
                        <div class="text-black-s text-center fs-4">Our Phone No.</div>
                        <div class="text-black-50 text-center fs-5">+91 85658 98563</div>
                        <div class="text-black-s text-center fs-4">Our Address</div>
                        <div class="text-black-50 text-center fs-5">HSR Layout, Bangalore <br> Karnatake 560 XXX</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <p class="text-muted text-center fs-3">You can also Write to Us</p>
                        <div class="container p-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="name" class="form-label">Enter Your Name</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailid" class="form-label">Enter Your Email</label>
                                            <input type="email" class="form-control" name="email" id="emailid">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="form-label">Enter the subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="form-label">Enter Your Message</label>
                                            <textarea class="form-control" name="message" id="message"></textarea>
                                        </div>
                                        <div class="form-group text-center">                                               
                                            <input type="submit" class="btn btn-outline-dark" value="Send Message">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container m-5">
                        <img src="assets/logo.png" height="30px" class="bg-white">
                        <div>
                            <p class="text-white">"Innovating the Future of Hospitality"</p>
                            <p  class="text-white">At Serene Stays, we believe in seamless travel experiences. From easy bookings to secure stays, we’re here to make hospitality effortless.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container m-5">
                        <p class="text-white fs-5">Quick Links</p>
                        <ul class="remove-bullets remove-text-decoration">
                            <li><a  href="#" class="remove-text-decoration text-white">Team</a></li>
                            <li><a  href="#" class="remove-text-decoration text-white">About Us</a></li>
                            <li><a href="#" class="remove-text-decoration text-white">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-white text-center">
                    <p>All rights reserved &copy 2022, <a href="1stop.ai">1Stop.ai</a></p>
                </div>
            </div>
        </div>
    </footer>
@endsection
@section('customjs')
<script>
</script>
@endsection