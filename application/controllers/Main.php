<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','Validator'));
        $this->load->library('pagination');
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
        $data['countries'] = $this->main->getCountryList();
        $data['colors'] = $this->main->getColorList();
        //paginate
        $this->config->load('pagination');
        $config = $this->config->item('pagination'); 
        $config['per_page'] = 10;
        $page = ($this->uri->segment(4)) ? ($this->uri->segment(4) -1) * $config['per_page']  : 0;
        $list = $this->main->getCategoryList($value, $config['per_page'], $page);
        
        $config['base_url'] = base_url('main/category/'.$value.'/');
        $config['total_rows'] = $this->main->countCategoryList($value);
        $config["num_links"] = 4;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);

        $data['list'] = $list;
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('page5-listing', $data);
        $this->load->view('footer');
    }

    public function country($value='')
    {
        $data['featured_category'] = $this->db->limit(30)->select('category')->distinct('category')->get('sample')->result();
        $data['featured_list'] = $this->db->order_by('rand()')->limit(6)->select('category')->distinct('category')->get('sample')->result();
        $data['countries'] = $this->main->getCountriesList();
        $data['colors'] = $this->main->getColorList();
        //paginate
        $this->config->load('pagination');
        $config = $this->config->item('pagination'); 
        $config['per_page'] = 10;
        $page = ($this->uri->segment(4)) ? ($this->uri->segment(4) -1) * $config['per_page']  : 0;
        $list = $this->main->getCountryList($value, $config['per_page'], $page);
        
        $config['base_url'] = base_url('main/country/'.$value.'/');
        $config['total_rows'] = $this->main->countCountryList($value);
        $config["num_links"] = 4;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);

        $data['list'] = $list;
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('page5-listing', $data);
        $this->load->view('footer');
    }

    public function item($value='') {
        $data['item'] = $this->main->item($value);
        if(count((array)$data['item']) > 0) {
            $data['featured_category'] = $this->db->limit(30)->select('category')->distinct('category')->get('sample')->result();
            $data['featured_list'] = $this->db->order_by('rand()')->limit(6)->select('category')->distinct('category')->get('sample')->result();
            $data['countries'] = $this->main->getCountriesList();
            $data['colors'] = $this->main->getColorList();

            $this->load->view('page6-predownload', $data);
            $this->load->view('footer');
        }
        else {
            show_404();
        }
    }
}
        
 ?>