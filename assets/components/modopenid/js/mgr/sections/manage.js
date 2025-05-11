modopenid.page.Manage = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [
            {
                xtype: 'modopenid-panel-manage',
                renderTo: 'modopenid-panel-manage-div'
            }
        ]
    });
    modopenid.page.Manage.superclass.constructor.call(this, config);
};
Ext.extend(modopenid.page.Manage, MODx.Component);
Ext.reg('modopenid-page-manage', modopenid.page.Manage);
