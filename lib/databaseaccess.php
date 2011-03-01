<?php

class DatabaseAccess {
    /**
     * @var $handle resource - link to database
     */
    private $handle;

    /**
     * Constructor
     *
     * Initialize a db handle and store it for future use
     */
    public function __construct(Config $config) {
        $this->handle = mysqli_connect(
            $config->get('database_host'),
            $config->get('database_user'),
            $config->get('database_pass'),
            $config->get('database_name')
        );
    }

    /**
     * Run a query using a mysqli db handle
     *
     * @param $query string - the query to run
     * @return $result mixed - mysqli_result or false on failure
     */
    public function query($query) {
        return mysqli_query($this->handle, $query);
    }

    /**
     * Find a single row by a given field/value pair
     *
     * e.g. $db->findOneBy('page', 'uri', 'about.html');
     * will get you the page with uri 'about.html'
     *
     * @param $table string  - the table to search
     * @param $field string  - the field to search on
     * @param $value string  - the value to search for
     * @return $result mixed - row containing data or false
     */
    public function findOneBy($table, $field, $value) {
        $result = $this->query("SELECT * FROM `{$table}` where `{$field}`='{$value}' LIMIT 1");
        return mysqli_fetch_assoc($result);
    }

    /**
     * Find a single row by unique id
     *
     * e.g. $db->findOne('pages', 2);
     * will get you the page with id 2
     *
     * @param $table string  - the table to search
     * @param $id string     - the id to search for
     * @return $result mixed - row containing data or false
     */
    public function findOne($table, $id) {
        return $this->findOneBy($table, 'id', $id);
    }

}
