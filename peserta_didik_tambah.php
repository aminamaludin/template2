<?php
session_start();
if (!isset($_SESSION["masuk_admin"])) {
  echo "<script>document.location.href='index.php'</script>";
}
require'function.php'; 
require'view/sampul_admin.php';
require'view/sidenav.php';
global $varError;
?>

<?php 
if (isset($_POST["simpan"])) {
  if (pd_tambah($_POST)>0) {
    echo "<script>document.location.href ='peserta_didik.php';</script>";
  }
  // }echo "<script>alert('data berhasil ditambahkan');document.location.href ='peserta_didik.php';</script>";
}

 ?>
                  <!-- content -->

                 
                    <div class="input-field col s9" align="center">
                      <!-- Peringatan -->
                        <div class="row">
                          <div class="col s12 m9">
                            <div class="card-panel orange lighten-3">
                              <h6 class="left white-text"><i class="material-icons">report_problem</i> <b>Perhatian ! </b></h6><br><br><br>
                              <p class="left white-text">Pastikan data terisi dengan benar !.</p><br><br>
                            </div>
                          </div>
                        </div>
                        
                      <!-- Data Content -->
                        
                      <div class=" col s12 m10 content-2">
                        <h4 class="left">Tambah Peserta Didik</h4><br><br><br><br>
                       
                         
                            <form action="" method="post">
                              <div class="row">
                                <div class="input-field col s6">
                                  <label for="first_name">NIS</label>
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                    <!-- <i style="color: red;" id="error">
                                    <script type="text/javascript">
                                    function Error() {
                                      return "* NIS TIDAK BOLEH HURUF";
                                    }
                                    // function True() {
                                    //   return "";
                                    // }
                                  </script>
                                    </i> -->
                                    <!-- <script type="text/javascript">
                                        function Angkasaja(evt) {
                                        var charCode = (evt.which) ? evt.which : event.keyCode
                                        if (charCode > 31 && (charCode < 48 || charCode > 57)){
                                        document.getElementById('error').innerHTML= Error();
                                        
                                      } //else{
                                      //   document.getElementById('error').innerHTML= True();
                                      //   }
                                        }

                                    </script> -->

                                  <div id="error" class="left"></div>
                                  <script type="text/javascript">
                                  function Error() {
                                    return '<div class="chip"><i style="color: red;">*</i> NIS TIDAK BOLEH HURUF </div>';
                                    }
                                  function True() {
                                    return "";
                                    }
                                  </script>
                                  <input type="text" size="30px" class="kotakan" name="nis" onkeyup="validAngka(this)"  maxlength="4" autocomplete="off" autofocus="">
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <label for="first_name">Nama Peserta Didik</label>
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <input placeholder="Masukkan Nama Peserta Didik" type="text" name="nama" required="" onkeypress="return harusHuruf(event)" autocomplete="off">
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <label for="first_name">Jenis Kelamin</label>
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                 
                                  <p class="left">
                                    <label>
                                      <input class="with-gap" name="jk" type="radio" value="l" checked="checked" />
                                      <span>Laki-laki</span>
                                    </label>
                                  </p>
                                  <p class="center">
                                    <label>
                                      <input class="with-gap" name="jk" type="radio" value="p"/>
                                      <span>Perempuan</span>
                                    </label>
                                  </p>
                                  
                                </div>                         
                              </div>                              
                              <div class="row">
                                <div class="input-field col s6">
                                  <label for="first_name">Kelas</label>
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <select class="browser-default" name="kelas" required="">
                                    <option value="">Pilih Kelas</option>
                                    <?php 
                                    
                                    $varQjurusan           = mysqli_query($varKoneksi, "SELECT * FROM tb_kelas");
                                    while ($vardata_kelas= mysqli_fetch_array($varQjurusan)) {
                                     ?>
                                    <option  value="<?= $vardata_kelas['kelas_id'];?>"><?= $vardata_kelas['kelas_nama']?> </option>
                                    <?php  } ?>
                                  </select>
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <label for="first_name">Jurusan</label>
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <select class="browser-default" name="jurusan" required="">
                                    <option value="">Pilih Jurusan</option>
                                    <?php 
                                    $varQKelas            = mysqli_query($varKoneksi, "SELECT * FROM tb_jurusan ORDER BY jurusan_nama ASC");
                                    while ($vardata_jurusan = mysqli_fetch_array($varQKelas)) {
                                                                       
                                     ?>
                                    <option  value="<?= $vardata_jurusan['jurusan_id']; ?>"><?= $vardata_jurusan["jurusan_nama"]?></option>
                                    <?php } ?>
                                  </select>
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <label for="first_name">Nama Orang Tua</label>
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <input placeholder="Masukkan Nama Orang Tua Peserta Didik" type="text" name="nama_ortu" required="" onkeypress="return harusHuruf(event)" autocomplete="off">
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <label for="first_name">Alamat</label>
                                </div>                         
                              </div>
                              <div class="row">                                
                                  <div class="input-field col s12">
                                    <textarea class="materialize-textarea" placeholder="Contoh: RT 01 RW 04, Desa Kedunggubah, Kec.Kaligesing, Kab. Purworejo " type="text" name="alamat" required=""  autocomplete="off"></textarea>
                                                                   
                                  </div>                        
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                  <label for="first_name">No WhatsApp</label>
                                </div>                         
                              </div>
                              <div class="row">
                                <div class="input-field col s6 left">
                                  <table>
                                    <tr>
                                      <td><p class="disabled">+62</p></td>
                                      <td><div id="no_wa" class="left"></div>
                                      <script type="text/javascript">
                                      function Error() {
                                        return '<div class="chip"><i style="color: red;">*</i> Inputan hanya angka </div>';
                                        }
                                      function True() {
                                        return "";
                                        }
                                      </script>
                                      <input type="text" size="30px" class="kotakan" name="no_wa" maxlength="12" onkeyup="validAngkaWa(this)" autocomplete="off">
                                    </tr>
                                  </table>
                                  
                                </div>                         
                              </div>
                              <div class="row">
                                  <button class="btn waves-effect waves-light right" type="submit" name="simpan">SIMPAN
                                      <i class="material-icons left">save</i>
                                  </button> 
                              </div>
                              
                            </form>
                            <!-- <div class="row">
                              <a class="waves-effect waves-light btn-small right" href="tagihan_detail_spp.php">DETAIL</a>  
                            </div> -->
                        
                      </div>
                      
                    </div>
                    <!-- membatasi inputan hanya angka -->
                    <script type="text/javascript">
                      function validAngka(a){
                        if (!/^[0-9 _]+$/.test(a.value)) {
                          a.value = a.value.substring(0,a.value.length-1000)
                          document.getElementById('error').innerHTML= Error();

                        } else {
                          document.getElementById('error').innerHTML= True();
                        }
                      }

                    </script>
                    <script type="text/javascript">
                      function validAngkaWa(a){
                        if (!/^[0-9 _]+$/.test(a.value)) {
                          a.value = a.value.substring(0,a.value.length-1000)
                          document.getElementById('no_wa').innerHTML= Error();

                        } else {
                          document.getElementById('no_wa').innerHTML= True();
                        }
                      }

                    </script>
                   

                    <!-- membatasi inputan hanya huruf -->

                    <script>


                    function Angkasaja(evt) {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))

                    return false;
                    return true;
                    }             
                     
                    function harusHuruf(evt){
                            var charCode = (evt.which) ? evt.which : event.keyCode
                            if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
                            return false;
                            return true;
                    }
                     
                     
                    </script>

<?php 
require'view/sampulb.php';
 ?>
        
  