<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*    fichier my_setting.ini:
      [database]
      driver = mysql
      host = localhost
      ;port = 3306
      schema = db_schema
      username = user
      password = secret
      Classe PHP:
    */
    class MyPDO extends PDO {

    private $file;
    public function __construct($file = 'my_setting.ini') {
          if (!$settings = parse_ini_file($file, TRUE)) {
            throw new exception("Impossible d'ouvrir " . $file . ".");
        }
        $dns = $settings['database']['driver'] .
                ':host=' . $settings['database']['host'] .
                ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : 
'') .
                ';dbname=' . $settings['database']['schema'];
        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
      }
    }
