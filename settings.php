<?php

   $Config['Db']['Host']   = 'localhost';
   $Config['Db']['Login']  = 'isdesignnew';
   $Config['Db']['Pswd']   = 'al190skLawess';
   $Config['Db']['DbName'] = 'isdesignnew';  
      
   $Config['Site']['Title']      = 'ISDesign group - архитектурно-строительная компания';
   $Config['Site']['Email']      = '';
   $Config['Site']['Keywords']      = 'дизайн проект интерьера под ключ, индивидуальное строительство под ключ, меблирование, декорирование, ремонт под ключ, реконструкция, дизайн проект квартиры, дизайнерские услуги, Прага, дизайнер, дизайн проект интерьера, дизайн интерьера, интерьер под ключ, ремонт квартиры';
   $Config['Site']['Description']   = 'Дизайн интерьеров, ремонт квартир и домов под ключ, индивидуальное строительство - архитектурно-строительная компания ISDesign group (Прага, Чехия)';
   $Config['Site']['Url']        = 'https://isdesignhome.com';
      
   $Config['Smtp']['Server']  = 'smtp.yandex.ru';
   $Config['Smtp']['Port']    = '465';
   $Config['Smtp']['Email']   = 'info@proudly.ru';
   $Config['Smtp']['Password']   = 'sergeantpepperr7';
   $Config['Smtp']['Secure']  = 'ssl';
      
   error_reporting (E_ALL & ~E_NOTICE);

   // constants
   define ('TEMPLATE_DIR', 'templates/');
   define ('TOOL_DIR', 'tools/');
   define ('IMAGE_DIR', 'images/');
   define ('MISC_DIR', 'misc/');
   define ('MODULE_DIR', 'modules/');
   define ('LIBRARY_DIR', 'library/');
   define ('DOWNLOADS_DIR', 'downloads/');
      
   define ('ABS_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
   define ('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
   define ('TEMP_DIR', 'mycms/uploads/temp/');

?>