'use strict';

/**
 * @ngdoc function
 * @name sportApp.controller:DetailsCtrl
 * @description
 * # DetailsCtrl
 * Controller of the sportApp
 */
var app = angular.module('sportApp');

app.controller('DetailsCtrl', function ($scope,$http,$sce,$routeParams) {

	$scope.detail = $routeParams;
	$scope.article = {};
	console.log($sce);

	//$http.get('scripts/json/details.json');
	$http.get('api/fetchContents.php?id='+$scope.detail.id+'&type='+$scope.detail.type)
	.success(function(data){
		$scope.article.title 		= data[0].title;
		$scope.article.author 		= data[0].author;
		$scope.article.content 		= $sce.trustAsHtml(data[0].description);
		
	})
	.error(function(error){
		
	});

});
  
