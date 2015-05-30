'use strict';

/**
 * @ngdoc function
 * @name sportApp.controller:CreateCtrl
 * @description
 * # CreateCtrl
 * Controller of the sportApp
 */
var app = angular.module('sportApp');

app.controller('CreateCtrl', function ($scope,$http) {

	$scope.$root.currentPage = "Create";
	$scope.utils = {
		'parseQuotes' 	: function(content){
			if(content && (typeof content === 'string')){
				content = content.replace(/"/g,"'");
				return content;
			}
		}
	};
	$scope.process = {
		'createContent' 		: function(title,content){
			content = $scope.utils.parseQuotes(content);
			console.debug(content);

			var request 	= {
				'title' 		: title,
				'description' 	: content
			};


			$http.post('api/createContent.php',request).success(function(data){

			}).error(function(error){

			});
		}
	};

});
