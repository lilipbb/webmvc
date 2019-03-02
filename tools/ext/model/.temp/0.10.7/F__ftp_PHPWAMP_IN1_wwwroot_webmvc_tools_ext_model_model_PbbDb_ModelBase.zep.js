[
    {
        "type": "namespace",
        "name": "Model\\PbbDb",
        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
        "line": 2,
        "char": 6
    },
    {
        "type": "class",
        "name": "ModelBase",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_db",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 4,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "db_table",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 5,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_arr",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 6,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_allnames",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 7,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "id",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 8,
                    "char": 8
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public",
                        "final",
                        "static"
                    ],
                    "type": "method",
                    "name": "beginTransaction",
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "scall",
                                    "dynamic-class": 0,
                                    "class": "self",
                                    "dynamic": 0,
                                    "name": "GetDb",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 9,
                                    "char": 20
                                },
                                "name": "beginTransaction",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 9,
                                "char": 39
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 10,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 8,
                    "last-line": 11,
                    "char": 30
                },
                {
                    "visibility": [
                        "public",
                        "final",
                        "static"
                    ],
                    "type": "method",
                    "name": "Commit",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "scall",
                                    "dynamic-class": 0,
                                    "class": "self",
                                    "dynamic": 0,
                                    "name": "GetDb",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 12,
                                    "char": 27
                                },
                                "name": "commit",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 12,
                                "char": 36
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 13,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 11,
                    "last-line": 14,
                    "char": 30
                },
                {
                    "visibility": [
                        "public",
                        "final",
                        "static"
                    ],
                    "type": "method",
                    "name": "GetDb",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "isset",
                                        "left": {
                                            "type": "list",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "_GET",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 15,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "mysql_db",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 15,
                                                    "char": 31
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 15,
                                                "char": 32
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 15,
                                            "char": 33
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 15,
                                        "char": 33
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 15,
                                    "char": 33
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 15,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "_GET",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "mysql_db",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 16,
                                                    "char": 31
                                                }
                                            ],
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Model\\PbbDb\\Db",
                                                "dynamic": 0,
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 16,
                                                "char": 54
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 16,
                                            "char": 54
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 17,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 18,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "array-access",
                                "left": {
                                    "type": "variable",
                                    "value": "_GET",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 18,
                                    "char": 17
                                },
                                "right": {
                                    "type": "string",
                                    "value": "mysql_db",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 18,
                                    "char": 26
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 18,
                                "char": 27
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 19,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 14,
                    "last-line": 20,
                    "char": 30
                },
                {
                    "visibility": [
                        "protected",
                        "final"
                    ],
                    "type": "method",
                    "name": "gettablename",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 21,
                                    "char": 18
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "db_table",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 21,
                                    "char": 27
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 21,
                                "char": 27
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 22,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 20,
                    "last-line": 23,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "final"
                    ],
                    "type": "method",
                    "name": "getid",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 24,
                                    "char": 18
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "id",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 24,
                                    "char": 21
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 24,
                                "char": 21
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 25,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 23,
                    "last-line": 26,
                    "char": 23
                },
                {
                    "visibility": [
                        "public",
                        "final"
                    ],
                    "type": "method",
                    "name": "haveuser",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "greater",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 27,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "id",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 27,
                                        "char": 22
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 27,
                                    "char": 22
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 27,
                                    "char": 25
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 27,
                                "char": 25
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 28,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 26,
                    "last-line": 29,
                    "char": 23
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "checkid",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "less",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 30,
                                            "char": 16
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "id",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 30,
                                            "char": 20
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 30,
                                        "char": 20
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "1",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 30,
                                        "char": 23
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 30,
                                    "char": 23
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 30,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "call_user_func_array",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "\\\\Pbb\\\\CorePbb::Log",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 31,
                                                    "char": 54
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 31,
                                                "char": 54
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "string",
                                                                        "value": "\u8be5\u5bf9\u8c61\u3000",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                        "line": 31,
                                                                        "char": 69
                                                                    },
                                                                    "right": {
                                                                        "type": "fcall",
                                                                        "name": "get_class",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "variable",
                                                                                    "value": "this",
                                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                                    "line": 31,
                                                                                    "char": 85
                                                                                },
                                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                                "line": 31,
                                                                                "char": 85
                                                                            }
                                                                        ],
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                        "line": 31,
                                                                        "char": 87
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 31,
                                                                    "char": 87
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "\u8fd8\u4e0d\u5b58\u5728\uff0c\u8bf7\u5148\u63d2\u5165\u3000",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 31,
                                                                    "char": 119
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 31,
                                                                "char": 119
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 31,
                                                            "char": 119
                                                        }
                                                    ],
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 31,
                                                    "char": 120
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 31,
                                                "char": 120
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 31,
                                        "char": 121
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 32,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 33,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 29,
                    "last-line": 34,
                    "char": 18
                },
                {
                    "visibility": [
                        "public",
                        "final"
                    ],
                    "type": "method",
                    "name": "isConnect",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 35,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_db",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 35,
                                        "char": 23
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 35,
                                    "char": 23
                                },
                                "name": "isConnect",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 35,
                                "char": 35
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 36,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 34,
                    "last-line": 37,
                    "char": 23
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "isprivate",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "pname",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 37,
                            "char": 35
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "in_array",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "pname",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 38,
                                            "char": 27
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 38,
                                        "char": 27
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "_allnames",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 38,
                                                        "char": 38
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 38,
                                                    "char": 38
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "db_table",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 38,
                                                        "char": 48
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 38,
                                                    "char": 48
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "_arr",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 38,
                                                        "char": 53
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 38,
                                                    "char": 53
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "_db",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 38,
                                                        "char": 57
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 38,
                                                    "char": 57
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 38,
                                            "char": 58
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 38,
                                        "char": 58
                                    }
                                ],
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 38,
                                "char": 59
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 39,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 37,
                    "last-line": 40,
                    "char": 18
                },
                {
                    "visibility": [
                        "public",
                        "final"
                    ],
                    "type": "method",
                    "name": "update",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "safe",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 40,
                                "char": 41
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 40,
                            "char": 41
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "names",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 41,
                                    "char": 19
                                },
                                {
                                    "variable": "q",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 41,
                                    "char": 21
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 42,
                            "char": 9
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "arr",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 42,
                                    "char": 14
                                },
                                {
                                    "variable": "r",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 42,
                                    "char": 16
                                },
                                {
                                    "variable": "pname",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 42,
                                    "char": 22
                                },
                                {
                                    "variable": "pv",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 42,
                                    "char": 25
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 43,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "variable",
                                    "value": "safe",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 43,
                                    "char": 15
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 43,
                                "char": 16
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 44,
                                            "char": 19
                                        },
                                        "name": "checksafe",
                                        "call-type": 1,
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 44,
                                        "char": 31
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 45,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 46,
                            "char": 9
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 46,
                                    "char": 11
                                },
                                "name": "checkid",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 46,
                                "char": 21
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 47,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "names",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 47,
                                        "char": 18
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 47,
                                    "char": 18
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 48,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "arr",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 48,
                                        "char": 17
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 48,
                                    "char": 17
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 49,
                            "char": 10
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 49,
                                        "char": 34
                                    },
                                    "name": "__getmems",
                                    "call-type": 1,
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 50,
                                    "char": 1
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 50,
                                "char": 2
                            },
                            "key": "pname",
                            "value": "pv",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "or",
                                            "left": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 51,
                                                    "char": 14
                                                },
                                                "name": "isprivate",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "pname",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 51,
                                                            "char": 30
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 51,
                                                        "char": 30
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 51,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "equals",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "pname",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 51,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "id",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 51,
                                                    "char": 46
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 51,
                                                "char": 46
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 51,
                                            "char": 46
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 51,
                                        "char": 47
                                    },
                                    "statements": [
                                        {
                                            "type": "continue",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 53,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 54,
                                    "char": 7
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "fcall",
                                            "name": "key_exists",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "pname",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 54,
                                                        "char": 25
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 54,
                                                    "char": 25
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 54,
                                                            "char": 31
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_arr",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 54,
                                                            "char": 36
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 54,
                                                        "char": 36
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 54,
                                                    "char": 36
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 54,
                                            "char": 37
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 54,
                                        "char": 38
                                    },
                                    "statements": [
                                        {
                                            "type": "continue",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 56,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 57,
                                    "char": 7
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "not-equals",
                                            "left": {
                                                "type": "variable",
                                                "value": "names",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 57,
                                                "char": 15
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 57,
                                                "char": 16
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 57,
                                            "char": 16
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 57,
                                        "char": 17
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "names",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "names",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 58,
                                                                    "char": 32
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": ",",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 58,
                                                                    "char": 36
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 58,
                                                                "char": 36
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "pname",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 58,
                                                                "char": 44
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 58,
                                                            "char": 44
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "=?",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 58,
                                                            "char": 48
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 58,
                                                        "char": 48
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 58,
                                                    "char": 48
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 59,
                                            "char": 9
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "names",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "names",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 61,
                                                                "char": 32
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "pname",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 61,
                                                                "char": 40
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 61,
                                                            "char": 40
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "=?",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 61,
                                                            "char": 44
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 61,
                                                        "char": 44
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 61,
                                                    "char": 44
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 62,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 63,
                                    "char": 16
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable-append",
                                            "operator": "assign",
                                            "variable": "arr",
                                            "expr": {
                                                "type": "variable",
                                                "value": "pv",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 63,
                                                "char": 28
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 63,
                                            "char": 28
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 64,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 65,
                            "char": 10
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 65,
                                        "char": 34
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_arr",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 66,
                                        "char": 1
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 66,
                                    "char": 1
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 66,
                                "char": 2
                            },
                            "key": "pname",
                            "value": "pv",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "not-equals",
                                            "left": {
                                                "type": "variable",
                                                "value": "names",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 67,
                                                "char": 15
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 67,
                                                "char": 16
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 67,
                                            "char": 16
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 67,
                                        "char": 17
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "names",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "names",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 68,
                                                                    "char": 32
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": ",",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 68,
                                                                    "char": 36
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 68,
                                                                "char": 36
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "pname",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 68,
                                                                "char": 44
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 68,
                                                            "char": 44
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "=?",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 68,
                                                            "char": 48
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 68,
                                                        "char": 48
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 68,
                                                    "char": 48
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 69,
                                            "char": 9
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "names",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "names",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 71,
                                                                "char": 32
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "pname",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 71,
                                                                "char": 40
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 71,
                                                            "char": 40
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "=?",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 71,
                                                            "char": 44
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 71,
                                                        "char": 44
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 71,
                                                    "char": 44
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 72,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 73,
                                    "char": 16
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable-append",
                                            "operator": "assign",
                                            "variable": "arr",
                                            "expr": {
                                                "type": "variable",
                                                "value": "pv",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 73,
                                                "char": 28
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 73,
                                            "char": 28
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 74,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 75,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "equals",
                                    "left": {
                                        "type": "variable",
                                        "value": "names",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 75,
                                        "char": 17
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 75,
                                        "char": 18
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 75,
                                    "char": 18
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 75,
                                "char": 19
                            },
                            "statements": [
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "string",
                                            "value": "id\u4e0d\u9700\u8981\u66f4\u65b0\u3000",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 76,
                                            "char": 39
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 77,
                                    "char": 19
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 77,
                                        "char": 26
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 78,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 79,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "q",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "update ",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 79,
                                                            "char": 22
                                                        },
                                                        "right": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 79,
                                                                "char": 29
                                                            },
                                                            "name": "gettablename",
                                                            "call-type": 1,
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 79,
                                                            "char": 45
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 79,
                                                        "char": 45
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": " set ",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 79,
                                                        "char": 53
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 79,
                                                    "char": 53
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "names",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 79,
                                                    "char": 61
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 79,
                                                "char": 61
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": " where id=",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 79,
                                                "char": 74
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 79,
                                            "char": 74
                                        },
                                        "right": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 79,
                                                "char": 81
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "id",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 79,
                                                "char": 84
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 79,
                                            "char": 84
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 79,
                                        "char": 84
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 79,
                                    "char": 84
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 80,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "r",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 80,
                                                "char": 17
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_db",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 80,
                                                "char": 22
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 80,
                                            "char": 22
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "q",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 80,
                                                    "char": 30
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 80,
                                                "char": 30
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "arr",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 80,
                                                    "char": 34
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 80,
                                                "char": 34
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 80,
                                        "char": 35
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 80,
                                    "char": 35
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 81,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 81,
                                            "char": 16
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_db",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 81,
                                            "char": 21
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 81,
                                        "char": 21
                                    },
                                    "name": "isTransaction",
                                    "call-type": 1,
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 81,
                                    "char": 37
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 81,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 82,
                                        "char": 25
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 83,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 84,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 84,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_db",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 84,
                                        "char": 23
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 84,
                                    "char": 23
                                },
                                "name": "issuccess",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "r",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 84,
                                            "char": 35
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 84,
                                        "char": 35
                                    }
                                ],
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 84,
                                "char": 36
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 85,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 40,
                    "last-line": 86,
                    "char": 23
                },
                {
                    "visibility": [
                        "public",
                        "final"
                    ],
                    "type": "method",
                    "name": "insert",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "names",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 87,
                                    "char": 19
                                },
                                {
                                    "variable": "values",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 87,
                                    "char": 26
                                },
                                {
                                    "variable": "q",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 87,
                                    "char": 28
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 88,
                            "char": 9
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "arr",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 88,
                                    "char": 14
                                },
                                {
                                    "variable": "r",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 88,
                                    "char": 16
                                },
                                {
                                    "variable": "pname",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 88,
                                    "char": 22
                                },
                                {
                                    "variable": "pv",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 88,
                                    "char": 25
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 89,
                            "char": 9
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 89,
                                    "char": 11
                                },
                                "name": "checksafe",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 89,
                                "char": 23
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 90,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "greater",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 90,
                                            "char": 16
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "id",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 90,
                                            "char": 20
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 90,
                                        "char": 20
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 90,
                                        "char": 23
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 90,
                                    "char": 23
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 90,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "id:",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 91,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 91,
                                                        "char": 28
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "id",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 91,
                                                        "char": 31
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 91,
                                                    "char": 31
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 91,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "\u8be5\u5bf9\u8c61\u5df2\u7ecf\u5b58\u5728\uff0c\u4e0d\u9700\u8981\u63d2\u5165\u3000",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 91,
                                                "char": 74
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 91,
                                            "char": 74
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 92,
                                    "char": 19
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 92,
                                        "char": 22
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 93,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 94,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "names",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 94,
                                        "char": 18
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 94,
                                    "char": 18
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 95,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "values",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 95,
                                        "char": 19
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 95,
                                    "char": 19
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 96,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "arr",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 96,
                                        "char": 17
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 96,
                                    "char": 17
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 97,
                            "char": 10
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 97,
                                        "char": 34
                                    },
                                    "name": "__getmems",
                                    "call-type": 1,
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 98,
                                    "char": 1
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 98,
                                "char": 2
                            },
                            "key": "pname",
                            "value": "pv",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "or",
                                            "left": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 99,
                                                    "char": 14
                                                },
                                                "name": "isprivate",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "pname",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 99,
                                                            "char": 30
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 99,
                                                        "char": 30
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 99,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "equals",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "pname",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 99,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "id",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 99,
                                                    "char": 46
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 99,
                                                "char": 46
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 99,
                                            "char": 46
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 99,
                                        "char": 47
                                    },
                                    "statements": [
                                        {
                                            "type": "continue",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 101,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 102,
                                    "char": 7
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "fcall",
                                            "name": "key_exists",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "pname",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 102,
                                                        "char": 25
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 102,
                                                    "char": 25
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 102,
                                                            "char": 31
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_arr",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 102,
                                                            "char": 36
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 102,
                                                        "char": 36
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 102,
                                                    "char": 36
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 102,
                                            "char": 37
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 102,
                                        "char": 38
                                    },
                                    "statements": [
                                        {
                                            "type": "continue",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 104,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 105,
                                    "char": 7
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "not-equals",
                                            "left": {
                                                "type": "variable",
                                                "value": "names",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 105,
                                                "char": 15
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 105,
                                                "char": 16
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 105,
                                            "char": 16
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 105,
                                        "char": 17
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "names",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "names",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 106,
                                                                "char": 32
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": ",",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 106,
                                                                "char": 36
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 106,
                                                            "char": 36
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "pname",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 106,
                                                            "char": 43
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 106,
                                                        "char": 43
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 106,
                                                    "char": 43
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 107,
                                            "char": 18
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "values",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "values",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 107,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "string",
                                                                "value": ",?",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 107,
                                                                "char": 38
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 107,
                                                            "char": 39
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 107,
                                                        "char": 39
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 107,
                                                    "char": 39
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 108,
                                            "char": 9
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "names",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "names",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 110,
                                                            "char": 31
                                                        },
                                                        "right": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "pname",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 110,
                                                                "char": 39
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 110,
                                                            "char": 40
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 110,
                                                        "char": 40
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 110,
                                                    "char": 40
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 111,
                                            "char": 18
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "values",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "values",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 111,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "string",
                                                                "value": "?",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 111,
                                                                "char": 37
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 111,
                                                            "char": 38
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 111,
                                                        "char": 38
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 111,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 112,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 113,
                                    "char": 16
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable-append",
                                            "operator": "assign",
                                            "variable": "arr",
                                            "expr": {
                                                "type": "variable",
                                                "value": "pv",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 113,
                                                "char": 28
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 113,
                                            "char": 28
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 114,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 115,
                            "char": 10
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 115,
                                        "char": 34
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_arr",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 116,
                                        "char": 1
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 116,
                                    "char": 1
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 116,
                                "char": 2
                            },
                            "key": "pname",
                            "value": "pv",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "not-equals",
                                            "left": {
                                                "type": "variable",
                                                "value": "names",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 117,
                                                "char": 15
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 117,
                                                "char": 16
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 117,
                                            "char": 16
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 117,
                                        "char": 17
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "names",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "names",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 118,
                                                                "char": 32
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": ",",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 118,
                                                                "char": 36
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 118,
                                                            "char": 36
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "pname",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 118,
                                                            "char": 43
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 118,
                                                        "char": 43
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 118,
                                                    "char": 43
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 119,
                                            "char": 18
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "values",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "values",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 119,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "string",
                                                                "value": ",?",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 119,
                                                                "char": 38
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 119,
                                                            "char": 39
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 119,
                                                        "char": 39
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 119,
                                                    "char": 39
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 120,
                                            "char": 9
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "names",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "names",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 122,
                                                            "char": 31
                                                        },
                                                        "right": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "pname",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 122,
                                                                "char": 39
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 122,
                                                            "char": 40
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 122,
                                                        "char": 40
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 122,
                                                    "char": 40
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 123,
                                            "char": 18
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "values",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "values",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 123,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "string",
                                                                "value": "?",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 123,
                                                                "char": 37
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 123,
                                                            "char": 38
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 123,
                                                        "char": 38
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 123,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 124,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 125,
                                    "char": 16
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable-append",
                                            "operator": "assign",
                                            "variable": "arr",
                                            "expr": {
                                                "type": "variable",
                                                "value": "pv",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 125,
                                                "char": 28
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 125,
                                            "char": 28
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 126,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 127,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "q",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "string",
                                                                "value": "insert ",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 127,
                                                                "char": 22
                                                            },
                                                            "right": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 127,
                                                                    "char": 29
                                                                },
                                                                "name": "gettablename",
                                                                "call-type": 1,
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 127,
                                                                "char": 45
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 127,
                                                            "char": 45
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "(",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 127,
                                                            "char": 49
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 127,
                                                        "char": 49
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "names",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 127,
                                                        "char": 57
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 127,
                                                    "char": 57
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": ")values(",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 127,
                                                    "char": 68
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 127,
                                                "char": 68
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "values",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 127,
                                                "char": 77
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 127,
                                            "char": 77
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": ")",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 127,
                                            "char": 80
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 127,
                                        "char": 80
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 127,
                                    "char": 80
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 128,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "r",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 128,
                                                "char": 17
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_db",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 128,
                                                "char": 22
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 128,
                                            "char": 22
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "q",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 128,
                                                    "char": 30
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 128,
                                                "char": 30
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "arr",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 128,
                                                    "char": 34
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 128,
                                                "char": 34
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 128,
                                        "char": 35
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 128,
                                    "char": 35
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 129,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "id",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 129,
                                                "char": 26
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_db",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 129,
                                                "char": 31
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 129,
                                            "char": 31
                                        },
                                        "name": "getlastid",
                                        "call-type": 1,
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 129,
                                        "char": 43
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 129,
                                    "char": 43
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 130,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 130,
                                            "char": 16
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_db",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 130,
                                            "char": 21
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 130,
                                        "char": 21
                                    },
                                    "name": "isTransaction",
                                    "call-type": 1,
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 130,
                                    "char": 37
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 130,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 131,
                                        "char": 25
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 132,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 133,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 133,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_db",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 133,
                                        "char": 23
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 133,
                                    "char": 23
                                },
                                "name": "issuccess",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "r",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 133,
                                            "char": 35
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 133,
                                        "char": 35
                                    }
                                ],
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 133,
                                "char": 36
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 134,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 86,
                    "last-line": 135,
                    "char": 23
                },
                {
                    "visibility": [
                        "public",
                        "final"
                    ],
                    "type": "method",
                    "name": "getby",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 135,
                            "char": 42
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 135,
                            "char": 55
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "namearr",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 136,
                                    "char": 18
                                },
                                {
                                    "variable": "valuearr",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 136,
                                    "char": 27
                                },
                                {
                                    "variable": "r",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 136,
                                    "char": 29
                                },
                                {
                                    "variable": "row",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 136,
                                    "char": 33
                                },
                                {
                                    "variable": "pname",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 136,
                                    "char": 39
                                },
                                {
                                    "variable": "pv",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 136,
                                    "char": 42
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 137,
                            "char": 12
                        },
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "q",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 137,
                                    "char": 15
                                },
                                {
                                    "variable": "mes",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 137,
                                    "char": 19
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 138,
                            "char": 9
                        },
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "i",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 138,
                                    "char": 12
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 139,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "namearr",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "explode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": ",",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 139,
                                                    "char": 27
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 139,
                                                "char": 27
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "name",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 139,
                                                    "char": 32
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 139,
                                                "char": 32
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 139,
                                        "char": 33
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 139,
                                    "char": 33
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 140,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "valuearr",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "explode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": ",",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 140,
                                                    "char": 28
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 140,
                                                "char": 28
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 140,
                                                    "char": 34
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 140,
                                                "char": 34
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 140,
                                        "char": 35
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 140,
                                    "char": 35
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 141,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "greater",
                                    "left": {
                                        "type": "fcall",
                                        "name": "count",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "namearr",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 141,
                                                    "char": 24
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 141,
                                                "char": 24
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 141,
                                        "char": 25
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "1",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 141,
                                        "char": 27
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 141,
                                    "char": 27
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 141,
                                "char": 28
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "not-equals",
                                            "left": {
                                                "type": "fcall",
                                                "name": "count",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "namearr",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 142,
                                                            "char": 22
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 142,
                                                        "char": 22
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 142,
                                                "char": 24
                                            },
                                            "right": {
                                                "type": "fcall",
                                                "name": "count",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "valuearr",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 142,
                                                            "char": 39
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 142,
                                                        "char": 39
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 142,
                                                "char": 40
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 142,
                                            "char": 40
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 142,
                                        "char": 41
                                    },
                                    "statements": [
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "var_dump",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "name",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 143,
                                                            "char": 29
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 143,
                                                        "char": 29
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 143,
                                                "char": 30
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 144,
                                            "char": 23
                                        },
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "var_dump",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 144,
                                                            "char": 30
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 144,
                                                        "char": 30
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 144,
                                                "char": 31
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 145,
                                            "char": 35
                                        },
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "call_user_func_array",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "\\\\Pbb\\\\CorePbb::Error",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 145,
                                                            "char": 58
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 145,
                                                        "char": 58
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array",
                                                            "left": [
                                                                {
                                                                    "value": {
                                                                        "type": "string",
                                                                        "value": "name\u548c\u3000value\u4e2a\u6570\u4e0d\u76f8\u7b49\u3000",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                        "line": 145,
                                                                        "char": 93
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 145,
                                                                    "char": 93
                                                                },
                                                                {
                                                                    "value": {
                                                                        "type": "bool",
                                                                        "value": "false",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                        "line": 145,
                                                                        "char": 99
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 145,
                                                                    "char": 99
                                                                }
                                                            ],
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 145,
                                                            "char": 100
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 145,
                                                        "char": 100
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 145,
                                                "char": 101
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 146,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 147,
                                    "char": 16
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "name",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "implode",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "=? and ",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 147,
                                                            "char": 38
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 147,
                                                        "char": 38
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "namearr",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 147,
                                                            "char": 46
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 147,
                                                        "char": 46
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 147,
                                                "char": 47
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 147,
                                            "char": 47
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 148,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 149,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "q",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "string",
                                                                    "value": "select ",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 149,
                                                                    "char": 22
                                                                },
                                                                "right": {
                                                                    "type": "property-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "this",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                        "line": 149,
                                                                        "char": 29
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "_allnames",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                        "line": 149,
                                                                        "char": 40
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 149,
                                                                    "char": 40
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 149,
                                                                "char": 40
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": " from ",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 149,
                                                                "char": 49
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 149,
                                                            "char": 49
                                                        },
                                                        "right": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 149,
                                                                "char": 56
                                                            },
                                                            "name": "gettablename",
                                                            "call-type": 1,
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 149,
                                                            "char": 72
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 149,
                                                        "char": 72
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": " where ",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 149,
                                                        "char": 82
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 149,
                                                    "char": 82
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "name",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 149,
                                                    "char": 88
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 149,
                                                "char": 88
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "=? ",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 149,
                                                "char": 93
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 149,
                                            "char": 93
                                        },
                                        "right": {
                                            "type": "list",
                                            "left": {
                                                "type": "ternary",
                                                "left": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 149,
                                                            "char": 101
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_db",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 149,
                                                            "char": 106
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 149,
                                                        "char": 106
                                                    },
                                                    "name": "isTransaction",
                                                    "call-type": 1,
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 149,
                                                    "char": 123
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "FOR UPDATE;",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 149,
                                                    "char": 137
                                                },
                                                "extra": {
                                                    "type": "string",
                                                    "value": ";",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 149,
                                                    "char": 140
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 149,
                                                "char": 140
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 149,
                                            "char": 141
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 149,
                                        "char": 141
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 149,
                                    "char": 141
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 150,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "r",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 150,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_db",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 150,
                                                "char": 23
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 150,
                                            "char": 23
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "q",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 150,
                                                    "char": 31
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 150,
                                                "char": 31
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "valuearr",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 150,
                                                    "char": 41
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 150,
                                                "char": 41
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 150,
                                        "char": 42
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 150,
                                    "char": 42
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 151,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "mes",
                                    "expr": {
                                        "type": "string",
                                        "value": "fetch",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 151,
                                        "char": 19
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 151,
                                    "char": 19
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 152,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "row",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "r",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 152,
                                            "char": 17
                                        },
                                        "name": "mes",
                                        "call-type": 2,
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 152,
                                        "char": 25
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 152,
                                    "char": 25
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 153,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "variable",
                                        "value": "row",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 153,
                                        "char": 15
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 153,
                                    "char": 15
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 153,
                                "char": 16
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 154,
                                        "char": 26
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 155,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 156,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "i",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 156,
                                        "char": 15
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 156,
                                    "char": 15
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 157,
                            "char": 10
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 157,
                                        "char": 34
                                    },
                                    "name": "__getmems",
                                    "call-type": 1,
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 158,
                                    "char": 1
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 158,
                                "char": 2
                            },
                            "key": "pname",
                            "value": "pv",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 159,
                                                "char": 14
                                            },
                                            "name": "isprivate",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "pname",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 159,
                                                        "char": 30
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 159,
                                                    "char": 30
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 159,
                                            "char": 31
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 159,
                                        "char": 32
                                    },
                                    "statements": [
                                        {
                                            "type": "continue",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 161,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 162,
                                    "char": 16
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable-dynamic-object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "pname",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "row",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 162,
                                                    "char": 37
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "i",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 162,
                                                    "char": 39
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 162,
                                                "char": 40
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 162,
                                            "char": 40
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 163,
                                    "char": 16
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "i",
                                            "expr": {
                                                "type": "add",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "i",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 163,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "int",
                                                        "value": "1",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 163,
                                                        "char": 24
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 163,
                                                    "char": 25
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 163,
                                                "char": 25
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 163,
                                            "char": 25
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 164,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 165,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 165,
                                "char": 17
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 166,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 135,
                    "last-line": 167,
                    "char": 23
                },
                {
                    "visibility": [
                        "public",
                        "final"
                    ],
                    "type": "method",
                    "name": "getbyid",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "id",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 167,
                            "char": 35
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 168,
                                    "char": 18
                                },
                                "name": "getby",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "id",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 168,
                                            "char": 27
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 168,
                                        "char": 27
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "id",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 168,
                                            "char": 31
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 168,
                                        "char": 31
                                    }
                                ],
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 168,
                                "char": 32
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 169,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 167,
                    "last-line": 170,
                    "char": 23
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "checksafe",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 171,
                                                "char": 17
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_db",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 171,
                                                "char": 22
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 171,
                                            "char": 22
                                        },
                                        "name": "isTransaction",
                                        "call-type": 1,
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 171,
                                        "char": 38
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 171,
                                    "char": 38
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 171,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "call_user_func_array",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "\\\\Pbb\\\\CorePbb::Error",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 172,
                                                    "char": 56
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 172,
                                                "char": 56
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "\u53ea\u80fd\u5728\u4e8b\u52a1\u91cc\u5934\u8fdb\u884c\u63d2\u5165\u3000,\u5b89\u5168\u7684\u66f4\u65b0\u548c\u5220\u9664\u3000!",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 172,
                                                                "char": 123
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 172,
                                                            "char": 123
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "false",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 172,
                                                                "char": 129
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 172,
                                                            "char": 129
                                                        }
                                                    ],
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 172,
                                                    "char": 130
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 172,
                                                "char": 130
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 172,
                                        "char": 131
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 173,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 174,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 170,
                    "last-line": 175,
                    "char": 18
                },
                {
                    "visibility": [
                        "public",
                        "final"
                    ],
                    "type": "method",
                    "name": "delete",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "safe",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 175,
                                "char": 41
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 175,
                            "char": 41
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "q",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 176,
                                    "char": 15
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 177,
                            "char": 9
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "r",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 177,
                                    "char": 12
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 178,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "variable",
                                    "value": "safe",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 178,
                                    "char": 15
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 178,
                                "char": 16
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 179,
                                            "char": 19
                                        },
                                        "name": "checksafe",
                                        "call-type": 1,
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 179,
                                        "char": 31
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 180,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 181,
                            "char": 9
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 181,
                                    "char": 11
                                },
                                "name": "checkid",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 181,
                                "char": 21
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 182,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "q",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "string",
                                                "value": "delete from ",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 182,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 182,
                                                    "char": 34
                                                },
                                                "name": "gettablename",
                                                "call-type": 1,
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 182,
                                                "char": 50
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 182,
                                            "char": 50
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": " where id=?",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 182,
                                            "char": 63
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 182,
                                        "char": 63
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 182,
                                    "char": 63
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 183,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "r",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 183,
                                                "char": 17
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_db",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 183,
                                                "char": 22
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 183,
                                            "char": 22
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "q",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 183,
                                                    "char": 30
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 183,
                                                "char": 30
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 183,
                                                                    "char": 38
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "id",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 183,
                                                                    "char": 41
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 183,
                                                                "char": 41
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 183,
                                                            "char": 41
                                                        }
                                                    ],
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 183,
                                                    "char": 42
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 183,
                                                "char": 42
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 183,
                                        "char": 43
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 183,
                                    "char": 43
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 184,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 184,
                                            "char": 16
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_db",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 184,
                                            "char": 21
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 184,
                                        "char": 21
                                    },
                                    "name": "isTransaction",
                                    "call-type": 1,
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 184,
                                    "char": 37
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 184,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "id",
                                            "expr": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 185,
                                                "char": 28
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 185,
                                            "char": 28
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 186,
                                    "char": 19
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 186,
                                        "char": 25
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 187,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 188,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "r",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 188,
                                                "char": 17
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_db",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 188,
                                                "char": 22
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 188,
                                            "char": 22
                                        },
                                        "name": "issuccess",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "r",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 188,
                                                    "char": 34
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 188,
                                                "char": 34
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 188,
                                        "char": 35
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 188,
                                    "char": 35
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 189,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "variable",
                                    "value": "r",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 189,
                                    "char": 12
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 189,
                                "char": 13
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "id",
                                            "expr": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 190,
                                                "char": 28
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 190,
                                            "char": 28
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 191,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 192,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "r",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 192,
                                "char": 14
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 193,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 175,
                    "last-line": 194,
                    "char": 23
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 194,
                                "char": 36
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 194,
                            "char": 36
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 194,
                                "char": 44
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 194,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "tablename",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 194,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 194,
                            "char": 56
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "all",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 195,
                                    "char": 17
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 196,
                            "char": 9
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "pname",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 196,
                                    "char": 16
                                },
                                {
                                    "variable": "pv",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 196,
                                    "char": 19
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 197,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_db",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "self",
                                        "dynamic": 0,
                                        "name": "GetDb",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 197,
                                        "char": 33
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 197,
                                    "char": 33
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 198,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "equals",
                                    "left": {
                                        "type": "variable",
                                        "value": "tablename",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 198,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 198,
                                        "char": 22
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 198,
                                    "char": 22
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 198,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "tablename",
                                            "expr": {
                                                "type": "constant",
                                                "value": "DB_TABLE",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 199,
                                                "char": 36
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 199,
                                            "char": 36
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 200,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 201,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "db_table",
                                    "expr": {
                                        "type": "variable",
                                        "value": "tablename",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 201,
                                        "char": 36
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 201,
                                    "char": 36
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 202,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "all",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 202,
                                        "char": 16
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 202,
                                    "char": 16
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 203,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_arr",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 203,
                                        "char": 23
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 203,
                                    "char": 23
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 204,
                            "char": 10
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 204,
                                        "char": 34
                                    },
                                    "name": "__getmems",
                                    "call-type": 1,
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 205,
                                    "char": 1
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 205,
                                "char": 2
                            },
                            "key": "pname",
                            "value": "pv",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 206,
                                                "char": 14
                                            },
                                            "name": "isprivate",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "pname",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 206,
                                                        "char": 30
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 206,
                                                    "char": 30
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 206,
                                            "char": 31
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 206,
                                        "char": 32
                                    },
                                    "statements": [
                                        {
                                            "type": "continue",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 208,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 209,
                                    "char": 7
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "equals",
                                            "left": {
                                                "type": "variable",
                                                "value": "all",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 209,
                                                "char": 13
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 209,
                                                "char": 14
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 209,
                                            "char": 14
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 209,
                                        "char": 15
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "all",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "all",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 210,
                                                            "char": 27
                                                        },
                                                        "right": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "pname",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 210,
                                                                "char": 35
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 210,
                                                            "char": 36
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 210,
                                                        "char": 36
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 210,
                                                    "char": 36
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 211,
                                            "char": 9
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "all",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "all",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 213,
                                                                "char": 28
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": ",",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 213,
                                                                "char": 32
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 213,
                                                            "char": 32
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "pname",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 213,
                                                            "char": 39
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 213,
                                                        "char": 39
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 213,
                                                    "char": 39
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 214,
                                            "char": 9
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 215,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 216,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_allnames",
                                    "expr": {
                                        "type": "variable",
                                        "value": "all",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 216,
                                        "char": 31
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 216,
                                    "char": 31
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 217,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "and",
                                    "left": {
                                        "type": "variable",
                                        "value": "key",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 217,
                                        "char": 16
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "value",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 217,
                                        "char": 23
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 217,
                                    "char": 23
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 217,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 218,
                                            "char": 19
                                        },
                                        "name": "getby",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 218,
                                                    "char": 29
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 218,
                                                "char": 29
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 218,
                                                    "char": 36
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 218,
                                                "char": 36
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 218,
                                        "char": 37
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 219,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 220,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 194,
                    "last-line": 221,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__destruct",
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_db",
                                    "expr": {
                                        "type": "null",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 222,
                                        "char": 24
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 222,
                                    "char": 24
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 223,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 221,
                    "last-line": 224,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__get",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 224,
                            "char": 29
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "q",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 225,
                                    "char": 15
                                },
                                {
                                    "variable": "mes",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 225,
                                    "char": 19
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 226,
                            "char": 9
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "r",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 226,
                                    "char": 12
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 227,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "fcall",
                                    "name": "key_exists",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "name",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 227,
                                                "char": 26
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 227,
                                            "char": 26
                                        },
                                        {
                                            "parameter": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 227,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_arr",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 227,
                                                    "char": 37
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 227,
                                                "char": 37
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 227,
                                            "char": 37
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 227,
                                    "char": 38
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 227,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 228,
                                                "char": 26
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_arr",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 228,
                                                "char": 31
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 228,
                                            "char": 31
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 228,
                                            "char": 36
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 228,
                                        "char": 37
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 229,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 230,
                            "char": 9
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 230,
                                    "char": 11
                                },
                                "name": "checkid",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 230,
                                "char": 21
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 231,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "equals",
                                    "left": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 231,
                                        "char": 16
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "id",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 231,
                                        "char": 19
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 231,
                                    "char": 19
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 231,
                                "char": 20
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 232,
                                            "char": 26
                                        },
                                        "name": "getid",
                                        "call-type": 1,
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 232,
                                        "char": 34
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 233,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 234,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "q",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "select ",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 234,
                                                        "char": 22
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "name",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                        "line": 234,
                                                        "char": 29
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 234,
                                                    "char": 29
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": " from ",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 234,
                                                    "char": 38
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 234,
                                                "char": 38
                                            },
                                            "right": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 234,
                                                    "char": 45
                                                },
                                                "name": "gettablename",
                                                "call-type": 1,
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 234,
                                                "char": 61
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 234,
                                            "char": 61
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": " where id=?",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 234,
                                            "char": 74
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 234,
                                        "char": 74
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 234,
                                    "char": 74
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 235,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "r",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 235,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_db",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 235,
                                                "char": 23
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 235,
                                            "char": 23
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "q",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 235,
                                                    "char": 31
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 235,
                                                "char": 31
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 235,
                                                                    "char": 39
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "id",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                    "line": 235,
                                                                    "char": 42
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 235,
                                                                "char": 42
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 235,
                                                            "char": 42
                                                        }
                                                    ],
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 235,
                                                    "char": 43
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 235,
                                                "char": 43
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 235,
                                        "char": 44
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 235,
                                    "char": 44
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 236,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "mes",
                                    "expr": {
                                        "type": "string",
                                        "value": "fetch",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 236,
                                        "char": 19
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 236,
                                    "char": 19
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 237,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "array-access",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "r",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 237,
                                        "char": 15
                                    },
                                    "name": "mes",
                                    "call-type": 2,
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 237,
                                    "char": 23
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 237,
                                    "char": 25
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 237,
                                "char": 26
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 238,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 224,
                    "last-line": 239,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__set",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 239,
                            "char": 29
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 239,
                            "char": 35
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "equals",
                                    "left": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 240,
                                        "char": 16
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "id",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 240,
                                        "char": 19
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 240,
                                    "char": 19
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 240,
                                "char": 20
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "call_user_func_array",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "\\\\Pbb\\\\CorePbb::Error",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 241,
                                                    "char": 56
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 241,
                                                "char": 56
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "\u4e0d\u80fd\u4fee\u6539\u3000id!",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 241,
                                                                "char": 76
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 241,
                                                            "char": 76
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "false",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                                "line": 241,
                                                                "char": 82
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                            "line": 241,
                                                            "char": 82
                                                        }
                                                    ],
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                    "line": 241,
                                                    "char": 83
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 241,
                                                "char": 83
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 241,
                                        "char": 84
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 242,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 243,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_arr",
                                    "index-expr": [
                                        {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 243,
                                            "char": 25
                                        }
                                    ],
                                    "expr": {
                                        "type": "variable",
                                        "value": "value",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 243,
                                        "char": 32
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                    "line": 243,
                                    "char": 32
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 244,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 239,
                    "last-line": 245,
                    "char": 17
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "__getmems",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "array",
                                "left": [
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "id",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 246,
                                            "char": 16
                                        },
                                        "value": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 246,
                                                "char": 22
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "id",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                                "line": 246,
                                                "char": 25
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                            "line": 246,
                                            "char": 25
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                        "line": 246,
                                        "char": 25
                                    }
                                ],
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                                "line": 246,
                                "char": 26
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                            "line": 247,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
                    "line": 245,
                    "last-line": 248,
                    "char": 20
                }
            ],
            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
            "line": 2,
            "char": 6
        },
        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep",
        "line": 2,
        "char": 6
    }
]