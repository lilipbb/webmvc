
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
#include "kernel/array.h"
#include "kernel/object.h"
#include "kernel/operators.h"
#include "kernel/concat.h"
#include "kernel/string.h"
#include "kernel/variables.h"


ZEPHIR_INIT_CLASS(Model_PbbDb_ModelBase) {

	ZEPHIR_REGISTER_CLASS(Model\\PbbDb, ModelBase, model, pbbdb_modelbase, model_pbbdb_modelbase_method_entry, 0);

	zend_declare_property_null(model_pbbdb_modelbase_ce, SL("_db"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelbase_ce, SL("db_table"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelbase_ce, SL("_arr"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelbase_ce, SL("_allnames"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_modelbase_ce, SL("id"), ZEND_ACC_PROTECTED TSRMLS_CC);

	return SUCCESS;

}

PHP_METHOD(Model_PbbDb_ModelBase, beginTransaction) {

	zval _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_1 = NULL;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_SELF(&_0, "getdb", &_1, 1);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, &_0, "begintransaction", NULL, 0);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_ModelBase, Commit) {

	zval _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_1 = NULL;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_SELF(&_0, "getdb", &_1, 1);
	zephir_check_call_status();
	ZEPHIR_RETURN_CALL_METHOD(&_0, "commit", NULL, 0);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Model_PbbDb_ModelBase, GetDb) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *_GET, _0$$3, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_get_global(&_GET, SL("_GET"));
	if (!_GET) {
		ZEPHIR_THROW_EXCEPTION_STR(zend_exception_get_default(), "Invalid superglobal");
		return;
	}

	if (!(zephir_array_isset_string(_GET, SL("mysql_db")))) {
		ZEPHIR_INIT_VAR(&_0$$3);
		object_init_ex(&_0$$3, model_pbbdb_db_ce);
		ZEPHIR_CALL_METHOD(NULL, &_0$$3, "__construct", NULL, 2);
		zephir_check_call_status();
		zephir_array_update_string(_GET, SL("mysql_db"), &_0$$3, PH_COPY | PH_SEPARATE);
	}
	zephir_array_fetch_string(&_1, _GET, SL("mysql_db"), PH_NOISY | PH_READONLY, "model/PbbDb/ModelBase.zep", 18 TSRMLS_CC);
	RETURN_CTOR(&_1);

}

PHP_METHOD(Model_PbbDb_ModelBase, gettablename) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "db_table");

}

PHP_METHOD(Model_PbbDb_ModelBase, getid) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "id");

}

PHP_METHOD(Model_PbbDb_ModelBase, haveuser) {

	zval _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);


	zephir_read_property(&_0, this_ptr, SL("id"), PH_NOISY_CC | PH_READONLY);
	RETURN_BOOL(ZEPHIR_GT_LONG(&_0, 0));

}

PHP_METHOD(Model_PbbDb_ModelBase, checkid) {

	zval _2$$3;
	zval _0, _1$$3, _3$$3, _4$$3, _5$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_2$$3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("id"), PH_NOISY_CC | PH_READONLY);
	if (ZEPHIR_LT_LONG(&_0, 1)) {
		ZEPHIR_INIT_VAR(&_1$$3);
		ZEPHIR_INIT_VAR(&_2$$3);
		zephir_create_array(&_2$$3, 1, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_3$$3);
		zephir_get_class(&_3$$3, this_ptr, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_4$$3);
		ZEPHIR_CONCAT_SVS(&_4$$3, "该对象　", &_3$$3, "还不存在，请先插入　");
		zephir_array_fast_append(&_2$$3, &_4$$3);
		ZEPHIR_INIT_VAR(&_5$$3);
		ZVAL_STRING(&_5$$3, "\\Pbb\\CorePbb::Log");
		ZEPHIR_CALL_USER_FUNC_ARRAY(&_1$$3, &_5$$3, &_2$$3);
		zephir_check_call_status();
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_ModelBase, isConnect) {

	zval _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_RETURN_CALL_METHOD(&_0, "isconnect", NULL, 0);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Model_PbbDb_ModelBase, isprivate) {

	zval _0;
	zval *pname, pname_sub, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&pname_sub);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &pname);



	ZEPHIR_INIT_VAR(&_0);
	zephir_create_array(&_0, 4, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "_allnames");
	zephir_array_fast_append(&_0, &_1);
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "db_table");
	zephir_array_fast_append(&_0, &_1);
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "_arr");
	zephir_array_fast_append(&_0, &_1);
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "_db");
	zephir_array_fast_append(&_0, &_1);
	RETURN_MM_BOOL(zephir_fast_in_array(pname, &_0 TSRMLS_CC));

}

PHP_METHOD(Model_PbbDb_ModelBase, update) {

	zend_bool _6$$4;
	zend_string *_3, *_15;
	zend_ulong _2, _14;
	zval names, q;
	zephir_fcall_cache_entry *_5 = NULL, *_9 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *safe = NULL, safe_sub, __$true, arr, r, pname, pv, _0, *_1, _12, *_13, _18, _19, _20, _21, _22, _23, _24, _4$$4, _7$$4, _8$$4, _10$$7, _11$$8, _16$$10, _17$$11;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&safe_sub);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&arr);
	ZVAL_UNDEF(&r);
	ZVAL_UNDEF(&pname);
	ZVAL_UNDEF(&pv);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_12);
	ZVAL_UNDEF(&_18);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_20);
	ZVAL_UNDEF(&_21);
	ZVAL_UNDEF(&_22);
	ZVAL_UNDEF(&_23);
	ZVAL_UNDEF(&_24);
	ZVAL_UNDEF(&_4$$4);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_10$$7);
	ZVAL_UNDEF(&_11$$8);
	ZVAL_UNDEF(&_16$$10);
	ZVAL_UNDEF(&_17$$11);
	ZVAL_UNDEF(&names);
	ZVAL_UNDEF(&q);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &safe);

	if (!safe) {
		safe = &safe_sub;
		safe = &__$true;
	}


	if (zephir_is_true(safe)) {
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "checksafe", NULL, 3);
		zephir_check_call_status();
	}
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "checkid", NULL, 4);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&names);
	ZVAL_STRING(&names, "");
	ZEPHIR_INIT_VAR(&arr);
	array_init(&arr);
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "__getmems", NULL, 0);
	zephir_check_call_status();
	zephir_is_iterable(&_0, 0, "model/PbbDb/ModelBase.zep", 65);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_0), _2, _3, _1)
	{
		ZEPHIR_INIT_NVAR(&pname);
		if (_3 != NULL) { 
			ZVAL_STR_COPY(&pname, _3);
		} else {
			ZVAL_LONG(&pname, _2);
		}
		ZEPHIR_INIT_NVAR(&pv);
		ZVAL_COPY(&pv, _1);
		ZEPHIR_CALL_METHOD(&_4$$4, this_ptr, "isprivate", &_5, 5, &pname);
		zephir_check_call_status();
		_6$$4 = zephir_is_true(&_4$$4);
		if (!(_6$$4)) {
			_6$$4 = ZEPHIR_IS_STRING(&pname, "id");
		}
		if (_6$$4) {
			continue;
		}
		zephir_read_property(&_7$$4, this_ptr, SL("_arr"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_FUNCTION(&_8$$4, "key_exists", &_9, 6, &pname, &_7$$4);
		zephir_check_call_status();
		if (zephir_is_true(&_8$$4)) {
			continue;
		}
		if (!ZEPHIR_IS_STRING(&names, "")) {
			ZEPHIR_INIT_LNVAR(_10$$7);
			ZEPHIR_CONCAT_VSVS(&_10$$7, &names, ",", &pname, "=?");
			zephir_get_strval(&names, &_10$$7);
		} else {
			ZEPHIR_INIT_LNVAR(_11$$8);
			ZEPHIR_CONCAT_VVS(&_11$$8, &names, &pname, "=?");
			zephir_get_strval(&names, &_11$$8);
		}
		zephir_array_append(&arr, &pv, PH_SEPARATE, "model/PbbDb/ModelBase.zep", 63);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&pv);
	ZEPHIR_INIT_NVAR(&pname);
	ZEPHIR_OBS_VAR(&_12);
	zephir_read_property(&_12, this_ptr, SL("_arr"), PH_NOISY_CC);
	zephir_is_iterable(&_12, 0, "model/PbbDb/ModelBase.zep", 75);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_12), _14, _15, _13)
	{
		ZEPHIR_INIT_NVAR(&pname);
		if (_15 != NULL) { 
			ZVAL_STR_COPY(&pname, _15);
		} else {
			ZVAL_LONG(&pname, _14);
		}
		ZEPHIR_INIT_NVAR(&pv);
		ZVAL_COPY(&pv, _13);
		if (!ZEPHIR_IS_STRING(&names, "")) {
			ZEPHIR_INIT_LNVAR(_16$$10);
			ZEPHIR_CONCAT_VSVS(&_16$$10, &names, ",", &pname, "=?");
			zephir_get_strval(&names, &_16$$10);
		} else {
			ZEPHIR_INIT_LNVAR(_17$$11);
			ZEPHIR_CONCAT_VVS(&_17$$11, &names, &pname, "=?");
			zephir_get_strval(&names, &_17$$11);
		}
		zephir_array_append(&arr, &pv, PH_SEPARATE, "model/PbbDb/ModelBase.zep", 73);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&pv);
	ZEPHIR_INIT_NVAR(&pname);
	if (ZEPHIR_IS_STRING(&names, "")) {
		php_printf("%s", "id不需要更新　");
		RETURN_MM_BOOL(0);
	}
	ZEPHIR_CALL_METHOD(&_18, this_ptr, "gettablename", NULL, 7);
	zephir_check_call_status();
	zephir_read_property(&_19, this_ptr, SL("id"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_20);
	ZEPHIR_CONCAT_SVSVSV(&_20, "update ", &_18, " set ", &names, " where id=", &_19);
	zephir_get_strval(&q, &_20);
	zephir_read_property(&_21, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&r, &_21, "query", NULL, 0, &q, &arr);
	zephir_check_call_status();
	zephir_read_property(&_22, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_23, &_22, "istransaction", NULL, 0);
	zephir_check_call_status();
	if (zephir_is_true(&_23)) {
		RETURN_MM_BOOL(1);
	}
	zephir_read_property(&_24, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_RETURN_CALL_METHOD(&_24, "issuccess", NULL, 0, &r);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Model_PbbDb_ModelBase, insert) {

	zend_bool _9$$4;
	zend_string *_6, *_20;
	zend_ulong _5, _19;
	zval arr, r, pname, pv, _0, _3, *_4, _17, *_18, _25, _26, _27, _28, _29, _30, _31, _32, _1$$3, _2$$3, _7$$4, _10$$4, _11$$4, _13$$7, _15$$8, _21$$10, _23$$11;
	zval names, values, q, _14$$7, _16$$8, _22$$10, _24$$11;
	zephir_fcall_cache_entry *_8 = NULL, *_12 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&names);
	ZVAL_UNDEF(&values);
	ZVAL_UNDEF(&q);
	ZVAL_UNDEF(&_14$$7);
	ZVAL_UNDEF(&_16$$8);
	ZVAL_UNDEF(&_22$$10);
	ZVAL_UNDEF(&_24$$11);
	ZVAL_UNDEF(&arr);
	ZVAL_UNDEF(&r);
	ZVAL_UNDEF(&pname);
	ZVAL_UNDEF(&pv);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_17);
	ZVAL_UNDEF(&_25);
	ZVAL_UNDEF(&_26);
	ZVAL_UNDEF(&_27);
	ZVAL_UNDEF(&_28);
	ZVAL_UNDEF(&_29);
	ZVAL_UNDEF(&_30);
	ZVAL_UNDEF(&_31);
	ZVAL_UNDEF(&_32);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_10$$4);
	ZVAL_UNDEF(&_11$$4);
	ZVAL_UNDEF(&_13$$7);
	ZVAL_UNDEF(&_15$$8);
	ZVAL_UNDEF(&_21$$10);
	ZVAL_UNDEF(&_23$$11);

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_METHOD(NULL, this_ptr, "checksafe", NULL, 3);
	zephir_check_call_status();
	zephir_read_property(&_0, this_ptr, SL("id"), PH_NOISY_CC | PH_READONLY);
	if (ZEPHIR_GT_LONG(&_0, 0)) {
		zephir_read_property(&_1$$3, this_ptr, SL("id"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_VAR(&_2$$3);
		ZEPHIR_CONCAT_SVS(&_2$$3, "id:", &_1$$3, "该对象已经存在，不需要插入　");
		zend_print_zval(&_2$$3, 0);
		RETURN_MM_LONG(0);
	}
	ZEPHIR_INIT_VAR(&names);
	ZVAL_STRING(&names, "");
	ZEPHIR_INIT_VAR(&values);
	ZVAL_STRING(&values, "");
	ZEPHIR_INIT_VAR(&arr);
	array_init(&arr);
	ZEPHIR_CALL_METHOD(&_3, this_ptr, "__getmems", NULL, 0);
	zephir_check_call_status();
	zephir_is_iterable(&_3, 0, "model/PbbDb/ModelBase.zep", 115);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_3), _5, _6, _4)
	{
		ZEPHIR_INIT_NVAR(&pname);
		if (_6 != NULL) { 
			ZVAL_STR_COPY(&pname, _6);
		} else {
			ZVAL_LONG(&pname, _5);
		}
		ZEPHIR_INIT_NVAR(&pv);
		ZVAL_COPY(&pv, _4);
		ZEPHIR_CALL_METHOD(&_7$$4, this_ptr, "isprivate", &_8, 5, &pname);
		zephir_check_call_status();
		_9$$4 = zephir_is_true(&_7$$4);
		if (!(_9$$4)) {
			_9$$4 = ZEPHIR_IS_STRING(&pname, "id");
		}
		if (_9$$4) {
			continue;
		}
		zephir_read_property(&_10$$4, this_ptr, SL("_arr"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_FUNCTION(&_11$$4, "key_exists", &_12, 6, &pname, &_10$$4);
		zephir_check_call_status();
		if (zephir_is_true(&_11$$4)) {
			continue;
		}
		if (!ZEPHIR_IS_STRING(&names, "")) {
			ZEPHIR_INIT_LNVAR(_13$$7);
			ZEPHIR_CONCAT_VSV(&_13$$7, &names, ",", &pname);
			zephir_get_strval(&names, &_13$$7);
			ZEPHIR_INIT_LNVAR(_14$$7);
			ZEPHIR_CONCAT_VS(&_14$$7, &values, ",?");
			ZEPHIR_CPY_WRT(&values, &_14$$7);
		} else {
			ZEPHIR_INIT_LNVAR(_15$$8);
			ZEPHIR_CONCAT_VV(&_15$$8, &names, &pname);
			zephir_get_strval(&names, &_15$$8);
			ZEPHIR_INIT_LNVAR(_16$$8);
			ZEPHIR_CONCAT_VS(&_16$$8, &values, "?");
			ZEPHIR_CPY_WRT(&values, &_16$$8);
		}
		zephir_array_append(&arr, &pv, PH_SEPARATE, "model/PbbDb/ModelBase.zep", 113);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&pv);
	ZEPHIR_INIT_NVAR(&pname);
	ZEPHIR_OBS_VAR(&_17);
	zephir_read_property(&_17, this_ptr, SL("_arr"), PH_NOISY_CC);
	zephir_is_iterable(&_17, 0, "model/PbbDb/ModelBase.zep", 127);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_17), _19, _20, _18)
	{
		ZEPHIR_INIT_NVAR(&pname);
		if (_20 != NULL) { 
			ZVAL_STR_COPY(&pname, _20);
		} else {
			ZVAL_LONG(&pname, _19);
		}
		ZEPHIR_INIT_NVAR(&pv);
		ZVAL_COPY(&pv, _18);
		if (!ZEPHIR_IS_STRING(&names, "")) {
			ZEPHIR_INIT_LNVAR(_21$$10);
			ZEPHIR_CONCAT_VSV(&_21$$10, &names, ",", &pname);
			zephir_get_strval(&names, &_21$$10);
			ZEPHIR_INIT_LNVAR(_22$$10);
			ZEPHIR_CONCAT_VS(&_22$$10, &values, ",?");
			ZEPHIR_CPY_WRT(&values, &_22$$10);
		} else {
			ZEPHIR_INIT_LNVAR(_23$$11);
			ZEPHIR_CONCAT_VV(&_23$$11, &names, &pname);
			zephir_get_strval(&names, &_23$$11);
			ZEPHIR_INIT_LNVAR(_24$$11);
			ZEPHIR_CONCAT_VS(&_24$$11, &values, "?");
			ZEPHIR_CPY_WRT(&values, &_24$$11);
		}
		zephir_array_append(&arr, &pv, PH_SEPARATE, "model/PbbDb/ModelBase.zep", 125);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&pv);
	ZEPHIR_INIT_NVAR(&pname);
	ZEPHIR_CALL_METHOD(&_25, this_ptr, "gettablename", NULL, 7);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_26);
	ZEPHIR_CONCAT_SVSVSVS(&_26, "insert ", &_25, "(", &names, ")values(", &values, ")");
	zephir_get_strval(&q, &_26);
	zephir_read_property(&_27, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&r, &_27, "query", NULL, 0, &q, &arr);
	zephir_check_call_status();
	zephir_read_property(&_28, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_29, &_28, "getlastid", NULL, 0);
	zephir_check_call_status();
	zephir_update_property_zval(this_ptr, SL("id"), &_29);
	zephir_read_property(&_30, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_31, &_30, "istransaction", NULL, 0);
	zephir_check_call_status();
	if (zephir_is_true(&_31)) {
		RETURN_MM_BOOL(1);
	}
	zephir_read_property(&_32, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_RETURN_CALL_METHOD(&_32, "issuccess", NULL, 0, &r);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Model_PbbDb_ModelBase, getby) {

	zval _3$$4;
	zend_string *_15;
	zend_ulong _14;
	zephir_fcall_cache_entry *_17 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS, i = 0;
	zval *name_param = NULL, *value_param = NULL, __$false, namearr, valuearr, r, row, pname, pv, _5, _6, _7, _8, _9, _10, _11, _12, *_13, _0$$4, _1$$4, _2$$4, _4$$4, _16$$6, _18$$6;
	zval name, value, q, mes;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&q);
	ZVAL_UNDEF(&mes);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&namearr);
	ZVAL_UNDEF(&valuearr);
	ZVAL_UNDEF(&r);
	ZVAL_UNDEF(&row);
	ZVAL_UNDEF(&pname);
	ZVAL_UNDEF(&pv);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_12);
	ZVAL_UNDEF(&_0$$4);
	ZVAL_UNDEF(&_1$$4);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_4$$4);
	ZVAL_UNDEF(&_16$$6);
	ZVAL_UNDEF(&_18$$6);
	ZVAL_UNDEF(&_3$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &name_param, &value_param);

	zephir_get_strval(&name, name_param);
	zephir_get_strval(&value, value_param);


	ZEPHIR_INIT_VAR(&namearr);
	zephir_fast_explode_str(&namearr, SL(","), &name, LONG_MAX TSRMLS_CC);
	ZEPHIR_INIT_VAR(&valuearr);
	zephir_fast_explode_str(&valuearr, SL(","), &value, LONG_MAX TSRMLS_CC);
	if (zephir_fast_count_int(&namearr TSRMLS_CC) > 1) {
		if (zephir_fast_count_int(&namearr TSRMLS_CC) != zephir_fast_count_int(&valuearr TSRMLS_CC)) {
			ZEPHIR_INIT_VAR(&_0$$4);
			ZEPHIR_CPY_WRT(&_0$$4, &name);
			zephir_var_dump(&_0$$4 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_1$$4);
			ZEPHIR_CPY_WRT(&_1$$4, &value);
			zephir_var_dump(&_1$$4 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_2$$4);
			ZEPHIR_INIT_VAR(&_3$$4);
			zephir_create_array(&_3$$4, 2, 0 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_4$$4);
			ZVAL_STRING(&_4$$4, "name和　value个数不相等　");
			zephir_array_fast_append(&_3$$4, &_4$$4);
			zephir_array_fast_append(&_3$$4, &__$false);
			ZEPHIR_INIT_NVAR(&_4$$4);
			ZVAL_STRING(&_4$$4, "\\Pbb\\CorePbb::Error");
			ZEPHIR_CALL_USER_FUNC_ARRAY(&_2$$4, &_4$$4, &_3$$4);
			zephir_check_call_status();
		}
		ZEPHIR_INIT_NVAR(&name);
		zephir_fast_join_str(&name, SL("=? and "), &namearr TSRMLS_CC);
	}
	zephir_read_property(&_5, this_ptr, SL("_allnames"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_6, this_ptr, "gettablename", NULL, 7);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_7);
	zephir_read_property(&_8, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_9, &_8, "istransaction", NULL, 0);
	zephir_check_call_status();
	if (zephir_is_true(&_9)) {
		ZEPHIR_INIT_NVAR(&_7);
		ZVAL_STRING(&_7, "FOR UPDATE;");
	} else {
		ZEPHIR_INIT_NVAR(&_7);
		ZVAL_STRING(&_7, ";");
	}
	ZEPHIR_INIT_VAR(&_10);
	ZEPHIR_CONCAT_SVSVSVSV(&_10, "select ", &_5, " from ", &_6, " where ", &name, "=? ", &_7);
	zephir_get_strval(&q, &_10);
	zephir_read_property(&_11, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&r, &_11, "query", NULL, 0, &q, &valuearr);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&mes);
	ZVAL_STRING(&mes, "fetch");
	ZEPHIR_CALL_METHOD_ZVAL(&row, &r, &mes, NULL, 0);
	zephir_check_call_status();
	if (!zephir_is_true(&row)) {
		RETURN_MM_BOOL(0);
	}
	i = 0;
	ZEPHIR_CALL_METHOD(&_12, this_ptr, "__getmems", NULL, 0);
	zephir_check_call_status();
	zephir_is_iterable(&_12, 0, "model/PbbDb/ModelBase.zep", 165);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_12), _14, _15, _13)
	{
		ZEPHIR_INIT_NVAR(&pname);
		if (_15 != NULL) { 
			ZVAL_STR_COPY(&pname, _15);
		} else {
			ZVAL_LONG(&pname, _14);
		}
		ZEPHIR_INIT_NVAR(&pv);
		ZVAL_COPY(&pv, _13);
		ZEPHIR_CALL_METHOD(&_16$$6, this_ptr, "isprivate", &_17, 5, &pname);
		zephir_check_call_status();
		if (zephir_is_true(&_16$$6)) {
			continue;
		}
		zephir_array_fetch_long(&_18$$6, &row, i, PH_NOISY | PH_READONLY, "model/PbbDb/ModelBase.zep", 162 TSRMLS_CC);
		zephir_update_property_zval_zval(this_ptr, &pname, &_18$$6 TSRMLS_CC);
		i = (i + 1);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&pv);
	ZEPHIR_INIT_NVAR(&pname);
	RETURN_MM_BOOL(1);

}

PHP_METHOD(Model_PbbDb_ModelBase, getbyid) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *id, id_sub, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&id_sub);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &id);



	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "id");
	ZEPHIR_RETURN_CALL_METHOD(this_ptr, "getby", NULL, 8, &_0, id);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Model_PbbDb_ModelBase, checksafe) {

	zval _3$$3;
	zval __$false, _0, _1, _2$$3, _4$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_3$$3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_1, &_0, "istransaction", NULL, 0);
	zephir_check_call_status();
	if (!zephir_is_true(&_1)) {
		ZEPHIR_INIT_VAR(&_2$$3);
		ZEPHIR_INIT_VAR(&_3$$3);
		zephir_create_array(&_3$$3, 2, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_4$$3);
		ZVAL_STRING(&_4$$3, "只能在事务里头进行插入　,安全的更新和删除　!");
		zephir_array_fast_append(&_3$$3, &_4$$3);
		zephir_array_fast_append(&_3$$3, &__$false);
		ZEPHIR_INIT_NVAR(&_4$$3);
		ZVAL_STRING(&_4$$3, "\\Pbb\\CorePbb::Error");
		ZEPHIR_CALL_USER_FUNC_ARRAY(&_2$$3, &_4$$3, &_3$$3);
		zephir_check_call_status();
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_ModelBase, delete) {

	zval _3;
	zval q;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *safe = NULL, safe_sub, __$true, r, _0, _1, _2, _4, _5, _6, _8, _9, _7$$4, _10$$5;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&safe_sub);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&r);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_10$$5);
	ZVAL_UNDEF(&q);
	ZVAL_UNDEF(&_3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &safe);

	if (!safe) {
		safe = &safe_sub;
		safe = &__$true;
	}


	if (zephir_is_true(safe)) {
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "checksafe", NULL, 3);
		zephir_check_call_status();
	}
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "checkid", NULL, 4);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "gettablename", NULL, 7);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_1);
	ZEPHIR_CONCAT_SVS(&_1, "delete from ", &_0, " where id=?");
	zephir_get_strval(&q, &_1);
	zephir_read_property(&_2, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_3);
	zephir_create_array(&_3, 1, 0 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&_4);
	zephir_read_property(&_4, this_ptr, SL("id"), PH_NOISY_CC);
	zephir_array_fast_append(&_3, &_4);
	ZEPHIR_CALL_METHOD(&r, &_2, "query", NULL, 0, &q, &_3);
	zephir_check_call_status();
	zephir_read_property(&_5, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_6, &_5, "istransaction", NULL, 0);
	zephir_check_call_status();
	if (zephir_is_true(&_6)) {
		ZEPHIR_INIT_ZVAL_NREF(_7$$4);
		ZVAL_LONG(&_7$$4, 0);
		zephir_update_property_zval(this_ptr, SL("id"), &_7$$4);
		RETURN_MM_BOOL(1);
	}
	zephir_read_property(&_8, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_9, &_8, "issuccess", NULL, 0, &r);
	zephir_check_call_status();
	ZEPHIR_CPY_WRT(&r, &_9);
	if (zephir_is_true(&r)) {
		ZEPHIR_INIT_ZVAL_NREF(_10$$5);
		ZVAL_LONG(&_10$$5, 0);
		zephir_update_property_zval(this_ptr, SL("id"), &_10$$5);
	}
	RETURN_CCTOR(&r);

}

PHP_METHOD(Model_PbbDb_ModelBase, __construct) {

	zend_bool _11;
	zend_string *_6;
	zend_ulong _5;
	zval all;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_1 = NULL, *_8 = NULL;
	zval *key = NULL, key_sub, *value = NULL, value_sub, *tablename = NULL, tablename_sub, pname, pv, _0, _2, _3, *_4, _7$$4, _9$$6, _10$$7;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&key_sub);
	ZVAL_UNDEF(&value_sub);
	ZVAL_UNDEF(&tablename_sub);
	ZVAL_UNDEF(&pname);
	ZVAL_UNDEF(&pv);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_9$$6);
	ZVAL_UNDEF(&_10$$7);
	ZVAL_UNDEF(&all);

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
	} else {
		ZEPHIR_SEPARATE_PARAM(tablename);
	}


	ZEPHIR_CALL_SELF(&_0, "getdb", &_1, 1);
	zephir_check_call_status();
	zephir_update_property_zval(this_ptr, SL("_db"), &_0);
	if (ZEPHIR_IS_STRING(tablename, "")) {
		ZEPHIR_INIT_NVAR(tablename);
		ZEPHIR_GET_CONSTANT(tablename, "DB_TABLE");
	}
	zephir_update_property_zval(this_ptr, SL("db_table"), tablename);
	ZEPHIR_INIT_VAR(&all);
	ZVAL_STRING(&all, "");
	ZEPHIR_INIT_VAR(&_2);
	array_init(&_2);
	zephir_update_property_zval(this_ptr, SL("_arr"), &_2);
	ZEPHIR_CALL_METHOD(&_3, this_ptr, "__getmems", NULL, 0);
	zephir_check_call_status();
	zephir_is_iterable(&_3, 0, "model/PbbDb/ModelBase.zep", 216);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_3), _5, _6, _4)
	{
		ZEPHIR_INIT_NVAR(&pname);
		if (_6 != NULL) { 
			ZVAL_STR_COPY(&pname, _6);
		} else {
			ZVAL_LONG(&pname, _5);
		}
		ZEPHIR_INIT_NVAR(&pv);
		ZVAL_COPY(&pv, _4);
		ZEPHIR_CALL_METHOD(&_7$$4, this_ptr, "isprivate", &_8, 5, &pname);
		zephir_check_call_status();
		if (zephir_is_true(&_7$$4)) {
			continue;
		}
		if (ZEPHIR_IS_STRING(&all, "")) {
			ZEPHIR_INIT_LNVAR(_9$$6);
			ZEPHIR_CONCAT_VV(&_9$$6, &all, &pname);
			zephir_get_strval(&all, &_9$$6);
		} else {
			ZEPHIR_INIT_LNVAR(_10$$7);
			ZEPHIR_CONCAT_VSV(&_10$$7, &all, ",", &pname);
			zephir_get_strval(&all, &_10$$7);
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&pv);
	ZEPHIR_INIT_NVAR(&pname);
	zephir_update_property_zval(this_ptr, SL("_allnames"), &all);
	_11 = zephir_is_true(key);
	if (_11) {
		_11 = zephir_is_true(value);
	}
	if (_11) {
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "getby", NULL, 8, key, value);
		zephir_check_call_status();
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_ModelBase, __destruct) {

	zval __$null;
	zval *this_ptr = getThis();

	ZVAL_NULL(&__$null);


	zephir_update_property_zval(this_ptr, SL("_db"), &__$null);

}

PHP_METHOD(Model_PbbDb_ModelBase, __get) {

	zval _7;
	zval q, mes;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *name, name_sub, r, _0, _1, _4, _5, _6, _8, _9, _10, _2$$3, _3$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&r);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&q);
	ZVAL_UNDEF(&mes);
	ZVAL_UNDEF(&_7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &name);



	zephir_read_property(&_0, this_ptr, SL("_arr"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_FUNCTION(&_1, "key_exists", NULL, 6, name, &_0);
	zephir_check_call_status();
	if (zephir_is_true(&_1)) {
		zephir_read_property(&_2$$3, this_ptr, SL("_arr"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch(&_3$$3, &_2$$3, name, PH_NOISY | PH_READONLY, "model/PbbDb/ModelBase.zep", 228 TSRMLS_CC);
		RETURN_CTOR(&_3$$3);
	}
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "checkid", NULL, 4);
	zephir_check_call_status();
	if (ZEPHIR_IS_STRING(name, "id")) {
		ZEPHIR_RETURN_CALL_METHOD(this_ptr, "getid", NULL, 9);
		zephir_check_call_status();
		RETURN_MM();
	}
	ZEPHIR_CALL_METHOD(&_4, this_ptr, "gettablename", NULL, 7);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_5);
	ZEPHIR_CONCAT_SVSVS(&_5, "select ", name, " from ", &_4, " where id=?");
	zephir_get_strval(&q, &_5);
	zephir_read_property(&_6, this_ptr, SL("_db"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_7);
	zephir_create_array(&_7, 1, 0 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&_8);
	zephir_read_property(&_8, this_ptr, SL("id"), PH_NOISY_CC);
	zephir_array_fast_append(&_7, &_8);
	ZEPHIR_CALL_METHOD(&r, &_6, "query", NULL, 0, &q, &_7);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&mes);
	ZVAL_STRING(&mes, "fetch");
	ZEPHIR_CALL_METHOD_ZVAL(&_9, &r, &mes, NULL, 0);
	zephir_check_call_status();
	zephir_array_fetch_long(&_10, &_9, 0, PH_NOISY | PH_READONLY, "model/PbbDb/ModelBase.zep", 237 TSRMLS_CC);
	RETURN_CTOR(&_10);

}

PHP_METHOD(Model_PbbDb_ModelBase, __set) {

	zval _1$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *name, name_sub, *value, value_sub, __$false, _0$$3, _2$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&value_sub);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_1$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &name, &value);



	if (ZEPHIR_IS_STRING(name, "id")) {
		ZEPHIR_INIT_VAR(&_0$$3);
		ZEPHIR_INIT_VAR(&_1$$3);
		zephir_create_array(&_1$$3, 2, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_2$$3);
		ZVAL_STRING(&_2$$3, "不能修改　id!");
		zephir_array_fast_append(&_1$$3, &_2$$3);
		zephir_array_fast_append(&_1$$3, &__$false);
		ZEPHIR_INIT_NVAR(&_2$$3);
		ZVAL_STRING(&_2$$3, "\\Pbb\\CorePbb::Error");
		ZEPHIR_CALL_USER_FUNC_ARRAY(&_0$$3, &_2$$3, &_1$$3);
		zephir_check_call_status();
	}
	zephir_update_property_array(this_ptr, SL("_arr"), name, value TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_ModelBase, __getmems) {

	zval _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	zephir_create_array(return_value, 1, 0 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("id"), PH_NOISY_CC);
	zephir_array_update_string(return_value, SL("id"), &_0, PH_COPY | PH_SEPARATE);
	RETURN_MM();

}

