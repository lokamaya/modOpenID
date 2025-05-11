<?php
require_once dirname(dirname(__FILE__)) . '/index.class.php';

class modOpenIDManageManagerController extends modOpenIDBaseManagerController
{

    public function process(array $scriptProperties = []): void
    {
    }

    public function getPageTitle(): string
    {
        return $this->modx->lexicon('modopenid');
    }

    public function loadCustomCssJs(): void
    {
        $this->addLastJavascript($this->modopenid->getOption('jsUrl') . 'mgr/widgets/manage.panel.js');
        $this->addLastJavascript($this->modopenid->getOption('jsUrl') . 'mgr/sections/manage.js');

        $this->addHtml(
            '
            <script type="text/javascript">
                Ext.onReady(function() {
                    MODx.load({ xtype: "modopenid-page-manage"});
                });
            </script>
        '
        );
    }

    public function getTemplateFile(): string
    {
        return $this->modopenid->getOption('templatesPath') . 'manage.tpl';
    }

}
