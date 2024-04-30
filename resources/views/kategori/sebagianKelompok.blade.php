<div class="home__data">
    <h1 class="home__title" style="font-size: 36px">Udara Tidak Sehat<br>Bagi Sebagian Kelompok</h1>
    <p class="home__description">Kualitas udara di sekitar sini Tidak Sehat Bagi Sebagian Kelompok, dimana kondisi
        udara di mana konsentrasi partikulat di udara sangat tinggi @includeIf('front.aqi'), Juga dapat
        berdampak negatif pada kesehatan orang yang lebih rentan, seperti anak-anak, orang tua, dan orang dengan
        masalah pernapasan atau penyakit jantung.
    </p>
    <p style="margin-top:-5%"> Dengan AQI (Air Quality Index) sekitar <b>{{ $aqi }}</b>

        Maka Dikategorikan Udara Tidak Sehat Bagi Sebagian Kelompok</p>
</div>
<img src="{{ asset('img/rain-.png') }}" alt="" style="height: 90%">
<div class="showkonten-frame" style="margin-top: -23%">
    <?php
    $showkonten = "
                                        <p>###=</p>
                                        <div>
                                            <p> 
                                                Udara ini bisa berdampak buruk pada kesehatan mereka dan dapat memperburuk kondisi kesehatan yang ada. Udara yang tidak sehat juga dapat mempengaruhi orang yang berusia lanjut dan anak-anak, yang memiliki sistem pernapasan yang lebih lemah dan kurang mampu menangani paparan polutan udara.</p>
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
<div class="showkonten-frame" style="margin-top: -5%">
    <?php
    $showkonten = "
                                        <p>###=</p>
                                       <p>
                                        Untuk mengurangi risiko dampak udara tidak sehat bagi kelompok rentan, dianjurkan untuk memantau kualitas udara setiap hari dan membatasi aktivitas di luar ruangan pada saat udara buruk. Pencegahan dan tindakan pembersihan udara juga dapat membantu mengurangi paparan polusi udara dan meningkatkan kualitas udara di sekitar kita.
                                        </p>
                                    </div>";
    $showfronted = explode('###=', $showkonten);
    echo '<div class="showfronted1">' . $showfronted[0] . '</div>';
    echo '<div class="showfronted2" style="display:none;">' . $showfronted[1] . '</div>';
    ?>
    <br>

</div>
