<?php

class CopeX_SymLinkFix_Model_Observer
{
    /**
     *  Alters/creates the value of symlink in core_config_data table to 1 if unset or 0.
     *  Handy for Magento Core 1.9.3.4 where no symlink entry is in the database.
     */
    public function doSymLinkFix()
    {
        if (Mage::getStoreConfig('dev/template/allow_symlink') != 1) {
            Mage::getConfig()->saveConfig('dev/template/allow_symlink', '1', 'default', 0);
        }
    }
}
