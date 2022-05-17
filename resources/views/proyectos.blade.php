<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Proyectos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Favicon -->
    <link href="https://res.cloudinary.com/lvaldivia/image/upload/v1652719812/ccd/logo-icon_pjbwon.png" rel="icon">

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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
                    {{-- Logo --}}
                    <div class="row m-4 divlogo">
                        <div class="col-3 logo">
                            <img class="img-logo" src="https://res.cloudinary.com/lvaldivia/image/upload/v1652720473/ccd/logo-navbar2_iblh54.png" alt="logoccd">
                            <p>CENTRO PARA</p>
                            <p>LA COMPETITIVIDAD</p>
                            <p>Y EL DESARROLLO</p>
                        </div>
                        <div class="col-9">
                            <p> SAD AIO Antamina</p>
                        </div>
                    </div>
                    {{-- End Logo --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/resumen" class="nav-item nav-link">Resumen</a>
                        <a href="/brechas" class="nav-item nav-link">Brechas</a>
                        <a href="/proyectos" class="nav-item nav-link active">Proyectos</a>
                        <a href="/recursos" class="nav-item nav-link">Recursos</a>
                        <a href="/potencialidades" class="nav-item nav-link">Potencialidades</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-1 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Proyectos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/resumen" class="aactiva">Resumen</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Proyectos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Resumen Start -->
        <div class="container-xxl py-5">
            <div class="container-fluid">
                <div class="row g-5 align-items-center">
                    <div class="row text-center">
                        <h3>Proyectos para el cierre de brechas y puesta en valor las potencialidades</h3>
                        <p>(Descripción)</p>
                    </div>
                    <div class="row" id="proy-card">
                        <!-- Filtros -->
                        <div class="row pt-3">
                            <div class="col-3">
                                <div class="row">
                                <label id="label" for="unit">Unidad territorial</label>
                                    <select id="select" name="unit" id="ut">
                                        <option value="">AIO</option>
                                        <optgroup label="UGT Huallanca">
                                            <option value="">Aquia (Bolognesi / Áncash)</option>
                                            <option value="">Chiquián (Bolognesi / Áncash)</option>
                                        </optgroup>
                                        <optgroup label="UGT Huarmey">
                                            <option value="">Huarmey (Huarmey / Áncash)</option>
                                        </optgroup>
                                        <optgroup label="UGT Mina / San Marcos">
                                            <option value="">Chavín de Huántar (Huari / Áncash)</option>
                                            <option value="">Huachis (Huari / Áncash)</option>
                                        </optgroup>
                                        <optgroup label="UGT Valle Fortaleza">
                                            <option value="">Antonio Raymondi (Bolognesi / Áncash)</option>
                                            <option value="">Cajacay (Bolognesi / Áncash)</option>
                                        </optgroup>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <label id="label" for="unit">Time frame</label>
                                    <select id="select" name="unit" id="ut">
                                        <option value="">Todos</option>
                                        <option value="">First Engagement</option>
                                        <option value="">Short Term</option>
                                        <option value="">Medium Term</option>
                                        <option value="">Long Term</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <label id="label" for="fac">Factores</label>
                                    <select id="select" name="fac" id="fc">
                                        <option value="">Todos</option>
                                        <option value="">Educación</option>
                                        <option value="">Institucionalidad</option>
                                        <option value="">Nivel de vida digno (ingresos)</option>
                                        <option value="">Nivel de vida digno (servicios básicos)</option>
                                        <option value="">Salud</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <label id="label" for="mod">Modalidad de inversión</label>
                                    <select id="select" name="mod" id="md">
                                        <option value="">Todas</option>
                                        <option value="">Inversión Pública (GL/GR/GN)</option>
                                        <option value="">Inversión Social Directa Antamina: Proyectos Sociales</option>
                                        <option value="">Inversión Social Gestión Pública y Privada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <label id="label" for="unit">Año</label>
                                    <select id="select" name="unit" id="ut">
                                        <option value="">2021</option>
                                        <option value="">2022</option>
                                        <option value="">2023</option>
                                        <option value="">2024</option>
                                        <option value="">2025</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-3">
                            <!-- Mapa -->
                            <div class="row" id="row-map">
                                <div id="map-proy"></div>
                            </div>
                            <!-- Tarjetas de cantidad y monto -->
                            <div class="row" id="row-card">
                                <div class="row" id="card-info">
                                    <h2>837</h2>
                                    <p>Cantidad de proyectos</p>
                                </div>
                                <div class="row mt-1" id="card-info">
                                    <h2>1,369</h2>
                                    <p>Monto actualizado</p>
                                    <small>(S/ millones)</small>
                                </div>
                            </div>
                        </div>
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
    <script type="text/javascript">
        var map = L.map('map-proy').setView([-10.67668, -77.8162], 13);

        L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        L.marker([-10.67668, -77.8162])
            .addTo(map)
            .bindPopup('<p><b>Distrito: </b> Antonio Raymondi <br/> <b>Monto actualizado (S/ millones): </b>22.61</p>');
        L.marker([-10.1147, -77.3981])
            .addTo(map)
            .bindPopup('<p><b>Distrito: </b> Chavín de Huántar <br/> <b>Monto actualizado (S/ millones): </b>63.68</p>');
    </script>
</body>
</html>