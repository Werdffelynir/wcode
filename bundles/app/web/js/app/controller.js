
App.namespace('Controller', function(app) {

    /**
     * #@typedef {NamespaceApplication|{}} App
     */

    var
        /**
         * @type {NamespaceApplication|{}} App
         */
        App = app,

        /**
         * @namespace App.Controller
         */
        controller = {};

    /**
     * @namespace App.Controller.initialize
     */
    controller.initialize = function(){

        App.node['box'] = App.query('#box');
        App.node['boxBg'] = App.query('#box-background');
        App.node['page'] = App.query('#page');
        App.node['navigation'] = App.query('#navigation');
        App.node['wrapper'] = App.query('#wrapper');
        App.node['sidebar'] = App.query('#sidebar');
        App.node['content'] = App.query('#content');
        App.node['footer'] = App.query('#footer');


        // Load blocks
        App.Block.Box.init(App.node['box'], App.node['boxBg']);
        App.Block.Navigation.init(App.node['navigation']);






    };




















    return controller;
});