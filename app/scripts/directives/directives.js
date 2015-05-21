'use strict';

/**
 * @ngdoc function
 * @name sportApp.directives
 * @description
 * # Directives
 * Directives of the sportApp
 */
var app = angular.module('sportApp');

app.directive('navigateToDetails', function () {
	var definition = {
		'restrict' 			: 'A',
		'scope' 	 		: false,
		'controller' 		: function($scope,$element,$attrs,$location){
			window.test = $location;
			var obj = $scope[$attrs.detailObj];
			$element.on('click',function(){
				alert('/details?type=&id=');
				$location.url('/details?type=&id=');
			});
		}
	};
	return definition;
});