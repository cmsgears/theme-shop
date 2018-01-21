<?php
namespace themes\shop\assets;

// Yii Imports
use \Yii;

class LandingAssets extends AssetBundle {

	// Variables ---------------------------------------------------

	// Public ----

	// Load css
    public $css     = [
		'styles/landing.css'
    ];

	// Constructor and Initialisation ------------------------------

	public function init()  {

		parent::init();

		$this->depends[]	= 'cmsgears\core\common\assets\Handlebars';
	}
}
