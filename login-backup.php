<?php 
    include('inc/top.php')
?>

<style>
    .login-bg{
        background-image: url('image/login/backgorund.png');
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
                transform: translateY(-15px);
            }
            .form-bg{
                background-color: #0589ef;
            }
        }
</style>

<div class="container-fluid">
    <div class="row vh-100 login-bg align-items-center">
        <div class="row login-bg-sm"></div>
        <div class="col-md-5 offset-lg-6 offset-0 form-bg p-0">
            <div class="bg-white rounded-5 shadow login-form" style="height: auto; padding: 4rem;">
                <form method="post" action="">
                    <h5 class="fw-bolder">Log in</h5>
                    
                    <br>
                    <label>Email atau Nomor HP</label>
                    <input type="text" class="form-control py-3" name="username" placeholder="Masukkan Email atau Nomor HP" required /><br>
                    
                    <label>Password</label>
                    <div class="password-container">
                        <input type="password" class="form-control py-3" name="password" placeholder="Masukkan Password" id="password" required />
                        <span class="toggle-password" onclick="togglePassword()">
                            <i class="fa-solid fa-eye" id="eye-icon"></i>
                        </span>
                    </div>
                    <br>

                    <button class="btn btn-primary mx-auto w-100 fw-bold py-2" type="submit" name="submit">Log in</button><br>

                    <p class="text-center mt-3">Belum punya akun?, <a href="register.php" class="fw-bold" style="text-decoration: none;">Daftar, yuk!</a></p>

                    <div class="d-flex fles-row justify-content-center gap-2 mt-4">
                        <a href="#" class="btn btn-danger rounded-circle shadow-sm"><i class="fa-brands fa-instagram text-white"></i></a>
                        <a href="#" class="btn btn-warning rounded-circle shadow-sm"><i class="fa-solid fa-location-dot text-white"></i></a>
                        <a href="#" class="btn btn-primary rounded-circle shadow-sm"><i class="fa-brands fa-facebook-f text-white"></i></a>
                    </div><hr>

                </form>

                <!-- tulisan ke pojok tengah bawah -->
                <p class="text-center">Dengan log in, kamu menyetujui <a href="#" style="text-decoration: none;">Kebijakan Privasi </a>dan <a href="#" style="text-decoration: none;">Syarat  & Ketentuan</a> ViaTicket.my.id</p>
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