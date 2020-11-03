<form name="MiForm" id="MiForm" method="post" action="cargar_fotos.php" enctype="multipart/form-data">
        <h4 >Seleccione imagen a cargar</h4>
        <div >
          <label >Archivos</label>
          <div >
            Nombre <input type="text"  name="nombre" multiple>
          </div>
          <div >
            <input type="file"  name="image" multiple>
          </div>
          <button name="submit">Cargar Imagen</button>
        </div>
