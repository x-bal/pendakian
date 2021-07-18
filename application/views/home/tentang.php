   <section class="about_area p_120">
       <div class="container ">
           <h2 class="text-center ">Tentang Kami</h2>
           <div class="row about_inner mt-4  mb-4">
               <div class="col-lg-6">
                   <div class="about_img">
                       <img class="img-fluid mt-4" src="<?= base_url('asset') ?>/images/gunung/gununggabung.jpg" alt="">
                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="about_right_text">
                       <h4>Sistem Informasi Pendakian Gunung <br></h4>
                       <p>sistem informasi pendakian gunung di jawa Timur adalah sistem yang berisi informasi seperti perlengkapan pendakian, profil gunung, rute, tips pendakian dan sejarah singkat dari beberapa gunung di jawa timur antara lain : Gunung Semeru, Gunung Raung, Gunung Argoporu, Gunung Arjuno dan Gunung Welirang</p>
                   </div>
               </div>
           </div>
           <div class="row mt-4">
               <div class="col-md-8">
                   <div class="card card-primary">
                       <h2 class="text-center mt-4">Kritik & Saran</h2>
                       <form role="form" action="<?= base_url('home/save_krisar'); ?>" method="POST" enctype="multipart/form-data">
                           <div class="card-body">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="form-group">
                                           <label>Nama Lengkap</label>
                                           <input type="text" name="nama" id="nama" class="form-control " required>
                                       </div>
                                       <div class="form-group">
                                           <label>Email</label>
                                           <input type="email" name="email" id="email" class="form-control " required>
                                       </div>
                                       <div class="form-group">
                                           <label>Kritik & Saran</label>
                                           <textarea class="form-control" id="krisar" name="krisar" rows="5" required></textarea>
                                       </div>
                                       <div class="form-group">
                                           <button class="btn btn-success " type="submit"><i class="fas fa-paper-plane "></i> Kirim</button>
                                       </div>
                                   </div>
                               </div>


                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </section>