[
    {
        "type": "namespace",
        "name": "Jamjan",
        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Arraydigger",
        "abstract": 0,
        "final": 0,
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "extract_data",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "resource_data",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                            "line": 5,
                            "char": 53
                        },
                        {
                            "type": "parameter",
                            "name": "path",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                            "line": 5,
                            "char": 65
                        },
                        {
                            "type": "parameter",
                            "name": "delimiter",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": ".",
                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                "line": 5,
                                "char": 89
                            },
                            "reference": 0,
                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                            "line": 5,
                            "char": 89
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "path_exploded",
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 6,
                                    "char": 26
                                }
                            ],
                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                            "line": 7,
                            "char": 13
                        },
                        {
                            "type": "declare",
                            "data-type": "array",
                            "variables": [
                                {
                                    "variable": "copy",
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 7,
                                    "char": 19
                                }
                            ],
                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                            "line": 8,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "value",
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 8,
                                    "char": 18
                                }
                            ],
                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                            "line": 9,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "_value",
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 9,
                                    "char": 19
                                }
                            ],
                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                            "line": 10,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "path_exploded",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "explode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "delimiter",
                                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                    "line": 10,
                                                    "char": 46
                                                },
                                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                "line": 10,
                                                "char": 46
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "path",
                                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                    "line": 10,
                                                    "char": 51
                                                },
                                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                "line": 10,
                                                "char": 51
                                            }
                                        ],
                                        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                        "line": 10,
                                        "char": 52
                                    },
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 10,
                                    "char": 52
                                }
                            ],
                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                            "line": 12,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "empty",
                                        "left": {
                                            "type": "list",
                                            "left": {
                                                "type": "variable",
                                                "value": "path_exploded",
                                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                "line": 12,
                                                "char": 35
                                            },
                                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                            "line": 12,
                                            "char": 36
                                        },
                                        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                        "line": 12,
                                        "char": 36
                                    },
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 12,
                                    "char": 36
                                },
                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                "line": 12,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "copy",
                                            "expr": {
                                                "type": "variable",
                                                "value": "resource_data",
                                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                "line": 13,
                                                "char": 37
                                            },
                                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                            "line": 13,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 14,
                                    "char": 15
                                },
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "path_exploded",
                                        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                        "line": 14,
                                        "char": 40
                                    },
                                    "value": "value",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "_value",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "value",
                                                        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                        "line": 15,
                                                        "char": 31
                                                    },
                                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                    "line": 15,
                                                    "char": 31
                                                }
                                            ],
                                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                            "line": 16,
                                            "char": 18
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "list",
                                                "left": {
                                                    "type": "isset",
                                                    "left": {
                                                        "type": "list",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "copy",
                                                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                                "line": 16,
                                                                "char": 30
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "_value",
                                                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                                "line": 16,
                                                                "char": 37
                                                            },
                                                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                            "line": 16,
                                                            "char": 38
                                                        },
                                                        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                        "line": 16,
                                                        "char": 39
                                                    },
                                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                    "line": 16,
                                                    "char": 39
                                                },
                                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                "line": 16,
                                                "char": 41
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "copy",
                                                            "expr": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "copy",
                                                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                                    "line": 17,
                                                                    "char": 36
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "_value",
                                                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                                    "line": 17,
                                                                    "char": 43
                                                                },
                                                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                                "line": 17,
                                                                "char": 44
                                                            },
                                                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                            "line": 17,
                                                            "char": 44
                                                        }
                                                    ],
                                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                    "line": 18,
                                                    "char": 17
                                                }
                                            ],
                                            "else_statements": [
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "null",
                                                        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                        "line": 19,
                                                        "char": 32
                                                    },
                                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                                    "line": 20,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                            "line": 21,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 22,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "copy",
                                        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                        "line": 22,
                                        "char": 24
                                    },
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 23,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                        "line": 24,
                                        "char": 24
                                    },
                                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                    "line": 25,
                                    "char": 9
                                }
                            ],
                            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                            "line": 26,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                "line": 5,
                                "char": 101
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                                "line": 5,
                                "char": 108
                            }
                        ],
                        "void": 0,
                        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                        "line": 5,
                        "char": 108
                    },
                    "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
                    "line": 5,
                    "last-line": 27,
                    "char": 19
                }
            ],
            "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/var\/www\/zephir.puphpet\/jamjan\/jamjan\/Arraydigger.zep",
        "line": 3,
        "char": 5
    }
]