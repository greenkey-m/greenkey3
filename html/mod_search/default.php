<?php
/**
  * @package     Greenkey3
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2007 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

// Including fallback code for the placeholder attribute in the search field.
JHtml::_('jquery.framework');
JHtml::_('script', 'system/html5fallback.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

if ($width) {
    $moduleclass_sfx .= ' ' . 'mod_search' . $module->id;
    $css = 'div.mod_search' . $module->id . ' input[type="search"]{ width:auto; }';
    JFactory::getDocument()->addStyleDeclaration($css);
    $width = ' size="' . $width . '"';
} else {
    $width = '';
}
?>
<div class="search<?php echo $moduleclass_sfx; ?>">
    <form action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-inline">

        <div class="input-group mb-3">
            <input type="search" name="searchword" id="mod-search-searchword<?php echo $module->id ?>" class="form-control" placeholder="<?php echo $text ?>" 
                   aria-label="Recipient's username" aria-describedby="basic-addon2" maxlength="<?php echo $maxlength ?>">
            <div class="input-group-append">
                <button class="btn btn-info" onclick="this.form.searchword.focus();"><?php echo $button_text ?></button>
            </div>
        </div>
<?php
$output = '<label for="mod-search-searchword' . $module->id . '" class="element-invisible">' . $label . '</label> ';
$output .= '<input name="searchword" id="mod-search-searchword' . $module->id . '" maxlength="' . $maxlength . '"  class="inputbox search-query input-medium" type="search"' . $width;
$output .= ' placeholder="' . $text . '" />';

if ($button) :
    if ($imagebutton) :
        $btn_output = ' <input type="image" alt="' . $button_text . '" class="button" src="' . $img . '" onclick="this.form.searchword.focus();"/>';
    else :
        $btn_output = ' <button class="button btn btn-primary" onclick="this.form.searchword.focus();">' . $button_text . '</button>';
    endif;

    switch ($button_pos) :
        case 'top' :
            $output = $btn_output . '<br />' . $output;
            break;

        case 'bottom' :
            $output .= '<br />' . $btn_output;
            break;

        case 'right' :
            $output .= $btn_output;
            break;

        case 'left' :
        default :
            $output = $btn_output . $output;
            break;
    endswitch;
endif;

//echo $output;
?>
        <input type="hidden" name="task" value="search" />
        <input type="hidden" name="option" value="com_search" />
        <input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
    </form>
</div>
