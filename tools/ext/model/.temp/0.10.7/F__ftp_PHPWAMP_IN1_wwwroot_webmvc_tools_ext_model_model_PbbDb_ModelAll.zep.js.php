<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Model\\PbbDb',
    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
    'line' => 2,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'ModelAll',
    'abstract' => 0,
    'final' => 1,
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
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
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
          'name' => '_pos',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
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
          'name' => '_order',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
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
          'name' => '_limit',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
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
          'name' => '_where',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
          'line' => 8,
          'char' => 11,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_myfetch',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
          'line' => 9,
          'char' => 11,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_array',
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
          'line' => 10,
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
          'name' => '__construct',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'selectnames',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 10,
                'char' => 44,
              ),
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 10,
              'char' => 44,
            ),
            1 => 
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
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 10,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 10,
              'char' => 56,
            ),
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
                  'property' => '_db',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'ModelBase',
                    'dynamic' => 0,
                    'name' => 'GetDb',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 11,
                    'char' => 38,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 11,
                  'char' => 38,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 12,
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
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tablename',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 12,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 12,
                    'char' => 22,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 12,
                  'char' => 22,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 12,
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
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 13,
                        'char' => 36,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 13,
                      'char' => 36,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 14,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 15,
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
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'selectnames',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 15,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 15,
                    'char' => 24,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 15,
                  'char' => 24,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 15,
                'char' => 25,
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
                      'variable' => 'selectnames',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '*',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 16,
                        'char' => 31,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 16,
                      'char' => 31,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 17,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 18,
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
                  'property' => '_pos',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 18,
                    'char' => 24,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 18,
                  'char' => 24,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 19,
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
                  'property' => '_myfetch',
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
                          'type' => 'string',
                          'value' => 'select ',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 19,
                          'char' => 35,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'selectnames',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 19,
                          'char' => 49,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 19,
                        'char' => 49,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => ' from ',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 19,
                        'char' => 58,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 19,
                      'char' => 58,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tablename',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 19,
                      'char' => 69,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 19,
                    'char' => 69,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 19,
                  'char' => 69,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 20,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
          'line' => 10,
          'last-line' => 21,
          'char' => 17,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'where',
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
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 21,
              'char' => 28,
            ),
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
                  'property' => '_where',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => ' where ',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 22,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'mes',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 22,
                        'char' => 39,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 22,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => ' ',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 22,
                      'char' => 42,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 22,
                    'char' => 42,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 22,
                  'char' => 42,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 23,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 23,
                'char' => 17,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 24,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
          'line' => 21,
          'last-line' => 25,
          'char' => 17,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'orderby',
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
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 25,
              'char' => 30,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'desc',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 25,
                'char' => 42,
              ),
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 25,
              'char' => 42,
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
                  'type' => 'variable',
                  'value' => 'desc',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 26,
                  'char' => 15,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 26,
                'char' => 16,
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
                      'property' => '_order',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => ' order by ',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                            'line' => 27,
                            'char' => 44,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'mes',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                            'line' => 27,
                            'char' => 50,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 27,
                          'char' => 50,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ' desc ',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 27,
                          'char' => 58,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 27,
                        'char' => 58,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 27,
                      'char' => 58,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 28,
                  'char' => 8,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_order',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => ' order by ',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                            'line' => 30,
                            'char' => 44,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'mes',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                            'line' => 30,
                            'char' => 50,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 30,
                          'char' => 50,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ' ',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 30,
                          'char' => 53,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 30,
                        'char' => 53,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 30,
                      'char' => 53,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 31,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 32,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 32,
                'char' => 17,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 33,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
          'line' => 25,
          'last-line' => 34,
          'char' => 17,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'limit',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'start',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 34,
              'char' => 34,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'end',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '-1',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 34,
                'char' => 45,
              ),
              'reference' => 0,
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 34,
              'char' => 45,
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
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'end',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 35,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 35,
                    'char' => 16,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 35,
                  'char' => 16,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 35,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_limit',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => ' limit ',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 36,
                          'char' => 41,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'start',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 36,
                          'char' => 48,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 36,
                        'char' => 48,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 36,
                      'char' => 48,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 37,
                  'char' => 8,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_limit',
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
                              'type' => 'string',
                              'value' => ' limit ',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                              'line' => 39,
                              'char' => 38,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'start',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                              'line' => 39,
                              'char' => 44,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                            'line' => 39,
                            'char' => 44,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ',',
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                            'line' => 39,
                            'char' => 46,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 39,
                          'char' => 46,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'end',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 39,
                          'char' => 50,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 39,
                        'char' => 50,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 39,
                      'char' => 50,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 40,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 41,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 41,
                'char' => 17,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 42,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
          'line' => 34,
          'last-line' => 43,
          'char' => 17,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => '_end',
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
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 44,
                  'char' => 12,
                ),
                1 => 
                array (
                  'variable' => 'value',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 44,
                  'char' => 18,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 45,
              'char' => 8,
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
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 45,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_db',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 45,
                        'char' => 23,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 45,
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                                  'line' => 45,
                                  'char' => 35,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => '_myfetch',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                                  'line' => 45,
                                  'char' => 45,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                                'line' => 45,
                                'char' => 45,
                              ),
                              'right' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                                  'line' => 45,
                                  'char' => 52,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => '_where',
                                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                                  'line' => 45,
                                  'char' => 60,
                                ),
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                                'line' => 45,
                                'char' => 60,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                              'line' => 45,
                              'char' => 60,
                            ),
                            'right' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                                'line' => 45,
                                'char' => 67,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_order',
                                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                                'line' => 45,
                                'char' => 75,
                              ),
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                              'line' => 45,
                              'char' => 75,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                            'line' => 45,
                            'char' => 75,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                              'line' => 45,
                              'char' => 82,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_limit',
                              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                              'line' => 45,
                              'char' => 89,
                            ),
                            'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                            'line' => 45,
                            'char' => 89,
                          ),
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 45,
                          'char' => 89,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 45,
                        'char' => 89,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'null',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 45,
                          'char' => 95,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 45,
                        'char' => 95,
                      ),
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 45,
                    'char' => 96,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 45,
                  'char' => 96,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 46,
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
                  'property' => '_array',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 46,
                    'char' => 27,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 46,
                  'char' => 27,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 47,
              'char' => 10,
            ),
            3 => 
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
                    'value' => 'r',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 47,
                    'char' => 26,
                  ),
                  'name' => 'fetchAll',
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
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 47,
                          'char' => 53,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'FETCH_ASSOC',
                          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                          'line' => 47,
                          'char' => 53,
                        ),
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 47,
                        'char' => 53,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 47,
                      'char' => 53,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 48,
                  'char' => 1,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 48,
                'char' => 2,
              ),
              'value' => 'value',
              'reverse' => 0,
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
                      'property' => '_array',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                        'line' => 49,
                        'char' => 40,
                      ),
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 49,
                      'char' => 40,
                    ),
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 50,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 51,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
          'line' => 43,
          'last-line' => 52,
          'char' => 18,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getArray',
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 53,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_array',
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 53,
                      'char' => 24,
                    ),
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 53,
                    'char' => 24,
                  ),
                  'right' => 
                  array (
                    'type' => 'null',
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 53,
                    'char' => 29,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 53,
                  'char' => 29,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 53,
                'char' => 30,
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
                      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                      'line' => 54,
                      'char' => 19,
                    ),
                    'name' => '_end',
                    'call-type' => 1,
                    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                    'line' => 54,
                    'char' => 26,
                  ),
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 55,
                  'char' => 8,
                ),
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 56,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 56,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_array',
                  'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                  'line' => 56,
                  'char' => 25,
                ),
                'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
                'line' => 56,
                'char' => 25,
              ),
              'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
              'line' => 57,
              'char' => 3,
            ),
          ),
          'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
          'line' => 52,
          'last-line' => 58,
          'char' => 17,
        ),
      ),
      'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
      'line' => 2,
      'char' => 12,
    ),
    'file' => 'F:\\ftp\\PHPWAMP_IN1\\wwwroot\\webmvc\\tools\\ext\\model\\model\\PbbDb\\ModelAll.zep',
    'line' => 2,
    'char' => 12,
  ),
);