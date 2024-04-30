<div class="home__data">
    <h1 class="home__title">Udara Sangat <br>Tidak Sehat</h1>
    <p class="home__description">Kualitas udara di sekitar sini sangat tidak sehat, dimana kondisi ketika
        konsentrasi partikel berbahaya di udara @includeIf('front.aqi'). Kondisi ini dapat memicu
        gejala yang lebih parah dari kondisi udara tidak sehat, seperti iritasi yang lebih parah pada mata, hidung,
        dan tenggorokan, sakit kepala yang intens, mual, dan sesak napas yang parah.</p>
    <p style="margin-top:-5%"> Dengan AQI (Air Quality Index) sebesar <b>{{ $aqi }}</b>
        Maka Dikategorikan Udara Sangat Tidak Sehat</p>
</div>
<img src="{{ asset('img/sampah.png') }}" alt="">
<div class="showkonten-frame" style="margin-top: -16%">
    <?php
    $showkonten = "
                                        <p>###=</p>
                                        <div>
                                            <p>Jika terpapar dalam jangka waktu yang lama, kualitas udara yang sangat tidak sehat dapat menyebabkan penyakit pernapasan yang serius, seperti asma, bronkitis kronis, dan bahkan kanker paru-paru. </p>
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
                                       <p>
                                        Untuk menghindari terpapar udara sangat tidak sehat, disarankan untuk menghindari aktivitas di luar ruangan dan menghindari terpapar asap dan polusi yang lebih besar dari biasanya. Menggunakan masker penutup wajah dan memperhatikan peringatan yang dikeluarkan oleh pemerintah atau badan lingkungan terkait juga sangat penting untuk dilakukan. Kondisi udara yang sangat tidak sehat harus segera diatasi untuk menjaga kesehatan dan kesejahteraan manusia dan lingkungan sekitarnya.
                                        </p>
                                    </div>";
    $showfronted = explode('###=', $showkonten);
    echo '<div class="showfronted1">' . $showfronted[0] . '</div>';
    echo '<div class="showfronted2" style="display:none;">' . $showfronted[1] . '</div>';
    ?>
    <br>

</div>
