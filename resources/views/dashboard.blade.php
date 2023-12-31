<!doctype html>
<html lang="es" class="h-100" data-bs-theme="auto">
  <head><script src="{{ asset('assets/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Cover Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/dist/css/cover.css') }}" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>


    <!-- Custom styles for this template -->
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h1 class="float-md-start mb-0">PREDICCION DE ESPECIES (PRUEBA)</h1>
      <nav class="nav nav-masthead justify-content-center float-md-end">

      </nav>
    </div>
  </header>

  <main class="px-3">
    <h2>Predicciones rapidas.</h2>
    <p class="lead">Bienvenido a nuestra plataforma de predicción de nombres de hongos basada en aprendizaje automático. ¡Descubre el nombre de ese hongo misterioso!</p>

     <form id="imageForm" enctype="multipart/form-data" class=" g-3 align-items-center  lead">
        <div class="col-md-7 col-12 mx-auto mb-3">
            <input type="file" class="form-control" id="inlineFormInputGroupUsername" name="image" accept="image/*">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="predictButton">Predecir</button>
            <button type="button" onclick="entrenar()" class="btn btn-primary">Entrenar</button>
        </div>

    </form>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>
<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}" rel="stylesheet"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
        $(document).ready(function () {
            $('#imageForm').on('submit', function (e) {
                var predictButton = $('#predictButton');
                predictButton.prop('disabled', true);
                // Cambia el texto del botón a "Prediciendo..."
                predictButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Prediciendo...');
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: "{{ config('app.back_url') }}/api/especies",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        speciesData= response;
                        predictButton.html('Predecir');
                        predictButton.prop('disabled', false);
                      if (speciesData.estado) {
                        // Display a SweetAlert with species information
                        Swal.fire({
                            title:  `<h1 style='font-size: 24px;'> ${speciesData.name}</h1> `,
                            showCloseButton: true,
                            showConfirmButton: false,
                            html: `
                            <div class="species-info">
                            <div class="row">
                                <div class="col-md-4">
                                <img class="img-fluid" src="data:image/jpeg;base64, ${speciesData.image_url}" alt="Imagen del hongo">
                                </div>
                                <div class="col-md-8">
                                <div class="info-item">
                                    <strong>Nombre científico:</strong> ${speciesData.scientific_name}
                                </div>
                                <div class="info-item">
                                    <strong>Clase:</strong> ${speciesData.class_name}
                                </div>
                                <div class="info-item">
                                    <strong>Familia:</strong> ${speciesData.family}
                                </div>
                                <div class="info-item">
                                    <strong>Género:</strong> ${speciesData.genus}
                                </div>
                                <div class="info-item">
                                    <strong>Orden:</strong> ${speciesData.order}
                                </div>
                                <div class="info-item">
                                    <strong>Filo:</strong> ${speciesData.phylum}
                                </div>
                                <div class="info-item">
                                    <strong>Información general:</strong> ${speciesData.general_information}
                                </div>
                                <div class="info-item">
                                    <strong>Características físicas:</strong> ${speciesData.morphological_characteristics}
                                </div>
                                <div class="info-item">
                                    <strong>Información de especie:</strong> ${speciesData.species_information}
                                </div>
                                <div class="info-item">
                                    <strong>Propiedades medicinales:</strong> ${speciesData.medicinal_properties.join(", ")}
                                </div>
                                </div>
                            </div>
                            </div>


                            `,
                          width: "100vw",
                          higth: "100vh",
                        });
                        } else {
                        // Display a SweetAlert for unrecognized species
                         predictButton.html('Predecir');
                        predictButton.prop('disabled', false);
                        Swal.fire({
                            title: "<span style='font-size: 24px;'>NO ENCONTRADO</span>",
                            text: "Esa especie no fue reconocida.",
                            icon: "warning",
                        });


                        }
                    },
                    error: function (error) {
                        predictButton.html('Predecir');
                        predictButton.prop('disabled', false);
                        Swal.fire({
                            title: "<span style='font-size: 24px;'>Ocurrió un error</span>",
                            text: JSON.stringify(error),
                            icon: "error",
                        });
                    }
                });
            });
        });
        function entrenar() {
  // Display a spinner while the request is in progress
  Swal.fire({
    title: 'Entrenando...',
    html: '<div class="spinner-border" role="status"><span class="sr-only"></span></div>',
    allowOutsideClick: false,
    showCancelButton: false,
    showConfirmButton: false,
    onBeforeOpen: () => {
      Swal.showLoading();
    },
  });

  $.ajax({
    url: "{{ config('app.back_url') }}/api/especies",
    type: 'PUT',
    contentType: false,
    processData: false,
    success: function (response) {
      speciesData = response;

      // Close the loading spinner modal
      Swal.close();

      // Display a SweetAlert with species information
      Swal.fire({
        title: `<span style='font-size: 24px;'> Proceso exitoso</span> `,
        text: response.mensaje,
        icon: 'success',
      });
    },
    error: function () {
      // Close the loading spinner modal
      Swal.close();

      $('#responseContainer').html('<p>Error al enviar el archivo.</p>');
    },
  });
}

    </script>
    <script>
$(document).ready(function() {
  $('input[type="file"]').on('change', function() {
    if (this.files && this.files[0]) {
      $(this).addClass('is-valid');
    } else {
      $(this).removeClass('is-valid');
    }
  });
});
</script>

    </body>
</html>
