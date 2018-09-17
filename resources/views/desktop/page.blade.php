@extends('desktop.layout')
@section('header')
    <style>
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link{background-color:#16a085;}
        a.link-tabs{color:#7f8c8d;}
        .pull-content{margin-bottom:500px;}
    </style>
@endsection
@section('content')
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link link-tabs {{$active == "redaksi" ? "active" : ""}}" id="pills-rds-tab" data-toggle="pill" href="#pills-rds" role="tab" aria-controls="pills-rds" aria-selected="false">REDAKSI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-tabs {{$active == "p-media-siber" ? "active" : ""}}" id="pills-pdm-tab" data-toggle="pill" href="#pills-pdm" role="tab" aria-controls="pills-pdm" aria-selected="false">PEDOMAN MEDIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-tabs {{$active == "tentang-kami" ? "active" : ""}}" id="pills-ttm-tab" data-toggle="pill" href="#pills-ttm" role="tab" aria-controls="pills-ttm" aria-selected="false">TENTANG KAMI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-tabs {{$active == "disclaimer" ? "active" : ""}}" id="pills-dis-tab" data-toggle="pill" href="#pills-dis" role="tab" aria-controls="pills-dis" aria-selected="false">DISCLAIMER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-tabs {{$active == "kontak" ? "active" : ""}}" id="pills-kon-tab" data-toggle="pill" href="#pills-kon" role="tab" aria-controls="pills-kon" aria-selected="false">KONTAK</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade {{$active == "redaksi" ? "show active" : ""}}" id="pills-rds" role="tabpanel" aria-labelledby="pills-rds-tab">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Redaksi</h4>
                        <h6>Susunan Redaksi</h6>
                    </div>
                </div>
                <hr class="dashed"/>
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">Direktur Pemberitaan</h6>
                        <h6>M Firhan</h6>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">Redaktur</h6>
                        <h6>Afrizal RF</h6>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">REPORTER</h6>
                        <h6>Mursyid Syathir | Muliadi | M Ridho | Adiartono</h6>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">KORESPONDEN</h6>
                        <h6>Ahmad Pahlepi (Polman)</h6>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">VIDEO JOURNALIST</h6>
                        <h6>Hasbi Makkarana | Rizal Al Mandary | Ophas Forester</h6>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">VIDEO EDITOR & DESIGN</h6>
                        <h6>AR Rasyid | Abbe M</h6>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">SPESIALIS MEDIA SOSIAL</h6>
                        <h6>M Eka Kusuma | Haidir Lintang | Andi Lala</h6>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">MANAGER IT</h6>
                        <h6>Otis Sutaf Imanov</h6>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">MANAGER DEVELOPMENT & SALES</h6>
                        <h6>Dena Eka Prasetya</h6>
                    </div>
                </div>
                <hr class="dashed">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="font-grey hsm">DEVELOPMENT & SALES</h6>
                        <h6>Muhammad Irfan Syarif | Asrim Arif | Ayu Clara Utami | Hikmawan Idrus</h6>
                    </div>
                </div>
                <hr class="dashed">
            </div>
            <div class="tab-pane fade {{$active == "p-media-siber" ? "show active" : ""}}" id="pills-pdm" role="tabpanel" aria-labelledby="pills-pdm-tab">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Pedoman Media Siber</h4>
                    </div>
                </div>
                <hr class="dashed"/>
                <div class="row">
                    <div class="col-md-12">
                        <h6>
                            <p>Pedoman Media Siber<br />Kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB. Keberadaan media siber di Indonesia juga merupakan bagian dari kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers.</p>
                            <p>Media siber memiliki karakter khusus sehingga memerlukan pedoman agar pengelolaannya dapat dilaksanakan secara profesional, memenuhi fungsi, hak, dan kewajibannya sesuai Undang-Undang Nomor 40 Tahun 1999 tentang Pers dan Kode Etik Jurnalistik. Untuk itu Dewan Pers bersama organisasi pers, pengelola media siber, dan masyarakat menyusun Pedoman Pemberitaan Media Siber sebagai berikut:</p>
                            <p>1. Ruang Lingkup</p>
                            <p>a. Media Siber adalah segala bentuk media yang menggunakan wahana internet dan melaksanakan kegiatan jurnalistik, serta memenuhi persyaratan Undang-Undang Pers dan Standar Perusahaan Pers yang ditetapkan Dewan Pers.</p>
                            <p>b. Isi Buatan Pengguna (User Generated Content) adalah segala isi yang dibuat dan atau dipublikasikan oleh pengguna media siber, antara lain, artikel, gambar, komentar, suara, video dan berbagai bentuk unggahan yang melekat pada media siber, seperti blog, forum, komentar pembaca atau pemirsa, dan bentuk lain.</p>
                            <p>2. Verifikasi dan keberimbangan berita</p>
                            <p>a. Pada prinsipnya setiap berita harus melalui verifikasi.</p>
                            <p>b. Berita yang dapat merugikan pihak lain memerlukan verifikasi pada berita yang sama untuk memenuhi prinsip akurasi dan keberimbangan.</p>
                            <p>c. Ketentuan dalam butir (a) di atas dikecualikan, dengan syarat:</p>
                            <p>1) Berita benar-benar mengandung kepentingan publik yang bersifat mendesak;</p>
                            <p>2) Sumber berita yang pertama adalah sumber yang jelas disebutkan identitasnya, kredibel dan kompeten;</p>
                            <p>3) Subyek berita yang harus dikonfirmasi tidak diketahui keberadaannya dan atau tidak dapat diwawancarai;</p>
                            <p>4) Media memberikan penjelasan kepada pembaca bahwa berita tersebut masih memerlukan verifikasi lebih lanjut yang diupayakan dalam waktu secepatnya. Penjelasan dimuat pada bagian akhir dari berita yang sama, di dalam kurung dan menggunakan huruf miring.</p>
                            <p>d. Setelah memuat berita sesuai dengan butir (c), media wajib meneruskan upaya verifikasi, dan setelah verifikasi didapatkan, hasil verifikasi dicantumkan pada berita pemutakhiran (update) dengan tautan pada berita yang belum terverifikasi.</p>
                            <p>3. Isi Buatan Pengguna (User Generated Content)</p>
                            <p>a. Media siber wajib mencantumkan syarat dan ketentuan mengenai Isi Buatan Pengguna yang tidak bertentangan dengan Undang-Undang No. 40 tahun 1999 tentang Pers dan Kode Etik Jurnalistik, yang ditempatkan secara terang dan jelas.</p>
                            <p>b. Media siber mewajibkan setiap pengguna untuk melakukan registrasi keanggotaan dan melakukan proses log-in terlebih dahulu untuk dapat mempublikasikan semua bentuk Isi Buatan Pengguna. Ketentuan mengenai log-in akan diatur lebih lanjut.</p>
                            <p>c. Dalam registrasi tersebut, media siber mewajibkan pengguna memberi persetujuan tertulis bahwa Isi Buatan Pengguna yang dipublikasikan:</p>
                            <p>1) Tidak memuat isi bohong, fitnah, sadis dan cabul;</p>
                            <p>2) Tidak memuat isi yang mengandung prasangka dan kebencian terkait dengan suku, agama, ras, dan antargolongan (SARA), serta menganjurkan tindakan kekerasan;</p>
                            <p>3) Tidak memuat isi diskriminatif atas dasar perbedaan jenis kelamin dan bahasa, serta tidak merendahkan martabat orang lemah, miskin, sakit, cacat jiwa, atau cacat jasmani.</p>
                            <p>d. Media siber memiliki kewenangan mutlak untuk mengedit atau menghapus Isi Buatan Pengguna yang bertentangan dengan butir (c).</p>
                            <p>e. Media siber wajib menyediakan mekanisme pengaduan Isi Buatan Pengguna yang dinilai melanggar ketentuan pada butir (c). Mekanisme tersebut harus disediakan di tempat yang dengan mudah dapat diakses pengguna.</p>
                            <p>f. Media siber wajib menyunting, menghapus, dan melakukan tindakan koreksi setiap Isi Buatan Pengguna yang dilaporkan dan melanggar ketentuan butir (c), sesegera mungkin secara proporsional selambat-lambatnya 2 x 24 jam setelah pengaduan diterima.</p>
                            <p>g. Media siber yang telah memenuhi ketentuan pada butir (a), (b), (c), dan (f) tidak dibebani tanggung jawab atas masalah yang ditimbulkan akibat pemuatan isi yang melanggar ketentuan pada butir (c).</p>
                            <p>h. Media siber bertanggung jawab atas Isi Buatan Pengguna yang dilaporkan bila tidak mengambil tindakan koreksi setelah batas waktu sebagaimana tersebut pada butir (f).</p>
                            <p>4. Ralat, Koreksi, dan Hak Jawab</p>
                            <p>a. Ralat, koreksi, dan hak jawab mengacu pada Undang-Undang Pers, Kode Etik Jurnalistik, dan Pedoman Hak Jawab yang ditetapkan Dewan Pers.</p>
                            <p>b. Ralat, koreksi dan atau hak jawab wajib ditautkan pada berita yang diralat, dikoreksi atau yang diberi hak jawab.</p>
                            <p>c. Di setiap berita ralat, koreksi, dan hak jawab wajib dicantumkan waktu pemuatan ralat, koreksi, dan atau hak jawab tersebut.</p>
                            <p>d. Bila suatu berita media siber tertentu disebarluaskan media siber lain, maka:</p>
                            <p>1) Tanggung jawab media siber pembuat berita terbatas pada berita yang dipublikasikan di media siber tersebut atau media siber yang berada di bawah otoritas teknisnya;</p>
                            <p>2) Koreksi berita yang dilakukan oleh sebuah media siber, juga harus dilakukan oleh media siber lain yang mengutip berita dari media siber yang dikoreksi itu;</p>
                            <p>3) Media yang menyebarluaskan berita dari sebuah media siber dan tidak melakukan koreksi atas berita sesuai yang dilakukan oleh media siber pemilik dan atau pembuat berita tersebut, bertanggung jawab penuh atas semua akibat hukum dari berita yang tidak dikoreksinya itu.</p>
                            <p>e. Sesuai dengan Undang-Undang Pers, media siber yang tidak melayani hak jawab dapat dijatuhi sanksi hukum pidana denda paling banyak Rp500.000.000 (Lima ratus juta rupiah).</p>
                            <p>5. Pencabutan Berita</p>
                            <p>a. Berita yang sudah dipublikasikan tidak dapat dicabut karena alasan penyensoran dari pihak luar redaksi, kecuali terkait masalah SARA, kesusilaan, masa depan anak, pengalaman traumatik korban atau berdasarkan pertimbangan khusus lain yang ditetapkan Dewan Pers.</p>
                            <p>b. Media siber lain wajib mengikuti pencabutan kutipan berita dari media asal yang telah dicabut.</p>
                            <p>c. Pencabutan berita wajib disertai dengan alasan pencabutan dan diumumkan kepada publik.</p>
                            <p>6. Iklan</p>
                            <p>a. Media siber wajib membedakan dengan tegas antara produk berita dan iklan.</p>
                            <p>b. Setiap berita/artikel/isi yang merupakan iklan dan atau isi berbayar wajib mencantumkan keterangan &rdquo;advertorial&rdquo;, &rdquo;iklan&rdquo;, &rdquo;ads&rdquo;, &rdquo;sponsored&rdquo;, atau kata lain yang menjelaskan bahwa berita/artikel/isi tersebut adalah iklan.</p>
                            <p>7. Hak Cipta</p>
                            <p>Media siber wajib menghormati hak cipta sebagaimana diatur dalam peraturan perundang-undangan yang berlaku.</p>
                            <p>8. Pencantuman Pedoman</p>
                            <p>Media siber wajib mencantumkan Pedoman Pemberitaan Media Siber ini di medianya secara terang dan jelas.</p>
                            <p>9. Sengketa</p>
                            <p>Penilaian akhir atas sengketa mengenai pelaksanaan Pedoman Pemberitaan Media Siber ini diselesaikan oleh Dewan Pers.<br />Jakarta, 3 Februari 2012</p>
                            <p>*Pedoman ini ditandatangani oleh Dewan Pers dan komunitas pers di Jakarta, 3 Februari 2012 (dewanpers.or.id)</p>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{$active == "tentang-kami" ? "show active" : ""}}" id="pills-ttm" role="tabpanel" aria-labelledby="pills-ttm-tab">...</div>
            <div class="tab-pane fade {{$active == "disclaimer" ? "show active" : ""}}" id="pills-dis" role="tabpanel" aria-labelledby="pills-dis-tab">
                <div class="pull-content">
                    <h6>
                        <p>Seluruh layanan yang diberikan mengikuti aturan main yang berlaku dan ditetapkan oleh&nbsp;<strong>mamujutoday.com</strong></p>
                        <p><strong>PASAL SANGGAHAN (DISCLAIMER) :</strong></p>
                        <p><strong>mamujutoday.com&nbsp;</strong>tidak bertanggungjawab atas tidak tersampaikannya data/informasi yang disampaikan oleh pembaca melalui berbagai jenis saluran komunikasi (e-mail, sms, online form) karena faktor kesalahan teknis yang tidak diduga-duga sebelumnya</p>
                        <p><strong>mamujutoday.com</strong>&nbsp;berhak untuk memuat, tidak memuat, mengedit, dan/atau menghapus data/informasi yang disampaikan oleh pembaca.</p>
                        <p>Data dan/atau informasi yang tersedia di&nbsp;<strong>mamujutoday.com&nbsp;</strong>hanya sebagai rujukan/referensi belaka, dan tidak diharapkan untuk tujuan perdagangan saham, transaksi keuangan/bisnis maupun transaksi lainnya. Walau berbagai upaya telah dilakukan untuk menampilkan data dan/atau informasi seakurat mungkin,&nbsp;<strong>mamujutoday.com</strong>&nbsp;dan semua mitra yang menyediakan data dan informasi, termasuk para pengelola halaman konsultasi, tidak bertanggung jawab atas segala kesalahan dan keterlambatan memperbarui data atau informasi, atau segala kerugian yang timbul karena tindakan yang berkaitan dengan penggunaan data/informasi yang disajikan&nbsp;<strong>mamujutoday.com</strong></p>
                    </h6>
                </div>
            </div>
            <div class="tab-pane fade {{$active == "kontak" ? "show active" : ""}}" id="pills-kon" role="tabpanel" aria-labelledby="pills-kon-tab">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Kontak</h4>
                    </div>
                </div>
                <hr class="dashed"/>
                <div class="row pull-content">
                    <div class="col-md-12">
                        <h6>PT. MEDIA MANDAR NUSANTARA</h6>
                        <h6 class="font-grey hsm mt-4">Alamat</h6>
                        <h6>Jl. Abdul Syakur No.17, Komp. Ruko Saphire</h6>
                        <h6 class="font-grey hsm mt-4">Telp</h6>
                        <h6>(0426) 477950 / 085399206079</h6>
                        <h6 class="font-grey hsm mt-4">Email</h6>
                        <h6>redaksi.mamujutoday@gmail.com</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection