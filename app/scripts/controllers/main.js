'use strict';

/**
 * @ngdoc function
 * @name sportApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sportApp
 */
var app = angular.module('sportApp');

app.controller('MainCtrl', function ($scope,$http) {
	$http.get('/api/fetchContents.php')
	.success(function(data){
		$scope.editorsPick 	= data;
		$scope.popular 		= data;
		$scope.latest 		= data;
	})
	.error(function(error){
		
	});

})
  
