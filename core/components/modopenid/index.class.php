<?php
abstract class modOpenIDBaseManagerController extends modExtraManagerController {
    /** @var \modOpenID\modOpenID $modopenid */
    public $modopenid;

    public function initialize(): void
    {
        $this->modopenid = $this->modx->services->get('modopenid');

        $this->addCss($this->modopenid->getOption('cssUrl') . 'mgr.css');
        $this->addJavascript($this->modopenid->getOption('jsUrl') . 'mgr/modopenid.js');

        $this->addHtml('
            <script type="text/javascript">
                Ext.onReady(function() {
                    modopenid.config = '.$this->modx->toJSON($this->modopenid->config).';
                });
            </script>
        ');

        parent::initialize();
    }

    public function getLanguageTopics(): array
    {
        return array('modopenid:default');
    }

    public function checkPermissions(): bool
    {
        return true;
    }
}
