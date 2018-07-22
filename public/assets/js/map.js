$(document).ready(function(){


  layers = [];


  openStreet = {
    title: 'Osm',
    icon: '/assets/images/maps/openstreetmap.png',
    layer: L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'})
  };
  layers.push(openStreet);
  esriWorldImagery = {
    title: 'World Imagery',
    icon: '/assets/images/maps/satellite.png',
    layer: L.tileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
      attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
    })
  };
  layers.push(esriWorldImagery);


L.control.iconL
    var map = L.map('map', {
        center: [6.2743843, -75.5815637],
        zoom: 12,
        maxZoom: 18,
        minZoom: 3,
        // layers: [openStreet, esriWorldImagery],
        zoomControl: false,
    });

    L.control.iconLayers(layers).addTo(map);

    var myIcon = L.icon({
        iconUrl: '/assets/images/marker.png',
        iconSize: [50, 39],
        iconAnchor: [22, 40],
        popupAnchor: [0, -22]
    });

    L.marker([6.313331, -75.583077], {icon: myIcon}).addTo(map)
    .setIcon(myIcon)
    .bindPopup('<div><img src="/assets/images/logo-peq.png"></div>').openPopup();

    L.marker([6.313131, -75.575536], {icon: myIcon}).addTo(map)
        .setIcon(myIcon)
        .bindPopup('<div><img src="/assets/images/logo-peq.png"></div>').openPopup();

});
