<?php

function check_already_login_pracetak(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session){
        redirect('pracetak/Suratorder');
    }
}

function check_not_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if(!$user_session){
        redirect('auth/index');    
    }
}
function check_pracetak(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1 && $ci->fungsi->user_login()->level != 6 && $ci->fungsi->user_login()->level != 8){
        redirect('pracetak/Suratorder');
    }
}
function check_pracetak_imposisi(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1 && $ci->fungsi->user_login()->level != 4 && $ci->fungsi->user_login()->level != 6 && $ci->fungsi->user_login()->level != 8){
        redirect('pracetak/Suratorder');
    }
}
function check_pracetak_ctcp(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1 && $ci->fungsi->user_login()->level != 5 && $ci->fungsi->user_login()->level != 6 && $ci->fungsi->user_login()->level != 8){
        redirect('pracetak/Suratorder');
    }
}
function check_finishing(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 3 && $ci->fungsi->user_login()->level != 6 && $ci->fungsi->user_login()->level != 8){
        redirect('finishing/Display');
    }
}
function check_finishing_operator(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 3 && $ci->fungsi->user_login()->level != 7 && $ci->fungsi->user_login()->level != 6 && $ci->fungsi->user_login()->level != 8){
        redirect('pracetak/Suratorder');
    }
}
function check_pracetak_admin(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 6){
        redirect('pracetak/Suratorder');
    }
}
function check_already_login_cetak(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session){
        redirect('cetak/Displayumum');
    }
}

// function check_not_login_cetak(){
//     $ci =& get_instance();
//     $user_session = $ci->session->userdata('id_user');
//     if(!$user_session){
//         redirect('auth/index');    
//     }
// }
function check_already_login_finishing(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session){
        redirect('finishing/Finishing');
    }
}

// function check_not_login_finishing(){
//     $ci =& get_instance();
//     $user_session = $ci->session->userdata('id_user');
//     if(!$user_session){
//         redirect('auth/index');    
//     }
// }