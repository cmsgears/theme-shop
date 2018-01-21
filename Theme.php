<?php
namespace themes\shop;

// Yii Imports
use \Yii;

class Theme extends \cmsgears\core\common\base\Theme {

	// Menus --------------------------------------------------------

	const MENU_MAIN			= 'main';
	const MENU_SECONDARY	= 'secondary';

	// Variables ----------------------------------------------------

	// Public

    public $pathMap = [
        '@frontend/views' => '@themes/shop/views',
        '@cmsgears' => '@themes/shop/modules/cmsgears'
    ];

	// Initialisation -----------------------------------------------

    public function init() {

        parent::init();

		// The path for templates
		Yii::setAlias( '@templates', '@themes/shop/views/templates' );
	}
}

?>