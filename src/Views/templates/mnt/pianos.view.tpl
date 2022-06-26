<h1>CRUD de Pianos - Andrea Aleman Quinto</h1>
<section>

</section>
<section>
  <table>
    <thead>
      <tr>
        <th>Id Piano</th>
        <th>Descripción</th>
        <th>Biografia</th>
        <th>Sales</th>
        <th>URL</th>
        <th>Precio</th>
        <th>Estado</th>
        <th><a href="index.php?page=Mnt-Piano&mode=INS">Nuevo</a></th>
      </tr>
    </thead>
    <tbody>
      {{foreach Pianos}}
      <tr>
        <td>{{invPrdCodInt}}</td>
        <td> <a href="index.php?page=Mnt-Piano&mode=DSP&id={{pianoid}}">{{pianodsc}}</a></td>
        <td>{{pianobio}}</td> <!--Nombres de los campos en la BD-->
        <td>{{pianosales}}</td>
        <td>{{pianoimguri}}</td>
        <td>{{pianoprice}}</td>
        <td>{{pianoest}}</td>
        <td>
          <a href="index.php?page=Mnt-Piano&mode=UPD&id={{pianoid}}">Editar</a>
          &NonBreakingSpace;
          <a href="index.php?page=Mnt-Piano&mode=DEL&id={{pianoid}}">Eliminar</a>
        </td>
      </tr>
      {{endfor Pianos}}
    </tbody>
  </table>
</section>