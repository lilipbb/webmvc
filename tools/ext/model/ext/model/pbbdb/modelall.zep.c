
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/memory.h"
#include "kernel/fcall.h"
#include "kernel/object.h"
#include "kernel/operators.h"
#include "kernel/concat.h"


ZEPHIR_INIT_CLASS(Model_PbbDb_ModelAll) {

	ZEPHIR_REGISTER_CLASS(Model\\PbbDb, ModelAll, model, pbbdb_modelall, model_pbbdb_modelall_method_entry, ZEND_ACC_FINAL_CLASS);

	zend_declare_property_null(model_pbbdb_modelall_ce, SL("_db"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelall_ce, SL("_pos"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelall_ce, SL("_order"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelall_ce, SL("_limit"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelall_ce, SL("_where"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelall_ce, SL("_myfetch"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelall_ce, SL("_array"), ZEND_ACC_PROTECTED TSRMLS_CC);

	return SUCCESS;

}

PHP_METHOD(Model_PbbDb_ModelAll, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_1 = NULL;
	zval *selectnames = NULL, selectnames_sub, *tablename = NULL, tablename_sub, _0, _2, _3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&selectnames_sub);
	ZVAL_UNDEF(&tablename_sub);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 2, &selectnames, &tablename);

	if (!selectnames) {
		selectnames = &selectnames_sub;
		ZEPHIR_INIT_VAR(selectnames);
		ZVAL_STRING(selectnames, "");
	} else {
		ZEPHIR_SEPARATE_PARAM(selectnames);
	}
	if (!tablename) {
		tablename = &tablename_sub;
		ZEPHIR_INIT_VAR(tablename);
		ZVAL_STRING(tablename, "");
	} else {
		ZEPHIR_SEPARATE_PARAM(tablename);
	}


	ZEPHIR_CALL_CE_STATIC(&_0, model_pbbdb_modelbase_ce, "getdb", &_1, 1);
	zephir_check_call_status();
	zephir_update_property_zval(this_ptr, SL("_db"), &_0);
	if (ZEPHIR_IS_STRING(tablename, "")) {
		ZEPHIR_INIT_NVAR(tablename);
		ZEPHIR_GET_CONSTANT(tablename, "DB_TABLE");
	}
	if (ZEPHIR_IS_STRING(selectnames, "")) {
		ZEPHIR_INIT_NVAR(selectnames);
		ZVAL_STRING(selectnames, "*");
	}
	ZEPHIR_INIT_ZVAL_NREF(_2);
	ZVAL_LONG(&_2, 0);
	zephir_update_property_zval(this_ptr, SL("_pos"), &_2);
	ZEPHIR_INIT_VAR(&_3);
	ZEPHIR_CONCAT_SVSV(&_3, "select ", selectnames, " from ", tablename);
	zephir_update_property_zval(this_ptr, SL("_myfetch"), &_3);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_ModelAll, where) {

	zval *mes, mes_sub, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&mes_sub);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &mes);



	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_CONCAT_SVS(&_0, " where ", mes, " ");
	zephir_update_property_zval(this_ptr, SL("_where"), &_0);
	RETURN_THIS();

}

PHP_METHOD(Model_PbbDb_ModelAll, orderby) {

	zval *mes, mes_sub, *desc = NULL, desc_sub, __$false, _0$$3, _1$$4;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&mes_sub);
	ZVAL_UNDEF(&desc_sub);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &mes, &desc);

	if (!desc) {
		desc = &desc_sub;
		desc = &__$false;
	}


	if (zephir_is_true(desc)) {
		ZEPHIR_INIT_VAR(&_0$$3);
		ZEPHIR_CONCAT_SVS(&_0$$3, " order by ", mes, " desc ");
		zephir_update_property_zval(this_ptr, SL("_order"), &_0$$3);
	} else {
		ZEPHIR_INIT_VAR(&_1$$4);
		ZEPHIR_CONCAT_SVS(&_1$$4, " order by ", mes, " ");
		zephir_update_property_zval(this_ptr, SL("_order"), &_1$$4);
	}
	RETURN_THIS();

}

PHP_METHOD(Model_PbbDb_ModelAll, limit) {

	zval _1$$3, _4$$4;
	zval *start_param = NULL, *end_param = NULL, _0$$3, _2$$4, _3$$4;
	zend_long start, end;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_4$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &start_param, &end_param);

	start = zephir_get_intval(start_param);
	if (!end_param) {
		end = -1;
	} else {
		end = zephir_get_intval(end_param);
	}


	if (end < 0) {
		ZEPHIR_SINIT_VAR(_0$$3);
		ZVAL_LONG(&_0$$3, start);
		ZEPHIR_INIT_VAR(&_1$$3);
		ZEPHIR_CONCAT_SV(&_1$$3, " limit ", &_0$$3);
		zephir_update_property_zval(this_ptr, SL("_limit"), &_1$$3);
	} else {
		ZEPHIR_SINIT_VAR(_2$$4);
		ZVAL_LONG(&_2$$4, start);
		ZEPHIR_SINIT_VAR(_3$$4);
		ZVAL_LONG(&_3$$4, end);
		ZEPHIR_INIT_VAR(&_4$$4);
		ZEPHIR_CONCAT_SVSV(&_4$$4, " limit ", &_2$$4, ",", &_3$$4);
		zephir_update_property_zval(this_ptr, SL("_limit"), &_4$$4);
	}
	RETURN_THIS();

}

PHP_METHOD(Model_PbbDb_ModelAll, _end) {

	zval r, value, _0, _1, _2, _3, _4, _5, _6, _7, _8, *_9;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&r);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_1, this_ptr, SL("_myfetch"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_2, this_ptr, SL("_where"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_3, this_ptr, SL("_order"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_4, this_ptr, SL("_limit"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_5);
	ZEPHIR_CONCAT_VVVV(&_5, &_1, &_2, &_3, &_4);
	ZVAL_NULL(&_6);
	ZEPHIR_CALL_METHOD(&r, &_0, "query", NULL, 0, &_5, &_6);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_7);
	array_init(&_7);
	zephir_update_property_zval(this_ptr, SL("_array"), &_7);
	ZVAL_LONG(&_6, 2);
	ZEPHIR_CALL_METHOD(&_8, &r, "fetchall", NULL, 0, &_6);
	zephir_check_call_status();
	zephir_is_iterable(&_8, 0, "model/PbbDb/ModelAll.zep", 51);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_8), _9)
	{
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _9);
		zephir_update_property_array_append(this_ptr, SL("_array"), &value TSRMLS_CC);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_ModelAll, getArray) {

	zval _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("_array"), PH_NOISY_CC | PH_READONLY);
	if (Z_TYPE_P(&_0) == IS_NULL) {
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "_end", NULL, 11);
		zephir_check_call_status();
	}
	RETURN_MM_MEMBER(getThis(), "_array");

}

