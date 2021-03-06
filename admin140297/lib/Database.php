<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-18T19:29:20+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:49:53+01:00

namespace lib;
use \PDO;

class Database{

  private $db_name;
  private $db_user;
  private $db_pass;
  private $db_host;
  private $pdo;

  public function __construct($db_name = 'delisucre', $db_user = 'root', $db_pass = 'root', $db_host = 'localhost')
  {
    $this->db_name = $db_name;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_host = $db_pass;
  }

  private function getPDO()
  {
    if($this->pdo == null)
    {
      $pdo = new PDO('mysql:host=fdb19.atspace.me;dbname=2666491_delisucre;charset=utf8', '2666491_delisucre', 'sT100573');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
    }
    return $this->pdo;
  }

  public function query($data)
  {
    $req = $this->getPDO()->query($data);
    $datas = $req->fetchAll(PDO::FETCH_OBJ);
    return $datas;
  }

  public function prepare($data)
  {
      $req = $this->getPDO()->prepare($data);
      return $req;
  }

}
