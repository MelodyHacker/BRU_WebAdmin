var map;

            function initialize() {
                var bru = new google.maps.LatLng(14.989880,103.102777);



                var mapOptions = {
                    zoom: 20,
                    center: bru,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById('map_canvas'),mapOptions);


var marker = new google.maps.Marker({
    draggable: true,
    position: bru,
    map: map,
    title: "Your location"
  });



                google.maps.event.addListener(marker, 'dragend', function(event) {
                    document.getElementById("lat").value = event.latLng.lat();
                    document.getElementById("long").value = event.latLng.lng();
                 });





                google.maps.event.addListener(map, 'click', function(event) {
                    document.getElementById('lat').value = event.latLng.lat();
                    document.getElementById('lng').value = event.latLng.lng();
                    marker.setPosition(event.latLng);
                });
            }









            function mapDivClicked (event) {
                var target = document.getElementById('map_canvas'),
                    posx = event.pageX - target.offsetLeft,
                    posy = event.pageY - target.offsetTop,
                    bounds = map.getBounds(),
                    neLatlng = bounds.getNorthEast(),
                    swLatlng = bounds.getSouthWest(),
                    startLat = neLatlng.lat(),
                    endLng = neLatlng.lng(),
                    endLat = swLatlng.lat(),
                    startLng = swLatlng.lng();

                document.getElementById('posX').value = posx;
                document.getElementById('posY').value = posy;
                document.getElementById('lat').value = startLat + ((posy/350) * (endLat - startLat));
                document.getElementById('lng').value = startLng + ((posx/500) * (endLng - startLng));
            }
            google.maps.event.addDomListener(window, 'load', initialize);


