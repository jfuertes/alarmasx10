
window.map="";
/**
 * List Controller
 * @version v0.2.2 - 2015-04-23 * @link http://csluni.org
 * @author Eisson Alipio <eisson.alipio@gmail.com>
 * @license MIT License, http://www.opensource.org/licenses/MIT
 */
(function(){
  'use strict';

  angular.module('Controllers', ['uiGmapgoogle-maps'])

  .filter('estadoFilter', function(){
  return function(id){
    var estados = ['Inactivo', 'Activo'];
      return estados[id];
    };
  })
   .filter('filterEstadoAlarma', function(){
  return function(id){
    var estados = ['Inactivo', 'Pendiente', 'Activo'];
      return estados[id];
    };
  })

  
  
  .controller('TabsController',['$scope', '$route','$http', function($scope, $route, $http){
    ////console.log($route.current);
     $scope.$route = $route;
  }])

  .controller('historicoController',['$scope', '$route','$http', function($scope, $route, $http){
    ////console.log($route.current);

     $scope.$route = $route;

       $scope.getHistorico= function(){
             $http.post('api/getHistorico.php' )
                .success(function(data) {
                  console.log(data);
                  $scope.Historico=data;
                })
                .error(function(data) {
                  console.log('Error: ' + data);
                  });
         };
         $scope.getHistorico();

      
         //ordenar tabla bonito

               $scope.propertyName = 'id';
          $scope.reverse = false;
          

          $scope.sortBy = function(propertyName) {
            //alert(propertyName);
            $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
            $scope.propertyName = propertyName;
          };
      //==============colores de ng-class
      $scope.Pendiente="Pendiente"
      $scope.Activo="Activo"
      $scope.Inactivo="Inactivo"



  }])

.controller('CentrosController',['$scope', '$http', function($scope, $http){
  }])

  .controller('VacunasController',['$scope', '$http', '$route', function ($scope, $http, $route) {
      $scope.init = function(){
        document.title = "Vacunas";
        ////console.log($route.current.activetab);
        $route.current.activetab ? $scope.$route = $route : null

        $http.post ('administracion/api/getVacunas.php')
            .success(function(data) {
                    $scope.vacunas = data;
                    //console.log(data);
                })
            .error(function(data) {
                    //console.log('Error: ' + data);
            });
      }
      $scope.init();
  }])

  .controller('AcercaController',['$scope', '$http', function($scope, $http, $route){
    console.log("entro a controlador");

     $scope.$route = $route;

       $scope.getAlarmas= function(){
        console.log("ejecuta funcion get alarma")
             $http.post('api/getAlarmas.php' )
                .success(function(data) {
                  console.log(data);
                  $scope.Alarmas=data;
                })
                .error(function(data) {
                  console.log('Error: ' + data);
                  });
         };
         
         $scope.getAlarmas();
        setInterval(function(){
          $scope.getAlarmas();
        }, 30000)
         //ordenar tabla bonito

               $scope.propertyName = 'id';
          $scope.reverse = false;
          

          $scope.sortBy = function(propertyName) {
            //alert(propertyName);
            $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
            $scope.propertyName = propertyName;
          };
      //==============colores de ng-class
      $scope.Pendiente="Pendiente"
      $scope.Activo="Activo"
      $scope.Inactivo="Inactivo"


    //
  }])

})();
