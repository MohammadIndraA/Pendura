<div class="home__data">
    <h1 class="home__title">-{ Udara Baik }-<br> </h1>
    <p class="home__description mb-0">Kualitas udara di sini baik, dimana kondisi udara yang sehat
        juga segar dengan kandungan polutan yang rendah. Udara ini biasanya memiliki
        tingkat kelembaban dan suhu yang nyaman untuk dihirup dan tidak menyebabkan masalah pernapasan pada manusia.
        Kondisi udara yang baik memberikan banyak manfaat kesehatan, seperti mengurangi risiko gangguan pernapasan
        dan kesehatan yang terkait dengan polusi udara, serta meningkatkan kualitas tidur dan energi.
    </p>
    <p style="margin-top:-5%"> Dengan AQI (Air Quality Index) sebesar {{ $aqi }}</span>
        Maka Dikategorikan Udara Udara Baik
    </p>
</div>
<img src="img/sehat.png" alt="">
<div class="showkonten-frame" style="margin-top: -16%">
    <div class="showfronted1">
    </div>
    <div class="showfronted2" style="display:none;">
        <div>
            <p>Udara yang baik juga berkontribusi pada kesehatan lingkungan, seperti membantu tanaman tumbuh dengan baik
                dan mengurangi risiko kebakaran hutan. Udara yang baik biasanya dihasilkan oleh lingkungan yang sehat
                dan lestari.</p>
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
        <p>dengan sumber energi yang ramah lingkungan dan teknologi yang efisien. Pencegahan polusi udara dan
            perlindungan lingkungan yang lebih baik dapat membantu menjaga kualitas udara yang baik dan sehat bagi
            manusia dan lingkungan.</p>
    </div>
    <br>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fetch AQI data and insert it into the span elements
        const aqiValue = 50; // Replace with actual AQI value
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
