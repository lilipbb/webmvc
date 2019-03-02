[
    {
        "type": "namespace",
        "name": "Model",
        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
        "line": 2,
        "char": 6
    },
    {
        "type": "class",
        "name": "Model1",
        "abstract": 0,
        "final": 0,
        "extends": "\\Model\\PbbDb\\ModelBase",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "num",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                    "line": 5,
                    "char": 8
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "name",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                    "line": 6,
                    "char": 8
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "id",
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
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
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                "line": 7,
                                "char": 36
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                            "line": 7,
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
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                "line": 7,
                                "char": 44
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                            "line": 7,
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
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                "line": 7,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                            "line": 7,
                            "char": 56
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "parent",
                                "dynamic": 0,
                                "name": "__construct",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "key",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                            "line": 8,
                                            "char": 29
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                        "line": 8,
                                        "char": 29
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                            "line": 8,
                                            "char": 36
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                        "line": 8,
                                        "char": 36
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "tablename",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                            "line": 8,
                                            "char": 47
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                        "line": 8,
                                        "char": 47
                                    }
                                ],
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                "line": 8,
                                "char": 48
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                            "line": 9,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                    "line": 7,
                    "last-line": 10,
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
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                            "line": 11,
                                            "char": 16
                                        },
                                        "value": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                                "line": 11,
                                                "char": 22
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "id",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                                "line": 11,
                                                "char": 25
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                            "line": 11,
                                            "char": 25
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                        "line": 11,
                                        "char": 25
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "num",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                            "line": 11,
                                            "char": 29
                                        },
                                        "value": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                                "line": 11,
                                                "char": 35
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "num",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                                "line": 11,
                                                "char": 39
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                            "line": 11,
                                            "char": 39
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                        "line": 11,
                                        "char": 39
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "name",
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                            "line": 11,
                                            "char": 44
                                        },
                                        "value": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                                "line": 11,
                                                "char": 50
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "name",
                                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                                "line": 11,
                                                "char": 55
                                            },
                                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                            "line": 11,
                                            "char": 55
                                        },
                                        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                        "line": 11,
                                        "char": 55
                                    }
                                ],
                                "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                                "line": 11,
                                "char": 56
                            },
                            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                            "line": 12,
                            "char": 3
                        }
                    ],
                    "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
                    "line": 10,
                    "last-line": 13,
                    "char": 20
                }
            ],
            "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
            "line": 2,
            "char": 6
        },
        "file": "F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\Model1.zep",
        "line": 2,
        "char": 6
    }
]