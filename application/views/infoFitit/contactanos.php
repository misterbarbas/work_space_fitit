<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="http://localhost/fitit_v2/css/style.css">
</head>

<style>

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #FF4548;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
textarea {
  resize: none;
}

</style>

<br><br><br><br><br><br><br>
<div class="container">
  <h1 class="text-center font-weight-bold text-uppercase" style="color:#424242; font-size: 50px;">Contacto</h1>
  <br>
  <div class="jumbotron">
    <form action="">
      <label for="fname">Nombre</label>
      <input type="text" id="fname" name="firstname" placeholder="Escribe tu nombre..">

      <label for="lname">Apellido</label>
      <input type="text" id="lname" name="lastname" placeholder="Escribe tu apellido..">

      <label for="email">E-mail</label>
      <input type="text" id="email" name="email" placeholder="ejemplo@ejemplo.com">

      <label for="subject">Motivo</label>
      <textarea id="subject" name="subject" placeholder="Escribe el motivo.." style="height:200px"></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<br><br><br><br>
