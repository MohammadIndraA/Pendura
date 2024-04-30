<div class="home__data">
    <h1 class="home__title">Udara Berbahaya <br></h1>
    <p class="home__description">Kualitas udara di sekitar sini, dimana kondisi kualitas udara sangat buruk
        @includeIf('front.aqi'), juga dapat menimbulkan efek
        kesehatan yang serius dan berpotensi mematikan. Kondisi dapat memperburuk kondisi
        orang yang memiliki masalah kesehatan seperti penyakit paru-paru dan jantung. Pencegahan dan tindakan untuk
        meningkatkan kualitas udara sangat penting untuk dilakukan. </p>
    <p style="margin-top:-5%"> Dengan AQI (Air Quality Index) sekitar <b>{{ $aqi }}</b>
        Maka Dikategorikan Udara Berbahaya</p>
</div>
<img src="{{ asset('img/sampah.png') }}" alt="">
<div class="showkonten-frame" style="margin-top: -16%">
    <?php
    $showkonten = "
                                                <p>###=</p>
                                                <div>
                                                    <p> Terpapar udara berbahaya dalam jangka waktu yang lama dapat menyebabkan kerusakan permanen pada organ pernapasan dan kesehatan lainnya, dan dapat meningkatkan risiko terkena penyakit serius seperti kanker paru-paru. </p>
                                                    </div>
                                                <div>
                                            </div>";
    $showfronted = explode('###=', $showkonten);
    echo '<div class="showfronted1">' . $showfronted[0] . '</div>';
    echo '<div class="showfronted2" style="display:none;">' . $showfronted[1] . '</div>';
    ?>
    <br>
    <div class="showkonten-btn">
        <button class="button">Lihat Lainnya</button>
        <button class="button" style="display:none;">Sembunyikan</button>
    </div>
</div>
<div class="showkonten-frame" style="margin-top: -9%">
    <?php
    $showkonten = "
                                                <p>###=</p>
                                               <p>Untuk menghindari terpapar udara berbahaya, sangat disarankan untuk menghindari aktivitas di luar ruangan dan menggunakan masker penutup wajah ketika harus berada di luar ruangan. 
                                                Pemerintah dan badan lingkungan terkait juga harus segera mengambil tindakan untuk mengatasi kondisi udara yang berbahaya dan memperbaiki kualitas udara di lingkungan sekitarnya. Menjaga kebersihan lingkungan, mengurangi penggunaan kendaraan bermotor, dan memperhatikan peringatan yang dikeluarkan oleh pemerintah atau badan lingkungan terkait juga sangat penting untuk dilakukan.
                                                </p>
                                            </div>";
    $showfronted = explode('###=', $showkonten);
    echo '<div class="showfronted1">' . $showfronted[0] . '</div>';
    echo '<div class="showfronted2" style="display:none;">' . $showfronted[1] . '</div>';
    ?>
    <br>

</div>
