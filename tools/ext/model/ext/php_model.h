
/* This file was generated automatically by Zephir do not modify it! */

#ifndef PHP_MODEL_H
#define PHP_MODEL_H 1

#ifdef PHP_WIN32
#define ZEPHIR_RELEASE 1
#endif

#include "kernel/globals.h"

#define PHP_MODEL_NAME        "model"
#define PHP_MODEL_VERSION     "1.0.0"
#define PHP_MODEL_EXTNAME     "model"
#define PHP_MODEL_AUTHOR      "lilipbb"
#define PHP_MODEL_ZEPVERSION  "0.10.7"
#define PHP_MODEL_DESCRIPTION ""



ZEND_BEGIN_MODULE_GLOBALS(model)

	int initialized;

	/* Memory */
	zephir_memory_entry *start_memory; /**< The first preallocated frame */
	zephir_memory_entry *end_memory; /**< The last preallocate frame */
	zephir_memory_entry *active_memory; /**< The current memory frame */

	/* Virtual Symbol Tables */
	zephir_symbol_table *active_symbol_table;

	/** Function cache */
	HashTable *fcache;

	zephir_fcall_cache_entry *scache[ZEPHIR_MAX_CACHE_SLOTS];

	/* Cache enabled */
	unsigned int cache_enabled;

	/* Max recursion control */
	unsigned int recursive_lock;

	
ZEND_END_MODULE_GLOBALS(model)

#ifdef ZTS
#include "TSRM.h"
#endif

ZEND_EXTERN_MODULE_GLOBALS(model)

#ifdef ZTS
	#define ZEPHIR_GLOBAL(v) ZEND_MODULE_GLOBALS_ACCESSOR(model, v)
#else
	#define ZEPHIR_GLOBAL(v) (model_globals.v)
#endif

#ifdef ZTS
	void ***tsrm_ls;
	#define ZEPHIR_VGLOBAL ((zend_model_globals *) (*((void ***) tsrm_get_ls_cache()))[TSRM_UNSHUFFLE_RSRC_ID(model_globals_id)])
#else
	#define ZEPHIR_VGLOBAL &(model_globals)
#endif

#define ZEPHIR_API ZEND_API

#define zephir_globals_def model_globals
#define zend_zephir_globals_def zend_model_globals

extern zend_module_entry model_module_entry;
#define phpext_model_ptr &model_module_entry

#endif
