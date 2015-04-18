'use strict';

/**
 * @ngdoc function
 * @name sportApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the sportApp
 */
angular.module('sportApp')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
