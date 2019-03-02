[
    {
        "type": "namespace",
        "name": "Model\\PbbDb",
        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
        "line": 2,
        "char": 5
    },
    {
        "type": "class",
        "name": "ModelAll",
        "abstract": 0,
        "final": 1,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_db",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 4,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_pos",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 5,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_order",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 6,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_limit",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 7,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_where",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 8,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_myfetch",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 9,
                    "char": 11
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_array",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 10,
                    "char": 8
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "selectnames",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 10,
                                "char": 44
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 10,
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
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 10,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 10,
                            "char": 56
                        }
                    ],
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
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "ModelBase",
                                        "dynamic": 0,
                                        "name": "GetDb",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 11,
                                        "char": 38
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 11,
                                    "char": 38
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 12,
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
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 12,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 12,
                                        "char": 22
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 12,
                                    "char": 22
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 12,
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
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 13,
                                                "char": 36
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 13,
                                            "char": 36
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 14,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 15,
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
                                        "value": "selectnames",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 15,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 15,
                                        "char": 24
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 15,
                                    "char": 24
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 15,
                                "char": 25
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "selectnames",
                                            "expr": {
                                                "type": "string",
                                                "value": "*",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 16,
                                                "char": 31
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 16,
                                            "char": 31
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 17,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 18,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_pos",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 18,
                                        "char": 24
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 18,
                                    "char": 24
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 19,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_myfetch",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "select ",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 19,
                                                    "char": 35
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "selectnames",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 19,
                                                    "char": 49
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 19,
                                                "char": 49
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": " from ",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 19,
                                                "char": 58
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 19,
                                            "char": 58
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "tablename",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 19,
                                            "char": 69
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 19,
                                        "char": 69
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 19,
                                    "char": 69
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 20,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 10,
                    "last-line": 21,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "where",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "mes",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 21,
                            "char": 28
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_where",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "string",
                                                "value": " where ",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 22,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "mes",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 22,
                                                "char": 39
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 22,
                                            "char": 39
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": " ",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 22,
                                            "char": 42
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 22,
                                        "char": 42
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 22,
                                    "char": 42
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 23,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 23,
                                "char": 17
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 24,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 21,
                    "last-line": 25,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "orderby",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "mes",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 25,
                            "char": 30
                        },
                        {
                            "type": "parameter",
                            "name": "desc",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "false",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 25,
                                "char": 42
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 25,
                            "char": 42
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "variable",
                                    "value": "desc",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 26,
                                    "char": 15
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 26,
                                "char": 16
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_order",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": " order by ",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                        "line": 27,
                                                        "char": 44
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "mes",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                        "line": 27,
                                                        "char": 50
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 27,
                                                    "char": 50
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": " desc ",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 27,
                                                    "char": 58
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 27,
                                                "char": 58
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 27,
                                            "char": 58
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 28,
                                    "char": 8
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_order",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": " order by ",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                        "line": 30,
                                                        "char": 44
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "mes",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                        "line": 30,
                                                        "char": 50
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 30,
                                                    "char": 50
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": " ",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 30,
                                                    "char": 53
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 30,
                                                "char": 53
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 30,
                                            "char": 53
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 31,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 32,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 32,
                                "char": 17
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 33,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 25,
                    "last-line": 34,
                    "char": 17
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "limit",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "start",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 34,
                            "char": 34
                        },
                        {
                            "type": "parameter",
                            "name": "end",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "int",
                                "value": "-1",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 34,
                                "char": 45
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 34,
                            "char": 45
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "less",
                                    "left": {
                                        "type": "variable",
                                        "value": "end",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 35,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 35,
                                        "char": 16
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 35,
                                    "char": 16
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 35,
                                "char": 17
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_limit",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": " limit ",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 36,
                                                    "char": 41
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "start",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 36,
                                                    "char": 48
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 36,
                                                "char": 48
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 36,
                                            "char": 48
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 37,
                                    "char": 8
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_limit",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": " limit ",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                            "line": 39,
                                                            "char": 38
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "start",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                            "line": 39,
                                                            "char": 44
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                        "line": 39,
                                                        "char": 44
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": ",",
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                        "line": 39,
                                                        "char": 46
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 39,
                                                    "char": 46
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "end",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 39,
                                                    "char": 50
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 39,
                                                "char": 50
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 39,
                                            "char": 50
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 40,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 41,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 41,
                                "char": 17
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 42,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 34,
                    "last-line": 43,
                    "char": 17
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "_end",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "r",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 44,
                                    "char": 12
                                },
                                {
                                    "variable": "value",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 44,
                                    "char": 18
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 45,
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
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 45,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_db",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 45,
                                                "char": 23
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 45,
                                            "char": 23
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                                    "line": 45,
                                                                    "char": 35
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "_myfetch",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                                    "line": 45,
                                                                    "char": 45
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                                "line": 45,
                                                                "char": 45
                                                            },
                                                            "right": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                                    "line": 45,
                                                                    "char": 52
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "_where",
                                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                                    "line": 45,
                                                                    "char": 60
                                                                },
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                                "line": 45,
                                                                "char": 60
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                            "line": 45,
                                                            "char": 60
                                                        },
                                                        "right": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                                "line": 45,
                                                                "char": 67
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "_order",
                                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                                "line": 45,
                                                                "char": 75
                                                            },
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                            "line": 45,
                                                            "char": 75
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                        "line": 45,
                                                        "char": 75
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                            "line": 45,
                                                            "char": 82
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_limit",
                                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                            "line": 45,
                                                            "char": 89
                                                        },
                                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                        "line": 45,
                                                        "char": 89
                                                    },
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 45,
                                                    "char": 89
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 45,
                                                "char": 89
                                            },
                                            {
                                                "parameter": {
                                                    "type": "null",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 45,
                                                    "char": 95
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 45,
                                                "char": 95
                                            }
                                        ],
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 45,
                                        "char": 96
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 45,
                                    "char": 96
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 46,
                            "char": 8
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_array",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 46,
                                        "char": 27
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 46,
                                    "char": 27
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 47,
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
                                        "value": "r",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 47,
                                        "char": 26
                                    },
                                    "name": "fetchAll",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "static-constant-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "\\PDO",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 47,
                                                    "char": 53
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "FETCH_ASSOC",
                                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                    "line": 47,
                                                    "char": 53
                                                },
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 47,
                                                "char": 53
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 47,
                                            "char": 53
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 48,
                                    "char": 1
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 48,
                                "char": 2
                            },
                            "value": "value",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property-append",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_array",
                                            "expr": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                                "line": 49,
                                                "char": 40
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 49,
                                            "char": 40
                                        }
                                    ],
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 50,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 51,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 43,
                    "last-line": 52,
                    "char": 18
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getArray",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "equals",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 53,
                                            "char": 16
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_array",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 53,
                                            "char": 24
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 53,
                                        "char": 24
                                    },
                                    "right": {
                                        "type": "null",
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 53,
                                        "char": 29
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 53,
                                    "char": 29
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 53,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                            "line": 54,
                                            "char": 19
                                        },
                                        "name": "_end",
                                        "call-type": 1,
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                        "line": 54,
                                        "char": 26
                                    },
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 55,
                                    "char": 8
                                }
                            ],
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 56,
                            "char": 11
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 56,
                                    "char": 18
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_array",
                                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                    "line": 56,
                                    "char": 25
                                },
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                                "line": 56,
                                "char": 25
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                            "line": 57,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
                    "line": 52,
                    "last-line": 58,
                    "char": 17
                }
            ],
            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
            "line": 2,
            "char": 12
        },
        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep",
        "line": 2,
        "char": 12
    }
]