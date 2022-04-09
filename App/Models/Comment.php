<?php

namespace App\Models;

use DateTime;
use App\Models\Model;


class Comment extends Model{
    protected $table = 'commentaire';

    public function getCreatedAt(): string {
        return (new DateTime($this->date_creation))->format('d/m/Y à H:i');
         
     }

     public function getExcerpt(): string{
        return substr($this->contenu, 0, 200) . '...';
    }

    public function create(array $data, ?array $relations = null,  ?int $id=null)
    {
        $data['id_posts']=$id;
       
        
        parent::create($data);
        
        $id = $this->db->getPDO()->lastInsertId();

        
        return true;
    }
    

   

    public function update(int $id, array $data, array $relations = null)
    {
        parent::update($id, $data);

       $stmt = $this->db->getPDO()->prepare("DELETE FROM post_tag WHERE post_id = ?");
      $result = $stmt->execute([$id]);

       foreach($relations as $tagId){
           $stmt = $this->db->getPDO()->prepare("INSERT post_tag(post_id, tag_id) VALUES (?, ?)"); 
           $stmt->execute([$id, $tagId]);
       }
      
       if($result) {
           return true;
       }
    }

   
}