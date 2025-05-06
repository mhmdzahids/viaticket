<style>
  .footer-link {
    position: relative;
    transition: color 0.3s ease, transform 0.3s ease, padding-left 0.3s ease;
    display: inline-block;
  }
  
  .footer-link:hover {
    color: #0d6efd !important; /* Changed back to red as requested */
    padding-left: 10px;
  }
  
  .footer-link:before {
    content: "";
    position: absolute;
    left: 0;
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  
  .footer-link:hover:before {
    content: "> ";
    opacity: 1;
  }
  .footer-icon{
    transition: transform .2s ease;
  }
  .footer-icon:hover{
    transform: scale(1.1);
  }
</style>

<div class="container-fluid mb-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 d-flex flex-row justify-content-center gap-0 gap-lg-5 p-4 p-lg-0">
        <div class="col">
            <h4 class="text-dark mt-4 fw-bold">ViaTicket.my.id</h4>
            <ul class="list-group gap-2" style="list-style-type: none; padding-left: 0;">
              <li><a href="index.php" class="text-decoration-none text-dark footer-link">Pesawat</a></li>
              <li><a href="index.php#form" class="text-decoration-none text-dark footer-link">Bus</a></li>
              <li><a href="index.php#testimony" class="text-decoration-none text-dark footer-link">Kereta Api</a></li>
              <li><a href="index.php#testimony" class="text-decoration-none text-dark footer-link">Kapal</a></li>
              <div class="d-flex flex-row justify-content-start gap-2">
                <a href="#" class="btn btn-danger rounded-circle footer-icon"><i class="fa-brands fa-instagram text-white"></i></a>
              </div>
            </ul>
        </div>

        <div class="col">
            <h4 class="text-dark mt-4 fw-bold">Lokasi</h4>
            <ul class="list-group" style="list-style-type: none; padding-left: 0;">
                <li><a href="https://g.co/kgs/4kkPBp4" target="_blank" class="text-decoration-none text-dark footer-link">Jl. Education Park, Jl. Ki Hajar Dewantara, Simpangan, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530</a></li>
            </ul>
        </div>

        <div class="col">
            <h4 class="text-dark mt-4 fw-bold">Hubungi Kami</h4>
            <ul class="list-group" style="list-style-type: none; padding-left: 0;">
                <li><a href="#" class="text-decoration-none text-dark footer-link">+62 856-1549-323 (Zahid)</a></li>
                <li><a href="#" class="text-decoration-none text-dark footer-link">+62 897-6644-100 (Ibrahim)</a></li>
            </ul>
            <div class="text-white mt-4"><h4 class="text-dark mt-4 fw-bold">Email Kami</h4></div>
            <ul class="list-group" style="list-style-type: none; padding-left: 0;">
                <li><a href="mailto:smpplusrayhanbekasi@gmail.com" class="text-decoration-none text-dark footer-link">support@viaticket.my.id</a></li>
            </ul>
        </div>
    </div>
</div>
