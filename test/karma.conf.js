// Karma configuration
// http://karma-runner.github.io/0.12/config/configuration-file.html
// Generated on 2015-04-18 using
// generator-karma 0.9.0

module.exports = function(config) {
  'use strict';

  config.set({
    // enable / disable watching file and executing tests whenever any file changes
    autoWatch: true,

    // base path, that will be used to resolve files and exclude
    basePath: '../',

    // testing framework to use (jasmine/mocha/qunit/...)
    frameworks: ['jasmine'],

    // list of files / patterns to load in the browser
    files: [
      // bower:js
      'app/scripts/vendors/bower_components/jquery/dist/jquery.js',
      'app/scripts/vendors/bower_components/angular/angular.js',
      'app/scripts/vendors/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
      'app/scripts/vendors/bower_components/angular-animate/angular-animate.js',
      'app/scripts/vendors/bower_components/angular-cookies/angular-cookies.js',
      'app/scripts/vendors/bower_components/angular-resource/angular-resource.js',
      'app/scripts/vendors/bower_components/angular-route/angular-route.js',
      'app/scripts/vendors/bower_components/angular-touch/angular-touch.js',
      'app/scripts/vendors/bower_components/rangy/rangy-core.js',
      'app/scripts/vendors/bower_components/rangy/rangy-classapplier.js',
      'app/scripts/vendors/bower_components/rangy/rangy-highlighter.js',
      'app/scripts/vendors/bower_components/rangy/rangy-selectionsaverestore.js',
      'app/scripts/vendors/bower_components/rangy/rangy-serializer.js',
      'app/scripts/vendors/bower_components/rangy/rangy-textrange.js',
      'app/scripts/vendors/bower_components/textAngular/src/textAngular.js',
      'app/scripts/vendors/bower_components/textAngular/src/textAngular-sanitize.js',
      'app/scripts/vendors/bower_components/textAngular/src/textAngularSetup.js',
      'app/scripts/vendors/bower_components/angular-mocks/angular-mocks.js',
      // endbower
      'app/scripts/**/*.js',
      'test/mock/**/*.js',
      'test/spec/**/*.js'
    ],

    // list of files / patterns to exclude
    exclude: [
    ],

    // web server port
    port: 8080,

    // Start these browsers, currently available:
    // - Chrome
    // - ChromeCanary
    // - Firefox
    // - Opera
    // - Safari (only Mac)
    // - PhantomJS
    // - IE (only Windows)
    browsers: [
      'PhantomJS'
    ],

    // Which plugins to enable
    plugins: [
      'karma-phantomjs-launcher',
      'karma-jasmine'
    ],

    // Continuous Integration mode
    // if true, it capture browsers, run tests and exit
    singleRun: false,

    colors: true,

    // level of logging
    // possible values: LOG_DISABLE || LOG_ERROR || LOG_WARN || LOG_INFO || LOG_DEBUG
    logLevel: config.LOG_INFO,

    // Uncomment the following lines if you are using grunt's server to run the tests
    // proxies: {
    //   '/': 'http://localhost:9000/'
    // },
    // URL root prevent conflicts with the site root
    // urlRoot: '_karma_'
  });
};
