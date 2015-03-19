<?php class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (ENVIRONMENT == 'development')
        {
            $this->output->enable_profiler(true);
        }
        else if (ENVIRONMENT == 'production')
        {
            $this->output->enable_profiler(false);
        }
        else
        {
            $this->output->enable_profiler(true);
        }

    }
}

?>