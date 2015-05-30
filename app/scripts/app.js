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
    'textAngular',
    'oauth'
  ])
  .config(function ($routeProvider,$locationProvider) {
    //$locationProvider.html5Mode(true).hashPrefix('!');
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
      .when('/login',{
        templateUrl: 'views/login.html',
        controller:  'AuthCtrl'
      })
      .when('/googleeecd4edb9fdbd86e.html',{
        templateUrl: '/googleeecd4edb9fdbd86e.html'
      })
      .when('/access_token=:accessToken', {
        template: '',
        controller: function ($location, AccessToken) {
          var hash = $location.path().substr(1);
          AccessToken.setTokenFromString(hash);
          $location.path('/');
          $location.replace();
        }
      })
      .otherwise({
        redirectTo: '/home'
      });
  });
