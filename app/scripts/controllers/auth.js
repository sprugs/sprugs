'use strict';

/**
 * @ngdoc function
 * @name sportApp.controller:AuthCtrl
 * @description
 * # AuthCtrl
 * Controller of the sportApp
 */
angular.module('sportApp')
	 .service('Auth',function($resource){
	 	return $resource('/api/auth.php?login=1',{},{
	 		'query':{
	 			'method' : 'POST',
	 			'isArray': false,
	 			'params' : {}
	 		}
	 	})
	 })
	 .controller('AuthCtrl', function ($scope,$routeParams,Auth) {
	    $scope.process = {
	    	'login' 	: function(uname,passwd){
	    		var request = {
	    			'uname' : uname,
	    			'passwd': passwd 
	    		};
	    		Auth.query(request,function(data){
	    			console.log(data);
	    		},function(error){
	    			console.log(error);
	    		})

	    	},
	    	'logout' 	: function(){

	    	}
	 	}
  });
