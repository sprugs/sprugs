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
	$http.get('../scripts/json/data.json')
	.success(function(data){
		$scope.editorsPick 	= data.editorsPick;
		$scope.popular 		= data.popular;
		$scope.latest 		= data.latest;
	})
	.error(function(error){
		
	});

})
  
