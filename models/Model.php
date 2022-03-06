<?php
abstract class Model{
    private static $_bdd;

    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host=localhost;dbname=ytbclone;charset=utf8',
        'root','');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if(self::$_bdd == null){
            $this->setBdd();
            return self::$_bdd;
        }
    }
    
    // SELECT method
    protected function getAll($table, $obj){
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY date desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor(); 
    }

    protected function getbyId($table, $colum, $id, $obj){
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM ".$table." WHERE ".$colum." = '$id' ");
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor(); 
    }

    
    // INSERT INTO method
    protected function postAll($table, $obj){
        $req = 'INSERT INTO '.$table.' (`videoid`, `videotitle`, `thumburl`, `description`, `channelid`, `channeltitle`, `date`) 
        VALUES (:vid, :vtitle, :turl, :descrip, :cid, :ctitle, :dpublish)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":vid", $obj['vid']);
        $stmt->bindParam(":vtitle", $obj['vtitle']);
        $stmt->bindParam(":turl", $obj['turl']);
        $stmt->bindParam(":descrip", $obj['descrip']);
        $stmt->bindParam(":cid", $obj['cid']);
        $stmt->bindParam(":ctitle", $obj['ctitle']);
        $stmt->bindParam(":dpublish", $obj['dpublish']);
        $stmt->execute();
    }

    protected function postHistory($table, $obj){
        $req = 'INSERT INTO '.$table.' (`videoid`, `videotitle`, `channelid`, `channeltitle`, `username`, `thumburl`, `date`) 
        VALUES (:vid, :vtitle, :cid, :ctitle, :username, :thumburl, :dpublish)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":vid", $obj['vid']);
        $stmt->bindParam(":vtitle", $obj['vtitle']);
        $stmt->bindParam(":cid", $obj['cid']);
        $stmt->bindParam(":ctitle", $obj['ctitle']);
        $stmt->bindParam(":username", $obj['username']);
        $stmt->bindParam(":thumburl", $obj['turl']);
        $stmt->bindParam(":dpublish", $obj['dpublish']);
        $stmt->execute();
    }

    protected function postAbonne($table, $obj){
        $req = 'INSERT INTO '.$table.' (`userid`, `channelid`, `channeltitle`, `statut`) 
        VALUES (:username, :cid, :ctitle, :statut)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":username", $obj['username']);
        $stmt->bindParam(":cid", $obj['cid']);
        $stmt->bindParam(":ctitle", $obj['ctitle']);
        $stmt->bindParam(":statut", $obj['statut']);
        $stmt->execute();
    }

    protected function postNotification($table, $obj){
        $req = 'INSERT INTO '.$table.' (`userid`, `channelid`, `channeltitle`) 
        VALUES (:username, :cid, :ctitle)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":username", $obj['username']);
        $stmt->bindParam(":cid", $obj['cid']);
        $stmt->bindParam(":ctitle", $obj['ctitle']);
        $stmt->execute();
    }
    protected function postChannel($table, $obj){
        $req = 'INSERT INTO '.$table.' (`channelid`, `channeltitle`) 
        VALUES (:cid, :ctitle)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":cid", $obj['cid']);
        $stmt->bindParam(":ctitle", $obj['ctitle']);
        $stmt->execute();
    }
    protected function postUserinfo($table, $obj){
        $req = 'INSERT INTO '.$table.' (`username`, `usermail`, `userpicture`) 
        VALUES (:name, :mail, :pic)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":name", $obj['name']);
        $stmt->bindParam(":mail", $obj['mail']);
        $stmt->bindParam(":pic", $obj['pic']);
        $stmt->execute();
    }
    // DELETE methode
    protected function delbyId($table, $colum, $id){
        $req = self::$_bdd->prepare("DELETE FROM ".$table." WHERE ".$colum." = '$id' ");
        $req->execute();
        $req->closeCursor(); 
    }

    protected function updatebyId($table,$colum,$val,$colum2,$id){
        $req = self::$_bdd->prepare("UPDATE  ".$table." SET  ".$colum." = '$val' WHERE ".$colum2." = '$id' ");
        $req->execute();
        $req->closeCursor(); 
    }
}
?>