<?php
/**
 * @file ScrollTop.class.php
 * @package For legacy Cube Legacy 2.2
 * @version $Id: ScrollTop.class.php ver0.01 2013/8/14  00:00:00 marine  $
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

class ScrollTop extends XCube_ActionFilter
{
	public function preBlockFilter()
	{
		$this->mRoot->mDelegateManager->add('Site.JQuery.AddFunction',array(&$this, 'addScript'));
	}

	public function addScript(&$jQuery)
	{
		$jQuery->addLibrary('/common/scrolltop/scrolltopcontrol.js', true);
	}
//class END
}
?>
