<div class="home__data">
    <h1 class="home__title">-{ Udara Baik }-<br> </h1>
    <p class="home__description mb-0">Kualitas udara di sini baik,dimana kondisi udara yang sehat @includeIf('front.aqi') juga segar dengan kandungan polutan yang rendah. Udara ini biasanya memiliki tingkat kelembaban dan suhu yang nyaman untuk dihirup dan tidak menyebabkan masalah pernapasan pada manusia. Kondisi udara yang baik memberikan banyak manfaat kesehatan, seperti mengurangi risiko gangguan pernapasan dan kesehatan yang terkait dengan polusi udara, serta meningkatkan kualitas tidur dan energi.</p>
    <p style="margin-top:-5%"> Dengan AQI (Air Quality Index) sebesar {{ $aqi }}
        Maka Dikategorikan Udara Udara Baik</p>
</div>
<img src="{{ asset('img/sehat.png') }}" alt="">
<div class="showkonten-frame" style="margin-top: -16%">
    <?php
    $showkonten = "
                                <p>###=</p>
                                <div>
                                    <p>  Udara yang baik juga berkontribusi pada kesehatan lingkungan, seperti membantu tanaman tumbuh dengan baik dan mengurangi risiko kebakaran hutan. Udara yang baik biasanya dihasilkan oleh lingkungan yang sehat dan lestari. </p>
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
                                dengan sumber energi yang ramah lingkungan dan teknologi yang efisien. Pencegahan polusi udara dan perlindungan lingkungan yang lebih baik dapat membantu menjaga kualitas udara yang baik dan sehat bagi manusia dan lingkungan.
                                </p>
                            </div>";
    $showfronted = explode('###=', $showkonten);
    echo '<div class="showfronted1">' . $showfronted[0] . '</div>';
    echo '<div class="showfronted2" style="display:none;">' . $showfronted[1] . '</div>';
    ?>
    <br>

</div>
