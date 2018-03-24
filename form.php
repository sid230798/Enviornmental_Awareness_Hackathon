<?php

require_once "includes/common.php";
     if(isset($_SESSION['POST']) && isset($_SESSION['id'])){
       
      $id = $_SESSION['id'];
       $Content = mysqli_escape_string($con,$_POST['Issue']);
       $target = "../includes/images/";
       $target_file = $target . basename($_FILES["image"]["name"]);
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    
    //echo $id;

      move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
      $query = "insert into issue(image_url, user_id) values('$target_file', '$id')";
      $result = $con->query($query);
      header("Location: index.php");
     }

   
?>


<html>
    <head >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
         <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
        width : 100%;
        text-align : center;
      }
      /* Optional: Makes the sample page fill the window. */
                
                  @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
                * {
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                  -webkit-box-sizing: border-box;
                  -moz-box-sizing: border-box;
                  -webkit-font-smoothing: antialiased;
                  -moz-font-smoothing: antialiased;
                  -o-font-smoothing: antialiased;
                  font-smoothing: antialiased;
                  text-rendering: optimizeLegibility;
                }

                body {
                  font-family: "Roboto", Helvetica, Arial, sans-serif;
                  font-weight: 100;
                  font-size: 12px;
                  line-height: 30px;
                  color: #777;
                  background: #4CAF50;
                  background-image:url("http://fitzdecarts.com/wp-content/uploads/2018/03/free-background-images.jpg");
                }


                .container {
                  max-width: 90%;
                  width: 100%;
                  margin: 0 auto;
                  position: relative;
                }

                #contact input[type="text"],
                #contact input[type="email"],
                #contact input[type="tel"],
                #contact input[type="url"],
                #contact textarea,
                #contact button[type="submit"] {
                  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
                }

                #contact {
                  background: #F9F9F9;
                  padding: 25px;
                  margin: 150px 0;
                  background : rgba(0,0,0,0.3);
                  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
                }

                #contact h3 {
                  display: block;
                  font-size: 40px;
                  font-weight: 300;
                  margin-bottom: 10px;
                  color : red;
                  text-align: center;
                }

                #contact h4 {
                  margin: 5px 0 15px;
                  display: block;
                  font-size: 23px;
               
                  color : red;
                  text-align: center;
                }

                fieldset {
                  border: medium none !important;
                  margin: 0 0 10px;
                  min-width: 100%;
                  padding: 0;
                  width: 100%;
                }

                #contact input[type="text"],
                #contact input[type="email"],
                #contact input[type="tel"],
                #contact input[type="url"],
                #contact textarea {
                  width: 100%;
                  border: 1px solid #ccc;
                  background: #FFF;
                  margin: 0 0 5px;
                  padding: 10px;
                }

                #contact input[type="text"]:hover,
                #contact input[type="email"]:hover,
                #contact input[type="tel"]:hover,
                #contact input[type="url"]:hover,
                #contact textarea:hover {
                  -webkit-transition: border-color 0.3s ease-in-out;
                  -moz-transition: border-color 0.3s ease-in-out;
                  transition: border-color 0.3s ease-in-out;
                  border: 1px solid #aaa;
                }

                #contact textarea {
                  height: 200px;
                  max-width: 100%;
                  resize: none;
                }

                #contact button[type="submit"] {
                  cursor: pointer;
                  width: 30%;
                  border: none;
                  background: #4CAF50;
                  color: #FFF;
                  margin: 0 0 5px;
                  padding: 10px;
                  font-size: 15px;
                  text-align : center;
                }

                #contact button[type="submit"]:hover {
                  background: #43A047;
                  -webkit-transition: background 0.3s ease-in-out;
                  -moz-transition: background 0.3s ease-in-out;
                  transition: background-color 0.3s ease-in-out;
                }

                #contact button[type="submit"]:active {
                  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
                }

                .copyright {
                  text-align: center;
                }

                #contact input:focus,
                #contact textarea:focus {
                  outline: 0;
                  border: 1px solid #aaa;
                }

                ::-webkit-input-placeholder {
                  color: #888;
                }

                :-moz-placeholder {
                  color: #888;
                }

                ::-moz-placeholder {
                  color: #888;
                }

                :-ms-input-placeholder {
                  color: #888;
                }
                </style>

    </head>
<body>
<div class="container" style="text-align:center">  
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8">
<form action="" method="post" enctype="multipart/form-data" id="contact"> 
<h3>This is sample Issue Form</h3>
    <h4>Upload Your Queries</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name = "name" required autofocus>
    </fieldset>
    <fieldset>

      <input placeholder="Your title" type="text" name="title" tabindex="1"  required autofocus>
    </fieldset>
   <fieldset>

      

    </fieldset>
    
    <fieldset>
      <textarea placeholder="Type your Story here...." tabindex="5" name="Issue" required></textarea>
    </fieldset>
     <fieldset style="font-size:20px">
      <input placeholder="Your Image file" type="file" tabindex="2" name = "image" required>
    </fieldset>
    
    
    </div>
<div class="col-sm-2"></div>
        </body>

   <div id="map"><!--<iframe id="full"
  width="600"
  height="450"
  frameborder="0" style="border:0"
   src="https://www.google.com/maps/embed/v1/search?key=AIzaSyAd-6aGCmuFqBd0eH6CJkOD5iRHERF8aL8
&q=Space+Needle,Seattle+WA" allowfullscreen></iframe>-->
     
    </div>  
    <div >
    <input id="pac-input" class="controls" type="text" placeholder="Search Box" required>
    
    
       <script src="https://maps.googleapis.com/maps/api/js?key=  AIzaSyCrJ7B8n8hAyOkGy3QN8u5qFH37q53EMRs &libraries=places&callback=initAutocomplete"
         async defer></script>

<script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
  </div>
  <div></div><br><br>
  <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
    </body>
</html>
