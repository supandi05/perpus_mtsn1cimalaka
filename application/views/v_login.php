<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <?php 
          if(isset($_GET['alert'])){
            if($_GET['alert']=="gagal"){
              echo "<div class='alert alert-danger font-weight-bold text-center'>LOGIN GAGAL!</div>";
            }else if($_GET['alert']=="belum_login"){
              echo "<div class='alert alert-danger font-weight-bold text-center'>SILAHKAN LOGIN TERLEBIH DULU!</div>";
            }else if($_GET['alert']=="logout"){
              echo "<div class='alert alert-success font-weight-bold text-center'>ANDA TELAH LOGOUT!</div>";
            }
          } 
          ?>
           <?php echo validation_errors(); ?>
          
                    <h3 class="bg-gray p-4">Login</h3>
                   
                    <form method="post" action="<?php echo base_url().'login/login_aksi'; ?>">
                        <fieldset class="p-4">
                            <input name="username" type="text" placeholder="Username" class="border p-3 w-100 my-2">
                            <input name="password" type="password" placeholder="Password" class="border p-3 w-100 my-2">
                            <div class="loggedin-forgot">
                                    <label for="sebagai">Login Sebagai :</label>
                            <select name="sebagai" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                            </div>
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Masuk</button>
                            <a class="mt-3 d-block  text-primary" href="#">Lupa Password</a>
                            <a class="mt-3 d-inline-block text-primary" href="register.html">Registrasi Akun</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>