<div class="home__data">
    <h1 class="home__title">Udara Tidak Sehat<br>Bagi Sebagian Kelompok</h1>
    <p class="home__description">
        Kualitas udara di sekitar sini Tidak Sehat Bagi Sebagian Kelompok, dimana kondisi
        udara di mana konsentrasi partikulat di udara sangat tinggi @includeIf('front.aqi'), juga dapat
        berdampak negatif pada kesehatan orang yang lebih rentan, seperti anak-anak, orang tua, dan orang dengan
        masalah pernapasan atau penyakit jantung.
    </p>
    <p style="margin-top:-5%"> Dengan AQI (Air Quality Index) sekitar <b id="aqi-value">{{ $aqi }}</b>
        Maka Dikategorikan Udara Tidak Sehat Bagi Sebagian Kelompok
    </p>
</div>
<img src="img/rain-.png" alt="" style="height: 90%">
<div class="showkonten-frame" style="margin-top: -10%">
    <div class="showfronted1">
    </div>
    <div class="showfronted2" style="display:none;">
        <div>
            <p>
                Udara ini bisa berdampak buruk pada kesehatan mereka dan dapat memperburuk kondisi kesehatan yang ada.
                Udara yang tidak sehat juga dapat mempengaruhi orang yang berusia lanjut dan anak-anak, yang memiliki
                sistem pernapasan yang lebih lemah dan kurang mampu menangani paparan polutan udara.
            </p>
        </div>
    </div>
    <br>
    <div class="showkonten-btn">
        <button class="button" onclick="showMore()">Lihat Lainnya</button>
        <button class="button" style="display:none;" onclick="hideMore()">Sembunyikan</button>
    </div>
</div>
<div class="showkonten-frame" style="margin-top: -9%">
    <div class="showfronted1">
    </div>
    <div class="showfronted2" style="display:none;">
        <p>
            Untuk mengurangi risiko dampak udara tidak sehat bagi kelompok rentan, dianjurkan untuk memantau kualitas
            udara setiap hari dan membatasi aktivitas di luar ruangan pada saat udara buruk. Pencegahan dan tindakan
            pembersihan udara juga dapat membantu mengurangi paparan polusi udara dan meningkatkan kualitas udara di
            sekitar kita.
        </p>
    </div>
    <br>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fetch AQI data and insert it into the span element
        const aqiValue = 130; // Replace with actual AQI value
        document.getElementById("aqi-value").textContent = aqiValue;
    });

    function showMore() {
        document.querySelectorAll('.showfronted2').forEach(el => el.style.display = 'block');
        document.querySelectorAll('.showkonten-btn .button')[0].style.display = 'none';
        document.querySelectorAll('.showkonten-btn .button')[1].style.display = 'block';
    }

    function hideMore() {
        document.querySelectorAll('.showfronted2').forEach(el => el.style.display = 'none');
        document.querySelectorAll('.showkonten-btn .button')[0].style.display = 'block';
        document.querySelectorAll('.showkonten-btn .button')[1].style.display = 'none';
    }
</script>
