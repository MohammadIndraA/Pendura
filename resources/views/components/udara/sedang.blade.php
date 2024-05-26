<div class="home__data">
    <h1 class="home__title">- Udara Sedang - <br></h1>
    <p class="home__description">Kualitas udara di sekitar sini sedang, dimana kondisi udara yang memperlihatkan
        konsentrasi partikulat tertentu yang sudah melebihi batas ambang normal @includeIf('front.aqi'), namun
        masih dalam tingkat yang
        dapat ditoleransi oleh sebagian besar orang. Kondisi ini mungkin tidak mempengaruhi kesehatan orang yang
        sehat secara signifikan, namun dapat mempengaruhi kesehatan orang yang lebih rentan seperti orang yang
        memiliki masalah pernapasan atau penyakit jantung.
    </p>
    <p style="margin-top:-5%"> Dengan AQI (Air Quality Index) sekitar <b>{{ $aqi }}</b>
        Maka Dikategorikan Udara Sedang
    </p>
</div>
<img src="img/rain-.png" alt="" style="height: 90%">
<div class="showkonten-frame" style="margin-top: -12%">
    <div class="showfronted1">
    </div>
    <div class="showfronted2" style="display:none;">
        <div>
            <p>Dalam kondisi udara sedang, biasanya disarankan untuk membatasi aktivitas luar ruangan terutama bagi
                orang yang memiliki masalah pernapasan atau penyakit jantung. Selain itu, sebaiknya menghindari paparan
                partikulat dari sumber polutan seperti asap kendaraan atau asap industri.</p>
        </div>
    </div>
    <br>
    <div class="showkonten-btn">
        <button class="button" onclick="showMore()">Lihat Lainnya</button>
        <button class="button" style="display:none;" onclick="hideMore()">Sembunyikan</button>
    </div>
</div>
<div class="showkonten-frame" style="margin-top: -1%">
    <div class="showfronted1">
    </div>
    <div class="showfronted2" style="display:none;">
        <p>Jika aktivitas luar ruangan tetap dilakukan, maka disarankan untuk menggunakan masker yang dapat membantu
            mengurangi paparan partikulat di udara.</p>
    </div>
    <br>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fetch AQI data and insert it into the span elements
        const aqiValue = 75; // Replace with actual AQI value
        document.getElementById("aqi-value").textContent = aqiValue;
        document.getElementById("aqi-data").textContent = "Insert AQI data here"; // Replace with actual data
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
