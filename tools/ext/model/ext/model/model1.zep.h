
extern zend_class_entry *model_model1_ce;

ZEPHIR_INIT_CLASS(Model_Model1);

PHP_METHOD(Model_Model1, __construct);
PHP_METHOD(Model_Model1, __getmems);

ZEND_BEGIN_ARG_INFO_EX(arginfo_model_model1___construct, 0, 0, 0)
	ZEND_ARG_INFO(0, key)
	ZEND_ARG_INFO(0, value)
	ZEND_ARG_INFO(0, tablename)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(model_model1_method_entry) {
	PHP_ME(Model_Model1, __construct, arginfo_model_model1___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Model_Model1, __getmems, NULL, ZEND_ACC_PROTECTED)
	PHP_FE_END
};
