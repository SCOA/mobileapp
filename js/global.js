$(document).ready(function(){
    var airportType = "";
    $("#main_page #fromAir").click(function(){
        $("#locationType legend").text('Drop off location Type:');
        $("#locationType .ui-controlgroup-label").text('Drop off location Type:');
        airportType = "from";
    });
    $("#main_page #toAir").click(function(){
        $("#locationType legend").text('Pickup Location Type:');        
        $("#locationType .ui-controlgroup-label").text('Pickup Location Type:');        
        airportType = "to";
    })

//--------------------------Get Landmark using Google Map API ----------------------------------                                    
     function initialize() {
        var map = new google.maps.Map(document.getElementById('map_canvas'), {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var defaultBounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(-33.8902, 151.1759),
            new google.maps.LatLng(-33.8474, 151.2631));
        
        map.fitBounds(defaultBounds);
        var input = document.getElementById('landmark_input');
        var searchBox = new google.maps.places.SearchBox(input);     
        var markers = [];
        google.maps.event.addListener(searchBox, 'places_changed', function() {
            var places = searchBox.getPlaces();
            for (var i = 0, marker; marker = markers[i]; i++) {
                marker.setMap(null);
            }
            markers = [];
            var bounds = new google.maps.LatLngBounds();
            for (var i = 0, place; place = places[i]; i++) {
                var image = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };
                var marker = new google.maps.Marker({
                    map: map,
                    icon: image,
                    title: place.name,
                    position: place.geometry.location
                });
                markers.push(marker);
                bounds.extend(place.geometry.location);
            }
            map.fitBounds(bounds);
        });
        google.maps.event.addListener(map, 'bounds_changed', function() {
            var bounds = map.getBounds();
            searchBox.setBounds(bounds);
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
//-------------------------------------------------------------------------------------------------------------------------

//-------------------------------------Zip/Landmark exchange--------------------------------------------------------------
    $("#radio1").click(function(){
        $("#zip_input").css('display','block');
        $("#landmark_input").css('display','none');                        
    });
    
    $("#radio2").click(function(){
        $("#landmark_input").css('display','block');
        $("#zip_input").css('display','none');
    });
//-------------------------------------------------------------------------------------------------------------------------
    
//----------------------------------------One-way/Round Trip exchange -----------------------------------------------------    
    $(".one-way").click(function(){
      $(".return_trip").css('display', 'none');
      $("#adult_1, #children_1, #adult_2, #children_2, #h5").remove();
      $("#adult, #children").css('display', 'block');
      
      $("#customerInfo #departFlight_title, #customerInfo #departFlightInfo, #customerInfo #arrivalFlight_title, #customerInfo #arrivalFlightInfo").css('display', 'none');
      $("#customerInfo #flightInfo_title, #customerInfo #flightInfo").css('display', 'block');
    });
    
    $(".round-trip").click(function(){
      $(".return_trip").css('display', 'block');
      $("#customerInfo #departFlight_title, #customerInfo #departFlightInfo, #customerInfo #arrivalFlight_title, #customerInfo #arrivalFlightInfo").css('display', 'block');
      $("#customerInfo #flightInfo_title, #customerInfo #flightInfo").css('display', 'none');
    });                                    
//-------------------------------------------------------------------------------------------------------------------------

//----------------------------------------display passengers different on Return Trip -------------------------------------
    $(".trip_check").click(function(event, ui){                        
        if($(".round-trip").is(":checked") && $(".trip_check").is(":checked")){
            $("#adult, #children").css('display', 'none');              
            
            var adult_div = $('#adult').clone();                          
            adult_div.children(".ui-select").each(function(){
                var currentSelectDiv = $(this);
                console.log(currentSelectDiv);
                currentSelectDiv.find('select').each(function() {
                    console.log($(this).parent().html().match(/ *<select [^)]*select> */g, ""));
                    $.each($(this).parent().html().match(/ *<select [^)]*select> */g, ""), function(idx, val) {
    //                                        console.log(val);
                        currentSelectDiv.after(val);
                    });
                });
                currentSelectDiv.remove();
            });
            
            var children_div = $('#children').clone();                          
            children_div.children(".ui-select").each(function(){
                var currentSelectDiv = $(this);
                console.log(currentSelectDiv);
                currentSelectDiv.find('select').each(function() {
                    console.log($(this).parent().html().match(/ *<select [^)]*select> */g, ""));
                    $.each($(this).parent().html().match(/ *<select [^)]*select> */g, ""), function(idx, val) {
    //                                        console.log(val);
                        currentSelectDiv.after(val);
                    });
                });
                currentSelectDiv.remove();
            });

            var passengerDiv1 = "<div id='adult_1'>"+adult_div.html()+"<label id='adult_label' class='select ui-select' for='select-choice-0'>Adult</label></div>";                      
            passengerDiv1 += "<div id='children_1'>"+children_div.html()+"<label id='children_label' class='select ui-select' for='select-choice-0'>Children(under 3years old)</label></div>";
            
            var passengerDiv2 = "<div id='adult_2'>"+adult_div.html()+"<label id='adult_label' class='select ui-select' for='select-choice-0'>Adult</label></div>";                      
            passengerDiv2 += "<div id='children_2'>"+children_div.html()+"<label id='children_label' class='select ui-select' for='select-choice-0'>Children(under 3years old)</label></div>";
            
            var toAirport = "<h5 id='h5'>Passenger going TO Airport</h5>";
            var fromAirport = "<h5 id='h5'>Passenger coming FROM the Airport</h5>";
            var totalDiv = '';


            if( airportType == 'from' )
              totalDiv = fromAirport + passengerDiv1 + toAirport + passengerDiv2;
            else if( airportType == 'to' )
              totalDiv = toAirport + passengerDiv1 + fromAirport + passengerDiv2;
            else
              totalDiv = toAirport + passengerDiv1 + fromAirport + passengerDiv2;

            $(".return_trip").after(totalDiv);
    //                            $(".return_trip").after(totalDiv).parent().trigger("create");                            
            $(".return_trip").parent().trigger("create");                            

        } else{
              $("#adult_1, #children_1, #adult_2, #children_2, #h5").remove();
              $("#adult, #children").css('display', 'block');
        }
     });
//-------------------------------------------------------------------------------------------------------------------------    

//------------------------------------------Order Summary Page ------------------------------------------------------------
    $("#searchWidget #searchBtn, #orderSummary #continueBtn").click(function(){
        var selAirport = '';
        if($("#searchWidget #select-airport").val() == '1')
            selAirport = 'AZA';
        else if($("#searchWidget #select-airport").val() == '2')
            selAirport = 'PHX';
        else 
            selAirport = 'Airport';
       
        if(airportType == "from"){
            $("#leavingTo p").text('Leaving From '+selAirport+'');
            $("#returningFrom p").text('Returning To '+selAirport+'');
        }
        else if(airportType == "to"){
            $("#leavingTo p").text('Leaving To '+selAirport+'');
            $("#returningFrom p").text('Returning From '+selAirport+'');
        }
        
        if($("#searchWidget #radio1").is(":checked")){
            $("#leavingTo span").text($("#searchWidget #zip_input").val());
        }else if($("#searchWidget #radio2").is(":checked")){
            $("#leavingTo span").text($("#searchWidget #landmark_input").val());
        }
        
        if($("#searchWidget .one-way").is(":checked")){
            $("#orderSummary #returningFrom,#customerInfo #returningFrom").css('display', 'none');
            $("#leavingTo #adultCnt span").text($("#searchWidget #adult select").val());
            $("#leavingTo #childrenCnt span").text($("#searchWidget #children select").val());
        }
        
        if($("#searchWidget .round-trip").is(":checked") || $("#searchWidget .trip_check").is(":checked")){
            $("#orderSummary #returningFrom,#customerInfo #returningFrom").css('display', 'block');
            
            if($("#searchWidget #radio1").is(":checked")){
                $("#returningFrom span").text($("#searchWidget #zip_input").val());
            }else if($("#searchWidget #radio2").is(":checked")){
                $("#returningFrom span").text($("#searchWidget #landmark_input").val());
            }
            
            if($("#searchWidget .round-trip").is(":checked") && $("#searchWidget .trip_check").is(":checked")){
                $("#leavingTo #adultCnt span").text($("#searchWidget #adult_1 select").val());
                $("#leavingTo #childrenCnt span").text($("#searchWidget #children_1 select").val());
                $("#returningFrom #adultCnt span").text($("#searchWidget #adult_2 select").val());
                $("#returningFrom #childrenCnt span").text($("#searchWidget #children_2 select").val());
            }else{
                $("#leavingTo #adultCnt span").text($("#searchWidget #adult select").val());
                $("#leavingTo #childrenCnt span").text($("#searchWidget #children select").val());
                $("#returningFrom #adultCnt span").text($("#searchWidget #adult select").val());
                $("#returningFrom #childrenCnt span").text($("#searchWidget #children select").val());                
            }
        }        
    }); 
    
    var percent18 = parseFloat(0.18*64).toFixed(2);
    var percent20 = parseFloat(0.2*64).toFixed(2);
    $("#orderSummary .percent18").click(function(){
        $("#orderSummary #money #input_money").val(percent18);
    });
    
    $("#orderSummary .percent20").click(function(){
        $("#orderSummary #money #input_money").val(percent20);
    }); 
//-------------------------------------------------------------------------------------------------------------------------    

//---------------------------------------------Customer Info/Billing Page--------------------------------------------------
    $("#customerInfo #paymentOpt #direct").click(function(){
        $("#customerInfo #creditCard").css('display', 'none');
        $("#customerInfo #directBill").css('display', 'block');
    });
    $("#customerInfo #paymentOpt #credit").click(function(){
        $("#customerInfo #creditCard").css('display', 'block');
        $("#customerInfo #directBill").css('display', 'none');
    });
    
    $("#customerInfo #passengerDetail #firstName").keyup(function(){
        $("#customerInfo #creditCard #firstName").val(this.value);
    });
    
    $("#customerInfo #passengerDetail #lastName").keyup(function(){
        $("#customerInfo #creditCard #lastName").val(this.value);
    });
    
    $("#customerInfo #creditCard #saveAccount").click(function(){
        if($("#customerInfo #creditCard #saveAccount").is(":checked")){
            $("#customerInfo #creditCard #password").css('display', 'block');
            $("#customerInfo #creditCard #repassword").css('display', 'block');
        }else{
            $("#customerInfo #creditCard #password").css('display', 'none');
            $("#customerInfo #creditCard #repassword").css('display', 'none');
        }        
    })
    
     if($(".round-trip").is(":checked")){
         $("#customerInfo #departFlight_title, #customerInfo #departFlightInfo, #customerInfo #arrivalFlight_title, #customerInfo #arrivalFlightInfo").css('display', 'block');
         $("#customerInfo #flightInfo_title, #customerInfo #flightInfo").css('display', 'none');
     }else if($('.one-way').is(":checked")){
         $("#customerInfo #departFlight_title, #customerInfo #departFlightInfo, #customerInfo #arrivalFlight_title, #customerInfo #arrivalFlightInfo").css('display', 'none');
         $("#customerInfo #flightInfo_title, #customerInfo #flightInfo").css('display', 'block');         
     }
     
     $("#orderSummary #continueBtn").click(function(){
         if($("#orderSummary #money #input_money").val() != '')
            $("#customerInfo #total_fare #gratuityVal").text("$"+$("#orderSummary #money #input_money").val());         
         else
            $("#customerInfo #total_fare #gratuityVal").text('X');
            
         if($("#searchWidget #locationType #radio1").is(":checked")){
            $("#customerInfo #pickup_title, #customerInfo #pickupLocation").css('display', 'block');
         }else if($("#searchWidget #locationType #radio2").is(":checked")){
            $("#customerInfo #pickup_title, #customerInfo #pickupLocation").css('display', 'none');            
         }else{
            $("#customerInfo #pickup_title, #customerInfo #pickupLocation").css('display', 'block');             
         }
     })

//-------------------------------------------------------------------------------------------------------------------------    


});