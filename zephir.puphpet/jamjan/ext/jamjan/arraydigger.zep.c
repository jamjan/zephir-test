
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
#include "kernel/string.h"
#include "kernel/memory.h"
#include "kernel/operators.h"
#include "kernel/hash.h"
#include "kernel/array.h"


ZEPHIR_INIT_CLASS(Jamjan_Arraydigger) {

	ZEPHIR_REGISTER_CLASS(Jamjan, Arraydigger, jamjan, arraydigger, jamjan_arraydigger_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Jamjan_Arraydigger, extract_data) {

	zval path, delimiter;
	zval *resource_data_param = NULL, *path_param = NULL, *delimiter_param = NULL, path_exploded, value, _value, *_0$$3, _1$$5;
	zval resource_data, copy;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&resource_data);
	ZVAL_UNDEF(&copy);
	ZVAL_UNDEF(&path_exploded);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_value);
	ZVAL_UNDEF(&_1$$5);
	ZVAL_UNDEF(&path);
	ZVAL_UNDEF(&delimiter);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 1, &resource_data_param, &path_param, &delimiter_param);

	zephir_get_arrval(&resource_data, resource_data_param);
	zephir_get_strval(&path, path_param);
	if (!delimiter_param) {
		ZEPHIR_INIT_VAR(&delimiter);
		ZVAL_STRING(&delimiter, ".");
	} else {
		zephir_get_strval(&delimiter, delimiter_param);
	}


	ZEPHIR_INIT_VAR(&path_exploded);
	zephir_fast_explode(&path_exploded, &delimiter, &path, LONG_MAX TSRMLS_CC);
	if (!(ZEPHIR_IS_EMPTY(&path_exploded))) {
		ZEPHIR_CPY_WRT(&copy, &resource_data);
		zephir_is_iterable(&path_exploded, 0, "jamjan/Arraydigger.zep", 22);
		ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&path_exploded), _0$$3)
		{
			ZEPHIR_INIT_NVAR(&value);
			ZVAL_COPY(&value, _0$$3);
			ZEPHIR_CPY_WRT(&_value, &value);
			if (zephir_array_isset(&copy, &_value)) {
				zephir_array_fetch(&_1$$5, &copy, &_value, PH_NOISY | PH_READONLY, "jamjan/Arraydigger.zep", 17 TSRMLS_CC);
				ZEPHIR_CPY_WRT(&copy, &_1$$5);
			} else {
				RETURN_MM_NULL();
			}
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&value);
		RETURN_CTOR(copy);
	} else {
		RETURN_MM_NULL();
	}

}

