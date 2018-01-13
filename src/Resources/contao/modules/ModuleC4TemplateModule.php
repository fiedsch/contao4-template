<?php // -*- coding: utf-8 -*- 

namespace Fiedsch\C4Template;

use Patchwork\Utf8;

class ModuleC4TemplateModule extends \Contao\Module
{

    /**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_footemplatemodule';
    
    /**
     * Display a wildcard in the back end
	 *
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			/** @var BackendTemplate|object $objTemplate */
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### ' . Utf8::strtoupper($GLOBALS['TL_LANG']['FMD']['foomtemplateodule'][0]) . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;
			return $objTemplate->parse();
		}
		return parent::generate();
	}

    /**
	 * Generate the module
	 */
	protected function compile()
	{
        // TODO
    }

}