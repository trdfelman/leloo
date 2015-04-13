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
        rankby : google.maps.places.RankBy.DISTANCE,
        types: ['bar']
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
       // alert( "\nstatus:"+ status+"\n error:"+google.maps.places.PlacesServiceStatus.ERROR+"\n INVALID_REQUEST: "+google.maps.places.PlacesServiceStatus.INVALID_REQUEST+"\n OK:"+google.maps.places.PlacesServiceStatus.OK+"\n OVER_QUERY_LIMIT:"+google.maps.places.PlacesServiceStatus.OVER_QUERY_LIMIT+"\n NOT_FOUND: "+google.maps.places.PlacesServiceStatus.NOT_FOUND+"\n REQUEST_DENIED :"+google.maps.places.PlacesServiceStatus.REQUEST_DENIED+" \n UNKNOWN_ERROR: "+google.maps.places.PlacesServiceStatus.UNKNOWN_ERROR+"\n ZERO_RESULTS: "+google.maps.places.PlacesServiceStatus.ZERO_RESULTS );


        if (status == google.maps.places.PlacesServiceStatus.OK)
        {

            var str="";

            var place_name = "<h1>"+placedata.name+"</h1>";
            var place_address = "<h6>"+placedata.formatted_address+"</h6>";
            var place_img_representation = "<img src='"+placedata.icon+"' />";
            var place_internationa_phonenuber =(typeof placedata.international_phone_number !=='undefined')?"<p>"+placedata.international_phone_number +"</p>":"";
            var place_rating =(typeof placedata.rating !=='undefined')? "<p>Place Rating:"+placedata.rating+"</p>":"";

            var place_website =(typeof placedata.website !== 'undefined')? "<a href='"+placedata.website+"'>WEBSITE</a>":"";
            var review_author="";
            var review_text="";
            var overall_rating="";
            var specific_rating = "";
            for (var key in placedata.reviews) {
                    if(typeof key.hasOwnProperty(key) !== 'undefined'){

                        if (key.hasOwnProperty(key)) {
                            var obj = placedata.reviews[key];
                            console.log(placedata.reviews[key]["author_name"]+" "+placedata.reviews[key]["author_url"]+" "+placedata.reviews[key]["rating"]+" "+placedata.reviews[key]["text"]+" "+placedata.reviews[key]["time"]);

                             review_author =  (typeof placedata.reviews[key]["author_name"] !=='undefined')? " <a href='"+placedata.reviews[key]["author_url"]+"' > "+placedata.reviews[key]["author_name"]+"</a>":"d";
                             review_text =  (typeof  placedata.reviews[key]["text"] !=='undefined')?"<h6>"+placedata.reviews[key]["text"]+"</h6>":"d";
                             overall_rating =(typeof placedata.reviews[key]["rating"] !=='undefined')?"Review Overall rating: "+ placedata.reviews[key]["rating"]+"<br/>":"d";
                            for (var prop in obj) {
                                if (obj.hasOwnProperty(prop)) {
                                    if(prop === 'aspects'){

                                        for(var a in obj[prop]){
                                            if(obj[prop].hasOwnProperty(a)){
                                                specific_rating +=(typeof obj[prop][a]["type"] !=='undefined')? obj[prop][a]["type"] +": "+obj[prop][a]["rating"]+"<br/>":"";
                                            }
                                        }
                                    }
                                }
                            }
                        }

                    }
            }

            var review_str="";
            if(review_author !=='' ) {
                review_str="<div class='place_review'>"+review_author+review_text+overall_rating+specific_rating+"</div>";
            }
            var str_container = " <div class='col-lg-6 ' >   "+place_name+place_address+place_img_representation+place_internationa_phonenuber+place_rating+place_website +review_str+"</div>";
            var textnode= document.createTextNode(str_container);
            document.getElementById("placeres").insertAdjacentHTML('beforeend',str_container);

        }
    });




    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(getPlace_contenet(place));
        infowindow.open(map, this);
    });


}
function getPlace_contenet(place) {
    var content = '';
    content += '<table>';
    content += '<tr class="iw_table_row">';
    content += '<td style="text-align: right"><img class="hotelIcon" src="' + place.icon + '"/></td>';
    content += '<td><b><a href="' + place.url + '">' + place.name + '</a></b></td></tr>';
    content += '<tr class="iw_table_row"><td class="iw_attribute_name">Address:</td><td>' + place.vicinity + '</td></tr>';
    if (place.formatted_phone_number) {
        content += '<tr class="iw_table_row"><td class="iw_attribute_name">Telephone:</td><td>' + place.formatted_phone_number + '</td></tr>';
    }
    if (place.rating) {
        var ratingHtml = '';
        for (var i = 0; i < 5; i++) {
            if (place.rating < (i + 0.5)) {
                ratingHtml += '&#10025;';
            } else {
                ratingHtml += '&#10029;';
            }
        }
        content += '<tr class="iw_table_row"><td class="iw_attribute_name">Rating:</td><td><span id="rating">' + ratingHtml + '</span></td></tr>';
    }
    if (place.website) {
        var fullUrl = place.website;
        var website = hostnameRegexp.exec(place.website);
        if (website == null) {
            website = 'http://' + place.website + '/';
            fullUrl = website;
        }
        content += '<tr class="iw_table_row"><td class="iw_attribute_name">Website:</td><td><a href="' + fullUrl + '">' + website + '</a></td></tr>';
    }
    content += '</table>';
    return content;
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
