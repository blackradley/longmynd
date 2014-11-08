<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	private $layout_data = array();
	
	function __construct(){
		parent::__construct();
		// The Facebook opening hours are on all pages
		$parameters = array("facebook_page" => FACEBOOK_PAGE);
		$this->load->library('Fb_graph', $parameters);
		$this->layout_data['graph'] = $this->fb_graph->getGraph();
			
		$this->load->library('Blogger_post');
		$this->layout_data['prices_post'] = $this->blogger_post->getPostFromId("4699119988487037285");
		
		// Cache the page output
		$this->output->cache(CACHE_TIME_PAGE);
	}
	
	function index()
	{
		//Flickr carousel
		$this->load->library('Flickr', array('set' => FLICKR_SET_DONINGTON_HOME));
		$content_data['carousel'] = $this->flickr->getFlickrSet();
		
		//Facebook events
		$this->load->library('Fb_events');
		$content_data['events_list'] = $this->fb_events->getFirstThreeEvents();
		
		//Facebook - About and Description
		$this->load->library('Fb_graph');
		$content_data['graph'] = $this->fb_graph->getGraph();
				
		$this->layout_data['title'] = 'Welcome';
		$this->layout_data['content'] = $this->load->view('pages/home', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
	
	function visit()
	{
		$this->_carouselAndBlogger("6959057802937055975", FLICKR_SET_DONINGTON_VISIT);
	}
	
	function sen()
	{
		$this->_bloggerPage("9120972849417862353");
	}
	
	function Eat()
	{		
		$this->_carouselAndBlogger("109328756054574193", FLICKR_SET_DONINGTON_EAT);
	}
		
	function About()
	{
		$this->_carouselAndBlogger("2611096040015163597", FLICKR_SET_DONINGTON_ABOUT);
	}
	
	function facilities()
	{
		$this->_bloggerPage("1047153429408697637");
	}
		
	function events()
	{
		//Flickr carousel
		$this->load->library('Flickr', array('set' => FLICKR_SET_DONINGTON_EVENTS));
		$content_data['carousel'] = $this->flickr->getFlickrSet();
	
		//Facebook events
		$this->load->library('Fb_events');
		$content_data['events_list'] = $this->fb_events->getEventsList();
		
		//JavaScripts to do the more/less on the events text
		$this->layout_data['page_specific_scripts'] = array("/public/js/jquery.shorten.js",
															"/public/js/jquery.shorten.events.js");
	
		$this->layout_data['title'] = "What's On";
		$this->layout_data['content'] = $this->load->view('pages/events', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
	
	function learn()
	{
		$this->_carouselAndBlogger("4825745897280574089", FLICKR_SET_DONINGTON_LEARN);
	}
	
	function education()
	{
		$this->_bloggerPage("6860598623910436772");
	}
	
	function sessions()
	{
		$this->_bloggerPage("3852095434196778936");
	}
	
	function hire()
	{
		$this->_carouselAndBlogger("8670075880973719335", FLICKR_SET_DONINGTON_HIRE);
	}
	
	function location()
	{
		//Blogger Page
		$this->load->library('Blogger_pages');
		$content_data['blogger_page'] = $this->blogger_pages->getPageFromId("7915121348762808104");
		//Facebook location
		$this->load->library('Fb_graph');
		$content_data['graph'] = $this->fb_graph->getGraph();
	
		$this->layout_data['title'] = 'Location';
		$this->layout_data['content'] = $this->load->view('pages/location', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
	
	function privacy()
	{
		$this->_bloggerPost("5920191165021947131");
	}
	
	/*
	 * Blogger Page
	 */
	private function _bloggerPage($pageId)
	{
		$this->load->library('Blogger_pages');
		$content_data['blogger_item'] = $this->blogger_pages->getPageFromId($pageId);
		$this->layout_data['title'] = $content_data['blogger_item']->title;
		$this->layout_data['content'] = $this->load->view('pages/blogger', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}

	/*
	 * Carousel and Blogger Page
	 */
	private function _carouselAndBlogger($pageId, $flickrSet)
	{
		$this->load->library('Flickr', array('set' => $flickrSet));
		$content_data['carousel'] = $this->flickr->getFlickrSet();
		$this->load->library('Blogger_pages');
		$content_data['blogger_page'] = $this->blogger_pages->getPageFromId($pageId);
		$this->layout_data['title'] = $content_data['blogger_page']->title;
		$this->layout_data['content'] = $this->load->view('pages/carousel_and_blogger', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}

	/*
	 * Blogger Post
	 */
	private function _bloggerPost($pageId)
	{
		$this->load->library('Blogger_post');
		$content_data['blogger_item'] = $this->blogger_post->getPostFromId($pageId);
		$this->layout_data['title'] = $content_data['blogger_item']->title;
		$this->layout_data['content'] = $this->load->view('pages/blogger', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}

	/*
	 * Page not found 404
	 */
	public function error_404()
	{
		$content_data = array();
		$this->output->set_status_header('404');
		$this->layout_data['title'] = "Page Not Found";
		$this->layout_data['content'] = $this->load->view('errors/404', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
}
?>



