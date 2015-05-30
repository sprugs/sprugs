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

	$scope.$on('oauth:login', function(event, token) {
	  console.log('Authorized third party app with token', token.access_token);
	  alert("login");
	});

	$scope.$on('oauth:logout', function(event) {
	  console.log('The user has signed out');
	});

	$scope.$on('oauth:loggedOut', function(event) {
	  console.log('The user is not signed in');
	});

	$scope.$on('oauth:denied', function(event) {
	  console.log('The user did not authorize the third party app');
	});

	$scope.$on('oauth:expired', function(event) {
	  console.log('The access token is expired. Please refresh.');
	});

	$scope.$on('oauth:profile', function(profile) {
	  console.log('User profile data retrieved: ', profile);
	});

	

});
  
