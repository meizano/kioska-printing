var hasil = document.getElementById("hasil");

var dataPustaka;

function parsingPustaka(dPustaka) {
    // Menambahkan (append) semua data ke dalam div#hasil
        for (let pustaka of dPustaka) {
            // //Membuat elemen div dan a untuk penampung
            let div = document.createElement('div');
            let a = document.createElement('a');

            // Memilah data
            let namaNPM = pustaka.querySelector("span.person_name").innerHTML;
            let namaNPMarr = namaNPM.split(",");
            let nama = namaNPMarr[0];
            let NPM = namaNPMarr[1];
            console.log(nama);
            console.log(NPM);

            let judulPustaka = pustaka.querySelector("a > em").innerHTML;
            console.log(judulPustaka);

            let linkPustaka = pustaka.querySelector("a").getAttribute("href");
            console.log(linkPustaka);

            let tahunFakultasUniversitas = pustaka.innerHTML;
            let tahun  = tahunFakultasUniversitas.split("/span>").pop().split("<a").shift().split("(").pop().split(")").shift();
            let fakultasUniversitas = tahunFakultasUniversitas.split("</a>").pop();
            let FUarr = fakultasUniversitas.split(",");
            let fakultas = FUarr[0];
            let universitas = FUarr[1].split(".").shift();
            console.log(tahun);
            console.log(fakultas);
            console.log(universitas);


            // Membuat tag penampung data
            let divNama = document.createElement('div');
            divNama.className += 'nama';
            divNama.textContent = nama;
            a.appendChild(divNama);

            let divNPM = document.createElement('div');
            divNPM.className += 'NPM';
            divNPM.textContent = NPM;
            a.appendChild(divNPM);

            let divJudul = document.createElement('div');
            divJudul.className += 'judul';
            divJudul.textContent = judulPustaka;
            a.appendChild(divJudul);

            let divTahun = document.createElement('div');
            divTahun.className += 'tahun';
            divTahun.textContent = tahun;
            a.appendChild(divTahun);

            let divFakultas = document.createElement('div');
            divFakultas.className += 'fakultas';
            divFakultas.textContent = fakultas;
            a.appendChild(divFakultas);

            let divUniversitas = document.createElement('div');
            divUniversitas.className += 'universitas';
            divUniversitas.textContent = universitas;
            a.appendChild(divUniversitas);

            // Menambahkan atribut href untuk link
            a.setAttribute("href", linkPustaka);
            a.setAttribute("target", "_blank");

            div.appendChild(a);

//            div.appendChild(pustaka);

            hasil.appendChild(div);
        }

}

var kataKunci = 'tanah';

// Mengaktifkan crossOrigin
$.ajaxSetup({
    crossOrigin: true
});

//Get json pada saat select dipilih
$.ajax({
    crossOrigin: true,
    url: 'http://digilib.unila.ac.id/view/year/2017.html',
    type: 'GET',
    dataType: 'html',
    success: function (data) {
        // Membuat dummy DOM element agar bisa diparsing seperti dokumen HTML
        var dataParsing = document.createElement('div');
        dataParsing.innerHTML = data;

        // Mengumpulkan semua data di dalam tag p yang ada di dalam div class="ep_view_page"
        dataPustaka = dataParsing.querySelectorAll("div.ep_view_page > p");

        parsingPustaka(dataPustaka);
    }

});


