<style>
    .map-responsive {
        overflow: hidden;
        padding-bottom: 50%;
        position: relative;
        height: 0;
    }

    .map-responsive iframe {
        left: 0;
        top: 0;
        position: absolute;
        margin-left: 56px;
    }
</style>

<section class="kontak mt-5 mb-5">
    <div class="container">
        <div class="row pt-5 mb-5 pb-4">
            <div class="col-lg-6 mt-4">
                <h1 class="heading font-weight-bold" style="color:#216869;">Bila ingin <br> Menghubungi Kami</h1>
                <div class="row mt-4">
                    <div class="col-lg-5">
                        <h5 class="heading">Masalah bisnis</h5>
                        <p class="badan">Hubungi Mr. Dave Jakoy <br> (021) 83430383
                            <br> adjakoy@panganz.com</p>
                    </div>

                    <div class="col-lg-6">
                        <h5 class="heading">UMKM</h5>
                        <p class="badan">Hubungi Mr. Haginomo Tiki <br> (021) 11284748
                            <br> takatiki@games.co.id</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <img class="w-75" src="<?= base_url('src/img/kontak/imgkontak.png') ?>">
            </div>
        </div>

        <!-- Form -->

        <form>
            <div class="row">
                <div class="col-lg-6 mt-1">
                    <div class="form-group">
                        <label for="nama-depan">Nama depan</label>
                        <input type="text" class="form-control" id="nama-depan" placeholder="Masukkan nama depan kamu">
                    </div>
                    <div class="form-group">
                        <label for="nama-belakang">Nama belakang</label>
                        <input type="text" class="form-control " id="nama-belakang" placeholder="Masukkan nama belakang kamu">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email kamu">
                    </div>
                    <div class="form-group">
                        <label for="nomor-telepon">Nomor telepon</label>
                        <input type="text" class="form-control" id="nomor-telepon" placeholder="Masukkan nomor telepon kamu">
                    </div>
                </div>

                <div class="col-lg-6 mt-2">
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="13" placeholder="Berikan feedback untuk kami ya!"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <!-- <div class="btn rounded-pill ml-4 pr-5 pl-5 font-weight-bold text-white" style="background-color:#216869">Kirim</div> -->
                    <input class="btn rounded-pill ml-4 pr-5 pl-5 font-weight-bold text-white" style="background-color:#216869" value="Kirim" type="reset"  data-toggle="modal" data-target="#exampleModalCenter" >
                    <!-- <input class="btn rounded-pill ml-4 pr-5 pl-5 font-weight-bold text-white" style="background-color:#216869;" data-toggle="modal" data-target="#exampleModalCenter" type="reset" value="Daftar"> -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mx-auto heading" id="exampleModalLongTitle">Terimakasih telah mengisi form feedback</h5>
                                </div>
                                <div class="modal-body text-center">
                                    <i class="fas fa-check-circle text-success d-block" style="font-size: 10rem;"></i>
                                    <h1 class="mt-4 font-weight-bold text-success">Sukses</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-block btn-success" data-dismiss="modal">Terima kasih</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Akhir Form -->
    </div>
    <!-- Peta -->
    <div class="container mx-auto mt-5">
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="1000" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

</section>