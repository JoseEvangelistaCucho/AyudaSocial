<!DOCTYPE html>    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css"/>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- Css-->
    <link href="css/style.css" rel="stylesheet" />
    <title></title>
</head>
<body background:src="http://localhost/semana1/img/fondoProyecto.jpg">
  
    
  <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="http://localhost/semana1/img/user.png"/>
                </div>
             <form id="form1" class="col-12" >
                    <div class="form-group" id="user-group">
                        
                        <input type="text" class="form-control" placeholder="Nombre de Usuario"   ></input>
                    </div>
                    <div class="form-group" id="contrasena-group">
                         <input type="text" class="form-control" placeholder="Contrasena"  ID="txtContraseña" ></input>
                    </div>                 
                   <i>
                       <button class="btn btn-primary" ID="Button1" text="Ingresar"  OnClick="Button2_Click">Ingresar</button>
                   </i>                
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>
                  <div class="col-12 forgot">
                    <a href="#">Registrarse Ahora!!</a>
            </div>
        </div>
    </div>
</div>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>