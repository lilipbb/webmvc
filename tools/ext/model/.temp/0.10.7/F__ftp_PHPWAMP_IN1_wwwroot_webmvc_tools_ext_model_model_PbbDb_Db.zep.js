[
    {
        "type": "namespace",
        "name": "Model\\PbbDb",
        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
        "line": 2,
        "char": 6
    },
    {
        "type": "class",
        "name": "Db",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "isconnect",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 4,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "isTransaction",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 5,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "prepareobj",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 6,
                    "char": 8
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "pdo",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 7,
                    "char": 8
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isTransaction",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 8,
                                    "char": 18
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "isTransaction",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 8,
                                    "char": 32
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 8,
                                "char": 32
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 9,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 7,
                    "last-line": 10,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isConnect",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 11,
                                    "char": 18
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "isconnect",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 11,
                                    "char": 28
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 11,
                                "char": 28
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 12,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 10,
                    "last-line": 13,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "fcall",
                                        "name": "defined",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "DB_HOST",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 14,
                                                    "char": 27
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 14,
                                                "char": 27
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 14,
                                        "char": 28
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 14,
                                    "char": 28
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 14,
                                "char": 29
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
                                                    "value": "_include",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 15,
                                                    "char": 43
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 15,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "fcall",
                                                                "name": "file_get_contents",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "concat",
                                                                            "left": {
                                                                                "type": "constant",
                                                                                "value": "PATH_CONFIG",
                                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                                "line": 15,
                                                                                "char": 74
                                                                            },
                                                                            "right": {
                                                                                "type": "string",
                                                                                "value": "mysqlconfig.php",
                                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                                "line": 15,
                                                                                "char": 90
                                                                            },
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 15,
                                                                            "char": 90
                                                                        },
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 15,
                                                                        "char": 90
                                                                    }
                                                                ],
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                "line": 15,
                                                                "char": 91
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 15,
                                                            "char": 91
                                                        }
                                                    ],
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 15,
                                                    "char": 92
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 15,
                                                "char": 92
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 15,
                                        "char": 93
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 16,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 17,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "isconnect",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 17,
                                        "char": 31
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 17,
                                    "char": 31
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 18,
                            "char": 9
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 18,
                                    "char": 11
                                },
                                "name": "init",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 18,
                                "char": 18
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 19,
                            "char": 9
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 19,
                                    "char": 11
                                },
                                "name": "pingdb",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 19,
                                "char": 20
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 20,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "isTransaction",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 20,
                                        "char": 35
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 20,
                                    "char": 35
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 21,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 13,
                    "last-line": 22,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "init",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "arr",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 23,
                                    "char": 14
                                },
                                {
                                    "variable": "e",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 23,
                                    "char": 16
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 24,
                            "char": 6
                        },
                        {
                            "type": "try-catch",
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "arr",
                                            "expr": {
                                                "type": "array",
                                                "left": [
                                                    {
                                                        "key": {
                                                            "type": "int",
                                                            "value": "1002",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 26,
                                                            "char": 26
                                                        },
                                                        "value": {
                                                            "type": "string",
                                                            "value": "SET NAMES utf8;",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 26,
                                                            "char": 43
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 26,
                                                        "char": 43
                                                    },
                                                    {
                                                        "key": {
                                                            "type": "int",
                                                            "value": "3",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 27,
                                                            "char": 23
                                                        },
                                                        "value": {
                                                            "type": "int",
                                                            "value": "2",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 27,
                                                            "char": 26
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 27,
                                                        "char": 26
                                                    },
                                                    {
                                                        "key": {
                                                            "type": "int",
                                                            "value": "19",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 28,
                                                            "char": 24
                                                        },
                                                        "value": {
                                                            "type": "int",
                                                            "value": "3",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 28,
                                                            "char": 27
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 28,
                                                        "char": 27
                                                    },
                                                    {
                                                        "key": {
                                                            "type": "int",
                                                            "value": "12",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 29,
                                                            "char": 23
                                                        },
                                                        "value": {
                                                            "type": "bool",
                                                            "value": "true",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 30,
                                                            "char": 17
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 30,
                                                        "char": 17
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 30,
                                                "char": 18
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 30,
                                            "char": 18
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 31,
                                    "char": 10
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "pdo",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\PDO",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
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
                                                                                "value": "mysql:host=",
                                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                                "line": 31,
                                                                                "char": 45
                                                                            },
                                                                            "right": {
                                                                                "type": "constant",
                                                                                "value": "DB_HOST",
                                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                                "line": 31,
                                                                                "char": 55
                                                                            },
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 31,
                                                                            "char": 55
                                                                        },
                                                                        "right": {
                                                                            "type": "string",
                                                                            "value": ";dbname=",
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 31,
                                                                            "char": 66
                                                                        },
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 31,
                                                                        "char": 66
                                                                    },
                                                                    "right": {
                                                                        "type": "constant",
                                                                        "value": "DB_NAME",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 31,
                                                                        "char": 76
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                    "line": 31,
                                                                    "char": 76
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": ";port=",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                    "line": 31,
                                                                    "char": 85
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                "line": 31,
                                                                "char": 85
                                                            },
                                                            "right": {
                                                                "type": "constant",
                                                                "value": "DB_PORT",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                "line": 31,
                                                                "char": 94
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 31,
                                                            "char": 94
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 31,
                                                        "char": 94
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "constant",
                                                            "value": "DB_USER",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 31,
                                                            "char": 103
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 31,
                                                        "char": 103
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "constant",
                                                            "value": "DB_PSD",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 31,
                                                            "char": 111
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 31,
                                                        "char": 111
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "arr",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 31,
                                                            "char": 116
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 31,
                                                        "char": 116
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 31,
                                                "char": 117
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 31,
                                            "char": 117
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 32,
                                    "char": 10
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "isconnect",
                                            "expr": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 32,
                                                "char": 32
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 32,
                                            "char": 32
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 33,
                                    "char": 1
                                }
                            ],
                            "catches": [
                                {
                                    "classes": [
                                        {
                                            "type": "variable",
                                            "value": "\\PDOException",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 33,
                                            "char": 21
                                        }
                                    ],
                                    "variable": {
                                        "type": "variable",
                                        "value": "e",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 36,
                                        "char": 3
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
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 34,
                                                            "char": 48
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 34,
                                                        "char": 48
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array",
                                                            "left": [
                                                                {
                                                                    "value": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "string",
                                                                            "value": "\u8fde\u63a5\u6570\u636e\u5e93\u5931\u8d25\u3000:",
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 34,
                                                                            "char": 76
                                                                        },
                                                                        "right": {
                                                                            "type": "mcall",
                                                                            "variable": {
                                                                                "type": "variable",
                                                                                "value": "e",
                                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                                "line": 34,
                                                                                "char": 80
                                                                            },
                                                                            "name": "getMessage",
                                                                            "call-type": 1,
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 34,
                                                                            "char": 93
                                                                        },
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 34,
                                                                        "char": 93
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                    "line": 34,
                                                                    "char": 93
                                                                }
                                                            ],
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 34,
                                                            "char": 94
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 34,
                                                        "char": 94
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 34,
                                                "char": 95
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 35,
                                            "char": 1
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 36,
                                    "char": 3
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 36,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 22,
                    "last-line": 37,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "pingdb",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "e",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 38,
                                    "char": 12
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 39,
                            "char": 6
                        },
                        {
                            "type": "try-catch",
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 40,
                                                "char": 13
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "pdo",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 40,
                                                "char": 18
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 40,
                                            "char": 18
                                        },
                                        "name": "getAttribute",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "\\PDO",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 40,
                                                        "char": 57
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "ATTR_SERVER_VERSION",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 40,
                                                        "char": 57
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 40,
                                                    "char": 57
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 40,
                                                "char": 57
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 40,
                                        "char": 58
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 41,
                                    "char": 1
                                }
                            ],
                            "catches": [
                                {
                                    "classes": [
                                        {
                                            "type": "variable",
                                            "value": "\\PDOException",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 41,
                                            "char": 21
                                        }
                                    ],
                                    "variable": {
                                        "type": "variable",
                                        "value": "e",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 45,
                                        "char": 3
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "pdo",
                                                    "expr": {
                                                        "type": "null",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 42,
                                                        "char": 28
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 42,
                                                    "char": 28
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 43,
                                            "char": 11
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 43,
                                                    "char": 13
                                                },
                                                "name": "init",
                                                "call-type": 1,
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 43,
                                                "char": 20
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 44,
                                            "char": 1
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 45,
                                    "char": 3
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 45,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 37,
                    "last-line": 46,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getlastid",
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
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 47,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "pdo",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 47,
                                        "char": 23
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 47,
                                    "char": 23
                                },
                                "name": "lastInsertId",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 47,
                                "char": 38
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 48,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 46,
                    "last-line": 49,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "issuccess",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "query",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 49,
                            "char": 34
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not-equals",
                                    "left": {
                                        "type": "fcall",
                                        "name": "gettype",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "query",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 50,
                                                    "char": 24
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 50,
                                                "char": 24
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 50,
                                        "char": 26
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "object",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 50,
                                        "char": 33
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 50,
                                    "char": 33
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 50,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 51,
                                        "char": 26
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 52,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 53,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "greater",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "query",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 53,
                                        "char": 19
                                    },
                                    "name": "rowCount",
                                    "call-type": 1,
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 53,
                                    "char": 30
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 53,
                                    "char": 32
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 53,
                                "char": 32
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 54,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 49,
                    "last-line": 55,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "query",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "mes",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 55,
                            "char": 28
                        },
                        {
                            "type": "parameter",
                            "name": "args",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 55,
                            "char": 33
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "pre",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 56,
                                    "char": 14
                                },
                                {
                                    "variable": "e",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 56,
                                    "char": 16
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 57,
                            "char": 6
                        },
                        {
                            "type": "try-catch",
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 58,
                                                "char": 20
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "isTransaction",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 58,
                                                "char": 34
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 58,
                                            "char": 34
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 58,
                                        "char": 35
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property-append",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "prepareobj",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "func_get_args",
                                                        "call-type": 1,
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 59,
                                                        "char": 56
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 59,
                                                    "char": 56
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 60,
                                            "char": 23
                                        },
                                        {
                                            "type": "return",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 61,
                                            "char": 10
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 62,
                                    "char": 10
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "pre",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 62,
                                                        "char": 22
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "pdo",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 62,
                                                        "char": 27
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 62,
                                                    "char": 27
                                                },
                                                "name": "prepare",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "mes",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 62,
                                                            "char": 39
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 62,
                                                        "char": 39
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 62,
                                                "char": 40
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 62,
                                            "char": 40
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 63,
                                    "char": 13
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "pre",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 63,
                                                "char": 19
                                            },
                                            "name": "execute",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "args",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 63,
                                                        "char": 32
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 63,
                                                    "char": 32
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 63,
                                            "char": 33
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 63,
                                        "char": 34
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "pre",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 64,
                                                "char": 28
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 65,
                                            "char": 10
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 66,
                                    "char": 1
                                }
                            ],
                            "catches": [
                                {
                                    "classes": [
                                        {
                                            "type": "variable",
                                            "value": "\\PDOException",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 66,
                                            "char": 21
                                        }
                                    ],
                                    "variable": {
                                        "type": "variable",
                                        "value": "e",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 68,
                                        "char": 12
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
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 67,
                                                            "char": 48
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 67,
                                                        "char": 48
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array",
                                                            "left": [
                                                                {
                                                                    "value": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "mes",
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 67,
                                                                            "char": 53
                                                                        },
                                                                        "right": {
                                                                            "type": "mcall",
                                                                            "variable": {
                                                                                "type": "variable",
                                                                                "value": "e",
                                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                                "line": 67,
                                                                                "char": 56
                                                                            },
                                                                            "name": "getMessage",
                                                                            "call-type": 1,
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 67,
                                                                            "char": 69
                                                                        },
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 67,
                                                                        "char": 69
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                    "line": 67,
                                                                    "char": 69
                                                                }
                                                            ],
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 67,
                                                            "char": 70
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 67,
                                                        "char": 70
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 67,
                                                "char": 71
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 68,
                                            "char": 1
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 68,
                                    "char": 12
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 68,
                            "char": 12
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 68,
                                "char": 19
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 69,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 55,
                    "last-line": 70,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "beginTransaction",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "e",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 71,
                                    "char": 12
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 72,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 72,
                                        "char": 16
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "isTransaction",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 72,
                                        "char": 30
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 72,
                                    "char": 30
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 72,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 74,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 75,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "isTransaction",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 75,
                                        "char": 34
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 75,
                                    "char": 34
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 76,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "preparefun",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 76,
                                        "char": 29
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 76,
                                    "char": 29
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 77,
                            "char": 6
                        },
                        {
                            "type": "try-catch",
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 78,
                                                "char": 13
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "pdo",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 78,
                                                "char": 18
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 78,
                                            "char": 18
                                        },
                                        "name": "beginTransaction",
                                        "call-type": 1,
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 78,
                                        "char": 37
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 79,
                                    "char": 1
                                }
                            ],
                            "catches": [
                                {
                                    "classes": [
                                        {
                                            "type": "variable",
                                            "value": "\\PDOException",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 79,
                                            "char": 21
                                        }
                                    ],
                                    "variable": {
                                        "type": "variable",
                                        "value": "e",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 82,
                                        "char": 3
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
                                                            "value": "\\\\Pbb\\\\CorePbb::log",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 80,
                                                            "char": 48
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 80,
                                                        "char": 48
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array",
                                                            "left": [
                                                                {
                                                                    "value": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "string",
                                                                            "value": "\u5b89\u5168\u7c7b\u578b\u7684\u3000model\u5bf9\u8c61\u8fd8\u672a\u91ca\u653e\u3000!\u4e0d\u80fd\u521b\u5efa\u65b0\u7684\u5b89\u5168\u7c7b\u578b\u7684\u5bf9\u8c61\u3000",
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 80,
                                                                            "char": 137
                                                                        },
                                                                        "right": {
                                                                            "type": "mcall",
                                                                            "variable": {
                                                                                "type": "variable",
                                                                                "value": "e",
                                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                                "line": 80,
                                                                                "char": 140
                                                                            },
                                                                            "name": "getMessage",
                                                                            "call-type": 1,
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 80,
                                                                            "char": 153
                                                                        },
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 80,
                                                                        "char": 153
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                    "line": 80,
                                                                    "char": 153
                                                                }
                                                            ],
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 80,
                                                            "char": 154
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 80,
                                                        "char": 154
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 80,
                                                "char": 155
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 81,
                                            "char": 1
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 82,
                                    "char": 3
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 82,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 70,
                    "last-line": 83,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "commit",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "r",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 84,
                                    "char": 12
                                },
                                {
                                    "variable": "value",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 84,
                                    "char": 18
                                },
                                {
                                    "variable": "e",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 84,
                                    "char": 20
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 85,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 85,
                                            "char": 17
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "isTransaction",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 85,
                                            "char": 31
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 85,
                                        "char": 31
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 85,
                                    "char": 31
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 85,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "string",
                                            "value": "\u4e8b\u52a1\u8fd8\u6ca1\u5f00\u59cb\u3000!",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 86,
                                            "char": 41
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 87,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 88,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "isTransaction",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 88,
                                        "char": 35
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 88,
                                    "char": 35
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 89,
                            "char": 9
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 89,
                                            "char": 17
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "isconnect",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 89,
                                            "char": 27
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 89,
                                        "char": 27
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 89,
                                    "char": 27
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 89,
                                "char": 28
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 90,
                                        "char": 26
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 91,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 92,
                            "char": 6
                        },
                        {
                            "type": "try-catch",
                            "statements": [
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 93,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "prepareobj",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 94,
                                                "char": 1
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 94,
                                            "char": 1
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 94,
                                        "char": 2
                                    },
                                    "value": "value",
                                    "reverse": 0,
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
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 95,
                                                            "char": 17
                                                        },
                                                        "name": "query",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 95,
                                                                        "char": 29
                                                                    },
                                                                    "right": {
                                                                        "type": "int",
                                                                        "value": "0",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 95,
                                                                        "char": 31
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                    "line": 95,
                                                                    "char": 32
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                "line": 95,
                                                                "char": 32
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 95,
                                                                        "char": 38
                                                                    },
                                                                    "right": {
                                                                        "type": "int",
                                                                        "value": "1",
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 95,
                                                                        "char": 40
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                    "line": 95,
                                                                    "char": 41
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                "line": 95,
                                                                "char": 41
                                                            }
                                                        ],
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 95,
                                                        "char": 42
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 95,
                                                    "char": 42
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 95,
                                                "char": 43
                                            },
                                            "statements": [
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "false",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 96,
                                                        "char": 32
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 97,
                                                    "char": 11
                                                }
                                            ],
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 98,
                                            "char": 10
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 99,
                                    "char": 10
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
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 99,
                                                        "char": 19
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "pdo",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 99,
                                                        "char": 24
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 99,
                                                    "char": 24
                                                },
                                                "name": "commit",
                                                "call-type": 1,
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 99,
                                                "char": 33
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 99,
                                            "char": 33
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 100,
                                    "char": 13
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "r",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 100,
                                        "char": 16
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 101,
                                    "char": 1
                                }
                            ],
                            "catches": [
                                {
                                    "classes": [
                                        {
                                            "type": "variable",
                                            "value": "\\PDOException",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 101,
                                            "char": 21
                                        }
                                    ],
                                    "variable": {
                                        "type": "variable",
                                        "value": "e",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 104,
                                        "char": 12
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 102,
                                                        "char": 13
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "pdo",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 102,
                                                        "char": 18
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                    "line": 102,
                                                    "char": 18
                                                },
                                                "name": "rollBack",
                                                "call-type": 1,
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 102,
                                                "char": 29
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 103,
                                            "char": 27
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
                                                            "value": "\\\\Pbb\\\\CorePbb::Log",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 103,
                                                            "char": 48
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 103,
                                                        "char": 48
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array",
                                                            "left": [
                                                                {
                                                                    "value": {
                                                                        "type": "mcall",
                                                                        "variable": {
                                                                            "type": "variable",
                                                                            "value": "e",
                                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                            "line": 103,
                                                                            "char": 52
                                                                        },
                                                                        "name": "getMessage",
                                                                        "call-type": 1,
                                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                        "line": 103,
                                                                        "char": 65
                                                                    },
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                                    "line": 103,
                                                                    "char": 65
                                                                }
                                                            ],
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                            "line": 103,
                                                            "char": 66
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                        "line": 103,
                                                        "char": 66
                                                    }
                                                ],
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 103,
                                                "char": 67
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 104,
                                            "char": 1
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 104,
                                    "char": 12
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 104,
                            "char": 12
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 104,
                                "char": 19
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 105,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 83,
                    "last-line": 106,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "rollback",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 107,
                                        "char": 16
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "isTransaction",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 107,
                                        "char": 30
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 107,
                                    "char": 30
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 107,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "isTransaction",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 108,
                                                "char": 43
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 108,
                                            "char": 43
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 109,
                                    "char": 17
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 109,
                                                "char": 19
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "pdo",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                                "line": 109,
                                                "char": 24
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                            "line": 109,
                                            "char": 24
                                        },
                                        "name": "rollBack",
                                        "call-type": 1,
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                        "line": 109,
                                        "char": 35
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 110,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 111,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 106,
                    "last-line": 112,
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
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                    "line": 113,
                                    "char": 11
                                },
                                "name": "rollback",
                                "call-type": 1,
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                                "line": 113,
                                "char": 22
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                            "line": 114,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
                    "line": 112,
                    "last-line": 115,
                    "char": 17
                }
            ],
            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
            "line": 2,
            "char": 6
        },
        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep",
        "line": 2,
        "char": 6
    }
]