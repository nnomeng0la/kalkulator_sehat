
                    <?php
                    include_once "form_bmi.php";
                    include_once "class_bmi.php";
                    $P1 = new BMIPasien("2022-01-10", "P001", "Ahmad", "L", 69.8, 169);
                    $P2 = new BMIPasien("2022-01-10", "P002", "Rina", "P",55.3, 165);
                    $P3 = new BMIPasien("2022-01-11", "P003", "Lutfi", "L", 45.2, 171);

                    ?>
            <table class="table table-bordered table-striped border-primary">
                <thead class="thead-dark">
                    <tr>
                        <th>NO</th>
                        <th>Tanggal Periksa</th>
                        <th>Kode Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Gender</th>
                        <th>Berat (kg)</th>
                        <th>Tinggi (cm)</th>
                        <th>Nilai BMI</th>
                        <th>Status BMI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $ar_BMI = [$P1, $P2, $P3];
                        $_tanggal = $_POST['tanggal'];
                        $_kode = 'P004';
                        $_nama = $_POST['nama'];
                        $_gender = $_POST['gender'];
                        $_berat = $_POST['berat'];
                        $_tinggi = $_POST['tinggi'];
                        $P4 = new BMIPasien($_tanggal, $_kode, $_nama,$_gender, $_berat, $_tinggi);
                        array_push($ar_BMI, $P4);
                        $id=1;
                        foreach ($ar_BMI as $obj){
                    ?>
                    <tr>
                        <th><?=$id?></th>
                        <td><?=$obj->tanggal?></td>
                        <td><?=$obj->kode?></td>
                        <td><?=$obj->nama?></td>
                        <td><?=$obj->gender?></td>
                        <td><?=$obj->berat?></td>
                        <td><?=$obj->tinggi?></td>
                        <td><?=$obj->nilaiBMI()?></td>
                        <td><?=$obj->statusBMI()?></td>
                    </tr>
                    <?php
                        $id++; 
                        }
                    ?>
                </tbody>
            </table>