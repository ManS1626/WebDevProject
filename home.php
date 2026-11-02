<?php require_once 'header.php'; ?>
 
<?php require_once 'sidebar.php'; ?>
 
            <div class="col bg-light">
                <!-- Mobile Header with Burger -->
                <div id="myBurger" class="p-3 d-lg-none text-white bg-dark border-bottom border-warning border-opacity-50">
                    <div class="row">
                        <a href="#" class="text-white text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#mySidebar">
                            <i class="bi bi-list"></i><h5 class="ms-3 d-inline text-warning text-uppercase fw-light">CÉLESTE</h5>
                        </a>
                    </div>
                </div>
                 
                <div class="p-4">
                    <?= $content ?? '' ?>
                </div>
                <!-- Hero carousel -->
<div id="heroCarousel" class="carousel slide carousel-fade mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
 
    <div class="carousel-inner border border-warning border-opacity-50">
        <div class="carousel-item active bg-dark text-white text-center" data-bs-interval="5000">
            <div class="px-4 pt-5 pb-5 my-5">
                <i class="bi bi-stars text-warning display-4"></i>
                <h1 class="display-4 text-uppercase fw-light mt-3">The Art of Time.</h1>
                <hr class="border-warning opacity-50 w-25 mx-auto">
                <p class="lead text-white-50 col-lg-6 mx-auto mb-4">
                    Explore and update CÉLESTE's master collection registry and component specs.
                </p>
                <a href="products.php" class="btn btn-outline-warning rounded-0 px-4">View Products</a>
            </div>
        </div>
 
        <div class="carousel-item bg-dark text-white text-center" data-bs-interval="5000">
            <div class="px-4 pt-5 pb-5 my-5">
                <i class="bi bi-gear-wide-connected text-warning display-4"></i>
                <h1 class="display-4 text-uppercase fw-light mt-3">Precision & Fulfillment.</h1>
                <hr class="border-warning opacity-50 w-25 mx-auto">
                <p class="lead text-white-50 col-lg-6 mx-auto mb-4">
                    Oversee live customer orders, order verification, and dispatch logs across all CÉLESTE models.
                </p>
                <a href="orders.php" class="btn btn-outline-warning rounded-0 px-4">Manage Orders</a>
            </div>
        </div>
 
        <div class="carousel-item bg-dark text-white text-center" data-bs-interval="5000">
            <div class="px-4 pt-5 pb-5 my-5">
                <i class="bi bi-moon-stars text-warning display-4"></i>
                <h1 class="display-4 text-uppercase fw-light mt-3">Guided by Our Patrons.</h1>
                <hr class="border-warning opacity-50 w-25 mx-auto">
                <p class="lead text-white-50 col-lg-6 mx-auto mb-4">
                    Discover the stories, preferences, and collections of every CÉLESTE watch owner.
                </p>
                <a href="customers.php" class="btn btn-outline-warning rounded-0 px-4">View Customers</a>
            </div>
        </div>
    </div>
 
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
 
<!-- Welcome message -->
<div class="text-center mb-5">
    <h2 class="text-uppercase fw-light">Welcome to CÉLESTE</h2>
    <hr class="border-warning opacity-75 w-25 mx-auto">
    <p class="text-muted col-lg-6 mx-auto">
        The central hub for CÉLESTE timepieces, client portfolios, team coordination, and global orders.
    </p>
</div>
 
<!-- Quick access cards -->
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4 mb-5">
    <div class="col">
        <div class="card h-100 rounded-0 border-warning border-opacity-50 text-center">
            <div class="card-body p-4">
                <div class="ratio ratio-1x1 w-25 mx-auto mb-3 bg-dark text-warning rounded-circle">
                    <div class="d-flex align-items-center justify-content-center">    
                    <i class="bi bi-pencil-square fs-3"></i>
                    </div>
                </div>
                <h5 class="card-title text-uppercase fw-light">Products</h5>
                <p class="card-text text-muted">Browse and maintain the watch catalogue.</p>
            </div>
            <div class="card-footer bg-white border-0 pb-4">
                <a href="products.php" class="btn btn-dark rounded-0 px-4">Open</a>
            </div>
        </div>
    </div>
 
    <div class="col">
        <div class="card h-100 rounded-0 border-warning border-opacity-50 text-center">
            <div class="card-body p-4">
                <div class="ratio ratio-1x1 w-25 mx-auto mb-3 bg-dark text-warning rounded-circle">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-person fs-3"></i>
                    </div>
                </div>
                <h5 class="card-title text-uppercase fw-light">Customers</h5>
                <p class="card-text text-muted">View and update customer records.</p>
            </div>
            <div class="card-footer bg-white border-0 pb-4">
                <a href="customers.php" class="btn btn-dark rounded-0 px-4">Open</a>
            </div>
        </div>
    </div>
 
    <div class="col">
        <div class="card h-100 rounded-0 border-warning border-opacity-50 text-center">
            <div class="card-body p-4">
                <div class="ratio ratio-1x1 w-25 mx-auto mb-3 bg-dark text-warning rounded-circle">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-badge fs-3"></i>
                    </div>
                </div>
                <h5 class="card-title text-uppercase fw-light">Staffs</h5>
                <p class="card-text text-muted">Manage the team behind the brand.</p>
            </div>
            <div class="card-footer bg-white border-0 pb-4">
                <a href="staffs.php" class="btn btn-dark rounded-0 px-4">Open</a>
            </div>
        </div>
    </div>
 
    <div class="col">
        <div class="card h-100 rounded-0 border-warning border-opacity-50 text-center">
            <div class="card-body p-4">
                <div class="ratio ratio-1x1 w-25 mx-auto mb-3 bg-dark text-warning rounded-circle">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart-plus fs-3"></i>
                    </div>
                </div>
                <h5 class="card-title text-uppercase fw-light">Orders</h5>
                <p class="card-text text-muted">Track and process customer orders.</p>
            </div>
            <div class="card-footer bg-white border-0 pb-4">
                <a href="orders.php" class="btn btn-dark rounded-0 px-4">Open</a>
            </div>
        </div>
    </div>
</div>

<!-- About and contact section -->
<div class="card rounded-0 border-warning border-opacity-50 bg-dark text-white mb-5">
    <div class="card-body p-4 p-lg-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <i class="bi bi-stars text-warning fs-3"></i>
                <h4 class="text-uppercase fw-light text-warning mt-3">Our Concept</h4>
                <hr class="border-warning opacity-50 w-25">
                <p class="text-white-50">
                    CELESTÉ designs and sells automatic mechanical watches, timepieces powered by the
                    motion of the wearer's wrist rather than a battery. Our name reflects the celestial
                    inspiration behind the brand, expressed quietly through small, refined details
                    instead of obvious symbols.
                </p>
                <p class="text-white-50 mb-0">
                    This back office is the central hub for CELESTÉ timepieces, client portfolios,
                    team coordination, and global orders.
                </p>
            </div>

            <div class="col-lg-6">
                <i class="bi bi-envelope text-warning fs-3"></i>
                <h4 class="text-uppercase fw-light text-warning mt-3">Contact</h4>
                <hr class="border-warning opacity-50 w-25">
                <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3">
                        <i class="bi bi-geo-alt text-warning me-3"></i>
                        <span class="text-white-50">CELESTÉ Headquarters, 123 Jalan Contoh, 00000 City, Country</span>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="bi bi-telephone text-warning me-3"></i>
                        <span class="text-white-50">+00 0000 0000</span>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="bi bi-envelope text-warning me-3"></i>
                        <span class="text-white-50">contact@celeste.example</span>
                    </li>
                    <li class="d-flex">
                        <i class="bi bi-clock text-warning me-3"></i>
                        <span class="text-white-50">Monday to Friday, 9:00 AM to 6:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<p class="text-center text-muted small text-uppercase mt-4 mb-0">Elegance in Every Movement.</p>
 
<?php require_once 'footer.php'; ?>
