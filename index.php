<?php 
     include('inc/top.php')
?>


<div class="container-fluid">
    <!-- 1 -->
    <div class="row view-index">
        <div class="nav-trans mt-2 text-white px-lg-5 px-0">
        <?php 
            include('inc/navbar.php')
        ?>
        </div>
        <!-- First Page Content-->
        <?php 
            include('firstpage-content.php')
        ?>
    </div>
    <!-- 2 -->
    <div class="row bg-white mt-5">
        <div class="d-flex flex-row justify-content-center">
            <div class="card border-0" style="width: 75rem;">
                <div class="card-body">

                <!-- Second Page content -->
                    <?php 
                        include('secondpage-content.php')
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- 3 -->
    <div class="row bg-white mt-5">
        <div class="d-flex flex-row justify-content-center">
            <div class="card border-0" style="width: 75rem;">
                <div class="card-body">
                    <div class="row">
                        <!-- third page content -->
                        <?php 
                            include('thirdpage-content.php')
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="row bg-white mt-5">
        <div class="d-flex flex-row justify-content-center">
            <div class="card border-0" style="width: 75rem;">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-3">Ke luar negeri lebih hemat? Bisaaa! 💥</h5>
                    <div class="destination-pills mb-4 position-relative">
                        <div class="scroll-container d-flex flex-nowrap overflow-hidden">
                            <button class="btn btn-outline-primary rounded-pill me-2 active">Singapura</button>
                            <button class="btn btn-outline-primary rounded-pill me-2">Malaysia</button>
                            <button class="btn btn-outline-primary rounded-pill me-2">Jepang</button>
                            
                        </div>
                    </div>

                    <div class="promo-container position-relative">
                        <div class="promo-cards d-flex flex-nowrap overflow-hidden">
                            <!-- Card 1 -->
                            <div class="promo-card me-3">
                                <div class="card">
                                    <div class="card-body">
                                        <small class="text-muted">Jakarta ke</small>
                                        <h5 class="card-title fw-bold text-truncate">Singapore</h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="flight-info">Sekali jalan<br>21 Mei 25</span>
                                            <div class="text-end">
                                                <small class="text-muted">Mulai dari<br><s>IDR 432.000</s></small><br>
                                                <span class="text-danger fw-bold">IDR 436.805</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="airline-info text-truncate">
                                                <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/airplane-take-off.png" class="rounded-circle border border-1 p-1" alt="airplane-take-off"/>
                                                <small class="ms-1">AirAsia Indonesia • Ekonomi</small>
                                            </div>
                                            <span class="badge bg-danger ms-1">Inter Deals</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="promo-card me-3">
                                <div class="card">
                                    <div class="card-body">
                                        <small class="text-muted">Jakarta ke</small>
                                        <h5 class="card-title fw-bold text-truncate">Singapore</h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="flight-info">Sekali jalan<br>10 Jun 25</span>
                                            <div class="text-end">
                                                <small class="text-muted">Mulai dari<br><s>IDR 570.277</s></small><br>
                                                <span class="text-danger fw-bold">IDR 563.733</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="airline-info text-truncate">
                                            <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/airplane-take-off.png" class="rounded-circle border border-1 p-1" alt="airplane-take-off"/>
                                                <small class="ms-1">Jetstar Asia • Ekonomi</small>
                                            </div>
                                            <span class="badge bg-danger ms-1">Inter Deals</span>
                                        </div>
                                        <div class="mt-2 refund-info text-truncate">
                                            <small class="text-muted">Tidak bisa refund Tidak bisa reschedule</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="promo-card me-3">
                                <div class="card">
                                    <div class="card-body">
                                        <small class="text-muted">Jakarta ke</small>
                                        <h5 class="card-title fw-bold text-truncate">Singapore</h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="flight-info">Sekali jalan<br>10 Jun 25</span>
                                            <div class="text-end">
                                                <small class="text-muted">Mulai dari<br><s>IDR 630.000</s></small><br>
                                                <span class="text-danger fw-bold">IDR 604.225</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="airline-info text-truncate">
                                            <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/airplane-take-off.png" class="rounded-circle border border-1 p-1" alt="airplane-take-off"/>
                                                <small class="ms-1">TransNusa • Ekonomi</small>
                                            </div>
                                            <span class="badge bg-danger ms-1">Inter Deals</span>
                                        </div>
                                        <div class="mt-2 refund-info text-truncate">
                                            <small class="text-success">Bisa 100% refund  Bisa reschedule</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="promo-card me-3">
                                <div class="card">
                                    <div class="card-body">
                                        <small class="text-muted">Jakarta ke</small>
                                        <h5 class="card-title fw-bold text-truncate">Singapore</h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="flight-info">Pulang pergi<br>07 Jun 25 - 10 Jun 25</span>
                                            <div class="text-end">
                                                <small class="text-muted">Mulai dari<br><s>IDR 1.000.000</s></small><br>
                                                <span class="text-danger fw-bold">IDR 950.000</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="airline-info text-truncate">
                                            <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/airplane-take-off.png" class="rounded-circle border border-1 p-1" alt="airplane-take-off"/>
                                                <small class="ms-1">Singapore Airlines • Ekonomi</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="promo-card me-3">
                                <div class="card">
                                    <div class="card-body">
                                        <small class="text-muted">Jakarta ke</small>
                                        <h5 class="card-title fw-bold text-truncate">Singapore dengan Nama yang Sangat Panjang</h5>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="flight-info">Sekali jalan<br>15 Jun 25</span>
                                            <div class="text-end">
                                                <small class="text-muted">Mulai dari<br><s>IDR 550.000</s></small><br>
                                                <span class="text-danger fw-bold">IDR 520.500</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="airline-info text-truncate">
                                            <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/airplane-take-off.png" class="rounded-circle border border-1 p-1" alt="airplane-take-off"/>
                                                <small class="ms-1">Scoot Airlines dengan Nama Yang Terlalu Panjang • Ekonomi</small>
                                            </div>
                                            <span class="badge bg-danger ms-1">Inter Deals</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="scroll-arrow promo-scroll-left position-absolute top-50 start-0 translate-middle-y bg-white rounded-circle shadow d-none">
                            <span>&lt;</span>
                        </button>
                        <button class="scroll-arrow promo-scroll-right position-absolute top-50 end-0 translate-middle-y bg-white rounded-circle shadow">
                            <span>&gt;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- FOOTER! -->
    <div class="row bg-white mt-5">
        <?php 
            include('inc/footer.php')
        ?>
    </div>
</div>

<?php 
    include('css/css-fourthpage.php')
?>

<?php 
    include('js/js-fourthpage.php')
?>

<style>
    .nav-item {
        cursor: pointer;
    }
    
    .nav-item.active a {
        color: #0d6efd;
        font-weight: bold;
    }
    
    .nav-link {
        color: #6c757d;
        text-decoration: none;
    }
    
    .nav-tab-container {
        overflow-x: auto;
        white-space: nowrap;
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
    
    .nav-tab-container::-webkit-scrollbar {
        display: none; /* Chrome, Safari, Opera */
    }
</style>