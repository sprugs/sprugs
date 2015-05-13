'use strict';

/**
 * @ngdoc overview
 * @name sportApp
 * @description
 * # sportApp
 *
 * Main module of the application.
 */
angular
  .module('sportApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl'
      })
      .when('/detail', {
        templateUrl: 'views/detail.html',
        controller: 'DetailsCtrl'
      })
      .when('/googleeecd4edb9fdbd86e.html',{
        templateUrl: '/googleeecd4edb9fdbd86e.html'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
