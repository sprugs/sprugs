'use strict';

/**
 * @ngdoc function
 * @name sportApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sportApp
 */
angular.module('sportApp')
  .controller('MainCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
