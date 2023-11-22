<?php

namespace Modules\User\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class UsersController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Users';

        // module name
        $this->module_name = 'users';

        // directory path of the module
        $this->module_path = 'user::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\User\Models\User";
    }

}
