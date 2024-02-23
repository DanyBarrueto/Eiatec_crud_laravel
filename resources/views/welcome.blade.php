<!DOCTYPE html>
<html lang="es" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2460b47c04.js" crossorigin="anonymous"></script>
    <title>Crud Eiatec</title>
</head>
<body>

<!--Logo empresa-->
    <header style="background-color:aquamarine; border-radius:10px; ">
        <div>
            <img src="{{ asset('img/Logo_eiatec.png') }}" class="img-responsive" style="width: 20%; height: auto; margin-left:15vh ">
            </div>
    </header>

<!--Mensajes para indicar si el dato se guardo o actualizo bien-->
    @if (session("Correcto"))
    <div class="alert alert-success fw-bold fs-5 ">{{session("Correcto")}}</div>
    @endif

    @if (session("Incorrecto"))
    <div class="alert alert-danger fw-bold fs-5">{{session("Incorrecto")}}</div>
    @endif

<!--Formulario principal para poder ingresar los datos-->
    <div class="container">
        <br>
        <!--Formulario principal la parte de datos personales--> 
        <h2 class="fw-bold" >Usuario:</h2>
        <div class="row justify-content-center">
            <form class="col-md-8" action="{{route("example-app.create")}}" method="post" style="width: 200vh;">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <label for="cedula" class="form-label fw-bold" style="color: #7ab82c;">Cédula:</label>
                        <input type="text" id="cedula" name="cedula" class="form-control border-dark  text-white text-center" style="background-color: #66c2c2;"  required />
                    </div>
                    <div class="col-md-6">
                        <label for="nombre" class="form-label fw-bold" style="color: #7ab82c;">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control border-dark text-white text-center" style="background-color: #66c2c2;" required />
                    </div>
                    <div class="col-md-2">
                        <label for="oficina" class="form-label fw-bold" style="color: #7ab82c;">Oficina:</label>
                        <select id="oficina" name="oficina" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="N_Rio">N_Rio</option>
                            <option value="S_Nei">S_Nei</option>
                            <option value="C_Téc">C_Téc</option>
                            <option value="C_Adm">C_Adm</option>
                            <option value="C_Hof">C_Hof</option>
                            <option value="N_Hof">N_Hof</option>
                            <option value="S_Hof">S_Hof</option>
                            <option value="N_Uri">N_Uri</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="area" class="form-label fw-bold" style="color: #7ab82c;">Area:</label>
                        <select id="area" name="area" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="Tecnica">Tecnica</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Administracion">Administracion</option>
                            <option value="Geb_Centro">Geb_Centro</option>
                            <option value="Geb_Norte">Geb_Norte</option>
                            <option value="Gerencia">Gerencia</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="cargo" class="form-label fw-bold" style="color: #7ab82c;">Cargo:</label>
                        <select id="cargo" name="cargo" class="form-select border-dark text-white" style="background-color: #66c2c2;"  required>
                            <option value=""></option>
                            <option value="Gerente">Gerente</option>
                            <option value="Profesional Forestal">Profesional Forestal</option>
                            <option value="Profesional Ambiental">Profesional Ambiental</option>
                            <option value="Gestor Predial">Gestor Predial</option>
                            <option value="Coordinador de Proyectos">Coordinador de Proyectos</option>
                            <option value="Auxiliar HSEQ">Auxiliar HSEQ</option>
                            <option value="Profesional Civil">Profesional Civil</option>
                            <option value="Profesional Social">Profesional Social</option>
                            <option value="Gerente Tecnico">Gerente Tecnico</option>
                            <option value="Coordinador De Arqueología">Coordinador De Arqueología</option>
                            <option value="Profesional Biologo">Profesional Biologo</option>
                            <option value="Tecnologo Social">Tecnologo Social</option>
                            <option value="Auxiliar de Servicios Generales">Auxiliar de Servicios Generales</option>
                            <option value="Coordinador Sig">Coordinador Sig</option>
                            <option value="Gerente Administrativo">Gerente Administrativo</option>
                            <option value="Coordinador Area Sig">Coordinador Area Sig</option>
                            <option value="Contador Junior">Contador Junior</option>
                            <option value="Gestor Social">Gestor Social</option>
                            <option value="Logistico/Conduccion">Logistico/Conduccion</option>
                            <option value="Profesional Geologo">Profesional Geologo</option>
                            <option value="Profesional Biotico">Profesional Biotico</option>
                            <option value="Profesional Especializado">Profesional Especializado</option>
                            <option value="Asistente Administrativo">Asistente Administrativo</option>
                            <option value="Profesional Abiotico">Profesional Abiotico</option>
                            <option value="Asistente De Facturacion">Asistente De Facturacion</option>
                            <option value="Estructurador de Proyectos">Estructurador de Proyectos</option>
                            <option value="Gerente General">Gerente General</option>
                            <option value="Logistico">Logistico</option>
                            <option value="Auxiliar Tecnico/Alturas">Auxiliar Tecnico/Alturas</option>
                            <option value="Profesional Arqueologo">Profesional Arqueologo</option>
                            <option value="Tecnico Biologo">Tecnico Biologo</option>
                            <option value="Profesional Sig / Profesional De Aseguramiento De Información - Sig">
                                Profesional Sig / Profesional De Aseguramiento De Información - Sig</option>
                            <option value="Coordinador Administrativo">Coordinador Administrativo</option>
                            <option value="Tecnico Juridico">Tecnico Juridico</option>
                            <option value="Tecnologo Geologo">Tecnologo Geologo</option>
                            <option value="Auxiliar Recursos Humanos">Auxiliar Recursos Humanos</option>
                            <option value="Tecnico De Sistemas">Tecnico De Sistemas</option>
                            <option value="Subgerente">Subgerente</option>
                            <option value="Coordinador Social">Coordinador Social</option>
                            <option value="Coordinador De Compras Y Mantenimiento">Coordinador De Compras Y
                                Mantenimiento</option>
                            <option value="Coordinador HSEQ">Coordinador HSEQ</option>
                            <option value="Coordinador T.I.C.">Coordinador T.I.C.</option>
                            <option value="Profesional Biologo Mastozoologo">Profesional Biologo Mastozoologo</option>
                            <option value="Gestor Documental - Tecnico">Gestor Documental - Tecnico</option>
                            <option value="Contador">Contador</option>
                            <option value="Auxiliar Contable">Auxiliar Contable</option>
                            <option value="Coordinador Juridica">Coordinador Juridica</option>
                            <option value="Gerente Comercial">Gerente Comercial</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="cuenta" class="form-label fw-bold" style="color: #7ab82c;">Cuenta:</label>
                        <input type="text" id="cuenta" name="cuenta" class="form-control border-dark text-white text-center" style="background-color: #66c2c2;" required />
                    </div>
                    <div class="col-md-2">
                        <label for="region" class="form-label fw-bold" style="color: #7ab82c;">Región:</label>
                        <select id="region" name="region" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="Centro">Centro</option>
                            <option value="Norte">Norte</option>
                            <option value="Sur">Sur</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="ubicacion" class="form-label fw-bold" style="color: #7ab82c;">Ubicación:</label>
                        <select id="ubicacion" name="ubicacion" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="Bogotá">Bogotá</option>
                            <option value="Cartagena">Cartagena</option>
                            <option value="Ibague">Ibague</option>
                            <option value="Neiva">Neiva</option>
                            <option value="Puente Nacional">Puente Nacional</option>
                            <option value="Riohacha">Riohacha</option>
                            <option value="Santa Marta">Santa Marta</option>
                            <option value="Sogamoso">Sogamoso</option>
                            <option value="Tunja">Tunja</option>
                            <option value="Uribia">Uribia</option>
                            <option value="Valledupar ">Valledupar </option>
                        </select>
                        <br>
                    </div>

                    <hr>
                    <!--Aca empieza la parte para ingresar los datos del equipo asignado en el formulario principal-->
                    <h2 class="fw-bold">
                        Equipo:
                    </h2>

                    <div class="col-md-2">
                        <label for="codigo" class="form-label fw-bold" style="color: #7ab82c;">Codigo:</label>
                        <input type="text" id="codigo" name="codigo" class="form-control border-dark text-white text-center" style="background-color: #66c2c2;" required />
                    </div>

                    <div class="col-md-2">
                        <label for="tipo_computador" class="form-label fw-bold" style="color: #7ab82c;">Tipo de computador:</label>
                        <select id="tipo_computador" name="tipo_computador" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="Portatil">Portatil</option>
                            <option value="Mesa">Mesa</option>
                            <option value="Todo_en_uno">Todo en uno</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="marca" class="form-label fw-bold" style="color: #7ab82c;">Marca:</label>
                        <select id="marca" name="marca" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="Asus">Asus</option>
                            <option value="Lenovo">Lenovo</option>
                            <option value="Dell">Dell</option>
                            <option value="Hp">Hp</option>
                            <option value="Asus">Asus</option>
                            <option value="Huawei">Huawei</option>
                            <option value="Acer">Acer</option>
                            <option value="Toshiba">Toshiba</option>
                            <option value="Apple">Apple</option>
                            <option value="Alienware">Alienware</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="modelo" class="form-label fw-bold" style="color: #7ab82c;">Modelo:</label>
                        <input type="text" id="modelo" name="modelo" class="form-control text-center border-dark text-white" style="background-color: #66c2c2;" required />
                    </div>

                    <div class="col-md-2">
                        <label for="numero_serie" class="form-label fw-bold" style="color: #7ab82c;">Numero de serie:</label>
                        <input type="text" id="numero_serie" name="numero_serie" class="form-control text-center border-dark text-white" style="background-color: #66c2c2;" required />
                    </div>

                    <div class="col-md-4">
                        <label for="id_producto" class="form-label fw-bold" style="color: #7ab82c;">Id producto:</label>
                        <input type="text" id="id_producto" name="id_producto" class="form-control text-center border-dark text-white" style="background-color: #66c2c2;" required />
                    </div>

                    <div class="col-md-6">
                        <label for="tipo_sistema" class="form-label fw-bold" style="color: #7ab82c;">Tipo de sistema:</label>
                        <select id="tipo_sistema" name="tipo_sistema" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="Windows10 home">Windows 10 home</option>
                            <option value="Windows10 home single">Windows 10 home single</option>
                            <option value="Windows10 home single language">Windows 10 home single language</option>
                            <option value="Windows10 pro">Windows 10 pro</option>
                            <option value="windows11 home">windows 11 home</option>
                            <option value="windows11 home single">windows 11 home single</option>
                            <option value="windows11 home single language">windows 11 home single language</option>
                            <option value="windows11 pro">windows 11 pro</option>
                        </select>
                    </div>

                    <div class="col-md-9">
                        <label for="procesador" class="form-label fw-bold" style="color: #7ab82c;">Procesador:</label>
                        <input type="text" id="procesador" name="procesador" class="form-control text-center border-dark text-white" style="background-color: #66c2c2;" required />
                    </div>

                    <div class="col-md-1">
                        <label for="ram" class="form-label fw-bold" style="color: #7ab82c;">Ram:</label>
                        <select id="ram" name="ram" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="8Gb">8Gb</option>
                            <option value="12Gb">12Gb</option>
                            <option value="16Gb">16Gb</option>
                            <option value="32Gb">32Gb</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="disco_duro" class="form-label fw-bold" style="color: #7ab82c;">Disco duro:</label>
                        <select id="disco_duro" name="disco_duro" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="128Gb">128 Gb</option>
                            <option value="250Gb">250 Gb</option>
                            <option value="500Gb">500 Gb</option>
                            <option value="1TB">1 TB</option>
                            <option value="1Tb+250Gb">1 TB + 250Gb</option>
                            <option value="1Tb+500Gb">1 TB + 500Gb</option>
                        </select>
                    </div>

                    <div class="col-md-5">
                        <label for="gpu" class="form-label fw-bold" style="color: #7ab82c;">Gpu:</label>
                        <input type="text" id="gpu" name="gpu" class="form-control text-center border-dark text-white" style="background-color: #66c2c2;" required />
                    </div>

                    <div class="col-md-2">
                        <label for="display" class="form-label fw-bold" style="color: #7ab82c;">Display:</label>
                        <select id="display" name="display" class="form-select border-dark text-white" style="background-color: #66c2c2;" required>
                            <option value=""></option>
                            <option value="16  FHD">16 FHD</option>
                            <option value="14  HD">14 HD</option>
                            <option value="15,6 FHD">15,6 FHD</option>
                            <option value="14  IPS">14 IPS</option>
                            <option value="14  HD Display">14 HD</option>
                            <option value="17 ,3  FHD">17 ,3 FHD</option>
                            <option value="15,6  HD">15,6 HD</option>
                            <option value="14  FHD">14 FHD</option>
                            <option value="14  HD">14 HD</option>
                            <option value="15,6 LCD">15,6 LCD</option>
                            <option value="14 FHD">14 FHD</option>
                            <option value="15  Full HD">15 Full HD</option>
                            <option value="15,6  FHD">15,6 FHD</option>
                            <option value="14  FHD">14 FHD</option>
                            <option value="15,6  HD">15,6 HD</option>
                        </select>
                        <br>
                    </div>

                    <hr>
                    <!--Parte para ingresar la historia del equipo en el formulario principal-->
                    <h2 class="fw-bold">
                        Historial:
                    </h2>

                    <div class="col-md-12">
                        <label for="historial_asignacion" class="form-label fw-bold" style="color: #7ab82c;">Historial asignacion:</label>
                        <input type="text" id="historial_asignacion" name="historial_asignacion" class="form-control border-dark text-white" style="background-color: #66c2c2;" required />
                    </div>

                    <div class="col-md-12">
                        <label for="procesos_ejecutar" class="form-label fw-bold" style="color: #7ab82c;">Procesos a ejecutar:</label>
                        <input type="text" id="procesos_ejecutar" name="procesos_ejecutar" class="form-control border-dark text-white" style="background-color: #66c2c2;" required />
                    </div>

                    <div class="col-md-12">
                        <label for="observaciones" class="form-label fw-bold" style="color: #7ab82c;">Observaciones:</label>
                        <textarea name="observaciones" rows="3" class="form-control border-dark text-white" style="background-color: #66c2c2;" ></textarea>
                    </div>
                </div>
                <input type="submit" name="submit" value="Enviar" class="btn btn-lg btn-success mt-2" />
                <hr>
            </form>
        </div>
    </div>

<!--Tabla para los datos de la BDD-->

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-3 text-dark fw-bold" >Tabla de trabajadores:</h2>

                <!--Buscador para encontrar registros en especifico-->
                <div class="row">
                    <div class="col-xl-12">
                        <form action="{{route('example-app.buscar')}}" method="GET">
                            <div class="form-row">
                                <div class="col-sm-4 my-1">
                                <input type="text" class="form-control" name="texto" value="Inserta el ID o la cedula" onfocus="this.value='';">
                                </div>
                                <div class="col-auto my-1">
                                    <input type="submit" class="btn btn-success " value="Buscar">
                                </div>
                            </div>
                        </form>
                    <br>
                    </div>
                </div>

                <!--Encabezaco de la tabla para los datos de la BDD-->
                <div class="table-responsive overflow-auto" style="max-height:45vh;">
                    <table class="table table-light ">
                        <thead class="table-dark table-responsive ">
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Cédula</th>
                            <th>Cuenta</th>
                            <th>Ubicación</th>
                            <th>Area</th>
                            <th>Cargo</th>
                            <th>Codigo</th>
                            <th>Región</th>
                            <th>Oficina</th>
                            <th>Tipo de computador</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Número de serie</th>
                            <th>Id producto</th>
                            <th>Procesador</th>
                            <th>Ram</th>
                            <th>Disco duro</th>
                            <th>Gpu</th>
                            <th>Tipo de sistema</th>
                            <th>Display</th>
                            <th>Historial asignación</th>
                            <th>Procesos a ejecutar</th>
                            <th>Observaciones</th>
                            <th>Editar</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                            <!--Conexion con BDD con el proposito de mostrar los datos registrados haya -->
                            @foreach ($datos as $item)
                            <tr>
                                <td>{{$item->ID}}</td>
                                <td>{{$item->Nombre}}</td>
                                <td>{{$item->Cedula}}</td>
                                <td>{{$item->Cuenta}}</td>
                                <td>{{$item->Ubicacion}}</td>
                                <td>{{$item->Area}}</td>
                                <td>{{$item->Cargo}}</td>
                                <td>{{$item->Codigo}}</td>
                                <td>{{$item->Region}}</td>
                                <td>{{$item->Oficina}}</td>
                                <td>{{$item->Tipo_de_computador}}</td>
                                <td>{{$item->Marca}}</td>
                                <td>{{$item->Modelo}}</td>
                                <td>{{$item->Numero_de_serie}}</td>
                                <td>{{$item->Id_producto}}</td>
                                <td>{{$item->Procesador}}</td>
                                <td>{{$item->Ram}}</td>
                                <td>{{$item->Disco_duro}}</td>
                                <td>{{$item->Gpu}}</td>
                                <td>{{$item->Tipo_de_sistema}}</td>
                                <td>{{$item->Display}}</td>
                                <td>{{$item->Historial_asignacion}}</td>
                                <td>{{$item->Procesos_a_ejecutar}}</td>
                                <td>{{$item->Observaciones}}</td>
                                <td>
                                  <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->ID}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-nib fa-beat"></i></a>
                                </td>
  
                                <!-- Modal para modificar los datos de los registros de la BDD-->
                                <div class="modal fade" id="modalEditar{{$item->ID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog modal-xl modal-lg">
                                        <div class="modal-content" >
                                            <div class="modal-header " style="background-color: #f79a0e;">
                                            <h1 class="modal-title fs-3 fw-bold" id="exampleModalLabel">Modificar datos</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body" style="background-color: #f2f2f2;">
                                                <form class="col-md-8" action="{{ route('example-app.update') }}" method="post">

                                                    <!--Para proteger contra ataques CSRF-->
                                                    @csrf

                                                    <div class="row">

                                                        <div class="col-md-1">
                                                            <label for="id" class="form-label fw-bold">ID</label>
                                                            <input type="text" id="id" name="id" class="form-control border-dark text-white text-center" style="background-color:  #ff3333;" value="{{$item->ID}}" readonly >
                                                        </div>

                                                        <div class="col-md-2">
                                                            <label for="cedula" class="form-label fw-bold">Cédula:</label>
                                                            <input type="text" id="cedula" name="cedula" class="form-control border-dark text-white text-center" style="background-color:  #33ccff;" value="{{$item->Cedula}}"  />
                                                        </div>
                                                        <div class="col-md-7">
                                                            <label for="nombre" class="form-label fw-bold">Nombre:</label>
                                                            <input type="text" id="nombre" name="nombre" class="form-control border-dark  text-white text-center" style="background-color:  #33ccff;" value="{{$item->Nombre}}" />
                                                        </div>

                                                        <!--
                                                            Debido a que no se puede mirar en la base de datos y mostrar el dato directamenta al ser lista desplegable
                                                            se incluyo la parte donde en ves de coger los datos compara el dato puesto con las opciones y las muestra
                                                        -->
                                                        <div class="col-md-2">
                                                            <label for="oficina" class="form-label fw-bold">Oficina:</label>
                                                            <select id="oficina" name="oficina" class="form-select border-dark text-white" style="background-color: #33ccff;" >
                                                                <option value=""></option>
                                                                <option value="N_Rio" {{ $item->Oficina == 'N_Rio' ? 'selected' : '' }}>N_Rio</option>
                                                                <option value="S_Nei" {{ $item->Oficina == 'S_Nei' ? 'selected' : '' }}>S_Nei</option>
                                                                <option value="C_Téc" {{ $item->Oficina == 'C_Téc' ? 'selected' : '' }}>C_Téc</option>
                                                                <option value="C_Adm" {{ $item->Oficina == 'C_Adm' ? 'selected' : '' }}>C_Adm</option>
                                                                <option value="C_Hof" {{ $item->Oficina == 'C_Hof' ? 'selected' : '' }}>C_Hof</option>
                                                                <option value="N_Hof" {{ $item->Oficina == 'N_Hof' ? 'selected' : '' }}>N_Hof</option>
                                                                <option value="S_Hof" {{ $item->Oficina == 'S_Hof' ? 'selected' : '' }}>S_Hof</option>
                                                                <option value="N_Uri" {{ $item->Oficina == 'N_Uri' ? 'selected' : '' }}>N_Uri</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="col-md-2">
                                                            <label for="area" class="form-label fw-bold">Area:</label>
                                                            <select id="area" name="area" class="form-select border-dark text-white" style="background-color: #33ccff;" >
                                                                <option value=""></option>
                                                                <option value="Tecnica" {{ $item->Area == 'Tecnica' ? 'selected' : '' }}>Tecnica</option>
                                                                <option value="Contabilidad" {{ $item->Area == 'Contabilidad' ? 'selected' : '' }}>Contabilidad</option>
                                                                <option value="Administracion" {{ $item->Area == 'Administracion' ? 'selected' : '' }}>Administracion</option>
                                                                <option value="Geb_Centro" {{ $item->Area == 'Geb_Centro' ? 'selected' : '' }}>Geb_Centro</option>
                                                                <option value="Geb_Norte" {{ $item->Area == 'Geb_Norte' ? 'selected' : '' }}>Geb_Norte</option>
                                                                <option value="Gerencia" {{ $item->Area == 'Gerencia' ? 'selected' : '' }}>Gerencia</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="cargo" class="form-label fw-bold">Cargo:</label>
                                                            <select id="cargo" name="cargo" class="form-select border-dark text-white" style="background-color: #33ccff;" >
                                                                <option value=""></option>
                                                                <option value="Gerente" {{ $item->Cargo == 'Gerente' ? 'selected' : '' }}>Gerente</option>
                                                                <option value="Profesional Forestal" {{ $item->Cargo == 'Profesional Forestal' ? 'selected' : '' }}>Profesional Forestal</option>
                                                                <option value="Profesional Ambiental" {{ $item->Cargo == 'Profesional Ambiental' ? 'selected' : '' }}>Profesional Ambiental</option>
                                                                <option value="Gestor Predial" {{ $item->Cargo == 'Gestor Predial' ? 'selected' : '' }}>Gestor Predial</option>
                                                                <option value="Coordinador de Proyectos" {{ $item->Cargo == 'Coordinador de Proyectos' ? 'selected' : '' }}>Coordinador de Proyectos</option>
                                                                <option value="Auxiliar HSEQ" {{ $item->Cargo == 'Auxiliar HSEQ' ? 'selected' : '' }}>Auxiliar HSEQ</option>
                                                                <option value="Profesional Civil" {{ $item->Cargo == 'Profesional Civil' ? 'selected' : '' }}>Profesional Civil</option>
                                                                <option value="Profesional Social" {{ $item->Cargo == 'Profesional Social' ? 'selected' : '' }}>Profesional Social</option>
                                                                <option value="Gerente Tecnico" {{ $item->Cargo == 'Gerente Tecnico' ? 'selected' : '' }}>Gerente Tecnico</option>
                                                                <option value="Coordinador De Arqueología" {{ $item->Cargo == 'Coordinador De Arqueología' ? 'selected' : '' }}>Coordinador De Arqueología</option>
                                                                <option value="Profesional Biologo" {{ $item->Cargo == 'Profesional Biologo' ? 'selected' : '' }}>Profesional Biologo</option>
                                                                <option value="Tecnologo Social" {{ $item->Cargo == 'Tecnologo Social' ? 'selected' : '' }}>Tecnologo Social</option>
                                                                <option value="Auxiliar de Servicios Generales" {{ $item->Cargo == 'Auxiliar de Servicios Generales' ? 'selected' : '' }}>Auxiliar de Servicios Generales</option>
                                                                <option value="Coordinador Sig" {{ $item->Cargo == 'Coordinador Sig' ? 'selected' : '' }}>Coordinador Sig</option>
                                                                <option value="Gerente Administrativo" {{ $item->Cargo == 'Gerente Administrativo' ? 'selected' : '' }}>Gerente Administrativo</option>
                                                                <option value="Coordinador Area Sig" {{ $item->Cargo == 'Coordinador Area Sig' ? 'selected' : '' }}>Coordinador Area Sig</option>
                                                                <option value="Contador Junior" {{ $item->Cargo == 'Contador Junior' ? 'selected' : '' }}>Contador Junior</option>
                                                                <option value="Gestor Social" {{ $item->Cargo == 'Gestor Social' ? 'selected' : '' }}>Gestor Social</option>
                                                                <option value="Logistico/Conduccion" {{ $item->Cargo == 'Logistico/Conduccion' ? 'selected' : '' }}>Logistico/Conduccion</option>
                                                                <option value="Profesional Geologo" {{ $item->Cargo == 'Profesional Geologo' ? 'selected' : '' }}>Profesional Geologo</option>
                                                                <option value="Profesional Biotico" {{ $item->Cargo == 'Profesional Biotico' ? 'selected' : '' }}>Profesional Biotico</option>
                                                                <option value="Profesional Especializado" {{ $item->Cargo == 'Profesional Especializado' ? 'selected' : '' }}>Profesional Especializado</option>
                                                                <option value="Asistente Administrativo" {{ $item->Cargo == 'Asistente Administrativo' ? 'selected' : '' }}>Asistente Administrativo</option>
                                                                <option value="Profesional Abiotico" {{ $item->Cargo == 'Profesional Abiotico' ? 'selected' : '' }}>Profesional Abiotico</option>
                                                                <option value="Asistente De Facturacion" {{ $item->Cargo == 'Asistente De Facturacion' ? 'selected' : '' }}>Asistente De Facturacion</option>
                                                                <option value="Estructurador de Proyectos" {{ $item->Cargo == 'Estructurador de Proyectos' ? 'selected' : '' }}>Estructurador de Proyectos</option>
                                                                <option value="Gerente General" {{ $item->Cargo == 'Gerente General' ? 'selected' : '' }}>Gerente General</option>
                                                                <option value="Logistico" {{ $item->Cargo == 'Logistico' ? 'selected' : '' }}>Logistico</option>
                                                                <option value="Auxiliar Tecnico/Alturas" {{ $item->Cargo == 'Auxiliar Tecnico/Alturas' ? 'selected' : '' }}>Auxiliar Tecnico/Alturas</option>
                                                                <option value="Profesional Arqueologo" {{ $item->Cargo == 'Profesional Arqueologo' ? 'selected' : '' }}>Profesional Arqueologo</option>
                                                                <option value="Tecnico Biologo" {{ $item->Cargo == 'Tecnico Biologo' ? 'selected' : '' }}>Tecnico Biologo</option>
                                                                <option value="Profesional Sig / Profesional De Aseguramiento De Información - Sig" {{ $item->Cargo == 'Profesional Sig / Profesional De Aseguramiento De Información - Sig' ? 'selected' : '' }}>Profesional Sig / Profesional De Aseguramiento De Información - Sig</option>
                                                                <option value="Coordinador Administrativo" {{ $item->Cargo == 'Coordinador Administrativo' ? 'selected' : '' }}>Coordinador Administrativo</option>
                                                                <option value="Tecnico Juridico" {{ $item->Cargo == 'Tecnico Juridico' ? 'selected' : '' }}>Tecnico Juridico</option>
                                                                <option value="Tecnologo Geologo" {{ $item->Cargo == 'Tecnologo Geologo' ? 'selected' : '' }}>Tecnologo Geologo</option>
                                                                <option value="Auxiliar Recursos Humanos" {{ $item->Cargo == 'Auxiliar Recursos Humanos' ? 'selected' : '' }}>Auxiliar Recursos Humanos</option>
                                                                <option value="Tecnico De Sistemas" {{ $item->Cargo == 'Tecnico De Sistemas' ? 'selected' : '' }}>Tecnico De Sistemas</option>
                                                                <option value="Subgerente" {{ $item->Cargo == 'Subgerente' ? 'selected' : '' }}>Subgerente</option>
                                                                <option value="Coordinador Social" {{ $item->Cargo == 'Coordinador Social' ? 'selected' : '' }}>Coordinador Social</option>
                                                                <option value="Coordinador De Compras Y Mantenimiento" {{ $item->Cargo == 'Coordinador De Compras Y Mantenimiento' ? 'selected' : '' }}>Coordinador De Compras Y Mantenimiento</option>
                                                                <option value="Coordinador HSEQ" {{ $item->Cargo == 'Coordinador HSEQ' ? 'selected' : '' }}>Coordinador HSEQ</option>
                                                                <option value="Coordinador T.I.C." {{ $item->Cargo == 'Coordinador T.I.C.' ? 'selected' : '' }}>Coordinador T.I.C.</option>
                                                                <option value="Profesional Biologo Mastozoologo" {{ $item->Cargo == 'Profesional Biologo Mastozoologo' ? 'selected' : '' }}>Profesional Biologo Mastozoologo</option>
                                                                <option value="Gestor Documental - Tecnico" {{ $item->Cargo == 'Gestor Documental - Tecnico' ? 'selected' : '' }}>Gestor Documental - Tecnico</option>
                                                                <option value="Contador" {{ $item->Cargo == 'Contador' ? 'selected' : '' }}>Contador</option>
                                                                <option value="Auxiliar Contable" {{ $item->Cargo == 'Auxiliar Contable' ? 'selected' : '' }}>Auxiliar Contable</option>
                                                                <option value="Coordinador Juridica" {{ $item->Cargo == 'Coordinador Juridica' ? 'selected' : '' }}>Coordinador Juridica</option>
                                                                <option value="Gerente Comercial" {{ $item->Cargo == 'Gerente Comercial' ? 'selected' : '' }}>Gerente Comercial</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="col-md-4">
                                                            <label for="cuenta" class="form-label fw-bold">Cuenta:</label>
                                                            <input type="text" id="cuenta" name="cuenta" class="form-control border-dark text-white text-center" style="background-color:  #33ccff;"  value="{{$item->Cuenta}}"  />
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="region" class="form-label fw-bold">Región:</label>
                                                            <select id="region" name="region" class="form-select border-dark text-white" style="background-color: #33ccff;" >
                                                                <option value=""></option>
                                                                <option value="Centro" {{$item->Region == 'Centro' ? 'selected' : ''}}>Centro</option>
                                                                <option value="Norte" {{$item->Region == 'Norte' ? 'selected' : ''}}>Norte</option>
                                                                <option value="Sur" {{$item->Region == 'Sur' ? 'selected' : ''}}>Sur</option>
                                                            </select>                                                    
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="ubicacion" class="form-label fw-bold">Ubicación:</label>
                                                            <select id="ubicacion" name="ubicacion" class="form-select border-dark text-white" style="background-color: #33ccff;" >
                                                                <option value=""></option>
                                                                <option value="Bogotá" {{ $item->Ubicacion == 'Bogotá' ? 'selected' : '' }}>Bogotá</option>
                                                                <option value="Cartagena" {{ $item->Ubicacion == 'Cartagena' ? 'selected' : '' }}>Cartagena</option>
                                                                <option value="Ibague" {{ $item->Ubicacion == 'Ibague' ? 'selected' : '' }}>Ibague</option>
                                                                <option value="Neiva" {{ $item->Ubicacion == 'Neiva' ? 'selected' : '' }}>Neiva</option>
                                                                <option value="Puente Nacional" {{ $item->Ubicacion == 'Puente Nacional' ? 'selected' : '' }}>Puente Nacional</option>
                                                                <option value="Riohacha" {{ $item->Ubicacion == 'Riohacha' ? 'selected' : '' }}>Riohacha</option>
                                                                <option value="Santa Marta" {{ $item->Ubicacion == 'Santa Marta' ? 'selected' : '' }}>Santa Marta</option>
                                                                <option value="Sogamoso" {{ $item->Ubicacion == 'Sogamoso' ? 'selected' : '' }}>Sogamoso</option>
                                                                <option value="Tunja" {{ $item->Ubicacion == 'Tunja' ? 'selected' : '' }}>Tunja</option>
                                                                <option value="Uribia" {{ $item->Ubicacion == 'Uribia' ? 'selected' : '' }}>Uribia</option>
                                                                <option value="Valledupar" {{ $item->Ubicacion == 'Valledupar' ? 'selected' : '' }}>Valledupar</option>
                                                            </select>
                                                            <br>
                                                        </div>
                                                        
                                    
                                                        <!--Aca empieza la parte de los datos del equipo en el modal-->
                                                        <h2>
                                                            Equipo
                                                        </h2>
                                    
                                                        <div class="col-md-2">
                                                            <label for="codigo" class="form-label fw-bold">Codigo:</label>
                                                            <input type="text" id="codigo" name="codigo" class="form-control border-dark text-white text-center" style="background-color:  #33ccff;" value="{{$item->Codigo}}"  />
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="tipo_sistema" class="form-label fw-bold">Tipo de sistema:</label>
                                                            <select id="tipo_sistema" name="tipo_sistema" class="form-select border-dark text-white" style="background-color: #33ccff;" >
                                                                <option value=""></option>
                                                                <option value="Windows10 home" {{ $item->Tipo_de_sistema == 'Windows10 home' ? 'selected' : '' }}>Windows 10 home</option>
                                                                <option value="Windows10 home single" {{ $item->Tipo_de_sistema == 'Windows10 home single' ? 'selected' : '' }}>Windows 10 home single</option>
                                                                <option value="Windows10 home single language" {{ $item->Tipo_de_sistema == 'Windows10 home single language' ? 'selected' : '' }}>Windows 10 home single language</option>
                                                                <option value="Windows10 pro" {{ $item->Tipo_de_sistema == 'Windows10 pro' ? 'selected' : '' }}>Windows 10 pro</option>
                                                                <option value="windows11 home" {{ $item->Tipo_de_sistema == 'windows11 home' ? 'selected' : '' }}>windows 11 home</option>
                                                                <option value="windows11 home single" {{ $item->Tipo_de_sistema == 'windows11 home single' ? 'selected' : '' }}>windows 11 home single</option>
                                                                <option value="windows11 home single language" {{ $item->Tipo_de_sistema == 'windows11 home single language' ? 'selected' : '' }}>windows 11 home single language</option>
                                                                <option value="windows11 pro" {{ $item->Tipo_de_sistema == 'windows11 pro' ? 'selected' : '' }}>windows 11 pro</option>
                                                            </select>
                                                        </div>
                                                        
                                    
                                                        <div class="col-md-2">
                                                            <label for="ram" class="form-label fw-bold">Ram:</label>
                                                            <select id="ram" name="ram" class="form-select border-dark text-white" style="background-color: #33ccff;" >
                                                                <option value=""></option>
                                                                <option value="8Gb" {{ $item->Ram == '8Gb' ? 'selected' : '' }}>8Gb</option>
                                                                <option value="12Gb" {{ $item->Ram == '12Gb' ? 'selected' : '' }}>12Gb</option>
                                                                <option value="16Gb" {{ $item->Ram == '16Gb' ? 'selected' : '' }}>16Gb</option>
                                                                <option value="32Gb" {{ $item->Ram == '32Gb' ? 'selected' : '' }}>32Gb</option>
                                                            </select>
                                                        </div>
                                                        
                                    
                                                        <div class="col-md-2">
                                                            <label for="disco_duro" class="form-label fw-bold">Disco duro:</label>
                                                            <select id="disco_duro" name="disco_duro" class="form-select border-dark text-white" style="background-color: #33ccff;" >
                                                                <option value=""></option>
                                                                <option value="128Gb" {{ $item->Disco_duro == '128Gb' ? 'selected' : '' }}>128 Gb</option>
                                                                <option value="250Gb" {{ $item->Disco_duro == '250Gb' ? 'selected' : '' }}>250 Gb</option>
                                                                <option value="500Gb" {{ $item->Disco_duro == '500Gb' ? 'selected' : '' }}>500 Gb</option>
                                                                <option value="1TB" {{ $item->Disco_duro == '1TB' ? 'selected' : '' }}>1 TB</option>
                                                                <option value="1Tb+250Gb" {{ $item->Disco_duro == '1Tb+250Gb' ? 'selected' : '' }}>1 TB + 250Gb</option>
                                                                <option value="1Tb+500Gb" {{ $item->Disco_duro == '1Tb+500Gb' ? 'selected' : '' }}>1 TB + 500Gb</option>
                                                            </select>
                                                            <br>
                                                        </div>
                                                        
                                                        <!--Aca empieza la parte del historial del equipo en el modal-->

                                                        <h2>
                                                            Historial
                                                        </h2>
                                    
                                                        <div class="col-md-12">
                                                            <label for="historial_asignacion" class="form-label fw-bold">Historial asignacion:</label>
                                                            <input type="text" id="historial_asignacion" name="historial_asignacion" class="form-control border-dark text-white" style="background-color:  #33ccff;" value="{{$item->Historial_asignacion}}"  />
                                                        </div>
                                    
                                                        <div class="col-md-12">
                                                            <label for="procesos_ejecutar" class="form-label fw-bold">Procesos a ejecutar:</label>
                                                            <input type="text" id="procesos_ejecutar" name="procesos_ejecutar" class="form-control border-dark text-white" style="background-color:  #33ccff;" value="{{$item->Procesos_a_ejecutar}}"  />
                                                        </div>
                                    
                                                        <div class="col-md-12">
                                                            <label for="observaciones" class="form-label fw-bold">Observaciones:</label>
                                                            <textarea name="observaciones" rows="3" class="form-control border-dark text-white" style="background-color: #33ccff;" >{{$item->Observaciones}}</textarea>
                                                        </div>
                                                        
                                                        <br><br>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-success">Guardar cambios</button>
                                                            </div>
                                                    </div>           
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                          
                        </tbody>
                      </table>
                    </div>             
                  </div>
                </div>
            </div>
    </div>
    <br>
    <br>
    <br>

<!--Funciones del boostrap para el funcionamiento del modal-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>