
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
#include "kernel/operators.h"
#include "kernel/memory.h"


ZEPHIR_INIT_CLASS(Jamjan_Arraydigger) {

	ZEPHIR_REGISTER_CLASS(Jamjan, Arraydigger, jamjan, arraydigger, jamjan_arraydigger_method_entry, 0);

	zephir_declare_class_constant_string(jamjan_arraydigger_ce, SL("EXTRACT_DELIMITER"), ".");

	zephir_declare_class_constant_string(jamjan_arraydigger_ce, SL("TOKEN_DELIMITER"), "#");

	zephir_declare_class_constant_string(jamjan_arraydigger_ce, SL("TOKEN_EXPRESSION"), "~%s(.*?)%s~");

	return SUCCESS;

}

PHP_METHOD(Jamjan_Arraydigger, extract_data) {

	zval path;
	zval *resource_data_param = NULL, *path_param = NULL;
	zval resource_data;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&resource_data);
	ZVAL_UNDEF(&path);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &resource_data_param, &path_param);

	zephir_get_arrval(&resource_data, resource_data_param);
	zephir_get_strval(&path, path_param);


	RETURN_MM_STRING("Hello");

}

