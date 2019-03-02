
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"
#include "kernel/array.h"
#include "kernel/object.h"


ZEPHIR_INIT_CLASS(Model_Model1) {

	ZEPHIR_REGISTER_CLASS_EX(Model, Model1, model, model1, model_pbbdb_modelbase_ce, model_model1_method_entry, 0);

	zend_declare_property_null(model_model1_ce, SL("num"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(model_model1_ce, SL("name"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(model_model1_ce, SL("id"), ZEND_ACC_PUBLIC TSRMLS_CC);

	return SUCCESS;

}

PHP_METHOD(Model_Model1, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_0 = NULL;
	zval *key = NULL, key_sub, *value = NULL, value_sub, *tablename = NULL, tablename_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&key_sub);
	ZVAL_UNDEF(&value_sub);
	ZVAL_UNDEF(&tablename_sub);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 3, &key, &value, &tablename);

	if (!key) {
		key = &key_sub;
		ZEPHIR_INIT_VAR(key);
		ZVAL_STRING(key, "");
	}
	if (!value) {
		value = &value_sub;
		ZEPHIR_INIT_VAR(value);
		ZVAL_STRING(value, "");
	}
	if (!tablename) {
		tablename = &tablename_sub;
		ZEPHIR_INIT_VAR(tablename);
		ZVAL_STRING(tablename, "");
	}


	ZEPHIR_CALL_PARENT(NULL, model_model1_ce, getThis(), "__construct", &_0, 0, key, value, tablename);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_Model1, __getmems) {

	zval _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	zephir_create_array(return_value, 3, 0 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("id"), PH_NOISY_CC);
	zephir_array_update_string(return_value, SL("id"), &_0, PH_COPY | PH_SEPARATE);
	ZEPHIR_OBS_NVAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("num"), PH_NOISY_CC);
	zephir_array_update_string(return_value, SL("num"), &_0, PH_COPY | PH_SEPARATE);
	ZEPHIR_OBS_NVAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("name"), PH_NOISY_CC);
	zephir_array_update_string(return_value, SL("name"), &_0, PH_COPY | PH_SEPARATE);
	RETURN_MM();

}

