
App.namespace('Controller', function(App) {
    /**
     * @namespace App.Controller
     */
    var _ = {};

    /**
     * @namespace App.Controller.initialize
     */
    _.initialize = function(){

        App.node['body'] = App.query('body');
        App.node['page'] = App.query('#page');
        App.node['navigation_top'] = App.query('#navigation_top');
        App.node['navigation_sub'] = App.query('#navigation_sub');
        App.node['wrapper'] = App.query('#wrapper');
        App.node['sidebar'] = App.query('#sidebar');
        App.node['content'] = App.query('#content');
        App.node['footer'] = App.query('#footer');


        // Load blocks
        App.Block.NavigationTop.init(App.node['navigation_top']);
        App.Block.NavigationSub.init(App.node['navigation_sub']);

        console.log(App.Block.NavigationTop.getElements('left'));
        // body
        //App.domLoaded(function () {console.log('domLoaded');});
    };

    return _;
});