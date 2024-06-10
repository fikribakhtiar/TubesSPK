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
                                            Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode
                                            penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan
                                            terbobot dari rating kinerja pada setiap alternatif pada semua atribut
                                            (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan
                                            intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM,
                                            karena fungsi linear additive dapat mewakili preferensi pembuat keputusan
                                            (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika
                                            asumsi preference independence (Keeney & Raiffa 1976) atau preference
                                            separability (Gorman 1968) terpenuhi.
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
                                        <div class="text-center p-5">
                                            <p class="fw-bold text-start">
                                                Tabel preferensi yang digunakan dalam studi kasus kali ini adalah sebagai berikut :
                                            </p>
                                            <img src="./assets/images/Tabel_Preferensi.jpg" alt="Tabel Preferensi" class="t rounded">
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