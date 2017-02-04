<?php

/**
 * @copyright 	Copyright (c) 2009-2017 Ryan Demmer. All rights reserved.
 * @license   	GNU/GPL 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * JCE is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
defined('WF_EDITOR') or die('RESTRICTED');

?>
	<div>
<div class="uk-form-row">
	<label class="uk-form-label uk-width-3-10" for="searchstring"><?php echo WFText::_('WF_SEARCHREPLACE_FINDWHAT');?></label>
	<div class="uk-form-controls uk-width-7-10">
		<input type="text" id="search_string" />
	</div>
</div>
<div class="uk-form-row">
		<label class="uk-form-label uk-width-3-10" for="replacestring"><?php echo WFText::_('WF_SEARCHREPLACE_REPLACEWITH');?></label>
	<div class="uk-form-controls uk-width-7-10">
		<input type="text" id="replace_string" />
	</div>
</div>

<div class="uk-form-row">
	<input id="matchcase" type="checkbox" />
	<label for="matchcase"><?php echo WFText::_('WF_SEARCHREPLACE_MCASE');?></label>
</div>
<div class="uk-form-row">
	<input id="wholewords" type="checkbox" />
	<label for="wholewords"><?php echo WFText::_('WF_SEARCHREPLACE_WHOLEWORDS');?></label>
</div>
</div>
<div class="mceActionPanel">
	<div class="uk-float-left">
		<button type="submit" id="find"><?php echo WFText::_('WF_SEARCHREPLACE_FIND', 'Find');?></button>
		<button type="button" class="button" id="replace" disabled><?php echo WFText::_('WF_SEARCHREPLACE_REPLACE', 'Replace');?></button>
		<button type="button" class="button" id="replaceAll" disabled><?php echo WFText::_('WF_SEARCHREPLACE_REPLACEALL', 'Replace All');?></button>

		<button type="button" id="prev" disabled><?php echo WFText::_('WF_SEARCHREPLACE_PREV', 'Previous');?></button>
		<button type="button" id="next" disabled><?php echo WFText::_('WF_SEARCHREPLACE_NEXT', 'Next');?></button>
	</div>
	<div class="uk-float-right">
		<button type="button" id="cancel" class="uk-hidden-mini"><?php echo WFText::_('WF_LABEL_CANCEL');?></button>
	</div>
</div>
