let map, infoWindow;
var newpose;

function initMap() {
    var pos = { lat: -25.344, lng: 131.036 };

    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 16,
        center: pos,
    });
    infoWindow = new google.maps.InfoWindow();

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                newpose = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
                infoWindow.setPosition(newpose);
                infoWindow.setContent("Vous êtes ici !");
                infoWindow.open(map);
                map.setCenter(newpose);
            },
            () => {
                handleLocationError(true, infoWindow, map.getCenter());
            }
        );
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation ?
        "Error: The Geolocation service failed." :
        "Error: Your browser doesn't support geolocation."
    );
    infoWindow.open(map);
}

function PBListe(params, Number) {
    var count = 0;
    console.log(params[0].id);
    while (Number !== 0) {
        console.log(
            `le marker ${params[count].id} nommé ${
        params[count].desc
      } latitude : ${parseFloat(params[count].lat)} et longitude ${parseFloat(
        params[count].long
      )}`
        );

        new google.maps.Marker({
            position: {
                lat: parseFloat(params[count].lat),
                lng: parseFloat(params[count].long),
            },
            map,
            title: params[count].desc,
        });

        count = count + 1;
        Number = Number - 1;
    }
}