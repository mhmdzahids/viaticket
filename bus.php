<?php 
     include('inc/top.php')
?>
<style>
    .text-promosi h1{
        transform: translateY(150px) translateX(130px);
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
    <div class="row view-index-bus">
        <!-- First Page Content-->
        <div class="position-absolute text-promosi">
            <h1 class="col-md-6 text-white fw-bold">Yuk, cari tiket bus dan travel terbaik untuk kebutuhanmu.</h1>
        </div>
        <div class="nav-trans mt-2 text-white px-lg-5 px-0">
        <?php 
            include('inc/navbar.php')
        ?>
        </div>
        
        <div class="col-md-5 offset-0 offset-lg-6 offset-md-6 pesawat-bg p-0">
            <div class="rounded-5 shadow pesawat-form bg-white" style="height: auto; padding: 2rem;">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group bg-primary p-3 rounded-3" style=" --bs-bg-opacity: 0.08;">
                                <!-- dari -->
                                <label class="text-muted small">Dari</label>
                                <div class="fw-semibold" style="font-size: 14px;">Jakarta</div><hr>

                                <!-- ke -->
                                <label class="text-muted small">Ke</label>
                                <div class="text-muted fw-medium" style="font-size: 14px;">Mau kemana?</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group bg-primary p-3 rounded-3" style=" --bs-bg-opacity: 0.08;">
                                <!-- tanggal -->
                                 <div class="row">
                                    <div class="col">
                                        <label class="text-muted small">Pergi</label>
                                        <div class="fw-semibold date-display" id="pergiDateDisplay" style="font-size: 14px; cursor: pointer;">Sab, 19 Apr</div>
                                        <input type="date" id="pergiDatePicker" class="date-picker" style="display: none;">
                                    </div>
                                    <div class="col">
                                        <div class="d-flex flex-row justify-content-end pt-2">
                                            <div class="col d-flex flex-row justify-content-end align-self-center me-2 pt-1">
                                                <p class="text-muted" style="font-size: x-small;">Pulang-Pergi?</p>
                                            </div>

                                            <!-- tombol switch pulang pergi -->
                                            <div class="col">
                                                <input type="checkbox" class="checkbox" id="checkbox">
                                                <label for="checkbox" class="checkbox-label">
                                                    <span class="ball"></span>                  
                                                </label>
                                            </div> 
                                        </div>
                                    </div>

                                    <div id="pulangSection" class="collapse-section">
                                        <hr>
                                        <label class="text-muted small">Pulang</label>
                                        <div class="fw-semibold date-display" id="pulangDateDisplay" style="font-size: 14px; cursor: pointer;">Ming, 20 Apr</div>
                                        <input type="date" id="pulangDatePicker" class="date-picker" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group bg-primary p-3 rounded-3" style=" --bs-bg-opacity: 0.08;">
                                <div class="fw-semibold">
                                    <!-- Button trigger modal -->
                                    <a href="#" class="text-decoration-none text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 14px;">1 Kursi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        
                    <button class="btn btn-primary mx-auto w-100 fw-bold py-2" type="submit" name="submit">Ayo Cari</button><br>
                </form>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="--bs-modal-width: 400px;">
        <div class="modal-content">
        <div class="modal-header border-bottom-0">
            <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">Atur Jumlah Kursi</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p style="font-size: small;">Anak di atas 2 tahun harus memiliki tiket.</p>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Kursi</td>
                        <!-- tombol tambah dan kurang penumpang -->
                        <td class="text-end">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn p-0 d-flex justify-content-center align-items-center" style="width: 28px; height: 28px; border-radius: 50%; border: 1px solid #ced4da;" onclick="decrementCount('kursi')">
                                    <span class="fw-bold">-</span>
                                </button>
                                <span class="mx-3" id="kursi-count">1</span>
                                <button type="button" class="btn p-0 d-flex justify-content-center align-items-center" style="width: 28px; height: 28px; border-radius: 50%; border: 1px solid #0d6efd; color: #0d6efd;" onclick="incrementCount('kursi')">
                                    <span class="fw-bold">+</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer border-top-0">
            <button type="button" class="btn btn-primary">Selesai</button>
        </div>
        </div>
    </div>
</div>

<script>
    // Tetapkan nilai minimum dan maksimum untuk setiap kategori
    const minValues = {
        'kursi': 1  // Minimal harus ada 1 kursi
    };

    const maxValues = {
        'kursi': 10  // Maksimum 10 penumpang dewasa
    };

    // Inisialisasi nilai awal
    const counts = {
        'kursi': 1
    };

    function incrementCount(type) {
        if (counts[type] < maxValues[type]) {
            counts[type]++;
            document.getElementById(`${type}-count`).textContent = counts[type];
            updateButtonStates();
        }
    }

    function decrementCount(type) {
        if (counts[type] > minValues[type]) {
            counts[type]--;
            document.getElementById(`${type}-count`).textContent = counts[type];
            updateButtonStates();
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

    // Panggil sekali pada saat halaman dimuat
    document.addEventListener('DOMContentLoaded', updateButtonStates);
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle for pulang-pergi section
    const checkbox = document.getElementById('checkbox');
    const pulangSection = document.getElementById('pulangSection');
    
    // Set initial state based on checkbox
    if (checkbox.checked) {
        pulangSection.classList.add('show');
    }
    
    // Add event listener for checkbox changes
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            pulangSection.classList.add('show');
        } else {
            pulangSection.classList.remove('show');
        }
    });
    
    // Date picker functionality
    const pergiDateDisplay = document.getElementById('pergiDateDisplay');
    const pergiDatePicker = document.getElementById('pergiDatePicker');
    const pulangDateDisplay = document.getElementById('pulangDateDisplay');
    const pulangDatePicker = document.getElementById('pulangDatePicker');
    
    // Set today's date as default
    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(today.getDate() + 1);
    
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
    
    // Set initial values
    pergiDatePicker.value = formatDateForInput(today);
    pulangDatePicker.value = formatDateForInput(tomorrow);
    pergiDateDisplay.textContent = formatDateForDisplay(today);
    pulangDateDisplay.textContent = formatDateForDisplay(tomorrow);
    
    // Show date picker when display is clicked
    pergiDateDisplay.addEventListener('click', function() {
        pergiDatePicker.style.display = 'block';
        pergiDatePicker.focus();
    });
    
    pulangDateDisplay.addEventListener('click', function() {
        pulangDatePicker.style.display = 'block';
        pulangDatePicker.focus();
    });
    
    // Update display when date is selected
    pergiDatePicker.addEventListener('change', function() {
        const selectedDate = new Date(this.value);
        pergiDateDisplay.textContent = formatDateForDisplay(selectedDate);
        this.style.display = 'none';
        
        // If selected departure date is after return date, update return date
        const pulangDate = new Date(pulangDatePicker.value);
        if (selectedDate > pulangDate) {
            const newPulangDate = new Date(selectedDate);
            newPulangDate.setDate(selectedDate.getDate() + 1);
            pulangDatePicker.value = formatDateForInput(newPulangDate);
            pulangDateDisplay.textContent = formatDateForDisplay(newPulangDate);
        }
    });
    
    pulangDatePicker.addEventListener('change', function() {
        const selectedDate = new Date(this.value);
        pulangDateDisplay.textContent = formatDateForDisplay(selectedDate);
        this.style.display = 'none';
        
        // If selected return date is before departure date, update departure date
        const pergiDate = new Date(pergiDatePicker.value);
        if (selectedDate < pergiDate) {
            const newPergiDate = new Date(selectedDate);
            newPergiDate.setDate(selectedDate.getDate() - 1);
            pergiDatePicker.value = formatDateForInput(newPergiDate);
            pergiDateDisplay.textContent = formatDateForDisplay(newPergiDate);
        }
    });
    
    // Hide date picker when clicking outside
    document.addEventListener('click', function(event) {
        if (event.target !== pergiDateDisplay && event.target !== pergiDatePicker) {
            pergiDatePicker.style.display = 'none';
        }
        if (event.target !== pulangDateDisplay && event.target !== pulangDatePicker) {
            pulangDatePicker.style.display = 'none';
        }
    });
    
    // Prevent event propagation when clicking on the date picker
    pergiDatePicker.addEventListener('click', function(event) {
        event.stopPropagation();
    });
    
    pulangDatePicker.addEventListener('click', function(event) {
        event.stopPropagation();
    });
});
</script>