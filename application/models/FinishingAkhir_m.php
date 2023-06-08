<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinishingAkhir_m extends CI_Model {

	public function get()
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status,

            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,
            
            finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,    
                       
            

            binding.hasil_1 as binding_hasil_1,
            binding.hasil_2 as binding_hasil_2,
            binding.hasil_3 as binding_hasil_3,
            binding.hasil_4 as binding_hasil_4,

            binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,     
            hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,            
            jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,            
            fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,            
            sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,    
            
            binding.status_binding as status_binding,            
            hardcover.status_hardcover as status_hardcover,
            jahit.status_jahit as status_jahit,
            fa_potong.status_fa_potong as status_fa_potong,
            sub_finishing.status_sub as status_sub,
            klemseng.status_klemseng as status_klemseng,
            spiral.status_spiral as status_spiral,
           

            binding.id_binding as id_binding,
            binding.id_jadwal_binding as id_jadwal_binding,
            binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,
            binding.keterangan_jadwal_binding as keterangan_jadwal_binding,
                        
            hardcover.id_hardcover as id_hardcover,
            hardcover.id_jadwal_hardcover as id_jadwal_hardcover,
            hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,
            hardcover.keterangan_jadwal_hardcover as keterangan_jadwal_hardcover,

            jahit.id_jahit as id_jahit,
            jahit.id_jadwal_jahit as id_jadwal_jahit,
            jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,
            jahit.keterangan_jadwal_jahit as keterangan_jadwal_jahit,

            fa_potong.id_fa_potong as id_fa_potong,
            fa_potong.id_jadwal_fa_potong as id_jadwal_fa_potong,
            fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,
            fa_potong.keterangan_jadwal_fa_potong as keterangan_jadwal_fa_potong,

            sub_finishing.id_sub as id_sub,
            sub_finishing.id_jadwal_sub as id_jadwal_sub,
            sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,
            sub_finishing.keterangan_jadwal_sub as keterangan_jadwal_sub,
            sub_finishing.jenis_sub_binding as jenis_sub_binding,
            sub_finishing.jenis_sub_hardcover as jenis_sub_hardcover,
            sub_finishing.jenis_sub_jahit as jenis_sub_jahit,
            sub_finishing.jenis_sub_fa_potong as jenis_sub_fa_potong,
            sub_finishing.jenis_sub_klemseng as jenis_sub_klemseng,
            sub_finishing.jenis_sub_spiral as jenis_sub_spiral,
                       
            klemseng.id_klemseng as id_klemseng,
            klemseng.id_jadwal_klemseng as id_jadwal_klemseng,
            klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,
            klemseng.keterangan_jadwal_klemseng as keterangan_jadwal_klemseng,

            spiral.id_spiral as id_spiral,
            spiral.id_jadwal_spiral as id_jadwal_spiral,
            spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,
            spiral.keterangan_jadwal_spiral as keterangan_jadwal_spiral
            
            '      
        );           

        $this->db->from('order');                
        $this->db->join('finishing','finishing.id_order = order.id_order');

        $this->db->join('binding','binding.id_order = order.id_order','left');
        $this->db->join('fa_potong','fa_potong.id_order = order.id_order','left');
        $this->db->join('jahit','jahit.id_order = order.id_order','left');
        $this->db->join('hardcover','hardcover.id_order = order.id_order','left');
        $this->db->join('sub_finishing','sub_finishing.id_order = order.id_order','left');  
        $this->db->join('klemseng','klemseng.id_order = order.id_order','left');
        $this->db->join('spiral','spiral.id_order = order.id_order','left');
                                                
        $this->db->join('susun','susun.id_order = order.id_order','left');

        // $this->db->join('laminasi','laminasi.id_order = order.id_order','left');
        // $this->db->join('shoe','shoe.id_order = order.id_order','left');
        // $this->db->join('mbo','mbo.id_order = order.id_order','left');
        // $this->db->join('sub_proses','sub_proses.id_order = order.id_order','left');
        

        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);
              

               
        $query = $this->db->get();
        return $query; 

}


// ambil tanggal tiap mesin hehe
public function ambil_data_fa_binding($id)
{
    $this->db->select(
        '   
        binding.tanggal_pelaksanaan_binding as tanggal_binding,
        binding.id_jadwal_binding as id_jadwal_binding                 
        '
    );
    $this->db->from('order');                            
    $this->db->join('binding','binding.id_order = order.id_order','left');
   

    $this->db->where('order.id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}
public function ambil_data_fa_hardcover($id)
{
    $this->db->select(
        '   
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_hardcover,
        hardcover.id_jadwal_hardcover as id_jadwal_hardcover                 
        '
    );
    $this->db->from('order');                            
    $this->db->join('hardcover','hardcover.id_order = order.id_order','left');
   

    $this->db->where('order.id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}

public function ambil_data_fa_jahit($id)
{
    $this->db->select(
        '   
        jahit.tanggal_pelaksanaan_jahit as tanggal_jahit,
        jahit.id_jadwal_jahit as id_jadwal_jahit                
        '
    );
    $this->db->from('order');                            
    $this->db->join('jahit','jahit.id_order = order.id_order','left');
   

    $this->db->where('order.id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}

public function ambil_data_fa_fa_potong($id)
{
    $this->db->select(
        '   
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_fa_potong,
        fa_potong.id_jadwal_fa_potong as id_jadwal_fa_potong                 
        '
    );
    $this->db->from('order');                            
    $this->db->join('fa_potong','fa_potong.id_order = order.id_order','left');
   

    $this->db->where('order.id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}

public function ambil_data_fa_sub($id)
{
    $this->db->select(
        '   
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_sub,
        sub_finishing.id_jadwal_sub as id_jadwal_sub                
        '
    );
    $this->db->from('order');                            
    $this->db->join('sub_finishing','sub_finishing.id_order = order.id_order','left');
   

    $this->db->where('order.id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}

public function ambil_data_fa_klemseng($id)
{
    $this->db->select(
        '   
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_klemseng,
        klemseng.id_jadwal_klemseng as id_jadwal_klemseng                
        '
    );
    $this->db->from('order');                            
    $this->db->join('klemseng','klemseng.id_order = order.id_order','left');
   

    $this->db->where('order.id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}

public function ambil_data_fa_spiral($id)
{
    $this->db->select(
        '   
        spiral.tanggal_pelaksanaan_spiral as tanggal_spiral,
        spiral.id_jadwal_spiral as id_jadwal_spiral                 
        '
    );
    $this->db->from('order');                            
    $this->db->join('spiral','spiral.id_order = order.id_order','left');
   

    $this->db->where('order.id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}




    public function tambah_fa($data)
    {
            $tambah_binding = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_binding' =>$data['tanggal_pelaksanaan_binding'],   
                'keterangan_jadwal_binding' =>$data['keterangan_jadwal_binding']                
            );            
            $this->db->insert('binding',$tambah_binding);

            $tambah_hardcover = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_hardcover' =>$data['tanggal_pelaksanaan_hardcover'],   
                'keterangan_jadwal_hardcover' =>$data['keterangan_jadwal_hardcover'],                
            );            
            $this->db->insert('hardcover',$tambah_hardcover);

            $tambah_jahit = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_jahit' =>$data['tanggal_pelaksanaan_jahit'],   
                'keterangan_jadwal_jahit' =>$data['keterangan_jadwal_jahit']               
            );            
            $this->db->insert('jahit',$tambah_jahit);

            $tambah_fa_potong = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_fa_potong' =>$data['tanggal_pelaksanaan_fa_potong'],   
                'keterangan_jadwal_fa_potong' =>$data['keterangan_jadwal_fa_potong']              
            );            
            $this->db->insert('fa_potong',$tambah_fa_potong);

            $tambah_sub = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_sub' =>$data['tanggal_pelaksanaan_sub'],   
                'keterangan_jadwal_sub' =>$data['keterangan_jadwal_sub'],                
                'jenis_sub_binding' =>$data['jenis_sub_binding'],
                'jenis_sub_hardcover' =>$data['jenis_sub_hardcover'],
                'jenis_sub_jahit' =>$data['jenis_sub_jahit'],
                'jenis_sub_fa_potong' =>$data['jenis_sub_fa_potong'],
                'jenis_sub_klemseng' =>$data['jenis_sub_klemseng'],
                'jenis_sub_spiral' =>$data['jenis_sub_spiral']
            );            
            $this->db->insert('sub_finishing',$tambah_sub);

            $tambah_klemseng = array(
                'id_order' =>$data['id_order']                                            
            );            
            $this->db->insert('klemseng',$tambah_klemseng);

            $tambah_spiral = array(
                'id_order' =>$data['id_order']                                            
            );            
            $this->db->insert('spiral',$tambah_spiral);

}


public function edit_fa($data)
{
            if($data["tanggal_pelaksanaan_binding"] != ""){
                $ubah_binding = array(
                    'id_order' =>$data['id_order'],               
                    'id_jadwal_binding' =>$data['id_jadwal_binding'],     
                    'tanggal_pelaksanaan_binding' =>$data['tanggal_pelaksanaan_binding'],   
                    'keterangan_jadwal_binding' =>$data['keterangan_jadwal_binding']                
                );                                            
                $this->db->insert('binding',$ubah_binding); 
        }

            if($data["tanggal_pelaksanaan_hardcover"] != ""){
                $ubah_hardcover = array(
                    'id_order' =>$data['id_order'],               
                    'id_jadwal_hardcover' =>$data['id_jadwal_hardcover'],     
                    'tanggal_pelaksanaan_hardcover' =>$data['tanggal_pelaksanaan_hardcover'],   
                    'keterangan_jadwal_hardcover' =>$data['keterangan_jadwal_hardcover']                
                );                                            
                $this->db->insert('hardcover',$ubah_hardcover); 
        }

            if($data["tanggal_pelaksanaan_jahit"] != ""){
                $ubah_jahit = array(
                    'id_order' =>$data['id_order'],               
                    'id_jadwal_jahit' =>$data['id_jadwal_jahit'],     
                    'tanggal_pelaksanaan_jahit' =>$data['tanggal_pelaksanaan_jahit'],   
                    'keterangan_jadwal_jahit' =>$data['keterangan_jadwal_jahit']                
                );                                            
                $this->db->insert('jahit',$ubah_jahit); 
        }

            if($data["tanggal_pelaksanaan_fa_potong"] != ""){
                $ubah_fa_potong = array(
                    'id_order' =>$data['id_order'],               
                    'id_jadwal_fa_potong' =>$data['id_jadwal_fa_potong'],     
                    'tanggal_pelaksanaan_fa_potong' =>$data['tanggal_pelaksanaan_fa_potong'],   
                    'keterangan_jadwal_fa_potong' =>$data['keterangan_jadwal_fa_potong']               
                );                                            
                $this->db->insert('fa_potong',$ubah_fa_potong); 
        }

            if($data["tanggal_pelaksanaan_sub"] != ""){
                $ubah_sub = array(
                    'id_order' =>$data['id_order'],               
                    'id_jadwal_sub' =>$data['id_jadwal_sub'],     
                    'tanggal_pelaksanaan_sub' =>$data['tanggal_pelaksanaan_sub'],   
                    'keterangan_jadwal_sub' =>$data['keterangan_jadwal_sub'], 
                    
                    'jenis_sub_binding' =>$data['jenis_sub_binding'],  
                    'jenis_sub_hardcover' =>$data['jenis_sub_hardcover'],  
                    'jenis_sub_jahit' =>$data['jenis_sub_jahit'],  
                    'jenis_sub_fa_potong' =>$data['jenis_sub_fa_potong'],  
                    'jenis_sub_klemseng' =>$data['jenis_sub_klemseng'],  
                    'jenis_sub_spiral' =>$data['jenis_sub_spiral']              
                );                                            
                $this->db->insert('sub_finishing',$ubah_sub); 
        }


        $ubah_sub_khusus = array(                                       
            'jenis_sub_binding' =>$data['jenis_sub_binding'],  
            'jenis_sub_hardcover' =>$data['jenis_sub_hardcover'],  
            'jenis_sub_jahit' =>$data['jenis_sub_jahit'],  
            'jenis_sub_fa_potong' =>$data['jenis_sub_fa_potong'],  
            'jenis_sub_klemseng' =>$data['jenis_sub_klemseng'],  
            'jenis_sub_spiral' =>$data['jenis_sub_spiral']  
        );                        
        $this->db->set($ubah_sub_khusus);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('sub_finishing');  
    
}

//// mesin kalender
public function tambah_fa_kalender($data)
    {
            $tambah_klemseng = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_klemseng' =>$data['tanggal_pelaksanaan_klemseng'],   
                'keterangan_jadwal_klemseng' =>$data['keterangan_jadwal_klemseng']                
            );            
            $this->db->insert('klemseng',$tambah_klemseng);

            $tambah_spiral = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_spiral' =>$data['tanggal_pelaksanaan_spiral'],   
                'keterangan_jadwal_spiral' =>$data['keterangan_jadwal_spiral']                
            );            
            $this->db->insert('spiral',$tambah_spiral);



            $tambah_binding = array(
                'id_order' =>$data['id_order']                                            
            );            
            $this->db->insert('binding',$tambah_binding);

            $tambah_hardcover = array(
                'id_order' =>$data['id_order']                                            
            );            
            $this->db->insert('hardcover',$tambah_hardcover);

            $tambah_jahit = array(
                'id_order' =>$data['id_order']                                            
            );            
            $this->db->insert('jahit',$tambah_jahit);

            $tambah_fa_potong = array(
                'id_order' =>$data['id_order']                                         
            );            
            $this->db->insert('fa_potong',$tambah_fa_potong);

            $tambah_sub = array(
                'id_order' =>$data['id_order']                             
            );            
            $this->db->insert('sub_finishing',$tambah_sub);
           

}


public function edit_fa_kalender($data)
{
    if($data["tanggal_pelaksanaan_klemseng"] != ""){
            $ubah_klemseng = array(
                'id_order' =>$data['id_order'],               
                'id_jadwal_klemseng' =>$data['id_jadwal_klemseng'],     
                'tanggal_pelaksanaan_klemseng' =>$data['tanggal_pelaksanaan_klemseng'],   
                'keterangan_jadwal_klemseng' =>$data['keterangan_jadwal_klemseng']               
            );                                            
            $this->db->insert('klemseng',$ubah_klemseng); 
    }
    
     if($data["tanggal_pelaksanaan_spiral"] != ""){
            $ubah_spiral = array(
                'id_order' =>$data['id_order'],               
                'id_jadwal_spiral' =>$data['id_jadwal_spiral'],     
                'tanggal_pelaksanaan_spiral' =>$data['tanggal_pelaksanaan_spiral'],   
                'keterangan_jadwal_spiral' =>$data['keterangan_jadwal_spiral']                
            );                                            
            $this->db->insert('spiral',$ubah_spiral); 
}
    
}




//// MESIN binding
    public function get_jadwal_binding()
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
            
            binding.id_jadwal_binding as id_jadwal_binding,
            binding.status_binding as status_binding,
            binding.id_binding as id_binding,
            binding.hasil_1 as hasil_1,
            binding.hasil_2 as hasil_2,
            binding.hasil_3 as hasil_3,
            binding.hasil_4 as hasil_4,
            binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,
            binding.keterangan_jadwal_binding as keterangan_jadwal_binding
            
            '
            
        );           

        $this->db->from('order');                           
        $this->db->join('binding','order.id_order = binding.id_order' ); 
        $this->db->where('binding.tanggal_pelaksanaan_binding !=', '0000-00-00');    
        $this->db->order_by('binding.tanggal_pelaksanaan_binding', 'asc');        
        
        $query = $this->db->get();
        return $query;  
}

public function ambil_data_binding($id)
{
    $this->db->select(
        '   
            binding.id_jadwal_binding as id_jadwal_binding,
            binding.hasil_1 as hasil_1,
            binding.hasil_2 as hasil_2,
            binding.hasil_3 as hasil_3,
            binding.hasil_4 as hasil_4
        '
    );
    $this->db->from('order');
    $this->db->join('binding','binding.id_order = order.id_order');    
    $this->db->where('binding.id_order', $id);          
    $query = $this->db->get();
    return $query;   
}

public function ambilIDOrder_binding($id_order)
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
        
        binding.status_binding as status_binding,
        binding.id_jadwal_binding as id_jadwal_binding,
        binding.id_binding as id_binding,
        binding.hasil_1 as hasil_1,
        binding.hasil_2 as hasil_2,            
        binding.hasil_3 as hasil_3, 
        binding.hasil_4 as hasil_4, 
        binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding'
        
    );           

    $this->db->from('order');                           
    $this->db->join('binding','order.id_order = binding.id_order' ); 
    $this->db->where('binding.tanggal_pelaksanaan_binding !=', '0000-00-00');    
    $this->db->where('binding.id_order', $id_order);
    $this->db->order_by('binding.tanggal_pelaksanaan_binding', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

    public function edit_binding($id)
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

            binding.status_binding as status_binding,            
            hardcover.status_hardcover as status_hardcover,
            jahit.status_jahit as status_jahit,
            fa_potong.status_fa_potong as status_fa_potong,
            sub_finishing.status_sub as status_sub,
            klemseng.status_klemseng as status_klemseng,
            spiral.status_spiral as status_spiral,

            binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,
            hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,
            jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,
            fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,
            sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,
            klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,
            spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,

            susun.hasil_1 as susun_hasil_1,
            susun.hasil_2 as susun_hasil_2,            

            binding.id_binding as id_binding,
            binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,                        
            binding.keterangan_jadwal_binding as keterangan_jadwal_binding,
            
            binding.tanggal_pengerjaan_1 as tanggal_pengerjaan_1,
            binding.hasil_1 as hasil_1,
            binding.rejek_1 as rejek_1,
            binding.operator_1 as operator_1,
            binding.kru_1 as kru_1,
            binding.keterangan_1 as keterangan_1,
            binding.tanggal_pengerjaan_2 as tanggal_pengerjaan_2,
            binding.hasil_2 as hasil_2,
            binding.rejek_2 as rejek_2,
            binding.operator_2 as operator_2,
            binding.kru_2 as kru_2,
            binding.keterangan_2 as keterangan_2,     
            binding.tanggal_pengerjaan_3 as tanggal_pengerjaan_3,
            binding.hasil_3 as hasil_3,
            binding.rejek_3 as rejek_3,
            binding.operator_3 as operator_3,
            binding.kru_3 as kru_3,
            binding.keterangan_3 as keterangan_3,  
            binding.tanggal_pengerjaan_4 as tanggal_pengerjaan_4,
            binding.hasil_4 as hasil_4,
            binding.rejek_4 as rejek_4,
            binding.operator_4 as operator_4,
            binding.kru_4 as kru_4,
            binding.keterangan_4 as keterangan_4                    
            '
        );           
        // $this->db->select_max('laminasi.id_jadwal_laminasi');
        $this->db->from('order');                           

        $this->db->join('binding','order.id_order = binding.id_order' );         
        $this->db->join('hardcover','order.id_order = hardcover.id_order' );
        $this->db->join('jahit','order.id_order = jahit.id_order' );
        $this->db->join('fa_potong','order.id_order = fa_potong.id_order' );
        $this->db->join('sub_finishing','order.id_order = sub_finishing.id_order' );
        $this->db->join('klemseng','order.id_order = klemseng.id_order' );
        $this->db->join('spiral','order.id_order = spiral.id_order' );

        $this->db->join('susun','order.id_order = susun.id_order', 'left' );
        $this->db->join('finishing','order.id_order = finishing.id_order' ); 
        $this->db->where('binding.id_binding', $id);     
        $this->db->limit(1);
        
        $query = $this->db->get();
        return $query;  

}

    public function proses_edit_binding($data)
    {   
        $ubah_binding = array(                     
            'tanggal_pelaksanaan_binding' =>$data['tanggal_pelaksanaan_binding'],
            'keterangan_jadwal_binding' =>$data['keterangan_jadwal_binding'],

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
            'keterangan_2' =>$data['keterangan_2'],

            'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],
            'hasil_3' =>$data['hasil_3'],
            'rejek_3' =>$data['rejek_3'],
            'operator_3' =>$data['operator_3'],
            'kru_3' =>$data['kru_3'],
            'keterangan_3' =>$data['keterangan_3'],

            'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],
            'hasil_4' =>$data['hasil_4'],
            'rejek_4' =>$data['rejek_4'],
            'operator_4' =>$data['operator_4'],
            'kru_4' =>$data['kru_4'],
            'keterangan_4' =>$data['keterangan_4']


        );                        
        $this->db->set($ubah_binding);
        $this->db->where('id_binding',$data['id_binding']);
        $this->db->update('binding'); 

        $ubah_binding_khusus = array(                                                                                           
            'status_binding' =>$data['status_binding']                                                      
        );                        
        $this->db->set($ubah_binding_khusus);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('binding');  

}

public function proses_tambah_binding($data)
	{
            $tambah_jadwal_binding = array(                                                                         
                'id_order' =>$data['id_order'],                                   
                'tanggal_pelaksanaan_binding' =>$data['tanggal_pelaksanaan_binding'],   
                'id_jadwal_binding' =>$data['id_jadwal_binding'],   
                'status_binding' =>$data['status_binding'],   
                'keterangan_jadwal_binding' =>$data['keterangan_jadwal_binding'], 

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
                'keterangan_2' =>$data['keterangan_2'],    
                
                'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],   
                'hasil_3' =>$data['hasil_3'],   
                'rejek_3' =>$data['rejek_3'],   
                'operator_3' =>$data['operator_3'],   
                'kru_3' =>$data['kru_3'],   
                'keterangan_3' =>$data['keterangan_3'], 

                'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],   
                'hasil_4' =>$data['hasil_4'],   
                'rejek_4' =>$data['rejek_4'],   
                'operator_4' =>$data['operator_4'],   
                'kru_4' =>$data['kru_4'],   
                'keterangan_4' =>$data['keterangan_4']

            );                                                          
            $this->db->insert('binding',$tambah_jadwal_binding);

}
//// MESIN hardcover
public function get_jadwal_hardcover()
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
        
        hardcover.id_jadwal_hardcover as id_jadwal_hardcover,
        hardcover.status_hardcover as status_hardcover,
        hardcover.id_hardcover as id_hardcover,
        hardcover.hasil_1 as hasil_1,
        hardcover.hasil_2 as hasil_2,
        hardcover.hasil_3 as hasil_3,
        hardcover.hasil_4 as hasil_4,
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,
        hardcover.keterangan_jadwal_hardcover as keterangan_jadwal_hardcover
        
        '
        
    );           

    $this->db->from('order');                           
    $this->db->join('hardcover','order.id_order = hardcover.id_order' ); 
    $this->db->where('hardcover.tanggal_pelaksanaan_hardcover !=', '0000-00-00');    
    $this->db->order_by('hardcover.tanggal_pelaksanaan_hardcover', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

public function ambil_data_hardcover($id)
{
    $this->db->select(
        '   
            hardcover.id_jadwal_hardcover as id_jadwal_hardcover,
            hardcover.hasil_1 as hasil_1,
            hardcover.hasil_2 as hasil_2,
            hardcover.hasil_3 as hasil_3,
            hardcover.hasil_4 as hasil_4
        '
    );
    $this->db->from('order');
    $this->db->join('hardcover','hardcover.id_order = order.id_order');    
    $this->db->where('hardcover.id_order', $id);          
    $query = $this->db->get();
    return $query;   
}

public function ambilIDOrder_hardcover($id_order)
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
        
        hardcover.status_hardcover as status_hardcover,
        hardcover.id_jadwal_hardcover as id_jadwal_hardcover,
        hardcover.id_hardcover as id_hardcover,
        hardcover.hasil_1 as hasil_1,
        hardcover.hasil_2 as hasil_2,            
        hardcover.hasil_3 as hasil_3, 
        hardcover.hasil_4 as hasil_4, 
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover'
        
    );           

    $this->db->from('order');                           
    $this->db->join('hardcover','order.id_order = hardcover.id_order' ); 
    $this->db->where('hardcover.tanggal_pelaksanaan_hardcover !=', '0000-00-00');    
    $this->db->where('hardcover.id_order', $id_order);
    $this->db->order_by('hardcover.tanggal_pelaksanaan_hardcover', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

public function edit_hardcover($id)
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

        binding.status_binding as status_binding,            
        hardcover.status_hardcover as status_hardcover,
        jahit.status_jahit as status_jahit,
        fa_potong.status_fa_potong as status_fa_potong,
        sub_finishing.status_sub as status_sub,
        klemseng.status_klemseng as status_klemseng,
        spiral.status_spiral as status_spiral,

        binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,
        jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,
        spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,

        susun.hasil_1 as susun_hasil_1,
        susun.hasil_2 as susun_hasil_2,            

        hardcover.id_hardcover as id_hardcover,
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,                        
        hardcover.keterangan_jadwal_hardcover as keterangan_jadwal_hardcover,
        
        hardcover.tanggal_pengerjaan_1 as tanggal_pengerjaan_1,
        hardcover.hasil_1 as hasil_1,
        hardcover.rejek_1 as rejek_1,
        hardcover.operator_1 as operator_1,
        hardcover.kru_1 as kru_1,
        hardcover.keterangan_1 as keterangan_1,
        hardcover.tanggal_pengerjaan_2 as tanggal_pengerjaan_2,
        hardcover.hasil_2 as hasil_2,
        hardcover.rejek_2 as rejek_2,
        hardcover.operator_2 as operator_2,
        hardcover.kru_2 as kru_2,
        hardcover.keterangan_2 as keterangan_2,     
        hardcover.tanggal_pengerjaan_3 as tanggal_pengerjaan_3,
        hardcover.hasil_3 as hasil_3,
        hardcover.rejek_3 as rejek_3,
        hardcover.operator_3 as operator_3,
        hardcover.kru_3 as kru_3,
        hardcover.keterangan_3 as keterangan_3,  
        hardcover.tanggal_pengerjaan_4 as tanggal_pengerjaan_4,
        hardcover.hasil_4 as hasil_4,
        hardcover.rejek_4 as rejek_4,
        hardcover.operator_4 as operator_4,
        hardcover.kru_4 as kru_4,
        hardcover.keterangan_4 as keterangan_4,                   
        '
    );           
    // $this->db->select_max('laminasi.id_jadwal_laminasi');
    $this->db->from('order');                           

    $this->db->join('binding','order.id_order = binding.id_order', 'left' );         
    $this->db->join('hardcover','order.id_order = hardcover.id_order', 'left' );
    $this->db->join('jahit','order.id_order = jahit.id_order' , 'left');
    $this->db->join('fa_potong','order.id_order = fa_potong.id_order' );
    $this->db->join('sub_finishing','order.id_order = sub_finishing.id_order' , 'left');
    $this->db->join('klemseng','order.id_order = klemseng.id_order', 'left' );
    $this->db->join('spiral','order.id_order = spiral.id_order', 'left' );

    $this->db->join('susun','order.id_order = susun.id_order', 'left' );
    $this->db->join('finishing','order.id_order = finishing.id_order' ); 
    $this->db->where('hardcover.id_hardcover', $id);  
    $this->db->limit(1);
    
    $query = $this->db->get();
    return $query;  

}


public function proses_edit_hardcover($data)
{   
    $ubah_hardcover = array(                     
        'tanggal_pelaksanaan_hardcover' =>$data['tanggal_pelaksanaan_hardcover'],
        'keterangan_jadwal_hardcover' =>$data['keterangan_jadwal_hardcover'],

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
        'keterangan_2' =>$data['keterangan_2'],

        'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],
        'hasil_3' =>$data['hasil_3'],
        'rejek_3' =>$data['rejek_3'],
        'operator_3' =>$data['operator_3'],
        'kru_3' =>$data['kru_3'],
        'keterangan_3' =>$data['keterangan_3'],

        'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],
        'hasil_4' =>$data['hasil_4'],
        'rejek_4' =>$data['rejek_4'],
        'operator_4' =>$data['operator_4'],
        'kru_4' =>$data['kru_4'],
        'keterangan_4' =>$data['keterangan_4']


    );                        
    $this->db->set($ubah_hardcover);
    $this->db->where('id_hardcover',$data['id_hardcover']);
    $this->db->update('hardcover'); 

    $ubah_hardcover_khusus = array(                                                                                           
        'status_hardcover' =>$data['status_hardcover'],                                                         
    );                        
    $this->db->set($ubah_hardcover_khusus);
    $this->db->where('id_order',$data['id_order']);
    $this->db->update('hardcover');  

}

public function proses_tambah_hardcover($data)
{
        $tambah_jadwal_hardcover = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'tanggal_pelaksanaan_hardcover' =>$data['tanggal_pelaksanaan_hardcover'],   
            'id_jadwal_hardcover' =>$data['id_jadwal_hardcover'],   
            'status_hardcover' =>$data['status_hardcover'],   
            'keterangan_jadwal_hardcover' =>$data['keterangan_jadwal_hardcover'], 

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
            'keterangan_2' =>$data['keterangan_2'],    
            
            'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],   
            'hasil_3' =>$data['hasil_3'],   
            'rejek_3' =>$data['rejek_3'],   
            'operator_3' =>$data['operator_3'],   
            'kru_3' =>$data['kru_3'],   
            'keterangan_3' =>$data['keterangan_3'], 

            'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],   
            'hasil_4' =>$data['hasil_4'],   
            'rejek_4' =>$data['rejek_4'],   
            'operator_4' =>$data['operator_4'],   
            'kru_4' =>$data['kru_4'],   
            'keterangan_4' =>$data['keterangan_4']

        );                                                          
        $this->db->insert('hardcover',$tambah_jadwal_hardcover);

}

//// MESIN jahit
public function get_jadwal_jahit()
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
        
        jahit.id_jadwal_jahit as id_jadwal_jahit,
        jahit.status_jahit as status_jahit,
        jahit.id_jahit as id_jahit,
        jahit.hasil_1 as hasil_1,
        jahit.hasil_2 as hasil_2,
        jahit.hasil_3 as hasil_3,
        jahit.hasil_4 as hasil_4,
        jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,
        jahit.keterangan_jadwal_jahit as keterangan_jadwal_jahit
        
        '
        
    );           

    $this->db->from('order');                           
    $this->db->join('jahit','order.id_order = jahit.id_order' ); 
    $this->db->where('jahit.tanggal_pelaksanaan_jahit !=', '0000-00-00');    
    $this->db->order_by('jahit.tanggal_pelaksanaan_jahit', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}


public function ambil_data_jahit($id)
{
    $this->db->select(
        '   
            jahit.id_jadwal_jahit as id_jadwal_jahit,
            jahit.hasil_1 as hasil_1,
            jahit.hasil_2 as hasil_2,
            jahit.hasil_3 as hasil_3,
            jahit.hasil_4 as hasil_4
        '
    );
    $this->db->from('order');
    $this->db->join('jahit','jahit.id_order = order.id_order');    
    $this->db->where('jahit.id_order', $id);          
    $query = $this->db->get();
    return $query;   
}

public function ambilIDOrder_jahit($id_order)
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
        
        jahit.status_jahit as status_jahit,
        jahit.id_jadwal_jahit as id_jadwal_jahit,
        jahit.id_jahit as id_jahit,
        jahit.hasil_1 as hasil_1,
        jahit.hasil_2 as hasil_2,            
        jahit.hasil_3 as hasil_3, 
        jahit.hasil_4 as hasil_4, 
        jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit'
        
    );           

    $this->db->from('order');                           
    $this->db->join('jahit','order.id_order = jahit.id_order' ); 
    $this->db->where('jahit.tanggal_pelaksanaan_jahit !=', '0000-00-00');    
    $this->db->where('jahit.id_order', $id_order);
    $this->db->order_by('jahit.tanggal_pelaksanaan_jahit', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

public function edit_jahit($id)
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

        binding.status_binding as status_binding,            
        hardcover.status_hardcover as status_hardcover,
        jahit.status_jahit as status_jahit,
        fa_potong.status_fa_potong as status_fa_potong,
        sub_finishing.status_sub as status_sub,
        klemseng.status_klemseng as status_klemseng,
        spiral.status_spiral as status_spiral,

        binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,
        jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,
        spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,

        susun.hasil_1 as susun_hasil_1,
        susun.hasil_2 as susun_hasil_2,            

        jahit.id_jahit as id_jahit,
        jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,                        
        jahit.keterangan_jadwal_jahit as keterangan_jadwal_jahit,
        
        jahit.tanggal_pengerjaan_1 as tanggal_pengerjaan_1,
        jahit.hasil_1 as hasil_1,
        jahit.rejek_1 as rejek_1,
        jahit.operator_1 as operator_1,
        jahit.kru_1 as kru_1,
        jahit.keterangan_1 as keterangan_1,
        jahit.tanggal_pengerjaan_2 as tanggal_pengerjaan_2,
        jahit.hasil_2 as hasil_2,
        jahit.rejek_2 as rejek_2,
        jahit.operator_2 as operator_2,
        jahit.kru_2 as kru_2,
        jahit.keterangan_2 as keterangan_2,     
        jahit.tanggal_pengerjaan_3 as tanggal_pengerjaan_3,
        jahit.hasil_3 as hasil_3,
        jahit.rejek_3 as rejek_3,
        jahit.operator_3 as operator_3,
        jahit.kru_3 as kru_3,
        jahit.keterangan_3 as keterangan_3,  
        jahit.tanggal_pengerjaan_4 as tanggal_pengerjaan_4,
        jahit.hasil_4 as hasil_4,
        jahit.rejek_4 as rejek_4,
        jahit.operator_4 as operator_4,
        jahit.kru_4 as kru_4,
        jahit.keterangan_4 as keterangan_4                   
        '
    );           
    // $this->db->select_max('laminasi.id_jadwal_laminasi');
    $this->db->from('order');                           

    $this->db->join('binding','order.id_order = binding.id_order', 'left' );         
    $this->db->join('hardcover','order.id_order = hardcover.id_order', 'left' );
    $this->db->join('jahit','order.id_order = jahit.id_order' , 'left');
    $this->db->join('fa_potong','order.id_order = fa_potong.id_order' );
    $this->db->join('sub_finishing','order.id_order = sub_finishing.id_order' , 'left');
    $this->db->join('klemseng','order.id_order = klemseng.id_order' , 'left');
    $this->db->join('spiral','order.id_order = spiral.id_order', 'left' );

    $this->db->join('susun','order.id_order = susun.id_order' , 'left');
    $this->db->join('finishing','order.id_order = finishing.id_order' ); 
    $this->db->where('jahit.id_jahit', $id);  
    $this->db->limit(1);     
    
    $query = $this->db->get();
    return $query;  

}

public function proses_edit_jahit($data)
{   
    $ubah_jahit = array(                     
        'tanggal_pelaksanaan_jahit' =>$data['tanggal_pelaksanaan_jahit'],
        'keterangan_jadwal_jahit' =>$data['keterangan_jadwal_jahit'],

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
        'keterangan_2' =>$data['keterangan_2'],

        'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],
        'hasil_3' =>$data['hasil_3'],
        'rejek_3' =>$data['rejek_3'],
        'operator_3' =>$data['operator_3'],
        'kru_3' =>$data['kru_3'],
        'keterangan_3' =>$data['keterangan_3'],

        'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],
        'hasil_4' =>$data['hasil_4'],
        'rejek_4' =>$data['rejek_4'],
        'operator_4' =>$data['operator_4'],
        'kru_4' =>$data['kru_4'],
        'keterangan_4' =>$data['keterangan_4']


    );                        
    $this->db->set($ubah_jahit);
    $this->db->where('id_jahit',$data['id_jahit']);
    $this->db->update('jahit'); 

    $ubah_jahit_khusus = array(                                                                                           
        'status_jahit' =>$data['status_jahit'],                                                        
    );                        
    $this->db->set($ubah_jahit_khusus);
    $this->db->where('id_order',$data['id_order']);
    $this->db->update('jahit');  

}

public function proses_tambah_jahit($data)
{
        $tambah_jadwal_jahit = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'tanggal_pelaksanaan_jahit' =>$data['tanggal_pelaksanaan_jahit'],   
            'id_jadwal_jahit' =>$data['id_jadwal_jahit'],   
            'status_jahit' =>$data['status_jahit'],   
            'keterangan_jadwal_jahit' =>$data['keterangan_jadwal_jahit'], 

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
            'keterangan_2' =>$data['keterangan_2'],    
            
            'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],   
            'hasil_3' =>$data['hasil_3'],   
            'rejek_3' =>$data['rejek_3'],   
            'operator_3' =>$data['operator_3'],   
            'kru_3' =>$data['kru_3'],   
            'keterangan_3' =>$data['keterangan_3'], 

            'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],   
            'hasil_4' =>$data['hasil_4'],   
            'rejek_4' =>$data['rejek_4'],   
            'operator_4' =>$data['operator_4'],   
            'kru_4' =>$data['kru_4'],   
            'keterangan_4' =>$data['keterangan_4'] 

        );                                                          
        $this->db->insert('jahit',$tambah_jadwal_jahit);

}

//// MESIN fa_potong
public function get_jadwal_fa_potong()
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
        
        fa_potong.id_jadwal_fa_potong as id_jadwal_fa_potong,
        fa_potong.status_fa_potong as status_fa_potong,
        fa_potong.id_fa_potong as id_fa_potong,
        fa_potong.hasil_1 as hasil_1,
        fa_potong.hasil_2 as hasil_2,
        fa_potong.hasil_3 as hasil_3,
        fa_potong.hasil_4 as hasil_4,
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,
        fa_potong.keterangan_jadwal_fa_potong as keterangan_jadwal_fa_potong
        
        '
        
    );           

    $this->db->from('order');                           
    $this->db->join('fa_potong','order.id_order = fa_potong.id_order' ); 
    $this->db->where('fa_potong.tanggal_pelaksanaan_fa_potong !=', '0000-00-00');    
    $this->db->order_by('fa_potong.tanggal_pelaksanaan_fa_potong', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

public function ambil_data_fa_potong($id)
{
    $this->db->select(
        '   
            fa_potong.id_jadwal_fa_potong as id_jadwal_fa_potong,
            fa_potong.hasil_1 as hasil_1,
            fa_potong.hasil_2 as hasil_2,
            fa_potong.hasil_3 as hasil_3,
            fa_potong.hasil_4 as hasil_4
        '
    );
    $this->db->from('order');
    $this->db->join('fa_potong','fa_potong.id_order = order.id_order');    
    $this->db->where('fa_potong.id_order', $id);          
    $query = $this->db->get();
    return $query;   
}

public function ambilIDOrder_fa_potong($id_order)
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
        
        fa_potong.status_fa_potong as status_fa_potong,
        fa_potong.id_jadwal_fa_potong as id_jadwal_fa_potong,
        fa_potong.id_fa_potong as id_fa_potong,
        fa_potong.hasil_1 as hasil_1,
        fa_potong.hasil_2 as hasil_2,            
        fa_potong.hasil_3 as hasil_3, 
        fa_potong.hasil_4 as hasil_4, 
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong'
        
    );           

    $this->db->from('order');                           
    $this->db->join('fa_potong','order.id_order = fa_potong.id_order' ); 
    $this->db->where('fa_potong.tanggal_pelaksanaan_fa_potong !=', '0000-00-00');    
    $this->db->where('fa_potong.id_order', $id_order);
    $this->db->order_by('fa_potong.tanggal_pelaksanaan_fa_potong', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

public function edit_fa_potong($id)
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

        binding.status_binding as status_binding,            
        hardcover.status_hardcover as status_hardcover,
        jahit.status_jahit as status_jahit,
        fa_potong.status_fa_potong as status_fa_potong,
        sub_finishing.status_sub as status_sub,
        klemseng.status_klemseng as status_klemseng,
        spiral.status_spiral as status_spiral,

        binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,
        jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,
        spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,

        binding.hasil_1 as binding_hasil_1,
        binding.hasil_2 as binding_hasil_2,            
        binding.hasil_3 as binding_hasil_3,    
        binding.hasil_4 as binding_hasil_4,    

        fa_potong.id_fa_potong as id_fa_potong,
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,                        
        fa_potong.keterangan_jadwal_fa_potong as keterangan_jadwal_fa_potong,
        
        fa_potong.tanggal_pengerjaan_1 as tanggal_pengerjaan_1,
        fa_potong.hasil_1 as hasil_1,
        fa_potong.rejek_1 as rejek_1,
        fa_potong.operator_1 as operator_1,
        fa_potong.kru_1 as kru_1,
        fa_potong.keterangan_1 as keterangan_1,
        fa_potong.tanggal_pengerjaan_2 as tanggal_pengerjaan_2,
        fa_potong.hasil_2 as hasil_2,
        fa_potong.rejek_2 as rejek_2,
        fa_potong.operator_2 as operator_2,
        fa_potong.kru_2 as kru_2,
        fa_potong.keterangan_2 as keterangan_2,     
        fa_potong.tanggal_pengerjaan_3 as tanggal_pengerjaan_3,
        fa_potong.hasil_3 as hasil_3,
        fa_potong.rejek_3 as rejek_3,
        fa_potong.operator_3 as operator_3,
        fa_potong.kru_3 as kru_3,
        fa_potong.keterangan_3 as keterangan_3,  
        fa_potong.tanggal_pengerjaan_4 as tanggal_pengerjaan_4,
        fa_potong.hasil_4 as hasil_4,
        fa_potong.rejek_4 as rejek_4,
        fa_potong.operator_4 as operator_4,
        fa_potong.kru_4 as kru_4,
        fa_potong.keterangan_4 as keterangan_4                 
        '
    );           
    // $this->db->select_max('laminasi.id_jadwal_laminasi');
    $this->db->from('order');                           

    $this->db->join('binding','order.id_order = binding.id_order' , 'left');         
    $this->db->join('hardcover','order.id_order = hardcover.id_order' , 'left');
    $this->db->join('jahit','order.id_order = jahit.id_order' , 'left');
    $this->db->join('fa_potong','order.id_order = fa_potong.id_order' , 'left');
    $this->db->join('sub_finishing','order.id_order = sub_finishing.id_order' , 'left');
    $this->db->join('klemseng','order.id_order = klemseng.id_order' , 'left');
    $this->db->join('spiral','order.id_order = spiral.id_order' , 'left');

    $this->db->join('susun','order.id_order = susun.id_order' , 'left');
    $this->db->join('finishing','order.id_order = finishing.id_order' ); 
    $this->db->where('fa_potong.id_fa_potong', $id);   
    $this->db->limit(1);        
    
    $query = $this->db->get();
    return $query;  

}


public function proses_edit_fa_potong($data)
{   
    $ubah_fa_potong = array(                     
        'tanggal_pelaksanaan_fa_potong' =>$data['tanggal_pelaksanaan_fa_potong'],
        'keterangan_jadwal_fa_potong' =>$data['keterangan_jadwal_fa_potong'],

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
        'keterangan_2' =>$data['keterangan_2'],

        'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],
        'hasil_3' =>$data['hasil_3'],
        'rejek_3' =>$data['rejek_3'],
        'operator_3' =>$data['operator_3'],
        'kru_3' =>$data['kru_3'],
        'keterangan_3' =>$data['keterangan_3'],

        'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],
        'hasil_4' =>$data['hasil_4'],
        'rejek_4' =>$data['rejek_4'],
        'operator_4' =>$data['operator_4'],
        'kru_4' =>$data['kru_4'],
        'keterangan_4' =>$data['keterangan_4']


    );                        
    $this->db->set($ubah_fa_potong);
    $this->db->where('id_fa_potong',$data['id_fa_potong']);
    $this->db->update('fa_potong'); 

    $ubah_fa_potong_khusus = array(                                                                                           
        'status_fa_potong' =>$data['status_fa_potong']                                                       
    );                        
    $this->db->set($ubah_fa_potong_khusus);
    $this->db->where('id_order',$data['id_order']);
    $this->db->update('fa_potong');  

}

public function proses_tambah_fa_potong($data)
{
        $tambah_jadwal_fa_potong = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'tanggal_pelaksanaan_fa_potong' =>$data['tanggal_pelaksanaan_fa_potong'],   
            'id_jadwal_fa_potong' =>$data['id_jadwal_fa_potong'],   
            'status_fa_potong' =>$data['status_fa_potong'],   
            'keterangan_jadwal_fa_potong' =>$data['keterangan_jadwal_fa_potong'], 

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
            'keterangan_2' =>$data['keterangan_2'],    
            
            'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],   
            'hasil_3' =>$data['hasil_3'],   
            'rejek_3' =>$data['rejek_3'],   
            'operator_3' =>$data['operator_3'],   
            'kru_3' =>$data['kru_3'],   
            'keterangan_3' =>$data['keterangan_3'], 

            'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],   
            'hasil_4' =>$data['hasil_4'],   
            'rejek_4' =>$data['rejek_4'],   
            'operator_4' =>$data['operator_4'],   
            'kru_4' =>$data['kru_4'],   
            'keterangan_4' =>$data['keterangan_4']

        );                                                          
        $this->db->insert('fa_potong',$tambah_jadwal_fa_potong);

}

//// MESIN SUB
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
        
        sub_finishing.id_jadwal_sub as id_jadwal_sub,
        sub_finishing.status_sub as status_sub,
        sub_finishing.id_sub as id_sub,

        sub_finishing.hasil as hasil,
        
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,
        sub_finishing.keterangan_jadwal_sub as keterangan_jadwal_sub
        
        '
        
    );           

    $this->db->from('order');                           
    $this->db->join('sub_finishing','order.id_order = sub_finishing.id_order' ); 
    $this->db->where('sub_finishing.tanggal_pelaksanaan_sub !=', '0000-00-00');    
    $this->db->order_by('sub_finishing.tanggal_pelaksanaan_sub', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}


public function ambil_data_sub($id)
{
    $this->db->select(
        '   
            sub_finishing.id_jadwal_sub as id_jadwal_sub,
            sub_finishing.hasil as hasil
        '
    );
    $this->db->from('order');
    $this->db->join('sub_finishing','sub_finishing.id_order = order.id_order');    
    $this->db->where('sub_finishing.id_order', $id);          
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
        
        sub_finishing.status_sub as status_sub,
        sub_finishing.id_jadwal_sub as id_jadwal_sub,
        sub_finishing.id_sub as id_sub,
        sub_finishing.hasil as hasil,         
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub'
        
    );           

    $this->db->from('order');                           
    $this->db->join('sub_finishing','order.id_order = sub_finishing.id_order' ); 
    $this->db->where('sub_finishing.tanggal_pelaksanaan_sub !=', '0000-00-00');    
    $this->db->where('sub_finishing.id_order', $id_order);
    $this->db->order_by('sub_finishing.tanggal_pelaksanaan_sub', 'asc');        
    
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

        binding.status_binding as status_binding,            
        hardcover.status_hardcover as status_hardcover,
        jahit.status_jahit as status_jahit,
        fa_potong.status_fa_potong as status_fa_potong,
        sub_finishing.status_sub as status_sub,
        klemseng.status_klemseng as status_klemseng,
        spiral.status_spiral as status_spiral,

        binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,
        jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,
        spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,

        sub_finishing.jenis_sub_binding as jenis_sub_binding,
        sub_finishing.jenis_sub_hardcover as jenis_sub_hardcover,
        sub_finishing.jenis_sub_jahit as jenis_sub_jahit,
        sub_finishing.jenis_sub_fa_potong as jenis_sub_fa_potong,
        sub_finishing.jenis_sub_klemseng as jenis_sub_klemseng,
        sub_finishing.jenis_sub_spiral as jenis_sub_spiral,          

        sub_finishing.id_sub as id_sub,
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,                        
        sub_finishing.keterangan_jadwal_sub as keterangan_jadwal_sub,
        
        sub_finishing.tanggal_kembali_sub as tanggal_kembali_sub,
        sub_finishing.hasil as hasil,
        sub_finishing.rejek as rejek,
        sub_finishing.operator as operator,
        sub_finishing.kru as kru,
        sub_finishing.keterangan as keterangan                         
        '
    );           
    // $this->db->select_max('laminasi.id_jadwal_laminasi');
    $this->db->from('order');                           

    $this->db->join('binding','order.id_order = binding.id_order' , 'left');         
    $this->db->join('hardcover','order.id_order = hardcover.id_order' , 'left');
    $this->db->join('jahit','order.id_order = jahit.id_order' , 'left');
    $this->db->join('fa_potong','order.id_order = fa_potong.id_order' , 'left');
    $this->db->join('sub_finishing','order.id_order = sub_finishing.id_order' , 'left');
    $this->db->join('klemseng','order.id_order = klemseng.id_order' , 'left');
    $this->db->join('spiral','order.id_order = spiral.id_order' , 'left');

    $this->db->join('susun','order.id_order = susun.id_order' , 'left');
    $this->db->join('finishing','order.id_order = finishing.id_order' ); 
    $this->db->where('sub_finishing.id_sub', $id);    
    $this->db->limit(1);   
    
    $query = $this->db->get();
    return $query;  

}


public function proses_edit_sub($data)
{   
    $ubah_sub = array(                     
        'tanggal_pelaksanaan_sub' =>$data['tanggal_pelaksanaan_sub'],
        'keterangan_jadwal_sub' =>$data['keterangan_jadwal_sub'],

        'tanggal_kembali_sub' =>$data['tanggal_kembali_sub'],
        'hasil' =>$data['hasil'],
        'rejek' =>$data['rejek'],
        'operator' =>$data['operator'],
        'kru' =>$data['kru'],
        'keterangan' =>$data['keterangan']       

    );                        
    $this->db->set($ubah_sub);
    $this->db->where('id_sub',$data['id_sub']);
    $this->db->update('sub_finishing'); 

    $ubah_sub_khusus = array(                                                                                           
        'status_sub' =>$data['status_sub'],                                                         

        'jenis_sub_binding' =>$data['jenis_sub_binding'], 
        'jenis_sub_hardcover' =>$data['jenis_sub_hardcover'], 
        'jenis_sub_jahit' =>$data['jenis_sub_jahit'], 
        'jenis_sub_fa_potong' =>$data['jenis_sub_fa_potong'], 
        'jenis_sub_klemseng' =>$data['jenis_sub_klemseng'], 
        'jenis_sub_spiral' =>$data['jenis_sub_spiral']
    );                        
    $this->db->set($ubah_sub_khusus);
    $this->db->where('id_order',$data['id_order']);
    $this->db->update('sub_finishing');  

}

public function proses_tambah_sub($data)
{
        $tambah_jadwal_sub = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'tanggal_pelaksanaan_sub' =>$data['tanggal_pelaksanaan_sub'],   
            'id_jadwal_sub' =>$data['id_jadwal_sub'],   
            'status_sub' =>$data['status_sub'],   
            'keterangan_jadwal_sub' =>$data['keterangan_jadwal_sub'], 

            'tanggal_kembali_sub' =>$data['tanggal_kembali_sub'],   
            'hasil' =>$data['hasil'],   
            'rejek' =>$data['rejek'],   
            'operator' =>$data['operator'],   
            'kru' =>$data['kru'],   
            'keterangan' =>$data['keterangan'],   

            'jenis_sub_binding' =>$data['jenis_sub_binding'], 
            'jenis_sub_hardcover' =>$data['jenis_sub_hardcover'], 
            'jenis_sub_jahit' =>$data['jenis_sub_jahit'], 
            'jenis_sub_fa_potong' =>$data['jenis_sub_fa_potong'], 
            'jenis_sub_klemseng' =>$data['jenis_sub_klemseng'], 
            'jenis_sub_spiral' =>$data['jenis_sub_spiral']

        );                                                          
        $this->db->insert('sub_finishing',$tambah_jadwal_sub);

}


//// MESIN klemseng
public function get_jadwal_klemseng()
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
        
        klemseng.id_jadwal_klemseng as id_jadwal_klemseng,
        klemseng.status_klemseng as status_klemseng,
        klemseng.id_klemseng as id_klemseng,
        klemseng.hasil_1 as hasil_1,
        klemseng.hasil_2 as hasil_2,
        klemseng.hasil_3 as hasil_3,
        klemseng.hasil_4 as hasil_4,
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,
        klemseng.keterangan_jadwal_klemseng as keterangan_jadwal_klemseng
        
        '
        
    );           

    $this->db->from('order');                           
    $this->db->join('klemseng','order.id_order = klemseng.id_order' ); 
    $this->db->where('klemseng.tanggal_pelaksanaan_klemseng !=', '0000-00-00');    
    $this->db->order_by('klemseng.tanggal_pelaksanaan_klemseng', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}


public function ambil_data_klemseng($id)
{
    $this->db->select(
        '   
            klemseng.id_jadwal_klemseng as id_jadwal_klemseng,
            klemseng.hasil_1 as hasil_1,
            klemseng.hasil_2 as hasil_2,
            klemseng.hasil_3 as hasil_3,
            klemseng.hasil_4 as hasil_4
        '
    );
    $this->db->from('order');
    $this->db->join('klemseng','klemseng.id_order = order.id_order');    
    $this->db->where('klemseng.id_order', $id);          
    $query = $this->db->get();
    return $query;   
}

public function ambilIDOrder_klemseng($id_order)
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
        
        klemseng.status_klemseng as status_klemseng,
        klemseng.id_jadwal_klemseng as id_jadwal_klemseng,
        klemseng.id_klemseng as id_klemseng,
        klemseng.hasil_1 as hasil_1,
        klemseng.hasil_2 as hasil_2,            
        klemseng.hasil_3 as hasil_3, 
        klemseng.hasil_4 as hasil_4, 
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng'
        
    );           

    $this->db->from('order');                           
    $this->db->join('klemseng','order.id_order = klemseng.id_order' ); 
    $this->db->where('klemseng.tanggal_pelaksanaan_klemseng !=', '0000-00-00');    
    $this->db->where('klemseng.id_order', $id_order);
    $this->db->order_by('klemseng.tanggal_pelaksanaan_klemseng', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

public function edit_klemseng($id)
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

        binding.status_binding as status_binding,            
        hardcover.status_hardcover as status_hardcover,
        jahit.status_jahit as status_jahit,
        fa_potong.status_fa_potong as status_fa_potong,
        sub_finishing.status_sub as status_sub,
        klemseng.status_klemseng as status_klemseng,
        spiral.status_spiral as status_spiral,

        binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,
        jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,
        spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,

        susun.hasil_1 as susun_hasil_1,
        susun.hasil_2 as susun_hasil_2,            

        klemseng.id_klemseng as id_klemseng,
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,                        
        klemseng.keterangan_jadwal_klemseng as keterangan_jadwal_klemseng,
        
        klemseng.tanggal_pengerjaan_1 as tanggal_pengerjaan_1,
        klemseng.hasil_1 as hasil_1,
        klemseng.rejek_1 as rejek_1,
        klemseng.operator_1 as operator_1,
        klemseng.kru_1 as kru_1,
        klemseng.keterangan_1 as keterangan_1,
        klemseng.tanggal_pengerjaan_2 as tanggal_pengerjaan_2,
        klemseng.hasil_2 as hasil_2,
        klemseng.rejek_2 as rejek_2,
        klemseng.operator_2 as operator_2,
        klemseng.kru_2 as kru_2,
        klemseng.keterangan_2 as keterangan_2,     
        klemseng.tanggal_pengerjaan_3 as tanggal_pengerjaan_3,
        klemseng.hasil_3 as hasil_3,
        klemseng.rejek_3 as rejek_3,
        klemseng.operator_3 as operator_3,
        klemseng.kru_3 as kru_3,
        klemseng.keterangan_3 as keterangan_3,  
        klemseng.tanggal_pengerjaan_4 as tanggal_pengerjaan_4,
        klemseng.hasil_4 as hasil_4,
        klemseng.rejek_4 as rejek_4,
        klemseng.operator_4 as operator_4,
        klemseng.kru_4 as kru_4,
        klemseng.keterangan_4 as keterangan_4                   
        '
    );           
    // $this->db->select_max('laminasi.id_jadwal_laminasi');
    $this->db->from('order');                           

    $this->db->join('binding','order.id_order = binding.id_order' ,'left' );         
    $this->db->join('hardcover','order.id_order = hardcover.id_order' ,'left' );
    $this->db->join('jahit','order.id_order = jahit.id_order' ,'left' );
    $this->db->join('fa_potong','order.id_order = fa_potong.id_order' ,'left' );
    $this->db->join('sub_finishing','order.id_order = sub_finishing.id_order' ,'left' );
    $this->db->join('klemseng','order.id_order = klemseng.id_order' ,'left' );
    $this->db->join('spiral','order.id_order = spiral.id_order' ,'left' );

    $this->db->join('susun','order.id_order = susun.id_order' ,'left' );
    $this->db->join('finishing','order.id_order = finishing.id_order' ); 
    $this->db->where('klemseng.id_klemseng', $id);     
    $this->db->limit(1);  
    
    $query = $this->db->get();
    return $query;  

}

public function proses_edit_klemseng($data)
{   
    $ubah_klemseng = array(                     
        'tanggal_pelaksanaan_klemseng' =>$data['tanggal_pelaksanaan_klemseng'],
        'keterangan_jadwal_klemseng' =>$data['keterangan_jadwal_klemseng'],

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
        'keterangan_2' =>$data['keterangan_2'],

        'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],
        'hasil_3' =>$data['hasil_3'],
        'rejek_3' =>$data['rejek_3'],
        'operator_3' =>$data['operator_3'],
        'kru_3' =>$data['kru_3'],
        'keterangan_3' =>$data['keterangan_3'],

        'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],
        'hasil_4' =>$data['hasil_4'],
        'rejek_4' =>$data['rejek_4'],
        'operator_4' =>$data['operator_4'],
        'kru_4' =>$data['kru_4'],
        'keterangan_4' =>$data['keterangan_4']


    );                        
    $this->db->set($ubah_klemseng);
    $this->db->where('id_klemseng',$data['id_klemseng']);
    $this->db->update('klemseng'); 

    $ubah_klemseng_khusus = array(                                                                                           
        'status_klemseng' =>$data['status_klemseng']                                                        
    );                        
    $this->db->set($ubah_klemseng_khusus);
    $this->db->where('id_order',$data['id_order']);
    $this->db->update('klemseng');  

}

public function proses_tambah_klemseng($data)
{
        $tambah_jadwal_klemseng = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'tanggal_pelaksanaan_klemseng' =>$data['tanggal_pelaksanaan_klemseng'],   
            'id_jadwal_klemseng' =>$data['id_jadwal_klemseng'],   
            'status_klemseng' =>$data['status_klemseng'],   
            'keterangan_jadwal_klemseng' =>$data['keterangan_jadwal_klemseng'], 

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
            'keterangan_2' =>$data['keterangan_2'],    
            
            'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],   
            'hasil_3' =>$data['hasil_3'],   
            'rejek_3' =>$data['rejek_3'],   
            'operator_3' =>$data['operator_3'],   
            'kru_3' =>$data['kru_3'],   
            'keterangan_3' =>$data['keterangan_3'], 

            'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],   
            'hasil_4' =>$data['hasil_4'],   
            'rejek_4' =>$data['rejek_4'],   
            'operator_4' =>$data['operator_4'],   
            'kru_4' =>$data['kru_4'],   
            'keterangan_4' =>$data['keterangan_4']

        );                                                          
        $this->db->insert('klemseng',$tambah_jadwal_klemseng);

}

//// MESIN spiral
public function get_jadwal_spiral()
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
        
        spiral.id_jadwal_spiral as id_jadwal_spiral,
        spiral.status_spiral as status_spiral,
        spiral.id_spiral as id_spiral,
        spiral.hasil_1 as hasil_1,
        spiral.hasil_2 as hasil_2,
        spiral.hasil_3 as hasil_3,
        spiral.hasil_4 as hasil_4,
        spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,
        spiral.keterangan_jadwal_spiral as keterangan_jadwal_spiral
        
        '
        
    );           

    $this->db->from('order');                           
    $this->db->join('spiral','order.id_order = spiral.id_order' ); 
    $this->db->where('spiral.tanggal_pelaksanaan_spiral !=', '0000-00-00');    
    $this->db->order_by('spiral.tanggal_pelaksanaan_spiral', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}


public function ambil_data_spiral($id)
{
    $this->db->select(
        '   
            spiral.id_jadwal_spiral as id_jadwal_spiral,
            spiral.hasil_1 as hasil_1,
            spiral.hasil_2 as hasil_2,
            spiral.hasil_3 as hasil_3,
            spiral.hasil_4 as hasil_4
        '
    );
    $this->db->from('order');
    $this->db->join('spiral','spiral.id_order = order.id_order');    
    $this->db->where('spiral.id_order', $id);          
    $query = $this->db->get();
    return $query;   
}

public function ambilIDOrder_spiral($id_order)
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
        
        spiral.status_spiral as status_spiral,
        spiral.id_jadwal_spiral as id_jadwal_spiral,
        spiral.id_spiral as id_spiral,
        spiral.hasil_1 as hasil_1,
        spiral.hasil_2 as hasil_2,            
        spiral.hasil_3 as hasil_3, 
        spiral.hasil_4 as hasil_4, 
        spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral'
        
    );           

    $this->db->from('order');                           
    $this->db->join('spiral','order.id_order = spiral.id_order' ); 
    $this->db->where('spiral.tanggal_pelaksanaan_spiral !=', '0000-00-00');    
    $this->db->where('spiral.id_order', $id_order);
    $this->db->order_by('spiral.tanggal_pelaksanaan_spiral', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}


public function edit_spiral($id)
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

        binding.status_binding as status_binding,            
        hardcover.status_hardcover as status_hardcover,
        jahit.status_jahit as status_jahit,
        fa_potong.status_fa_potong as status_fa_potong,
        sub_finishing.status_sub as status_sub,
        klemseng.status_klemseng as status_klemseng,
        spiral.status_spiral as status_spiral,

        binding.tanggal_pelaksanaan_binding as tanggal_pelaksanaan_binding,
        hardcover.tanggal_pelaksanaan_hardcover as tanggal_pelaksanaan_hardcover,
        jahit.tanggal_pelaksanaan_jahit as tanggal_pelaksanaan_jahit,
        fa_potong.tanggal_pelaksanaan_fa_potong as tanggal_pelaksanaan_fa_potong,
        sub_finishing.tanggal_pelaksanaan_sub as tanggal_pelaksanaan_sub,
        klemseng.tanggal_pelaksanaan_klemseng as tanggal_pelaksanaan_klemseng,
        spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,

        susun.hasil_1 as susun_hasil_1,
        susun.hasil_2 as susun_hasil_2,            

        spiral.id_spiral as id_spiral,
        spiral.tanggal_pelaksanaan_spiral as tanggal_pelaksanaan_spiral,                        
        spiral.keterangan_jadwal_spiral as keterangan_jadwal_spiral,
        
        spiral.tanggal_pengerjaan_1 as tanggal_pengerjaan_1,
        spiral.hasil_1 as hasil_1,
        spiral.rejek_1 as rejek_1,
        spiral.operator_1 as operator_1,
        spiral.kru_1 as kru_1,
        spiral.keterangan_1 as keterangan_1,
        spiral.tanggal_pengerjaan_2 as tanggal_pengerjaan_2,
        spiral.hasil_2 as hasil_2,
        spiral.rejek_2 as rejek_2,
        spiral.operator_2 as operator_2,
        spiral.kru_2 as kru_2,
        spiral.keterangan_2 as keterangan_2,     
        spiral.tanggal_pengerjaan_3 as tanggal_pengerjaan_3,
        spiral.hasil_3 as hasil_3,
        spiral.rejek_3 as rejek_3,
        spiral.operator_3 as operator_3,
        spiral.kru_3 as kru_3,
        spiral.keterangan_3 as keterangan_3,  
        spiral.tanggal_pengerjaan_4 as tanggal_pengerjaan_4,
        spiral.hasil_4 as hasil_4,
        spiral.rejek_4 as rejek_4,
        spiral.operator_4 as operator_4,
        spiral.kru_4 as kru_4,
        spiral.keterangan_4 as keterangan_4                  
        '
    );           
    // $this->db->select_max('laminasi.id_jadwal_laminasi');
    $this->db->from('order');                           

    $this->db->join('binding','order.id_order = binding.id_order','left' );         
    $this->db->join('hardcover','order.id_order = hardcover.id_order','left' );
    $this->db->join('jahit','order.id_order = jahit.id_order','left' );
    $this->db->join('fa_potong','order.id_order = fa_potong.id_order' ,'left');
    $this->db->join('sub_finishing','order.id_order = sub_finishing.id_order' ,'left');
    $this->db->join('klemseng','order.id_order = klemseng.id_order','left' );
    $this->db->join('spiral','order.id_order = spiral.id_order','left' );

    $this->db->join('susun','order.id_order = susun.id_order','left' );
    $this->db->join('finishing','order.id_order = finishing.id_order' ); 
    $this->db->where('spiral.id_spiral', $id);       
    $this->db->limit(1);
    
    $query = $this->db->get();
    return $query;  

}


public function proses_edit_spiral($data)
{   
    $ubah_spiral = array(                     
        'tanggal_pelaksanaan_spiral' =>$data['tanggal_pelaksanaan_spiral'],
        'keterangan_jadwal_spiral' =>$data['keterangan_jadwal_spiral'],

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
        'keterangan_2' =>$data['keterangan_2'],

        'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],
        'hasil_3' =>$data['hasil_3'],
        'rejek_3' =>$data['rejek_3'],
        'operator_3' =>$data['operator_3'],
        'kru_3' =>$data['kru_3'],
        'keterangan_3' =>$data['keterangan_3'],

        'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],
        'hasil_4' =>$data['hasil_4'],
        'rejek_4' =>$data['rejek_4'],
        'operator_4' =>$data['operator_4'],
        'kru_4' =>$data['kru_4'],
        'keterangan_4' =>$data['keterangan_4']


    );                        
    $this->db->set($ubah_spiral);
    $this->db->where('id_spiral',$data['id_spiral']);
    $this->db->update('spiral'); 

    $ubah_spiral_khusus = array(                                                                                           
        'status_spiral' =>$data['status_spiral']                                                        
    );                        
    $this->db->set($ubah_spiral_khusus);
    $this->db->where('id_order',$data['id_order']);
    $this->db->update('spiral');  

}

public function proses_tambah_spiral($data)
{
        $tambah_jadwal_spiral = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'tanggal_pelaksanaan_spiral' =>$data['tanggal_pelaksanaan_spiral'],   
            'id_jadwal_spiral' =>$data['id_jadwal_spiral'],   
            'status_spiral' =>$data['status_spiral'],   
            'keterangan_jadwal_spiral' =>$data['keterangan_jadwal_spiral'], 

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
            'keterangan_2' =>$data['keterangan_2'],    
            
            'tanggal_pengerjaan_3' =>$data['tanggal_pengerjaan_3'],   
            'hasil_3' =>$data['hasil_3'],   
            'rejek_3' =>$data['rejek_3'],   
            'operator_3' =>$data['operator_3'],   
            'kru_3' =>$data['kru_3'],   
            'keterangan_3' =>$data['keterangan_3'], 

            'tanggal_pengerjaan_4' =>$data['tanggal_pengerjaan_4'],   
            'hasil_4' =>$data['hasil_4'],   
            'rejek_4' =>$data['rejek_4'],   
            'operator_4' =>$data['operator_4'],   
            'kru_4' =>$data['kru_4'],   
            'keterangan_4' =>$data['keterangan_4']

        );                                                          
        $this->db->insert('spiral',$tambah_jadwal_spiral);

}

//// Hapus binding
public function hapus_binding($id)
{
    $this->db->where('id_binding', $id);
    $this->db->delete('binding');
}

public function hapus_binding_update($data)
{
    $hapus_binding = array(
        'id_jadwal_binding' => 0,   
        'status_binding' => null,             
        'tanggal_pelaksanaan_binding' => null,
        'keterangan_jadwal_binding' => null,

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

        'tanggal_pengerjaan_3' => null,
        'hasil_3' => null,
        'rejek_3' => null,
        'operator_3' => null,
        'kru_3' => null,
        'keterangan_3' => null,        

        'tanggal_pengerjaan_4' => null,
        'hasil_4' => null,
        'rejek_4' => null,
        'operator_4' => null,
        'kru_4' => null,
        'keterangan_4' => null        
                                                                              
    );            
    $this->db->set($hapus_binding);    
    $this->db->where('id_order',$data);    
    $this->db->update('binding');
}


// hapus hardcover
public function hapus_hardcover($id)
{
    $this->db->where('id_hardcover', $id);
    $this->db->delete('hardcover');
}

public function hapus_hardcover_update($data)
{
    $hapus_hardcover = array(
        'id_jadwal_hardcover' => 0,   
        'status_hardcover' => null,             
        'tanggal_pelaksanaan_hardcover' => null,
        'keterangan_jadwal_hardcover' => null,

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

        'tanggal_pengerjaan_3' => null,
        'hasil_3' => null,
        'rejek_3' => null,
        'operator_3' => null,
        'kru_3' => null,
        'keterangan_3' => null,        

        'tanggal_pengerjaan_4' => null,
        'hasil_4' => null,
        'rejek_4' => null,
        'operator_4' => null,
        'kru_4' => null,
        'keterangan_4' => null        
                                                                              
    );            
    $this->db->set($hapus_hardcover);    
    $this->db->where('id_order',$data);    
    $this->db->update('hardcover');
}

// hapus jahit
public function hapus_jahit($id)
{
    $this->db->where('id_jahit', $id);
    $this->db->delete('jahit');
}

public function hapus_jahit_update($data)
{
    $hapus_jahit = array(
        'id_jadwal_jahit' => 0,   
        'status_jahit' => null,             
        'tanggal_pelaksanaan_jahit' => null,
        'keterangan_jadwal_jahit' => null,

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

        'tanggal_pengerjaan_3' => null,
        'hasil_3' => null,
        'rejek_3' => null,
        'operator_3' => null,
        'kru_3' => null,
        'keterangan_3' => null,        

        'tanggal_pengerjaan_4' => null,
        'hasil_4' => null,
        'rejek_4' => null,
        'operator_4' => null,
        'kru_4' => null,
        'keterangan_4' => null        
                                                                              
    );            
    $this->db->set($hapus_jahit);    
    $this->db->where('id_order',$data);    
    $this->db->update('jahit');
}

// hapus fa_potong
public function hapus_fa_potong($id)
{
    $this->db->where('id_fa_potong', $id);
    $this->db->delete('fa_potong');
}

public function hapus_fa_potong_update($data)
{
    $hapus_fa_potong = array(
        'id_jadwal_fa_potong' => 0,   
        'status_fa_potong' => null,             
        'tanggal_pelaksanaan_fa_potong' => null,
        'keterangan_jadwal_fa_potong' => null,

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

        'tanggal_pengerjaan_3' => null,
        'hasil_3' => null,
        'rejek_3' => null,
        'operator_3' => null,
        'kru_3' => null,
        'keterangan_3' => null,        

        'tanggal_pengerjaan_4' => null,
        'hasil_4' => null,
        'rejek_4' => null,
        'operator_4' => null,
        'kru_4' => null,
        'keterangan_4' => null        
                                                                              
    );            
    $this->db->set($hapus_fa_potong);    
    $this->db->where('id_order',$data);    
    $this->db->update('fa_potong');
}



// hapus sub
public function hapus_sub($id)
{
    $this->db->where('id_sub', $id);
    $this->db->delete('sub_finishing');
}

public function hapus_sub_update($data)
{
    $hapus_sub = array(
        'id_jadwal_sub' => 0,   
        'status_sub' => null,             
        'tanggal_pelaksanaan_sub' => null,
        'keterangan_jadwal_sub' => null,

        'tanggal_kembali_sub' => null,
        'hasil' => null,
        'rejek' => null,
        'operator' => null,
        'kru' => null,
        'keterangan' => null,     
        
        'jenis_sub_binding' =>null,
        'jenis_sub_hardcover' =>null,
        'jenis_sub_jahit' =>null,
        'jenis_sub_fa_potong' =>null,
        'jenis_sub_klemseng' =>null,
        'jenis_sub_spiral' =>null
                                                                              
    );            
    $this->db->set($hapus_sub);    
    $this->db->where('id_order',$data);    
    $this->db->update('sub_finishing');
}


// hapus klemseng
public function hapus_klemseng($id)
{
    $this->db->where('id_klemseng', $id);
    $this->db->delete('klemseng');
}

public function hapus_klemseng_update($data)
{
    $hapus_klemseng = array(
        'id_jadwal_klemseng' => 0,   
        'status_klemseng' => null,             
        'tanggal_pelaksanaan_klemseng' => null,
        'keterangan_jadwal_klemseng' => null,

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

        'tanggal_pengerjaan_3' => null,
        'hasil_3' => null,
        'rejek_3' => null,
        'operator_3' => null,
        'kru_3' => null,
        'keterangan_3' => null,        

        'tanggal_pengerjaan_4' => null,
        'hasil_4' => null,
        'rejek_4' => null,
        'operator_4' => null,
        'kru_4' => null,
        'keterangan_4' => null        
                                                                              
    );            
    $this->db->set($hapus_klemseng);    
    $this->db->where('id_order',$data);    
    $this->db->update('klemseng');
}


// hapus spiral
public function hapus_spiral($id)
{
    $this->db->where('id_spiral', $id);
    $this->db->delete('spiral');
}

public function hapus_spiral_update($data)
{
    $hapus_spiral = array(
        'id_jadwal_spiral' => 0,   
        'status_spiral' => null,             
        'tanggal_pelaksanaan_spiral' => null,
        'keterangan_jadwal_spiral' => null,

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

        'tanggal_pengerjaan_3' => null,
        'hasil_3' => null,
        'rejek_3' => null,
        'operator_3' => null,
        'kru_3' => null,
        'keterangan_3' => null,        

        'tanggal_pengerjaan_4' => null,
        'hasil_4' => null,
        'rejek_4' => null,
        'operator_4' => null,
        'kru_4' => null,
        'keterangan_4' => null      
                                                                              
    );            
    $this->db->set($hapus_spiral);    
    $this->db->where('id_order',$data);    
    $this->db->update('spiral');
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