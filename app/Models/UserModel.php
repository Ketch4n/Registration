<?php 
namespace App\Models;  
use CodeIgniter\Model;

use Codeigniter\Database\ConnectionInterface;


  
class UserModel extends Model{
    protected $db;

    public function __construct(ConnectionInterface &$db){
        parent::__construct();
        $this->db =& $db;

    }
    
}