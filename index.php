<?php 
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

// echo url();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="fragment" content="!">
    <title>Google Map</title>
    <base href="<?php echo url() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" href="<?php echo url() ?>pluging/bootstarp/bootstarp.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <!-- <link rel="stylesheet" href="<?php echo url() ?>pluging/pretty-dropdown/dist/css/prettydropdowns.css"> -->


    <link rel="stylesheet" href="<?php echo url() ?>pluging/myCustom/varible.css">
    <link rel="stylesheet" href="<?php echo url() ?>pluging/myCustom/google-map.css">
    <link rel="stylesheet" href="<?php echo url() ?>app/app.css">



    <script src="<?php echo url() ?>pluging/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular-animate.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular-touch.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap.min.js"></script> -->
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.0.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.4/angular-filter.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>


    <!-- <script src="<?php //echo url() ?>pluging/jquery-nice-select/js/jquery.nice-select.js"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgOYYNGdJV_5X_VG1PRgFChTnekgc-6To&language=TH&region=TH&callback=initMap" async defer></script>

    <script src="<?php echo url() ?>app/app.js"></script>
    <script src="<?php echo url() ?>app/controller/indexController.js"></script>

</head>
<body ng-app="app" ng-controller="indexController">

<div class="container my-5">
  <div class="text-center">
    <h1>Welcom to Google Map</h1>
    <!-- <div style="height: 1000px;"></div> -->
    <div class="boxMap">
      <div id="map"></div>
    </div>
  </div>
</div>
  

</body>

<script type="text/javascript">
  
  function initMap() {
    // AIzaSyCgOYYNGdJV_5X_VG1PRgFChTnekgc-6To
    var bkk = {lat: 13.736717, lng: 100.523186} //bankok
    var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'; //imageMarker
    var map = new google.maps.Map(document.getElementById('map'), {
      center: bkk,
      zoom: 15
    });

    var infowindow = new google.maps.InfoWindow;
    infowindow.setContent('<div class="h1 text-red">aaaaaaaaaa</div>');
    /*"ดูข้อมูลเพิ่มเติม" 
      <a target="_blank" jstcache="6" href="https://maps.google.com/maps?ll=13.742116,100.528883&amp;z=15&amp;t=m&amp;hl=th&amp;gl=TH&amp;mapclient=apiv3&amp;cid=*****Add CID******"> <span>ดูใน Google Maps </span> </a>

      <a target="_blank" jstcache="6" href="https://maps.google.com/maps?ll=13.742116,100.528883&amp;z=15&amp;t=m&amp;hl=th&amp;gl=TH&amp;mapclient=apiv3&amp;cid=15238757142073429372"> <span>ดูใน Google Maps </span> </a>


      <a target="_blank" jstcache="6" href="https://maps.google.com/maps?ll=13.742116,100.528883&amp;z=15&amp;t=m&amp;hl=th&amp;gl=TH&amp;mapclient=apiv3&amp;cid=11142715355734538353"> <span>ดูใน Google Maps </span> </a>
    */
    var marker = new google.maps.Marker({
      map: map,
      // icon: image,
      // animation: google.maps.Animation.DROP,
      position: bkk
    });

    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
  }
</script>


</html>