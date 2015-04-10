/**
 * Created by User2 on 4/7/2015.
 */
var x = document.getElementById("map_holder");
var map;
var infowindow;
getLocation();
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {


    document.querySelector("#mapcanvas").style.height='300px';
    var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeControl: false,
        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
     map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);

    var infowindowmain = new google.maps.InfoWindow({
        map: map,
        position: latlng,
        content:"You are here! (at least within a "+position.coords.accuracy+" meter radius)"
    });

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title:"You are here! (at least within a "+position.coords.accuracy+" meter radius)"
    });

    var request = {
        location: latlng,
        radius: 500,
        types: ['food']
    };
    infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);
}

function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
        }
    }
}

function createMarker(place) {

    var placeLoc = place.geometry.location;
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
    });


    var requestdata = {
        placeId: place.place_id
    };
    var service = new google.maps.places.PlacesService(map);
    service.getDetails(requestdata, function(placedata, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            var str="";

            var place_name = "<h1>"+placedata.name+"</h1>";
            var place_address = "<h3>"+placedata.formatted_address+"</h3>";
            var place_img_representation = "<img src='"+placedata.icon+"' />";
            var place_internationa_phonenuber ="<p>"+placedata.international_phone_number +"</p>";
            var place_rating ="<p>rating:"+placedata.rating+"</p>";
            var place_website = "<a href='"+placedata.website+"' target='' >WEBSITE</a>"
            var place_reviews ="<div>";
            for (var key in placedata.reviews) {
                    if(typeof key.hasOwnProperty(key) !== 'undefined'){

                        if (key.hasOwnProperty(key)) {
                            var obj = placedata.reviews[key];
                           //console.log(obj)
                            console.log(placedata.reviews[key]["author_name"]+" "+placedata.reviews[key]["author_url"]+" "+placedata.reviews[key]["rating"]+" "+placedata.reviews[key]["text"]+" "+placedata.reviews[key]["time"]);
                            for (var prop in obj) {
                                if (obj.hasOwnProperty(prop)) {
                                    if(prop === 'aspects'){
                                        for(var a in obj[prop]){
                                            if(obj[prop].hasOwnProperty(a)){
                                               //console.log(a + " =>"+ obj[prop][a]);
                                                for(var b in obj[prop][a]){
                                                    if(obj[prop][a].hasOwnProperty(b)){
                                      //                  console.log(b+"=>"+obj[prop][a][b]);
                                                    }
                                                }
                                            }
                                        }
                                    }


                                  //  console.log(prop + " = " + obj[prop]);
                                    //console.log(str);
                                }
                            }
                        }

                    }
            }
            //alert(str);
            document.getElementById("place_resutls").innerHTML=str;
        }
    });




    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
    });

}

function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
