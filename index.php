<!DOCTYPE html>
<html lang="en">
    <?php require "layout/head.php";?>

    <body>
        <div id="app">
            <?php require "layout/sidebar.php";?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>Dashboard</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Sistem Pendukung Keputusan Pemilihan Kost Sekitar Kampus UPI</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                        Metode Simple Additive Weighting (SAW) merupakan salah satu metode dalam SPK yang dapat digunakan untuk menilai dan memilih 
                                        alternatif terbaik berdasarkan beberapa kriteria yang telah ditentukan. Metode SAW memiliki keunggulan dengan kemampuannya untuk 
                                        melakukan penilaian dengan lebih akurat karena didasarkan pada nilai kriteria dan bobot preferensi yang telah ditetapkan 
                                        (Kusumadewi et al., 2006).
                                        </p>
                                        <hr>
                                        <p class="card-text">
                                            Tahapan dalam metode SAW
                                            :
                                        </p>
                                        <ol type="1">
                                            <li>
                                                Mendefinisikan beberapa kriteria (atribut, bobot, rating) yang akan dijadikan acuan dalam pengambilan keputusan 
                                            </li>
                                            <li>
                                                Menentukan nilai setiap kriteria yang dimiliki setiap alternatif. Nilai bisa mengacu pada rating yang sudah didefinisikan. 
                                            </li>
                                            <li>
                                                Membuat matriks keputusan 
                                            </li>
                                            <li>
                                                Melakukan normalisasi matriks berdasarkan rumus sesuai dengan atributnya (biaya atau keuntungan) 
                                            </li>
                                            <li>
                                                Melakukan penjumlahan dari perkalian matriks ternormalisasi dengan bobot kriteria sehingga diperoleh solusi alternatif terbaik berdasarkan peringkat terbesar.
                                            </li>
                                        </ol>
                                        <div class="p-5">
                                            <p class="fw-bold text-start">
                                                Tabel preferensi yang digunakan dalam studi kasus kali ini adalah sebagai berikut :
                                            </p>
                                            <div class="text-center">
                                                <img src="./assets/images/Tabel_Preferensi.jpg" alt="Tabel Preferensi" class="t rounded">
                                            </div>
                                            <p class="fw-bold text-start p-3">Studi kasus: Sistem pendukung keputusan pemilihan kost</p>
                                            <p>Tahun ajaran baru akan dimulai namun bagi mahasiswa yang memiliki jarak tempuh yang jauh dengan kampus
                                                memerlukan kost, maka dari itu kami membuat sistem pendukung keputusan membantu pemilihan kost dengan ketentuan kriteria seperti gambar diatas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php require "layout/footer.php";?>
            </div>
        </div>
        <?php require "layout/js.php";?>
    </body>

</html>