<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&family=Cinzel+Decorative:wght@700;900&display=swap"
        rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bolder" href="#">बिहार UNEXPLORED</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
            </ul>
            <!--<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>-->
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img41.jpg" alt="Rajgir" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="img/img5.jpg" alt="Sher Shah Suri" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="img/img31.jpg" alt="Nalanda" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center display-3">About Us</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="img/img1.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h4 class="display-4">Bihar Tourism For You</h4>
                    <p class="py-5">A land that gave birth to two important religions Buddhism and Jainism, Bihar let
                        the travellers come across its numerous famous pilgrimage sites and ancient monuments. With
                        diverse culture and tradition, Bihar let the tourists explore an important gem from the Indian
                        treasure chest.</p>
                    <a href="about.php" class=" btn btn-outline-dark ">See More</a>
                </div>

            </div>

        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center display-4 py-5">Know More</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/food.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">FOOD</h4>
                            <p class="card-text">Bihari cuisine is incredibly diverse and healthy. Due to its location
                                on the Indo-Gangetic plain, Bihar is well suited for intensive agriculture. It is a
                                significant rice grower in India.</p>
                            <a href="#" class="btn btn-primary">See More</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/festival.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">FESTIVAL</h4>
                            <p class="card-text">Though Bihar is in league with festivals like Holi, Dussehra, Deepavali
                                but chaath puja (6 days after Deepavali) is Bihar’s prime festival honouring the Sun
                                God. Unlike the zestful Holi or the expensive Deepavali) Chaath is a festival of prayer
                                and propitiation observed with solemnity. </p>
                            <a href="#" class="btn btn-primary">See More</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/bhojpuri.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">LANGUAGE</h4>
                            <p class="card-text">The languages that are frequently spoken by the residents and have
                                become an important part of the identity of the state of Bihar are Hindi and Urdu. These
                                pair of dialects are not only confined in the state of Bihar but have penetrated into
                                most of the homes across the vast length of the country.</p>
                            <a href="#" class="btn btn-primary">See More</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center display-4 py-5">Gallery</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gg1.jpg" class="img-fluid pb-5">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/g1.jpg" class="img-fluid pb-5">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/g2.jpg" class="img-fluid pb-5">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/g10.jpg" class="img-fluid pb-5">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/g4.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/g5.jpg" class="img-fluid pb-5">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/food1.jpg" class="img-fluid pb-5">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/g8.jpg" class="img-fluid pb-5">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/g9.jpg" class="img-fluid pb-5">
                </div>

            </div>

        </div>

    </section>

    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center display-4 py-5">Contact Us</h1>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comments"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </form>
        </div>
    </section>


    <footer>
        <p class="p-2 bg-dark text-white text-center">@the-bihar-tourism</p>
    </footer>









    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>