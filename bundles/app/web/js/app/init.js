/**
 *
 * @type {NamespaceApplication|{}}
 */
var App = new NamespaceApplication({
    debug: true,
    url: '/bundles/app/',
    node: {}
});

// Libs scripts
App.require('libs', [

    App.url + 'js/lib/nodemanager.js',
    App.url + 'js/lib/utilities.js',
    App.url + 'js/lib/timer.js'

], initLibrary, initError);

// Module scripts
App.require('module', [
    App.url + 'js/app/block/box.js',
    App.url + 'js/app/block/navigation.js',
    // App.url + 'js/app/block/navigation.top.js',
    // App.url + 'js/app/block/navigation.sub.js',

    App.url + 'js/app/controller.js'

], initDependence, initError);

// Start loading the 'libs' scripts
App.requireStart('libs');

// Load error
function initError(error){
    console.error('initError' , error);
}

// After load 'libs' scripts. start loading the 'dependence' scripts
function initLibrary(list){
    App.requireStart('module');
}

// Start Application
function initDependence(list) {
    console.log('Application start!');
    App.Controller.initialize();
}


