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
                                <option value="-9.898510062899126,-437.1047973632813">AIO</option>
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

    <!-- Script Map -->
    <script src="js/aio.js"></script>

    <script type="text/javascript">
        var map = L.map('map-rsm').setView([-9.898510062899126, -437.1047973632813], 9);
        
        L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        //Diseño del icono
        var leafletIcon = L.icon ({
            iconUrl: 'https://pngroyale.com/wp-content/uploads/2021/12/Download-free-Map-Marker-PNG-Pic-PNG.png',
            /* shadowUrl: '', */
            iconSize: [20,40],
            iconAnchor: [22,94],
            popupAnchor: [-12,-95]
        })
        
        //Configuración popup
        function popup(feature, layer){
            if(feature.properties && feature.properties.NOMBDIST){
                layer.bindPopup("<strong> Distrito: </strong>" + feature.properties.NOMBDIST + "</br>" + "<strong>Provincia: </strong>" + feature.properties.NOMBPROV);
            }
        }

        
        //GeoJson
        var aio = {"type":"FeatureCollection","crs":{"type":"name","properties":{"name":"urn:ogc:def:crs:OGC:1.3:CRS84"}},"features":[
        {"type":"Feature","properties":{"OBJECTID":1,"IDDIST":"150202","IDDPTO":"15","IDPROV":"1502","NOMBDIST":"PARAMONGA","NOMBPROV":"BARRANCA","NOMBDEP":"LIMA","DCTO":"D.L.","LEY":"21701","FECHA":"23/11/1976","NOM_CAP":"PARAMONGA","SHAPE_LENG":1.2534672504,"SHAPE_AREA":0.03419454666,"SHAPE_LE_1":1.28540844441,"SHAPE_AR_1":0.03421527877,"AREA_MINAM":41490.02},"geometry":{"type":"Polygon","coordinates":[[[-77.69875173689618,-10.322104103245161],[-77.64920436184943,-10.34346747826511],[-77.61942723682132,-10.327825353250587],[-77.59937298680242,-10.38333397830229],[-77.68391998688222,-10.431385978346931],[-77.71131623690813,-10.504931478415383],[-77.74462411193959,-10.532266978440788],[-77.73629661193176,-10.568511353474566],[-77.72608198692214,-10.6233007285256],[-77.78246361197544,-10.643233978544076],[-77.81647848700763,-10.693716853591027],[-77.8862714870736,-10.611919978514722],[-77.83298923702316,-10.567483103473453],[-77.77137648696491,-10.571614603477421],[-77.77244336196587,-10.512478228422333],[-77.79617773698831,-10.483292853395128],[-77.76021161195428,-10.43022122834576],[-77.75704098695124,-10.344216853265666],[-77.69875173689618,-10.322104103245161]]]}},
        {"type":"Feature","properties":{"OBJECTID":2,"IDDIST":"020507","IDDPTO":"02","IDPROV":"0205","NOMBDIST":"COLQUIOC","NOMBPROV":"BOLOGNESI","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"15409","FECHA":"29/01/1965","NOM_CAP":"CHASQUITAMBO","SHAPE_LENG":0.7924285931,"SHAPE_AREA":0.02520812108,"SHAPE_LE_1":0.80380667548,"SHAPE_AR_1":0.02517629521,"AREA_MINAM":30539.39},"geometry":{"type":"Polygon","coordinates":[[[-77.56770311177252,-10.236150353165256],[-77.52828673673537,-10.262693728189998],[-77.46252148667342,-10.275658353202129],[-77.4814782366913,-10.346228603267855],[-77.52363848673103,-10.38739972830616],[-77.59937298680242,-10.38333397830229],[-77.61942723682132,-10.327825353250587],[-77.64920436184943,-10.34346747826511],[-77.69875173689618,-10.322104103245161],[-77.69642736189395,-10.256850353184392],[-77.67440436187314,-10.20671147813773],[-77.60802536181053,-10.240509728169277],[-77.56770311177252,-10.236150353165256]]]}},
        {"type":"Feature","properties":{"OBJECTID":3,"IDDIST":"020510","IDDPTO":"02","IDPROV":"0205","NOMBDIST":"HUAYLLACAYAN","NOMBPROV":"BOLOGNESI","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"S/N","FECHA":"02/01/1857","NOM_CAP":"HUAYLLACAYAN","SHAPE_LENG":0.51284378055,"SHAPE_AREA":0.00975408749,"SHAPE_LE_1":0.52088106873,"SHAPE_AR_1":0.00969423649,"AREA_MINAM":11758.25},"geometry":{"type":"Polygon","coordinates":[[[-77.41421048662797,-10.205718478137031],[-77.37027273658663,-10.20992972814098],[-77.32712261154605,-10.25621935318413],[-77.35950386157651,-10.292033228217445],[-77.39914648661379,-10.272048853198799],[-77.46252148667342,-10.275658353202129],[-77.52828673673537,-10.262693728189998],[-77.46910436167963,-10.22501185315498],[-77.41421048662797,-10.205718478137031]]]}},
        {"type":"Feature","properties":{"OBJECTID":4,"IDDIST":"020503","IDDPTO":"02","IDPROV":"0205","NOMBDIST":"ANTONIO RAYMONDI","NOMBPROV":"BOLOGNESI","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"14063","FECHA":"24/04/1962","NOM_CAP":"RAQUIA","SHAPE_LENG":0.43906021997,"SHAPE_AREA":0.00998776263,"SHAPE_LE_1":0.44320026327,"SHAPE_AR_1":0.01005966759,"AREA_MINAM":12204.7},"geometry":{"type":"Polygon","coordinates":[[[-77.47090823668132,-10.155445353090174],[-77.41421048662797,-10.205718478137031],[-77.46910436167963,-10.22501185315498],[-77.52828673673537,-10.262693728189998],[-77.56770311177252,-10.236150353165256],[-77.54820698675411,-10.180547353113498],[-77.54604686175209,-10.175363353108656],[-77.51526361172309,-10.147400353082649],[-77.47090823668132,-10.155445353090174]]]}},
        {"type":"Feature","properties":{"OBJECTID":5,"IDDIST":"020505","IDDPTO":"02","IDPROV":"0205","NOMBDIST":"CAJACAY","NOMBPROV":"BOLOGNESI","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"S/N","FECHA":"02/01/1857","NOM_CAP":"CAJACAY","SHAPE_LENG":0.65255109489,"SHAPE_AREA":0.01589792228,"SHAPE_LE_1":0.67711314098,"SHAPE_AR_1":0.01527960407,"AREA_MINAM":18534.23},"geometry":{"type":"Polygon","coordinates":[[[-77.31998323653931,-10.127377353064116],[-77.28044923650218,-10.160314478094818],[-77.25713473648028,-10.20312497813471],[-77.26978036149215,-10.257466478185314],[-77.30010011152065,-10.284632478210584],[-77.32712261154605,-10.25621935318413],[-77.37027273658663,-10.20992972814098],[-77.41421048662797,-10.205718478137031],[-77.47090823668132,-10.155445353090174],[-77.4442304866562,-10.147177728082509],[-77.40064848661517,-10.132154353068527],[-77.3458071115636,-10.160530853094997],[-77.31998323653931,-10.127377353064116]]]}},
        {"type":"Feature","properties":{"OBJECTID":6,"IDDIST":"020501","IDDPTO":"02","IDPROV":"0205","NOMBDIST":"CHIQUIAN","NOMBPROV":"BOLOGNESI","NOMBDEP":"ANCASH","DCTO":"-","LEY":"-","FECHA":"EPOCA INDEP.","NOM_CAP":"CHIQUIAN","SHAPE_LENG":0.8221497291,"SHAPE_AREA":0.01543979536,"SHAPE_LE_1":0.82889647342,"SHAPE_AR_1":0.0153251931,"AREA_MINAM":18586.15},"geometry":{"type":"Polygon","coordinates":[[[-77.15363286138314,-10.088800728028268],[-77.16204686139102,-10.11364647805139],[-77.10502148633752,-10.181220728114349],[-77.10538673633789,-10.201078103132826],[-77.13821873636869,-10.26360747819105],[-77.14036911137069,-10.30800785323242],[-77.14740423637728,-10.296753853221949],[-77.17305073640135,-10.242009728170935],[-77.18065886140849,-10.177644978110994],[-77.25713473648028,-10.20312497813471],[-77.28044923650218,-10.160314478094818],[-77.21277498643863,-10.133711603070084],[-77.2015604864281,-10.0921717280314],[-77.15363286138314,-10.088800728028268]]]}},  
        {"type":"Feature","properties":{"OBJECTID":7,"IDDIST":"021705","IDDPTO":"02","IDPROV":"0217","NOMBDIST":"LLACLLIN","NOMBPROV":"RECUAY","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"14699","FECHA":"08/11/1963","NOM_CAP":"LLACLLIN","SHAPE_LENG":0.54166423157,"SHAPE_AREA":0.00792202121,"SHAPE_LE_1":0.55067498118,"SHAPE_AR_1":0.00791172254,"AREA_MINAM":9602.81},"geometry":{"type":"Polygon","coordinates":[[[-77.56442186176938,-10.04806635299011],[-77.54820698675411,-10.180547353113498],[-77.56770311177252,-10.236150353165256],[-77.5668612367717,-10.1653124780993],[-77.59071848679417,-10.122336728059247],[-77.64603073684631,-10.075160978015253],[-77.62694811182831,-10.044711352986921],[-77.56442186176938,-10.04806635299011]]]}},
        {"type":"Feature","properties":{"OBJECTID":8,"IDDIST":"021707","IDDPTO":"02","IDPROV":"0217","NOMBDIST":"PAMPAS CHICO","NOMBPROV":"RECUAY","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"9422","FECHA":"31/10/1941","NOM_CAP":"PAMPAS CHICO","SHAPE_LENG":0.47020334431,"SHAPE_AREA":0.00802457171,"SHAPE_LE_1":0.50017244058,"SHAPE_AR_1":0.00863822088,"AREA_MINAM":10481.73},"geometry":{"type":"Polygon","coordinates":[[[-77.31998323653931,-10.127377353064116],[-77.3458071115636,-10.160530853094997],[-77.40064848661517,-10.132154353068527],[-77.4442304866562,-10.147177728082509],[-77.40904898662308,-10.107925978045987],[-77.38520273660063,-10.01141897795609],[-77.31998323653931,-10.127377353064116]]]}},
        {"type":"Feature","properties":{"OBJECTID":9,"IDDIST":"021708","IDDPTO":"02","IDPROV":"0217","NOMBDIST":"PARARIN","NOMBPROV":"RECUAY","NOMBDEP":"ANCASH","DCTO":"-","LEY":"-","FECHA":"EPOCA INDEP.","NOM_CAP":"PARARIN","SHAPE_LENG":0.91132752851,"SHAPE_AREA":0.02135761355,"SHAPE_LE_1":0.9167484142,"SHAPE_AR_1":0.02136294903,"AREA_MINAM":25930.97},"geometry":{"type":"Polygon","coordinates":[[[-77.63140823683251,-10.022017602965802],[-77.6209882368227,-10.025310602968869],[-77.62694811182831,-10.044711352986921],[-77.64603073684631,-10.075160978015253],[-77.59071848679417,-10.122336728059247],[-77.5668612367717,-10.1653124780993],[-77.56770311177252,-10.236150353165256],[-77.60802536181053,-10.240509728169277],[-77.67440436187314,-10.20671147813773],[-77.65625761185599,-10.151978478086775],[-77.69878323689613,-10.14139447807687],[-77.72186523691786,-10.078679228018448],[-77.75594948695003,-10.03972947798213],[-77.76393161195753,-9.989904352935724],[-77.75063473694499,-10.006214852950926],[-77.63140823683251,-10.022017602965802]]]}},
        {"type":"Feature","properties":{"OBJECTID":10,"IDDIST":"021706","IDDPTO":"02","IDPROV":"0217","NOMBDIST":"MARCA","NOMBPROV":"RECUAY","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"S/N","FECHA":"02/01/1857","NOM_CAP":"MARCA","SHAPE_LENG":0.63237894789,"SHAPE_AREA":0.01509975266,"SHAPE_LE_1":0.63533528418,"SHAPE_AR_1":0.01505603941,"AREA_MINAM":18272.42},"geometry":{"type":"Polygon","coordinates":[[[-77.38520273660063,-10.01141897795609],[-77.40904898662308,-10.107925978045987],[-77.4442304866562,-10.147177728082509],[-77.47090823668132,-10.155445353090174],[-77.51526361172309,-10.147400353082649],[-77.54604686175209,-10.175363353108656],[-77.51828711172593,-10.105033978043208],[-77.48265798669236,-10.06433535300531],[-77.45525661166653,-9.976283227923348],[-77.43414261164668,-9.968007852915646],[-77.38520273660063,-10.01141897795609]]]}},
        {"type":"Feature","properties":{"OBJECTID":111,"IDDIST":"020504","IDDPTO":"02","IDPROV":"0205","NOMBDIST":"AQUIA","NOMBPROV":"BOLOGNESI","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"S/N","FECHA":"02/01/1857","NOM_CAP":"AQUIA","SHAPE_LENG":0.95745425727,"SHAPE_AREA":0.0362163058,"SHAPE_LE_1":0.98597370817,"SHAPE_AR_1":0.03601830161,"AREA_MINAM":43707.8},"geometry":{"type":"Polygon","coordinates":[[[-77.1416612363719,-9.833231977790275],[-77.094876986328,-9.840815477797339],[-77.03669611127346,-9.91631647786766],[-77.02345048626108,-9.977339602924507],[-77.07271298630722,-10.003809227949134],[-77.09047123632389,-10.089722353029154],[-77.15363286138314,-10.088800728028268],[-77.2015604864281,-10.0921717280314],[-77.22390823644908,-10.039412102982247],[-77.20560411143188,-9.967025102914862],[-77.17378986140204,-9.913134227864669],[-77.18713473641454,-9.836212852793032],[-77.1416612363719,-9.833231977790275]]]}},
        {"type":"Feature","properties":{"OBJECTID":12,"IDDIST":"021101","IDDPTO":"02","IDPROV":"0211","NOMBDIST":"HUARMEY","NOMBPROV":"HUARMEY","NOMBDEP":"ANCASH","DCTO":"-","LEY":"-","FECHA":"EPOCA INDEP.","NOM_CAP":"HUARMEY","SHAPE_LENG":2.71455136433,"SHAPE_AREA":0.24000886188,"SHAPE_LE_1":2.73744616911,"SHAPE_AR_1":0.24008978748,"AREA_MINAM":291506.91},"geometry":{"type":"Polygon","coordinates":[[[-77.82587498701595,-9.914283227865212],[-77.85389061204246,-9.963335977910823],[-77.80602348699726,-9.961058602908802],[-77.78004298697273,-9.966099602913532],[-77.76393161195753,-9.989904352935724],[-77.75594948695003,-10.03972947798213],[-77.72186523691786,-10.078679228018448],[-77.69878323689613,-10.14139447807687],[-77.65625761185599,-10.151978478086775],[-77.67440436187314,-10.20671147813773],[-77.69642736189395,-10.256850353184392],[-77.69875173689618,-10.322104103245161],[-77.75704098695124,-10.344216853265666],[-77.76021161195428,-10.43022122834576],[-77.79617773698831,-10.483292853395128],[-77.77244336196587,-10.512478228422333],[-77.77137648696491,-10.571614603477421],[-77.83298923702316,-10.567483103473453],[-77.8862714870736,-10.611919978514722],[-77.90816011209425,-10.544287103451717],[-77.96062298714385,-10.492519478403372],[-77.98034173716246,-10.439548853354003],[-78.01475973719499,-10.409630853326039],[-78.01060348719102,-10.374699103293553],[-78.05454686223257,-10.345955103266643],[-78.05789848723568,-10.301433603225199],[-78.08508986226136,-10.267749978193745],[-78.10225973727748,-10.200150353130757],[-78.16357036233536,-10.147191353081238],[-78.1753417373463,-10.04584960298683],[-78.19609373736581,-9.994880852939286],[-78.12333611229695,-9.914806602864994],[-78.08804798726362,-9.92082885287069],[-78.07827848725434,-9.88181697783441],[-78.03289786221143,-9.855386477809922],[-77.9402231121239,-9.8459058528013],[-77.9154961121005,-9.818365227775713],[-77.85388511204232,-9.817092602774652],[-77.82694123701695,-9.878091852831492],[-77.82587498701595,-9.914283227865212]]]}},
        {"type":"Feature","properties":{"OBJECTID":13,"IDDIST":"020508","IDDPTO":"02","IDPROV":"0205","NOMBDIST":"HUALLANCA","NOMBPROV":"BOLOGNESI","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"S/N","FECHA":"02/01/1857","NOM_CAP":"HUALLANCA","SHAPE_LENG":1.39359750591,"SHAPE_AREA":0.06718098105,"SHAPE_LE_1":1.41887325054,"SHAPE_AR_1":0.06743329915,"AREA_MINAM":81822.84},"geometry":{"type":"Polygon","coordinates":[[[-76.88914448613531,-9.82348435278124],[-76.86927536111672,-9.860394352815606],[-76.83893748608834,-9.934554727884684],[-76.81367573606471,-9.961572227909839],[-76.82404686107441,-10.010998102955881],[-76.81200723606317,-10.050893102993026],[-76.87988673612665,-10.116552728054168],[-76.90392573614915,-10.115359353053057],[-76.91546486115996,-10.119914103057296],[-76.96158936120312,-10.105916603044253],[-77.02345048626108,-9.977339602924507],[-77.03669611127346,-9.91631647786766],[-77.094876986328,-9.840815477797339],[-77.0966934863297,-9.804553477763571],[-77.04891411128493,-9.795859352755478],[-77.02779886126513,-9.764121102725909],[-77.02384173626143,-9.704326227670249],[-76.98104298622133,-9.724568352689095],[-76.94538861118794,-9.70256835266862],[-76.90138286114676,-9.770496102731885],[-76.88914448613531,-9.82348435278124]]]}},
        {"type":"Feature","properties":{"OBJECTID":14,"IDDIST":"021702","IDDPTO":"02","IDPROV":"0217","NOMBDIST":"CATAC","NOMBPROV":"RECUAY","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"15370","FECHA":"08/01/1965","NOM_CAP":"CATAC","SHAPE_LENG":1.47610731778,"SHAPE_AREA":0.08444123782,"SHAPE_LE_1":1.50463282986,"SHAPE_AR_1":0.08446190293,"AREA_MINAM":102535.52},"geometry":{"type":"Polygon","coordinates":[[[-77.18713473641454,-9.836212852793032],[-77.17378986140204,-9.913134227864669],[-77.20560411143188,-9.967025102914862],[-77.22390823644908,-10.039412102982247],[-77.2015604864281,-10.0921717280314],[-77.21277498643863,-10.133711603070084],[-77.28044923650218,-10.160314478094818],[-77.31998323653931,-10.127377353064116],[-77.38520273660063,-10.01141897795609],[-77.43414261164668,-9.968007852915646],[-77.44358786165554,-9.953181602901843],[-77.45468161166599,-9.939771477889341],[-77.47890423668876,-9.873769477827864],[-77.48895311169824,-9.819837852777638],[-77.47317386168338,-9.798482477757737],[-77.4096464866236,-9.772406227733496],[-77.38095898659661,-9.779232477739875],[-77.32357811154266,-9.715615227680681],[-77.2514396114749,-9.68862672765556],[-77.22777298645268,-9.713389227678633],[-77.24384773646776,-9.80573247776462],[-77.18713473641454,-9.836212852793032]]]}},  
        {"type":"Feature","properties":{"OBJECTID":15,"IDDIST":"100501","IDDPTO":"10","IDPROV":"1005","NOMBDIST":"LLATA","NOMBPROV":"HUAMALIES","NOMBDEP":"HUANUCO","DCTO":"-","LEY":"-","FECHA":"EPOCA INDEP.","NOM_CAP":"LLATA","SHAPE_LENG":1.15101701706,"SHAPE_AREA":0.03415389768,"SHAPE_LE_1":1.16263617288,"SHAPE_AR_1":0.03409261484,"AREA_MINAM":41402.56},"geometry":{"type":"Polygon","coordinates":[[[-76.7836113610366,-9.525851602504064],[-76.7431894859988,-9.57909960255365],[-76.72760548598424,-9.595656227569082],[-76.7613417360158,-9.617640602589535],[-76.81057811106182,-9.617890602589773],[-76.86087698610885,-9.642900352613067],[-76.94538861118794,-9.70256835266862],[-76.98104298622133,-9.724568352689095],[-77.02384173626143,-9.704326227670249],[-77.04848823628453,-9.647460977617264],[-76.99527148623469,-9.603443352576285],[-76.97497661121567,-9.563365227538968],[-76.95308986119517,-9.547261727523974],[-76.8967304861424,-9.548773477525403],[-76.85008986109878,-9.51533785249424],[-76.7836113610366,-9.525851602504064]]]}},
        {"type":"Feature","properties":{"OBJECTID":16,"IDDIST":"021004","IDDPTO":"02","IDPROV":"0210","NOMBDIST":"CHAVIN DE HUANTAR","NOMBPROV":"HUARI","NOMBDEP":"ANCASH","DCTO":"-","LEY":"-","FECHA":"EPOCA INDEP.","NOM_CAP":"CHAVIN DE HUANTAR","SHAPE_LENG":1.09617928304,"SHAPE_AREA":0.03443686261,"SHAPE_LE_1":1.13693436542,"SHAPE_AR_1":0.03454740857,"AREA_MINAM":41965.61},"geometry":{"type":"Polygon","coordinates":[[[-77.14930661137905,-9.494619102474912],[-77.18354686141116,-9.618453102590225],[-77.19929098642594,-9.64605660261594],[-77.13276561136352,-9.688468727655462],[-77.13297311136374,-9.802636852761779],[-77.1416612363719,-9.833231977790275],[-77.18713473641454,-9.836212852793032],[-77.24384773646776,-9.80573247776462],[-77.22777298645268,-9.713389227678633],[-77.2514396114749,-9.68862672765556],[-77.26970573649206,-9.648738852618411],[-77.30938673652932,-9.540162102517268],[-77.3103391115302,-9.514734477493615],[-77.14930661137905,-9.494619102474912]]]}},
        {"type":"Feature","properties":{"OBJECTID":17,"IDDIST":"021014","IDDPTO":"02","IDPROV":"0210","NOMBDIST":"SAN MARCOS","NOMBPROV":"HUARI","NOMBDEP":"ANCASH","DCTO":"-","LEY":"-","FECHA":"EPOCA INDEP.","NOM_CAP":"SAN MARCOS","SHAPE_LENG":1.26911286,"SHAPE_AREA":0.04642326754,"SHAPE_LE_1":1.29885907336,"SHAPE_AR_1":0.0462513626,"AREA_MINAM":56178.52},"geometry":{"type":"Polygon","coordinates":[[[-77.01711723625512,-9.487859227468636],[-76.97497661121567,-9.563365227538968],[-76.99527148623469,-9.603443352576285],[-77.04848823628453,-9.647460977617264],[-77.02384173626143,-9.704326227670249],[-77.02779886126513,-9.764121102725909],[-77.04891411128493,-9.795859352755478],[-77.0966934863297,-9.804553477763571],[-77.094876986328,-9.840815477797339],[-77.1416612363719,-9.833231977790275],[-77.13297311136374,-9.802636852761779],[-77.13276561136352,-9.688468727655462],[-77.19929098642594,-9.64605660261594],[-77.18354686141116,-9.618453102590225],[-77.14930661137905,-9.494619102474912],[-77.15819136138735,-9.428509727413358],[-77.04886048628487,-9.509850477489131],[-77.01711723625512,-9.487859227468636]]]}},  
        {"type":"Feature","properties":{"OBJECTID":18,"IDDIST":"100509","IDDPTO":"10","IDPROV":"1005","NOMBDIST":"PUÑOS","NOMBPROV":"HUAMALIES","NOMBDEP":"HUANUCO","DCTO":"LEY","LEY":"9622","FECHA":"07/10/1942","NOM_CAP":"PUÑOS","SHAPE_LENG":0.5846338268,"SHAPE_AREA":0.00810424215,"SHAPE_LE_1":0.58725524612,"SHAPE_AR_1":0.00810355621,"AREA_MINAM":9844.12},"geometry":{"type":"Polygon","coordinates":[[[-76.7865996110394,-9.503107477482878],[-76.7836113610366,-9.525851602504064],[-76.85008986109878,-9.51533785249424],[-76.8967304861424,-9.548773477525403],[-76.95308986119517,-9.547261727523974],[-76.93800973618103,-9.526578102504715],[-76.95233398619446,-9.469697227451743],[-76.92924411117284,-9.426134727411185],[-76.85875973610689,-9.506328102485876],[-76.7865996110394,-9.503107477482878]]]}},
        {"type":"Feature","properties":{"OBJECTID":19,"IDDIST":"021015","IDDPTO":"02","IDPROV":"0210","NOMBDIST":"SAN PEDRO DE CHANA","NOMBPROV":"HUARI","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"12338","FECHA":"10/06/1955","NOM_CAP":"CHANA","SHAPE_LENG":0.53034910838,"SHAPE_AREA":0.01187342744,"SHAPE_LE_1":0.53076798249,"SHAPE_AR_1":0.01186155934,"AREA_MINAM":14412.23},"geometry":{"type":"Polygon","coordinates":[[[-76.93608011117924,-9.405851602392286],[-76.92924411117284,-9.426134727411185],[-76.95233398619446,-9.469697227451743],[-76.93800973618103,-9.526578102504715],[-76.95308986119517,-9.547261727523974],[-76.97497661121567,-9.563365227538968],[-77.01711723625512,-9.487859227468636],[-77.03734373627408,-9.437257852421517],[-77.03066811126781,-9.382263727370303],[-76.97066661121163,-9.412715102398655],[-76.93608011117924,-9.405851602392286]]]}},
        {"type":"Feature","properties":{"OBJECTID":20,"IDDIST":"021007","IDDPTO":"02","IDPROV":"0210","NOMBDIST":"HUACHIS","NOMBPROV":"HUARI","NOMBDEP":"ANCASH","DCTO":"LEY","LEY":"S/N","FECHA":"02/01/1857","NOM_CAP":"HUACHIS","SHAPE_LENG":0.59567136024,"SHAPE_AREA":0.01254760872,"SHAPE_LE_1":0.60066163061,"SHAPE_AR_1":0.01251895579,"AREA_MINAM":15214.49},"geometry":{"type":"Polygon","coordinates":[[[-77.03066811126781,-9.382263727370303],[-77.03734373627408,-9.437257852421517],[-77.01711723625512,-9.487859227468636],[-77.04886048628487,-9.509850477489131],[-77.15819136138735,-9.428509727413358],[-77.14080861137104,-9.393861352381089],[-77.09019336132361,-9.366595727355701],[-77.05603773629159,-9.363950602353246],[-77.03824973627493,-9.331343977322868],[-77.03066811126781,-9.382263727370303]]]}}]};

        //Añadir capa en formato Geojson
        L.geoJson(aio).addTo(map);

        /* var aioJS = L.geoJson(aio,{
            onEachFeature: popup
        }).addTo(map); */


        //Filtro para moverse entre ubicaciones
        document.getElementById('select-location').addEventListener('change', function(e){
            let coords = e.target.value.split(",");
            //Añadir marcador con popup
            L.marker(coords,{icon:leafletIcon}).addTo(map).bindPopup('<p>Coordenadas:</p>'+coords);
            map.flyTo(coords, 15);
            document.getElementById('titulo').textContent='IDH distritos de '+coords;
        });
    </script>
</body>
</html>