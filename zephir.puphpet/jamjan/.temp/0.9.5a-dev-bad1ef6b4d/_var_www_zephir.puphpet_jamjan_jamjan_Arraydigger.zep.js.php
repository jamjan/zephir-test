<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Jamjan',
    'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Arraydigger',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'extract_data',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'resource_data',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
              'line' => 5,
              'char' => 53,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'path',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
              'line' => 5,
              'char' => 65,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'delimiter',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '.',
                'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                'line' => 5,
                'char' => 89,
              ),
              'reference' => 0,
              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
              'line' => 5,
              'char' => 89,
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
                  'variable' => 'path_exploded',
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 6,
                  'char' => 26,
                ),
              ),
              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
              'line' => 7,
              'char' => 13,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'copy',
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 7,
                  'char' => 19,
                ),
              ),
              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
              'line' => 8,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'value',
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 8,
                  'char' => 18,
                ),
              ),
              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
              'line' => 9,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => '_value',
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 9,
                  'char' => 19,
                ),
              ),
              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
              'line' => 10,
              'char' => 11,
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
                  'variable' => 'path_exploded',
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
                          'type' => 'variable',
                          'value' => 'delimiter',
                          'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                          'line' => 10,
                          'char' => 46,
                        ),
                        'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                        'line' => 10,
                        'char' => 46,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'path',
                          'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                          'line' => 10,
                          'char' => 51,
                        ),
                        'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                        'line' => 10,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                    'line' => 10,
                    'char' => 52,
                  ),
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 10,
                  'char' => 52,
                ),
              ),
              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
              'line' => 12,
              'char' => 10,
            ),
            5 => 
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
                    'type' => 'empty',
                    'left' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'path_exploded',
                        'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                        'line' => 12,
                        'char' => 35,
                      ),
                      'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                      'line' => 12,
                      'char' => 36,
                    ),
                    'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                    'line' => 12,
                    'char' => 36,
                  ),
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 12,
                  'char' => 36,
                ),
                'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                'line' => 12,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'copy',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'resource_data',
                        'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                        'line' => 13,
                        'char' => 37,
                      ),
                      'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                      'line' => 13,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 14,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'path_exploded',
                    'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                    'line' => 14,
                    'char' => 40,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => '_value',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'value',
                            'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                            'line' => 15,
                            'char' => 31,
                          ),
                          'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                          'line' => 15,
                          'char' => 31,
                        ),
                      ),
                      'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                      'line' => 16,
                      'char' => 18,
                    ),
                    1 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'list',
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
                                'value' => 'copy',
                                'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                                'line' => 16,
                                'char' => 30,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_value',
                                'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                                'line' => 16,
                                'char' => 37,
                              ),
                              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                              'line' => 16,
                              'char' => 38,
                            ),
                            'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                            'line' => 16,
                            'char' => 39,
                          ),
                          'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                          'line' => 16,
                          'char' => 39,
                        ),
                        'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                        'line' => 16,
                        'char' => 41,
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
                              'variable' => 'copy',
                              'expr' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'copy',
                                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                                  'line' => 17,
                                  'char' => 36,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => '_value',
                                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                                  'line' => 17,
                                  'char' => 43,
                                ),
                                'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                                'line' => 17,
                                'char' => 44,
                              ),
                              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                              'line' => 17,
                              'char' => 44,
                            ),
                          ),
                          'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                          'line' => 18,
                          'char' => 17,
                        ),
                      ),
                      'else_statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'return',
                          'expr' => 
                          array (
                            'type' => 'null',
                            'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                            'line' => 19,
                            'char' => 32,
                          ),
                          'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                          'line' => 20,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                      'line' => 21,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 22,
                  'char' => 18,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'copy',
                    'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                    'line' => 22,
                    'char' => 24,
                  ),
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 23,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                    'line' => 24,
                    'char' => 24,
                  ),
                  'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                  'line' => 25,
                  'char' => 9,
                ),
              ),
              'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
              'line' => 26,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                'line' => 5,
                'char' => 101,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
                'line' => 5,
                'char' => 108,
              ),
            ),
            'void' => 0,
            'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
            'line' => 5,
            'char' => 108,
          ),
          'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
          'line' => 5,
          'last-line' => 27,
          'char' => 19,
        ),
      ),
      'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/var/www/zephir.puphpet/jamjan/jamjan/Arraydigger.zep',
    'line' => 3,
    'char' => 5,
  ),
);