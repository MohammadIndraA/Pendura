<div class="home__data">
    <h1 class="home__title">- Udara Sedang - <br></h1>
    <p class="home__description">Kualitas udara di sekitar sini sedang, dimana kondisi udara yang memperlihatkan
        konsentrasi partikulat tertentu yang sudah melebihi batas ambang normal @includeIf('front.aqi'), namun masih dalam tingkat yang
        dapat ditoleransi oleh sebagian besar orang. Kondisi ini mungkin tidak mempengaruhi kesehatan orang yang
        sehat secara signifikan, namun dapat mempengaruhi kesehatan orang yang lebih rentan seperti orang yang
        memiliki masalah pernapasan atau penyakit jantung. </p>
        <p style="margin-top:-5%"> Dengan AQI (Air Quality Index) sekitar <b>{{ $aqi }}</b>
            Maka Dikategorikan Udara Sedang</p>
</div>
<img src="{{ asset('img/rain-.png') }}" alt="" style="height: 90%">
<div class="showkonten-frame" style="margin-top: -16%">
    <?php
    $showkonten = "<p>###=</p>
                                <div>
                                    <p> Dalam kondisi udara sedang, biasanya disarankan untuk membatasi aktivitas luar ruangan terutama bagi orang yang memiliki masalah pernapasan atau penyakit jantung. Selain itu, sebaiknya menghindari paparan partikulat dari sumber polutan seperti asap kendaraan atau asap industri. </p>
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
<div class="showkonten-frame" style="margin-top: -1%">
    <?php
    $showkonten = "
                                    <p>###=</p>
                                   <p>
                                    Jika aktivitas luar ruangan tetap dilakukan, maka disarankan untuk menggunakan masker yang dapat membantu mengurangi paparan partikulat di udara.
                                    </p>
                                </div>";
    $showfronted = explode('###=', $showkonten);
    echo '<div class="showfronted1">' . $showfronted[0] . '</div>';
    echo '<div class="showfronted2" style="display:none;">' . $showfronted[1] . '</div>';
    ?>
    <br>

</div>
