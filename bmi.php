<?php
include_once "header.php";
include_once "sidebar.php";

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kalkulator BMI (IMT)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
              <li class="breadcrumb-item active">Kalkulator Sehat</li>
            </ol>
          </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-5">
                <div class="card-body">
                    <p class="text-light">Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (IMT) dan mengecek apakah berat badan Anda ideal atau tidak. Anda juga dapat menggunakannya untuk memeriksa indeks massa tubuh anak.</p>
                    <table class="table table-dark table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">BMI</th>
                                <th scope="col">Status Berat Badan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kurang dari 18.5</td>
                                <td>Kekurangan Berat Badan</td>
                            </tr>
                            <tr>
                                <td>18.5 - 24.9</td>
                                <td>Normal (Ideal)</td>
                            </tr>
                            <tr>
                                <td>25.0 - 29.9</td>
                                <td>Kelebihan Berat Badan</td>
                            </tr>
                            <tr>
                                <td>30.0 atau Lebih</td>
                                <td>Kegemukan (Obesitas)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="card-body">
                    <?php
                        include_once "form_bmi.php";
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <?php

                include_once "hasil_bmi.php"
            ?>
        </div>

      </div><!-- /.container-fluid -->
    </section>

  </div>
  <!-- /.content-wrapper -->


<?php

include_once "footer.php"

?>