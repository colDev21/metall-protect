ymaps.ready(init);
function init() {
  var myMap = new ymaps.Map("map", {
    center: [55.826781, 49.089238],
    zoom: 14,
  });
  myMap.behaviors.disable("scrollZoom");
  myMap.geoObjects.add(
    new ymaps.Placemark(
      [55.826781, 49.089238],
      {
        balloonContent: "Metall Protect",
      },
      {
        iconLayout: "default#image",
        iconImageClipRect: [
          [0, 0],
          [80, 105],
        ],
        iconImageHref: "./assets/img/map-label-sm.png?v=1.1",
        iconImageSize: [80, 105],
        iconImageOffset: [-15, -27],
      }
    )
  );
}
