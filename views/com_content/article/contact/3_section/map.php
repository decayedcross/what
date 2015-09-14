<script>
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: <?php echo $introtext[0]; ?>, lng: <?php echo $introtext[1]; ?>},
    zoom: 11
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP_API; ?>&callback=initMap" defer></script>