
<HTML>
<BODY>
<style type="text/css">
     .sortorder:after {
  content: '\25b2';   
}
.sortorder.reverse:after {
  content: '\25bc';   
}

.Pendiente{
    color: #FFDB58;
}

.Inactivo{
    color: red;
}
</style>
<meta charset="utf-8"> 

<div id="contenedor"></div></br>
<div id="contenedor2"></div></br>
<div id="contenedor3"></div></br>
<div id="contenedor4"></div></br>


<table class="table table-bordered table-striped">
  <thead>
                                <tr>
                                <th><ng-click ng-click="sortBy('id')">id<span class="sortorder" ng-show="propertyName === 'id'" ng-class="{reverse: reverse}"></span></ng-click></th>

                                <th><ng-click ng-click="sortBy('direccion')">direccion<span class="sortorder" ng-show="propertyName === 'direccion'" ng-class="{reverse: reverse}"></span></ng-click></th>
                                <th>Numero de contacto</th>

                                <th><ng-click ng-click="sortBy('estado')">estado<span class="sortorder" ng-show="propertyName === 'estado'" ng-class="{reverse: reverse}"></span></ng-click></th>
                                    
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="Hi in Historico | orderBy:propertyName:reverse">
                                    <td>{{Hi.id}}</td>
                                    <td>{{Hi.tipo}}</td>
                                    <td>{{Al.num_contacto}}</td>
                                    <td ng-class="{{Al.estado | filterEstadoAlarma}}">{{Al.estado | filterEstadoAlarma}}</td>
                                    <td><button ng-click="eliminar($index, cu.id_curso)" class="btn btn-green btn-pequeno has-tooltip redesign-check">eliminar</button></td>
                                </tr>
                            </tbody>
</table>



    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->

<script>




</script>   
</BODY>

</html>