<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resumen</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo-ccd.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <p class=" m-4" id="font-tnr"><img class="img-fluid" src="img/logo-ccd-w.png"> SAD AIO Antamina</p>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/resumen" class="nav-item nav-link active">Resumen</a>
                        <a href="/brechas" class="nav-item nav-link">Brechas</a>
                        <a href="/proyectos" class="nav-item nav-link">Proyectos</a>
                        <a href="/recursos" class="nav-item nav-link">Recursos</a>
                        <a href="/potencialidades" class="nav-item nav-link">Potencialidades</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Resumen</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#" class="aactiva">Resumen</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Resumen</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Resumen Start -->
        <div class="container-xxl">
            <div class="container-fluid">
                <div class="grid-rsm-container">
                    <div class="grid-rsm-1"></div>
                    <!-- titulo -->
                    <div class="grid-rsm-2">
                        <div class="row text-center">
                            <h3 id="titulo">IDH distritos del AIO</h3>
                            <p>(Comparación relativa)</p>
                        </div>
                    </div>
                    <div class="grid-rsm-3"></div>
                    <!-- IDH -->
                    <div class="grid-rsm-4">
                        <div class="col-9">
                            <h4>IDH</h4>
                            <small>(Índice)</small>
                        </div>
                        <div class="col-3">
                            <h4>0,41</h4>
                        </div>
                    </div>
                    <!-- Ingresos per cápita -->
                    <div class="grid-rsm-5">
                        <div class="col-9">
                            <h4>Ingresos per cápita</h4>
                            <small>(Soles mensual)</small>
                        </div>
                        <div class="col-3">
                            <h4>194</h4>
                        </div>
                    </div>
                    <!-- Brecha física -->
                    <div class="grid-rsm-6">
                        <table>
                            <tr>
                                <th>
                                    <h4>Brecha física</h4>
                                    <small>(%)</small>
                                </th>
                                <td><h5>41</h5></td>
                            </tr>
                            <tr>
                                <th><p>Nivel de vida digno</p></th>
                                <td><p>51</p></td>
                            </tr>
                            <tr>
                                <th><p>Educación</p></td>
                                <td><p>27</p></td>
                            </tr>
                            <tr>
                                <th><p>Vida larga y saludable</p></th>
                                <td><p>27</p></td>
                            </tr>
                            <tr>
                                <th><p>Institucionalidad</p></th>
                                <td><p>44</p></td>
                            </tr>
                        </table>
                    </div>
                    <!-- Brecha financiera -->
                    <div class="grid-rsm-7">
                        <div class="col-8">
                            <h4>Brecha financiera</h4>
                            <small>(Millones de Soles)</small>
                        </div>
                        <div class="col-4">
                            <h4>125,103</h4>
                        </div>
                    </div>
                    <!-- Mapa -->
                    <div class="grid-rsm-8">
                        <div id="map-rsm"></div> 
                    </div>
                    <!-- Filtros -->
                    <div class="grid-rsm-9">
                        <div class="row" id="select-location">
                            <label id="label" for="unit">Unidad territorial</label>
                            <select name="location" id="location" class="select">
                                <option value="AIO">AIO</option>
                                <optgroup label="UGT Huallanca">
                                    <option value="-10.0742,-77.1464">Aquia (Bolognesi / Áncash)</option>
                                    <option value="">Chiquián (Bolognesi / Áncash)</option>
                                </optgroup>
                                <optgroup label="UGT Huarmey">
                                    <option value="-10.0697,-78.1517">Huarmey (Huarmey / Áncash)</option>
                                </optgroup>
                                <optgroup label="UGT Mina / San Marcos">
                                    <option value="-9.5869,-77.1772">Chavín de Huántar (Huari / Áncash)</option>
                                    <option value="">Huachis (Huari / Áncash)</option>
                                </optgroup>
                                <optgroup label="UGT Valle Fortaleza">
                                    <option value="-10.1575,-77.4703">Antonio Raymondi (Bolognesi / Áncash)</option>
                                    <option value="">Cajacay (Bolognesi / Áncash)</option>
                                </optgroup>
                            </select>
                            <label id="label" for="years" class="mt-3">Años</label>
                            <select name="years" id="yrs">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid-rsm-10"></div>
                    <!-- Potencialidades -->
                    <div class="grid-rsm-11">
                        <table>
                            <tr>
                                <th><h5>Potencialidades</h5></th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mb-2" id="bg-pt-a">
                                        <div class="col-3">
                                            <img src="img/plant.svg" alt="" class="img-pt">
                                        </div>
                                        <div class="col-9">
                                            Agroindustria
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mb-2" id="bg-pt-c">
                                        <div class="col-3" id="img-pt-c">
                                            <img src="img/cuy.svg" alt="" class="img-pt">
                                        </div>
                                        <div class="col-9 black-text">
                                            Cuyes y animales menores
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mb-2" id="bg-pt-l">
                                        <div class="col-3">
                                            <img src="img/milk.svg" alt="" class="img-pt">
                                        </div>
                                        <div class="col-9">
                                            Lácteos
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mb-2" id="bg-pt-m">
                                        <div class="col-3">
                                            <img src="img/mine.svg" alt="" class="img-pt">
                                        </div>
                                        <div class="col-9">
                                            Mineria
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mb-2" id="bg-pt-t">
                                        <div class="col-3">
                                            <img src="img/tourist.svg" alt="" class="img-pt">
                                        </div>
                                        <div class="col-9">
                                            Turismo
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- Proyectos -->
                    <div class="grid-rsm-12">
                        <table>
                            <tr>
                                <th><h5>Proyectos</h5></th>
                                <th class="text-center"><h6>Número</h6></th>
                                <td class="text-center">
                                    <h6>Monto</h6>
                                    <small>(S/ millones)</small>
                                </td>
                            </tr>
                            <tr>
                                <th><h4>Total</h4></th>
                                <th class="txt"><strong>836</strong></th>
                                <th class="txt"><strong>3,916</strong></th>
                            </tr>
                            <tr>
                                <td>First Engagement</td>
                                <td class="text-center">83</td>
                                <td class="text-center">101</td>
                            </tr>
                            <tr>
                                <td>Short Term</td>
                                <td class="text-center">50</td>
                                <td class="text-center">98</td>
                            </tr>
                            <tr>
                                <td>Medium Term</td>
                                <td class="text-center">740</td>
                                <td class="text-center">3.768</td>
                            </tr>
                            <tr>
                                <td>Long Term</td>
                                <td class="text-center">13</td>
                                <td class="text-center">47</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Modalidad de intervención -->
                    <div class="grid-rsm-13">
                        <table>
                            <tr>
                                <th><h5>Modalidad de intervención</h5></th>
                                <th class="text-center"><h6>Número</h6></th>
                                <td class="text-center">
                                    <h6>Monto</h6>
                                    <small>(S/ millones)</small>
                                </td>
                            </tr>
                            <tr>
                                <td>Proyectos sociales</td>
                                <td class="text-center">83</td>
                                <td class="text-center">101</td>
                            </tr>
                            <tr>
                                <td>Pública y privada</td>
                                <td class="text-center">52</td>
                                <td class="text-center">1.369</td>
                            </tr>
                            <tr>
                                <td>Inversión pública</td>
                                <td class="text-center">701</td>
                                <td class="text-center">2.447</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Canon y regalía -->
                    <div class="grid-rsm-14">
                        <table>
                            <tr>
                                <th><h5>Canon y Regalía</h5></th>
                                <th class="text-center"><h6>2007-2021</h6></th>
                                <th class="text-center"><h6>2022</h6></th>
                                <th class="text-center"><h6>2023-2036</h6></th>
                            </tr>
                            <tr>
                                <th>
                                    <h5>Mineria y otros</h5>
                                    <small>(Millones de Soles)</small>
                                </th>
                                <td class="text-center">3.818</td>
                                <td class="text-center">813</td>
                                <td class="text-center">7.909</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Inversión Social -->
                    <div class="grid-rsm-15">
                        <table>
                            <tr>
                                <th><h5>Inversión social</h5></th>
                                <th class="text-center"><h6>2022</h6></th>
                                <th class="text-center"><h6>2023</h6></th>
                                <th><a href="recursos.html"><img src="img/link.svg" class="img-fluid" style="margin: 0px 15px 0px; float: right;"></a></th>
                            </tr>
                            <tr>
                                <th>
                                    <h5>Directa Antamina</h5>
                                    <small>(Millones de Soles)</small>
                                </th>
                                <td class="text-center">101</td>
                                <td class="text-center">108</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Resumen End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Nosotros</h4>
                        <a class="btn btn-link" href="">Nosotros</a>
                        <a class="btn btn-link" href="">Contactanos</a>
                        <a class="btn btn-link" href="">Politica de privacidad</a>
                        <a class="btn btn-link" href="">Terminos & Condiciones</a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contacto</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>San Isidro, Lima - Perú</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>01 612 - 1700</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>melissa.sanchez@ccdcompetitividad.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Centro-para-la-Competitividad-y-el-Desarrollo-CCD-151040740434523?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://api.whatsapp.com/send?phone=51922753771"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/centro-para-la-competitividad-y-el-desarrollo-434799214/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="mailto:melissa.sanchez@ccdcompetitividad.com"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">CCD</a>, Todos los derechos reservados. 
							Desarrollado por <a class="border-bottom" href="https://lfvaldivia.ml" target="_blank">LValdivia</a> & <a class="border-bottom" href="https://ivanoscco.wixsite.com/my-site" target="_blank">IOscco</a><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- Map -->
   <script type="text/javascript">
        var map = L.map('map-rsm');

    L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
        attribution:'Centro para la Competitividad y el Desarrollo',
        minZoom: 1,
        maxZoom: 18,
        subdomains:['mt0','mt1','mt2','mt3'],
    }).addTo(map);

    //Diseño del iconos
        var marker1 = L.icon ({
            iconUrl: 'https://res.cloudinary.com/lvaldivia/image/upload/v1652367551/ccd/marker1_hdqypn.png',
            iconSize: [25,35]
        })

        var marker2 = L.icon ({
            iconUrl: 'https://res.cloudinary.com/lvaldivia/image/upload/v1652367551/ccd/marker2_weqa0n.png',
            iconSize: [25,35]
        })

        var marker3 = L.icon ({
            iconUrl: 'https://res.cloudinary.com/lvaldivia/image/upload/v1652367552/ccd/marker3_ekcmkc.png',
            iconSize: [25,35]
        })

        var marker4 = L.icon ({
            iconUrl: 'https://res.cloudinary.com/lvaldivia/image/upload/v1652373972/ccd/marker4_zwbks1.png',
            iconSize: [30,45]
        })

    //Añadir capa en formato Geojson
        let geojson_url = "https://api.maptiler.com/data/428836f4-9131-4044-a4a2-64a4422d388f/features.json?key=xlYleewapf1kKt27GBjx"
        fetch(
            geojson_url
        ).then(
            res => res.json()
        ).then(
            data => {
                let geojsonlayer = L.geoJson(data, {
                    style: style,
                    //Configuración popup distrito
                    onEachFeature: function(feature, layer) {
                        layer.bindPopup('<strong>Departamento: </strong>' + feature.properties.NOMBDEP + '</br>' + '<strong>Distrito: </strong>' + feature.properties.NOMBDIST);
                        //Cambiar nombre de título
                        /* document.getElementById('titulo').textContent='IDH distritos de '+feature.properties.NOMBDEP; */
                    }
                }).addTo(map)
                map.fitBounds(geojsonlayer.getBounds())
            }
        )

        //Color por rango
        function getColor(d) {
            /* return  d > 30000 ? '#FF7F7F':
                    d > 10000 ? '#FAC090':
                    d > 0     ? '#57CB8C':
                                '#ffffff'; */
            
            return  d == "PARARIN"              ? '#FF7F7F': //RED
                    d == "LLACLLIN"             ? '#FF7F7F': //RED
                    d == "MARCA"                ? '#FF7F7F': //RED
                    d == "ANTONIO RAYMONDI"     ? '#FF7F7F': //RED
                    d == "CAJACAY"              ? '#FF7F7F': //RED
                    d == "HUAYLLACAYAN"         ? '#FF7F7F': //RED
                    d == "PAMPAS CHICO"         ? '#FF7F7F': //RED
                    d == "CATAC"                ? '#FF7F7F': //RED
                    d == "AQUIA"                ? '#FF7F7F': //RED
                    d == "HUALLANCA"            ? '#FF7F7F': //RED
                    d == "LLATA"                ? '#FF7F7F': //RED
                    d == "CHAVIN DE HUANTAR"    ? '#FF7F7F': //RED
                    d == "PUÑOS"                ? '#FF7F7F': //RED
                    d == "SAN PEDRO DE CHANA"   ? '#FF7F7F': //RED
                    d == "HUACHIS"              ? '#FF7F7F': //RED
                    d == "HUARMEY"              ? '#FAC090': //ORANGE
                    d == "COLQUIOC"             ? '#FAC090': //ORANGE
                    d == "CHIQUIAN"             ? '#FAC090': //ORANGE
                    d == "SAN MARCOS"           ? '#FAC090': //ORANGE
                    d == "PARAMONGA"            ? '#57CB8C': //GREEN
                                                  '#ffffff';
        }

        //Función para mostrar los colores
        function style(feature){ 
            return {
                /* fillColor: getColor(feature.properties.AREA_MINAM), */
                fillColor: getColor(feature.properties.NOMBDIST),
                weight: 1,
                opacity: 0.5,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.6
            };
        }

        //Markers
            var marker1 = L.marker([-10.0760,-77.1470], {icon:marker1}).addTo(map).bindPopup('<strong>Time frame:</strong>First Engagement');
            var marker2 = L.marker([-10.0697,-78.1517],{icon:marker2}).addTo(map).bindPopup('<strong>Time frame:</strong>Short Term');
            var marker3 = L.marker([-9.5869,-77.1772],{icon:marker3}).addTo(map).bindPopup('<strong>Time frame:</strong>Medium Term');
            var marker4 = L.marker([-10.1575,-77.4703],{icon:marker4}).addTo(map).bindPopup('<strong>Time frame:</strong>Long Term');

        //Filtro para moverse entre ubicaciones
            document.getElementById('select-location').addEventListener('change', function(e){
                let coords = e.target.value.split(",");
                if (coords=="AIO") {
                    map.flyTo([-9.979670961528786,-77.4041748046875], 8.5);
                } else {
                    map.flyTo(coords, 13);
                }
            });
    </script>
</body>
</html>