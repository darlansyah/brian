$(document).ready(function () {

    var tabelfull;

    tampilkanData();

    /* tampilkan data */

    function tampilkanData() {
        //var datatable = $("#tabelfull").DataTable();

        var dataidwarga = window.localStorage.getItem("idwarga");
        console.log(dataidwarga);
        tabelfull = $('#tablecontent').DataTable({
            "autoWidth": false,
            "ajax": {
                "url": url + "app/mobile/readriwayat.php",
                "type": "POST",
                "data": {idwarga: dataidwarga}
            },
            "columns": [
                {
                    "data": "no"
                },
                {"data": "tanggal_waktu"},
                {
                    "defaultContent": "-"
                }
            ],
            "columnDefs": [
                {
                    "targets": 2,
                    "data": 'tanggal_waktu',
                    "render": function (data, type, full, meta) {
                        return '<button class="btn btn-info btn-sm lihat"><i class="fa fa-info"></i> Lihat</button>'
                    }
                }
            ]


        });



        $("#tablecontent").on('click', '.lihat', function (event) {
            event.preventDefault();
            $("#lihatriwayat").modal("show");
            var datafull = tabelfull.row($(this).parents('tr')).data();
            console.log(datafull);
            ambildatapos(datafull);
            $("#lihatriwayat").find("input[name='idwarga']").val(datafull.id_warga);
            $("#lihatriwayat").find("input[name='namawarga']").val(datafull.nama_warga);
            $("#lihatriwayat").find("input[name='tglwaktu']").val(datafull.tanggal_waktu);
            $("#lihatriwayat").find("input[name='pidana']").val(datafull.pidana);
            $("#lihatriwayat").find("input[name='korban']").val(datafull.korban);
            $("#lihatriwayat").find("input[name='terlapor']").val(datafull.terlapor);
            $("#lihatriwayat").find("textarea[name='kronologi']").val(datafull.kronologi);
            $("#lihatriwayat").find("input[name='barangbukti']").val(datafull.barang_bukti);
            $("#lihatriwayat").find("input[name='namasaksi']").val(datafull.nama_saksi);
            $("#lihatriwayat").find("textarea[name='alamatsaksi']").val(datafull.alamat_saksi);
            $("#lihatriwayat").find("input[name='posisilat']").val(datafull.latitude_laporan);
            $("#lihatriwayat").find("input[name='posisilng']").val(datafull.longitude_laporan);
        });



    }

    function ambildatapos(datafull) {
        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: url + "app/pos/read.php"
        }).done(function (data) {
            initMap(data.data, datafull);

        });
    }

    function initMap(data, datafull) {
        console.log('data pos : ');
        console.log(data);
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        directionsDisplay = new google.maps.DirectionsRenderer();
        var propertiPeta = {
            center: new google.maps.LatLng(datafull.latitude_laporan, datafull.longitude_laporan),
            zoom: 11,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var peta = new google.maps.Map(document.getElementById("mapriwayatlapran"), propertiPeta);
        directionsDisplay.setMap(peta);
        directionsDisplay.setOptions({suppressMarkers: true});
        var penanda = {
            url: 'img/Alarm_alert.png', // url
            scaledSize: new google.maps.Size(50, 50), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(20, 45) // anchor
        };

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(datafull.latitude_laporan, datafull.longitude_laporan),
            map: peta,
            icon: penanda
        });

        var hitungjarakdekat;
        var jarakterdekat = 10000000;
        var pos_terdekat;
        var lat_terdekat;
        var lng_terdekat;
        var titiklaporan = {lat: parseFloat(datafull.latitude_laporan), lng: parseFloat(datafull.longitude_laporan)};
        var titikpos;
        var outputDiv = document.getElementById('output');
        outputDiv.innerHTML = '';
        var infoWindow = new google.maps.InfoWindow;

        Array.prototype.forEach.call(data, function (row, idx) {

            var longitude = row.longitude_pos;
            var latitude = row.latitude_pos;
            var nama_tempat = row.nama_pos;
            var id_pos = row.id_pos;

            var point = new google.maps.LatLng(
                    parseFloat(latitude),
                    parseFloat(longitude));
            titikpos = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
            var infowincontent = document.createElement('div');
            infowincontent.setAttribute("style", "width: 100px;");
            var strong = document.createElement('strong');
            strong.textContent = nama_tempat;
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

            var marker = new google.maps.Marker({
                map: peta,
                position: point
            });

            marker.addListener('click', function () {
                infoWindow.setContent(infowincontent);
                infoWindow.open(peta, marker);
            });

            var service = new google.maps.DistanceMatrixService;
            var results;
            service.getDistanceMatrix({
                origins: [titikpos],
                destinations: [titiklaporan],
                travelMode: 'DRIVING',
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status) {
                if (status !== 'OK') {
                    alert('Error was: ' + status);
                } else {
                    var originList = response.originAddresses;

                    for (var i = 0; i < originList.length; i++) {
                        results = response.rows[i].elements;
                        for (var j = 0; j < results.length; j++) {

                            hitungjarakdekat = parseFloat(results[j].distance.text);
                            console.log(jarakterdekat + '>' + hitungjarakdekat);
                            if (jarakterdekat > hitungjarakdekat) {
                                console.log('benar');

                                jarakterdekat = parseFloat(results[j].distance.text);
                                console.log('Jarak Terdekat yaitu ' + jarakterdekat + ' KM , Nama POS : ' + nama_tempat + ', ID POS : ' + id_pos + ', latlong : ' + latitude + ',' + longitude);
                                // outputDiv.innerHTML += results[j].distance.text +' '+nama_tempat+ '<br>';

                                pos_terdekat = nama_tempat;
                                lat_terdekat = latitude;
                                lng_terdekat = longitude;

                                outputDiv.innerHTML = 'Jarak Terdekat yaitu ' + jarakterdekat + ' KM , Nama POS : ' + nama_tempat + ', ID POS : ' + id_pos + ', latlong : ' + latitude + ',' + longitude + ' <br>';
                                // window.localStorage.setItem("idp",id_pos);
//                                $("#bukamap").find("input[name='idpostele']").val(id_pos);
                            }
                            if (idx == (data.length - 1)) {
                                console.log('idx : ' + idx);
                                console.log('pos : ' + pos_terdekat);
                                gambar_rute(lat_terdekat, lng_terdekat);
                            }
                        }
                    }

                }
            });
        });
        function gambar_rute(lat_terdekat, long_terdekat) {
            var start = new google.maps.LatLng(lat_terdekat, long_terdekat);
            var end = new google.maps.LatLng(datafull.latitude_laporan, datafull.longitude_laporan);

            var bounds = new google.maps.LatLngBounds();
            bounds.extend(start);
            bounds.extend(end);
            peta.fitBounds(bounds);
            var request = {
                origin: start,
                destination: end,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                    directionsDisplay.setMap(peta);
                } else {
                    alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
                }
            });
        }
    }

});