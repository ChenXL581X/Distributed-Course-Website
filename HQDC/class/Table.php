<?php
interface Table {
    public  function create($fields = array());
    public  function delete($ID = null);
    public  function update($ID,$fields);
    public  function get($where);
}