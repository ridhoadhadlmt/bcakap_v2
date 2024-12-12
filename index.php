<?php
include 'header.php';

?>

<div class="bckp-home-hero">
  <div class="container-lg">
    <div class="bckp-home-hero-img">
      <img src="assets/img/hero/1.png" class="">
    </div>
  </div>
</div>
<div class="bckp-home-about pt-5 pb-5">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-6">
        <div class="about-img">
          <img src="assets/img/about/1.png">
        </div> 
      </div>
      <div class="col-md-6">
        <div class="about-content">
          <h1>APA ITU B'CAKAP ?</h1>
          <p>Melalui website B'CAKAP dan buku, kami tim penyusun mencoba untuk menguraikan perkembangan media sosial di Indonesia dewasa ini serta dampak positif dan negatif media sosial terhadap pribadi, keluarga, masyarakat bangsa dan negara, Diharapkan dengan buku ini kita lebih bijak, cerdas, kreatif dan produktif dalam bermedia sosial.</p>
        </div>
      </div>
    </div>
    
    
  </div>
</div>
<div class="bckp-home-program pt-5 pb-5">
  <div class="container-lg">
    <div class="bckp-title-header text-center">
      <h1>Program</h1>
    </div>
    <div class="bckp-program-content pt-5">
      <div class="row d-flex justify-content-center">
        <?php 
          $sql ="SELECT * FROM tb_program ";
          $exe = mysqli_query($koneksi,$sql);
          foreach($exe as $program):
        ?>
        <div class="col-md-3">
          <div class="program-item text-center">
            <div class="program-img">
              <img src="assets/img/program/<?= $program['img'];?>">
            </div>
            <div class="program-text pt-2">
              <h5 class="program-name"><?= $program['program'];?></h5>
              <p class="program-desc"><?= substr($program['desc'],0,100);?></p>
            </div>
          </div>
        </div>
        <?php
          endforeach;
        ?>
      </div>
    </div>
  </div>
</div>
<div class="bckp-home-team pt-5 pb-5">
  <div class="container-lg">  
    <div class="bckp-team">
      <h1>Team</h1>
      <div class="owl-carousel pt-3">
        <div class="owl-team">
          <div class="owl-img">
            <img src="assets/img/team/abdul.jpg" class="img-fluid">
          </div>
          <div class="owl-bio mt-2">
            <h5>Abdul Kodir, ST</h5>
            <p>Akademi dan Relawan TIK</p>
          </div>
        </div>
        <div class="owl-team">
          <div class="owl-img">
            <img src="assets/img/team/doni.jpg" class="img-fluid">
          </div>
          <div class="owl-bio mt-2">
            <h5>Muhammad Donni Lesmana Siahaan, S.Kom,M.Kom</h5>
            <p>Dosen Universitas Pancabudi</p>
          </div>
        </div>
        <div class="owl-team">
          <div class="owl-img">
            <img src="assets/img/team/erwin.jpg" class="img-fluid">
          </div>
          <div class="owl-bio mt-2">
            <h5>Mochammad Erwin Radityo SH.,M.Kn.</h5>
            <p>Dosen Universitas Pancabudi</p>
          </div>
        </div>
        <div class="owl-team">
          <div class="owl-img">
            <img src="assets/img/team/luhut.jpg" class="img-fluid">
          </div>
          <div class="owl-bio mt-2">
          <h5>Luhut Marpaung </h5>
          <p>kolonel inf</p>
          </div>
        </div>
        <div class="owl-team">
          <div class="owl-img">
            <img src="assets/img/team/jalil.jpg" class="img-fluid">
          </div>
          <div class="owl-bio mt-2">
            <h5>M.Jalil Sembiring, A.Md., S.H.</h5>
            <p>Mayor CHK </p>
          </div>
        </div>
        <div class="owl-team">
          <div class="owl-img">
            <img src="assets/img/team/ferry.jpg" class="img-fluid">
          </div>
          <div class="owl-bio mt-2">
            <h5>Ferry Lahe, S.A.P </h5>
            <p>Letkol kav NrP 11980054050974</p>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>

<div class="bckp-home-support pt-5 pb-5">
  <div class="container-lg">
    <h1>Pendukung</h1>
    <div class="owl-carousel pt-3">
      <div class="owl-support-item">
        <div class="owl-img">
          <img src="assets/img/support/aksa.png">
        </div>
      </div>
      <div class="owl-support-item">
        <div class="owl-img">
          <img src="assets/img/support/itgreen.png">
        </div>
      </div>
      <div class="owl-support-item">
        <div class="owl-img">
          <img src="assets/img/support/kodam.png">
        </div>
      </div>
      <div class="owl-support-item">
        <div class="owl-img">
          <img src="assets/img/support/kominfo.png">
        </div>
      </div>
      <div class="owl-support-item">
        <div class="owl-img">
          <img src="assets/img/support/unpab.png">
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>

