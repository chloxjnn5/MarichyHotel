<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="resources/css/style.css" rel="stylesheet">

    <title>Dashboard Tamu</title>
</head>
<body>

    {{-- Navbar / Menu --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>HOTEL HEBAT</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Kamar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Fasilitas</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    {{-- background --}}
    <div class="p-3 bg-secondary text-white" style="width: 100%; height:467px"></div>

    {{-- Input Tanggal DLL --}}
    <div class="form bg-dark p-4 shadow-sm">
        <form class="row g-3" style="margin-left: 240px; text-align:center; color:white;">
            <div class="col-md-3 mt-3">
              <label for="inputEmail4" class="form-label"><b>Tanggal Cek In</b></label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">#</span>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>

            <div class="col-md-3 mt-3">
              <label for="inputPassword4" class="form-label"><b>Tanggal Cek Out</b></label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">#</span>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>

            <div class="col-md-2 mt-3">
                <label for="inputPassword4" class="form-label"><b>Jumlah Kamar</b></label>
                <input type="" class="form-control" id="tanggal">
              </div>

            <div class="col-md-1 mt-5">
            <button type="button" class="btn btn-success" style="margin-left:25%; width:100px">Pesan</button>
            </div>
        </form>
    </div>

    <div class="container-lg" style="margin-top: 100px">
        <h1 style="text-align: center">Tentang Kami</h1>
        <p style="text-align: justify; margin-top:40px">lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, dananu, dan sawah menghijau. Nikmati
            sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau, Kid's Club yang
            luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Covention Center
            kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000
            delegasi. Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah.
        </p>
    </div>

    {{-- Fasilitas --}}
    <h1 style="text-align: center; margin-top:70px">Fasilitas</h1>
    <div class="container" style="margin-top: 50px">
        <div class="row">

            <div class="row">
                <div class="col-sm-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="../img/rest.jpg" class="img-fluid rounded-start" style="height:180px;" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Restaurant</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="../img/bar.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Richi's Bar</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="../img/gym2.jpg" class="img-fluid rounded-start" style="height:180px; width:200px" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Gymnasium ( GYM )</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="../img/kolam.jpg" class="img-fluid rounded-start" style="height:180px; width:200px" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Swimming Pool</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </div>




    {{-- Form Pemesanan --}}
    <div class="container-lg" style="margin-top: 70px">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:#34365B;"><b>Form Pemesanan</b></h1>
          </div>
        </div>
      </div>
  
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pemesan</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Handphone</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Tamu</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tipe Kamar</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Superior</option>
                                <option value="2">Duluxe</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-1" style="margin-right:5px; padding:20px">
                    <button class="btn btn-success" type="button" style="width:200px">Konfirmasi Pemesanan</button>
                </div>
            </div>
            
        </section>
    </div>

</body>

<footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-linkedin"></i
        ></a>
        <!-- Github -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center text-light p-3" style="background-color: black;">
      © 2022 Copyright:
      <a class="text-light">marichy</a>
    </div>
    <!-- Copyright -->
  </footer>
</html>