
/* This file was generated automatically by Zephir do not modify it! */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#include "php_ext.h"
#include "jamjan.h"

#include <ext/standard/info.h>

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/globals.h"
#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"



zend_class_entry *jamjan_arraydigger_ce;

ZEND_DECLARE_MODULE_GLOBALS(jamjan)

PHP_INI_BEGIN()
	
PHP_INI_END()

static PHP_MINIT_FUNCTION(jamjan)
{
	REGISTER_INI_ENTRIES();
	ZEPHIR_INIT(Jamjan_Arraydigger);
	return SUCCESS;
}

#ifndef ZEPHIR_RELEASE
static PHP_MSHUTDOWN_FUNCTION(jamjan)
{
	zephir_deinitialize_memory(TSRMLS_C);
	UNREGISTER_INI_ENTRIES();
	return SUCCESS;
}
#endif

/**
 * Initialize globals on each request or each thread started
 */
static void php_zephir_init_globals(zend_jamjan_globals *jamjan_globals TSRMLS_DC)
{
	jamjan_globals->initialized = 0;

	/* Memory options */
	jamjan_globals->active_memory = NULL;

	/* Virtual Symbol Tables */
	jamjan_globals->active_symbol_table = NULL;

	/* Cache Enabled */
	jamjan_globals->cache_enabled = 1;

	/* Recursive Lock */
	jamjan_globals->recursive_lock = 0;

	/* Static cache */
	memset(jamjan_globals->scache, '\0', sizeof(zephir_fcall_cache_entry*) * ZEPHIR_MAX_CACHE_SLOTS);


}

/**
 * Initialize globals only on each thread started
 */
static void php_zephir_init_module_globals(zend_jamjan_globals *jamjan_globals TSRMLS_DC)
{

}

static PHP_RINIT_FUNCTION(jamjan)
{

	zend_jamjan_globals *jamjan_globals_ptr;
#ifdef ZTS
	tsrm_ls = ts_resource(0);
#endif
	jamjan_globals_ptr = ZEPHIR_VGLOBAL;

	php_zephir_init_globals(jamjan_globals_ptr TSRMLS_CC);
	zephir_initialize_memory(jamjan_globals_ptr TSRMLS_CC);


	return SUCCESS;
}

static PHP_RSHUTDOWN_FUNCTION(jamjan)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	return SUCCESS;
}

static PHP_MINFO_FUNCTION(jamjan)
{
	php_info_print_box_start(0);
	php_printf("%s", PHP_JAMJAN_DESCRIPTION);
	php_info_print_box_end();

	php_info_print_table_start();
	php_info_print_table_header(2, PHP_JAMJAN_NAME, "enabled");
	php_info_print_table_row(2, "Author", PHP_JAMJAN_AUTHOR);
	php_info_print_table_row(2, "Version", PHP_JAMJAN_VERSION);
	php_info_print_table_row(2, "Build Date", __DATE__ " " __TIME__ );
	php_info_print_table_row(2, "Powered by Zephir", "Version " PHP_JAMJAN_ZEPVERSION);
	php_info_print_table_end();

	DISPLAY_INI_ENTRIES();
}

static PHP_GINIT_FUNCTION(jamjan)
{
	php_zephir_init_globals(jamjan_globals TSRMLS_CC);
	php_zephir_init_module_globals(jamjan_globals TSRMLS_CC);
}

static PHP_GSHUTDOWN_FUNCTION(jamjan)
{

}


zend_function_entry php_jamjan_functions[] = {
ZEND_FE_END

};

zend_module_entry jamjan_module_entry = {
	STANDARD_MODULE_HEADER_EX,
	NULL,
	NULL,
	PHP_JAMJAN_EXTNAME,
	php_jamjan_functions,
	PHP_MINIT(jamjan),
#ifndef ZEPHIR_RELEASE
	PHP_MSHUTDOWN(jamjan),
#else
	NULL,
#endif
	PHP_RINIT(jamjan),
	PHP_RSHUTDOWN(jamjan),
	PHP_MINFO(jamjan),
	PHP_JAMJAN_VERSION,
	ZEND_MODULE_GLOBALS(jamjan),
	PHP_GINIT(jamjan),
	PHP_GSHUTDOWN(jamjan),
	NULL,
	STANDARD_MODULE_PROPERTIES_EX
};

#ifdef COMPILE_DL_JAMJAN
ZEND_GET_MODULE(jamjan)
#endif
