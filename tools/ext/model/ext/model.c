
/* This file was generated automatically by Zephir do not modify it! */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#include "php_ext.h"
#include "model.h"

#include <ext/standard/info.h>

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/globals.h"
#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"



zend_class_entry *model_pbbdb_modelbase_ce;
zend_class_entry *model_model1_ce;
zend_class_entry *model_pbbdb_db_ce;
zend_class_entry *model_pbbdb_modelall_ce;

ZEND_DECLARE_MODULE_GLOBALS(model)

PHP_INI_BEGIN()
	
PHP_INI_END()

static PHP_MINIT_FUNCTION(model)
{
	REGISTER_INI_ENTRIES();
	zephir_module_init();
	ZEPHIR_INIT(Model_PbbDb_ModelBase);
	ZEPHIR_INIT(Model_Model1);
	ZEPHIR_INIT(Model_PbbDb_Db);
	ZEPHIR_INIT(Model_PbbDb_ModelAll);
	return SUCCESS;
}

#ifndef ZEPHIR_RELEASE
static PHP_MSHUTDOWN_FUNCTION(model)
{
	zephir_deinitialize_memory(TSRMLS_C);
	UNREGISTER_INI_ENTRIES();
	return SUCCESS;
}
#endif

/**
 * Initialize globals on each request or each thread started
 */
static void php_zephir_init_globals(zend_model_globals *model_globals TSRMLS_DC)
{
	model_globals->initialized = 0;

	/* Memory options */
	model_globals->active_memory = NULL;

	/* Virtual Symbol Tables */
	model_globals->active_symbol_table = NULL;

	/* Cache Enabled */
	model_globals->cache_enabled = 1;

	/* Recursive Lock */
	model_globals->recursive_lock = 0;

	/* Static cache */
	memset(model_globals->scache, '\0', sizeof(zephir_fcall_cache_entry*) * ZEPHIR_MAX_CACHE_SLOTS);


}

/**
 * Initialize globals only on each thread started
 */
static void php_zephir_init_module_globals(zend_model_globals *model_globals TSRMLS_DC)
{

}

static PHP_RINIT_FUNCTION(model)
{

	zend_model_globals *model_globals_ptr;
#ifdef ZTS
	tsrm_ls = ts_resource(0);
#endif
	model_globals_ptr = ZEPHIR_VGLOBAL;

	php_zephir_init_globals(model_globals_ptr TSRMLS_CC);
	zephir_initialize_memory(model_globals_ptr TSRMLS_CC);


	return SUCCESS;
}

static PHP_RSHUTDOWN_FUNCTION(model)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	return SUCCESS;
}

static PHP_MINFO_FUNCTION(model)
{
	php_info_print_box_start(0);
	php_printf("%s", PHP_MODEL_DESCRIPTION);
	php_info_print_box_end();

	php_info_print_table_start();
	php_info_print_table_header(2, PHP_MODEL_NAME, "enabled");
	php_info_print_table_row(2, "Author", PHP_MODEL_AUTHOR);
	php_info_print_table_row(2, "Version", PHP_MODEL_VERSION);
	php_info_print_table_row(2, "Build Date", __DATE__ " " __TIME__ );
	php_info_print_table_row(2, "Powered by Zephir", "Version " PHP_MODEL_ZEPVERSION);
	php_info_print_table_end();

	DISPLAY_INI_ENTRIES();
}

static PHP_GINIT_FUNCTION(model)
{
	php_zephir_init_globals(model_globals TSRMLS_CC);
	php_zephir_init_module_globals(model_globals TSRMLS_CC);
}

static PHP_GSHUTDOWN_FUNCTION(model)
{

}


zend_function_entry php_model_functions[] = {
ZEND_FE_END

};

zend_module_entry model_module_entry = {
	STANDARD_MODULE_HEADER_EX,
	NULL,
	NULL,
	PHP_MODEL_EXTNAME,
	php_model_functions,
	PHP_MINIT(model),
#ifndef ZEPHIR_RELEASE
	PHP_MSHUTDOWN(model),
#else
	NULL,
#endif
	PHP_RINIT(model),
	PHP_RSHUTDOWN(model),
	PHP_MINFO(model),
	PHP_MODEL_VERSION,
	ZEND_MODULE_GLOBALS(model),
	PHP_GINIT(model),
	PHP_GSHUTDOWN(model),
	NULL,
	STANDARD_MODULE_PROPERTIES_EX
};

#ifdef COMPILE_DL_MODEL
ZEND_GET_MODULE(model)
#endif
