<?php

namespace Modules\Test\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class TestsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Tests';

        // module name
        $this->module_name = 'tests';

        // directory path of the module
        $this->module_path = 'test::backend';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Test\Models\Test";
    }

}
