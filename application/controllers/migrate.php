<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Migrate extends CI_Controller{
    public function index(){
        try{
            $this->load->library('migration');
            $this->migration->current();
            $this->load->config('migration');
            echo 'Migrate to versions: ' . $this->config->item('migration_version');
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
}

/* End of file migrate.php */
/* Location: ./application/controllers/migrate.php */
