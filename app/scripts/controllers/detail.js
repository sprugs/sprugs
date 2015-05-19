'use strict';

/**
 * @ngdoc function
 * @name sportApp.controller:DetailsCtrl
 * @description
 * # DetailsCtrl
 * Controller of the sportApp
 */
var app = angular.module('sportApp');

app.controller('DetailsCtrl', function ($scope,$http,$sce) {

	$scope.article = {};
	console.log($sce);

	$http.get('scripts/json/details.json')
	.success(function(data){
		$scope.article.title 		= data.title;
		$scope.article.author 		= data.author;
		$scope.article.content 		= $sce.trustAsHtml(data.content)
		
	})
	.error(function(error){
		
	});

})
  
