<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class psa_exportCsv extends Module
{
    public function __construct($name = null, Context $context = null)
    {
        parent::__construct($name, $context);
        $this->name = 'psa_exportCsv';
        $this->tab = 'back_office_features';
        $this->version = '1.0.0';
        $this->author = 'adryjann';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->controllers = ['AdminExportCsvOrder'];
        parent::__construct();

        $this->displayName = $this->l('Export order data to csv');
        $this->description = $this->l('Export order data to csv');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
        require(dirname(__FILE__) . '/sql/install.php');
        if (!parent::install()
        ) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }

        return true;
    }

    public function getContent()
    {

    }
}