<?php
/**
 * Content 3 column layout plugin
 *
 * @copyright (C) 2007-2010, Content Development Team
 * @link http://code.zikula.org/content
 * @version $Id$
 * @license See license.txt
 */

class content_layouttypesapi_column3headerPlugin extends contentLayoutBase
{
    var $contentAreaTitles = array();

    function __construct()
    {
        $dom = ZLanguage::getModuleDomain('content');
        $this->contentAreaTitles = array(__('Header', $dom), __('Left column', $dom), __('Centre column', $dom), __('Right column', $dom), __('Footer', $dom));
    }
    function content_layouttypesapi_column3headerPlugin()
    {
        $this->__construct();
    }
    function getName()
    {
        return 'column3header';
    }
    function getTitle()
    {
        $dom = ZLanguage::getModuleDomain('content');
        return __('3 columns (33|33|33)', $dom);
    }
    function getDescription()
    {
        $dom = ZLanguage::getModuleDomain('content');
        return __('Header + three columns (33|33|33) + footer', $dom);
    }
    function getNumberOfContentAreas()
    {
        return 5;
    }
    function getContentAreaTitle($areaIndex)
    {
        return $this->contentAreaTitles[$areaIndex];
    }
    function getImage()
    {
    	return pngetBaseUrl().'/modules/Content/pnimages/layout/column3header.png';
    }
}

function content_layouttypesapi_column3header($args)
{
    return new content_layouttypesapi_column3headerPlugin();
}