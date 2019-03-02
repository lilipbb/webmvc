
extern zend_class_entry *model_pbbdb_modelall_ce;

ZEPHIR_INIT_CLASS(Model_PbbDb_ModelAll);

PHP_METHOD(Model_PbbDb_ModelAll, __construct);
PHP_METHOD(Model_PbbDb_ModelAll, where);
PHP_METHOD(Model_PbbDb_ModelAll, orderby);
PHP_METHOD(Model_PbbDb_ModelAll, limit);
PHP_METHOD(Model_PbbDb_ModelAll, _end);
PHP_METHOD(Model_PbbDb_ModelAll, getArray);

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelall___construct, 0, 0, 0)
	ZEND_ARG_INFO(0, selectnames)
	ZEND_ARG_INFO(0, tablename)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelall_where, 0, 0, 1)
	ZEND_ARG_INFO(0, mes)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelall_orderby, 0, 0, 1)
	ZEND_ARG_INFO(0, mes)
	ZEND_ARG_INFO(0, desc)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_pbbdb_modelall_limit, 0, 0, 1)
	ZEND_ARG_INFO(0, start)
	ZEND_ARG_INFO(0, end)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(model_pbbdb_modelall_method_entry) {
	PHP_ME(Model_PbbDb_ModelAll, __construct, arginfo_model_pbbdb_modelall___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Model_PbbDb_ModelAll, where, arginfo_model_pbbdb_modelall_where, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_ModelAll, orderby, arginfo_model_pbbdb_modelall_orderby, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_ModelAll, limit, arginfo_model_pbbdb_modelall_limit, ZEND_ACC_PUBLIC)
	PHP_ME(Model_PbbDb_ModelAll, _end, NULL, ZEND_ACC_PRIVATE)
	PHP_ME(Model_PbbDb_ModelAll, getArray, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
