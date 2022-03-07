<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class AdminExportCsvOrderController extends ModuleAdminController
{
    public function __construct()
    {
        $this->module = 'psa_exportCsv';
        parent::__construct();

    }
}