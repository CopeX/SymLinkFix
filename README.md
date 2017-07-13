# SymLinkFix
This Module adds an Observer which checks for StoreConfig "dev/template/allow_symlink" and adds it back to core_config_data table if it is not found. This Module exists only cause of SUPEE-9767 v2 where Magento tried to terminate this setting completely.
