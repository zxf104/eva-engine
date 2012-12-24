<?php
/**
 * EvaEngine
 *
 * @link      https://github.com/AlloVince/eva-engine
 * @copyright Copyright (c) 2012 AlloVince (http://avnpc.com/)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @author    AlloVince
 */

namespace Group\Form;

/**
 * Eva Form will automatic combination form Elements & Validators & Filters
 * Also allow add sub forms and unit validate
 * 
 * @category   Eva
 * @package    Eva_Form
 */
class GroupUserForm extends \Eva\Form\Form
{
    /**
     * Form basic elements
     *
     * @var array
     */
    protected $mergeElements = array (
        'user_id' => array (
            'name' => 'user_id',
            'type' => 'hidden',
            'options' => array (
                'label' => 'User_id',
            ),
            'attributes' => array (
                'value' => '',
            ),
        ),
        'group_id' => array (
            'name' => 'group_id',
            'type' => 'hidden',
            'options' => array (
                'label' => 'Group_id',
            ),
            'attributes' => array (
                'value' => '',
            ),
        ),
    );

    /**
     * Form basic Validators
     *
     * @var array
     */
    protected $mergeFilters = array (
        'user_id' => array (
            'name' => 'user_id',
            'required' => true,
            'filters' => array (
            ),
            'validators' => array (
            ),
        ),
        'group_id' => array (
            'name' => 'group_id',
            'required' => true,
            'filters' => array (
            ),
            'validators' => array (
            ),
        ),
    );

    public function beforeBind($data)
    {
        $user = \Core\Auth::getLoginUser();
        $data['user_id'] = $user['id'];
        return $data;
    }

}

