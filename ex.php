<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    *{
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>

<div id="map" style="height: 500px;
      width: 100%;">
        </div>
          <script>
            function initMap(){
              var location = {lat: 21.027763,lng: 105.834160};
              var map = new google.maps.Map(document.getElementById("map"),{
                zoom:4,
                center:location
              });
              var marker = new google.maps.Marker({
                position: location,
                map: map
              });

            }
          </script>
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNI_ZWPqvdS6r6gPVO50I4TlYkfkZdXh8&callback=initMap">
          </script>
      

</body>
</html>
