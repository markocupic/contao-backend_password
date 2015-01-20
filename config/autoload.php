<?php

/**
 * @copyright 4ward.media 2013 <http://www.4wardmedia.de>
 * @author Christoph Wiechert <wio@psitrax.de>
 */


// Register the classes
ClassLoader::addClasses(array
(
	'BackendPassword' 	=> 'system/modules/backend_password/BackendPassword.php',
));

// Register the templates
TemplateLoader::addFiles(array
(
	'be_pwrecovery' 					=> 'system/modules/backend_password/templates',
));
