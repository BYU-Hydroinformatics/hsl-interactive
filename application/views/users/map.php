<?php
HTML_Render_Head($js_vars, getTxt('SearchData'));
echo $CSS_Main;
echo $CSS_MAPS;
echo $JS_JQuery;
echo $JS_Maps;
HTML_Render_Body_Start();
?>
<div class='col-md-9'>
    <?php showMsgs();?>
    <div id="mapOuter" style="width:100%; height:875px;">
        <div id="mapContainer" style="width:100%;">
            <div id="map" style="width:100%; height:100%;"> </div>
            <div id="popup"></div>
        </div>
        <div>
            <!-- <div id="mapFilters">
                <div class="btn-group" role="group">
                    <input id="pac-input" class="controls" type="text" placeholder="Search Any Site Here">
                    <input type="button" class="btn-btn-default" id="fullscreen" value="<?php echo getTxt('FullScreen'); ?>" /></input>
                    <input type="button" class="btn-btn-default" id="exitfullscreen" value="<?php echo getTxt('EFullScreen'); ?>" /></input>
                    <div class="input-group">
                        <input type="checkbox" class="checkbox" id="allSitesCheck" onClick="loadall()" value="allSites">
                        <?php echo getTxt('AllSites'); ?></input>
                    </div>
                </div>
                <div id="mapLocations">
                    <select name="locationSelect" id="locationSelect" style="width:100%;"></select>
                </div>
                <p class="instruction">
                    <?php echo getTxt('EnterSearchLocation') ?>
                </p>
            </div> -->
        </div>
    </div>
</div>
<script>
	load();
// $(document).ready(function(){
//  // Create the search box and link it to the UI element.
//   var input = document.getElementById('pac-input');
//   var searchBox = new google.maps.places.SearchBox(input);
//   //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

//   //Testing the new Github account
//   // Bias the SearchBox results towards current map's viewport.
//   map.addListener('bounds_changed', function() {
//     searchBox.setBounds(map.getBounds());
//   });

//   var markers = [];
//   // Listen for the event fired when the user selects a prediction and retrieve
//   // more details for that place.
//   searchBox.addListener('places_changed', function() {
//     var places = searchBox.getPlaces();

//     if (places.length == 0) {
//       return;
//     }

//     // Clear out the old markers.
//     markers.forEach(function(marker) {
//       marker.setMap(null);
//     });
//     markers = [];

//     // For each place, get the icon, name and location.
//     var bounds = new google.maps.LatLngBounds();
//     places.forEach(function(place) {
//       var icon = {
//         url: place.icon,
//         size: new google.maps.Size(0,0),
//         origin: new google.maps.Point(0, 0),
//         anchor: new google.maps.Point(0, 0),
//         scaledSize: new google.maps.Size(0, 0)
//       };

//       // Create a marker for each place.
//       markers.push(new google.maps.Marker({
//         map: map,
//         icon: icon,
//         title: place.name,
//         position: place.geometry.location
//       }));

//       if (place.geometry.viewport) {
//         // Only geocodes have viewport.
//         bounds.union(place.geometry.viewport);
//       } else {
//         bounds.extend(place.geometry.location);
//       }
//     });
//     map.fitBounds(bounds);
//   });

//  $('#fullscreen').click(function(){
//     $("#mapOuter").css("position", 'fixed').
//       css('top', 0).
//       css('left', 0).
//       css("width", '100%').
//       css("height", '100%');
//     google.maps.event.trigger(map, 'resize');
//     return false;
//   });

//   $('#exitfullscreen').click(function(){
//     $("#mapOuter").css("position", 'relative').
//       css('top', 0).
//       css("width", googleMapWidth).
//       css("height", googleMapHeight);
//     google.maps.event.trigger(map, 'resize');
//     return false;

//   });

// $.fn.scrollView = function () {
//     return this.each(function () {
//         $('html, body').animate({
//             scrollTop: $(this).offset().top
//         });
//     });
// }
// $('#mapOuter').scrollView();
// });

</script>
<?php
HTML_Render_Body_End();
?>