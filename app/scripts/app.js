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
    'ngTouch',
    'ui.tinymce',
    'textAngular'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/home', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl'
      })
      .when('/detail/:type/:id', {
        templateUrl: 'views/details.html',
        controller: 'DetailsCtrl'
      })
      .when('/create',{
        templateUrl: 'views/create.html',
        controller:  'CreateCtrl'
      })
      .when('/googleeecd4edb9fdbd86e.html',{
        templateUrl: '/googleeecd4edb9fdbd86e.html'
      })
      .otherwise({
        redirectTo: '/home'
      });
  });
