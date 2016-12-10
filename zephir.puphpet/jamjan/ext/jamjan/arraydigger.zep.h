
extern zend_class_entry *jamjan_arraydigger_ce;

ZEPHIR_INIT_CLASS(Jamjan_Arraydigger);

PHP_METHOD(Jamjan_Arraydigger, extract_data);

ZEND_BEGIN_ARG_INFO_EX(arginfo_jamjan_arraydigger_extract_data, 0, 0, 2)
	ZEND_ARG_ARRAY_INFO(0, resource_data, 0)
	ZEND_ARG_INFO(0, path)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(jamjan_arraydigger_method_entry) {
	PHP_ME(Jamjan_Arraydigger, extract_data, arginfo_jamjan_arraydigger_extract_data, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
