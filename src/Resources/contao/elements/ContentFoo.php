<?php

namespace Fiedsch\C4Template;

use Contao\ContentElement;

class ContentFoo extends ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_foo';

    /**
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->title = $this->title;
            $objTemplate->wildcard = "### " . $GLOBALS['TL_LANG']['CTE']['foo'][0] . " ###";
            return $objTemplate->parse();
        }
        return parent::generate();
    }


    /**
     *
     */
    protected function compile()
    {
        // set Template variables here
    }

}