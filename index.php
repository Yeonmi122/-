<!DOCTYPE html>
<html>

<head>
    <title>Google Maps</title>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500&display=swap" rel="stylesheet">
    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
            height: 800px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
        .text-box{
            display: flex;
            justify-content: center;
        }
        .h3{
            font-family: 'M PLUS Rounded 1c', sans-serif;
        }
        #h_img{
            width:50%;
            height: 15rem;
        }
    </style>
        <script>
        function initMap() {

            // 지도 스타일
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 7,
                center: { lat: 36.738367, lng: 128.063889 },
            });

            // 마커 정보
            const locations = [
                { place:'<div class="wrap"><h1>NeulBom Healing Cafe</h1><div class = "text-box"><div class= "info"><h3>大韓民国の代表的な廃家だった場所。 忠清北道堤川市鳳陽邑龍頭大路796(鳳陽里37-1)所在。中央高速道路鳳陽陸橋進入序盤。 堤川インターチェンジから2km前方ぐらいだ。ネオンサインの看板はほとんど離れていた。</h3></div><img src = "../img/NeulBom.png"  id="h_img"></div></div>', lat: 37.152170, lng: 128.134829},
                { place: '<div class="wrap"><h1>a cobalt mine</h1><div class = "text-box"><div class= "info"><h3></h3></div><img src = "../img/cobalt.png"  id="h_img"></div></div>', lat: 35.799714, lng: 128.761312 },
                { place:'<div class="wrap"><h1>Miryang Closed School</h1><div class = "text-box"><div class= "info"><h3></h3></div><img src = "../img/Miryang.png"  id="h_img"></div></div>', lat: 35.539367, lng: 128.760278 },
                { place:'<div class="wrap"><h1>Yeongdeok Raw Fish Restaurant</h1><div class = "text-box"><div class= "info"><h3></h3></div><img src = "../img/Yeongdeok.png"  id="h_img"></div></div>', lat: 36.282056, lng: 129.375972 },
                { place:'<div class="wrap"><h1>Lilies Daycare Center</h1><div class = "text-box"><div class= "info"><h3></h3></div><img src = "../img/Lilies.png"  id="h_img"></div></div>', lat: 37.201839, lng: 127.047130 },
                { place:'<div class="wrap"><h1>エバーランド·ホラーメイズ</h1><div class = "text-box"><div class= "info"><h3>ホラーメイズは、合計Ⅰ、Ⅱとなっているお化け屋敷の形をしたエバーランドの数少ない有料アトラクションだ。<br>ホラーメイズの設定は永遠の生命を研究していた狂った科学者は、人々を拉致、監禁して生体実験を行い、最後に娘に生体実験を行う。 しかし、実験中に娘が死ぬことになり、娘は幽霊として現れ、山を歩き回るという設定。</h3></div><img src = "../img/horror.jpg" id="h_img"></div></div>', lat: 37.289760, lng: 127.204336},
                { place:'<div class="wrap"><h1>Chungil</h1><div class = "text-box"><div class= "info"><h3></h3></div><img src = "../img/" id="h_img"></div></div>', lat: 36.308940, lng: 127.321266},
                { place:'<div class="wrap"><h1>Korea minseokchon</h1><div class = "text-box"><div class= "info"><h3></h3></div><img src = "../img/minseok.jpg" id="h_img"></div></div>', lat: 37.258445, lng: 127.116997},
                { place:'<div class="wrap"><h1>LotteWorld</h1><div class = "text-box"><div class= "info"><h3></h3></div><img src = "../img/" id="h_img"></div></div>', lat: 37.511103, lng: 127.098199},
                { place:'<div class="wrap"><h1>Osan</h1><div class = "text-box"><div class= "info"><h3></h3></div><img src = "../img/osan.jpeg" id="h_img"></div></div>', lat: 37.144370, lng: 127.065051}

                
            ];
            
            //인포윈도우
            var infowindow = new google.maps.InfoWindow();

            //마커 생성
            for (var i = 0; i < locations.length; i++) {
                var marker = new google.maps.Marker({
                    map: map,
                    //label: locations[i].place,
                    position: new google.maps.LatLng(locations[i].lat, locations[i].lng),                    
                    icon:{
                        url: "../img/ghost.png",
                        scaledSize: new google.maps.Size(40, 50),
                        labelOrigin: new google.maps.Point(20, 47),
                        anchor: new google.maps.Point(50,32)
                    }
                });


                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        //html로 표시될 인포 윈도우의 내용
                        infowindow.setContent(locations[i].place);
                        //인포윈도우가 표시될 위치
                        infowindow.open(map, marker);
                    }
                })(marker, i));
                
                if (marker) {
                    marker.addListener('click', function() {
                        //중심 위치를 클릭된 마커의 위치로 변경
                        map.setCenter(this.getPosition());
                        //마커 클릭 시의 줌 변화
                        map.setZoom(14);
                    });
                }
            }
        }


    </script>
</head>

<body>
    <h3>구글 맵</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcw51yGd51g3-ZuVmsegSfyCnfD4R1Gi8&callback=initMap&libraries=&v=weekly&language=en"
        async></script>
</body>
</html>

<!-- 구글맵 마커 팝업 참고: https://cocoon1787.tistory.com/552-->