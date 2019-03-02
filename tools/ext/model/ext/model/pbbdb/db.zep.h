
extern zend_class_entry *model_pbbdb_db_ce;

ZEPHIR_INIT_CLASS(Model_PbbDb_Db);

PHP_METHOD(Model_PbbDb_Db, isTransaction);
PHP_METHOD(Model_PbbDb_Db, isConnect);
PHP_METHOD(Model_PbbDb_Db, __construct);
PHP_METHOD(Model_PbbDb_Db, init);
PHP_METHOD(Model_PbbDb_Db, pingdb);
PHP_METHOD(Model_PbbDb_Db, getlastid);
PHP_METHOD(Model_PbbDb_Db, issuccess);
PHP_METHOD(Model_PbbDb_Db, query);
PHP_METHOD(Model_PbbDb_Db, beginTransaction);
PHP_METHOD(Model_PbbDb_Db, commit);
PHP_METHOD(Model_PbbDb_Db, rollback);
PHP_METHOD(Model_PbbDb_Db, __destruct);

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_db_issuccess, 0, 0, 1)
	ZEND_ARG_INFO(0, query)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_db_query, 0, 0, 2)
	ZEND_ARG_INFO(0, mes)
	ZEND_ARG_INFO(0, args)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(model_pbbdb_db_method_entry) {
	PHP_ME(Model_PbbDb_Db, isTransaction, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, isConnect, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, __construct, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Model_PbbDb_Db, init, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, pingdb, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, getlastid, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, issuccess, arginfo_model_pbbdb_db_issuccess, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, query, arginfo_model_pbbdb_db_query, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, beginTransaction, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, commit, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, rollback, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_Db, __destruct, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_DTOR)
	PHP_FE_END
};
