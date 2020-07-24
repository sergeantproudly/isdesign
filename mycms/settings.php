<?php

   $Config['Db']['Host']   = 'localhost';
   $Config['Db']['Login']  = 'isdesign';
   $Config['Db']['Pswd']   = 'isdesign';
   $Config['Db']['DbName'] = 'isdesign_db'; 
   	
   $Config['Site']['Title']      = 'ISDesign group - архитектурно-строительная компания';
   $Config['Site']['Email']      = '';
   $Config['Site']['Keywords']      = ''; 
   $Config['Site']['Description']   = '';
   $Config['Site']['Url']        = 'https://isdesigngroup.ru';
      
   $Config['Smtp']['Server']  = 'smtp.yandex.ru';
   $Config['Smtp']['Port']    = '465';
   $Config['Smtp']['Email']   = 'info@proudly.ru';
   $Config['Smtp']['Password']   = 'sergeantpepperr7';
   $Config['Smtp']['Secure']  = 'SSL';
   	
   	error_reporting (E_ALL & ~E_NOTICE);

	// constants
   define ('TEMPLATES_DIR', 'templates/');
   define ('TOOLS_DIR', 'tools/');
   define ('IMAGES_DIR', 'images/');
   define ('MODULES_DIR', 'modules/');
   define ('LIBRARY_DIR', 'library/');
   define ('LIBRARY_SITE_DIR', '../library/');
   define ('UPLOADS_DIR', '../uploads/');
   define ('TEMP_DIR', 'uploads/temp/');
   	
   define ('ABS_PATH', $_SERVER['DOCUMENT_ROOT'].'/mycms/');
   define ('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
   define ('ROOT_DIR', '../');

?>