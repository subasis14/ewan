<?php


class router {
    /*
     * @the registry
     */

    private $registry;

    /*
     * @the controller path
     */
    private $path;
    private $args = array();
    public $file;
    public $controller;
    public $action;
    public $folder;

    function __construct($registry) {
        $this->registry = $registry;
    }

    /**
     *
     * @set controller directory path
     *
     * @param string $path
     *
     * @return void
     *
     */
    function setPath($path) {

        /*         * * check if path is a directory ** */
        if (is_dir($path) == false) {
            throw new Exception('Invalid controller path: `' . $path . '`');
        }
        /*         * * set the path ** */
        $this->path = $path;
    }

    /**
     *
     * @load the controller
     *
     * @access public
     *
     * @return void
     *
     */
    public function loader() {
        /*         * * check the route ** */
        $this->getController();
        /*         * * if the file is not there diaf ** */
        if (is_readable($this->file) == false) {
            session_start();
            $_SESSION['message']='The file not found in controller:'.$this->folder.'/'.$this->controller.' is: '.$this->file;

            $this->file = $this->path . '/error404Controller.php';
            $this->controller = 'error404';
        }
//        echo is_readable($this->file);

        /*         * * include the controller ** */
        include_once($this->file);
        /*         * * a new controller class instance ** */
        $class = $this->controller . 'Controller';
        $controller = new $class($this->registry);
        /*         * * check if the action is callable ** */

        $action = 'index';
        /*         * * run the action ** */
        $controller->$action();
        exit();
    }

    /**
     *
     * @get the controller
     *
     * @access private
     *
     * @return void
     *
     */
    private function getController() {

        /*         * * get the route from the url ** */
        $route = (empty($_GET['rt'])) ? '' : $_GET['rt'];
        $folder = (empty($_GET['fd'])) ? '' : $_GET['fd'];

        if (empty($route)) {
            if (empty($folder)) {
                $this->controller = 'index';
            } elseif ($folder == "admin") {
                $this->controller = "admin";
            } else {
                $singlefolder = explode('/', $folder);
                $this->controller = $singlefolder[0];
            }
        } else {
            /*             * * get the parts of the route ** */
            $parts = explode('/', $route);
            $folder = explode('/', $folder);
            $this->folder = $folder[0];
            $this->controller = $parts[0];
        }

        /*         * * set the file path ** */;
        if ($this->folder && $this->controller) {
            $this->file = $this->path . '/' . $this->folder . '/' . $this->controller . 'Controller.php';
        } else {
            $this->file = $this->path . '/' . $this->controller . 'Controller.php';
        }
    }

}

				