<?php 
     include('inc/db.php')
?>
<?php 
     include('inc/top.php')
?>
<style>
    .text-promosi h1{
        transform: translateY(450px) translateX(130px);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .pesawat-form{
            border-radius: var(--bs-border-radius-lg) !important;
            width: 60%;
            margin-left: 20%;
            }
    @media (max-width: 768px) {
            .pesawat-form{
                margin-left: 0;
                width: 100%;
                box-shadow: none !important;
                transform: translateY(-15px);
                border-radius: var(--bs-border-radius-xl) !important;
                border-bottom-right-radius: 0 !important;
                border-bottom-left-radius: 0 !important;
                
            }
            .pesawat-bg{
                background-color: white;
            }
        }
</style>
<style>
    .checkbox{
    opacity: 0;
    position: absolute;
    display: none !important;
    }
    .checkbox-label{
    background-color:  #ffffff;
    width: 60px;  /* Increased from 50px */
    height: 35px; /* Increased from 26px */
    border-radius: 50px;
    position: relative;
    padding: 5px;
    display: flex;
    justify-content: space-between;
    align-items: left;
    transition: background-color 0.3s ease; /* Add smooth transition */
    }
    .checkbox:checked + .checkbox-label {
    background-color: #ffffff; /* Changes to white when switched on */
    }
    .fa-moon {
    color: #0d6efd;
    font-size: 18px; /* Added for larger icon */
    margin-left: 5px; /* Better positioning */
    margin-top: 4px;
    }
    .fa-sun{
    color:rgb(248, 174, 55);
    font-size: 18px; /* Added for larger icon */
    margin-right: 3px; /* Better positioning */
    
    margin-top: 4px;
    }
    .checkbox-label .ball{
    background-color: #0d6efd;
    width: 30px;  /* Increased from 22px */
    height: 30px; /* Increased from 22px */
    position: absolute;
    left: 3px;
    top: 3px;
    border-radius: 50%;
    transition: transform 0.2s linear;
    }
    .checkbox:checked + .checkbox-label .ball {
    transform: translateX(24px); /* Adjusted based on new width */
    }
    #checkbox {display: none;}
    </style>

<!-- Add CSS for smooth transition -->
<style>
    .collapse-section {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        opacity: 0;
    }
    
    .collapse-section.show {
        max-height: 100px; /* Adjust based on your content's height */
        opacity: 1;
        transition: max-height 0.3s ease-in, opacity 0.3s ease-in;
    }
    
    .collapse-section hr {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .date-display {
        transition: background-color 0.2s;
    }
    
    .date-display:hover {
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 4px;
        padding: 2px 4px;
        margin: -2px -4px;
    }
    
    .date-picker {
        margin-top: 8px;
        width: 100%;
    }
</style>

<div class="container-fluid">
    <!-- 1 -->
    <div class="row view-index-kapal">
        <!-- First Page Content-->
        <div class="position-absolute text-promosi">
            <h1 class="col-md-5 text-white fw-bold">Ferry
            <br>
            <p class="fs-3 fw-bold pt-2">Solusi perjalanan hemat lintas pulau</p></h1>
        </div>
        <div class="nav-trans mt-2 text-white px-lg-5 px-0">
        <?php 
            include('inc/navbar.php')
        ?>
        </div>
        
        <div class="col-md-5 offset-0 offset-lg-6 offset-md-6 pesawat-bg p-0">
            <div class="rounded-5 shadow pesawat-form bg-white" style="height: auto; padding: 2rem;">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group bg-primary p-3 rounded-3" style=" --bs-bg-opacity: 0.08;">
                                <!-- dari -->
                                <label class="text-muted small">Dari</label>
                                <div class="fw-semibold" style="font-size: 14px;">
                                    <select class="form-select" id="inputDari" name="inputDari" required>
                                        <option value="">Dari mana?</option>
                                        <?php
                                            $select_kapal = "SELECT * FROM vehicles WHERE type = 'ship'";
                                            $kapal_run = mysqli_query($conn, $select_kapal);
                                            
                                            while($kapal_row = mysqli_fetch_array($kapal_run)) {
                                                $kapal_id = $kapal_row['id'];
                                                
                                                $select_route = "SELECT * FROM route_assign WHERE vehicle_id = '$kapal_id'";
                                                $route_run = mysqli_query($conn, $select_route);
                                                
                                                while($route_row = mysqli_fetch_array($route_run)) {
                                                    $route_id = $route_row['routes_id'];
                                                    
                                                    $routes = "SELECT * FROM routes WHERE id = '$route_id'";
                                                    $routes_run = mysqli_query($conn, $routes);
                                                    
                                                    while($routes_row = mysqli_fetch_array($routes_run)) {
                                                        $routes_origin = $routes_row['origin'];
                                                        $routes_destination = $routes_row['destination'];
                                                ?>
                                                <option value="<?php echo $route_id; ?>"><?php echo $routes_origin; ?></option>
                                                <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </select>
                                </div><hr>
                                
                                
                                <!-- ke -->
                                <label class="text-muted small">Ke</label>
                                <div class="text-muted fw-medium" style="font-size: 14px;">
                                    <select class="form-select" id="inputTujuan" name="inputTujuan" required>
                                        <option value="">Mau Kemana?</option>

                                        <?php
                                            $select_kapal = "SELECT * FROM vehicles WHERE type = 'ship'";
                                            $kapal_run = mysqli_query($conn, $select_kapal);
                                            
                                            while($kapal_row = mysqli_fetch_array($kapal_run)) {
                                                $kapal_id = $kapal_row['id'];
                                                
                                                $select_route = "SELECT * FROM route_assign WHERE vehicle_id = '$kapal_id'";
                                                $route_run = mysqli_query($conn, $select_route);
                                                
                                                while($route_row = mysqli_fetch_array($route_run)) {
                                                    $route_id = $route_row['routes_id'];
                                                    
                                                    $routes = "SELECT * FROM routes WHERE id = '$route_id'";
                                                    $routes_run = mysqli_query($conn, $routes);
                                                    
                                                    while($routes_row = mysqli_fetch_array($routes_run)) {
                                                        $routes_origin = $routes_row['origin'];
                                                        $routes_destination = $routes_row['destination'];
                                                ?>
                                                <option value="<?php echo $route_id; ?>"><?php echo $routes_destination; ?></option>
                                                <?php
                                                    }
                                                }
                                            }
                                        ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group bg-primary p-3 rounded-3" style=" --bs-bg-opacity: 0.08;">
                                <!-- tanggal -->
                                 <div class="row">
                                    <div class="col">
                                        <label class="text-muted small">Tanggal</label>
                                        <div class="fw-semibold date-display" id="pergiDateDisplay" style="font-size: 14px; cursor: pointer;">Sab, 19 Apr</div>
                                        <input type="date" id="pergiDatePicker" name="tanggal" class="form-control date-picker" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group bg-primary p-3 rounded-3" style=" --bs-bg-opacity: 0.08;">
                                <div class="fw-semibold">
                                    <!-- Button trigger modal - ID ditambahkan untuk referensi dari JavaScript -->
                                    <a href="#" class="text-decoration-none text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 14px;" id="passengerSummary">1 Penumpang, Ekonomi</a>
                                    <input type="hidden" id="adultPassengers" name="dewasa" value="1">
                                    <input type="hidden" id="childPassengers" name="anak" value="0">
                                    <input type="hidden" id="infantPassengers" name="bayi" value="0">
                                    <input type="hidden" id="classType" name="kelas" value="Ekonomi">
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <button class="btn btn-primary mx-auto w-100 fw-bold py-2" type="submit" name="submit">Ayo Cari</button><br>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Bagian Jadwal -->
    <?php
    if(isset($_POST['submit'])) {
        // Ambil data dari form
        $route_id = $_POST['inputDari'];
        $tanggal = $_POST['tanggal'];
        $dewasa = $_POST['dewasa'];
        $anak = $_POST['anak'];
        $bayi = $_POST['bayi'];
        $kelas = $_POST['kelas'];
        
        // Format tanggal untuk display
        $display_date = date('D, d M y', strtotime($tanggal));
        
        // Ambil informasi rute
        $route_query = "SELECT origin, destination, base_price FROM routes WHERE id = '$route_id'";
        $route_result = mysqli_query($conn, $route_query);
        $route_data = mysqli_fetch_assoc($route_result);
        
        if($route_data) {
            $origin = $route_data['origin'];
            $destination = $route_data['destination'];
            $base_price = $route_data['base_price'];
            
            // Cari jadwal berdasarkan route_id dan tanggal
            $schedule_query = "SELECT s.*, v.type, v.plate_number, v.capacity 
                              FROM schedule s 
                              JOIN vehicles v ON s.vehicle_id = v.id 
                              WHERE s.route_id = '$route_id' 
                              AND DATE(s.departure_time) = '$tanggal'";
            $schedule_result = mysqli_query($conn, $schedule_query);
            
            // Hitung total penumpang
            $total_passengers = $dewasa + $anak;
            
            // Hitung total harga dasar
            $total_base_price = $base_price * $total_passengers;
            
            // Pajak atau biaya tambahan (contoh: 10%)
            $tax = 0; // Bisa disesuaikan jika ada pajak
            
            // Total harga akhir
            $total_price = $total_base_price + $tax;
        ?>
        <div class="row bg-white mt-5">
            <div class="d-flex flex-row justify-content-center">
                <div class="card border-0" style="width: 86rem;">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="fw-bold text-primary">Pergi • <?php echo $display_date; ?></h4><hr>
                            <h5 class="fw-bold"><?php echo $origin; ?> → <?php echo $destination; ?></h5>

                            <?php
                            if(mysqli_num_rows($schedule_result) > 0) {
                                while($schedule = mysqli_fetch_assoc($schedule_result)) {
                                    // Format waktu keberangkatan dan kedatangan
                                    $departure_time = date('H:i', strtotime($schedule['departure_time']));
                                    $arrival_time = date('H:i', strtotime($schedule['arrival_time']));
                                    
                                    // Hitung durasi perjalanan dalam menit
                                    $departure = new DateTime($schedule['departure_time']);
                                    $arrival = new DateTime($schedule['arrival_time']);
                                    $interval = $departure->diff($arrival);
                                    $duration_minutes = ($interval->h * 60) + $interval->i;
                                    
                                    // Kapal dan kapasitas
                                    $vehicle_name = $schedule['plate_number'];
                                    $capacity = $schedule['capacity'];
                                    $available_seats = $schedule['available_seats'];
                            ?>
                            <div class="card w-100 mb-3 overflow-hidden p-0">
                                <div class="row g-0 h-100 m-0">
                                    <div class="col-md-4 p-0">
                                        <img src="image/promo/kapal pelni.png" class="w-100 h-100 object-fit-cover" alt="Ship image">
                                    </div>
                                    <div class="col-md-8 d-flex flex-column">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold"><?php echo $vehicle_name; ?></h5>
                                            <p class="card-text">Estimasi waktu penyeberangan <?php echo $duration_minutes; ?> menit</p>
                                            <p class="card-text rounded-1 bg-primary p-2" style=" --bs-bg-opacity: 0.10;"><small class="text-dark fw-bold">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#0d6efd"><path d="M444-288h72v-240h-72v240Zm35.79-312q15.21 0 25.71-10.29t10.5-25.5q0-15.21-10.29-25.71t-25.5-10.5q-15.21 0-25.71 10.29t-10.5 25.5q0 15.21 10.29 25.71t25.5 10.5Zm.49 504Q401-96 331-126t-122.5-82.5Q156-261 126-330.96t-30-149.5Q96-560 126-629.5q30-69.5 82.5-122T330.96-834q69.96-30 149.5-30t149.04 30q69.5 30 122 82.5T834-629.28q30 69.73 30 149Q864-401 834-331t-82.5 122.5Q699-156 629.28-126q-69.73 30-149 30Z"/></svg>   
                                            Masuk pelabuhan (check-in) sebelum <?php echo $departure_time; ?></small></p>
                                            
                                            <div class="p-2">
                                                <div class="row border border-secondary-subtle rounded-2">
                                                    <div class="col-md-4 mt-md-3 mt-3 col-6">
                                                        <div class="d-flex flex-row justify-content-start">
                                                            <p><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#434343"><path d="M324-696q-35 0-59.5-24.5T240-780q0-35 24.5-59.5T324-864q35 0 59.5 24.5T408-780q0 35-24.5 59.5T324-696Zm252 504H299q-26 0-46-16t-25-42l-84-422h73l84 408h275v72Zm180 48-96-168H422q-34 0-60-21t-34-54l-40-184q-8-39 15-70.5t62-31.5q33 0 56.5 19t30.5 49l45 197h176q19 0 35.5 9.5T735-372l105 180-84 48Z"/></svg></p>
                                                            <p class="ms-1">Kursi</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-md-3 mt-3 col-6">
                                                        <div class="d-flex flex-row justify-content-start">
                                                            <p><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#434343"><path d="M293-624q-21 0-37-14t-16-34q0-45 22-83.5t60-61.5l158-95 158 95q38 23 60 61.5t22 83.5q0 21-16 34.5T666-624H293ZM48-144v-490q-18-10-27-25.5T12-696q0-21 21-56t51-64q30 29 51 64t21 56q0 21-9 36.5T120-634v202h72v-72q0-30 21-51t51-21h432q30 0 51 21t21 51v72h72v-202q-18-10-27-25.5t-9-36.5q0-21 20.5-56t51.5-64q30 29 51 64t21 56q0 21-9.5 36.5T912-634v490H576v-144q0-40-28-68t-68-28q-40 0-68 28t-28 68v144H48Z"/></svg></p>
                                                            <p class="ms-1">Tempat Sholat</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-md-3 col-6">
                                                        <div class="d-flex flex-row justify-content-start">
                                                            <p><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#434343"><path d="m384-360 264-168-264-168v336Zm-48 216v-96H168q-29.7 0-50.85-21.16Q96-282.32 96-312.04v-432.24Q96-774 117.15-795T168-816h624q29.7 0 50.85 21.16Q864-773.68 864-743.96v432.24Q864-282 842.85-261T792-240H624v96H336Z"/></svg></p>
                                                            <p class="ms-1">Tv</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-6">
                                                        <div class="d-flex flex-row justify-content-start">
                                                            <p><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#434343"><path d="M168-480q-29.7 0-50.85-21.15Q96-522.3 96-552v-240q0-29.7 21.15-50.85Q138.3-864 168-864h624q29.7 0 50.85 21.15Q864-821.7 864-792v240q0 29.7-21.15 50.85Q821.7-480 792-480h-96v-168q0-29.7-21.17-50.85Q653.67-720 623.94-720H335.72Q306-720 285-698.85T264-648v168h-96Zm144 72h72q0 70-49.14 119T216-240h-24v-72h24q40 0 68-28t28-68Zm24-72v-168h288v168H336Zm108 288v-216h72v216h-72Zm132-216h72q0 40 28 68t68 28h24v72h-24q-69.72 0-118.86-49.14T576-408Z"/></svg></p>
                                                            <p class="ms-1">Ac</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-6">
                                                        <div class="d-flex flex-row justify-content-start">
                                                            <p><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#434343"><path d="M216-96v-288h-72v-192q0-29.7 21.15-50.85Q186.3-648 216-648h144q29.7 0 50.85 21.15Q432-605.7 432-576v192h-72v288H216Zm71.75-600q-34.75 0-59.25-24.75t-24.5-59.5q0-34.75 24.75-59.25t59.5-24.5q34.75 0 59.25 24.75t24.5 59.5q0 34.75-24.75 59.25t-59.5 24.5ZM600-96v-192H480l105-314q7-20 24.2-33t38.8-13q21.6 0 38.8 13 17.2 13 24.2 33l105 314H696v192h-96Zm47.75-600q-34.75 0-59.25-24.75t-24.5-59.5q0-34.75 24.75-59.25t59.5-24.5q34.75 0 59.25 24.75t24.5 59.5q0 34.75-24.75 59.25t-59.5 24.5Z"/></svg></p>
                                                            <p class="ms-1">Toilet</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-6">
                                                        <div class="d-flex flex-row justify-content-start">
                                                            <p><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#434343"><path d="M240-144v-72h204v-161L144-720v-96h672v96L516-377v161h204v72H240Zm42-528h396l63-72H219l63 72Z"/></svg></p>
                                                            <p class="ms-1">Kantin</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white mt-auto">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="text-dark">Total Harga</h6>
                                                    <a href="#" type="button" data-bs-toggle="modal" class="text-decoration-none" data-bs-target="#priceDetails">
                                                        <h6 class="fw-bold text-primary">IDR <?php echo number_format($total_price, 0, ',', '.'); ?><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#434343"><path d="M480-333 240-573l51-51 189 189 189-189 51 51-240 240Z"/></svg></h6>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex flex-row justify-content-end">
                                                        <a href="#" class="btn btn-primary">Pilih Tiket</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }
                            } else {
                            ?>
                            <div class="alert alert-info mt-3">
                                <h5 class="text-center">Kapal tidak memiliki jadwal untuk rute dan tanggal yang dipilih</h5>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal untuk Detail Harga -->
        <div class="modal fade" id="priceDetails" tabindex="-1" aria-labelledby="priceDetails" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="--bs-modal-width: 600px;">
                <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="fw-bold mb-3">Detail Harga Tiket</h5>
                    <h5 class="fw-bold mb-3"><?php echo $origin; ?> → <?php echo $destination; ?></h5>
                    
                    <div class="card rounded-3 mb-3">
                        <div class="card-body">
                            <p>Penumpang: <?php echo $dewasa; ?> Dewasa, <?php echo $anak; ?> Anak-anak</p><hr>
                            <p>Harga</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>• Tiket Dewasa (<?php echo $dewasa; ?> x IDR <?php echo number_format($base_price, 0, ',', '.'); ?>)</td>
                                        <td class="text-end">IDR <?php echo number_format($base_price * $dewasa, 0, ',', '.'); ?></td>
                                    </tr>
                                    <?php if($anak > 0): ?>
                                    <tr>
                                        <td>• Tiket Anak (<?php echo $anak; ?> x IDR <?php echo number_format($base_price, 0, ',', '.'); ?>)</td>
                                        <td class="text-end">IDR <?php echo number_format($base_price * $anak, 0, ',', '.'); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table><hr>

                            <p>Biaya Lainnya</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>• Pajak</td>
                                        <td class="text-end">IDR <?php echo number_format($tax, 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr class="fw-bold">
                                        <td>Total</td>
                                        <td class="text-end">IDR <?php echo number_format($total_price, 0, ',', '.'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Selesai</button>
                </div>
                </div>
            </div>
        </div>
    <?php
        }
    }
    ?>

     <!-- Modal Penumpang -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="--bs-modal-width: 600px;">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">Penumpang & Kelas Kabin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Dewasa -->
                <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                    <div>
                        <p class="fw-semibold mb-0">Dewasa</p>
                        <small class="text-secondary">12+ tahun</small>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <button class="btn btn-sm btn-outline-secondary" onclick="decrementCount('dewasa')">-</button>
                        <span id="dewasa-count" class="mx-3">1</span>
                        <button class="btn btn-sm btn-outline-secondary" onclick="incrementCount('dewasa')">+</button>
                    </div>
                </div>

                <!-- Anak -->
                <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                    <div>
                        <p class="fw-semibold mb-0">Anak</p>
                        <small class="text-secondary">2-11 tahun</small>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <button class="btn btn-sm btn-outline-secondary" onclick="decrementCount('anak')">-</button>
                        <span id="anak-count" class="mx-3">0</span>
                        <button class="btn btn-sm btn-outline-secondary" onclick="incrementCount('anak')">+</button>
                    </div>
                </div>

                <!-- Bayi -->
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div>
                        <p class="fw-semibold mb-0">Bayi</p>
                        <small class="text-secondary">Dibawah 2 tahun</small>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <button class="btn btn-sm btn-outline-secondary" onclick="decrementCount('bayi')">-</button>
                        <span id="bayi-count" class="mx-3">0</span>
                        <button class="btn btn-sm btn-outline-secondary" onclick="incrementCount('bayi')">+</button>
                    </div>
                </div>

                <hr class="my-3">

                <!-- Kelas Kabin -->
                <p class="fw-semibold">Kelas Kabin</p>
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-outline-primary class-btn active" data-class="Ekonomi" onclick="selectClass(this, 'Ekonomi')">Ekonomi</button>
                    <button class="btn btn-outline-primary class-btn" data-class="Bisnis" onclick="selectClass(this, 'Bisnis')">Bisnis</button>
                    <button class="btn btn-outline-primary class-btn" data-class="First Class" onclick="selectClass(this, 'First Class')">First Class</button>
                </div>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" id="doneButton" class="btn btn-primary" onclick="finishSelection()">Selesai</button>
            </div>
        </div>
    </div>
</div>
    
    <!-- FOOTER! -->
    <div class="row bg-white mt-5">
        <?php 
            include('inc/footer.php')
        ?>
    </div>
</div>

<script>
    // Tetapkan nilai minimum dan maksimum untuk setiap kategori
    const minValues = {
        'dewasa': 1,  // Minimal harus ada 1 dewasa
        'anak': 0,
        'bayi': 0
    };

    const maxValues = {
        'dewasa': 10,  // Maksimum 10 penumpang dewasa
        'anak': 6,
        'bayi': 4
    };

    // Inisialisasi nilai awal
    const counts = {
        'dewasa': 1,
        'anak': 0,
        'bayi': 0
    };

    // Variable untuk menyimpan kelas yang dipilih
    let selectedClass = 'Ekonomi';

    function incrementCount(type) {
        if (counts[type] < maxValues[type]) {
            counts[type]++;
            document.getElementById(`${type}-count`).textContent = counts[type];
            updateButtonStates();
            updatePassengerSummary();
        }
    }

    function decrementCount(type) {
        if (counts[type] > minValues[type]) {
            counts[type]--;
            document.getElementById(`${type}-count`).textContent = counts[type];
            updateButtonStates();
            updatePassengerSummary();
        }
    }

    function updateButtonStates() {
        // Disable tombol minus jika nilai sudah minimal
        for (const type in counts) {
            const minusButton = document.querySelector(`button[onclick="decrementCount('${type}')"]`);
            if (counts[type] <= minValues[type]) {
                minusButton.disabled = true;
                minusButton.style.opacity = '0.5';
            } else {
                minusButton.disabled = false;
                minusButton.style.opacity = '1';
            }

            // Disable tombol plus jika nilai sudah maksimal
            const plusButton = document.querySelector(`button[onclick="incrementCount('${type}')"]`);
            if (counts[type] >= maxValues[type]) {
                plusButton.disabled = true;
                plusButton.style.opacity = '0.5';
            } else {
                plusButton.disabled = false;
                plusButton.style.opacity = '1';
            }
        }
    }

    // Fungsi untuk mengupdate tampilan jumlah penumpang
    function updatePassengerSummary() {
        // Menghitung total penumpang
        const totalPassengers = counts.dewasa + counts.anak + counts.bayi;
        
        // Membuat teks yang tepat berdasarkan jumlah penumpang
        let passengerText = totalPassengers + " Penumpang";
        
        // Update teks pada tombol
        document.getElementById('passengerSummary').textContent = passengerText + ', ' + selectedClass;
    }

    // Fungsi untuk pemilihan kelas
    function selectClass(button, className) {
        // Hapus kelas 'active' dari semua tombol
        document.querySelectorAll('.class-btn').forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Tambahkan kelas 'active' ke tombol yang diklik
        button.classList.add('active');
        
        // Update nilai kelas yang dipilih
        selectedClass = className;
        
        // Update tampilan
        updatePassengerSummary();
    }

    // Ketika tombol selesai diklik
    function finishSelection() {
        // Tutup modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
        modal.hide();
    }

    // Panggil sekali pada saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        updateButtonStates();
        
        // Inisialisasi tombol kelas
        document.querySelectorAll('.class-btn').forEach(button => {
            button.addEventListener('click', function() {
                selectClass(this, this.getAttribute('data-class'));
            });
        });
        
        // Set event listener untuk tombol selesai
        document.getElementById('doneButton').addEventListener('click', finishSelection);
        
        // Update tampilan awal
        updatePassengerSummary();
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Date picker functionality
    const pergiDateDisplay = document.getElementById('pergiDateDisplay');
    const pergiDatePicker = document.getElementById('pergiDatePicker');
    
    // Set today's date as default
    const today = new Date();
    
    // Format date for the date input
    const formatDateForInput = (date) => {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    };
    
    // Format date for display
    const formatDateForDisplay = (date) => {
        const options = { weekday: 'short', day: 'numeric', month: 'short' };
        return date.toLocaleDateString('id-ID', options);
    };
    
    // Set initial values - use today's date
    pergiDatePicker.value = formatDateForInput(today);
    pergiDateDisplay.textContent = formatDateForDisplay(today);
    
    // Toggle between display and input when clicking the date display
    pergiDateDisplay.addEventListener('click', function() {
        pergiDateDisplay.style.display = 'none';
        pergiDatePicker.style.display = 'block';
        pergiDatePicker.focus();
    });
    
    // Update display when date is selected
    pergiDatePicker.addEventListener('change', function() {
        const selectedDate = new Date(this.value);
        pergiDateDisplay.textContent = formatDateForDisplay(selectedDate);
        pergiDatePicker.style.display = 'none';
        pergiDateDisplay.style.display = 'block';
    });
    
    // Hide date picker and show display when clicking outside
    document.addEventListener('click', function(event) {
        if (event.target !== pergiDateDisplay && event.target !== pergiDatePicker) {
            if (pergiDatePicker.style.display === 'block') {
                pergiDatePicker.style.display = 'none';
                pergiDateDisplay.style.display = 'block';
            }
        }
    });
    
    // Prevent event propagation when clicking on the date picker
    pergiDatePicker.addEventListener('click', function(event) {
        event.stopPropagation();
    });
});
</script>