<?php
/**
 * Config
 *
 * This class is responsible for:
 *
 *  * Reading config data out of a .ini file
 *  * Storing config data
 *  * Giving access to config data
 *
 */
class Config {
    /**
     * @var array  $data - to hold the config data internally
     */
    private $data = array();

    /**
     * Constructor
     *
     * Read a .ini file and store its data
     *
     * @param string $configFilename - absolute filename of the config file to read
     */
    public function __construct($configFilename) {
        $this->data = parse_ini_file($configFilename);
    }

    /**
     * get a config value
     *
     * Takes a string key with the same name as the variable names in the
     * parsed .ini file
     *
     * @param string $key - the key of the data to get
     * @return mixed $value - the string value or null if data not set
     */
    public function get($key) {
        return $this->data[$key];
    }

    /**
     * set a config value
     *
     * Set a value with a given key
     *
     * @param string $key - the key to subsequently get the data with
     * @param string $value - the value to set the data to
     * @return Config $this - for chainability
     */
    public function $set($key, $value) {
        $this->data[$key] = $value;
        return $this;
    }
}
