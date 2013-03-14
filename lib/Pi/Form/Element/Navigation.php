<?php
/**
 * Form element navigation class
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Copyright (c) Pi Engine http://www.xoopsengine.org
 * @license         http://www.xoopsengine.org/license New BSD License
 * @author          Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 * @since           3.0
 * @package         Pi\Form
 * @subpackage      ELement
 * @version         $Id$
 */

namespace Pi\Form\Element;

use Pi;
use Zend\Form\Element\Select;

class Navigation extends Select
{
    /**
     * @return array
     */
    public function getValueOptions()
    {
        if (empty($this->valueOptions)) {
            $rowset = Pi::model('navigation')->select(array('section' => 'front', 'active' => 1));

            foreach($rowset as $row) {
                $this->valueOptions[$row->name] = $row->title;
            }
        }

        return $this->valueOptions;
    }
}
