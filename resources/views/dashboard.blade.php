<!doctype html>
<html lang="es" class="h-100">

<head>
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>MACHINE-LEARNING</title>

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

        input:required:invalid {
            border: 1px solid red;
        }
        .result-container {
    text-align: center;
}

.image-container {
    margin-bottom: 20px;
}

.info-container {
    font-size: 18px;
}
.image-container {
    margin-bottom: 20px;
    border-width: 4px; /* Cambia este valor para ajustar el grosor del borde */
}
.image{
    border-width: 4px; /* Cambia este valor para ajustar el grosor del borde */
}
    </style>


    <!-- Custom styles for this template -->
</head>

<body class="d-flex h-100 text-center text-bg-dark">






    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div class="mx-auto">
                <h1 class="float-md-start mb-0">PREDICCION DE CANCER AL CUELLO UTERINO👩‍⚕️ </h1>
                <nav class="nav nav-masthead justify-content-center float-md-end">

                </nav>
            </div>
        </header>

        <main class="px-3">
            <h2>Predicciones rapidas.</h2>
            <p class="lead">Bienvenido a nuestra plataforma de predicción de cancer del cuello uterino basada en
                aprendizaje automático .</p>

            <form id="imageForm" enctype="multipart/form-data">
                <div class="col-md-7 col-12 mx-auto mb-3">
                    <input type="file" class="form-control" id="inlineFormInputGroupUsername" name="image"
                        accept="image/*" required>
                    <div class="invalid-feedback">
                        Por favor, carga una imagen.
                    </div>
                </div>
                <div class="col-12">

                    <button type="submit" class="btn btn-primary" id="predictButton">Predecir</button>
                    <button type="button" onclick="entrenar()" class="btn btn-primary">Entrenar</button>
                </div>
                <div class="dropdown position-fixed bottom-0 end-0 mb-5 me-3 bd-mode-toggle">
                    <select class="form-select text-sm" id="algoritmosSelect" name="algoritmo_id" required>
                        <!-- Opción por defecto (puedes cambiar el texto a tu preferencia) -->
                        <option value="">Selecciona un algoritmo</option>
                    </select>
                </div>
            </form>

        </main>


        <footer class="mt-auto align-left
  text-white-50">
            <p>By @USS</a>.</p>
        </footer>
    </div>

    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}" rel="stylesheet"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Realizar una solicitud GET al API para obtener la lista de algoritmos
            $.ajax({
                url: "{{ config('app.back_url') }}/api/tipo_imagen",
                type: 'GET',
                success: function(data) {
                    // Iterar sobre los algoritmos y agregarlos al select
                    data.algoritmos.forEach(function(algoritmo) {
                        $('#algoritmosSelect').append($('<option>', {
                            value: algoritmo.id,
                            text: "(" + algoritmo.abrebiatura + ") " + algoritmo
                                .nombre
                        }));
                    });
                },
                error: function(error) {
                    console.log('Error al obtener la lista de algoritmos:', error);
                }
            });
        });
        $('input[type="file"]').on('change', function() {
            if (this.files && this.files[0]) {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });
        $('#imageForm').on('submit', function(e) {
            var predictButton = $('#predictButton');
            predictButton.prop('disabled', true);
            // Cambia el texto del botón a "Prediciendo..."
            predictButton.html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Prediciendo...'
            );
            e.preventDefault();
            var formData = new FormData(this);
            var fileInput = $('#inlineFormInputGroupUsername')[0];
            if (fileInput.files.length === 0) {
                $('.invalid-feedback').show(); // Muestra el mensaje de error
                predictButton.html('Predecir');
                predictButton.prop('disabled', false);
                return;
            }

            $('.invalid-feedback').hide();
            $.ajax({
                url: "{{ config('app.back_url') }}/api/tipo_imagen",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    speciesData = response;
                    predictButton.html('Predecir');
                    predictButton.prop('disabled', false);
                    if (speciesData.estado) {
                        // Display a SweetAlert with species information
                        Swal.fire({
                            title: `<h1 style='font-size: 24px;'> ${speciesData.nombre}</h1> `,
                            showCloseButton: true,
                            showConfirmButton: false,
                            html: `
                            <div class="result-container">
                              <div class="image-container">
                                  <img class="img-fluid border rounded image border-5" src="data:image/jpeg;base64, ${speciesData.image_url}" alt="Imagen Referencial">
                              </div>
                              <div class="info-container">
                                  <strong>Diagnóstico:</strong> ${speciesData.diagnostico}
                              </div>
                              <div class="info-container">
                                  <strong>Descripcion:</strong> ${speciesData.descripcion}
                              </div>
                          </div>
                            `,
                            width: "80vw",
                            higth: "80vh",
                        });
                        var es_benigno = speciesData.es_benigno;

                        if (es_benigno) {
                            $('.image').addClass('border-success');
                        } else {
                            $('.image').addClass('border-danger');
                        }
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
                error: function(error) {
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

        function entrenar() {
            var algoritmo_id = $('#algoritmosSelect').val();
            Swal.fire({
                title: 'Entrenar',
                html: '<input type="number" id="numEpocas" class="swal2-input" placeholder="Número de épocas">',
                showCancelButton: true,
                confirmButtonText: 'Entrenar',
                preConfirm: () => {
                    return document.getElementById('numEpocas').value;
                },
            }).then((result) => {
                carga()
                if (result.isConfirmed) {
                    let numEpocas = result.value;
                    if (numEpocas) {
                        $('#entrenarButton').prop('disabled', true); // Deshabilita el botón de entrenar
                        $.ajax({
                            url: "{{ config('app.back_url') }}/api/tipo_imagen",
                            type: 'PUT',
                            data: JSON.stringify({
                                epochs: numEpocas,
                                algoritmo_id: algoritmo_id
                            }),
                            contentType: 'application/json',
                            success: function(response) {
                                speciesData = response;
                                Swal.fire({
                                    title: `<span style='font-size: 24px;'> Proceso exitoso</span> `,
                                    text: response.mensaje,
                                    icon: 'success',
                                });
                            },
                            error: function() {
                                Swal.fire({
                                    title: 'Error de servidor',
                                    text: 'Ha ocurrido un error en el servidor.',
                                    icon: 'error',
                                });
                            },
                            complete: function() {
                                // Al completar la solicitud, habilita el botón de entrenar y oculta el spinner
                                $('#entrenarButton').prop('disabled', false);
                            }
                        });
                    }
                }
            });
        }


        function carga() {
            Swal.fire({
                title: 'Entrenando...',
                html: '<div class="spinner-border" role="status"><span class="sr-only"></span></div>',
                allowOutsideClick: false,
                showCancelButton: false,
                showConfirmButton: false,
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
