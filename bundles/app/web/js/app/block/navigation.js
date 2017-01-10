
App.namespace('Block.Navigation', function(app) {

    var
        /**
         * @type {NamespaceApplication|{}} App
         */
        App = app,

        /**
         * @namespace App.Block.Navigation
         */
        _ = {
            wrapper: null,
            elements: null
        };

    /**
     * @namespace App.Block.Navigation.init
     */
    _.init = function(wrapper){
        _.wrapper = wrapper;

        _.appointButtons();
    };

    _.appointButtons = function () {
        var rightMenu = App.Block.Navigation.getElements('right');
        var btns = NodeManager('a[data-nm]', 'data-nm')
            .search(rightMenu);
            //.getElements();
        btns.onClick('login', function (event, target) {
            event.preventDefault();
            App.Block.Box.show('Login my lord', 'htmlForm');
        });


    };

    /**
     * @namespace App.Block.Navigation.getWrapper
     */
    _.getWrapper = function(){
        return _.wrapper;
    };

    /**
     * @namespace App.Block.Navigation.getElements
     */
    _.getElements = function(attr){
        var nm = new NodeManager('div');
        nm.setConfigurationAttr('data-block');
        nm.search(_.wrapper);

        _.elements = nm.getElements();
        if (attr && _.elements[attr] !== undefined)
            return _.elements[attr];
        return _.elements;
    };

    /*   **  **  **  **  **  **  **  **  **  **  **  **  **  **  **  **  **  **  */




















    return _;
});