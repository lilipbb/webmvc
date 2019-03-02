<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Model\\PbbDb',
    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
    'line' => 2,
    'char' => 6,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Db',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'isconnect',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 4,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'isTransaction',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 5,
          'char' => 11,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'prepareobj',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 6,
          'char' => 8,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'pdo',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 7,
          'char' => 8,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isTransaction',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 8,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'isTransaction',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 8,
                  'char' => 32,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 8,
                'char' => 32,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 9,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 7,
          'last-line' => 10,
          'char' => 17,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isConnect',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 11,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'isconnect',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 11,
                  'char' => 28,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 11,
                'char' => 28,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 12,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 10,
          'last-line' => 13,
          'char' => 17,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'defined',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'DB_HOST',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 14,
                          'char' => 27,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 14,
                        'char' => 27,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 14,
                    'char' => 28,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 14,
                  'char' => 28,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 14,
                'char' => 29,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'call_user_func_array',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '_include',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 15,
                          'char' => 43,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 15,
                        'char' => 43,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'file_get_contents',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'concat',
                                      'left' => 
                                      array (
                                        'type' => 'constant',
                                        'value' => 'PATH_CONFIG',
                                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                        'line' => 15,
                                        'char' => 74,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'mysqlconfig.php',
                                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                        'line' => 15,
                                        'char' => 90,
                                      ),
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 15,
                                      'char' => 90,
                                    ),
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 15,
                                    'char' => 90,
                                  ),
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                'line' => 15,
                                'char' => 91,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 15,
                              'char' => 91,
                            ),
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 15,
                          'char' => 92,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 15,
                        'char' => 92,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 15,
                    'char' => 93,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 16,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 17,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'isconnect',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 17,
                    'char' => 31,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 17,
                  'char' => 31,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 18,
              'char' => 9,
            ),
            2 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 18,
                  'char' => 11,
                ),
                'name' => 'init',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 18,
                'char' => 18,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 19,
              'char' => 9,
            ),
            3 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 19,
                  'char' => 11,
                ),
                'name' => 'pingdb',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 19,
                'char' => 20,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 20,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'isTransaction',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 20,
                    'char' => 35,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 20,
                  'char' => 35,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 21,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 13,
          'last-line' => 22,
          'char' => 17,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'init',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'arr',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 23,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'e',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 23,
                  'char' => 16,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 24,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'try-catch',
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'arr',
                      'expr' => 
                      array (
                        'type' => 'array',
                        'left' => 
                        array (
                          0 => 
                          array (
                            'key' => 
                            array (
                              'type' => 'int',
                              'value' => '1002',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 26,
                              'char' => 26,
                            ),
                            'value' => 
                            array (
                              'type' => 'string',
                              'value' => 'SET NAMES utf8;',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 26,
                              'char' => 43,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 26,
                            'char' => 43,
                          ),
                          1 => 
                          array (
                            'key' => 
                            array (
                              'type' => 'int',
                              'value' => '3',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 27,
                              'char' => 23,
                            ),
                            'value' => 
                            array (
                              'type' => 'int',
                              'value' => '2',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 27,
                              'char' => 26,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 27,
                            'char' => 26,
                          ),
                          2 => 
                          array (
                            'key' => 
                            array (
                              'type' => 'int',
                              'value' => '19',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 28,
                              'char' => 24,
                            ),
                            'value' => 
                            array (
                              'type' => 'int',
                              'value' => '3',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 28,
                              'char' => 27,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 28,
                            'char' => 27,
                          ),
                          3 => 
                          array (
                            'key' => 
                            array (
                              'type' => 'int',
                              'value' => '12',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 29,
                              'char' => 23,
                            ),
                            'value' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 30,
                              'char' => 17,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 30,
                            'char' => 17,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 30,
                        'char' => 18,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 30,
                      'char' => 18,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 31,
                  'char' => 10,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'pdo',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\PDO',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'concat',
                                      'left' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'mysql:host=',
                                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                        'line' => 31,
                                        'char' => 45,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'constant',
                                        'value' => 'DB_HOST',
                                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                        'line' => 31,
                                        'char' => 55,
                                      ),
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 31,
                                      'char' => 55,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'string',
                                      'value' => ';dbname=',
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 31,
                                      'char' => 66,
                                    ),
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 31,
                                    'char' => 66,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'constant',
                                    'value' => 'DB_NAME',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 31,
                                    'char' => 76,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                  'line' => 31,
                                  'char' => 76,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => ';port=',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                  'line' => 31,
                                  'char' => 85,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                'line' => 31,
                                'char' => 85,
                              ),
                              'right' => 
                              array (
                                'type' => 'constant',
                                'value' => 'DB_PORT',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                'line' => 31,
                                'char' => 94,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 31,
                              'char' => 94,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 31,
                            'char' => 94,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'constant',
                              'value' => 'DB_USER',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 31,
                              'char' => 103,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 31,
                            'char' => 103,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'constant',
                              'value' => 'DB_PSD',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 31,
                              'char' => 111,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 31,
                            'char' => 111,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'arr',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 31,
                              'char' => 116,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 31,
                            'char' => 116,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 31,
                        'char' => 117,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 31,
                      'char' => 117,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 32,
                  'char' => 10,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'isconnect',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 32,
                        'char' => 32,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 32,
                      'char' => 32,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 33,
                  'char' => 1,
                ),
              ),
              'catches' => 
              array (
                0 => 
                array (
                  'classes' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => '\\PDOException',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 33,
                      'char' => 21,
                    ),
                  ),
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'e',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 36,
                    'char' => 3,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'call_user_func_array',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '\\\\Pbb\\\\CorePbb::Log',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 34,
                              'char' => 48,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 34,
                            'char' => 48,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array',
                              'left' => 
                              array (
                                0 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '连接数据库失败　:',
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 34,
                                      'char' => 76,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'e',
                                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                        'line' => 34,
                                        'char' => 80,
                                      ),
                                      'name' => 'getMessage',
                                      'call-type' => 1,
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 34,
                                      'char' => 93,
                                    ),
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 34,
                                    'char' => 93,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                  'line' => 34,
                                  'char' => 93,
                                ),
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 34,
                              'char' => 94,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 34,
                            'char' => 94,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 34,
                        'char' => 95,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 35,
                      'char' => 1,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 36,
                  'char' => 3,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 36,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 22,
          'last-line' => 37,
          'char' => 17,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'pingdb',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'e',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 38,
                  'char' => 12,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 39,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'try-catch',
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 40,
                        'char' => 13,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pdo',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 40,
                        'char' => 18,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 40,
                      'char' => 18,
                    ),
                    'name' => 'getAttribute',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => '\\PDO',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 40,
                            'char' => 57,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ATTR_SERVER_VERSION',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 40,
                            'char' => 57,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 40,
                          'char' => 57,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 40,
                        'char' => 57,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 40,
                    'char' => 58,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 41,
                  'char' => 1,
                ),
              ),
              'catches' => 
              array (
                0 => 
                array (
                  'classes' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => '\\PDOException',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 41,
                      'char' => 21,
                    ),
                  ),
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'e',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 45,
                    'char' => 3,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'object-property',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'pdo',
                          'expr' => 
                          array (
                            'type' => 'null',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 42,
                            'char' => 28,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 42,
                          'char' => 28,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 43,
                      'char' => 11,
                    ),
                    1 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 43,
                          'char' => 13,
                        ),
                        'name' => 'init',
                        'call-type' => 1,
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 43,
                        'char' => 20,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 44,
                      'char' => 1,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 45,
                  'char' => 3,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 45,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 37,
          'last-line' => 46,
          'char' => 17,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getlastid',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 47,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'pdo',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 47,
                    'char' => 23,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 47,
                  'char' => 23,
                ),
                'name' => 'lastInsertId',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 47,
                'char' => 38,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 48,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 46,
          'last-line' => 49,
          'char' => 17,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'issuccess',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'query',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 49,
              'char' => 34,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'not-equals',
                  'left' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'gettype',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'query',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 50,
                          'char' => 24,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 50,
                        'char' => 24,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 50,
                    'char' => 26,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'object',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 50,
                    'char' => 33,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 50,
                  'char' => 33,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 50,
                'char' => 34,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 51,
                    'char' => 26,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 52,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 53,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'greater',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'query',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 53,
                    'char' => 19,
                  ),
                  'name' => 'rowCount',
                  'call-type' => 1,
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 53,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 53,
                  'char' => 32,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 53,
                'char' => 32,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 54,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 49,
          'last-line' => 55,
          'char' => 17,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'query',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'mes',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 55,
              'char' => 28,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'args',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 55,
              'char' => 33,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'pre',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 56,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'e',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 56,
                  'char' => 16,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 57,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'try-catch',
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 58,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'isTransaction',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 58,
                        'char' => 34,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 58,
                      'char' => 34,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 58,
                    'char' => 35,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'object-property-append',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'prepareobj',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'func_get_args',
                            'call-type' => 1,
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 59,
                            'char' => 56,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 59,
                          'char' => 56,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 60,
                      'char' => 23,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 61,
                      'char' => 10,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 62,
                  'char' => 10,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'pre',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 62,
                            'char' => 22,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pdo',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 62,
                            'char' => 27,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 62,
                          'char' => 27,
                        ),
                        'name' => 'prepare',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'mes',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 62,
                              'char' => 39,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 62,
                            'char' => 39,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 62,
                        'char' => 40,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 62,
                      'char' => 40,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 63,
                  'char' => 13,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pre',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 63,
                        'char' => 19,
                      ),
                      'name' => 'execute',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'args',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 63,
                            'char' => 32,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 63,
                          'char' => 32,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 63,
                      'char' => 33,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 63,
                    'char' => 34,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pre',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 64,
                        'char' => 28,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 65,
                      'char' => 10,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 66,
                  'char' => 1,
                ),
              ),
              'catches' => 
              array (
                0 => 
                array (
                  'classes' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => '\\PDOException',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 66,
                      'char' => 21,
                    ),
                  ),
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'e',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 68,
                    'char' => 12,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'call_user_func_array',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '\\\\Pbb\\\\CorePbb::Log',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 67,
                              'char' => 48,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 67,
                            'char' => 48,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array',
                              'left' => 
                              array (
                                0 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'mes',
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 67,
                                      'char' => 53,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'e',
                                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                        'line' => 67,
                                        'char' => 56,
                                      ),
                                      'name' => 'getMessage',
                                      'call-type' => 1,
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 67,
                                      'char' => 69,
                                    ),
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 67,
                                    'char' => 69,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                  'line' => 67,
                                  'char' => 69,
                                ),
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 67,
                              'char' => 70,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 67,
                            'char' => 70,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 67,
                        'char' => 71,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 68,
                      'char' => 1,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 68,
                  'char' => 12,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 68,
              'char' => 12,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 68,
                'char' => 19,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 69,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 55,
          'last-line' => 70,
          'char' => 17,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'beginTransaction',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'e',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 71,
                  'char' => 12,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 72,
              'char' => 9,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 72,
                    'char' => 16,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'isTransaction',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 72,
                    'char' => 30,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 72,
                  'char' => 30,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 72,
                'char' => 31,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 74,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 75,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'isTransaction',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 75,
                    'char' => 34,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 75,
                  'char' => 34,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 76,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'preparefun',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 76,
                    'char' => 29,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 76,
                  'char' => 29,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 77,
              'char' => 6,
            ),
            4 => 
            array (
              'type' => 'try-catch',
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 78,
                        'char' => 13,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pdo',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 78,
                        'char' => 18,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 78,
                      'char' => 18,
                    ),
                    'name' => 'beginTransaction',
                    'call-type' => 1,
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 78,
                    'char' => 37,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 79,
                  'char' => 1,
                ),
              ),
              'catches' => 
              array (
                0 => 
                array (
                  'classes' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => '\\PDOException',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 79,
                      'char' => 21,
                    ),
                  ),
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'e',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 82,
                    'char' => 3,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'call_user_func_array',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '\\\\Pbb\\\\CorePbb::log',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 80,
                              'char' => 48,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 80,
                            'char' => 48,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array',
                              'left' => 
                              array (
                                0 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '安全类型的　model对象还未释放　!不能创建新的安全类型的对象　',
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 80,
                                      'char' => 137,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'e',
                                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                        'line' => 80,
                                        'char' => 140,
                                      ),
                                      'name' => 'getMessage',
                                      'call-type' => 1,
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 80,
                                      'char' => 153,
                                    ),
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 80,
                                    'char' => 153,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                  'line' => 80,
                                  'char' => 153,
                                ),
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 80,
                              'char' => 154,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 80,
                            'char' => 154,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 80,
                        'char' => 155,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 81,
                      'char' => 1,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 82,
                  'char' => 3,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 82,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 70,
          'last-line' => 83,
          'char' => 17,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'commit',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'r',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 84,
                  'char' => 12,
                ),
                1 => 
                array (
                  'variable' => 'value',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 84,
                  'char' => 18,
                ),
                2 => 
                array (
                  'variable' => 'e',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 84,
                  'char' => 20,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 85,
              'char' => 9,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 85,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'isTransaction',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 85,
                      'char' => 31,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 85,
                    'char' => 31,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 85,
                  'char' => 31,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 85,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'echo',
                  'expressions' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => '事务还没开始　!',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 86,
                      'char' => 41,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 87,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 88,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'isTransaction',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 88,
                    'char' => 35,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 88,
                  'char' => 35,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 89,
              'char' => 9,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 89,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'isconnect',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 89,
                      'char' => 27,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 89,
                    'char' => 27,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 89,
                  'char' => 27,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 89,
                'char' => 28,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 90,
                    'char' => 26,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 91,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 92,
              'char' => 6,
            ),
            4 => 
            array (
              'type' => 'try-catch',
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 93,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'prepareobj',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 94,
                        'char' => 1,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 94,
                      'char' => 1,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 94,
                    'char' => 2,
                  ),
                  'value' => 'value',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'not',
                          'left' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 95,
                              'char' => 17,
                            ),
                            'name' => 'query',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 95,
                                    'char' => 29,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '0',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 95,
                                    'char' => 31,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                  'line' => 95,
                                  'char' => 32,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                'line' => 95,
                                'char' => 32,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 95,
                                    'char' => 38,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '1',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 95,
                                    'char' => 40,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                  'line' => 95,
                                  'char' => 41,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                'line' => 95,
                                'char' => 41,
                              ),
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 95,
                            'char' => 42,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 95,
                          'char' => 42,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 95,
                        'char' => 43,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'return',
                          'expr' => 
                          array (
                            'type' => 'bool',
                            'value' => 'false',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 96,
                            'char' => 32,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 97,
                          'char' => 11,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 98,
                      'char' => 10,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 99,
                  'char' => 10,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'r',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 99,
                            'char' => 19,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pdo',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 99,
                            'char' => 24,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 99,
                          'char' => 24,
                        ),
                        'name' => 'commit',
                        'call-type' => 1,
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 99,
                        'char' => 33,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 99,
                      'char' => 33,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 100,
                  'char' => 13,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'r',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 100,
                    'char' => 16,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 101,
                  'char' => 1,
                ),
              ),
              'catches' => 
              array (
                0 => 
                array (
                  'classes' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => '\\PDOException',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 101,
                      'char' => 21,
                    ),
                  ),
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'e',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 104,
                    'char' => 12,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 102,
                            'char' => 13,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pdo',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 102,
                            'char' => 18,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                          'line' => 102,
                          'char' => 18,
                        ),
                        'name' => 'rollBack',
                        'call-type' => 1,
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 102,
                        'char' => 29,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 103,
                      'char' => 27,
                    ),
                    1 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'call_user_func_array',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '\\\\Pbb\\\\CorePbb::Log',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 103,
                              'char' => 48,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 103,
                            'char' => 48,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array',
                              'left' => 
                              array (
                                0 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'mcall',
                                    'variable' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'e',
                                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                      'line' => 103,
                                      'char' => 52,
                                    ),
                                    'name' => 'getMessage',
                                    'call-type' => 1,
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                    'line' => 103,
                                    'char' => 65,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                                  'line' => 103,
                                  'char' => 65,
                                ),
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                              'line' => 103,
                              'char' => 66,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                            'line' => 103,
                            'char' => 66,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 103,
                        'char' => 67,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 104,
                      'char' => 1,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 104,
                  'char' => 12,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 104,
              'char' => 12,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 104,
                'char' => 19,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 105,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 83,
          'last-line' => 106,
          'char' => 17,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'rollback',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 107,
                    'char' => 16,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'isTransaction',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 107,
                    'char' => 30,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 107,
                  'char' => 30,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 107,
                'char' => 31,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'isTransaction',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 108,
                        'char' => 43,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 108,
                      'char' => 43,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 109,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 109,
                        'char' => 19,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pdo',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                        'line' => 109,
                        'char' => 24,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                      'line' => 109,
                      'char' => 24,
                    ),
                    'name' => 'rollBack',
                    'call-type' => 1,
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                    'line' => 109,
                    'char' => 35,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 110,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 111,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 106,
          'last-line' => 112,
          'char' => 17,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__destruct',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                  'line' => 113,
                  'char' => 11,
                ),
                'name' => 'rollback',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
                'line' => 113,
                'char' => 22,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
              'line' => 114,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
          'line' => 112,
          'last-line' => 115,
          'char' => 17,
        ),
      ),
      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
      'line' => 2,
      'char' => 6,
    ),
    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\Db.zep',
    'line' => 2,
    'char' => 6,
  ),
);