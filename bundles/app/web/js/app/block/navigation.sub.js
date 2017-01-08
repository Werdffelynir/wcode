
App.namespace('Block.NavigationSub', function(App) {
    /**
     * @namespace App.Block.NavigationSub
     */
    var _ = {
        wrapper: null,
        elements: null
    };

    /**
     * @namespace App.Block.NavigationSub.init
     */
    _.init = function(wrapper){
        _.wrapper = wrapper;
    };








    /**
     * @namespace App.Block.NavigationSub.getWrapper
     */
    _.getWrapper = function(){
        return _.wrapper;
    };

    /**
     * @namespace App.Block.NavigationSub.getElements
     */
    _.getElements = function(attr){
        var nm = new NodeManager('ul#app-ulist>li');
        nm.setConfigurationAttr('data-uid');
        nm.search(_.wrapper);

        _.elements = nm.getElements();
        if (attr && _.elements[attr] !== undefined)
            return _.elements[attr];
        return _.elements;
    };

    return _;
});