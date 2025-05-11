var modOpenID = function (config) {
    config = config || {};
    modOpenID.superclass.constructor.call(this, config);
};
Ext.extend(modOpenID, Ext.Component, {

    page: {},
    window: {},
    grid: {},
    tree: {},
    panel: {},
    combo: {},
    field: {},
    config: {},

});
Ext.reg('modopenid', modOpenID);
modopenid = new modOpenID();
