
App.namespace('Block.NavigationTop', function(App) {
    /**
     * @namespace App.Block.NavigationTop
     */
    var _ = {
        wrapper: null,
        elements: null
    };

    /**
     * @namespace App.Block.NavigationTop.init
     */
    _.init = function(wrapper){
        _.wrapper = wrapper;
    };








    /**
     * @namespace App.Block.NavigationTop.getWrapper
     */
    _.getWrapper = function(){
        return _.wrapper;
    };

    /**
     * @namespace App.Block.NavigationTop.getElements
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

    return _;
});