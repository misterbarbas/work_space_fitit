<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="http://localhost/fitit_v2/css/style.css">
</head>

<script>

    var selectAsesoramiento = false;
    var selectObjetivo = false;

    function asesoramiento(option) {
        if (selectAsesoramiento) {
            document.getElementById(option).setAttribute("class", "back");
            selectAsesoramiento = false;
            document.getElementById('objetivo').setAttribute('class', 'novisible');
        }else {
            document.getElementById(option).setAttribute("class", "select");
            selectAsesoramiento = true;
            document.getElementById('objetivo').setAttribute('class', 'visible');
        }
        switch(option) {
            case 'aNutricional':
                document.getElementById('aNutDep').setAttribute("class", "back");
                document.getElementById('aDeportivo').setAttribute("class", "back");
                break;
            case 'aNutDep':
                document.getElementById('aDeportivo').setAttribute("class", "back");
                document.getElementById('aNutricional').setAttribute("class", "back");
                break;
            case 'aDeportivo':
                document.getElementById('aNutricional').setAttribute("class", "back");
                document.getElementById('aNutDep').setAttribute("class", "back");
                break;
        }
    }
    function objetivo(option) {
        if (selectObjetivo) {
            document.getElementById(option).setAttribute("class", "back");
            selectObjetivo = false;
            document.getElementById('duracion').setAttribute('class', 'novisible');
        }else {
            document.getElementById(option).setAttribute("class", "select");
            selectObjetivo = true;
            document.getElementById('duracion').setAttribute('class', 'visible');
        }
        document.getElementById(option).setAttribute("class", "select");
        switch(option) {
            case 'oDefinicion':
                document.getElementById('oHipertrofia').setAttribute("class", "back");
                document.getElementById('oDefHip').setAttribute("class", "back");
                document.getElementById('oFuerza').setAttribute("class", "back");
                break;
            case 'oHipertrofia':
                document.getElementById('oDefinicion').setAttribute("class", "back");
                document.getElementById('oDefHip').setAttribute("class", "back");
                document.getElementById('oFuerza').setAttribute("class", "back");
                break;
            case 'oDefHip':
                document.getElementById('oHipertrofia').setAttribute("class", "back");
                document.getElementById('oDefinicion').setAttribute("class", "back");
                document.getElementById('oFuerza').setAttribute("class", "back");
                break;
            case 'oFuerza':
                document.getElementById('oHipertrofia').setAttribute("class", "back");
                document.getElementById('oDefinicion').setAttribute("class", "back");
                document.getElementById('oDefHip').setAttribute("class", "back");
                break;
        }
    }

</script>

<style type="text/css">

  .bold {
    font-weight: bold;
  }
    .back {
        text-align: center;
        padding: 5px;
        background: #FF4548;
        color: white;
        border-radius: 10px;
        margin: 5px;
        cursor: pointer;
    }
    .back:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .select {
        text-align: center;
        padding: 5px;
        background: white;
        color: #FF4548;
        border-radius: 5px;
        margin: 5px;
        cursor: pointer;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .center {
        text-align: center;
    }
    .novisible {
        visibility: hidden;
    }
    .visible {
      visibility: visible;
    }

</style>

<br><br><br><br><br><br>

  <div class="container">
    <h3><span class="bold">PERSONALIZA</span> tu asesoramiento</h3>
    <div class="jumbotron">
        <div id="asesoramiento">
            <div class="center bold">Tipo de asesoramiento</div>
            <br>
            <div class="row justify-content-center">
                <div id="aNutricional" class="col-sm-3 back" onclick="asesoramiento('aNutricional')">
                    ASESORAMIENTO NUTRICIONAL
                </div>
                <div id="aNutDep" class="col-sm-3 back" onclick="asesoramiento('aNutDep')">
                    NUTRICIONAL + DEPORTIVO
                </div>
                <div id="aDeportivo" class="col-sm-3 back" onclick="asesoramiento('aDeportivo')">
                    ASESORAMIENTO DEPORTIVO
                </div>
            </div>
        </div>
        <br>
        <div id="objetivo" class="novisible">
            <hr>
            <div class="center bold">Objetivo</div>
            <br>
            <div class="row justify-content-center">
                <div id="oDefinicion" class="col-sm-2 back" onclick="objetivo('oDefinicion')">
                    Definición
                </div>
                <div id="oHipertrofia" class="col-sm-2 back" onclick="objetivo('oHipertrofia')">
                    Hipertrofia
                </div>
                <div id="oDefHip" class="col-sm-2 back" onclick="objetivo('oDefHip')">
                    Hipertrofia + Definición
                </div>
                <div id="oFuerza" class="col-sm-2 back" onclick="objetivo('oFuerza')">
                    Ganancia de Fuerza
                </div>
            </div>
        </div>
        <br>
        <div id="duracion" class="novisible">
            <hr>
            <div class="center bold">Duración</div>
            <br>
            <div class="row justify-content-center">
                <form>
                    <input class="form-control" id="meses" placeholder="¿Cuántos meses?">
                </form>
            </div>
        </div>
    </div>
      <br><br><br>
  </div>
