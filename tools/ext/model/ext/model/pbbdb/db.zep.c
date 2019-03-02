
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
#include "kernel/object.h"
#include "kernel/memory.h"
#include "kernel/fcall.h"
#include "kernel/operators.h"
#include "kernel/array.h"
#include "kernel/file.h"
#include "kernel/concat.h"
#include "ext/pdo/php_pdo_driver.h"
#include "kernel/main.h"


ZEPHIR_INIT_CLASS(Model_PbbDb_Db) {

	ZEPHIR_REGISTER_CLASS(Model\\PbbDb, Db, model, pbbdb_db, model_pbbdb_db_method_entry, 0);

	zend_declare_property_null(model_pbbdb_db_ce, SL("isconnect"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_db_ce, SL("isTransaction"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_db_ce, SL("prepareobj"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(model_pbbdb_db_ce, SL("pdo"), ZEND_ACC_PUBLIC TSRMLS_CC);

	return SUCCESS;

}

PHP_METHOD(Model_PbbDb_Db, isTransaction) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "isTransaction");

}

PHP_METHOD(Model_PbbDb_Db, isConnect) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "isconnect");

}

PHP_METHOD(Model_PbbDb_Db, __construct) {

	zval _3$$3;
	zval __$true, __$false, _0, _1, _2$$3, _4$$3, _5$$3, _6$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_3$$3);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "DB_HOST");
	ZEPHIR_CALL_FUNCTION(&_1, "defined", NULL, 10, &_0);
	zephir_check_call_status();
	if (!zephir_is_true(&_1)) {
		ZEPHIR_INIT_VAR(&_2$$3);
		ZEPHIR_INIT_VAR(&_3$$3);
		zephir_create_array(&_3$$3, 1, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_4$$3);
		ZEPHIR_INIT_VAR(&_5$$3);
		ZEPHIR_GET_CONSTANT(&_5$$3, "PATH_CONFIG");
		ZEPHIR_INIT_VAR(&_6$$3);
		ZEPHIR_CONCAT_VS(&_6$$3, &_5$$3, "mysqlconfig.php");
		zephir_file_get_contents(&_4$$3, &_6$$3 TSRMLS_CC);
		zephir_array_fast_append(&_3$$3, &_4$$3);
		ZEPHIR_INIT_NVAR(&_4$$3);
		ZVAL_STRING(&_4$$3, "_include");
		ZEPHIR_CALL_USER_FUNC_ARRAY(&_2$$3, &_4$$3, &_3$$3);
		zephir_check_call_status();
	}
	if (0) {
		zephir_update_property_zval(this_ptr, SL("isconnect"), &__$true);
	} else {
		zephir_update_property_zval(this_ptr, SL("isconnect"), &__$false);
	}
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "init", NULL, 0);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "pingdb", NULL, 0);
	zephir_check_call_status();
	if (0) {
		zephir_update_property_zval(this_ptr, SL("isTransaction"), &__$true);
	} else {
		zephir_update_property_zval(this_ptr, SL("isTransaction"), &__$false);
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_Db, init) {

	zval _9$$4;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval __$true, __$false, arr, e, _7, _0$$3, _1$$3, _2$$3, _3$$3, _4$$3, _5$$3, _6$$3, _8$$4, _10$$4, _11$$4, _12$$4;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&arr);
	ZVAL_UNDEF(&e);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_10$$4);
	ZVAL_UNDEF(&_11$$4);
	ZVAL_UNDEF(&_12$$4);
	ZVAL_UNDEF(&_9$$4);

	ZEPHIR_MM_GROW();


	/* try_start_1: */

		ZEPHIR_INIT_VAR(&arr);
		zephir_create_array(&arr, 4, 0 TSRMLS_CC);
		add_index_stringl(&arr, 1002, SL("SET NAMES utf8;"));
		add_index_long(&arr, 3, 2);
		add_index_long(&arr, 19, 3);
		zephir_array_update_long(&arr, 12, &__$true, PH_COPY ZEPHIR_DEBUG_PARAMS_DUMMY);
		ZEPHIR_INIT_VAR(&_0$$3);
		object_init_ex(&_0$$3, php_pdo_get_dbh_ce());
		ZEPHIR_INIT_VAR(&_1$$3);
		ZEPHIR_GET_CONSTANT(&_1$$3, "DB_HOST");
		ZEPHIR_INIT_VAR(&_2$$3);
		ZEPHIR_GET_CONSTANT(&_2$$3, "DB_NAME");
		ZEPHIR_INIT_VAR(&_3$$3);
		ZEPHIR_GET_CONSTANT(&_3$$3, "DB_PORT");
		ZEPHIR_INIT_VAR(&_4$$3);
		ZEPHIR_CONCAT_SVSVSV(&_4$$3, "mysql:host=", &_1$$3, ";dbname=", &_2$$3, ";port=", &_3$$3);
		ZEPHIR_INIT_VAR(&_5$$3);
		ZEPHIR_GET_CONSTANT(&_5$$3, "DB_USER");
		ZEPHIR_INIT_VAR(&_6$$3);
		ZEPHIR_GET_CONSTANT(&_6$$3, "DB_PSD");
		ZEPHIR_CALL_METHOD(NULL, &_0$$3, "__construct", NULL, 0, &_4$$3, &_5$$3, &_6$$3, &arr);
		zephir_check_call_status_or_jump(try_end_1);
		zephir_update_property_zval(this_ptr, SL("pdo"), &_0$$3);
		if (1) {
			zephir_update_property_zval(this_ptr, SL("isconnect"), &__$true);
		} else {
			zephir_update_property_zval(this_ptr, SL("isconnect"), &__$false);
		}

	try_end_1:

	if (EG(exception)) {
		ZEPHIR_INIT_VAR(&_7);
		ZVAL_OBJ(&_7, EG(exception));
		Z_ADDREF_P(&_7);
		if (zephir_instance_of_ev(&_7, php_pdo_get_exception() TSRMLS_CC)) {
			zend_clear_exception(TSRMLS_C);
			ZEPHIR_CPY_WRT(&e, &_7);
			ZEPHIR_INIT_VAR(&_8$$4);
			ZEPHIR_INIT_VAR(&_9$$4);
			zephir_create_array(&_9$$4, 1, 0 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(&_10$$4, &e, "getmessage", NULL, 0);
			zephir_check_call_status();
			ZEPHIR_INIT_VAR(&_11$$4);
			ZEPHIR_CONCAT_SV(&_11$$4, "连接数据库失败　:", &_10$$4);
			zephir_array_fast_append(&_9$$4, &_11$$4);
			ZEPHIR_INIT_VAR(&_12$$4);
			ZVAL_STRING(&_12$$4, "\\Pbb\\CorePbb::Log");
			ZEPHIR_CALL_USER_FUNC_ARRAY(&_8$$4, &_12$$4, &_9$$4);
			zephir_check_call_status();
		}
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_Db, pingdb) {

	zval __$null, e, _2, _0$$3, _1$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&e);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1$$3);

	ZEPHIR_MM_GROW();


	/* try_start_1: */

		zephir_read_property(&_0$$3, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
		ZVAL_LONG(&_1$$3, 4);
		ZEPHIR_CALL_METHOD(NULL, &_0$$3, "getattribute", NULL, 0, &_1$$3);
		zephir_check_call_status_or_jump(try_end_1);

	try_end_1:

	if (EG(exception)) {
		ZEPHIR_INIT_VAR(&_2);
		ZVAL_OBJ(&_2, EG(exception));
		Z_ADDREF_P(&_2);
		if (zephir_instance_of_ev(&_2, php_pdo_get_exception() TSRMLS_CC)) {
			zend_clear_exception(TSRMLS_C);
			ZEPHIR_CPY_WRT(&e, &_2);
			zephir_update_property_zval(this_ptr, SL("pdo"), &__$null);
			ZEPHIR_CALL_METHOD(NULL, this_ptr, "init", NULL, 0);
			zephir_check_call_status();
		}
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_Db, getlastid) {

	zval _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_RETURN_CALL_METHOD(&_0, "lastinsertid", NULL, 0);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Model_PbbDb_Db, issuccess) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *query, query_sub, _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&query_sub);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &query);



	ZEPHIR_INIT_VAR(&_0);
	zephir_gettype(&_0, query TSRMLS_CC);
	if (!ZEPHIR_IS_STRING(&_0, "object")) {
		RETURN_MM_BOOL(0);
	}
	ZEPHIR_CALL_METHOD(&_1, query, "rowcount", NULL, 0);
	zephir_check_call_status();
	RETURN_MM_BOOL(ZEPHIR_GT_LONG(&_1, 0));

}

PHP_METHOD(Model_PbbDb_Db, query) {

	zval _6$$6;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *mes, mes_sub, *args, args_sub, pre, e, _4, _0$$3, _2$$3, _3$$3, _1$$4, _5$$6, _7$$6, _8$$6, _9$$6;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&mes_sub);
	ZVAL_UNDEF(&args_sub);
	ZVAL_UNDEF(&pre);
	ZVAL_UNDEF(&e);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_1$$4);
	ZVAL_UNDEF(&_5$$6);
	ZVAL_UNDEF(&_7$$6);
	ZVAL_UNDEF(&_8$$6);
	ZVAL_UNDEF(&_9$$6);
	ZVAL_UNDEF(&_6$$6);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &mes, &args);




	/* try_start_1: */

		zephir_read_property(&_0$$3, this_ptr, SL("isTransaction"), PH_NOISY_CC | PH_READONLY);
		if (zephir_is_true(&_0$$3)) {
			ZEPHIR_INIT_VAR(&_1$$4);
			zephir_get_args(&_1$$4);
			zephir_update_property_array_append(this_ptr, SL("prepareobj"), &_1$$4 TSRMLS_CC);
			RETURN_MM_NULL();
		}
		zephir_read_property(&_2$$3, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&pre, &_2$$3, "prepare", NULL, 0, mes);
		zephir_check_call_status_or_jump(try_end_1);
		ZEPHIR_CALL_METHOD(&_3$$3, &pre, "execute", NULL, 0, args);
		zephir_check_call_status_or_jump(try_end_1);
		if (zephir_is_true(&_3$$3)) {
			RETURN_CCTOR(&pre);
		}

	try_end_1:

	if (EG(exception)) {
		ZEPHIR_INIT_VAR(&_4);
		ZVAL_OBJ(&_4, EG(exception));
		Z_ADDREF_P(&_4);
		if (zephir_instance_of_ev(&_4, php_pdo_get_exception() TSRMLS_CC)) {
			zend_clear_exception(TSRMLS_C);
			ZEPHIR_CPY_WRT(&e, &_4);
			ZEPHIR_INIT_VAR(&_5$$6);
			ZEPHIR_INIT_VAR(&_6$$6);
			zephir_create_array(&_6$$6, 1, 0 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(&_7$$6, &e, "getmessage", NULL, 0);
			zephir_check_call_status();
			ZEPHIR_INIT_VAR(&_8$$6);
			ZEPHIR_CONCAT_VV(&_8$$6, mes, &_7$$6);
			zephir_array_fast_append(&_6$$6, &_8$$6);
			ZEPHIR_INIT_VAR(&_9$$6);
			ZVAL_STRING(&_9$$6, "\\Pbb\\CorePbb::Log");
			ZEPHIR_CALL_USER_FUNC_ARRAY(&_5$$6, &_9$$6, &_6$$6);
			zephir_check_call_status();
		}
	}
	RETURN_MM_BOOL(0);

}

PHP_METHOD(Model_PbbDb_Db, beginTransaction) {

	zval _5$$5;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval __$true, __$false, e, _0, _1, _3, _2$$4, _4$$5, _6$$5, _7$$5, _8$$5;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&e);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_6$$5);
	ZVAL_UNDEF(&_7$$5);
	ZVAL_UNDEF(&_8$$5);
	ZVAL_UNDEF(&_5$$5);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("isTransaction"), PH_NOISY_CC | PH_READONLY);
	if (zephir_is_true(&_0)) {
		RETURN_MM_NULL();
	}
	if (1) {
		zephir_update_property_zval(this_ptr, SL("isTransaction"), &__$true);
	} else {
		zephir_update_property_zval(this_ptr, SL("isTransaction"), &__$false);
	}
	ZEPHIR_INIT_VAR(&_1);
	array_init(&_1);
	zephir_update_property_zval(this_ptr, SL("preparefun"), &_1);

	/* try_start_1: */

		zephir_read_property(&_2$$4, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(NULL, &_2$$4, "begintransaction", NULL, 0);
		zephir_check_call_status_or_jump(try_end_1);

	try_end_1:

	if (EG(exception)) {
		ZEPHIR_INIT_VAR(&_3);
		ZVAL_OBJ(&_3, EG(exception));
		Z_ADDREF_P(&_3);
		if (zephir_instance_of_ev(&_3, php_pdo_get_exception() TSRMLS_CC)) {
			zend_clear_exception(TSRMLS_C);
			ZEPHIR_CPY_WRT(&e, &_3);
			ZEPHIR_INIT_VAR(&_4$$5);
			ZEPHIR_INIT_VAR(&_5$$5);
			zephir_create_array(&_5$$5, 1, 0 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(&_6$$5, &e, "getmessage", NULL, 0);
			zephir_check_call_status();
			ZEPHIR_INIT_VAR(&_7$$5);
			ZEPHIR_CONCAT_SV(&_7$$5, "安全类型的　model对象还未释放　!不能创建新的安全类型的对象　", &_6$$5);
			zephir_array_fast_append(&_5$$5, &_7$$5);
			ZEPHIR_INIT_VAR(&_8$$5);
			ZVAL_STRING(&_8$$5, "\\Pbb\\CorePbb::log");
			ZEPHIR_CALL_USER_FUNC_ARRAY(&_4$$5, &_8$$5, &_5$$5);
			zephir_check_call_status();
		}
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_Db, commit) {

	zval _12$$8;
	zephir_fcall_cache_entry *_7 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval __$true, __$false, r, value, e, _0, _1, _9, _2$$5, *_3$$5, _8$$5, _4$$6, _5$$6, _6$$6, _10$$8, _11$$8, _13$$8, _14$$8;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&r);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&e);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_2$$5);
	ZVAL_UNDEF(&_8$$5);
	ZVAL_UNDEF(&_4$$6);
	ZVAL_UNDEF(&_5$$6);
	ZVAL_UNDEF(&_6$$6);
	ZVAL_UNDEF(&_10$$8);
	ZVAL_UNDEF(&_11$$8);
	ZVAL_UNDEF(&_13$$8);
	ZVAL_UNDEF(&_14$$8);
	ZVAL_UNDEF(&_12$$8);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("isTransaction"), PH_NOISY_CC | PH_READONLY);
	if (!zephir_is_true(&_0)) {
		php_printf("%s", "事务还没开始　!");
	}
	if (0) {
		zephir_update_property_zval(this_ptr, SL("isTransaction"), &__$true);
	} else {
		zephir_update_property_zval(this_ptr, SL("isTransaction"), &__$false);
	}
	zephir_read_property(&_1, this_ptr, SL("isconnect"), PH_NOISY_CC | PH_READONLY);
	if (!zephir_is_true(&_1)) {
		RETURN_MM_BOOL(0);
	}

	/* try_start_1: */

		ZEPHIR_OBS_VAR(&_2$$5);
		zephir_read_property(&_2$$5, this_ptr, SL("prepareobj"), PH_NOISY_CC);
		zephir_is_iterable(&_2$$5, 0, "model/PbbDb/Db.zep", 99);
		ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_2$$5), _3$$5)
		{
			ZEPHIR_INIT_NVAR(&value);
			ZVAL_COPY(&value, _3$$5);
			zephir_array_fetch_long(&_5$$6, &value, 0, PH_NOISY | PH_READONLY, "model/PbbDb/Db.zep", 95 TSRMLS_CC);
			zephir_array_fetch_long(&_6$$6, &value, 1, PH_NOISY | PH_READONLY, "model/PbbDb/Db.zep", 95 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(&_4$$6, this_ptr, "query", &_7, 0, &_5$$6, &_6$$6);
			zephir_check_call_status_or_jump(try_end_1);
			if (!zephir_is_true(&_4$$6)) {
				RETURN_MM_BOOL(0);
			}
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&value);
		zephir_read_property(&_8$$5, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&r, &_8$$5, "commit", NULL, 0);
		zephir_check_call_status_or_jump(try_end_1);
		RETURN_CCTOR(&r);

	try_end_1:

	if (EG(exception)) {
		ZEPHIR_INIT_VAR(&_9);
		ZVAL_OBJ(&_9, EG(exception));
		Z_ADDREF_P(&_9);
		if (zephir_instance_of_ev(&_9, php_pdo_get_exception() TSRMLS_CC)) {
			zend_clear_exception(TSRMLS_C);
			ZEPHIR_CPY_WRT(&e, &_9);
			zephir_read_property(&_10$$8, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_CALL_METHOD(NULL, &_10$$8, "rollback", NULL, 0);
			zephir_check_call_status();
			ZEPHIR_INIT_VAR(&_11$$8);
			ZEPHIR_INIT_VAR(&_12$$8);
			zephir_create_array(&_12$$8, 1, 0 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(&_13$$8, &e, "getmessage", NULL, 0);
			zephir_check_call_status();
			zephir_array_fast_append(&_12$$8, &_13$$8);
			ZEPHIR_INIT_VAR(&_14$$8);
			ZVAL_STRING(&_14$$8, "\\Pbb\\CorePbb::Log");
			ZEPHIR_CALL_USER_FUNC_ARRAY(&_11$$8, &_14$$8, &_12$$8);
			zephir_check_call_status();
		}
	}
	RETURN_MM_BOOL(0);

}

PHP_METHOD(Model_PbbDb_Db, rollback) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval __$true, __$false, _0, _1$$3;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("isTransaction"), PH_NOISY_CC | PH_READONLY);
	if (zephir_is_true(&_0)) {
		if (0) {
			zephir_update_property_zval(this_ptr, SL("isTransaction"), &__$true);
		} else {
			zephir_update_property_zval(this_ptr, SL("isTransaction"), &__$false);
		}
		zephir_read_property(&_1$$3, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(NULL, &_1$$3, "rollback", NULL, 0);
		zephir_check_call_status();
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Model_PbbDb_Db, __destruct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();


	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_METHOD(NULL, this_ptr, "rollback", NULL, 0);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

