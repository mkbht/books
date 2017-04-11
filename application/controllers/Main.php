<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','Validator'));
        $this->load->database();
        $this->load->model('main_model','main');
    }

    function index() {
    	// Total no of files
    	$data['total_files'] = $this->db->count_all_results('sample');
    	$data['total_categories'] = $this->db->select("category")->distinct('category')->count_all_results('sample');
    	$data['random_home'] = $this->db->limit(12)->order_by('id','RANDOM')->get('sample')->result();
    	$data['random_slider'] = $this->db->limit(10)->order_by('id','RANDOM')->get('sample')->result();
    	$data['featured_category'] = $this->db->limit(30)->select('category')->distinct('category')->get('sample')->result();
        $data['featured_list'] = $this->db->order_by('rand()')->limit(6)->select('category')->distinct('category')->get('sample')->result();
        $data['nav_bar'] = $this->main->get_navbar();
        $this->load->view('index',$data);
        $this->load->view('footer');
    }

    public function category($value='')
    {
        $data['featured_category'] = $this->db->limit(30)->select('category')->distinct('category')->get('sample')->result();
        $data['featured_list'] = $this->db->order_by('rand()')->limit(6)->select('category')->distinct('category')->get('sample')->result();
        $data['list'] = $this->main->getCategoryList($value);
        $this->load->view('page5-listing', $data);
        $this->load->view('footer');
    }

    public function item($value='') {
        $data['item'] = $this->main->item($value);
        if(count((array)$data['item']) > 0) {
            $data['featured_category'] = $this->db->limit(30)->select('category')->distinct('category')->get('sample')->result();
            $data['featured_list'] = $this->db->order_by('rand()')->limit(6)->select('category')->distinct('category')->get('sample')->result();

            $this->load->view('page6-predownload', $data);
            $this->load->view('footer');
        }
        else {
            show_404();
        }
    }
}
        
 ?>