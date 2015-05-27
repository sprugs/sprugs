'use strict';

/**
 * @ngdoc function
 * @name sportApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sportApp
 */
var app = angular.module('sportApp');

/*app.factory('fetchContents',function($resource){
	return $resource('api/fetchContents.php',{},{
			query: {
			 	method:'GET',
			 	isArray:true
			}
	});
});*/

app.controller('MainCtrl', function ($scope,$http,$location) {
	
	$scope.currentPage = "Home";
	$http.get('api/fetchContents.php')
	//$http.get('scripts/json/data.json')
	.success(function(data){
		$scope.editorsPick 	= data;
		$scope.popular 		= data;
		$scope.latest 		= data;
	})
	.error(function(error){
		
	});

	$scope.process = {
		'navigateToDetails' : function(content){
			$location.url('/detail/detail/'+content.id);
		}
	}

	

});
  
