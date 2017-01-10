
App.namespace('Block.Box', function(app) {

    var
        /**
         * @type {NamespaceApplication|{}} App
         */
        App = app,

        /**
         * @namespace App.Block.Box
         */
        _ = {
            wrapper: null,
            background: null,
            elements: null
        };

    /**
     * @namespace App.Block.Box.init
     */
    _.init = function(wrapper, background) {
        _.wrapper = wrapper;
        _.background = background;

        _.activateDefaultActions();
    };

    /**
     * @namespace App.Block.Box.getWrapper
     */
    _.getWrapper = function(){
        return _.wrapper;
    };

    _.getBackground = function(){
        return _.background;
    };
    /**
     * @namespace App.Block.Box.getElements
     */
    _.getElements = function(attr){
        var nm = new NodeManager('[id^="box-"]');
        nm.setConfigurationAttr('id');
        nm.search(_.wrapper);

        _.elements = nm.getElements();
        if (attr && _.elements[attr] !== undefined)
            return _.elements[attr];

        return _.elements;
    };

    /*   **  **  **  **  **  **  **  **  **  **  **  **  **  **  **  **  **  **  */

    /**
     * @namespace App.Block.Box.show
     */
    _.show = function(title, content, hint){
        App.css(_.getWrapper(), "display: block;");
        App.css(_.getBackground(), "display: block;");

        App.inject(_.getElements('box-content'), content || '');
        App.inject(_.getElements('box-title'), title || '');
        App.inject(_.getElements('box-hint'), hint || '');
    };

    /**
     * @namespace App.Block.Box.hide
     */
    _.hide = function(){
        App.css(_.getWrapper(), "display: none");
        App.css(_.getBackground(), "display: none");
    };


    /**
     * @namespace App.Block.Box.toggle
     */
    _.toggle = function(){
        if (_.getWrapper().style.display === 'block') {
            _.hide();
        } else {
            _.show();
        }
    };

    /**
     * @namespace App.Block.Box.activateDefaultActions
     */
    _.activateDefaultActions = function(){
        // close box
        App.on(
            [
                _.getElements('box-btn-cancle'),
                _.getBackground()
            ],
            'click',
            function (event) {
                _.hide();
            });

    };















    return _;
});