<?php
include_once "../interface/crud.php";
include_once "../interface/log.php";
include_once "../interface/search.php";
include_once "../abstract/database.php";
class Mongo extends Database implements Crud,Log,Search {
    public function connect()
    {
        // TODO: Implement connect() method.
        $connection  =  new MongoClient("mongodb://example.com:65432");
        /// connect to a remote host at a given port
    }

    public function insert(){

    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function search()
    {

    }

    public function readLog()
    {
        // TODO: Implement readLog() method.
    }

    public function writeLog()
    {
        // TODO: Implement writeLog() method.
    }
}