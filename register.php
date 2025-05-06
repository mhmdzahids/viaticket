<?php 
    include('inc/top.php')
?>

<style>
    .login-bg{
        background-image: url('image/login/background-colored.png');
        background-size: cover;
    }
    .login-bg-sm{
        background-image: url('image/login/background-revisi.png');
        background-size: cover;
        display: none;
    }
    .password-container {
        position: relative;
    }
    .password-container .toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
    @media (max-width: 768px) {
            .login-bg {
                background-image: none;
            }
            .login-bg-sm{
                height: 300px;
                background-image: url('image/login/background-revisi.png');
                background-size: cover;
                background-position-x: 10px;
                transform: translateX(12px);
                display: block;
            }
            .login-form{
                box-shadow: none !important;
                transform: translateY(-15px);
                border-radius: var(--bs-border-radius-xl) !important;
                border-bottom-right-radius: 0 !important;
                border-bottom-left-radius: 0 !important;
                
            }
            .form-bg{
                background-color: white;
            }
        }
</style>

<div class="container-fluid">
    <div class="row vh-100 login-bg align-items-center">
        <!-- background img dari css background-image: url('image/login/backgorund.png'); -->
        <div class="row login-bg-sm"></div>

        <!-- buat logo -->
         
        <div class="col-md-5 offset-0 offset-lg-6 offset-md-6 form-bg p-0">
            <div class="rounded-5 shadow login-form bg-white" style="height: auto; padding: 4rem;">
                <form method="post" action="">
                    <h5 class="fw-bolder">Daftar</h5>
                    
                    <br>
                    <label>Email atau Nomor HP</label>
                    <input type="text" class="form-control py-3" name="username" placeholder="Masukkan Email atau Nomor HP" required /><br>
                    
                    <label>Password</label>
                    <div class="password-container">
                        <input type="password" class="form-control py-3" name="password" placeholder="Masukkan Password" id="password" required />
                        <span class="toggle-password" onclick="togglePassword()">
                            <i class="fa-solid fa-eye" id="eye-icon"></i>
                        </span>
                    </div><br>
                    
                    <label>Konfirmasi Password</label>
                    <div class="password-container">
                        <input type="password" class="form-control py-3" name="password" placeholder="Masukkan Password" id="confirm-password" required />
                        <span class="toggle-password" onclick="toggleConfirmPassword()">
                            <i class="fa-solid fa-eye" id="eye-icon-confirm"></i>
                        </span>
                    </div>
                    <br>

                    <button class="btn btn-primary mx-auto w-100 fw-bold py-2" type="submit" name="submit">Daftar</button><br>

                    <p class="text-center mt-3">Udah punya akun?, <a href="login.php" class="fw-bold" style="text-decoration: none;">Log in aja!</a></p>


                </form>

                <!-- tulisan ke pojok tengah bawah -->
                <p class="text-center">Dengan Daftar, kamu menyetujui <a href="#" style="text-decoration: none;">Kebijakan Privasi </a>dan <a href="#" style="text-decoration: none;">Syarat  & Ketentuan</a> ViaTicket.my.id</p>
            </div>
        </div>
    </div>
</div>
<script>
    function togglePassword(){
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

        if (passwordInput.type == 'password'){
            passwordInput.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        }else{
            passwordInput.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>