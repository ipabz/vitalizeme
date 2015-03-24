# Installation

1) Update application/config/database.php and set the necessary things there to connect to your DB

2) Update application/config/migrations.php and the following to TRUE

    $config['migration_enabled'] = TRUE;
    
3) On your browser, Open 

    http://localhost/<vitalyzeme main folder>/install
  
4) Update application/config/migrations.php again and the following to FALSE

    $config['migration_enabled'] = FALSE;
  
Thats all.
