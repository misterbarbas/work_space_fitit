<style>

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    margin-top: 30px;
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* Modal Header */
.modal-header {
    padding: 15px;
    background-color: white;
}

/* Modal Body */
.modal-body {
  padding: 15px 30px;
  background-color: #E9ECEF;
}

/* Modal Footer */
.modal-footer {
    padding: 2px 16px;
    background-color: #E9ECEF;
    color: black;
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@keyframes animatetop {
    from {top: -300px; opacity: 0}
    to {top: 0; opacity: 1}
}

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

<br><br><br><br><br><br><br><br>

<div>

  <!-- Trigger/Open The Modal -->
  <span style="font-weight: bold;"><button style="color: black; border: none; background-color: inherit; cursor:pointer" id="myBtn">Contacto</button></span>

</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1 class="font-weight-bold" style="color:#424242; font-size: 50px; text-align: center">CONTACTO</h1>
    </div>
    <div class="modal-body">
      <div>
        <form action="">
          <label for="fname">Nombre</label>
          <input type="text" id="fname" name="firstname" placeholder="Escribe tu nombre..">

          <label for="lname">Apellido</label>
          <input type="text" id="lname" name="lastname" placeholder="Escribe tu apellido..">

          <label for="email">E-mail</label>
          <input type="text" id="email" name="email" placeholder="ejemplo@ejemplo.com">

          <label for="subject">Motivo</label>
          <textarea id="subject" name="subject" placeholder="Escribe el motivo.." style="height:150px"></textarea>

          <input type="submit" value="Enviar">
        </form>
      </div>
    </div>
    <!--<div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>-->
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
