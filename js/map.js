$(document).ready(function(){

  var lieux = [];

  // Saint Sulpice
  lieux[1] = {
    name: "Eglise de Saint Sulpice",
    latitude: 48.85,
    longitude: 2.33
  };

  // Kolmanskop
  lieux[2] = {
    name: "Kolmanskop",
    latitude: -26.70,
    longitude: 15.23
  };

  // Tchernobyl
  lieux[3] = {
    name: "Tchernobyl",
    latitude: 51.27,
    longitude: 30.22
  };

  // Green Village
  lieux[4] = {
    name: "Green Village",
    latitude: 30.51,
    longitude: 112.87
  };

  // Ankor
  lieux[5] = {
    name: "Ankor",
    latitude: 25.61,
    longitude: 87.65
  };

  // Floating Forest
  lieux[6] = {
    name: "Floating Forest",
    latitude: -33.9,
    longitude: 151.08
  };

  // Hôtel del salto
  lieux[7] = {
    name: "Hôtel Del Salto",
    latitude: 4.55,
    longitude: -74.3
  };

  // Orpheum Theater
  lieux[8] = {
    name: "Orpheum Theater",
    latitude: 41.62,
    longitude: -70.92
  };

  // Casino abandonné
  lieux[9] = {
    name: "Abandonned Casino",
    latitude: 44.43,
    longitude: 26.10
  };

  // Orient Express
  lieux[10] = {
    name: "Orient Express",
    latitude: 51.21,
    longitude: 3.57
  };



  var rayon = 2;

  var map = new Datamap({
    element: document.getElementById('map'),
      projection: 'mercator', //style of projection to be used. try "mercator"
      height: null, //if not null, datamaps will grab the height of 'element'
      width: null, //if not null, datamaps will grab the width of 'element'
      // responsive: true, //if true, call `resize()` on the map object when it should adjust it's size
    fills: {
      defaultFill: '#041325' // couleur des pays
    },
    geographyConfig: {
      highlightFillColor: '#041325', // couleur des pays en hover
      highlightBorderColor : '#FFFFFF', // couleur des bordures des pays
      highlightBorderWidth: 0,
      highlightOnHover: false,
      popupOnHover: false // afficher un message au passage d'un pays
    },
    bubbleConfiguration: {
        radius: 4,
        borderWidth: 0,
        borderOpacity: 0,
        borderColor: '#FFFFFF',
        popupOnHover: true,
        fillOpacity: 1,
        defaultFill: '#FFFFFF',
        animate: true,
        highlightOnHover: true
    },
    arcConfig: {
      strokeColor: '#bd924e',
      strokeWidth: 1,
      arcSharpness: 0.2,
      animationSpeed: 3000, // Milliseconds
      popupOnHover: false
    }
});

  // GESTION DES CHEMINS
  var paths = [
    {
      "origin":{"latitude":lieux[1].latitude,"longitude":lieux[1].longitude}, // De St Sulpice
      "destination":{"latitude":lieux[2].latitude,"longitude":lieux[2].longitude} // A Kolmanskop
    },
    {
      "origin":{"latitude":lieux[2].latitude,"longitude":lieux[2].longitude}, // De Kolmanskop
      "destination":{"latitude":lieux[3].latitude,"longitude":lieux[3].longitude} // A Tchernobyl
    },
    {
      "origin":{"latitude":lieux[3].latitude,"longitude":lieux[3].longitude}, // De Tchernobyl
      "destination":{"latitude":lieux[4].latitude,"longitude":lieux[4].longitude} // A Green Village
    },
    {
      "origin":{"latitude":lieux[4].latitude,"longitude":lieux[4].longitude}, // De Green Village
      "destination":{"latitude":lieux[5].latitude,"longitude":lieux[5].longitude} // A Ankor
    },
    {
      "origin":{"latitude":lieux[5].latitude,"longitude":lieux[5].longitude}, // De Ankor
      "destination":{"latitude":lieux[6].latitude,"longitude":lieux[6].longitude} // A Floating Forest
    },
    {
      "origin":{"latitude":lieux[6].latitude,"longitude":lieux[6].longitude}, // De Floating Forest
      "destination":{"latitude":lieux[7].latitude,"longitude":lieux[7].longitude} // l'Hôtel Del Salto
    },
    {
      "origin":{"latitude":lieux[7].latitude,"longitude":lieux[7].longitude}, // De l'Hôtel Del Salto
      "destination":{"latitude":lieux[8].latitude,"longitude":lieux[8].longitude} // A l'Orpheum Theater
    },
    {
      "origin":{"latitude":lieux[8].latitude,"longitude":lieux[8].longitude}, // De l'Orpheum Theater
      "destination":{"latitude":lieux[9].latitude,"longitude":lieux[9].longitude} // Au Casino
    },
      {
      "origin":{"latitude":lieux[9].latitude,"longitude":lieux[9].longitude}, // Du Casino
      "destination":{"latitude":lieux[10].latitude,"longitude":lieux[10].longitude} // A l'Orient Express
    }/*,
    {
      "origin":{"latitude":lieux[10].latitude,"longitude":lieux[10].longitude}, // De l'Orient Express
      "destination":{"latitude":lieux[1].latitude,"longitude":lieux[1].longitude} // A St Sulpice
    }*/

  ];

  map.arc(paths,{});

  // GESTION DE BUBBLES
  var bombs = [
    { name: lieux[1].name, radius: rayon, latitude: lieux[1].latitude, longitude: lieux[1].longitude },
    { name: lieux[2].name, radius: rayon, latitude: lieux[2].latitude, longitude: lieux[2].longitude },
    { name: lieux[3].name, radius: rayon, latitude: lieux[3].latitude, longitude: lieux[3].longitude },
    { name: lieux[4].name, radius: rayon, latitude: lieux[4].latitude, longitude: lieux[4].longitude },
    { name: lieux[5].name, radius: rayon, latitude: lieux[5].latitude, longitude: lieux[5].longitude },
    { name: lieux[6].name, radius: rayon, latitude: lieux[6].latitude, longitude: lieux[6].longitude },
    { name: lieux[7].name, radius: rayon, latitude: lieux[7].latitude, longitude: lieux[7].longitude },
    { name: lieux[8].name, radius: rayon, latitude: lieux[8].latitude, longitude: lieux[8].longitude },
    { name: lieux[9].name, radius: rayon, latitude: lieux[9].latitude, longitude: lieux[9].longitude },
    { name: lieux[10].name, radius: rayon, latitude: lieux[10].latitude, longitude: lieux[10].longitude }
  ];

  //draw bubbles for bombs
  map.bubbles(bombs, {
    popupTemplate: function (geo, data) {
      return ['<div class="hoverinfo">' +  data.name, '</div>'].join('');
    }
  });

  // Style bubbles
  $('.datamaps-bubble').css('fill', 'rgb(255,255,255)');
  $('.datamaps-bubble').css('fill-opacity', '1');
  $('.datamaps-bubble').css('stroke-opacity', '1');
  $('.datamaps-bubble').css('stroke-width', '2');
  $('.datamaps-bubble').css('stroke', 'rgb(255,255,255)');

  // Style bubbles hover
  $('.datamaps-bubble').hover(function(){
    $('.datamaps-bubble').css('fill', 'rgb(255,255,255)');
    $('.datamaps-bubble').css('fill-opacity', '1');
    $('.datamaps-bubble').css('stroke-opacity', '1');
    $('.datamaps-bubble').css('stroke-width', '2');
    $('.datamaps-bubble').css('stroke', 'rgb(255,255,255)');
  });

  // CARTE EN GENERAL
  // Carte responsive
  $(window).on('resize', function() {
    map.resize();
  });

  // Enlever bordures pays
  $('.datamaps-subunit').css('stroke-width', '0');

});
