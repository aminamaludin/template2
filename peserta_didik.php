<?php
require'view/sampul_admin.php';
require'view/sidenav.php';
?>
  <div class="input-field col s9 offset-s3" align="center">
                      <!-- Peringatan -->
    <div class="row">
      <div class="col s12 m9">
        <div class="card-panel orange lighten-3">
          <h6 class="left white-text"><i class="material-icons">report_problem</i> <b>Perhatian ! </b></h6><br><br>
          <p class="left white-text">Pastikan nama dan nis peserta didik tidak salah sebelum menghapus data.</p><br><br>                            
        </div>
      </div>
    </div>

    <!-- Filter Bar -->
    <div class="row center" >
      <div class="col s12 m10 center">
        <div class="card-panel teal">
          <div class="table responsive">
            <form action="" method="post">
            <table>
              <tr>
                <td><h6 class="left white-text"><i class="material-icons">tune</i> <b>Filter Berdasarkan: </b></h6></td>
                                    
                <td>
                  <select class="browser-default" name="Ttahun_ajaran" >
                    <option value="" disabled selected>Tahun Ajaran</option>
                                        
                    <option value=""></option>
                                       
                                        
                  </select>
                </td>
                                  
                <td>
                  <select class="browser-default" name="Tkelas" id="kelas" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                                       
                    <option value=""></option>
                                      
                  </select>
                </td>

                <!-- Untuk menampilkan Data jurusan kita gunakan JavaSCript , script ada di bagian paling bawah -->
                <td>
                  <select class="browser-default" name="Tjurusan" id="jurusan" >
                    <option value="">Pilih Jurusan</option>
                                        
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <button class="btn-small waves-effect waves-light center" type="submit" name="tampil">TAMPIL
                    <i class="material-icons left">search</i>
                  </button> 
                </td>
              </tr>
            </table>
            </form>
          </div>  
        </div>
      </div>
    </div>  
  </div>
  <!-- akhir filter bar --> 
                      
                 
<script src="js/script.js "></script>
<script src="js/jquery-3.2.1.min.js"></script> 
<script>                                   
  $(document).ready(function(){
    $('#kelas').on('change',function(){
      var kelasID = $(this).val();
        if (kelasID) {
          $.get(
          "fetch_jurusan.php",
          {kelas: kelasID},
          function(data){
          $('#jurusan').html(data);
          });
        } else {
          $('#jurusan').html('<option>Pilih Jurusan</option>')
          }
    });
  }); 
</script>
<?php 
require'view/sampulb.php';
 ?>


        
  