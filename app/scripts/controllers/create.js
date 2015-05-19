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

	$scope.process = {
		"createContent" 		: function(title,content){
			console.debug("hello");
			var request 	= {
				"title" 		: title,
				"descriptipn" 	: content
			};


			$http.post('api/createContent.php',request).success(function(data){

			}).error(function(error){

			});
		},
		"word" 		: function(){
			alert();
		}
	};

})
  
