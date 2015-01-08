<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CodeFormatter extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this -> load -> view('header');
        $this -> load -> view('code_formatter');
        $this -> load -> view('footer');
    }

    public function prettifyXML($str) {
        // load our document into a DOM object
        $dom = new DOMDocument();
        // we want nice output
        $dom -> preserveWhiteSpace = false;
        $dom -> loadXML($str);
        $dom -> formatOutput = true;
        return ($dom -> saveHTML());
    }
    
    public function prettifyHTML($str) {
        // load our document into a DOM object
        $dom = new DOMDocument();
        // we want nice output
        $dom -> preserveWhiteSpace = false;
        $dom -> loadHTML($str);
        $dom -> formatOutput = true;
        return ($dom -> saveHTML());
    }
    public function prettifyCSS($str) {
        // load our document into a DOM object
        $dom = new DOMDocument();
        // we want nice output
        $dom -> preserveWhiteSpace = false;
        $dom -> loadHTML($str);
        $dom -> formatOutput = true;
        return ($dom -> saveHTML());
    }
    public function prettifyJS($str) {
        // load our document into a DOM object
        $dom = new DOMDocument();
        // we want nice output
        $dom -> preserveWhiteSpace = false;
        $dom -> loadHTML($str);
        $dom -> formatOutput = true;
        return ($dom -> saveHTML());
    }
    public function prettifyJavascript($str) {
        // load our document into a DOM object
        $dom = new DOMDocument();
        // we want nice output
        $dom -> preserveWhiteSpace = false;
        $dom -> loadHTML($str);
        $dom -> formatOutput = true;
        return ($dom -> saveHTML());
    }
    public function prettifySQL($str) {
        // load our document into a DOM object
        $dom = new DOMDocument();
        // we want nice output
        $dom -> preserveWhiteSpace = false;
        $dom -> loadHTML($str);
        $dom -> formatOutput = true;
        return ($dom -> saveHTML());
    }
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */
