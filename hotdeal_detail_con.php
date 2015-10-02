<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class hotdeal_detail_con extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('basicMethod');
        
        $this->load->model("hotdeal_details_mod");
    }

    public function index() {

        $data = array(
            'page_title' => 'Hot Deals Details | Special Hotel Rates | Findmyfare',
            'meta_keywords' => 'Sri Lanka hotels, Sri Lanka holiday deals, Cheap hotel deals, Holiday hot deals, 9yZnKaacnSOXpBNvJci0GPB-OlQ',
            'meta_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.',
            'og_url' => base_url("hotdeal-details"),
            'og_image' => '',
            'og_title' => 'Hot Deals Details | Special Hotel Rates | Findmyfare',
            'og_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.'
        );
        $this->load->view('template/header', $data);
        // $count_hotel_count = $this->hotdeal_details_mod->count_hotel();
        
 //       $hot_deal_info = $this->hotdeal_details_mod->hotdeal_info($data2);
        
//        $count_hot = $this->hotdeal_details_mod->Count_hotel_deal($data2);
//        $rooms = array();
//        for($x=0;$x<=$count_hot;$x++){
//            $rooms[x]=$hot_deal_info[x];
//                    }
        
        $this->load->view('hotdeal-details-vw');
        
         
        
        $this->load->view('template/footer');
    }

    public function hotdeal_details_func() {

        

        //gets the hotel name from the url
        $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = end(split('/', $_SERVER['REQUEST_URI_PATH']));
        $hotel_name = str_replace("-", " ", $segments);

        $data1 = array(
            'hotel_name' => $hotel_name,
        );

        $hotelIDArr = $this->hotdeal_details_mod->hotdeal_hotelID($data1);

        $data2 = array(
            'hotel_id' => $hotelIDArr[0]['id'],
        );
        

        $hot_hotel = $this->hotdeal_details_mod->hotdeal_hot_hotels($data1);

        $hot_hotel_arr = array(
            'id' => $hot_hotel[0]['id'],
            'address' => $hot_hotel[0]['address'],
            'description' => $hot_hotel[0]['description'],
        );
        

        $data3 = array(
            'hot_hotel_id' => $hot_hotel[0]['id'],
        );

        $hot_deal_inclusives = $this->hotdeal_details_mod->hot_hotel_id($data3);
        
        //$hot_deal_info = array();

        $hot_deal_info = $this->hotdeal_details_mod->hotdeal_info($data2);
        
       // var_dump($hot_deal_info1);
        
      //  array_push($hot_deal_info, $hot_deal_info1);
        
       // $count_hot = $this->hotdeal_details_mod->Count_hotel_deal();
//        $rooms = array();
////        for($x=0;$x<=$count_hot;$x++){
////            $rooms[x]=$hot_deal_info[x];
////                    }
        
        
        
      //  $hot_deal_info2 = $this->hotdeal_details_mod->hotdeal_info2($data2);

        $hot_deal_counts = $this->hotdeal_details_mod->hotdeal_count();
        
       

        $hot_deal_TC = $this->hotdeal_details_mod->terms_conditions();

        
        //hotdeals terms and conditions 
        $hot_deal_TC_arr = array();
        foreach ($hot_deal_TC as $info_element) {
            $hot_deal_TC_arr_ele = array(
                'id' => $info_element['id'],
                'condition' => $info_element['condition'],
            );
            array_push($hot_deal_TC_arr, $hot_deal_TC_arr_ele);
        }

        //hotdeal counts 
        $hot_deal_counts_arr = array();
        foreach ($hot_deal_counts as $element) {
            $hot_deal_counts_arr_ele = array(
                'rooms' => $element['rooms'],
                'hotels' => $element['hotels'],
            );
            array_push($hot_deal_counts_arr, $hot_deal_counts_arr_ele);
        }
        
        //hotdeals info 
        $hot_deal_info_arr = array();
        foreach ($hot_deal_info as $info_element) {
            $hot_deal_info_arr_ele = array(
                'hotel_name' => $info_element['hotel_name'],
                'board_basis' => $info_element['board_basis'],
                'room_type' => $info_element['room_type'],
                'hotel_name' => $info_element['hotel_name'],
                'occupancy' => $info_element['occupancy'],
                'discount_pre' => $info_element['discount_pre'],
                'regular_price' => $info_element['regular_price'],
                'SplDiscount_allowed' => $info_element['SplDiscount_allowed'],
                'id' => $info_element['id'],
                'hotel_name' => $info_element['hotel_name'],
                'description' => $info_element['description'],
                'vaild_from' => $info_element['vaild_from'],
                'vaild_to' => $info_element['vaild_to'],
                'block_category' => $info_element['block_category'],
                'SplDicount_bank' => $info_element['SplDicount_bank'],
                'SplDiscount_Pre' => $info_element['SplDiscount_Pre'],
                'min_date' => $info_element['min_date'],
                'blocked_dates' => $info_element['blocked_dates'],
                'room_limit' => $info_element['room_limit'],  
                'sub'=>$info_element['Sub']
            );
            array_push($hot_deal_info_arr, $hot_deal_info_arr_ele);
        }
        
        
//        //hotdeals info2 
//        $hot_deal_info_arr2 = array();
//        foreach ($hot_deal_info2 as $info_element2) {
//            $hot_deal_info_arr_ele2 = array(
//                'hotel_name' => $info_element2['hotel_name'],
//                'board_basis' => $info_element2['board_basis'],
//                'room_type' => $info_element2['room_type'],
//                'hotel_name' => $info_element2['hotel_name'],
//                'occupancy' => $info_element2['occupancy'],
//                'discount_pre' => $info_element2['discount_pre'],
//                'regular_price' => $info_element2['regular_price'],
//                'SplDiscount_allowed' => $info_element2['SplDiscount_allowed'],
//                'id' => $info_element2['id'],
//                'hotel_name' => $info_element2['hotel_name'],
//                'description' => $info_element2['description'],
//                'vaild_from' => $info_element2['vaild_from'],
//                'vaild_to' => $info_element2['vaild_to'],
//                'block_category' => $info_element2['block_category'],
//                'SplDicount_bank' => $info_element2['SplDicount_bank'],
//                'SplDiscount_Pre' => $info_element2['SplDiscount_Pre'],
//                'min_date' => $info_element2['min_date'],
//                'blocked_dates' => $info_element2['blocked_dates'],
//                'room_limit' => $info_element2['room_limit'],  
//                'sub'=>$info_element2['Sub']
//            );
//            array_push($hot_deal_info_arr2, $hot_deal_info_arr_ele2);
//        }
        
        
        
        
        
           
        
        //hotdeal inclusives
        $hot_deal_inclusives_arr = array(
            'option_no' => $hot_deal_inclusives[0]['option_no'],
            'inclusives' => $hot_deal_inclusives[0]['inclusives'],
        );
        
        
        $fb_special = $hot_hotel[0]['fb_special'];
        $isSoldout = $hot_hotel[0]['is_soldout'];
        $hotel_id = $hot_hotel[0]['id'];
        $id = $hot_deal_inclusives[0]['id'];
        $vaild_from = $hot_deal_info[0]['vaild_from'];
        $vaild_to = $hot_deal_info[0]['vaild_to'];
        
 //       $vaild_from = $hot_deal_info2[0]['vaild_from'];
 //      $vaild_to = $hot_deal_info2[0]['vaild_to'];
        
        $freebies = $hot_hotel[0]['freebies'];
        $freebies_descriptor = $hot_hotel[0]['freebies_descriptor'];
        $website = $hot_hotel[0]['website'];
        $facebook = $hot_hotel[0]['facebook'];
        $reservation = $hot_hotel[0]['reservation'];
        $is_booked = $hot_hotel[0]['is_booked'];
        $homepage_image = $hot_hotel[0]['homepage_image'];
        $dirHomepage = "hmgt/assist/photo-gallery/$hotel_id/Front";
        $termsAndConditions = $hot_hotel[0]['terms_and_condition'];
        $condionArr = explode(',', $termsAndConditions);
       
            // !$hot_deal_info
        if (!$hot_deal_info) {
            redirect('404');
            exit();
        }
        
//        // !$hot_deal_info2
//         if (!$hot_deal_info2) {
//            redirect('404');
//            exit();
//        }

        $data = array(
            'page_title' => 'Hot Deals Details | Special Hotel Rates | Findmyfare',
            'meta_keywords' => 'Sri Lanka hotels, Sri Lanka holiday deals, Cheap hotel deals, Holiday hot deals, 9yZnKaacnSOXpBNvJci0GPB-OlQ',
            'meta_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.',
            'og_url' => base_url("hotdeal-details"),
            'og_image' => '',
            'og_title' => 'Hot Deals Details | Special Hotel Rates | Findmyfare',
            'og_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.',
            'hot_hotel_arr' => $hot_hotel_arr,
            'hot_deal_counts_arr' => $hot_deal_counts_arr,
            'hot_deal_info_arr' => $hot_deal_info_arr,
            
             'hot_deal_info_arr2' => $hot_deal_info_arr2,
            
            'hot_deal_TC_arr' => $hot_deal_TC_arr,
            'hot_deal_inclusives_arr' => $hot_deal_inclusives_arr,
            'condionArr' => $condionArr,
            'hotel_id' => $hotel_id,
            'hotel_name' => $hotel_name,            
            'isSoldout' => $isSoldout,
            'fb_special' => $fb_special,
            'id' => $id,
            'vaild_from' => $vaild_from,
            'vaild_to' => $vaild_to,
            'freebies' => $freebies,
            'freebies_descriptor' => $freebies_descriptor,
            'website' => $website,
            'facebook' => $facebook,
            'reservation' => $reservation,
            'is_booked' => $is_booked,           
            'homepage_image' => $homepage_image,
            'dirHomepage' => $dirHomepage,
        );
        $this->load->view('template/header', $data);
        $this->load->view('hotdeal-details-vw', $hot_deal_info_arr);
        // $this->load->view('template/footer');
    }

}
