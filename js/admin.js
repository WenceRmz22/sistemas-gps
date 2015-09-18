  var Datos = {};
  var SaveRuta ={};
  var responseF;
  var map2;
  var Descripcion = [];
  var latitud = [];
  var longitud = [];
  var latTemp;
  var lonTemp;
  var directionsDisplay = new google.maps.DirectionsRenderer();
  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay2 = new google.maps.DirectionsRenderer();
  var directionsService2 = new google.maps.DirectionsService();
  var mapa;
  var mapag;
  var responsef;
  var origen;
  var destino;
  $(document).on('ready', function() {

      $("#wizard").steps({
          headerTag: "h2",
          bodyTag: "section",
          transitionEffect: "slideLeft"
      });
      $("#new").click(function(){
          location.reload();
      });

  function buscarRuta() {
        var Latlng = new google.maps.LatLng(23.6266577, -102.5377501);
      var myOptions = {
          zoom: 5,
          center: Latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      mapag = new google.maps.Map($("#mapag").get(0), myOptions);

    
          var request = {
              origin: $('#origeng').val(),
              destination: $('#destinog').val(),
              travelMode: google.maps.DirectionsTravelMode['DRIVING'],
              unitSystem: google.maps.DirectionsUnitSystem['METRIC'],
              provideRouteAlternatives: true
          };
          directionsService.route(request, function(response, status) {
              
              SaveRuta["DescripcionRuta"] = String(response.routes[0].legs[0].end_address) + "-" + String(response.routes[0].legs[0].start_address);
              SaveRuta["latfin"] = response.routes[0].legs[0].end_location.lat();
              SaveRuta["lonfin"] = response.routes[0].legs[0].end_location.lng();
              SaveRuta["latini"] = response.routes[0].legs[0].start_location.lat();
              SaveRuta["lonini"] = response.routes[0].legs[0].start_location.lng();
              SaveRuta["duration"] = response.routes[0].legs[0].duration["text"];
              SaveRuta["distancia"] = response.routes[0].legs[0].distance["text"];
              alert(SaveRuta["duration"]);

              if (status == google.maps.DirectionsStatus.OK) {
                  directionsDisplay.setMap(mapag);
                  directionsDisplay.setPanel($("#panel_ruta").get(0));
                  directionsDisplay.setDirections(response);
              } else {
                  alert("No existen rutas entre ambos puntos");
              }
          });
      }
      $("#busca").click(function() {
          buscarRuta();
      });
      $("select#valorRutaEx").change(function(){
         var  id = $("#valorRutaEx").val();
         buscarRutas2(id);
      });
      function buscarRutas2(id){
        $.ajax({
            url: "php/mapaOption2.php",
                  type: "post",
                  data: {
                      id:id
                     }
          }).done(function(data){
                  var response  = $.parseJSON(data);
                  console.log(response);
                  origen = (parseFloat(response["latini"])+","+parseFloat(response["lonini"]));
                  destino = (parseFloat(response["latfin"])+","+parseFloat(response["lonfin"]));
                 
                    
                   var request = {
                    origin: origen,
                    destination: destino,
                    travelMode: google.maps.DirectionsTravelMode['DRIVING'],
                    unitSystem: google.maps.DirectionsUnitSystem['METRIC'],
                    provideRouteAlternatives: true
                };
                directionsService.route(request, function(response, status) {
                    Datos["PuntoFinLat"] = response.routes[0].legs[0].end_location.lat();
                    Datos["PuntoFinLon"] = response.routes[0].legs[0].end_location.lng();
                    Datos["PuntoIniLat"] = response.routes[0].legs[0].start_location.lat();
                    Datos["PuntoIniLon"] = response.routes[0].legs[0].start_location.lng();
                    Datos["Origen"] =response.routes[0].legs[0].start_address+" ";
                    Datos["Destino"]= response.routes[0].legs[0].end_address+" ";
                    responsef = response;
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setMap(map);
                        directionsDisplay.setPanel($("#panel_ruta").get(0));
                        directionsDisplay.setDirections(response);
                    } else {
                        alert("No existen rutas entre ambos puntos");
                    }
                });
          
          });
                 

      }
      $("#save").click(function(){
          $.ajax({
            url: "php/SaveRutaDB.php",
                  type: "post",
                  data: {
                      datos:SaveRuta
                     }
          }).done(function(data){
            alert(data);
            location.reload;
          });
      });

      $("#busqueda").autocomplete({
          source: "php/buscarTermino.php",
          minLength: 2,
          select: function(event, ui) {
              //$('#basic-modal-content').modal();
              //alert(ui.item.value);
              //BuscarAuditoria(ui.item.value);
              var dato = ui.item.value;
              $.ajax({
                  url: "php/traeValores.php",
                  type: "post",
                  data: {
                      dato: dato
                  }
              }).done(function(data) {
                  var response = $.parseJSON(data);
                  var origen = (response[0][0].PuntoIniLat + "," + response[0][0].PuntoIniLon);
                  var destin = (response[0][0].PuntoFinLat + "," + response[0][0].PuntoFinLon);
                  $("#tablaInfo tr").remove();
                  $("#tablaInfo").append("<tr><th>Nombre del Chofer</th><tr><tr><td>" + response[0][0].NombreChofer + "</td></tr>");
                  $("#tablaInfo").append("<tr><th>Origen</th></tr><tr><td>" + response[0][0].Origen+ "</td></tr>");
                  $("#tablaInfo").append("<tr><th>Destino</th></tr><tr><td>" + response[0][0].Destino+ "</td></tr>");
                  console.log(response);
                  var Latlng = new google.maps.LatLng(23.6266577, -102.5377501);
                  var myOptions = {
                      zoom: 6,
                      center: Latlng,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  };
                  mapa = new google.maps.Map($("#mapBusqueda").get(0), myOptions);
       
                   var marker = new google.maps.Marker({
                          position: new google.maps.LatLng(parseFloat(response[0][0].PuntoGpsLat), parseFloat(response[0][0].PuntoGpsLon)),
                          map: mapa,
                          title: "Ubicacion",
                          
                      });
                  for (var i = 0; i < response[0][1].length; i++) {
                      var marker = new google.maps.Marker({
                          position: new google.maps.LatLng(parseFloat(response[0][1][i][1]), parseFloat(response[0][1][i][2])),
                          map: mapa,
                          title: response[0][1][i][0]
                      });
                  }
                  
                  var request = {
                      origin: origen,
                      destination: destin,
                      travelMode: google.maps.DirectionsTravelMode['DRIVING'],
                      unitSystem: google.maps.DirectionsUnitSystem['METRIC'],
                      provideRouteAlternatives: true
                  };
                  directionsService2.route(request, function(response, status) {
                      if (status == google.maps.DirectionsStatus.OK) {
                          directionsDisplay2.setMap(mapa);
                          directionsDisplay2.setDirections(response);
                          google.maps.event.addListener(mapa, 'click', function(event) {
                              placeMarker(event.latLng);
                          });
                      } else {
                          alert("No existen rutas entre ambos puntos");
                      }
                  });
              });
          }
      });
      $(".letras").keypress(function(key) {
          window.console.log(key.charCode)
          if ((key.charCode < 97 || key.charCode > 122) //letras mayusculas
              && (key.charCode < 65 || key.charCode > 90) //letras minusculas
              && (key.charCode != 45) //retroceso
              && (key.charCode != 241) //ñ
              && (key.charCode != 209) //Ñ
              && (key.charCode != 32) //espacio
              && (key.charCode != 225) //á
              && (key.charCode != 233) //é
              && (key.charCode != 237) //í
              && (key.charCode != 243) //ó
              && (key.charCode != 250) //ú
              && (key.charCode != 193) //Á
              && (key.charCode != 201) //É
              && (key.charCode != 205) //Í
              && (key.charCode != 211) //Ó
              && (key.charCode != 218) //Ú
          ) return false;
      });
      $("#buscar").click(function() {
         load();
      });

      function load() {
         origen = $('#origen').val();
         destino = $('#destino').val();
          var request = {
              origin: origen,
              destination: destino,
              travelMode: google.maps.DirectionsTravelMode['DRIVING'],
              unitSystem: google.maps.DirectionsUnitSystem['METRIC'],
              provideRouteAlternatives: true
          };
          directionsService.route(request, function(response, status) {
              Datos["PuntoFinLat"] = response.routes[0].legs[0].end_location.lat();
              Datos["PuntoFinLon"] = response.routes[0].legs[0].end_location.lng();
              Datos["PuntoIniLat"] = response.routes[0].legs[0].start_location.lat();
              Datos["PuntoIniLon"] = response.routes[0].legs[0].start_location.lng();
              Datos["Origen"] =response.routes[0].legs[0].start_address+" ";
              Datos["Destino"]= response.routes[0].legs[0].end_address+" ";
              responsef = response;
              if (status == google.maps.DirectionsStatus.OK) {
                  directionsDisplay.setMap(map);
                  directionsDisplay.setPanel($("#panel_ruta").get(0));
                  directionsDisplay.setDirections(response);
              } else {
                  alert("No existen rutas entre ambos puntos");
              }
          });

           var request2 = {
                                  origin: origen,
                                  destination: destino,
                                  travelMode: google.maps.DirectionsTravelMode['DRIVING'],
                                  unitSystem: google.maps.DirectionsUnitSystem['METRIC'],
                                  provideRouteAlternatives: true
                              };
                              directionsService2.route(request, function(response, status) {
                                    
                                  if (status == google.maps.DirectionsStatus.OK) {
                                      directionsDisplay2.setMap(map2);
                                      directionsDisplay2.setPanel($("#panel_ruta").get(0));
                                      directionsDisplay2.setDirections(response);
                                  } else {
                                      alert("No existen rutas entre ambos puntos");
                                  }
                              });
        
      }
  });

  function placeMarker(location) {
      var marker = new google.maps.Marker({
          position: location,
          map: map2,
      });
      var infowindow = new google.maps.InfoWindow({
          content: ''
      });
      var contenido = "<br><input type='text' id='Descripcion' placeholder='Descripcion' class='form-control pull-left'><input type='button' class='btn btn-primary btn-sm pull-right' id='Agregar' value='Guardar' onclick='agregar()'>   ";
      google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(contenido);
          infowindow.open(map2, marker);
          latTemp = location.lat();
          lonTemp = location.lng();
      });
      
  }

  function Actualizar() {
      var Latlng = new google.maps.LatLng(23.6266577, -102.5377501);
      var myOptions = {
          zoom: 4,
          center: Latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map2 = new google.maps.Map($("#googleMap").get(0), myOptions);
      for (var i = 0; i < latitud.length; i++) {
          var marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitud[i], longitud[i]),
              map: map2,
              title: Descripcion[i]
          });
      }
      var request = {
          origin: origen,
          destination: destino,
          travelMode: google.maps.DirectionsTravelMode['DRIVING'],
          unitSystem: google.maps.DirectionsUnitSystem['METRIC'],
          provideRouteAlternatives: true
      };
      directionsService2.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay2.setMap(map2);
              directionsDisplay2.setPanel($("#panel_ruta").get(0));
              directionsDisplay2.setDirections(response);
              google.maps.event.addListener(map2, 'click', function(event) {
                  placeMarker(event.latLng);
              });
          } else {
              alert("No existen rutas entre ambos puntos");
          }
      });
  }

  function agregar() {
      $("#tablaInteres").append("<tr><td>" + $("#Descripcion").val() + "</td></tr>")
      Descripcion.push($("#Descripcion").val());
      latitud.push(latTemp);
      longitud.push(lonTemp);
      Actualizar();
  }
  $("#consulta").click(function() {
      //Creamos el punto a partir de las coordenadas:
      var punto = new google.maps.LatLng(23.6266577, -102.5377501);
      //Configuramos las opciones indicando Zoom, punto(el que hemos creado) y tipo de mapa
      var myOptions = {
          zoom: 6,
          center: punto,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      //Creamos el mapa e indicamos en qué caja queremos que se muestre
      var map3 = new google.maps.Map($("#mapBusqueda"), myOptions);
      //Opcionalmente podemos mostrar el marcador en el punto que hemos creado.
      var marker = new google.maps.Marker({
          position: punto,
          map: map3,
          title: "Título del mapa"
      });
  });