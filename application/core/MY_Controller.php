<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property CI_Loader $load
 * @property CI_Session $session
 * @property CI_DB $db
 * @property CI_Model $Student_model
 * @property CI_Model $Employee_model
 * @property CI_Form_validation $form_validation
 */
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}
