<?php


namespace App\Models;

use PDO;

use Database\DBConnexion;

abstract class Model
{


    protected $db;
    protected $table;

    public function __construct(DBConnexion $db)
    {
        $this->db = $db;
    }

    public function all(): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY date_creation DESC");
    }

    public function findById(int $id): Model
    {

        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }


    public function create(array $data, ?array $relations = null, ?int $id = null)
    {



        $firstParenthesis = "";
        $secondParenthesis = "";
        $i = 1;


        foreach ($data as $key => $value) {
            $coma = $i === count($data) ? "" : ", ";
            $firstParenthesis .= "{$key}{$coma}";
            $secondParenthesis .= ":{$key}{$coma}";
            $i++;
//  Meilleure visibilté de l'affichage de var_dump()
            // echo '<pre>' , var_dump('Column: ',$firstParenthesis) , '</pre>';
            // echo '<pre>' , var_dump('Values:',$secondParenthesis) , '</pre>';
            // echo '<pre>' , var_dump('data:',$data) , '</pre>';
        }
        //die();

           //  $sql = "INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";
           //  $stmt= $pdo->prepare($sql);
           //  $stmt->execute($data);
          //  requete preparer : 


        $query = $this->query("INSERT INTO {$this->table} ($firstParenthesis) VALUES ($secondParenthesis)", $data);


        return $query;
    }

    public function update(int $id, array $data, array $relations = null)
    {



        $sqlRequestPart = "";
        $i = 1;


        foreach ($data as $key => $value) {
            $coma = $i === count($data) ? "" : ', ';
            $sqlRequestPart .= "{$key} = :{$key}{$coma}";
            $i++;
        }

        $data['id'] = $id;
            
        return $this->query("UPDATE {$this->table} SET {$sqlRequestPart} WHERE id = :id", $data);

        // $sql = "UPDATE {$this->table} SET titre = : titre, contenu = :contenu, chapo = :chapo, auteur = :auteur, date_creation = :date_creation WHERE id = :id";
    }

    public function destroy(int $id): bool
    {

        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }

    public function query(string $sql, array $param = null, bool $single = null)
    {

        $method = is_null($param) ? 'query' : 'prepare';

        if (strpos($sql, 'DELETE') === 0 || strpos($sql, 'UPDATE') === 0 || strpos($sql, 'CREATE') === 0) {

            $stmt = $this->db->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return   $stmt->execute($param);
        }


        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if ($method === 'query') {
            return $stmt->$fetch();
        } else {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }

    public function updateConfirmed(int $id): bool
    {

        
        $data['confirmation'] = 1;
        $data['id_comment'] = $id;

   
        
        $req = "UPDATE {$this->table} SET confirmation = :confirmation WHERE id_comment = :id_comment";

        // echo '<pre>' , var_dump('data:',$data) , '</pre>';
        // echo '<pre>' , var_dump('data:',$req) , '</pre>';
        // die();

        return $this->query($req, $data);

        // $sql = "UPDATE {$this->table} SET confirmation = : confirmation WHERE id = :id", ;


    }
}
