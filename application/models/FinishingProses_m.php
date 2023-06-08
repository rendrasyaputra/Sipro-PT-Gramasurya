<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);

class FinishingProses_m extends CI_Model {
// finishing proses
	public function get($id = null)
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status,

            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,
            
            finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,    

            laminasi.tanggal_pelaksanaan_laminasi as tanggal_laminasi,     
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_mbo,            
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_shoe,            
            susun.tanggal_pelaksanaan_mesin_susun as tanggal_susun,            
            sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_sub_proses,    
            
            laminasi.status_laminasi as status_laminasi,            
            mbo.status_mbo as status_mbo,
            shoe.status_shoe as status_shoe,
            susun.status_susun as status_susun,
            sub_proses.status_sub as status_sub,

            laminasi.id_laminasi as id_laminasi,
            laminasi.id_jadwal_laminasi as id_jadwal_laminasi,
            laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi,
            laminasi.keterangan_jadwal_fp_laminasi as keterangan_jadwal_fp_laminasi,
            
            mbo.id_mbo as id_mbo,
            mbo.id_jadwal_mbo as id_jadwal_mbo,
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mesin_mbo,   
            mbo.keterangan_jadwal_fp_mbo as keterangan_jadwal_fp_mbo,                   
            mbo.lipat_lembar_1 as mbo_lipat_lembar_1,   
            mbo.lipat_lembar_2 as mbo_lipat_lembar_2,   
            mbo.lipat_lembar_3 as mbo_lipat_lembar_3,   
            mbo.lipat_lembar_4 as mbo_lipat_lembar_4,   
            mbo.lipat_lembar_5 as mbo_lipat_lembar_5,   
            mbo.lipat_lembar_6 as mbo_lipat_lembar_6,   
            mbo.lipat_lembar_7 as mbo_lipat_lembar_7,   
            mbo.lipat_lembar_8 as mbo_lipat_lembar_8,   
            mbo.lipat_lembar_9 as mbo_lipat_lembar_9,   
            mbo.lipat_lembar_10 as mbo_lipat_lembar_10,   
            mbo.lipat_lembar_11 as mbo_lipat_lembar_11,   
            mbo.lipat_lembar_12 as mbo_lipat_lembar_12,   
            mbo.lipat_lembar_13 as mbo_lipat_lembar_13,   
            mbo.lipat_lembar_14 as mbo_lipat_lembar_14,   
            mbo.lipat_lembar_15 as mbo_lipat_lembar_15,   
            mbo.lipat_lembar_16 as mbo_lipat_lembar_16,   
            mbo.lipat_lembar_17 as mbo_lipat_lembar_17,   
            mbo.lipat_lembar_18 as mbo_lipat_lembar_18,   
            mbo.lipat_lembar_19 as mbo_lipat_lembar_19,   
            mbo.lipat_lembar_20 as mbo_lipat_lembar_20, 

            shoe.id_shoe as id_shoe,
            shoe.id_jadwal_shoe as id_jadwal_shoe,
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_mesin_shoe,   
            shoe.keterangan_jadwal_fp_shoe as keterangan_jadwal_fp_shoe,                   
            shoe.lipat_lembar_1 as shoe_lipat_lembar_1,   
            shoe.lipat_lembar_2 as shoe_lipat_lembar_2,   
            shoe.lipat_lembar_3 as shoe_lipat_lembar_3,   
            shoe.lipat_lembar_4 as shoe_lipat_lembar_4,   
            shoe.lipat_lembar_5 as shoe_lipat_lembar_5,   
            shoe.lipat_lembar_6 as shoe_lipat_lembar_6,   
            shoe.lipat_lembar_7 as shoe_lipat_lembar_7,   
            shoe.lipat_lembar_8 as shoe_lipat_lembar_8,   
            shoe.lipat_lembar_9 as shoe_lipat_lembar_9,   
            shoe.lipat_lembar_10 as shoe_lipat_lembar_10,   
            shoe.lipat_lembar_11 as shoe_lipat_lembar_11,   
            shoe.lipat_lembar_12 as shoe_lipat_lembar_12,   
            shoe.lipat_lembar_13 as shoe_lipat_lembar_13,   
            shoe.lipat_lembar_14 as shoe_lipat_lembar_14,   
            shoe.lipat_lembar_15 as shoe_lipat_lembar_15,   
            shoe.lipat_lembar_16 as shoe_lipat_lembar_16,   
            shoe.lipat_lembar_17 as shoe_lipat_lembar_17,   
            shoe.lipat_lembar_18 as shoe_lipat_lembar_18,   
            shoe.lipat_lembar_19 as shoe_lipat_lembar_19,   
            shoe.lipat_lembar_20 as shoe_lipat_lembar_20,   
            
            susun.id_susun as id_susun,
            susun.id_jadwal_susun as id_jadwal_susun,
            susun.id_susun as id_susun,
            susun.id_jadwal_susun as id_jadwal_susun,
            susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_mesin_susun,   
            susun.keterangan_jadwal_fp_susun as keterangan_jadwal_fp_susun, 

            sub_proses.id_sub as id_sub,
            sub_proses.id_jadwal_sub as id_jadwal_sub,
            sub_proses.id_sub as id_sub_proses,
            sub_proses.id_jadwal_sub as id_jadwal_sub_proses,
            sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub_proses,   
            sub_proses.keterangan_jadwal_sub_proses as keterangan_jadwal_sub_proses,                
            sub_proses.jenis_sub_lipat as jenis_sub_lipat,  
            sub_proses.jenis_sub_susun_gabung as jenis_sub_susun_gabung,  
            sub_proses.jenis_sub_laminasi as jenis_sub_laminasi
            
            '      
        );           

        $this->db->from('order');                
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->join('laminasi','laminasi.id_order = order.id_order','left');
        $this->db->join('mbo','mbo.id_order = order.id_order','left');
        $this->db->join('shoe','shoe.id_order = order.id_order','left');
        $this->db->join('susun','susun.id_order = order.id_order','left');
        $this->db->join('sub_proses','sub_proses.id_order = order.id_order','left');                                          
        

        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);
              

               
        $query = $this->db->get();
        return $query; 
}

// ambil tanggal tiap mesin hehe
        public function ambil_data_fp_laminasi($id)
        {
            $this->db->select(
                '   
                laminasi.tanggal_pelaksanaan_laminasi as tanggal_laminasi,
                laminasi.id_jadwal_laminasi as id_jadwal_laminasi                 
                '
            );
            $this->db->from('order');                            
            $this->db->join('laminasi','laminasi.id_order = order.id_order','left');
           

            $this->db->where('order.id_order', $id);                   
            $query = $this->db->get();
            return $query;   
}
    public function ambil_data_fp_mbo($id)
    {
        $this->db->select(
            '   
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_mbo,    
            mbo.id_jadwal_mbo as id_jadwal_mbo              
            '
        );
        $this->db->from('order');                            
        $this->db->join('mbo','mbo.id_order = order.id_order','left');
    

        $this->db->where('order.id_order', $id);                   
        $query = $this->db->get();
        return $query;   
}
    public function ambil_data_fp_shoe($id)
    {
        $this->db->select(
            '   
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_shoe,   
            shoe.id_jadwal_shoe as id_jadwal_shoe                
            '
        );
        $this->db->from('order');                            
        $this->db->join('shoe','shoe.id_order = order.id_order','left');


        $this->db->where('order.id_order', $id);                   
        $query = $this->db->get();
        return $query;   
}
    public function ambil_data_fp_susun($id)
        {
            $this->db->select(
                '   
                susun.tanggal_pelaksanaan_mesin_susun as tanggal_susun, 
                susun.id_jadwal_susun as id_jadwal_susun                  
                '
            );
            $this->db->from('order');                            
            $this->db->join('susun','susun.id_order = order.id_order','left');


            $this->db->where('order.id_order', $id);                   
            $query = $this->db->get();
            return $query;   
}
    public function ambil_data_fp_sub($id)
        {
            $this->db->select(
                '   
                sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_sub, 
                sub_proses.id_jadwal_sub as id_jadwal_sub                  
                '
            );
            $this->db->from('order');                            
            $this->db->join('sub_proses','sub_proses.id_order = order.id_order','left');


            $this->db->where('order.id_order', $id);                   
            $query = $this->db->get();
            return $query;   
}

    public function tambah_fp($data)
	{
            $tambah_laminasi = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_laminasi' =>$data['tanggal_pelaksanaan_laminasi'],   
                'keterangan_jadwal_fp_laminasi' =>$data['keterangan_jadwal_fp_laminasi']                
            );            
            $this->db->insert('laminasi',$tambah_laminasi);

            $tambah_mbo = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_mesin_mbo' =>$data['tanggal_pelaksanaan_mesin_mbo'],   
                'keterangan_jadwal_fp_mbo' =>$data['keterangan_jadwal_fp_mbo'],                   
                'lipat_lembar_1' =>$data['mbo_lipat_lembar_1'],   
                'lipat_lembar_2' =>$data['mbo_lipat_lembar_2'],   
                'lipat_lembar_3' =>$data['mbo_lipat_lembar_3'],   
                'lipat_lembar_4' =>$data['mbo_lipat_lembar_4'],   
                'lipat_lembar_5' =>$data['mbo_lipat_lembar_5'],   
                'lipat_lembar_6' =>$data['mbo_lipat_lembar_6'],   
                'lipat_lembar_7' =>$data['mbo_lipat_lembar_7'],   
                'lipat_lembar_8' =>$data['mbo_lipat_lembar_8'],   
                'lipat_lembar_9' =>$data['mbo_lipat_lembar_9'],   
                'lipat_lembar_10' =>$data['mbo_lipat_lembar_10'],   
                'lipat_lembar_11' =>$data['mbo_lipat_lembar_11'],   
                'lipat_lembar_12' =>$data['mbo_lipat_lembar_12'],   
                'lipat_lembar_13' =>$data['mbo_lipat_lembar_13'],   
                'lipat_lembar_14' =>$data['mbo_lipat_lembar_14'],   
                'lipat_lembar_15' =>$data['mbo_lipat_lembar_15'],   
                'lipat_lembar_16' =>$data['mbo_lipat_lembar_16'],   
                'lipat_lembar_17' =>$data['mbo_lipat_lembar_17'],   
                'lipat_lembar_18' =>$data['mbo_lipat_lembar_18'],   
                'lipat_lembar_19' =>$data['mbo_lipat_lembar_19'],   
                'lipat_lembar_20' =>$data['mbo_lipat_lembar_20'],                                                
            );            
            $this->db->insert('mbo',$tambah_mbo);

            $tambah_shoe = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_mesin_shoe' =>$data['tanggal_pelaksanaan_mesin_shoe'],   
                'keterangan_jadwal_fp_shoe' =>$data['keterangan_jadwal_fp_shoe'],                   
                'lipat_lembar_1' =>$data['shoe_lipat_lembar_1'],   
                'lipat_lembar_2' =>$data['shoe_lipat_lembar_2'],   
                'lipat_lembar_3' =>$data['shoe_lipat_lembar_3'],   
                'lipat_lembar_4' =>$data['shoe_lipat_lembar_4'],   
                'lipat_lembar_5' =>$data['shoe_lipat_lembar_5'],   
                'lipat_lembar_6' =>$data['shoe_lipat_lembar_6'],   
                'lipat_lembar_7' =>$data['shoe_lipat_lembar_7'],   
                'lipat_lembar_8' =>$data['shoe_lipat_lembar_8'],   
                'lipat_lembar_9' =>$data['shoe_lipat_lembar_9'],   
                'lipat_lembar_10' =>$data['shoe_lipat_lembar_10'],   
                'lipat_lembar_11' =>$data['shoe_lipat_lembar_11'],   
                'lipat_lembar_12' =>$data['shoe_lipat_lembar_12'],   
                'lipat_lembar_13' =>$data['shoe_lipat_lembar_13'],   
                'lipat_lembar_14' =>$data['shoe_lipat_lembar_14'],   
                'lipat_lembar_15' =>$data['shoe_lipat_lembar_15'],   
                'lipat_lembar_16' =>$data['shoe_lipat_lembar_16'],   
                'lipat_lembar_17' =>$data['shoe_lipat_lembar_17'],   
                'lipat_lembar_18' =>$data['shoe_lipat_lembar_18'],   
                'lipat_lembar_19' =>$data['shoe_lipat_lembar_19'],   
                'lipat_lembar_20' =>$data['shoe_lipat_lembar_20']                                                
            );            
            $this->db->insert('shoe',$tambah_shoe);
            
            $tambah_susun = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_mesin_susun' =>$data['tanggal_pelaksanaan_mesin_susun'],   
                'keterangan_jadwal_fp_susun' =>$data['keterangan_jadwal_fp_susun'],                
            );            
            $this->db->insert('susun',$tambah_susun);

            $tambah_sub_fp = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_sub_proses' =>$data['tanggal_pelaksanaan_sub_proses'],   
                'keterangan_jadwal_sub_proses' =>$data['keterangan_jadwal_sub_proses'],                
                'jenis_sub_lipat' =>$data['jenis_sub_lipat'],  
                'jenis_sub_susun_gabung' =>$data['jenis_sub_susun_gabung'],  
                'jenis_sub_laminasi' =>$data['jenis_sub_laminasi']                
            );            
            $this->db->insert('sub_proses',$tambah_sub_fp);
}

    public function edit_fp($data)
	{
            if($data["tanggal_pelaksanaan_laminasi"] != ""){
                            $ubah_laminasi = array(
                                'id_order' =>$data['id_order'],               
                                'id_jadwal_laminasi' =>$data['id_jadwal_laminasi'],     
                                'tanggal_pelaksanaan_laminasi' =>$data['tanggal_pelaksanaan_laminasi'],   
                                'keterangan_jadwal_fp_laminasi' =>$data['keterangan_jadwal_fp_laminasi']               
                            );                                            
                            $this->db->insert('laminasi',$ubah_laminasi); 
            }

            if($data["tanggal_pelaksanaan_mesin_mbo"] != ""){
                            $ubah_mbo = array(
                                'id_order' =>$data['id_order'],     
                                'id_jadwal_mbo' =>$data['id_jadwal_mbo'],           
                                'tanggal_pelaksanaan_mesin_mbo' =>$data['tanggal_pelaksanaan_mesin_mbo'],   
                                'keterangan_jadwal_fp_mbo' =>$data['keterangan_jadwal_fp_mbo'],
                                'lipat_lembar_1' =>$data['mbo_lipat_lembar_1'],   
                                'lipat_lembar_2' =>$data['mbo_lipat_lembar_2'],   
                                'lipat_lembar_3' =>$data['mbo_lipat_lembar_3'],   
                                'lipat_lembar_4' =>$data['mbo_lipat_lembar_4'],   
                                'lipat_lembar_5' =>$data['mbo_lipat_lembar_5'],   
                                'lipat_lembar_6' =>$data['mbo_lipat_lembar_6'],   
                                'lipat_lembar_7' =>$data['mbo_lipat_lembar_7'],   
                                'lipat_lembar_8' =>$data['mbo_lipat_lembar_8'],   
                                'lipat_lembar_9' =>$data['mbo_lipat_lembar_9'],   
                                'lipat_lembar_10' =>$data['mbo_lipat_lembar_10'],   
                                'lipat_lembar_11' =>$data['mbo_lipat_lembar_11'],   
                                'lipat_lembar_12' =>$data['mbo_lipat_lembar_12'],   
                                'lipat_lembar_13' =>$data['mbo_lipat_lembar_13'],   
                                'lipat_lembar_14' =>$data['mbo_lipat_lembar_14'],   
                                'lipat_lembar_15' =>$data['mbo_lipat_lembar_15'],   
                                'lipat_lembar_16' =>$data['mbo_lipat_lembar_16'],   
                                'lipat_lembar_17' =>$data['mbo_lipat_lembar_17'],   
                                'lipat_lembar_18' =>$data['mbo_lipat_lembar_18'],   
                                'lipat_lembar_19' =>$data['mbo_lipat_lembar_19'],   
                                'lipat_lembar_20' =>$data['mbo_lipat_lembar_20']
                                                                                                         
                            );                       
                            $this->db->insert('mbo',$ubah_mbo); 
            }
                            // memasukkan lipat sesuai id_order mbo
                            $ubah_mbo_lipat = array(                                
                                'lipat_lembar_1' =>$data['mbo_lipat_lembar_1'],   
                                'lipat_lembar_2' =>$data['mbo_lipat_lembar_2'],   
                                'lipat_lembar_3' =>$data['mbo_lipat_lembar_3'],   
                                'lipat_lembar_4' =>$data['mbo_lipat_lembar_4'],   
                                'lipat_lembar_5' =>$data['mbo_lipat_lembar_5'],   
                                'lipat_lembar_6' =>$data['mbo_lipat_lembar_6'],   
                                'lipat_lembar_7' =>$data['mbo_lipat_lembar_7'],   
                                'lipat_lembar_8' =>$data['mbo_lipat_lembar_8'],   
                                'lipat_lembar_9' =>$data['mbo_lipat_lembar_9'],   
                                'lipat_lembar_10' =>$data['mbo_lipat_lembar_10'],   
                                'lipat_lembar_11' =>$data['mbo_lipat_lembar_11'],   
                                'lipat_lembar_12' =>$data['mbo_lipat_lembar_12'],   
                                'lipat_lembar_13' =>$data['mbo_lipat_lembar_13'],   
                                'lipat_lembar_14' =>$data['mbo_lipat_lembar_14'],   
                                'lipat_lembar_15' =>$data['mbo_lipat_lembar_15'],   
                                'lipat_lembar_16' =>$data['mbo_lipat_lembar_16'],   
                                'lipat_lembar_17' =>$data['mbo_lipat_lembar_17'],   
                                'lipat_lembar_18' =>$data['mbo_lipat_lembar_18'],   
                                'lipat_lembar_19' =>$data['mbo_lipat_lembar_19'],   
                                'lipat_lembar_20' =>$data['mbo_lipat_lembar_20']                                                
                            );                        
                            $this->db->set($ubah_mbo_lipat);
                            $this->db->where('id_order',$data['id_order']);
                            $this->db->update('mbo');
            


            if($data["tanggal_pelaksanaan_mesin_shoe"] != ""){
                            $ubah_shoe = array(
                                'id_order' =>$data['id_order'], 
                                'id_jadwal_shoe' =>$data['id_jadwal_shoe'],                
                                'tanggal_pelaksanaan_mesin_shoe' =>$data['tanggal_pelaksanaan_mesin_shoe'],   
                                'keterangan_jadwal_fp_shoe' =>$data['keterangan_jadwal_fp_shoe'],
                                'lipat_lembar_1' =>$data['shoe_lipat_lembar_1'],   
                                'lipat_lembar_2' =>$data['shoe_lipat_lembar_2'],   
                                'lipat_lembar_3' =>$data['shoe_lipat_lembar_3'],   
                                'lipat_lembar_4' =>$data['shoe_lipat_lembar_4'],   
                                'lipat_lembar_5' =>$data['shoe_lipat_lembar_5'],   
                                'lipat_lembar_6' =>$data['shoe_lipat_lembar_6'],   
                                'lipat_lembar_7' =>$data['shoe_lipat_lembar_7'],   
                                'lipat_lembar_8' =>$data['shoe_lipat_lembar_8'],   
                                'lipat_lembar_9' =>$data['shoe_lipat_lembar_9'],   
                                'lipat_lembar_10' =>$data['shoe_lipat_lembar_10'],   
                                'lipat_lembar_11' =>$data['shoe_lipat_lembar_11'],   
                                'lipat_lembar_12' =>$data['shoe_lipat_lembar_12'],   
                                'lipat_lembar_13' =>$data['shoe_lipat_lembar_13'],   
                                'lipat_lembar_14' =>$data['shoe_lipat_lembar_14'],   
                                'lipat_lembar_15' =>$data['shoe_lipat_lembar_15'],   
                                'lipat_lembar_16' =>$data['shoe_lipat_lembar_16'],   
                                'lipat_lembar_17' =>$data['shoe_lipat_lembar_17'],   
                                'lipat_lembar_18' =>$data['shoe_lipat_lembar_18'],   
                                'lipat_lembar_19' =>$data['shoe_lipat_lembar_19'],   
                                'lipat_lembar_20' =>$data['shoe_lipat_lembar_20']                                                                              
                            );            
                            $this->db->insert('shoe',$ubah_shoe);
            }

// memasukkan lipat sesuai id_order shoe
            $ubah_shoe_lipat = array(                                
                'lipat_lembar_1' =>$data['shoe_lipat_lembar_1'],   
                'lipat_lembar_2' =>$data['shoe_lipat_lembar_2'],   
                'lipat_lembar_3' =>$data['shoe_lipat_lembar_3'],   
                'lipat_lembar_4' =>$data['shoe_lipat_lembar_4'],   
                'lipat_lembar_5' =>$data['shoe_lipat_lembar_5'],   
                'lipat_lembar_6' =>$data['shoe_lipat_lembar_6'],   
                'lipat_lembar_7' =>$data['shoe_lipat_lembar_7'],   
                'lipat_lembar_8' =>$data['shoe_lipat_lembar_8'],   
                'lipat_lembar_9' =>$data['shoe_lipat_lembar_9'],   
                'lipat_lembar_10' =>$data['shoe_lipat_lembar_10'],   
                'lipat_lembar_11' =>$data['shoe_lipat_lembar_11'],   
                'lipat_lembar_12' =>$data['shoe_lipat_lembar_12'],   
                'lipat_lembar_13' =>$data['shoe_lipat_lembar_13'],   
                'lipat_lembar_14' =>$data['shoe_lipat_lembar_14'],   
                'lipat_lembar_15' =>$data['shoe_lipat_lembar_15'],   
                'lipat_lembar_16' =>$data['shoe_lipat_lembar_16'],   
                'lipat_lembar_17' =>$data['shoe_lipat_lembar_17'],   
                'lipat_lembar_18' =>$data['shoe_lipat_lembar_18'],   
                'lipat_lembar_19' =>$data['shoe_lipat_lembar_19'],   
                'lipat_lembar_20' =>$data['shoe_lipat_lembar_20']                                                
            );            
            $this->db->set($ubah_shoe_lipat);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('shoe');
            



            if($data["tanggal_pelaksanaan_mesin_susun"] != ""){
                $ubah_susun = array(
                    'id_order' =>$data['id_order'], 
                    'id_jadwal_susun' =>$data['id_jadwal_susun'],                
                    'tanggal_pelaksanaan_mesin_susun' =>$data['tanggal_pelaksanaan_mesin_susun'],   
                    'keterangan_jadwal_fp_susun' =>$data['keterangan_jadwal_fp_susun']                
                );            
                $this->db->insert('susun',$ubah_susun);
            }

            if($data["tanggal_pelaksanaan_sub_proses"] != ""){
                $ubah_sub_fp = array(
                    'id_order' =>$data['id_order'],    
                    'id_jadwal_sub' =>$data['id_jadwal_sub'],             
                    'tanggal_pelaksanaan_sub_proses' =>$data['tanggal_pelaksanaan_sub_proses'],   
                    'keterangan_jadwal_sub_proses' =>$data['keterangan_jadwal_sub_proses'],                
                    'jenis_sub_lipat' =>$data['jenis_sub_lipat'],  
                    'jenis_sub_susun_gabung' =>$data['jenis_sub_susun_gabung'],  
                    'jenis_sub_laminasi' =>$data['jenis_sub_laminasi']                 
                );            
                $this->db->insert('sub_proses',$ubah_sub_fp);
            }

            $ubah_sub_khusus = array(                                
                    'jenis_sub_lipat' =>$data['jenis_sub_lipat'],  
                    'jenis_sub_susun_gabung' =>$data['jenis_sub_susun_gabung'],  
                    'jenis_sub_laminasi' =>$data['jenis_sub_laminasi']                                   
            );            
            $this->db->set($ubah_sub_khusus);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('sub_proses');


}
    







//// MESIN LAMINASI
    public function get_jadwal_laminasi()
    {
        $this->db->select('
            order.id_order as id_order,
            order.nomor_so as nomor_so,
            order.tanggal_masuk as tanggal_masuk,
            order.deadline as deadline,
            order.nama_pemesan as nama_pemesan,
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status,
            
            laminasi.id_jadwal_laminasi as id_jadwal_laminasi,
            laminasi.status_laminasi as status_laminasi,
            laminasi.id_laminasi as id_laminasi,
            laminasi.hasil_1 as hasil_1,
            laminasi.hasil_2 as hasil_2,            
            laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi'
            
        );           

        $this->db->from('order');                           
        $this->db->join('laminasi','order.id_order = laminasi.id_order' ); 
        $this->db->where('laminasi.tanggal_pelaksanaan_laminasi !=', '0000-00-00');    
        $this->db->order_by('laminasi.tanggal_pelaksanaan_laminasi', 'asc');        
        
        $query = $this->db->get();
        return $query;  
}
    public function ambil_data_laminasi($id)
    {
        $this->db->select(
            '   
                laminasi.id_jadwal_laminasi as id_jadwal_laminasi,
                laminasi.hasil_1 as hasil_1,
                laminasi.hasil_2 as hasil_2
            '
        );
        $this->db->from('order');
        $this->db->join('laminasi','laminasi.id_order = order.id_order');    
        $this->db->where('laminasi.id_order', $id);          
        $query = $this->db->get();
        return $query;   
}

public function ambilIDOrder($id_order)
{
    $this->db->select('
        order.id_order as id_order,
        order.nomor_so as nomor_so,
        order.tanggal_masuk as tanggal_masuk,
        order.deadline as deadline,
        order.nama_pemesan as nama_pemesan,
        order.nama_orderan as nama_orderan, 
        order.ukuran as ukuran, 
        order.halaman as halaman, 
        order.oplag as oplag, 
        order.so_status as so_status,
        
        laminasi.jenis_laminasi as jenis_laminasi,
        laminasi.status_laminasi as status_laminasi,
        laminasi.id_jadwal_laminasi as id_jadwal_laminasi,
        laminasi.id_laminasi as id_laminasi,
        laminasi.hasil_1 as hasil_1,
        laminasi.hasil_2 as hasil_2,            
        laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi'
        
    );           

    $this->db->from('order');                           
    $this->db->join('laminasi','order.id_order = laminasi.id_order' ); 
    $this->db->where('laminasi.tanggal_pelaksanaan_laminasi !=', '0000-00-00');    
    $this->db->where('laminasi.id_order', $id_order);
    $this->db->order_by('laminasi.tanggal_pelaksanaan_laminasi', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

    public function edit_laminasi($id)
    {
        $this->db->select('
            order.id_order as id_order,
            order.nomor_so as nomor_so,
            order.tanggal_masuk as tanggal_masuk,
            order.deadline as deadline,
            order.nama_pemesan as nama_pemesan,
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status,
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,            
            finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,

            laminasi.status_laminasi as status_laminasi,            
            mbo.status_mbo as status_mbo,
            shoe.status_shoe as status_shoe,
            susun.status_susun as status_susun,
            sub_proses.status_sub as status_sub,

            laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi,    
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mbo,
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_shoe,
            susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_susun,
            sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub,

            laminasi.id_laminasi as id_laminasi,
            laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi,                        
            laminasi.keterangan_jadwal_fp_laminasi as keterangan_jadwal_fp_laminasi,
            laminasi.jenis_laminasi as jenis_laminasi,
            laminasi.tanggal_pengerjaan_1 as tanggal_pengerjaan_1,
            laminasi.hasil_1 as hasil_1,
            laminasi.rejek_1 as rejek_1,
            laminasi.operator_1 as operator_1,
            laminasi.kru_1 as kru_1,
            laminasi.keterangan_1 as keterangan_1,
            laminasi.tanggal_pengerjaan_2 as tanggal_pengerjaan_2,
            laminasi.hasil_2 as hasil_2,
            laminasi.rejek_2 as rejek_2,
            laminasi.operator_2 as operator_2,
            laminasi.kru_2 as kru_2,
            laminasi.keterangan_2 as keterangan_2                           
            '
        );           
        // $this->db->select_max('laminasi.id_jadwal_laminasi');
        $this->db->from('order');                           

        $this->db->join('laminasi','order.id_order = laminasi.id_order' );         
        $this->db->join('shoe','order.id_order = shoe.id_order' );
        $this->db->join('mbo','order.id_order = mbo.id_order' );
        $this->db->join('susun','order.id_order = susun.id_order' );
        $this->db->join('sub_proses','order.id_order = sub_proses.id_order' );

        $this->db->join('finishing','order.id_order = finishing.id_order' ); 
        $this->db->where('laminasi.id_laminasi', $id);   
        $this->db->limit(1);         
        
        $query = $this->db->get();
        return $query;  
}

    public function proses_edit_laminasi($data)
	{
            $ubah_laminasi = array(                                                                         
                'tanggal_pelaksanaan_laminasi' =>$data['tanggal_pelaksanaan_laminasi'],                                     
                'keterangan_jadwal_fp_laminasi' =>$data['keterangan_jadwal_fp_laminasi'],                   
                'tanggal_pengerjaan_1' =>$data['tanggal_pengerjaan_1'],   
                'hasil_1' =>$data['hasil_1'],   
                'rejek_1' =>$data['rejek_1'],   
                'operator_1' =>$data['operator_1'],   
                'kru_1' =>$data['kru_1'],   
                'keterangan_1' =>$data['keterangan_1'],   
                'tanggal_pengerjaan_2' =>$data['tanggal_pengerjaan_2'],   
                'hasil_2' =>$data['hasil_2'],   
                'rejek_2' =>$data['rejek_2'],   
                'operator_2' =>$data['operator_2'],   
                'kru_2' =>$data['kru_2'],   
                'keterangan_2' =>$data['keterangan_2']                  

            );                        
            $this->db->set($ubah_laminasi);
            $this->db->where('id_laminasi',$data['id_laminasi']);
            $this->db->update('laminasi');  

            $ubah_laminasi_khusus = array(                                                                                           
                'status_laminasi' =>$data['status_laminasi'],                   
                'jenis_laminasi' =>$data['jenis_laminasi'],                              
            );                        
            $this->db->set($ubah_laminasi_khusus);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('laminasi');  

}
    public function proses_tambah_laminasi($data)
	{
            $tambah_jadwal_laminasi = array(                                                                         
                'id_order' =>$data['id_order'],                                   
                'tanggal_pelaksanaan_laminasi' =>$data['tanggal_pelaksanaan_laminasi'],   
                'id_jadwal_laminasi' =>$data['id_jadwal_laminasi'],   
                'status_laminasi' =>$data['status_laminasi'],   
                'keterangan_jadwal_fp_laminasi' =>$data['keterangan_jadwal_fp_laminasi'],   
                'jenis_laminasi' =>$data['jenis_laminasi'],   
                'tanggal_pengerjaan_1' =>$data['tanggal_pengerjaan_1'],   
                'hasil_1' =>$data['hasil_1'],   
                'rejek_1' =>$data['rejek_1'],   
                'operator_1' =>$data['operator_1'],   
                'kru_1' =>$data['kru_1'],   
                'keterangan_1' =>$data['keterangan_1'],   
                'tanggal_pengerjaan_2' =>$data['tanggal_pengerjaan_2'],   
                'hasil_2' =>$data['hasil_2'],   
                'rejek_2' =>$data['rejek_2'],   
                'operator_2' =>$data['operator_2'],   
                'kru_2' =>$data['kru_2'],   
                'keterangan_2' =>$data['keterangan_2']                  

            );                                                          
            $this->db->insert('laminasi',$tambah_jadwal_laminasi);

}


////MESIN MBO

    public function get_jadwal_mbo()
    {
        $this->db->select('
            order.id_order as id_order,
            order.nomor_so as nomor_so,
            order.tanggal_masuk as tanggal_masuk,
            order.deadline as deadline,
            order.nama_pemesan as nama_pemesan,
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status,
            
            mbo.hasil_lipatan_lembar_1 as hasil_lipatan_lembar_1,                   
            mbo.hasil_lipatan_lembar_2 as hasil_lipatan_lembar_2,
            mbo.hasil_lipatan_lembar_3 as hasil_lipatan_lembar_3,
            mbo.hasil_lipatan_lembar_4 as hasil_lipatan_lembar_4,
            mbo.hasil_lipatan_lembar_5 as hasil_lipatan_lembar_5,
            mbo.hasil_lipatan_lembar_6 as hasil_lipatan_lembar_6,
            mbo.hasil_lipatan_lembar_7 as hasil_lipatan_lembar_7,
            mbo.hasil_lipatan_lembar_8 as hasil_lipatan_lembar_8,
            mbo.hasil_lipatan_lembar_9 as hasil_lipatan_lembar_9,
            mbo.hasil_lipatan_lembar_10 as hasil_lipatan_lembar_10,
            mbo.hasil_lipatan_lembar_11 as hasil_lipatan_lembar_11,
            mbo.hasil_lipatan_lembar_12 as hasil_lipatan_lembar_12,
            mbo.hasil_lipatan_lembar_13 as hasil_lipatan_lembar_13,
            mbo.hasil_lipatan_lembar_14 as hasil_lipatan_lembar_14,
            mbo.hasil_lipatan_lembar_15 as hasil_lipatan_lembar_15,
            mbo.hasil_lipatan_lembar_16 as hasil_lipatan_lembar_16,
            mbo.hasil_lipatan_lembar_17 as hasil_lipatan_lembar_17,
            mbo.hasil_lipatan_lembar_18 as hasil_lipatan_lembar_18,
            mbo.hasil_lipatan_lembar_19 as hasil_lipatan_lembar_19,
            mbo.hasil_lipatan_lembar_20 as hasil_lipatan_lembar_20,

            mbo.id_jadwal_mbo as id_jadwal_mbo,
            mbo.status_mbo as status_mbo,
            mbo.id_mbo as id_mbo,               
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mbo'
            
        );           

        $this->db->from('order');                           
        $this->db->join('mbo','order.id_order = mbo.id_order' ); 
        $this->db->where('mbo.tanggal_pelaksanaan_mesin_mbo !=', '0000-00-00');    
        $this->db->order_by('mbo.tanggal_pelaksanaan_mesin_mbo', 'asc');        
        
        $query = $this->db->get();
        return $query;  
}

    public function ambil_data_mbo($id)
        {
            $this->db->select(
                '   
                    mbo.id_jadwal_mbo as id_jadwal_mbo,
                    mbo.hasil_lipatan_lembar_1 as hasil_lipatan_lembar_1,                   
                    mbo.hasil_lipatan_lembar_2 as hasil_lipatan_lembar_2,
                    mbo.hasil_lipatan_lembar_3 as hasil_lipatan_lembar_3,
                    mbo.hasil_lipatan_lembar_4 as hasil_lipatan_lembar_4,
                    mbo.hasil_lipatan_lembar_5 as hasil_lipatan_lembar_5,
                    mbo.hasil_lipatan_lembar_6 as hasil_lipatan_lembar_6,
                    mbo.hasil_lipatan_lembar_7 as hasil_lipatan_lembar_7,
                    mbo.hasil_lipatan_lembar_8 as hasil_lipatan_lembar_8,
                    mbo.hasil_lipatan_lembar_9 as hasil_lipatan_lembar_9,
                    mbo.hasil_lipatan_lembar_10 as hasil_lipatan_lembar_10,
                    mbo.hasil_lipatan_lembar_11 as hasil_lipatan_lembar_11,
                    mbo.hasil_lipatan_lembar_12 as hasil_lipatan_lembar_12,
                    mbo.hasil_lipatan_lembar_13 as hasil_lipatan_lembar_13,
                    mbo.hasil_lipatan_lembar_14 as hasil_lipatan_lembar_14,
                    mbo.hasil_lipatan_lembar_15 as hasil_lipatan_lembar_15,
                    mbo.hasil_lipatan_lembar_16 as hasil_lipatan_lembar_16,
                    mbo.hasil_lipatan_lembar_17 as hasil_lipatan_lembar_17,
                    mbo.hasil_lipatan_lembar_18 as hasil_lipatan_lembar_18,
                    mbo.hasil_lipatan_lembar_19 as hasil_lipatan_lembar_19,
                    mbo.hasil_lipatan_lembar_20 as hasil_lipatan_lembar_20        
                    
                '
            );
            $this->db->from('order');
            $this->db->join('mbo','mbo.id_order = order.id_order');    
            $this->db->where('mbo.id_order', $id);          
            $query = $this->db->get();
            return $query;   
}
    public function ambilIDOrder_mbo($id_order)
    {
        $this->db->select('
            order.id_order as id_order,
            order.nomor_so as nomor_so,
            order.tanggal_masuk as tanggal_masuk,
            order.deadline as deadline,
            order.nama_pemesan as nama_pemesan,
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status,
            
            mbo.id_jadwal_mbo as id_jadwal_mbo,
            mbo.id_mbo as id_mbo,  
            mbo.status_mbo as status_mbo,
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mbo,                            
            
            mbo.lipat_lembar_1 as lipat_lembar_1,                   
            mbo.lipat_lembar_2 as lipat_lembar_2,
            mbo.lipat_lembar_3 as lipat_lembar_3,
            mbo.lipat_lembar_4 as lipat_lembar_4,
            mbo.lipat_lembar_5 as lipat_lembar_5,
            mbo.lipat_lembar_6 as lipat_lembar_6,
            mbo.lipat_lembar_7 as lipat_lembar_7,
            mbo.lipat_lembar_8 as lipat_lembar_8,
            mbo.lipat_lembar_9 as lipat_lembar_9,
            mbo.lipat_lembar_10 as lipat_lembar_10,
            mbo.lipat_lembar_11 as lipat_lembar_11,
            mbo.lipat_lembar_12 as lipat_lembar_12,
            mbo.lipat_lembar_13 as lipat_lembar_13,
            mbo.lipat_lembar_14 as lipat_lembar_14,
            mbo.lipat_lembar_15 as lipat_lembar_15,
            mbo.lipat_lembar_16 as lipat_lembar_16,
            mbo.lipat_lembar_17 as lipat_lembar_17,
            mbo.lipat_lembar_18 as lipat_lembar_18,
            mbo.lipat_lembar_19 as lipat_lembar_19,
            mbo.lipat_lembar_20 as lipat_lembar_20,

            mbo.hasil_lipatan_lembar_1 as hasil_lipatan_lembar_1,                   
            mbo.hasil_lipatan_lembar_2 as hasil_lipatan_lembar_2,
            mbo.hasil_lipatan_lembar_3 as hasil_lipatan_lembar_3,
            mbo.hasil_lipatan_lembar_4 as hasil_lipatan_lembar_4,
            mbo.hasil_lipatan_lembar_5 as hasil_lipatan_lembar_5,
            mbo.hasil_lipatan_lembar_6 as hasil_lipatan_lembar_6,
            mbo.hasil_lipatan_lembar_7 as hasil_lipatan_lembar_7,
            mbo.hasil_lipatan_lembar_8 as hasil_lipatan_lembar_8,
            mbo.hasil_lipatan_lembar_9 as hasil_lipatan_lembar_9,
            mbo.hasil_lipatan_lembar_10 as hasil_lipatan_lembar_10,
            mbo.hasil_lipatan_lembar_11 as hasil_lipatan_lembar_11,
            mbo.hasil_lipatan_lembar_12 as hasil_lipatan_lembar_12,
            mbo.hasil_lipatan_lembar_13 as hasil_lipatan_lembar_13,
            mbo.hasil_lipatan_lembar_14 as hasil_lipatan_lembar_14,
            mbo.hasil_lipatan_lembar_15 as hasil_lipatan_lembar_15,
            mbo.hasil_lipatan_lembar_16 as hasil_lipatan_lembar_16,
            mbo.hasil_lipatan_lembar_17 as hasil_lipatan_lembar_17,
            mbo.hasil_lipatan_lembar_18 as hasil_lipatan_lembar_18,
            mbo.hasil_lipatan_lembar_19 as hasil_lipatan_lembar_19,
            mbo.hasil_lipatan_lembar_20 as hasil_lipatan_lembar_20'           
        );           

        $this->db->from('order');                           
        $this->db->join('mbo','order.id_order = mbo.id_order' ); 
        $this->db->where('mbo.tanggal_pelaksanaan_mesin_mbo !=', '0000-00-00');    
        $this->db->where('mbo.id_order', $id_order);
        $this->db->order_by('mbo.tanggal_pelaksanaan_mesin_mbo', 'asc');        
        
        $query = $this->db->get();
        return $query;  
}
public function edit_mbo($id)
    {
        $this->db->select('
            order.id_order as id_order,
            order.nomor_so as nomor_so,
            order.tanggal_masuk as tanggal_masuk,
            order.deadline as deadline,
            order.nama_pemesan as nama_pemesan,
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status,
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,            
            finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,

            laminasi.status_laminasi as status_laminasi,            
            mbo.status_mbo as status_mbo,
            shoe.status_shoe as status_shoe,
            susun.status_susun as status_susun,
            sub_proses.status_sub as status_sub,

            laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi,    
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mbo,
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_shoe,
            susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_susun,
            sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub,

            mbo.id_mbo as id_mbo,
            mbo.id_jadwal_mbo as id_jadwal_mbo,
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mbo,
            mbo.status_mbo as status_mbo,
            mbo.keterangan_jadwal_fp_mbo as keterangan_jadwal_fp_mbo,
            
            mbo.lipat_lembar_1 as lipat_lembar_1,                   
            mbo.lipat_lembar_2 as lipat_lembar_2,
            mbo.lipat_lembar_3 as lipat_lembar_3,
            mbo.lipat_lembar_4 as lipat_lembar_4,
            mbo.lipat_lembar_5 as lipat_lembar_5,
            mbo.lipat_lembar_6 as lipat_lembar_6,
            mbo.lipat_lembar_7 as lipat_lembar_7,
            mbo.lipat_lembar_8 as lipat_lembar_8,
            mbo.lipat_lembar_9 as lipat_lembar_9,
            mbo.lipat_lembar_10 as lipat_lembar_10,
            mbo.lipat_lembar_11 as lipat_lembar_11,
            mbo.lipat_lembar_12 as lipat_lembar_12,
            mbo.lipat_lembar_13 as lipat_lembar_13,
            mbo.lipat_lembar_14 as lipat_lembar_14,
            mbo.lipat_lembar_15 as lipat_lembar_15,
            mbo.lipat_lembar_16 as lipat_lembar_16,
            mbo.lipat_lembar_17 as lipat_lembar_17,
            mbo.lipat_lembar_18 as lipat_lembar_18,
            mbo.lipat_lembar_19 as lipat_lembar_19,
            mbo.lipat_lembar_20 as lipat_lembar_20,

            mbo.hasil_lipatan_lembar_1 as hasil_lipatan_lembar_1,                   
            mbo.hasil_lipatan_lembar_2 as hasil_lipatan_lembar_2,
            mbo.hasil_lipatan_lembar_3 as hasil_lipatan_lembar_3,
            mbo.hasil_lipatan_lembar_4 as hasil_lipatan_lembar_4,
            mbo.hasil_lipatan_lembar_5 as hasil_lipatan_lembar_5,
            mbo.hasil_lipatan_lembar_6 as hasil_lipatan_lembar_6,
            mbo.hasil_lipatan_lembar_7 as hasil_lipatan_lembar_7,
            mbo.hasil_lipatan_lembar_8 as hasil_lipatan_lembar_8,
            mbo.hasil_lipatan_lembar_9 as hasil_lipatan_lembar_9,
            mbo.hasil_lipatan_lembar_10 as hasil_lipatan_lembar_10,
            mbo.hasil_lipatan_lembar_11 as hasil_lipatan_lembar_11,
            mbo.hasil_lipatan_lembar_12 as hasil_lipatan_lembar_12,
            mbo.hasil_lipatan_lembar_13 as hasil_lipatan_lembar_13,
            mbo.hasil_lipatan_lembar_14 as hasil_lipatan_lembar_14,
            mbo.hasil_lipatan_lembar_15 as hasil_lipatan_lembar_15,
            mbo.hasil_lipatan_lembar_16 as hasil_lipatan_lembar_16,
            mbo.hasil_lipatan_lembar_17 as hasil_lipatan_lembar_17,
            mbo.hasil_lipatan_lembar_18 as hasil_lipatan_lembar_18,
            mbo.hasil_lipatan_lembar_19 as hasil_lipatan_lembar_19,
            mbo.hasil_lipatan_lembar_20 as hasil_lipatan_lembar_20,

            mbo.operator_lembar_1 as operator_lembar_1,                   
            mbo.operator_lembar_2 as operator_lembar_2,
            mbo.operator_lembar_3 as operator_lembar_3,
            mbo.operator_lembar_4 as operator_lembar_4,
            mbo.operator_lembar_5 as operator_lembar_5,
            mbo.operator_lembar_6 as operator_lembar_6,
            mbo.operator_lembar_7 as operator_lembar_7,
            mbo.operator_lembar_8 as operator_lembar_8,
            mbo.operator_lembar_9 as operator_lembar_9,
            mbo.operator_lembar_10 as operator_lembar_10,
            mbo.operator_lembar_11 as operator_lembar_11,
            mbo.operator_lembar_12 as operator_lembar_12,
            mbo.operator_lembar_13 as operator_lembar_13,
            mbo.operator_lembar_14 as operator_lembar_14,
            mbo.operator_lembar_15 as operator_lembar_15,
            mbo.operator_lembar_16 as operator_lembar_16,
            mbo.operator_lembar_17 as operator_lembar_17,
            mbo.operator_lembar_18 as operator_lembar_18,
            mbo.operator_lembar_19 as operator_lembar_19,
            mbo.operator_lembar_20 as operator_lembar_20,

            mbo.tanggal_pengerjaan_lembar_1 as tanggal_pengerjaan_lembar_1,                   
            mbo.tanggal_pengerjaan_lembar_2 as tanggal_pengerjaan_lembar_2,
            mbo.tanggal_pengerjaan_lembar_3 as tanggal_pengerjaan_lembar_3,
            mbo.tanggal_pengerjaan_lembar_4 as tanggal_pengerjaan_lembar_4,
            mbo.tanggal_pengerjaan_lembar_5 as tanggal_pengerjaan_lembar_5,
            mbo.tanggal_pengerjaan_lembar_6 as tanggal_pengerjaan_lembar_6,
            mbo.tanggal_pengerjaan_lembar_7 as tanggal_pengerjaan_lembar_7,
            mbo.tanggal_pengerjaan_lembar_8 as tanggal_pengerjaan_lembar_8,
            mbo.tanggal_pengerjaan_lembar_9 as tanggal_pengerjaan_lembar_9,
            mbo.tanggal_pengerjaan_lembar_10 as tanggal_pengerjaan_lembar_10,
            mbo.tanggal_pengerjaan_lembar_11 as tanggal_pengerjaan_lembar_11,
            mbo.tanggal_pengerjaan_lembar_12 as tanggal_pengerjaan_lembar_12,
            mbo.tanggal_pengerjaan_lembar_13 as tanggal_pengerjaan_lembar_13,
            mbo.tanggal_pengerjaan_lembar_14 as tanggal_pengerjaan_lembar_14,
            mbo.tanggal_pengerjaan_lembar_15 as tanggal_pengerjaan_lembar_15,
            mbo.tanggal_pengerjaan_lembar_16 as tanggal_pengerjaan_lembar_16,
            mbo.tanggal_pengerjaan_lembar_17 as tanggal_pengerjaan_lembar_17,
            mbo.tanggal_pengerjaan_lembar_18 as tanggal_pengerjaan_lembar_18,
            mbo.tanggal_pengerjaan_lembar_19 as tanggal_pengerjaan_lembar_19,
            mbo.tanggal_pengerjaan_lembar_20 as tanggal_pengerjaan_lembar_20,

            mbo.keterangan_lembar_1 as keterangan_lembar_1,                   
            mbo.keterangan_lembar_2 as keterangan_lembar_2,
            mbo.keterangan_lembar_3 as keterangan_lembar_3,
            mbo.keterangan_lembar_4 as keterangan_lembar_4,
            mbo.keterangan_lembar_5 as keterangan_lembar_5,
            mbo.keterangan_lembar_6 as keterangan_lembar_6,
            mbo.keterangan_lembar_7 as keterangan_lembar_7,
            mbo.keterangan_lembar_8 as keterangan_lembar_8,
            mbo.keterangan_lembar_9 as keterangan_lembar_9,
            mbo.keterangan_lembar_10 as keterangan_lembar_10,
            mbo.keterangan_lembar_11 as keterangan_lembar_11,
            mbo.keterangan_lembar_12 as keterangan_lembar_12,
            mbo.keterangan_lembar_13 as keterangan_lembar_13,
            mbo.keterangan_lembar_14 as keterangan_lembar_14,
            mbo.keterangan_lembar_15 as keterangan_lembar_15,
            mbo.keterangan_lembar_16 as keterangan_lembar_16,
            mbo.keterangan_lembar_17 as keterangan_lembar_17,
            mbo.keterangan_lembar_18 as keterangan_lembar_18,
            mbo.keterangan_lembar_19 as keterangan_lembar_19,
            mbo.keterangan_lembar_20 as keterangan_lembar_20

            '
        );           
        // $this->db->select_max('mbo.id_jadwal_mbo');
        $this->db->from('order');               

        $this->db->join('laminasi','order.id_order = laminasi.id_order' );         
        $this->db->join('shoe','order.id_order = shoe.id_order' );
        $this->db->join('mbo','order.id_order = mbo.id_order' );
        $this->db->join('susun','order.id_order = susun.id_order' );
        $this->db->join('sub_proses','order.id_order = sub_proses.id_order' );

        $this->db->join('finishing','order.id_order = finishing.id_order' ); 
        $this->db->where('mbo.id_mbo', $id);  
        $this->db->limit(1);     
        
        $query = $this->db->get();
        // var_dump($query->result());die;
        return $query;  
}
public function proses_edit_mbo($data)
	{
            $ubah_mbo = array(                                                                         
                'tanggal_pelaksanaan_mesin_mbo' =>$data['tanggal_pelaksanaan_mbo'],                                     
                'keterangan_jadwal_fp_mbo' =>$data['keterangan_jadwal_fp_mbo'],                   
                
                'lipat_lembar_1' =>$data['lipat_lembar_1'],  
                'lipat_lembar_2' =>$data['lipat_lembar_2'],
                'lipat_lembar_3' =>$data['lipat_lembar_3'],
                'lipat_lembar_4' =>$data['lipat_lembar_4'],
                'lipat_lembar_5' =>$data['lipat_lembar_5'],
                'lipat_lembar_6' =>$data['lipat_lembar_6'],
                'lipat_lembar_7' =>$data['lipat_lembar_7'],
                'lipat_lembar_8' =>$data['lipat_lembar_8'],
                'lipat_lembar_9' =>$data['lipat_lembar_9'],
                'lipat_lembar_10' =>$data['lipat_lembar_10'],
                'lipat_lembar_11' =>$data['lipat_lembar_11'],
                'lipat_lembar_12' =>$data['lipat_lembar_12'],
                'lipat_lembar_13' =>$data['lipat_lembar_13'],
                'lipat_lembar_14' =>$data['lipat_lembar_14'],
                'lipat_lembar_15' =>$data['lipat_lembar_15'],
                'lipat_lembar_16' =>$data['lipat_lembar_16'],
                'lipat_lembar_17' =>$data['lipat_lembar_17'],
                'lipat_lembar_18' =>$data['lipat_lembar_18'],
                'lipat_lembar_19' =>$data['lipat_lembar_19'],
                'lipat_lembar_20' =>$data['lipat_lembar_20'],

                'hasil_lipatan_lembar_1' =>$data['hasil_lipatan_lembar_1'],  
                'hasil_lipatan_lembar_2' =>$data['hasil_lipatan_lembar_2'],
                'hasil_lipatan_lembar_3' =>$data['hasil_lipatan_lembar_3'],
                'hasil_lipatan_lembar_4' =>$data['hasil_lipatan_lembar_4'],
                'hasil_lipatan_lembar_5' =>$data['hasil_lipatan_lembar_5'],
                'hasil_lipatan_lembar_6' =>$data['hasil_lipatan_lembar_6'],
                'hasil_lipatan_lembar_7' =>$data['hasil_lipatan_lembar_7'],
                'hasil_lipatan_lembar_8' =>$data['hasil_lipatan_lembar_8'],
                'hasil_lipatan_lembar_9' =>$data['hasil_lipatan_lembar_9'],
                'hasil_lipatan_lembar_10' =>$data['hasil_lipatan_lembar_10'],
                'hasil_lipatan_lembar_11' =>$data['hasil_lipatan_lembar_11'],
                'hasil_lipatan_lembar_12' =>$data['hasil_lipatan_lembar_12'],
                'hasil_lipatan_lembar_13' =>$data['hasil_lipatan_lembar_13'],
                'hasil_lipatan_lembar_14' =>$data['hasil_lipatan_lembar_14'],
                'hasil_lipatan_lembar_15' =>$data['hasil_lipatan_lembar_15'],
                'hasil_lipatan_lembar_16' =>$data['hasil_lipatan_lembar_16'],
                'hasil_lipatan_lembar_17' =>$data['hasil_lipatan_lembar_17'],
                'hasil_lipatan_lembar_18' =>$data['hasil_lipatan_lembar_18'],
                'hasil_lipatan_lembar_19' =>$data['hasil_lipatan_lembar_19'],
                'hasil_lipatan_lembar_20' =>$data['hasil_lipatan_lembar_20'],

                'operator_lembar_1' =>$data['operator_lembar_1'],  
                'operator_lembar_2' =>$data['operator_lembar_2'],
                'operator_lembar_3' =>$data['operator_lembar_3'],
                'operator_lembar_4' =>$data['operator_lembar_4'],
                'operator_lembar_5' =>$data['operator_lembar_5'],
                'operator_lembar_6' =>$data['operator_lembar_6'],
                'operator_lembar_7' =>$data['operator_lembar_7'],
                'operator_lembar_8' =>$data['operator_lembar_8'],
                'operator_lembar_9' =>$data['operator_lembar_9'],
                'operator_lembar_10' =>$data['operator_lembar_10'],
                'operator_lembar_11' =>$data['operator_lembar_11'],
                'operator_lembar_12' =>$data['operator_lembar_12'],
                'operator_lembar_13' =>$data['operator_lembar_13'],
                'operator_lembar_14' =>$data['operator_lembar_14'],
                'operator_lembar_15' =>$data['operator_lembar_15'],
                'operator_lembar_16' =>$data['operator_lembar_16'],
                'operator_lembar_17' =>$data['operator_lembar_17'],
                'operator_lembar_18' =>$data['operator_lembar_18'],
                'operator_lembar_19' =>$data['operator_lembar_19'],
                'operator_lembar_20' =>$data['operator_lembar_20'],

                'tanggal_pengerjaan_lembar_1' =>$data['tanggal_pengerjaan_lembar_1'],  
                'tanggal_pengerjaan_lembar_2' =>$data['tanggal_pengerjaan_lembar_2'],
                'tanggal_pengerjaan_lembar_3' =>$data['tanggal_pengerjaan_lembar_3'],
                'tanggal_pengerjaan_lembar_4' =>$data['tanggal_pengerjaan_lembar_4'],
                'tanggal_pengerjaan_lembar_5' =>$data['tanggal_pengerjaan_lembar_5'],
                'tanggal_pengerjaan_lembar_6' =>$data['tanggal_pengerjaan_lembar_6'],
                'tanggal_pengerjaan_lembar_7' =>$data['tanggal_pengerjaan_lembar_7'],
                'tanggal_pengerjaan_lembar_8' =>$data['tanggal_pengerjaan_lembar_8'],
                'tanggal_pengerjaan_lembar_9' =>$data['tanggal_pengerjaan_lembar_9'],
                'tanggal_pengerjaan_lembar_10' =>$data['tanggal_pengerjaan_lembar_10'],
                'tanggal_pengerjaan_lembar_11' =>$data['tanggal_pengerjaan_lembar_11'],
                'tanggal_pengerjaan_lembar_12' =>$data['tanggal_pengerjaan_lembar_12'],
                'tanggal_pengerjaan_lembar_13' =>$data['tanggal_pengerjaan_lembar_13'],
                'tanggal_pengerjaan_lembar_14' =>$data['tanggal_pengerjaan_lembar_14'],
                'tanggal_pengerjaan_lembar_15' =>$data['tanggal_pengerjaan_lembar_15'],
                'tanggal_pengerjaan_lembar_16' =>$data['tanggal_pengerjaan_lembar_16'],
                'tanggal_pengerjaan_lembar_17' =>$data['tanggal_pengerjaan_lembar_17'],
                'tanggal_pengerjaan_lembar_18' =>$data['tanggal_pengerjaan_lembar_18'],
                'tanggal_pengerjaan_lembar_19' =>$data['tanggal_pengerjaan_lembar_19'],
                'tanggal_pengerjaan_lembar_20' =>$data['tanggal_pengerjaan_lembar_20'],

                'keterangan_lembar_1' =>$data['keterangan_lembar_1'],  
                'keterangan_lembar_2' =>$data['keterangan_lembar_2'],
                'keterangan_lembar_3' =>$data['keterangan_lembar_3'],
                'keterangan_lembar_4' =>$data['keterangan_lembar_4'],
                'keterangan_lembar_5' =>$data['keterangan_lembar_5'],
                'keterangan_lembar_6' =>$data['keterangan_lembar_6'],
                'keterangan_lembar_7' =>$data['keterangan_lembar_7'],
                'keterangan_lembar_8' =>$data['keterangan_lembar_8'],
                'keterangan_lembar_9' =>$data['keterangan_lembar_9'],
                'keterangan_lembar_10' =>$data['keterangan_lembar_10'],
                'keterangan_lembar_11' =>$data['keterangan_lembar_11'],
                'keterangan_lembar_12' =>$data['keterangan_lembar_12'],
                'keterangan_lembar_13' =>$data['keterangan_lembar_13'],
                'keterangan_lembar_14' =>$data['keterangan_lembar_14'],
                'keterangan_lembar_15' =>$data['keterangan_lembar_15'],
                'keterangan_lembar_16' =>$data['keterangan_lembar_16'],
                'keterangan_lembar_17' =>$data['keterangan_lembar_17'],
                'keterangan_lembar_18' =>$data['keterangan_lembar_18'],
                'keterangan_lembar_19' =>$data['keterangan_lembar_19'],
                'keterangan_lembar_20' =>$data['keterangan_lembar_20']


            );                        
            $this->db->set($ubah_mbo);
            $this->db->where('id_mbo',$data['id_mbo']);
            $this->db->update('mbo');  

            $ubah_mbo_khusus = array(                                                                                           
                'status_mbo' =>$data['status_mbo'],                                                             
            );                        
            $this->db->set($ubah_mbo_khusus);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('mbo');  

}
public function proses_tambah_mbo($data)
{
        $tambah_jadwal_mbo = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'tanggal_pelaksanaan_mesin_mbo' =>$data['tanggal_pelaksanaan_mbo'],   
            'id_jadwal_mbo' =>$data['id_jadwal_mbo'],   
            'status_mbo' =>$data['status_mbo'],   
            'keterangan_jadwal_fp_mbo' =>$data['keterangan_jadwal_fp_mbo'],               
                
                'lipat_lembar_1' =>$data['lipat_lembar_1'],  
                'lipat_lembar_2' =>$data['lipat_lembar_2'],
                'lipat_lembar_3' =>$data['lipat_lembar_3'],
                'lipat_lembar_4' =>$data['lipat_lembar_4'],
                'lipat_lembar_5' =>$data['lipat_lembar_5'],
                'lipat_lembar_6' =>$data['lipat_lembar_6'],
                'lipat_lembar_7' =>$data['lipat_lembar_7'],
                'lipat_lembar_8' =>$data['lipat_lembar_8'],
                'lipat_lembar_9' =>$data['lipat_lembar_9'],
                'lipat_lembar_10' =>$data['lipat_lembar_10'],
                'lipat_lembar_11' =>$data['lipat_lembar_11'],
                'lipat_lembar_12' =>$data['lipat_lembar_12'],
                'lipat_lembar_13' =>$data['lipat_lembar_13'],
                'lipat_lembar_14' =>$data['lipat_lembar_14'],
                'lipat_lembar_15' =>$data['lipat_lembar_15'],
                'lipat_lembar_16' =>$data['lipat_lembar_16'],
                'lipat_lembar_17' =>$data['lipat_lembar_17'],
                'lipat_lembar_18' =>$data['lipat_lembar_18'],
                'lipat_lembar_19' =>$data['lipat_lembar_19'],
                'lipat_lembar_20' =>$data['lipat_lembar_20'],

                'hasil_lipatan_lembar_1' =>$data['hasil_lipatan_lembar_1'],  
                'hasil_lipatan_lembar_2' =>$data['hasil_lipatan_lembar_2'],
                'hasil_lipatan_lembar_3' =>$data['hasil_lipatan_lembar_3'],
                'hasil_lipatan_lembar_4' =>$data['hasil_lipatan_lembar_4'],
                'hasil_lipatan_lembar_5' =>$data['hasil_lipatan_lembar_5'],
                'hasil_lipatan_lembar_6' =>$data['hasil_lipatan_lembar_6'],
                'hasil_lipatan_lembar_7' =>$data['hasil_lipatan_lembar_7'],
                'hasil_lipatan_lembar_8' =>$data['hasil_lipatan_lembar_8'],
                'hasil_lipatan_lembar_9' =>$data['hasil_lipatan_lembar_9'],
                'hasil_lipatan_lembar_10' =>$data['hasil_lipatan_lembar_10'],
                'hasil_lipatan_lembar_11' =>$data['hasil_lipatan_lembar_11'],
                'hasil_lipatan_lembar_12' =>$data['hasil_lipatan_lembar_12'],
                'hasil_lipatan_lembar_13' =>$data['hasil_lipatan_lembar_13'],
                'hasil_lipatan_lembar_14' =>$data['hasil_lipatan_lembar_14'],
                'hasil_lipatan_lembar_15' =>$data['hasil_lipatan_lembar_15'],
                'hasil_lipatan_lembar_16' =>$data['hasil_lipatan_lembar_16'],
                'hasil_lipatan_lembar_17' =>$data['hasil_lipatan_lembar_17'],
                'hasil_lipatan_lembar_18' =>$data['hasil_lipatan_lembar_18'],
                'hasil_lipatan_lembar_19' =>$data['hasil_lipatan_lembar_19'],
                'hasil_lipatan_lembar_20' =>$data['hasil_lipatan_lembar_20'],

                'operator_lembar_1' =>$data['operator_lembar_1'],  
                'operator_lembar_2' =>$data['operator_lembar_2'],
                'operator_lembar_3' =>$data['operator_lembar_3'],
                'operator_lembar_4' =>$data['operator_lembar_4'],
                'operator_lembar_5' =>$data['operator_lembar_5'],
                'operator_lembar_6' =>$data['operator_lembar_6'],
                'operator_lembar_7' =>$data['operator_lembar_7'],
                'operator_lembar_8' =>$data['operator_lembar_8'],
                'operator_lembar_9' =>$data['operator_lembar_9'],
                'operator_lembar_10' =>$data['operator_lembar_10'],
                'operator_lembar_11' =>$data['operator_lembar_11'],
                'operator_lembar_12' =>$data['operator_lembar_12'],
                'operator_lembar_13' =>$data['operator_lembar_13'],
                'operator_lembar_14' =>$data['operator_lembar_14'],
                'operator_lembar_15' =>$data['operator_lembar_15'],
                'operator_lembar_16' =>$data['operator_lembar_16'],
                'operator_lembar_17' =>$data['operator_lembar_17'],
                'operator_lembar_18' =>$data['operator_lembar_18'],
                'operator_lembar_19' =>$data['operator_lembar_19'],
                'operator_lembar_20' =>$data['operator_lembar_20'],

                'tanggal_pengerjaan_lembar_1' =>$data['tanggal_pengerjaan_lembar_1'],  
                'tanggal_pengerjaan_lembar_2' =>$data['tanggal_pengerjaan_lembar_2'],
                'tanggal_pengerjaan_lembar_3' =>$data['tanggal_pengerjaan_lembar_3'],
                'tanggal_pengerjaan_lembar_4' =>$data['tanggal_pengerjaan_lembar_4'],
                'tanggal_pengerjaan_lembar_5' =>$data['tanggal_pengerjaan_lembar_5'],
                'tanggal_pengerjaan_lembar_6' =>$data['tanggal_pengerjaan_lembar_6'],
                'tanggal_pengerjaan_lembar_7' =>$data['tanggal_pengerjaan_lembar_7'],
                'tanggal_pengerjaan_lembar_8' =>$data['tanggal_pengerjaan_lembar_8'],
                'tanggal_pengerjaan_lembar_9' =>$data['tanggal_pengerjaan_lembar_9'],
                'tanggal_pengerjaan_lembar_10' =>$data['tanggal_pengerjaan_lembar_10'],
                'tanggal_pengerjaan_lembar_11' =>$data['tanggal_pengerjaan_lembar_11'],
                'tanggal_pengerjaan_lembar_12' =>$data['tanggal_pengerjaan_lembar_12'],
                'tanggal_pengerjaan_lembar_13' =>$data['tanggal_pengerjaan_lembar_13'],
                'tanggal_pengerjaan_lembar_14' =>$data['tanggal_pengerjaan_lembar_14'],
                'tanggal_pengerjaan_lembar_15' =>$data['tanggal_pengerjaan_lembar_15'],
                'tanggal_pengerjaan_lembar_16' =>$data['tanggal_pengerjaan_lembar_16'],
                'tanggal_pengerjaan_lembar_17' =>$data['tanggal_pengerjaan_lembar_17'],
                'tanggal_pengerjaan_lembar_18' =>$data['tanggal_pengerjaan_lembar_18'],
                'tanggal_pengerjaan_lembar_19' =>$data['tanggal_pengerjaan_lembar_19'],
                'tanggal_pengerjaan_lembar_20' =>$data['tanggal_pengerjaan_lembar_20'],

                'keterangan_lembar_1' =>$data['keterangan_lembar_1'],  
                'keterangan_lembar_2' =>$data['keterangan_lembar_2'],
                'keterangan_lembar_3' =>$data['keterangan_lembar_3'],
                'keterangan_lembar_4' =>$data['keterangan_lembar_4'],
                'keterangan_lembar_5' =>$data['keterangan_lembar_5'],
                'keterangan_lembar_6' =>$data['keterangan_lembar_6'],
                'keterangan_lembar_7' =>$data['keterangan_lembar_7'],
                'keterangan_lembar_8' =>$data['keterangan_lembar_8'],
                'keterangan_lembar_9' =>$data['keterangan_lembar_9'],
                'keterangan_lembar_10' =>$data['keterangan_lembar_10'],
                'keterangan_lembar_11' =>$data['keterangan_lembar_11'],
                'keterangan_lembar_12' =>$data['keterangan_lembar_12'],
                'keterangan_lembar_13' =>$data['keterangan_lembar_13'],
                'keterangan_lembar_14' =>$data['keterangan_lembar_14'],
                'keterangan_lembar_15' =>$data['keterangan_lembar_15'],
                'keterangan_lembar_16' =>$data['keterangan_lembar_16'],
                'keterangan_lembar_17' =>$data['keterangan_lembar_17'],
                'keterangan_lembar_18' =>$data['keterangan_lembar_18'],
                'keterangan_lembar_19' =>$data['keterangan_lembar_19'],
                'keterangan_lembar_20' =>$data['keterangan_lembar_20']

        );                                                          
        $this->db->insert('mbo',$tambah_jadwal_mbo);

}

// MESIN SHOE
        public function get_jadwal_shoe()
        {
            $this->db->select('
                order.id_order as id_order,
                order.nomor_so as nomor_so,
                order.tanggal_masuk as tanggal_masuk,
                order.deadline as deadline,
                order.nama_pemesan as nama_pemesan,
                order.nama_orderan as nama_orderan, 
                order.ukuran as ukuran, 
                order.halaman as halaman, 
                order.oplag as oplag, 
                order.so_status as so_status,

                shoe.hasil_lipatan_lembar_1 as hasil_lipatan_lembar_1,                   
                shoe.hasil_lipatan_lembar_2 as hasil_lipatan_lembar_2,
                shoe.hasil_lipatan_lembar_3 as hasil_lipatan_lembar_3,
                shoe.hasil_lipatan_lembar_4 as hasil_lipatan_lembar_4,
                shoe.hasil_lipatan_lembar_5 as hasil_lipatan_lembar_5,
                shoe.hasil_lipatan_lembar_6 as hasil_lipatan_lembar_6,
                shoe.hasil_lipatan_lembar_7 as hasil_lipatan_lembar_7,
                shoe.hasil_lipatan_lembar_8 as hasil_lipatan_lembar_8,
                shoe.hasil_lipatan_lembar_9 as hasil_lipatan_lembar_9,
                shoe.hasil_lipatan_lembar_10 as hasil_lipatan_lembar_10,
                shoe.hasil_lipatan_lembar_11 as hasil_lipatan_lembar_11,
                shoe.hasil_lipatan_lembar_12 as hasil_lipatan_lembar_12,
                shoe.hasil_lipatan_lembar_13 as hasil_lipatan_lembar_13,
                shoe.hasil_lipatan_lembar_14 as hasil_lipatan_lembar_14,
                shoe.hasil_lipatan_lembar_15 as hasil_lipatan_lembar_15,
                shoe.hasil_lipatan_lembar_16 as hasil_lipatan_lembar_16,
                shoe.hasil_lipatan_lembar_17 as hasil_lipatan_lembar_17,
                shoe.hasil_lipatan_lembar_18 as hasil_lipatan_lembar_18,
                shoe.hasil_lipatan_lembar_19 as hasil_lipatan_lembar_19,
                shoe.hasil_lipatan_lembar_20 as hasil_lipatan_lembar_20,
                
                shoe.id_jadwal_shoe as id_jadwal_shoe,
                shoe.status_shoe as status_shoe,
                shoe.id_shoe as id_shoe,               
                shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_shoe'
                
            );           

            $this->db->from('order');                           
            $this->db->join('shoe','order.id_order = shoe.id_order' ); 
            $this->db->where('shoe.tanggal_pelaksanaan_mesin_shoe !=', '0000-00-00');    
            $this->db->order_by('shoe.tanggal_pelaksanaan_mesin_shoe', 'asc');        
            
            $query = $this->db->get();
            return $query;  
}
public function ambil_data_shoe($id)
{
    $this->db->select(
        '   
            shoe.id_jadwal_shoe as id_jadwal_shoe,
            shoe.hasil_lipatan_lembar_1 as hasil_lipatan_lembar_1,                   
            shoe.hasil_lipatan_lembar_2 as hasil_lipatan_lembar_2,
            shoe.hasil_lipatan_lembar_3 as hasil_lipatan_lembar_3,
            shoe.hasil_lipatan_lembar_4 as hasil_lipatan_lembar_4,
            shoe.hasil_lipatan_lembar_5 as hasil_lipatan_lembar_5,
            shoe.hasil_lipatan_lembar_6 as hasil_lipatan_lembar_6,
            shoe.hasil_lipatan_lembar_7 as hasil_lipatan_lembar_7,
            shoe.hasil_lipatan_lembar_8 as hasil_lipatan_lembar_8,
            shoe.hasil_lipatan_lembar_9 as hasil_lipatan_lembar_9,
            shoe.hasil_lipatan_lembar_10 as hasil_lipatan_lembar_10,
            shoe.hasil_lipatan_lembar_11 as hasil_lipatan_lembar_11,
            shoe.hasil_lipatan_lembar_12 as hasil_lipatan_lembar_12,
            shoe.hasil_lipatan_lembar_13 as hasil_lipatan_lembar_13,
            shoe.hasil_lipatan_lembar_14 as hasil_lipatan_lembar_14,
            shoe.hasil_lipatan_lembar_15 as hasil_lipatan_lembar_15,
            shoe.hasil_lipatan_lembar_16 as hasil_lipatan_lembar_16,
            shoe.hasil_lipatan_lembar_17 as hasil_lipatan_lembar_17,
            shoe.hasil_lipatan_lembar_18 as hasil_lipatan_lembar_18,
            shoe.hasil_lipatan_lembar_19 as hasil_lipatan_lembar_19,
            shoe.hasil_lipatan_lembar_20 as hasil_lipatan_lembar_20    
            
        '
    );
    $this->db->from('order');
    $this->db->join('shoe','shoe.id_order = order.id_order');    
    $this->db->where('shoe.id_order', $id);          
    $query = $this->db->get();
    return $query;   
}


    public function ambilIDOrder_shoe($id_order)
    {
        $this->db->select('
            order.id_order as id_order,
            order.nomor_so as nomor_so,
            order.tanggal_masuk as tanggal_masuk,
            order.deadline as deadline,
            order.nama_pemesan as nama_pemesan,
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status,
            
            shoe.id_jadwal_shoe as id_jadwal_shoe,
            shoe.id_shoe as id_shoe,    
            shoe.status_shoe as status_shoe,
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_shoe,                          
            
            shoe.lipat_lembar_1 as lipat_lembar_1,                   
            shoe.lipat_lembar_2 as lipat_lembar_2,
            shoe.lipat_lembar_3 as lipat_lembar_3,
            shoe.lipat_lembar_4 as lipat_lembar_4,
            shoe.lipat_lembar_5 as lipat_lembar_5,
            shoe.lipat_lembar_6 as lipat_lembar_6,
            shoe.lipat_lembar_7 as lipat_lembar_7,
            shoe.lipat_lembar_8 as lipat_lembar_8,
            shoe.lipat_lembar_9 as lipat_lembar_9,
            shoe.lipat_lembar_10 as lipat_lembar_10,
            shoe.lipat_lembar_11 as lipat_lembar_11,
            shoe.lipat_lembar_12 as lipat_lembar_12,
            shoe.lipat_lembar_13 as lipat_lembar_13,
            shoe.lipat_lembar_14 as lipat_lembar_14,
            shoe.lipat_lembar_15 as lipat_lembar_15,
            shoe.lipat_lembar_16 as lipat_lembar_16,
            shoe.lipat_lembar_17 as lipat_lembar_17,
            shoe.lipat_lembar_18 as lipat_lembar_18,
            shoe.lipat_lembar_19 as lipat_lembar_19,
            shoe.lipat_lembar_20 as lipat_lembar_20,

            shoe.hasil_lipatan_lembar_1 as hasil_lipatan_lembar_1,                   
            shoe.hasil_lipatan_lembar_2 as hasil_lipatan_lembar_2,
            shoe.hasil_lipatan_lembar_3 as hasil_lipatan_lembar_3,
            shoe.hasil_lipatan_lembar_4 as hasil_lipatan_lembar_4,
            shoe.hasil_lipatan_lembar_5 as hasil_lipatan_lembar_5,
            shoe.hasil_lipatan_lembar_6 as hasil_lipatan_lembar_6,
            shoe.hasil_lipatan_lembar_7 as hasil_lipatan_lembar_7,
            shoe.hasil_lipatan_lembar_8 as hasil_lipatan_lembar_8,
            shoe.hasil_lipatan_lembar_9 as hasil_lipatan_lembar_9,
            shoe.hasil_lipatan_lembar_10 as hasil_lipatan_lembar_10,
            shoe.hasil_lipatan_lembar_11 as hasil_lipatan_lembar_11,
            shoe.hasil_lipatan_lembar_12 as hasil_lipatan_lembar_12,
            shoe.hasil_lipatan_lembar_13 as hasil_lipatan_lembar_13,
            shoe.hasil_lipatan_lembar_14 as hasil_lipatan_lembar_14,
            shoe.hasil_lipatan_lembar_15 as hasil_lipatan_lembar_15,
            shoe.hasil_lipatan_lembar_16 as hasil_lipatan_lembar_16,
            shoe.hasil_lipatan_lembar_17 as hasil_lipatan_lembar_17,
            shoe.hasil_lipatan_lembar_18 as hasil_lipatan_lembar_18,
            shoe.hasil_lipatan_lembar_19 as hasil_lipatan_lembar_19,
            shoe.hasil_lipatan_lembar_20 as hasil_lipatan_lembar_20'           
        );           

        $this->db->from('order');                           
        $this->db->join('shoe','order.id_order = shoe.id_order' ); 
        $this->db->where('shoe.tanggal_pelaksanaan_mesin_shoe !=', '0000-00-00');    
        $this->db->where('shoe.id_order', $id_order);
        $this->db->order_by('shoe.tanggal_pelaksanaan_mesin_shoe', 'asc');        
        
        $query = $this->db->get();
        return $query;  
}
public function edit_shoe($id)
    {
        $this->db->select('
            order.id_order as id_order,
            order.nomor_so as nomor_so,
            order.tanggal_masuk as tanggal_masuk,
            order.deadline as deadline,
            order.nama_pemesan as nama_pemesan,
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status,
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,            
            finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,
            
            laminasi.status_laminasi as status_laminasi,            
            mbo.status_mbo as status_mbo,
            shoe.status_shoe as status_shoe,
            susun.status_susun as status_susun,
            sub_proses.status_sub as status_sub,

            laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi,    
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mbo,
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_shoe,
            susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_susun,
            sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub,

            shoe.id_shoe as id_shoe,
            shoe.id_jadwal_shoe as id_jadwal_shoe,
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_shoe,
            shoe.status_shoe as status_shoe,
            shoe.keterangan_jadwal_fp_shoe as keterangan_jadwal_fp_shoe,
            
            shoe.lipat_lembar_1 as lipat_lembar_1,                   
            shoe.lipat_lembar_2 as lipat_lembar_2,
            shoe.lipat_lembar_3 as lipat_lembar_3,
            shoe.lipat_lembar_4 as lipat_lembar_4,
            shoe.lipat_lembar_5 as lipat_lembar_5,
            shoe.lipat_lembar_6 as lipat_lembar_6,
            shoe.lipat_lembar_7 as lipat_lembar_7,
            shoe.lipat_lembar_8 as lipat_lembar_8,
            shoe.lipat_lembar_9 as lipat_lembar_9,
            shoe.lipat_lembar_10 as lipat_lembar_10,
            shoe.lipat_lembar_11 as lipat_lembar_11,
            shoe.lipat_lembar_12 as lipat_lembar_12,
            shoe.lipat_lembar_13 as lipat_lembar_13,
            shoe.lipat_lembar_14 as lipat_lembar_14,
            shoe.lipat_lembar_15 as lipat_lembar_15,
            shoe.lipat_lembar_16 as lipat_lembar_16,
            shoe.lipat_lembar_17 as lipat_lembar_17,
            shoe.lipat_lembar_18 as lipat_lembar_18,
            shoe.lipat_lembar_19 as lipat_lembar_19,
            shoe.lipat_lembar_20 as lipat_lembar_20,

            shoe.hasil_lipatan_lembar_1 as hasil_lipatan_lembar_1,                   
            shoe.hasil_lipatan_lembar_2 as hasil_lipatan_lembar_2,
            shoe.hasil_lipatan_lembar_3 as hasil_lipatan_lembar_3,
            shoe.hasil_lipatan_lembar_4 as hasil_lipatan_lembar_4,
            shoe.hasil_lipatan_lembar_5 as hasil_lipatan_lembar_5,
            shoe.hasil_lipatan_lembar_6 as hasil_lipatan_lembar_6,
            shoe.hasil_lipatan_lembar_7 as hasil_lipatan_lembar_7,
            shoe.hasil_lipatan_lembar_8 as hasil_lipatan_lembar_8,
            shoe.hasil_lipatan_lembar_9 as hasil_lipatan_lembar_9,
            shoe.hasil_lipatan_lembar_10 as hasil_lipatan_lembar_10,
            shoe.hasil_lipatan_lembar_11 as hasil_lipatan_lembar_11,
            shoe.hasil_lipatan_lembar_12 as hasil_lipatan_lembar_12,
            shoe.hasil_lipatan_lembar_13 as hasil_lipatan_lembar_13,
            shoe.hasil_lipatan_lembar_14 as hasil_lipatan_lembar_14,
            shoe.hasil_lipatan_lembar_15 as hasil_lipatan_lembar_15,
            shoe.hasil_lipatan_lembar_16 as hasil_lipatan_lembar_16,
            shoe.hasil_lipatan_lembar_17 as hasil_lipatan_lembar_17,
            shoe.hasil_lipatan_lembar_18 as hasil_lipatan_lembar_18,
            shoe.hasil_lipatan_lembar_19 as hasil_lipatan_lembar_19,
            shoe.hasil_lipatan_lembar_20 as hasil_lipatan_lembar_20,

            shoe.operator_lembar_1 as operator_lembar_1,                   
            shoe.operator_lembar_2 as operator_lembar_2,
            shoe.operator_lembar_3 as operator_lembar_3,
            shoe.operator_lembar_4 as operator_lembar_4,
            shoe.operator_lembar_5 as operator_lembar_5,
            shoe.operator_lembar_6 as operator_lembar_6,
            shoe.operator_lembar_7 as operator_lembar_7,
            shoe.operator_lembar_8 as operator_lembar_8,
            shoe.operator_lembar_9 as operator_lembar_9,
            shoe.operator_lembar_10 as operator_lembar_10,
            shoe.operator_lembar_11 as operator_lembar_11,
            shoe.operator_lembar_12 as operator_lembar_12,
            shoe.operator_lembar_13 as operator_lembar_13,
            shoe.operator_lembar_14 as operator_lembar_14,
            shoe.operator_lembar_15 as operator_lembar_15,
            shoe.operator_lembar_16 as operator_lembar_16,
            shoe.operator_lembar_17 as operator_lembar_17,
            shoe.operator_lembar_18 as operator_lembar_18,
            shoe.operator_lembar_19 as operator_lembar_19,
            shoe.operator_lembar_20 as operator_lembar_20,

            shoe.tanggal_pengerjaan_lembar_1 as tanggal_pengerjaan_lembar_1,                   
            shoe.tanggal_pengerjaan_lembar_2 as tanggal_pengerjaan_lembar_2,
            shoe.tanggal_pengerjaan_lembar_3 as tanggal_pengerjaan_lembar_3,
            shoe.tanggal_pengerjaan_lembar_4 as tanggal_pengerjaan_lembar_4,
            shoe.tanggal_pengerjaan_lembar_5 as tanggal_pengerjaan_lembar_5,
            shoe.tanggal_pengerjaan_lembar_6 as tanggal_pengerjaan_lembar_6,
            shoe.tanggal_pengerjaan_lembar_7 as tanggal_pengerjaan_lembar_7,
            shoe.tanggal_pengerjaan_lembar_8 as tanggal_pengerjaan_lembar_8,
            shoe.tanggal_pengerjaan_lembar_9 as tanggal_pengerjaan_lembar_9,
            shoe.tanggal_pengerjaan_lembar_10 as tanggal_pengerjaan_lembar_10,
            shoe.tanggal_pengerjaan_lembar_11 as tanggal_pengerjaan_lembar_11,
            shoe.tanggal_pengerjaan_lembar_12 as tanggal_pengerjaan_lembar_12,
            shoe.tanggal_pengerjaan_lembar_13 as tanggal_pengerjaan_lembar_13,
            shoe.tanggal_pengerjaan_lembar_14 as tanggal_pengerjaan_lembar_14,
            shoe.tanggal_pengerjaan_lembar_15 as tanggal_pengerjaan_lembar_15,
            shoe.tanggal_pengerjaan_lembar_16 as tanggal_pengerjaan_lembar_16,
            shoe.tanggal_pengerjaan_lembar_17 as tanggal_pengerjaan_lembar_17,
            shoe.tanggal_pengerjaan_lembar_18 as tanggal_pengerjaan_lembar_18,
            shoe.tanggal_pengerjaan_lembar_19 as tanggal_pengerjaan_lembar_19,
            shoe.tanggal_pengerjaan_lembar_20 as tanggal_pengerjaan_lembar_20,

            shoe.keterangan_lembar_1 as keterangan_lembar_1,                   
            shoe.keterangan_lembar_2 as keterangan_lembar_2,
            shoe.keterangan_lembar_3 as keterangan_lembar_3,
            shoe.keterangan_lembar_4 as keterangan_lembar_4,
            shoe.keterangan_lembar_5 as keterangan_lembar_5,
            shoe.keterangan_lembar_6 as keterangan_lembar_6,
            shoe.keterangan_lembar_7 as keterangan_lembar_7,
            shoe.keterangan_lembar_8 as keterangan_lembar_8,
            shoe.keterangan_lembar_9 as keterangan_lembar_9,
            shoe.keterangan_lembar_10 as keterangan_lembar_10,
            shoe.keterangan_lembar_11 as keterangan_lembar_11,
            shoe.keterangan_lembar_12 as keterangan_lembar_12,
            shoe.keterangan_lembar_13 as keterangan_lembar_13,
            shoe.keterangan_lembar_14 as keterangan_lembar_14,
            shoe.keterangan_lembar_15 as keterangan_lembar_15,
            shoe.keterangan_lembar_16 as keterangan_lembar_16,
            shoe.keterangan_lembar_17 as keterangan_lembar_17,
            shoe.keterangan_lembar_18 as keterangan_lembar_18,
            shoe.keterangan_lembar_19 as keterangan_lembar_19,
            shoe.keterangan_lembar_20 as keterangan_lembar_20

            '
        );           
        // $this->db->select_max('shoe.id_jadwal_shoe');
        $this->db->from('order');                           
        
        $this->db->join('laminasi','order.id_order = laminasi.id_order' );         
        $this->db->join('shoe','order.id_order = shoe.id_order' );
        $this->db->join('mbo','order.id_order = mbo.id_order' );
        $this->db->join('susun','order.id_order = susun.id_order' );
        $this->db->join('sub_proses','order.id_order = sub_proses.id_order' );

        $this->db->join('finishing','order.id_order = finishing.id_order' ); 
        $this->db->where('shoe.id_shoe', $id);       
        $this->db->limit(1);         

        $query = $this->db->get();
        return $query;  
}
public function proses_edit_shoe($data)
	{
            $ubah_shoe = array(                                                                         
                'tanggal_pelaksanaan_mesin_shoe' =>$data['tanggal_pelaksanaan_shoe'],                                     
                'keterangan_jadwal_fp_shoe' =>$data['keterangan_jadwal_fp_shoe'],                   
                
                'lipat_lembar_1' =>$data['lipat_lembar_1'],  
                'lipat_lembar_2' =>$data['lipat_lembar_2'],
                'lipat_lembar_3' =>$data['lipat_lembar_3'],
                'lipat_lembar_4' =>$data['lipat_lembar_4'],
                'lipat_lembar_5' =>$data['lipat_lembar_5'],
                'lipat_lembar_6' =>$data['lipat_lembar_6'],
                'lipat_lembar_7' =>$data['lipat_lembar_7'],
                'lipat_lembar_8' =>$data['lipat_lembar_8'],
                'lipat_lembar_9' =>$data['lipat_lembar_9'],
                'lipat_lembar_10' =>$data['lipat_lembar_10'],
                'lipat_lembar_11' =>$data['lipat_lembar_11'],
                'lipat_lembar_12' =>$data['lipat_lembar_12'],
                'lipat_lembar_13' =>$data['lipat_lembar_13'],
                'lipat_lembar_14' =>$data['lipat_lembar_14'],
                'lipat_lembar_15' =>$data['lipat_lembar_15'],
                'lipat_lembar_16' =>$data['lipat_lembar_16'],
                'lipat_lembar_17' =>$data['lipat_lembar_17'],
                'lipat_lembar_18' =>$data['lipat_lembar_18'],
                'lipat_lembar_19' =>$data['lipat_lembar_19'],
                'lipat_lembar_20' =>$data['lipat_lembar_20'],

                'hasil_lipatan_lembar_1' =>$data['hasil_lipatan_lembar_1'],  
                'hasil_lipatan_lembar_2' =>$data['hasil_lipatan_lembar_2'],
                'hasil_lipatan_lembar_3' =>$data['hasil_lipatan_lembar_3'],
                'hasil_lipatan_lembar_4' =>$data['hasil_lipatan_lembar_4'],
                'hasil_lipatan_lembar_5' =>$data['hasil_lipatan_lembar_5'],
                'hasil_lipatan_lembar_6' =>$data['hasil_lipatan_lembar_6'],
                'hasil_lipatan_lembar_7' =>$data['hasil_lipatan_lembar_7'],
                'hasil_lipatan_lembar_8' =>$data['hasil_lipatan_lembar_8'],
                'hasil_lipatan_lembar_9' =>$data['hasil_lipatan_lembar_9'],
                'hasil_lipatan_lembar_10' =>$data['hasil_lipatan_lembar_10'],
                'hasil_lipatan_lembar_11' =>$data['hasil_lipatan_lembar_11'],
                'hasil_lipatan_lembar_12' =>$data['hasil_lipatan_lembar_12'],
                'hasil_lipatan_lembar_13' =>$data['hasil_lipatan_lembar_13'],
                'hasil_lipatan_lembar_14' =>$data['hasil_lipatan_lembar_14'],
                'hasil_lipatan_lembar_15' =>$data['hasil_lipatan_lembar_15'],
                'hasil_lipatan_lembar_16' =>$data['hasil_lipatan_lembar_16'],
                'hasil_lipatan_lembar_17' =>$data['hasil_lipatan_lembar_17'],
                'hasil_lipatan_lembar_18' =>$data['hasil_lipatan_lembar_18'],
                'hasil_lipatan_lembar_19' =>$data['hasil_lipatan_lembar_19'],
                'hasil_lipatan_lembar_20' =>$data['hasil_lipatan_lembar_20'],

                'operator_lembar_1' =>$data['operator_lembar_1'],  
                'operator_lembar_2' =>$data['operator_lembar_2'],
                'operator_lembar_3' =>$data['operator_lembar_3'],
                'operator_lembar_4' =>$data['operator_lembar_4'],
                'operator_lembar_5' =>$data['operator_lembar_5'],
                'operator_lembar_6' =>$data['operator_lembar_6'],
                'operator_lembar_7' =>$data['operator_lembar_7'],
                'operator_lembar_8' =>$data['operator_lembar_8'],
                'operator_lembar_9' =>$data['operator_lembar_9'],
                'operator_lembar_10' =>$data['operator_lembar_10'],
                'operator_lembar_11' =>$data['operator_lembar_11'],
                'operator_lembar_12' =>$data['operator_lembar_12'],
                'operator_lembar_13' =>$data['operator_lembar_13'],
                'operator_lembar_14' =>$data['operator_lembar_14'],
                'operator_lembar_15' =>$data['operator_lembar_15'],
                'operator_lembar_16' =>$data['operator_lembar_16'],
                'operator_lembar_17' =>$data['operator_lembar_17'],
                'operator_lembar_18' =>$data['operator_lembar_18'],
                'operator_lembar_19' =>$data['operator_lembar_19'],
                'operator_lembar_20' =>$data['operator_lembar_20'],

                'tanggal_pengerjaan_lembar_1' =>$data['tanggal_pengerjaan_lembar_1'],  
                'tanggal_pengerjaan_lembar_2' =>$data['tanggal_pengerjaan_lembar_2'],
                'tanggal_pengerjaan_lembar_3' =>$data['tanggal_pengerjaan_lembar_3'],
                'tanggal_pengerjaan_lembar_4' =>$data['tanggal_pengerjaan_lembar_4'],
                'tanggal_pengerjaan_lembar_5' =>$data['tanggal_pengerjaan_lembar_5'],
                'tanggal_pengerjaan_lembar_6' =>$data['tanggal_pengerjaan_lembar_6'],
                'tanggal_pengerjaan_lembar_7' =>$data['tanggal_pengerjaan_lembar_7'],
                'tanggal_pengerjaan_lembar_8' =>$data['tanggal_pengerjaan_lembar_8'],
                'tanggal_pengerjaan_lembar_9' =>$data['tanggal_pengerjaan_lembar_9'],
                'tanggal_pengerjaan_lembar_10' =>$data['tanggal_pengerjaan_lembar_10'],
                'tanggal_pengerjaan_lembar_11' =>$data['tanggal_pengerjaan_lembar_11'],
                'tanggal_pengerjaan_lembar_12' =>$data['tanggal_pengerjaan_lembar_12'],
                'tanggal_pengerjaan_lembar_13' =>$data['tanggal_pengerjaan_lembar_13'],
                'tanggal_pengerjaan_lembar_14' =>$data['tanggal_pengerjaan_lembar_14'],
                'tanggal_pengerjaan_lembar_15' =>$data['tanggal_pengerjaan_lembar_15'],
                'tanggal_pengerjaan_lembar_16' =>$data['tanggal_pengerjaan_lembar_16'],
                'tanggal_pengerjaan_lembar_17' =>$data['tanggal_pengerjaan_lembar_17'],
                'tanggal_pengerjaan_lembar_18' =>$data['tanggal_pengerjaan_lembar_18'],
                'tanggal_pengerjaan_lembar_19' =>$data['tanggal_pengerjaan_lembar_19'],
                'tanggal_pengerjaan_lembar_20' =>$data['tanggal_pengerjaan_lembar_20'],

                'keterangan_lembar_1' =>$data['keterangan_lembar_1'],  
                'keterangan_lembar_2' =>$data['keterangan_lembar_2'],
                'keterangan_lembar_3' =>$data['keterangan_lembar_3'],
                'keterangan_lembar_4' =>$data['keterangan_lembar_4'],
                'keterangan_lembar_5' =>$data['keterangan_lembar_5'],
                'keterangan_lembar_6' =>$data['keterangan_lembar_6'],
                'keterangan_lembar_7' =>$data['keterangan_lembar_7'],
                'keterangan_lembar_8' =>$data['keterangan_lembar_8'],
                'keterangan_lembar_9' =>$data['keterangan_lembar_9'],
                'keterangan_lembar_10' =>$data['keterangan_lembar_10'],
                'keterangan_lembar_11' =>$data['keterangan_lembar_11'],
                'keterangan_lembar_12' =>$data['keterangan_lembar_12'],
                'keterangan_lembar_13' =>$data['keterangan_lembar_13'],
                'keterangan_lembar_14' =>$data['keterangan_lembar_14'],
                'keterangan_lembar_15' =>$data['keterangan_lembar_15'],
                'keterangan_lembar_16' =>$data['keterangan_lembar_16'],
                'keterangan_lembar_17' =>$data['keterangan_lembar_17'],
                'keterangan_lembar_18' =>$data['keterangan_lembar_18'],
                'keterangan_lembar_19' =>$data['keterangan_lembar_19'],
                'keterangan_lembar_20' =>$data['keterangan_lembar_20']


            );                        
            $this->db->set($ubah_shoe);
            $this->db->where('id_shoe',$data['id_shoe']);
            $this->db->update('shoe');  

            $ubah_shoe_khusus = array(                                                                                           
                'status_shoe' =>$data['status_shoe'],                                                             
            );                        
            $this->db->set($ubah_shoe_khusus);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('shoe');  

}
public function proses_tambah_shoe($data)
{
        $tambah_jadwal_shoe = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'tanggal_pelaksanaan_mesin_shoe' =>$data['tanggal_pelaksanaan_shoe'],   
            'id_jadwal_shoe' =>$data['id_jadwal_shoe'],   
            'status_shoe' =>$data['status_shoe'],   
            'keterangan_jadwal_fp_shoe' =>$data['keterangan_jadwal_fp_shoe'],               
                
                'lipat_lembar_1' =>$data['lipat_lembar_1'],  
                'lipat_lembar_2' =>$data['lipat_lembar_2'],
                'lipat_lembar_3' =>$data['lipat_lembar_3'],
                'lipat_lembar_4' =>$data['lipat_lembar_4'],
                'lipat_lembar_5' =>$data['lipat_lembar_5'],
                'lipat_lembar_6' =>$data['lipat_lembar_6'],
                'lipat_lembar_7' =>$data['lipat_lembar_7'],
                'lipat_lembar_8' =>$data['lipat_lembar_8'],
                'lipat_lembar_9' =>$data['lipat_lembar_9'],
                'lipat_lembar_10' =>$data['lipat_lembar_10'],
                'lipat_lembar_11' =>$data['lipat_lembar_11'],
                'lipat_lembar_12' =>$data['lipat_lembar_12'],
                'lipat_lembar_13' =>$data['lipat_lembar_13'],
                'lipat_lembar_14' =>$data['lipat_lembar_14'],
                'lipat_lembar_15' =>$data['lipat_lembar_15'],
                'lipat_lembar_16' =>$data['lipat_lembar_16'],
                'lipat_lembar_17' =>$data['lipat_lembar_17'],
                'lipat_lembar_18' =>$data['lipat_lembar_18'],
                'lipat_lembar_19' =>$data['lipat_lembar_19'],
                'lipat_lembar_20' =>$data['lipat_lembar_20'],

                'hasil_lipatan_lembar_1' =>$data['hasil_lipatan_lembar_1'],  
                'hasil_lipatan_lembar_2' =>$data['hasil_lipatan_lembar_2'],
                'hasil_lipatan_lembar_3' =>$data['hasil_lipatan_lembar_3'],
                'hasil_lipatan_lembar_4' =>$data['hasil_lipatan_lembar_4'],
                'hasil_lipatan_lembar_5' =>$data['hasil_lipatan_lembar_5'],
                'hasil_lipatan_lembar_6' =>$data['hasil_lipatan_lembar_6'],
                'hasil_lipatan_lembar_7' =>$data['hasil_lipatan_lembar_7'],
                'hasil_lipatan_lembar_8' =>$data['hasil_lipatan_lembar_8'],
                'hasil_lipatan_lembar_9' =>$data['hasil_lipatan_lembar_9'],
                'hasil_lipatan_lembar_10' =>$data['hasil_lipatan_lembar_10'],
                'hasil_lipatan_lembar_11' =>$data['hasil_lipatan_lembar_11'],
                'hasil_lipatan_lembar_12' =>$data['hasil_lipatan_lembar_12'],
                'hasil_lipatan_lembar_13' =>$data['hasil_lipatan_lembar_13'],
                'hasil_lipatan_lembar_14' =>$data['hasil_lipatan_lembar_14'],
                'hasil_lipatan_lembar_15' =>$data['hasil_lipatan_lembar_15'],
                'hasil_lipatan_lembar_16' =>$data['hasil_lipatan_lembar_16'],
                'hasil_lipatan_lembar_17' =>$data['hasil_lipatan_lembar_17'],
                'hasil_lipatan_lembar_18' =>$data['hasil_lipatan_lembar_18'],
                'hasil_lipatan_lembar_19' =>$data['hasil_lipatan_lembar_19'],
                'hasil_lipatan_lembar_20' =>$data['hasil_lipatan_lembar_20'],

                'operator_lembar_1' =>$data['operator_lembar_1'],  
                'operator_lembar_2' =>$data['operator_lembar_2'],
                'operator_lembar_3' =>$data['operator_lembar_3'],
                'operator_lembar_4' =>$data['operator_lembar_4'],
                'operator_lembar_5' =>$data['operator_lembar_5'],
                'operator_lembar_6' =>$data['operator_lembar_6'],
                'operator_lembar_7' =>$data['operator_lembar_7'],
                'operator_lembar_8' =>$data['operator_lembar_8'],
                'operator_lembar_9' =>$data['operator_lembar_9'],
                'operator_lembar_10' =>$data['operator_lembar_10'],
                'operator_lembar_11' =>$data['operator_lembar_11'],
                'operator_lembar_12' =>$data['operator_lembar_12'],
                'operator_lembar_13' =>$data['operator_lembar_13'],
                'operator_lembar_14' =>$data['operator_lembar_14'],
                'operator_lembar_15' =>$data['operator_lembar_15'],
                'operator_lembar_16' =>$data['operator_lembar_16'],
                'operator_lembar_17' =>$data['operator_lembar_17'],
                'operator_lembar_18' =>$data['operator_lembar_18'],
                'operator_lembar_19' =>$data['operator_lembar_19'],
                'operator_lembar_20' =>$data['operator_lembar_20'],

                'tanggal_pengerjaan_lembar_1' =>$data['tanggal_pengerjaan_lembar_1'],  
                'tanggal_pengerjaan_lembar_2' =>$data['tanggal_pengerjaan_lembar_2'],
                'tanggal_pengerjaan_lembar_3' =>$data['tanggal_pengerjaan_lembar_3'],
                'tanggal_pengerjaan_lembar_4' =>$data['tanggal_pengerjaan_lembar_4'],
                'tanggal_pengerjaan_lembar_5' =>$data['tanggal_pengerjaan_lembar_5'],
                'tanggal_pengerjaan_lembar_6' =>$data['tanggal_pengerjaan_lembar_6'],
                'tanggal_pengerjaan_lembar_7' =>$data['tanggal_pengerjaan_lembar_7'],
                'tanggal_pengerjaan_lembar_8' =>$data['tanggal_pengerjaan_lembar_8'],
                'tanggal_pengerjaan_lembar_9' =>$data['tanggal_pengerjaan_lembar_9'],
                'tanggal_pengerjaan_lembar_10' =>$data['tanggal_pengerjaan_lembar_10'],
                'tanggal_pengerjaan_lembar_11' =>$data['tanggal_pengerjaan_lembar_11'],
                'tanggal_pengerjaan_lembar_12' =>$data['tanggal_pengerjaan_lembar_12'],
                'tanggal_pengerjaan_lembar_13' =>$data['tanggal_pengerjaan_lembar_13'],
                'tanggal_pengerjaan_lembar_14' =>$data['tanggal_pengerjaan_lembar_14'],
                'tanggal_pengerjaan_lembar_15' =>$data['tanggal_pengerjaan_lembar_15'],
                'tanggal_pengerjaan_lembar_16' =>$data['tanggal_pengerjaan_lembar_16'],
                'tanggal_pengerjaan_lembar_17' =>$data['tanggal_pengerjaan_lembar_17'],
                'tanggal_pengerjaan_lembar_18' =>$data['tanggal_pengerjaan_lembar_18'],
                'tanggal_pengerjaan_lembar_19' =>$data['tanggal_pengerjaan_lembar_19'],
                'tanggal_pengerjaan_lembar_20' =>$data['tanggal_pengerjaan_lembar_20'],

                'keterangan_lembar_1' =>$data['keterangan_lembar_1'],  
                'keterangan_lembar_2' =>$data['keterangan_lembar_2'],
                'keterangan_lembar_3' =>$data['keterangan_lembar_3'],
                'keterangan_lembar_4' =>$data['keterangan_lembar_4'],
                'keterangan_lembar_5' =>$data['keterangan_lembar_5'],
                'keterangan_lembar_6' =>$data['keterangan_lembar_6'],
                'keterangan_lembar_7' =>$data['keterangan_lembar_7'],
                'keterangan_lembar_8' =>$data['keterangan_lembar_8'],
                'keterangan_lembar_9' =>$data['keterangan_lembar_9'],
                'keterangan_lembar_10' =>$data['keterangan_lembar_10'],
                'keterangan_lembar_11' =>$data['keterangan_lembar_11'],
                'keterangan_lembar_12' =>$data['keterangan_lembar_12'],
                'keterangan_lembar_13' =>$data['keterangan_lembar_13'],
                'keterangan_lembar_14' =>$data['keterangan_lembar_14'],
                'keterangan_lembar_15' =>$data['keterangan_lembar_15'],
                'keterangan_lembar_16' =>$data['keterangan_lembar_16'],
                'keterangan_lembar_17' =>$data['keterangan_lembar_17'],
                'keterangan_lembar_18' =>$data['keterangan_lembar_18'],
                'keterangan_lembar_19' =>$data['keterangan_lembar_19'],
                'keterangan_lembar_20' =>$data['keterangan_lembar_20']

        );                                                          
        $this->db->insert('shoe',$tambah_jadwal_shoe);

}

//// MESIN SUSUN
        public function get_jadwal_susun()
        {
            $this->db->select('
                order.id_order as id_order,
                order.nomor_so as nomor_so,
                order.tanggal_masuk as tanggal_masuk,
                order.deadline as deadline,
                order.nama_pemesan as nama_pemesan,
                order.nama_orderan as nama_orderan, 
                order.ukuran as ukuran, 
                order.halaman as halaman, 
                order.oplag as oplag, 
                order.so_status as so_status,
                
                susun.id_jadwal_susun as id_jadwal_susun,
                susun.status_susun as status_susun,
                susun.id_susun as id_susun,
                susun.hasil_1 as hasil_1,
                susun.hasil_2 as hasil_2,            
                susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_susun'          
            );           

            $this->db->from('order');                           
            $this->db->join('susun','order.id_order = susun.id_order' ); 
            $this->db->where('susun.tanggal_pelaksanaan_mesin_susun !=', '0000-00-00');    
            $this->db->order_by('susun.tanggal_pelaksanaan_mesin_susun', 'asc');        
            
            $query = $this->db->get();
            return $query;  
}
        public function ambil_data_susun($id)
        {
            $this->db->select(
                '   
                    susun.id_jadwal_susun as id_jadwal_susun,
                    susun.hasil_1 as hasil_1,
                    susun.hasil_2 as hasil_2
                '
            );
            $this->db->from('order');
            $this->db->join('susun','susun.id_order = order.id_order');    
            $this->db->where('susun.id_order', $id);          
            $query = $this->db->get();
            return $query;   
}

        public function ambilIDOrder_SUSUN($id_order)
        {
            $this->db->select('
                order.id_order as id_order,
                order.nomor_so as nomor_so,
                order.tanggal_masuk as tanggal_masuk,
                order.deadline as deadline,
                order.nama_pemesan as nama_pemesan,
                order.nama_orderan as nama_orderan, 
                order.ukuran as ukuran, 
                order.halaman as halaman, 
                order.oplag as oplag, 
                order.so_status as so_status,
                
                susun.status_susun as status_susun,
                susun.id_jadwal_susun as id_jadwal_susun,
                susun.id_susun as id_susun,
                susun.hasil_1 as hasil_1,
                susun.hasil_2 as hasil_2,            
                susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_susun'
                
            );           

            $this->db->from('order');                           
            $this->db->join('susun','order.id_order = susun.id_order' ); 
            $this->db->where('susun.tanggal_pelaksanaan_mesin_susun !=', '0000-00-00');    
            $this->db->where('susun.id_order', $id_order);
            $this->db->order_by('susun.tanggal_pelaksanaan_mesin_susun', 'asc');        
            
            $query = $this->db->get();
            return $query;  
}
        public function edit_susun($id)
        {
            $this->db->select('
                order.id_order as id_order,
                order.nomor_so as nomor_so,
                order.tanggal_masuk as tanggal_masuk,
                order.deadline as deadline,
                order.nama_pemesan as nama_pemesan,
                order.nama_orderan as nama_orderan, 
                order.ukuran as ukuran, 
                order.halaman as halaman, 
                order.oplag as oplag, 
                order.so_status as so_status,
                finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,            
                finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,

                laminasi.status_laminasi as status_laminasi,            
                mbo.status_mbo as status_mbo,
                shoe.status_shoe as status_shoe,
                susun.status_susun as status_susun,
                sub_proses.status_sub as status_sub,

                laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi,    
                mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mbo,
                shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_shoe,
                susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_susun,
                sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub,

                susun.id_susun as id_susun,
                susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_susun,
                
                susun.status_susun as status_susun,
                susun.keterangan_jadwal_fp_susun as keterangan_jadwal_fp_susun,                
                susun.tanggal_pengerjaan_1 as tanggal_pengerjaan_1,
                susun.hasil_1 as hasil_1,                
                susun.operator_1 as operator_1,                
                susun.keterangan_1 as keterangan_1,
                susun.tanggal_pengerjaan_2 as tanggal_pengerjaan_2,
                susun.hasil_2 as hasil_2,                
                susun.operator_2 as operator_2,                
                susun.keterangan_2 as keterangan_2                           
                '
            );           
            // $this->db->select_max('susun.id_jadwal_susun');
            $this->db->from('order');                           
            
            $this->db->join('laminasi','order.id_order = laminasi.id_order' );         
            $this->db->join('shoe','order.id_order = shoe.id_order' );
            $this->db->join('mbo','order.id_order = mbo.id_order' );
            $this->db->join('susun','order.id_order = susun.id_order' );
            $this->db->join('sub_proses','order.id_order = sub_proses.id_order' );

            $this->db->join('finishing','order.id_order = finishing.id_order' ); 
            $this->db->where('susun.id_susun', $id);  
            $this->db->limit(1);
            
            $query = $this->db->get();
            return $query;  
}

    public function proses_edit_susun($data)
    {
            $ubah_susun = array(                                                                         
                'tanggal_pelaksanaan_mesin_susun' =>$data['tanggal_pelaksanaan_susun'],                                     
                'keterangan_jadwal_fp_susun' =>$data['keterangan_jadwal_fp_susun'],                   
                'tanggal_pengerjaan_1' =>$data['tanggal_pengerjaan_1'],   
                'hasil_1' =>$data['hasil_1'],                   
                'operator_1' =>$data['operator_1'],                   
                'keterangan_1' =>$data['keterangan_1'],   
                'tanggal_pengerjaan_2' =>$data['tanggal_pengerjaan_2'],   
                'hasil_2' =>$data['hasil_2'],                   
                'operator_2' =>$data['operator_2'],                   
                'keterangan_2' =>$data['keterangan_2']                   

            );                        
            $this->db->set($ubah_susun);
            $this->db->where('id_susun',$data['id_susun']);
            $this->db->update('susun');  

            $ubah_susun_khusus = array(                                                                                           
                'status_susun' =>$data['status_susun'],                                                               
            );                        
            $this->db->set($ubah_susun_khusus);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('susun');  

}
    public function proses_tambah_susun($data)
	{
            $tambah_jadwal_susun = array(                                                                         
                'id_order' =>$data['id_order'],                                   
                'tanggal_pelaksanaan_mesin_susun' =>$data['tanggal_pelaksanaan_susun'],   
                'id_jadwal_susun' =>$data['id_jadwal_susun'],   
                'status_susun' =>$data['status_susun'],   
                'keterangan_jadwal_fp_susun' =>$data['keterangan_jadwal_fp_susun'],                    
                'tanggal_pengerjaan_1' =>$data['tanggal_pengerjaan_1'],   
                'hasil_1' =>$data['hasil_1'],                   
                'operator_1' =>$data['operator_1'],                   
                'keterangan_1' =>$data['keterangan_1'],   
                'tanggal_pengerjaan_2' =>$data['tanggal_pengerjaan_2'],   
                'hasil_2' =>$data['hasil_2'],                   
                'operator_2' =>$data['operator_2'],                   
                'keterangan_2' =>$data['keterangan_2']                   

            );                                                          
            $this->db->insert('susun',$tambah_jadwal_susun);

}

// MESIN SUB
public function get_jadwal_sub()
{
    $this->db->select('
        order.id_order as id_order,
        order.nomor_so as nomor_so,
        order.tanggal_masuk as tanggal_masuk,
        order.deadline as deadline,
        order.nama_pemesan as nama_pemesan,
        order.nama_orderan as nama_orderan, 
        order.ukuran as ukuran, 
        order.halaman as halaman, 
        order.oplag as oplag, 
        order.so_status as so_status,
        
        sub_proses.id_jadwal_sub as id_jadwal_sub,
        sub_proses.status_sub as status_sub,
        sub_proses.hasil_1 as hasil_1,
        sub_proses.hasil_2 as hasil_2,   
        sub_proses.id_sub as id_sub,                  
        sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub'                
    );           

    $this->db->from('order');                           
    $this->db->join('sub_proses','order.id_order = sub_proses.id_order' ); 
    $this->db->where('sub_proses.tanggal_pelaksanaan_sub_proses !=', '0000-00-00');    
    $this->db->order_by('sub_proses.tanggal_pelaksanaan_sub_proses', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}
    public function ambil_data_sub($id)
            {
                $this->db->select(
                    '   
                        sub_proses.id_jadwal_sub as id_jadwal_sub,
                        sub_proses.hasil_1 as hasil_1,
                        sub_proses.hasil_2 as hasil_2
                    '
                );
                $this->db->from('order');
                $this->db->join('sub_proses','sub_proses.id_order = order.id_order');    
                $this->db->where('sub_proses.id_order', $id);          
                $query = $this->db->get();
                return $query;   
}

public function ambilIDOrder_sub($id_order)
{
    $this->db->select('
        order.id_order as id_order,
        order.nomor_so as nomor_so,
        order.tanggal_masuk as tanggal_masuk,
        order.deadline as deadline,
        order.nama_pemesan as nama_pemesan,
        order.nama_orderan as nama_orderan, 
        order.ukuran as ukuran, 
        order.halaman as halaman, 
        order.oplag as oplag, 
        order.so_status as so_status,
        
        sub_proses.status_sub as status_sub,
        sub_proses.id_jadwal_sub as id_jadwal_sub,
        sub_proses.id_sub as id_sub,
        sub_proses.hasil_1 as hasil_1,
        sub_proses.hasil_2 as hasil_2,            
        sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub'
        
    );           

    $this->db->from('order');                           
    $this->db->join('sub_proses','order.id_order = sub_proses.id_order' ); 
    $this->db->where('sub_proses.tanggal_pelaksanaan_sub_proses !=', '0000-00-00');    
    $this->db->where('sub_proses.id_order', $id_order);
    $this->db->order_by('sub_proses.tanggal_pelaksanaan_sub_proses', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

public function edit_sub($id)
{
    $this->db->select('
        order.id_order as id_order,
        order.nomor_so as nomor_so,
        order.tanggal_masuk as tanggal_masuk,
        order.deadline as deadline,
        order.nama_pemesan as nama_pemesan,
        order.nama_orderan as nama_orderan, 
        order.ukuran as ukuran, 
        order.halaman as halaman, 
        order.oplag as oplag, 
        order.so_status as so_status,
        finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,            
        finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,

        laminasi.status_laminasi as status_laminasi,            
        mbo.status_mbo as status_mbo,
        shoe.status_shoe as status_shoe,
        susun.status_susun as status_susun,
        sub_proses.status_sub as status_sub,

        laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi,    
        mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mbo,
        shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_shoe,
        susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_susun,
        sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub,

        sub_proses.id_sub as id_sub,
        sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub,
        
        sub_proses.jenis_sub_lipat as jenis_sub_lipat,
        sub_proses.jenis_sub_susun_gabung as jenis_sub_susun_gabung,
        sub_proses.jenis_sub_laminasi as jenis_sub_laminasi,
        sub_proses.status_sub as status_sub,
        sub_proses.keterangan_jadwal_sub_proses as keterangan_jadwal_sub,                
        sub_proses.tanggal_kembali_1 as tanggal_kembali_1,
        sub_proses.hasil_1 as hasil_1,                
        sub_proses.rejek_1 as rejek_1,                
        sub_proses.keterangan_1 as keterangan_1,
        sub_proses.tanggal_kembali_2 as tanggal_kembali_2,
        sub_proses.hasil_2 as hasil_2,                
        sub_proses.rejek_2 as rejek_2,                
        sub_proses.keterangan_2 as keterangan_2                          
        '
    );           
    // $this->db->select_max('sub_proses.id_jadwal_sub');
    $this->db->from('order');                           

    $this->db->join('laminasi','order.id_order = laminasi.id_order' );         
    $this->db->join('shoe','order.id_order = shoe.id_order' );
    $this->db->join('mbo','order.id_order = mbo.id_order' );
    $this->db->join('susun','order.id_order = susun.id_order' );
    $this->db->join('sub_proses','order.id_order = sub_proses.id_order' );

    $this->db->join('finishing','order.id_order = finishing.id_order' ); 
    $this->db->where('sub_proses.id_sub', $id);    
    $this->db->limit(1);
    
    $query = $this->db->get();
    return $query;  
}

public function proses_edit_sub($data)
    {
            $ubah_sub = array(                                                                         
                'tanggal_pelaksanaan_sub_proses' =>$data['tanggal_pelaksanaan_sub'],                                     
                'keterangan_jadwal_sub_proses' =>$data['keterangan_jadwal_sub'],                   
                'tanggal_kembali_1' =>$data['tanggal_kembali_1'],   
                'hasil_1' =>$data['hasil_1'],                   
                'rejek_1' =>$data['rejek_1'],                   
                'keterangan_1' =>$data['keterangan_1'],   
                'tanggal_kembali_2' =>$data['tanggal_kembali_2'],   
                'hasil_2' =>$data['hasil_2'],                   
                'rejek_2' =>$data['rejek_2'],                   
                'keterangan_2' =>$data['keterangan_2']                                  

            );                        
            $this->db->set($ubah_sub);
            $this->db->where('id_sub',$data['id_sub']);
            $this->db->update('sub_proses');  

            $ubah_sub_khusus = array(                                                                                           
                'status_sub' =>$data['status_sub'],     
                'jenis_sub_lipat' =>$data['jenis_sub_lipat'],
                'jenis_sub_susun_gabung' =>$data['jenis_sub_susun_gabung'],
                'jenis_sub_laminasi' =>$data['jenis_sub_laminasi']                                                          
            );                        
            $this->db->set($ubah_sub_khusus);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('sub_proses');  

}
public function proses_tambah_sub($data)
{
        $tambah_jadwal_sub = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'tanggal_pelaksanaan_sub_proses' =>$data['tanggal_pelaksanaan_sub'],   
            'id_jadwal_sub' =>$data['id_jadwal_sub'],   
            'status_sub' =>$data['status_sub'],   
            'keterangan_jadwal_sub_proses' =>$data['keterangan_jadwal_sub'],                    
            'tanggal_kembali_1' =>$data['tanggal_kembali_1'],   
            'hasil_1' =>$data['hasil_1'],                   
            'rejek_1' =>$data['rejek_1'],                   
            'keterangan_1' =>$data['keterangan_1'],   
            'tanggal_kembali_2' =>$data['tanggal_kembali_2'],   
            'hasil_2' =>$data['hasil_2'],                   
            'rejek_2' =>$data['rejek_2'],                   
            'keterangan_2' =>$data['keterangan_2'], 
            
            'jenis_sub_lipat' =>$data['jenis_sub_lipat'],
            'jenis_sub_susun_gabung' =>$data['jenis_sub_susun_gabung'],
            'jenis_sub_laminasi' =>$data['jenis_sub_laminasi']

        );                                                          
        $this->db->insert('sub_proses',$tambah_jadwal_sub);

}

//// Hapus laminasi
public function hapus_laminasi($id)
{
    $this->db->where('id_laminasi', $id);
    $this->db->delete('laminasi');
}

public function hapus_laminasi_update($data)
{
    $hapus_laminasi = array(
        'id_jadwal_laminasi' => 0,   
        'status_laminasi' => null,             
        'tanggal_pelaksanaan_laminasi' => null,
        'keterangan_jadwal_fp_laminasi' => null,
        'tanggal_pengerjaan_1' => null,
        'hasil_1' => null,
        'rejek_1' => null,
        'operator_1' => null,
        'kru_1' => null,
        'keterangan_1' => null,
        'tanggal_pengerjaan_2' => null,
        'hasil_2' => null,
        'rejek_2' => null,
        'operator_2' => null,
        'kru_2' => null,
        'keterangan_2' => null,
        'status_laminasi' => null,
        'jenis_laminasi' => null                                                                       
    );            
    $this->db->set($hapus_laminasi);    
    $this->db->where('id_order',$data);    
    $this->db->update('laminasi');
}

//// Hapus shoe
public function hapus_shoe($id)
{
    $this->db->where('id_shoe', $id);
    $this->db->delete('shoe');
}

public function hapus_shoe_update($data)
{
    $hapus_shoe = array(
        'id_jadwal_shoe' => 0, 
        'tanggal_pelaksanaan_mesin_shoe' => null,
        'keterangan_jadwal_fp_shoe' => null,
        'status_shoe' =>null, 
        'lipat_lembar_1' => null,
        'lipat_lembar_2' => null,
        'lipat_lembar_3' => null,
        'lipat_lembar_4' => null,
        'lipat_lembar_5' => null,
        'lipat_lembar_6' => null,
        'lipat_lembar_7' => null,
        'lipat_lembar_8' => null,
        'lipat_lembar_9' => null,
        'lipat_lembar_10' => null,
        'lipat_lembar_11' => null,
        'lipat_lembar_12' => null,
        'lipat_lembar_13' => null,
        'lipat_lembar_14' => null,
        'lipat_lembar_15' => null,
        'lipat_lembar_16' => null,
        'lipat_lembar_17' => null,
        'lipat_lembar_18' => null,
        'lipat_lembar_19' => null,
        'lipat_lembar_20' => null,

        'hasil_lipatan_lembar_1' => null,
        'hasil_lipatan_lembar_2' => null,
        'hasil_lipatan_lembar_3' => null,
        'hasil_lipatan_lembar_4' => null,
        'hasil_lipatan_lembar_5' => null,
        'hasil_lipatan_lembar_6' => null,
        'hasil_lipatan_lembar_7' => null,
        'hasil_lipatan_lembar_8' => null,
        'hasil_lipatan_lembar_9' => null,
        'hasil_lipatan_lembar_10' => null,
        'hasil_lipatan_lembar_11' => null,
        'hasil_lipatan_lembar_12' => null,
        'hasil_lipatan_lembar_13' => null,
        'hasil_lipatan_lembar_14' => null,
        'hasil_lipatan_lembar_15' => null,
        'hasil_lipatan_lembar_16' => null,
        'hasil_lipatan_lembar_17' => null,
        'hasil_lipatan_lembar_18' => null,
        'hasil_lipatan_lembar_19' => null,
        'hasil_lipatan_lembar_20' => null,

        'operator_lembar_1' => null,
        'operator_lembar_2' => null,
        'operator_lembar_3' => null,
        'operator_lembar_4' => null,
        'operator_lembar_5' => null,
        'operator_lembar_6' => null,
        'operator_lembar_7' => null,
        'operator_lembar_8' => null,
        'operator_lembar_9' => null,
        'operator_lembar_10' => null,
        'operator_lembar_11' => null,
        'operator_lembar_12' => null,
        'operator_lembar_13' => null,
        'operator_lembar_14' => null,
        'operator_lembar_15' => null,
        'operator_lembar_16' => null,
        'operator_lembar_17' => null,
        'operator_lembar_18' => null,
        'operator_lembar_19' => null,
        'operator_lembar_20' => null,

        'tanggal_pengerjaan_lembar_1' => null,
        'tanggal_pengerjaan_lembar_2' => null,
        'tanggal_pengerjaan_lembar_3' => null,
        'tanggal_pengerjaan_lembar_4' => null,
        'tanggal_pengerjaan_lembar_5' => null,
        'tanggal_pengerjaan_lembar_6' => null,
        'tanggal_pengerjaan_lembar_7' => null,
        'tanggal_pengerjaan_lembar_8' => null,
        'tanggal_pengerjaan_lembar_9' => null,
        'tanggal_pengerjaan_lembar_10' => null,
        'tanggal_pengerjaan_lembar_11' => null,
        'tanggal_pengerjaan_lembar_12' => null,
        'tanggal_pengerjaan_lembar_13' => null,
        'tanggal_pengerjaan_lembar_14' => null,
        'tanggal_pengerjaan_lembar_15' => null,
        'tanggal_pengerjaan_lembar_16' => null,
        'tanggal_pengerjaan_lembar_17' => null,
        'tanggal_pengerjaan_lembar_18' => null,
        'tanggal_pengerjaan_lembar_19' => null,
        'tanggal_pengerjaan_lembar_20' => null,

        'keterangan_lembar_1' => null,
        'keterangan_lembar_2' => null,
        'keterangan_lembar_3' => null,
        'keterangan_lembar_4' => null,
        'keterangan_lembar_5' => null,
        'keterangan_lembar_6' => null,
        'keterangan_lembar_7' => null,
        'keterangan_lembar_8' => null,
        'keterangan_lembar_9' => null,
        'keterangan_lembar_10' => null,
        'keterangan_lembar_11' => null,
        'keterangan_lembar_12' => null,
        'keterangan_lembar_13' => null,
        'keterangan_lembar_14' => null,
        'keterangan_lembar_15' => null,
        'keterangan_lembar_16' => null,
        'keterangan_lembar_17' => null,
        'keterangan_lembar_18' => null,
        'keterangan_lembar_19' => null,
        'keterangan_lembar_20' => null
        
    );            
    $this->db->set($hapus_shoe);    
    $this->db->where('id_order',$data);    
    $this->db->update('shoe');
}

//// hapus mbo
public function hapus_mbo($id)
{
    $this->db->where('id_mbo', $id);
    $this->db->delete('mbo');
}
public function hapus_mbo_update($data)
{
$hapus_mbo = array(
    'id_jadwal_mbo' => 0, 
    'tanggal_pelaksanaan_mesin_mbo' => null,
    'keterangan_jadwal_fp_mbo' => null,
    'status_mbo' =>null, 
    'lipat_lembar_1' => null,
    'lipat_lembar_2' => null,
    'lipat_lembar_3' => null,
    'lipat_lembar_4' => null,
    'lipat_lembar_5' => null,
    'lipat_lembar_6' => null,
    'lipat_lembar_7' => null,
    'lipat_lembar_8' => null,
    'lipat_lembar_9' => null,
    'lipat_lembar_10' => null,
    'lipat_lembar_11' => null,
    'lipat_lembar_12' => null,
    'lipat_lembar_13' => null,
    'lipat_lembar_14' => null,
    'lipat_lembar_15' => null,
    'lipat_lembar_16' => null,
    'lipat_lembar_17' => null,
    'lipat_lembar_18' => null,
    'lipat_lembar_19' => null,
    'lipat_lembar_20' => null,

    'hasil_lipatan_lembar_1' => null,
    'hasil_lipatan_lembar_2' => null,
    'hasil_lipatan_lembar_3' => null,
    'hasil_lipatan_lembar_4' => null,
    'hasil_lipatan_lembar_5' => null,
    'hasil_lipatan_lembar_6' => null,
    'hasil_lipatan_lembar_7' => null,
    'hasil_lipatan_lembar_8' => null,
    'hasil_lipatan_lembar_9' => null,
    'hasil_lipatan_lembar_10' => null,
    'hasil_lipatan_lembar_11' => null,
    'hasil_lipatan_lembar_12' => null,
    'hasil_lipatan_lembar_13' => null,
    'hasil_lipatan_lembar_14' => null,
    'hasil_lipatan_lembar_15' => null,
    'hasil_lipatan_lembar_16' => null,
    'hasil_lipatan_lembar_17' => null,
    'hasil_lipatan_lembar_18' => null,
    'hasil_lipatan_lembar_19' => null,
    'hasil_lipatan_lembar_20' => null,

    'operator_lembar_1' => null,
    'operator_lembar_2' => null,
    'operator_lembar_3' => null,
    'operator_lembar_4' => null,
    'operator_lembar_5' => null,
    'operator_lembar_6' => null,
    'operator_lembar_7' => null,
    'operator_lembar_8' => null,
    'operator_lembar_9' => null,
    'operator_lembar_10' => null,
    'operator_lembar_11' => null,
    'operator_lembar_12' => null,
    'operator_lembar_13' => null,
    'operator_lembar_14' => null,
    'operator_lembar_15' => null,
    'operator_lembar_16' => null,
    'operator_lembar_17' => null,
    'operator_lembar_18' => null,
    'operator_lembar_19' => null,
    'operator_lembar_20' => null,

    'tanggal_pengerjaan_lembar_1' => null,
    'tanggal_pengerjaan_lembar_2' => null,
    'tanggal_pengerjaan_lembar_3' => null,
    'tanggal_pengerjaan_lembar_4' => null,
    'tanggal_pengerjaan_lembar_5' => null,
    'tanggal_pengerjaan_lembar_6' => null,
    'tanggal_pengerjaan_lembar_7' => null,
    'tanggal_pengerjaan_lembar_8' => null,
    'tanggal_pengerjaan_lembar_9' => null,
    'tanggal_pengerjaan_lembar_10' => null,
    'tanggal_pengerjaan_lembar_11' => null,
    'tanggal_pengerjaan_lembar_12' => null,
    'tanggal_pengerjaan_lembar_13' => null,
    'tanggal_pengerjaan_lembar_14' => null,
    'tanggal_pengerjaan_lembar_15' => null,
    'tanggal_pengerjaan_lembar_16' => null,
    'tanggal_pengerjaan_lembar_17' => null,
    'tanggal_pengerjaan_lembar_18' => null,
    'tanggal_pengerjaan_lembar_19' => null,
    'tanggal_pengerjaan_lembar_20' => null,

    'keterangan_lembar_1' => null,
    'keterangan_lembar_2' => null,
    'keterangan_lembar_3' => null,
    'keterangan_lembar_4' => null,
    'keterangan_lembar_5' => null,
    'keterangan_lembar_6' => null,
    'keterangan_lembar_7' => null,
    'keterangan_lembar_8' => null,
    'keterangan_lembar_9' => null,
    'keterangan_lembar_10' => null,
    'keterangan_lembar_11' => null,
    'keterangan_lembar_12' => null,
    'keterangan_lembar_13' => null,
    'keterangan_lembar_14' => null,
    'keterangan_lembar_15' => null,
    'keterangan_lembar_16' => null,
    'keterangan_lembar_17' => null,
    'keterangan_lembar_18' => null,
    'keterangan_lembar_19' => null,
    'keterangan_lembar_20' => null
    
);            
$this->db->set($hapus_mbo);    
$this->db->where('id_order',$data);    
$this->db->update('mbo');
}

//// Hapus susun
public function hapus_susun($id)
{
    $this->db->where('id_susun', $id);
    $this->db->delete('susun');
}
public function hapus_susun_update($data)
{
$hapus_susun = array(
            'id_jadwal_susun' => 0, 
            'tanggal_pelaksanaan_mesin_susun' =>null,
            'keterangan_jadwal_fp_susun' =>null,
            'tanggal_pengerjaan_1' =>null,
            'hasil_1' =>null,
            'operator_1' =>null,
            'keterangan_1' =>null,
            'tanggal_pengerjaan_2' =>null,
            'hasil_2' =>null,
            'operator_2' =>null,
            'keterangan_2' =>null,
            'status_susun' =>null
);            
$this->db->set($hapus_susun);    
$this->db->where('id_order',$data);    
$this->db->update('susun');
}

//// Hapus sub
public function hapus_sub($id)
{
    $this->db->where('id_sub', $id);
    $this->db->delete('sub_proses');
}
public function hapus_sub_update($data)
{
$hapus_sub = array(
    'id_jadwal_sub' => 0, 
    'tanggal_pelaksanaan_sub_proses' =>null,
    'keterangan_jadwal_sub_proses' =>null,
    'tanggal_kembali_1' =>null,
    'hasil_1' =>null,
    'rejek_1' =>null,
    'keterangan_1' =>null,
    'tanggal_kembali_2' =>null,
    'hasil_2' =>null,
    'rejek_2' =>null,
    'keterangan_2' =>null,
    'status_sub' =>null,
    'jenis_sub_lipat' =>null,
    'jenis_sub_susun_gabung' =>null,
    'jenis_sub_laminasi' =>null
);            
$this->db->set($hapus_sub);    
$this->db->where('id_order',$data);    
$this->db->update('sub_proses');
}










public function status_umum($data)
{            
            $status = array(                                                                                           
                'so_status' =>$data['status_umum']                                                                           
            );                        
            $this->db->set($status);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('order');  

}


}