
extern zend_class_entry *model_pbbdb_modelbase_ce;

ZEPHIR_INIT_CLASS(Model_PbbDb_ModelBase);

PHP_METHOD(Model_PbbDb_ModelBase, beginTransaction);
PHP_METHOD(Model_PbbDb_ModelBase, Commit);
PHP_METHOD(Model_PbbDb_ModelBase, GetDb);
PHP_METHOD(Model_PbbDb_ModelBase, gettablename);
PHP_METHOD(Model_PbbDb_ModelBase, getid);
PHP_METHOD(Model_PbbDb_ModelBase, haveuser);
PHP_METHOD(Model_PbbDb_ModelBase, checkid);
PHP_METHOD(Model_PbbDb_ModelBase, isConnect);
PHP_METHOD(Model_PbbDb_ModelBase, isprivate);
PHP_METHOD(Model_PbbDb_ModelBase, update);
PHP_METHOD(Model_PbbDb_ModelBase, insert);
PHP_METHOD(Model_PbbDb_ModelBase, getby);
PHP_METHOD(Model_PbbDb_ModelBase, getbyid);
PHP_METHOD(Model_PbbDb_ModelBase, checksafe);
PHP_METHOD(Model_PbbDb_ModelBase, delete);
PHP_METHOD(Model_PbbDb_ModelBase, __construct);
PHP_METHOD(Model_PbbDb_ModelBase, __destruct);
PHP_METHOD(Model_PbbDb_ModelBase, __get);
PHP_METHOD(Model_PbbDb_ModelBase, __set);
PHP_METHOD(Model_PbbDb_ModelBase, __getmems);

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelbase_isprivate, 0, 0, 1)
	ZEND_ARG_INFO(0, pname)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelbase_update, 0, 0, 0)
	ZEND_ARG_INFO(0, safe)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelbase_getby, 0, 0, 2)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelbase_getbyid, 0, 0, 1)
	ZEND_ARG_INFO(0, id)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelbase_delete, 0, 0, 0)
	ZEND_ARG_INFO(0, safe)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelbase___construct, 0, 0, 0)
	ZEND_ARG_INFO(0, key)
	ZEND_ARG_INFO(0, value)
	ZEND_ARG_INFO(0, tablename)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelbase___get, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelbase___set, 0, 0, 2)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(model_pbbdb_modelbase_method_entry) {
	PHP_ME(Model_PbbDb_ModelBase, beginTransaction, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL|ZEND_ACC_STATIC)
	PHP_ME(Model_PbbDb_ModelBase, Commit, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL|ZEND_ACC_STATIC)
	PHP_ME(Model_PbbDb_ModelBase, GetDb, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL|ZEND_ACC_STATIC)
	PHP_ME(Model_PbbDb_ModelBase, gettablename, NULL, ZEND_ACC_PROTECTED|ZEND_ACC_FINAL)
	PHP_ME(Model_PbbDb_ModelBase, getid, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	PHP_ME(Model_PbbDb_ModelBase, haveuser, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	PHP_ME(Model_PbbDb_ModelBase, checkid, NULL, ZEND_ACC_PRIVATE)
	PHP_ME(Model_PbbDb_ModelBase, isConnect, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	PHP_ME(Model_PbbDb_ModelBase, isprivate, arginfo_model_pbbdb_modelbase_isprivate, ZEND_ACC_PRIVATE)
	PHP_ME(Model_PbbDb_ModelBase, update, arginfo_model_pbbdb_modelbase_update, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	PHP_ME(Model_PbbDb_ModelBase, insert, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	PHP_ME(Model_PbbDb_ModelBase, getby, arginfo_model_pbbdb_modelbase_getby, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	PHP_ME(Model_PbbDb_ModelBase, getbyid, arginfo_model_pbbdb_modelbase_getbyid, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	PHP_ME(Model_PbbDb_ModelBase, checksafe, NULL, ZEND_ACC_PRIVATE)
	PHP_ME(Model_PbbDb_ModelBase, delete, arginfo_model_pbbdb_modelbase_delete, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	PHP_ME(Model_PbbDb_ModelBase, __construct, arginfo_model_pbbdb_modelbase___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Model_PbbDb_ModelBase, __destruct, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_DTOR)
	PHP_ME(Model_PbbDb_ModelBase, __get, arginfo_model_pbbdb_modelbase___get, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_ModelBase, __set, arginfo_model_pbbdb_modelbase___set, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_ModelBase, __getmems, NULL, ZEND_ACC_PROTECTED)
	PHP_FE_END
};
