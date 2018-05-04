avap.controller('avap_factura', ['$scope', '$http', function($scope,$http) {
      
      $scope.repuestosArr = [];
      // getRepuesto();

      // function getRepuesto(){
      //   $http({
      //     method: 'GET',
      //     url:'../controllers/almacen/allAmacen',
      //       }).then( function(response) {
      //           //$scope.repuestos = response.data;
      //           console.log(response.data);
      //       });
      // }

        $scope.repuestos = [
          {
            id_repuesto: 1, marca: 'Ford', descripcion:'Marca Ford', precio_unitario:553.00,stock: 5 
          },
          {
            id_repuesto: 2, marca: 'Fiat', descripcion:'Marca Fiat', precio_unitario:22.00,stock: 2 
          },
          {
            id_repuesto: 3, marca: 'Chevrolet', descripcion:'Marca Chevrolet', precio_unitario:99.00,stock: 5 
          },
        ];
      
      $scope.addTable = function(item){
        //console.log(item);
         var newItem = {
          'id_repuesto':item.id_repuesto, 
          'marca': item.marca, 
          'descripcion': item.descripcion,
          'precio_unitario': item.precio_unitario,
          'stock': item.stock
        };
    
      $scope.repuestos.push(newItem);
      console.log(repuestos);
      }
    //   $scope.setName = function(nombres){
    //     $http({
    //         method: "POST",
    //         url: 'api/Producto/newProducto.php',  
    //         data: {
    //           'name' : nombres.name,
    //           'last' : nombres.last         
    //         },
    //         headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    //     }).then(function(data) {
    //           console.log('Ok');
    //           getNames();
    //     }, function(data) { 
    //           console.log('No');
    //     });
    // }
}]);