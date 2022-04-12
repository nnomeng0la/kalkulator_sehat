<form method="POST" action="bmi.php">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                                </div> 
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-location-arrow"></i>
                                </div>
                                </div> 
                                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div> 
                                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-4 col-form-label">Tanggal Periksa</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div> 
                                <input id="tanggal" name="tanggal" type="date" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Jenis Kelamin</label> 
                            <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                                <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                                <label for="gender_1" class="custom-control-label">Perempuan</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berat" class="col-4 col-form-label">Berat Badan (kg)</label> 
                            <div class="col-8">
                            <input id="berat" name="berat" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tinggi" class="col-4 col-form-label">Tinggi Badan (cm)</label> 
                            <div class="col-8">
                            <input id="tinggi" name="tinggi" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email</label> 
                            <div class="col-8">
                            <input id="email" name="email" type="email" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Simpan dan Hitung</button>
                            </div>
                        </div>
                    </form>