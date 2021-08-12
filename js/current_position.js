navigator.geolocation.getCurrentPosition(position => {
  // doSomething(lat, lon);
  const lat = position.coords.latitude;
  const lon = position.coords.longitude;
  const loca = window.location.href;
  // console.log(lat, lon);
  const contentBox = document.querySelector("#contents_box");
  const radiVal = loca.split("=")[1];
  const queryDOM = document.querySelector("#query_val");
  // console.log(loca);
  // console.log(radiVal);
  const kmVal = radiVal.slice(0, 2);

  queryDOM.innerHTML = `${kmVal} KM 반경 캠핑장`;

  $.ajax({
    url: `/lbcamp/php/location.php?lat=${lat}&lon=${lon}&radi=${radiVal}`,
    Type: "GET",
    dataType: "json",
    success: function (result) {
      // console.log(result);
      const item = result.body.items.item;
      // console.log(item);
      let currentItems = "";

      item.forEach(function (data) {
        console.log(data);
        currentItems = `

        <div class="carousel_item">
              <div class="item_card">
<a href="/lbcamp/detail_position.php?lat=${data.mapY}&lon=${data.mapX}">
                <div class="sl_img">
                  <img src="${data.firstImageUrl}" alt="" onerror="this.src='/lbcamp/img/no_image.png'">
                </div>
                </a>
                <div class="sl_txt">
                  <h2>${data.facltNm}</h2>
                  <p>${data.addr1}</p>
                </div>
                <div class="sl_icons">
                  <img src="img/ico_mart.png" alt="">
                  <em>${data.sbrsCl}</em>
                </div>

              </div>
            </div>
            </div>
        `;
        contentBox.innerHTML += currentItems;
      });

      //google map logics here
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

//carousel slide
$(document).ajaxComplete(function () {
  //ajax 데이터가 DOM으로 모두 로드된 이후 실행되는 함수
  let slider = $(".owl-carousel");
  slider.each(function () {
    $(this).owlCarousel({
      loop: false,
      margin: 5,
      autoHeight: false,
      responsive: {
        0: {
          items: 1,
          stagePadding: 20,
          margin: 15,
        },
      },
    });
  });
});
