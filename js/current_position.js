navigator.geolocation.getCurrentPosition(position => {
  // doSomething(lat, lon);
  const lat = position.coords.latitude;
  const lon = position.coords.longitude;
  const loca = window.location.href;
  // console.log(lat, lon);
  const radiVal = loca.split("=")[1];
  const queryDOM = document.querySelector("#query_val");
  console.log(loca);
  console.log(radiVal);
  const kmVal = radiVal.slice(0, 2);

  queryDOM.innerHTML = `${kmVal} KM 반경 캠핑장`;

  $.ajax({
    url: `/lbcamp/php/location.php?lat=${lat}&lon=${lon}&radi=${radiVal}`,
    Type: "GET",
    dataType: "json",
    success: function (result) {
      // console.log(result);
      const item = result.body.items.item;
      console.log(item);

      // script.js
      var map;

      function initMap() {
        var centerTarget = { lat: Number(lat), lng: Number(lon) };

        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: centerTarget,
        });
        // console.log(item.length);
        for (let i = 0; i < item.length; i++) {
          new google.maps.Marker({
            position: new google.maps.LatLng(
              Number(item[i].mapY),
              Number(item[i].mapX)
            ),
            map: map,
            //label: "서울 중심 좌표",
            icon: "/lbcamp/img/marker.png",
          });
        }
      }
      initMap();
    },
  });
});
