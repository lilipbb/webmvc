<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Model\\PbbDb',
    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
    'line' => 2,
    'char' => 6,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'ModelBase',
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
          'name' => '_db',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
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
          'name' => 'db_table',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
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
          'name' => '_arr',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 6,
          'char' => 11,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_allnames',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 7,
          'char' => 11,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'id',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 8,
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
            1 => 'final',
            2 => 'static',
          ),
          'type' => 'method',
          'name' => 'beginTransaction',
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
                  'type' => 'scall',
                  'dynamic-class' => 0,
                  'class' => 'self',
                  'dynamic' => 0,
                  'name' => 'GetDb',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 9,
                  'char' => 20,
                ),
                'name' => 'beginTransaction',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 9,
                'char' => 39,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 10,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 8,
          'last-line' => 11,
          'char' => 30,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
            2 => 'static',
          ),
          'type' => 'method',
          'name' => 'Commit',
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
                  'type' => 'scall',
                  'dynamic-class' => 0,
                  'class' => 'self',
                  'dynamic' => 0,
                  'name' => 'GetDb',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 12,
                  'char' => 27,
                ),
                'name' => 'commit',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 12,
                'char' => 36,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 13,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 11,
          'last-line' => 14,
          'char' => 30,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
            2 => 'static',
          ),
          'type' => 'method',
          'name' => 'GetDb',
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
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => '_GET',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 15,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'mysql_db',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 15,
                          'char' => 31,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 15,
                        'char' => 32,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 15,
                      'char' => 33,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 15,
                    'char' => 33,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 15,
                  'char' => 33,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 15,
                'char' => 34,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => '_GET',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'mysql_db',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 16,
                          'char' => 31,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Model\\PbbDb\\Db',
                        'dynamic' => 0,
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 16,
                        'char' => 54,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 16,
                      'char' => 54,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 17,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 18,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'array-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => '_GET',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 18,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'mysql_db',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 18,
                  'char' => 26,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 18,
                'char' => 27,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 19,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 14,
          'last-line' => 20,
          'char' => 30,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'final',
          ),
          'type' => 'method',
          'name' => 'gettablename',
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
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 21,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'db_table',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 21,
                  'char' => 27,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 21,
                'char' => 27,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 22,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 20,
          'last-line' => 23,
          'char' => 26,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
          ),
          'type' => 'method',
          'name' => 'getid',
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
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 24,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'id',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 24,
                  'char' => 21,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 24,
                'char' => 21,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 25,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 23,
          'last-line' => 26,
          'char' => 23,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
          ),
          'type' => 'method',
          'name' => 'haveuser',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'greater',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 27,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'id',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 27,
                    'char' => 22,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 27,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 27,
                  'char' => 25,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 27,
                'char' => 25,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 28,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 26,
          'last-line' => 29,
          'char' => 23,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'checkid',
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
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 30,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'id',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 30,
                      'char' => 20,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 30,
                    'char' => 20,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '1',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 30,
                    'char' => 23,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 30,
                  'char' => 23,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 30,
                'char' => 24,
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
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 31,
                          'char' => 54,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 31,
                        'char' => 54,
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
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '该对象　',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                    'line' => 31,
                                    'char' => 69,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'get_class',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'this',
                                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                          'line' => 31,
                                          'char' => 85,
                                        ),
                                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                        'line' => 31,
                                        'char' => 85,
                                      ),
                                    ),
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                    'line' => 31,
                                    'char' => 87,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 31,
                                  'char' => 87,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '还不存在，请先插入　',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 31,
                                  'char' => 119,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 31,
                                'char' => 119,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 31,
                              'char' => 119,
                            ),
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 31,
                          'char' => 120,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 31,
                        'char' => 120,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 31,
                    'char' => 121,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 32,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 33,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 29,
          'last-line' => 34,
          'char' => 18,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
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
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 35,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_db',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 35,
                    'char' => 23,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 35,
                  'char' => 23,
                ),
                'name' => 'isConnect',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 35,
                'char' => 35,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 36,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 34,
          'last-line' => 37,
          'char' => 23,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'isprivate',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'pname',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 37,
              'char' => 35,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'in_array',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'pname',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 38,
                      'char' => 27,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 38,
                    'char' => 27,
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
                            'type' => 'string',
                            'value' => '_allnames',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 38,
                            'char' => 38,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 38,
                          'char' => 38,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'db_table',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 38,
                            'char' => 48,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 38,
                          'char' => 48,
                        ),
                        2 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => '_arr',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 38,
                            'char' => 53,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 38,
                          'char' => 53,
                        ),
                        3 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => '_db',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 38,
                            'char' => 57,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 38,
                          'char' => 57,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 38,
                      'char' => 58,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 38,
                    'char' => 58,
                  ),
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 38,
                'char' => 59,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 39,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 37,
          'last-line' => 40,
          'char' => 18,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
          ),
          'type' => 'method',
          'name' => 'update',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'safe',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 40,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 40,
              'char' => 41,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'names',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 41,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'q',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 41,
                  'char' => 21,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 42,
              'char' => 9,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'arr',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 42,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'r',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 42,
                  'char' => 16,
                ),
                2 => 
                array (
                  'variable' => 'pname',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 42,
                  'char' => 22,
                ),
                3 => 
                array (
                  'variable' => 'pv',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 42,
                  'char' => 25,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 43,
              'char' => 9,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'safe',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 43,
                  'char' => 15,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 43,
                'char' => 16,
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
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 44,
                      'char' => 19,
                    ),
                    'name' => 'checksafe',
                    'call-type' => 1,
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 44,
                    'char' => 31,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 45,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 46,
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
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 46,
                  'char' => 11,
                ),
                'name' => 'checkid',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 46,
                'char' => 21,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 47,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'names',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 47,
                    'char' => 18,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 47,
                  'char' => 18,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 48,
              'char' => 8,
            ),
            5 => 
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
                    'type' => 'empty-array',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 48,
                    'char' => 17,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 48,
                  'char' => 17,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 49,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 49,
                    'char' => 34,
                  ),
                  'name' => '__getmems',
                  'call-type' => 1,
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 50,
                  'char' => 1,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 50,
                'char' => 2,
              ),
              'key' => 'pname',
              'value' => 'pv',
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
                      'type' => 'or',
                      'left' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 51,
                          'char' => 14,
                        ),
                        'name' => 'isprivate',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'pname',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 51,
                              'char' => 30,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 51,
                            'char' => 30,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 51,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'equals',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'pname',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 51,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'id',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 51,
                          'char' => 46,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 51,
                        'char' => 46,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 51,
                      'char' => 46,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 51,
                    'char' => 47,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'continue',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 53,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 54,
                  'char' => 7,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'key_exists',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pname',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 54,
                            'char' => 25,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 54,
                          'char' => 25,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 54,
                              'char' => 31,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_arr',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 54,
                              'char' => 36,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 54,
                            'char' => 36,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 54,
                          'char' => 36,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 54,
                      'char' => 37,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 54,
                    'char' => 38,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'continue',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 56,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 57,
                  'char' => 7,
                ),
                2 => 
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
                        'type' => 'variable',
                        'value' => 'names',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 57,
                        'char' => 15,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 57,
                        'char' => 16,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 57,
                      'char' => 16,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 57,
                    'char' => 17,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'names',
                          'expr' => 
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
                                  'type' => 'variable',
                                  'value' => 'names',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 58,
                                  'char' => 32,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => ',',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 58,
                                  'char' => 36,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 58,
                                'char' => 36,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'pname',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 58,
                                'char' => 44,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 58,
                              'char' => 44,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '=?',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 58,
                              'char' => 48,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 58,
                            'char' => 48,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 58,
                          'char' => 48,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 59,
                      'char' => 9,
                    ),
                  ),
                  'else_statements' => 
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
                          'variable' => 'names',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'names',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 61,
                                'char' => 32,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'pname',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 61,
                                'char' => 40,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 61,
                              'char' => 40,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '=?',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 61,
                              'char' => 44,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 61,
                            'char' => 44,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 61,
                          'char' => 44,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 62,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 63,
                  'char' => 16,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'arr',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pv',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 63,
                        'char' => 28,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 63,
                      'char' => 28,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 64,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 65,
              'char' => 10,
            ),
            7 => 
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
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 65,
                    'char' => 34,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_arr',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 66,
                    'char' => 1,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 66,
                  'char' => 1,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 66,
                'char' => 2,
              ),
              'key' => 'pname',
              'value' => 'pv',
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
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'names',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 67,
                        'char' => 15,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 67,
                        'char' => 16,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 67,
                      'char' => 16,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 67,
                    'char' => 17,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'names',
                          'expr' => 
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
                                  'type' => 'variable',
                                  'value' => 'names',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 68,
                                  'char' => 32,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => ',',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 68,
                                  'char' => 36,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 68,
                                'char' => 36,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'pname',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 68,
                                'char' => 44,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 68,
                              'char' => 44,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '=?',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 68,
                              'char' => 48,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 68,
                            'char' => 48,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 68,
                          'char' => 48,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 69,
                      'char' => 9,
                    ),
                  ),
                  'else_statements' => 
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
                          'variable' => 'names',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'names',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 71,
                                'char' => 32,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'pname',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 71,
                                'char' => 40,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 71,
                              'char' => 40,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '=?',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 71,
                              'char' => 44,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 71,
                            'char' => 44,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 71,
                          'char' => 44,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 72,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 73,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'arr',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pv',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 73,
                        'char' => 28,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 73,
                      'char' => 28,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 74,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 75,
              'char' => 9,
            ),
            8 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'names',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 75,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 75,
                    'char' => 18,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 75,
                  'char' => 18,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 75,
                'char' => 19,
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
                      'value' => 'id不需要更新　',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 76,
                      'char' => 39,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 77,
                  'char' => 19,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 77,
                    'char' => 26,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 78,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 79,
              'char' => 8,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'q',
                  'expr' => 
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
                              'value' => 'update ',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 79,
                              'char' => 22,
                            ),
                            'right' => 
                            array (
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 79,
                                'char' => 29,
                              ),
                              'name' => 'gettablename',
                              'call-type' => 1,
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 79,
                              'char' => 45,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 79,
                            'char' => 45,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ' set ',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 79,
                            'char' => 53,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 79,
                          'char' => 53,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'names',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 79,
                          'char' => 61,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 79,
                        'char' => 61,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => ' where id=',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 79,
                        'char' => 74,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 79,
                      'char' => 74,
                    ),
                    'right' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 79,
                        'char' => 81,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'id',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 79,
                        'char' => 84,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 79,
                      'char' => 84,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 79,
                    'char' => 84,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 79,
                  'char' => 84,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 80,
              'char' => 8,
            ),
            10 => 
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
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 80,
                        'char' => 17,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_db',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 80,
                        'char' => 22,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 80,
                      'char' => 22,
                    ),
                    'name' => 'query',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'q',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 80,
                          'char' => 30,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 80,
                        'char' => 30,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'arr',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 80,
                          'char' => 34,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 80,
                        'char' => 34,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 80,
                    'char' => 35,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 80,
                  'char' => 35,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 81,
              'char' => 9,
            ),
            11 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 81,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_db',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 81,
                      'char' => 21,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 81,
                    'char' => 21,
                  ),
                  'name' => 'isTransaction',
                  'call-type' => 1,
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 81,
                  'char' => 37,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 81,
                'char' => 38,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 82,
                    'char' => 25,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 83,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 84,
              'char' => 11,
            ),
            12 => 
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
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 84,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_db',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 84,
                    'char' => 23,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 84,
                  'char' => 23,
                ),
                'name' => 'issuccess',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'r',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 84,
                      'char' => 35,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 84,
                    'char' => 35,
                  ),
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 84,
                'char' => 36,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 85,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 40,
          'last-line' => 86,
          'char' => 23,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
          ),
          'type' => 'method',
          'name' => 'insert',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'names',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 87,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'values',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 87,
                  'char' => 26,
                ),
                2 => 
                array (
                  'variable' => 'q',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 87,
                  'char' => 28,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 88,
              'char' => 9,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'arr',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 88,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'r',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 88,
                  'char' => 16,
                ),
                2 => 
                array (
                  'variable' => 'pname',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 88,
                  'char' => 22,
                ),
                3 => 
                array (
                  'variable' => 'pv',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 88,
                  'char' => 25,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 89,
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
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 89,
                  'char' => 11,
                ),
                'name' => 'checksafe',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 89,
                'char' => 23,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 90,
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
                  'type' => 'greater',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 90,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'id',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 90,
                      'char' => 20,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 90,
                    'char' => 20,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 90,
                    'char' => 23,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 90,
                  'char' => 23,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 90,
                'char' => 24,
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
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => 'id:',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 91,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 91,
                            'char' => 28,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'id',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 91,
                            'char' => 31,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 91,
                          'char' => 31,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 91,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '该对象已经存在，不需要插入　',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 91,
                        'char' => 74,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 91,
                      'char' => 74,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 92,
                  'char' => 19,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 92,
                    'char' => 22,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 93,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 94,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'names',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 94,
                    'char' => 18,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 94,
                  'char' => 18,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 95,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'values',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 95,
                    'char' => 19,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 95,
                  'char' => 19,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 96,
              'char' => 8,
            ),
            6 => 
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
                    'type' => 'empty-array',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 96,
                    'char' => 17,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 96,
                  'char' => 17,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 97,
              'char' => 10,
            ),
            7 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 97,
                    'char' => 34,
                  ),
                  'name' => '__getmems',
                  'call-type' => 1,
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 98,
                  'char' => 1,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 98,
                'char' => 2,
              ),
              'key' => 'pname',
              'value' => 'pv',
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
                      'type' => 'or',
                      'left' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 99,
                          'char' => 14,
                        ),
                        'name' => 'isprivate',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'pname',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 99,
                              'char' => 30,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 99,
                            'char' => 30,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 99,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'equals',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'pname',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 99,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'id',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 99,
                          'char' => 46,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 99,
                        'char' => 46,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 99,
                      'char' => 46,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 99,
                    'char' => 47,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'continue',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 101,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 102,
                  'char' => 7,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'key_exists',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pname',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 102,
                            'char' => 25,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 102,
                          'char' => 25,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 102,
                              'char' => 31,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_arr',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 102,
                              'char' => 36,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 102,
                            'char' => 36,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 102,
                          'char' => 36,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 102,
                      'char' => 37,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 102,
                    'char' => 38,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'continue',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 104,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 105,
                  'char' => 7,
                ),
                2 => 
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
                        'type' => 'variable',
                        'value' => 'names',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 105,
                        'char' => 15,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 105,
                        'char' => 16,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 105,
                      'char' => 16,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 105,
                    'char' => 17,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'names',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'names',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 106,
                                'char' => 32,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ',',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 106,
                                'char' => 36,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 106,
                              'char' => 36,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'pname',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 106,
                              'char' => 43,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 106,
                            'char' => 43,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 106,
                          'char' => 43,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 107,
                      'char' => 18,
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
                          'variable' => 'values',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'values',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 107,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'list',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => ',?',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 107,
                                'char' => 38,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 107,
                              'char' => 39,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 107,
                            'char' => 39,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 107,
                          'char' => 39,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 108,
                      'char' => 9,
                    ),
                  ),
                  'else_statements' => 
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
                          'variable' => 'names',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'names',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 110,
                              'char' => 31,
                            ),
                            'right' => 
                            array (
                              'type' => 'list',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'pname',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 110,
                                'char' => 39,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 110,
                              'char' => 40,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 110,
                            'char' => 40,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 110,
                          'char' => 40,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 111,
                      'char' => 18,
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
                          'variable' => 'values',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'values',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 111,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'list',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => '?',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 111,
                                'char' => 37,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 111,
                              'char' => 38,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 111,
                            'char' => 38,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 111,
                          'char' => 38,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 112,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 113,
                  'char' => 16,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'arr',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pv',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 113,
                        'char' => 28,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 113,
                      'char' => 28,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 114,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 115,
              'char' => 10,
            ),
            8 => 
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
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 115,
                    'char' => 34,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_arr',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 116,
                    'char' => 1,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 116,
                  'char' => 1,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 116,
                'char' => 2,
              ),
              'key' => 'pname',
              'value' => 'pv',
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
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'names',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 117,
                        'char' => 15,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 117,
                        'char' => 16,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 117,
                      'char' => 16,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 117,
                    'char' => 17,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'names',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'names',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 118,
                                'char' => 32,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ',',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 118,
                                'char' => 36,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 118,
                              'char' => 36,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'pname',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 118,
                              'char' => 43,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 118,
                            'char' => 43,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 118,
                          'char' => 43,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 119,
                      'char' => 18,
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
                          'variable' => 'values',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'values',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 119,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'list',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => ',?',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 119,
                                'char' => 38,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 119,
                              'char' => 39,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 119,
                            'char' => 39,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 119,
                          'char' => 39,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 120,
                      'char' => 9,
                    ),
                  ),
                  'else_statements' => 
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
                          'variable' => 'names',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'names',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 122,
                              'char' => 31,
                            ),
                            'right' => 
                            array (
                              'type' => 'list',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'pname',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 122,
                                'char' => 39,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 122,
                              'char' => 40,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 122,
                            'char' => 40,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 122,
                          'char' => 40,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 123,
                      'char' => 18,
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
                          'variable' => 'values',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'values',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 123,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'list',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => '?',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 123,
                                'char' => 37,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 123,
                              'char' => 38,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 123,
                            'char' => 38,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 123,
                          'char' => 38,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 124,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 125,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'arr',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pv',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 125,
                        'char' => 28,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 125,
                      'char' => 28,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 126,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 127,
              'char' => 8,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'q',
                  'expr' => 
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
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => 'insert ',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 127,
                                'char' => 22,
                              ),
                              'right' => 
                              array (
                                'type' => 'mcall',
                                'variable' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 127,
                                  'char' => 29,
                                ),
                                'name' => 'gettablename',
                                'call-type' => 1,
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 127,
                                'char' => 45,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 127,
                              'char' => 45,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '(',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 127,
                              'char' => 49,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 127,
                            'char' => 49,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'names',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 127,
                            'char' => 57,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 127,
                          'char' => 57,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ')values(',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 127,
                          'char' => 68,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 127,
                        'char' => 68,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'values',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 127,
                        'char' => 77,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 127,
                      'char' => 77,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => ')',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 127,
                      'char' => 80,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 127,
                    'char' => 80,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 127,
                  'char' => 80,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 128,
              'char' => 8,
            ),
            10 => 
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
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 128,
                        'char' => 17,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_db',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 128,
                        'char' => 22,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 128,
                      'char' => 22,
                    ),
                    'name' => 'query',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'q',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 128,
                          'char' => 30,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 128,
                        'char' => 30,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'arr',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 128,
                          'char' => 34,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 128,
                        'char' => 34,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 128,
                    'char' => 35,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 128,
                  'char' => 35,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 129,
              'char' => 8,
            ),
            11 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'id',
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
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 129,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_db',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 129,
                        'char' => 31,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 129,
                      'char' => 31,
                    ),
                    'name' => 'getlastid',
                    'call-type' => 1,
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 129,
                    'char' => 43,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 129,
                  'char' => 43,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 130,
              'char' => 9,
            ),
            12 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 130,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_db',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 130,
                      'char' => 21,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 130,
                    'char' => 21,
                  ),
                  'name' => 'isTransaction',
                  'call-type' => 1,
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 130,
                  'char' => 37,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 130,
                'char' => 38,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 131,
                    'char' => 25,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 132,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 133,
              'char' => 11,
            ),
            13 => 
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
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 133,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_db',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 133,
                    'char' => 23,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 133,
                  'char' => 23,
                ),
                'name' => 'issuccess',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'r',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 133,
                      'char' => 35,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 133,
                    'char' => 35,
                  ),
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 133,
                'char' => 36,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 134,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 86,
          'last-line' => 135,
          'char' => 23,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
          ),
          'type' => 'method',
          'name' => 'getby',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 135,
              'char' => 42,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 135,
              'char' => 55,
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
                  'variable' => 'namearr',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 136,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'valuearr',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 136,
                  'char' => 27,
                ),
                2 => 
                array (
                  'variable' => 'r',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 136,
                  'char' => 29,
                ),
                3 => 
                array (
                  'variable' => 'row',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 136,
                  'char' => 33,
                ),
                4 => 
                array (
                  'variable' => 'pname',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 136,
                  'char' => 39,
                ),
                5 => 
                array (
                  'variable' => 'pv',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 136,
                  'char' => 42,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 137,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'q',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 137,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'mes',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 137,
                  'char' => 19,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 138,
              'char' => 9,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'i',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 138,
                  'char' => 12,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 139,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'namearr',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'explode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => ',',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 139,
                          'char' => 27,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 139,
                        'char' => 27,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'name',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 139,
                          'char' => 32,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 139,
                        'char' => 32,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 139,
                    'char' => 33,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 139,
                  'char' => 33,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 140,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'valuearr',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'explode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => ',',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 140,
                          'char' => 28,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 140,
                        'char' => 28,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 140,
                          'char' => 34,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 140,
                        'char' => 34,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 140,
                    'char' => 35,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 140,
                  'char' => 35,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 141,
              'char' => 9,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'greater',
                  'left' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'count',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'namearr',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 141,
                          'char' => 24,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 141,
                        'char' => 24,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 141,
                    'char' => 25,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '1',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 141,
                    'char' => 27,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 141,
                  'char' => 27,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 141,
                'char' => 28,
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
                        'name' => 'count',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'namearr',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 142,
                              'char' => 22,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 142,
                            'char' => 22,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 142,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'count',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'valuearr',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 142,
                              'char' => 39,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 142,
                            'char' => 39,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 142,
                        'char' => 40,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 142,
                      'char' => 40,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 142,
                    'char' => 41,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'var_dump',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'name',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 143,
                              'char' => 29,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 143,
                            'char' => 29,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 143,
                        'char' => 30,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 144,
                      'char' => 23,
                    ),
                    1 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'var_dump',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 144,
                              'char' => 30,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 144,
                            'char' => 30,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 144,
                        'char' => 31,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 145,
                      'char' => 35,
                    ),
                    2 => 
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
                              'value' => '\\\\Pbb\\\\CorePbb::Error',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 145,
                              'char' => 58,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 145,
                            'char' => 58,
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
                                    'type' => 'string',
                                    'value' => 'name和　value个数不相等　',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                    'line' => 145,
                                    'char' => 93,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 145,
                                  'char' => 93,
                                ),
                                1 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'bool',
                                    'value' => 'false',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                    'line' => 145,
                                    'char' => 99,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 145,
                                  'char' => 99,
                                ),
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 145,
                              'char' => 100,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 145,
                            'char' => 100,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 145,
                        'char' => 101,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 146,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 147,
                  'char' => 16,
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
                      'variable' => 'name',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'implode',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '=? and ',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 147,
                              'char' => 38,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 147,
                            'char' => 38,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'namearr',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 147,
                              'char' => 46,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 147,
                            'char' => 46,
                          ),
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 147,
                        'char' => 47,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 147,
                      'char' => 47,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 148,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 149,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'q',
                  'expr' => 
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
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'select ',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 149,
                                  'char' => 22,
                                ),
                                'right' => 
                                array (
                                  'type' => 'property-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'this',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                    'line' => 149,
                                    'char' => 29,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => '_allnames',
                                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                    'line' => 149,
                                    'char' => 40,
                                  ),
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 149,
                                  'char' => 40,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 149,
                                'char' => 40,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ' from ',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 149,
                                'char' => 49,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 149,
                              'char' => 49,
                            ),
                            'right' => 
                            array (
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 149,
                                'char' => 56,
                              ),
                              'name' => 'gettablename',
                              'call-type' => 1,
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 149,
                              'char' => 72,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 149,
                            'char' => 72,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ' where ',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 149,
                            'char' => 82,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 149,
                          'char' => 82,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'name',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 149,
                          'char' => 88,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 149,
                        'char' => 88,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '=? ',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 149,
                        'char' => 93,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 149,
                      'char' => 93,
                    ),
                    'right' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'ternary',
                        'left' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 149,
                              'char' => 101,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_db',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 149,
                              'char' => 106,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 149,
                            'char' => 106,
                          ),
                          'name' => 'isTransaction',
                          'call-type' => 1,
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 149,
                          'char' => 123,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'FOR UPDATE;',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 149,
                          'char' => 137,
                        ),
                        'extra' => 
                        array (
                          'type' => 'string',
                          'value' => ';',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 149,
                          'char' => 140,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 149,
                        'char' => 140,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 149,
                      'char' => 141,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 149,
                    'char' => 141,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 149,
                  'char' => 141,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 150,
              'char' => 8,
            ),
            7 => 
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
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 150,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_db',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 150,
                        'char' => 23,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 150,
                      'char' => 23,
                    ),
                    'name' => 'query',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'q',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 150,
                          'char' => 31,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 150,
                        'char' => 31,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'valuearr',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 150,
                          'char' => 41,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 150,
                        'char' => 41,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 150,
                    'char' => 42,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 150,
                  'char' => 42,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 151,
              'char' => 8,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'mes',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'fetch',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 151,
                    'char' => 19,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 151,
                  'char' => 19,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 152,
              'char' => 8,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'row',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'r',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 152,
                      'char' => 17,
                    ),
                    'name' => 'mes',
                    'call-type' => 2,
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 152,
                    'char' => 25,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 152,
                  'char' => 25,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 153,
              'char' => 9,
            ),
            10 => 
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
                    'type' => 'variable',
                    'value' => 'row',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 153,
                    'char' => 15,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 153,
                  'char' => 15,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 153,
                'char' => 16,
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
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 154,
                    'char' => 26,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 155,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 156,
              'char' => 8,
            ),
            11 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'i',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 156,
                    'char' => 15,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 156,
                  'char' => 15,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 157,
              'char' => 10,
            ),
            12 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 157,
                    'char' => 34,
                  ),
                  'name' => '__getmems',
                  'call-type' => 1,
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 158,
                  'char' => 1,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 158,
                'char' => 2,
              ),
              'key' => 'pname',
              'value' => 'pv',
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
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 159,
                        'char' => 14,
                      ),
                      'name' => 'isprivate',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pname',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 159,
                            'char' => 30,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 159,
                          'char' => 30,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 159,
                      'char' => 31,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 159,
                    'char' => 32,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'continue',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 161,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 162,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-dynamic-object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'pname',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'row',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 162,
                          'char' => 37,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'i',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 162,
                          'char' => 39,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 162,
                        'char' => 40,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 162,
                      'char' => 40,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 163,
                  'char' => 16,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'i',
                      'expr' => 
                      array (
                        'type' => 'add',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'i',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 163,
                          'char' => 21,
                        ),
                        'right' => 
                        array (
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'int',
                            'value' => '1',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 163,
                            'char' => 24,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 163,
                          'char' => 25,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 163,
                        'char' => 25,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 163,
                      'char' => 25,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 164,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 165,
              'char' => 11,
            ),
            13 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 165,
                'char' => 17,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 166,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 135,
          'last-line' => 167,
          'char' => 23,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
          ),
          'type' => 'method',
          'name' => 'getbyid',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'id',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 167,
              'char' => 35,
            ),
          ),
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
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 168,
                  'char' => 18,
                ),
                'name' => 'getby',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'id',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 168,
                      'char' => 27,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 168,
                    'char' => 27,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'id',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 168,
                      'char' => 31,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 168,
                    'char' => 31,
                  ),
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 168,
                'char' => 32,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 169,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 167,
          'last-line' => 170,
          'char' => 23,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'checksafe',
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 171,
                        'char' => 17,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_db',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 171,
                        'char' => 22,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 171,
                      'char' => 22,
                    ),
                    'name' => 'isTransaction',
                    'call-type' => 1,
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 171,
                    'char' => 38,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 171,
                  'char' => 38,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 171,
                'char' => 39,
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
                          'value' => '\\\\Pbb\\\\CorePbb::Error',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 172,
                          'char' => 56,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 172,
                        'char' => 56,
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
                                'type' => 'string',
                                'value' => '只能在事务里头进行插入　,安全的更新和删除　!',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 172,
                                'char' => 123,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 172,
                              'char' => 123,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'false',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 172,
                                'char' => 129,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 172,
                              'char' => 129,
                            ),
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 172,
                          'char' => 130,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 172,
                        'char' => 130,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 172,
                    'char' => 131,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 173,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 174,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 170,
          'last-line' => 175,
          'char' => 18,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'final',
          ),
          'type' => 'method',
          'name' => 'delete',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'safe',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 175,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 175,
              'char' => 41,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'q',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 176,
                  'char' => 15,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 177,
              'char' => 9,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'r',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 177,
                  'char' => 12,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 178,
              'char' => 9,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'safe',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 178,
                  'char' => 15,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 178,
                'char' => 16,
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
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 179,
                      'char' => 19,
                    ),
                    'name' => 'checksafe',
                    'call-type' => 1,
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 179,
                    'char' => 31,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 180,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 181,
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
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 181,
                  'char' => 11,
                ),
                'name' => 'checkid',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 181,
                'char' => 21,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 182,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'q',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => 'delete from ',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 182,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 182,
                          'char' => 34,
                        ),
                        'name' => 'gettablename',
                        'call-type' => 1,
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 182,
                        'char' => 50,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 182,
                      'char' => 50,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => ' where id=?',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 182,
                      'char' => 63,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 182,
                    'char' => 63,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 182,
                  'char' => 63,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 183,
              'char' => 8,
            ),
            5 => 
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
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 183,
                        'char' => 17,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_db',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 183,
                        'char' => 22,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 183,
                      'char' => 22,
                    ),
                    'name' => 'query',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'q',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 183,
                          'char' => 30,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 183,
                        'char' => 30,
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
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 183,
                                  'char' => 38,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'id',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 183,
                                  'char' => 41,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 183,
                                'char' => 41,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 183,
                              'char' => 41,
                            ),
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 183,
                          'char' => 42,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 183,
                        'char' => 42,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 183,
                    'char' => 43,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 183,
                  'char' => 43,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 184,
              'char' => 9,
            ),
            6 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 184,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_db',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 184,
                      'char' => 21,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 184,
                    'char' => 21,
                  ),
                  'name' => 'isTransaction',
                  'call-type' => 1,
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 184,
                  'char' => 37,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 184,
                'char' => 38,
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
                      'property' => 'id',
                      'expr' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 185,
                        'char' => 28,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 185,
                      'char' => 28,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 186,
                  'char' => 19,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 186,
                    'char' => 25,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 187,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 188,
              'char' => 8,
            ),
            7 => 
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
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 188,
                        'char' => 17,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_db',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 188,
                        'char' => 22,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 188,
                      'char' => 22,
                    ),
                    'name' => 'issuccess',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'r',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 188,
                          'char' => 34,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 188,
                        'char' => 34,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 188,
                    'char' => 35,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 188,
                  'char' => 35,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 189,
              'char' => 9,
            ),
            8 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'r',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 189,
                  'char' => 12,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 189,
                'char' => 13,
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
                      'property' => 'id',
                      'expr' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 190,
                        'char' => 28,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 190,
                      'char' => 28,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 191,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 192,
              'char' => 11,
            ),
            9 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'r',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 192,
                'char' => 14,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 193,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 175,
          'last-line' => 194,
          'char' => 23,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 194,
                'char' => 36,
              ),
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 194,
              'char' => 36,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 194,
                'char' => 44,
              ),
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 194,
              'char' => 44,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'tablename',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 194,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 194,
              'char' => 56,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'all',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 195,
                  'char' => 17,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 196,
              'char' => 9,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'pname',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 196,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'pv',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 196,
                  'char' => 19,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 197,
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
                  'property' => '_db',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'self',
                    'dynamic' => 0,
                    'name' => 'GetDb',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 197,
                    'char' => 33,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 197,
                  'char' => 33,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 198,
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
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tablename',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 198,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 198,
                    'char' => 22,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 198,
                  'char' => 22,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 198,
                'char' => 23,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'tablename',
                      'expr' => 
                      array (
                        'type' => 'constant',
                        'value' => 'DB_TABLE',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 199,
                        'char' => 36,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 199,
                      'char' => 36,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 200,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 201,
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
                  'property' => 'db_table',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tablename',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 201,
                    'char' => 36,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 201,
                  'char' => 36,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 202,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'all',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 202,
                    'char' => 16,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 202,
                  'char' => 16,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 203,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_arr',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 203,
                    'char' => 23,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 203,
                  'char' => 23,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 204,
              'char' => 10,
            ),
            7 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 204,
                    'char' => 34,
                  ),
                  'name' => '__getmems',
                  'call-type' => 1,
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 205,
                  'char' => 1,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 205,
                'char' => 2,
              ),
              'key' => 'pname',
              'value' => 'pv',
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
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 206,
                        'char' => 14,
                      ),
                      'name' => 'isprivate',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pname',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 206,
                            'char' => 30,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 206,
                          'char' => 30,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 206,
                      'char' => 31,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 206,
                    'char' => 32,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'continue',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 208,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 209,
                  'char' => 7,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'all',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 209,
                        'char' => 13,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 209,
                        'char' => 14,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 209,
                      'char' => 14,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 209,
                    'char' => 15,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'all',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'all',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 210,
                              'char' => 27,
                            ),
                            'right' => 
                            array (
                              'type' => 'list',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'pname',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 210,
                                'char' => 35,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 210,
                              'char' => 36,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 210,
                            'char' => 36,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 210,
                          'char' => 36,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 211,
                      'char' => 9,
                    ),
                  ),
                  'else_statements' => 
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
                          'variable' => 'all',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'all',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 213,
                                'char' => 28,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ',',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 213,
                                'char' => 32,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 213,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'pname',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 213,
                              'char' => 39,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 213,
                            'char' => 39,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 213,
                          'char' => 39,
                        ),
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 214,
                      'char' => 9,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 215,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 216,
              'char' => 8,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_allnames',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'all',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 216,
                    'char' => 31,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 216,
                  'char' => 31,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 217,
              'char' => 9,
            ),
            9 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'and',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'key',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 217,
                    'char' => 16,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'value',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 217,
                    'char' => 23,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 217,
                  'char' => 23,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 217,
                'char' => 24,
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
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 218,
                      'char' => 19,
                    ),
                    'name' => 'getby',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 218,
                          'char' => 29,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 218,
                        'char' => 29,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 218,
                          'char' => 36,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 218,
                        'char' => 36,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 218,
                    'char' => 37,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 219,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 220,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 194,
          'last-line' => 221,
          'char' => 17,
        ),
        16 => 
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
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_db',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 222,
                    'char' => 24,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 222,
                  'char' => 24,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 223,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 221,
          'last-line' => 224,
          'char' => 17,
        ),
        17 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__get',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 224,
              'char' => 29,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'q',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 225,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'mes',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 225,
                  'char' => 19,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 226,
              'char' => 9,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'r',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 226,
                  'char' => 12,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 227,
              'char' => 9,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'key_exists',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'name',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 227,
                        'char' => 26,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 227,
                      'char' => 26,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 227,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_arr',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 227,
                          'char' => 37,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 227,
                        'char' => 37,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 227,
                      'char' => 37,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 227,
                  'char' => 38,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 227,
                'char' => 39,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 228,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_arr',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 228,
                        'char' => 31,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 228,
                      'char' => 31,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 228,
                      'char' => 36,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 228,
                    'char' => 37,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 229,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 230,
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
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 230,
                  'char' => 11,
                ),
                'name' => 'checkid',
                'call-type' => 1,
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 230,
                'char' => 21,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 231,
              'char' => 9,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 231,
                    'char' => 16,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'id',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 231,
                    'char' => 19,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 231,
                  'char' => 19,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 231,
                'char' => 20,
              ),
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
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 232,
                      'char' => 26,
                    ),
                    'name' => 'getid',
                    'call-type' => 1,
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 232,
                    'char' => 34,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 233,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 234,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'q',
                  'expr' => 
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
                            'value' => 'select ',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 234,
                            'char' => 22,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'name',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                            'line' => 234,
                            'char' => 29,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 234,
                          'char' => 29,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ' from ',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 234,
                          'char' => 38,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 234,
                        'char' => 38,
                      ),
                      'right' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 234,
                          'char' => 45,
                        ),
                        'name' => 'gettablename',
                        'call-type' => 1,
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 234,
                        'char' => 61,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 234,
                      'char' => 61,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => ' where id=?',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 234,
                      'char' => 74,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 234,
                    'char' => 74,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 234,
                  'char' => 74,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 235,
              'char' => 8,
            ),
            6 => 
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
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 235,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_db',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 235,
                        'char' => 23,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 235,
                      'char' => 23,
                    ),
                    'name' => 'query',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'q',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 235,
                          'char' => 31,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 235,
                        'char' => 31,
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
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 235,
                                  'char' => 39,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'id',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                  'line' => 235,
                                  'char' => 42,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 235,
                                'char' => 42,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 235,
                              'char' => 42,
                            ),
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 235,
                          'char' => 43,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 235,
                        'char' => 43,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 235,
                    'char' => 44,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 235,
                  'char' => 44,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 236,
              'char' => 8,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'mes',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'fetch',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 236,
                    'char' => 19,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 236,
                  'char' => 19,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 237,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'array-access',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'r',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 237,
                    'char' => 15,
                  ),
                  'name' => 'mes',
                  'call-type' => 2,
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 237,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 237,
                  'char' => 25,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 237,
                'char' => 26,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 238,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 224,
          'last-line' => 239,
          'char' => 17,
        ),
        18 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__set',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 239,
              'char' => 29,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 239,
              'char' => 35,
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
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 240,
                    'char' => 16,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'id',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 240,
                    'char' => 19,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 240,
                  'char' => 19,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 240,
                'char' => 20,
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
                          'value' => '\\\\Pbb\\\\CorePbb::Error',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 241,
                          'char' => 56,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 241,
                        'char' => 56,
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
                                'type' => 'string',
                                'value' => '不能修改　id!',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 241,
                                'char' => 76,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 241,
                              'char' => 76,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'false',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                                'line' => 241,
                                'char' => 82,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                              'line' => 241,
                              'char' => 82,
                            ),
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                          'line' => 241,
                          'char' => 83,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 241,
                        'char' => 83,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 241,
                    'char' => 84,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 242,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 243,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_arr',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 243,
                      'char' => 25,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'value',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 243,
                    'char' => 32,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                  'line' => 243,
                  'char' => 32,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 244,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 239,
          'last-line' => 245,
          'char' => 17,
        ),
        19 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => '__getmems',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'array',
                'left' => 
                array (
                  0 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'id',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 246,
                      'char' => 16,
                    ),
                    'value' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 246,
                        'char' => 22,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'id',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                        'line' => 246,
                        'char' => 25,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                      'line' => 246,
                      'char' => 25,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                    'line' => 246,
                    'char' => 25,
                  ),
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
                'line' => 246,
                'char' => 26,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
              'line' => 247,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
          'line' => 245,
          'last-line' => 248,
          'char' => 20,
        ),
      ),
      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
      'line' => 2,
      'char' => 6,
    ),
    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelBase.zep',
    'line' => 2,
    'char' => 6,
  ),
);