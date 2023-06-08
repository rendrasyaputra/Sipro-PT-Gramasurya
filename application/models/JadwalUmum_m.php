<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalUmum_m extends CI_Model {

    public function get()
    {
        $this->db->select(
            'order.id_order as id_order,
             order.nomor_so as nomor_so, 
             order.tanggal_masuk as tanggal_masuk, 
             order.deadline as deadline, 
             order.nama_pemesan as nama_pemesan,  
             order.nama_orderan as nama_orderan, 
             order.ukuran as ukuran, 
             order.halaman as halaman, 
             order.oplag as oplag, 
             order.so_status as so_status,

            display_cetak.id_display_cetak as id_display_cetak,
            display_cetak.status_cetak_cover as status_cetak_cover,
            display_cetak.status_cetak_isi as status_cetak_isi,
            display_cetak.status_cetak as status_cetak,

            finishing.finishing_akhir_bending as bending, 
            finishing.finishing_akhir_hard_cover as hard_cover, 
            finishing.finishing_akhir_jahit_benang as jahit_benang, 
            finishing.finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing.finishing_akhir_pond as pond,
            finishing.finishing_akhir_klem as klem, 
            finishing.finishing_akhir_spiral as spiral,
            
            mesin_72.id_mesin_72 as id_mesin_72,
            mesin_72.nama_mesin as nama_mesin,
            mesin_72.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_72.operator as operator,
            mesin_72.kru_operator_72 as kru_operator_72,
            mesin_72.target as target,
            mesin_72.druk as druk,
            mesin_72.total_kertas as total_kertas,
            mesin_72.set as set,
            mesin_72.jenis_cetakan as jenis_cetakan,
            
            mesin_74_a.id_mesin_74a as id_mesin_74a,
            mesin_74_a.nama_mesin as nama_mesin_74a,
            mesin_74_a.tanggal_pelaksanaan as tanggal_pelaksanaan_74a,
            mesin_74_a.operator as operator_74a,
            mesin_74_a.kru_operator_74a as kru_operator_74a,
            mesin_74_a.target as target_74a,
            mesin_74_a.druk as druk_74a,
            mesin_74_a.total_kertas as total_kertas_74a,
            mesin_74_a.set as set_74a,
            mesin_74_a.jenis_cetakan as jenis_cetakan_74a,

            mesin_74_b.id_mesin_74b as id_mesin_74b,
            mesin_74_b.nama_mesin as nama_mesin_74b,
            mesin_74_b.tanggal_pelaksanaan as tanggal_pelaksanaan_74b,
            mesin_74_b.operator as operator_74b,
            mesin_74_b.kru_operator_74b as kru_operator_74b,
            mesin_74_b.target as target_74b,
            mesin_74_b.druk as druk_74b,
            mesin_74_b.total_kertas as total_kertas_74b,
            mesin_74_b.set as set_74b,
            mesin_74_b.jenis_cetakan as jenis_cetakan_74b,

            mesin_102_a.id_mesin_102a as id_mesin_102a,
            mesin_102_a.nama_mesin as nama_mesin_102a,
            mesin_102_a.tanggal_pelaksanaan as tanggal_pelaksanaan_102a,
            mesin_102_a.operator as operator_102a,
            mesin_102_a.kru_operator_102a as kru_operator_102a,
            mesin_102_a.target as target_102a,
            mesin_102_a.druk as druk_102a,
            mesin_102_a.total_kertas as total_kertas_102a,
            mesin_102_a.set as set_102a,
            mesin_102_a.jenis_cetakan as jenis_cetakan_102a,

            mesin_102_b.id_mesin_102b as id_mesin_102b,
            mesin_102_b.nama_mesin as nama_mesin_102b,
            mesin_102_b.tanggal_pelaksanaan as tanggal_pelaksanaan_102b,
            mesin_102_b.operator as operator_102b,
            mesin_102_b.kru_operator_102b as kru_operator_102b,
            mesin_102_b.target as target_102b,
            mesin_102_b.druk as druk_102b,
            mesin_102_b.total_kertas as total_kertas_102b,
            mesin_102_b.set as set_102b,
            mesin_102_b.jenis_cetakan as jenis_cetakan_102b,

            mesin_tokko.id_mesin_tokko as id_mesin_tokko,
            mesin_tokko.nama_mesin as nama_mesin_tokko,
            mesin_tokko.tanggal_pelaksanaan as tanggal_pelaksanaan_tokko,
            mesin_tokko.operator as operator_tokko,
            mesin_tokko.kru_operator_tokko as kru_operator_tokko,
            mesin_tokko.target as target_tokko,
            mesin_tokko.druk as druk_tokko,
            mesin_tokko.total_kertas as total_kertas_tokko,
            mesin_tokko.set as set_tokko,
            mesin_tokko.jenis_cetakan as jenis_cetakan_tokko
            
            '
        );

        $so_status = array('pracetak','cetak','cetak cover','cetak isi');

        $this->db->from('order');
        $this->db->join('display_cetak','display_cetak.id_order = order.id_order','left');
        $this->db->join('finishing','finishing.id_order = order.id_order','left');
        $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
        $this->db->join('mesin_74_a','mesin_74_a.id_order = order.id_order','left');
        $this->db->join('mesin_74_b','mesin_74_b.id_order = order.id_order','left');
        $this->db->join('mesin_102_a','mesin_102_a.id_order = order.id_order','left');
        $this->db->join('mesin_102_b','mesin_102_b.id_order = order.id_order','left');
        $this->db->join('mesin_tokko','mesin_tokko.id_order = order.id_order','left');
        $this->db->where_in('order.so_status',$so_status);
        $this->db->order_by('id_order', 'desc');    
        $query = $this->db->get();
        return $query; 
    }

    public function ambil_data_mesin72($id)
        {
            $this->db->select(
                '   
                mesin_72.id_mesin_72 as id_mesin_72,
                mesin_72.nama_mesin as nama_mesin,
                mesin_72.tanggal_pelaksanaan as tanggal_pelaksanaan,
                mesin_72.operator as operator,
                mesin_72.target as target,
                mesin_72.druk as druk,
                mesin_72.total_kertas as total_kertas,
                mesin_72.set as set,
                mesin_72.jenis_cetakan as jenis_cetakan                 
                '
            );
            $this->db->from('order');                            
            $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
           

            $this->db->where('order.id_order', $id);                   
            $query = $this->db->get();
            return $query;   
}

    public function tambah_ju72($data)
	{
            $tambah_ju72 = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_72'],
                'operator' =>$data['operator_72'],
                'kru_operator_72' =>$data['kru_operator_72'],
                'target' =>$data['target_72'],
                'nama_mesin' =>$data['nama_mesin_72'],
                'druk' =>$data['druk_72'],
                'total_kertas' =>$data['kertas_72'],
                'set' =>$data['set_72'],
                'jenis_cetakan' =>$data['jenis_cetakan_72']            
            );
            $this->db->insert('mesin_72',$tambah_ju72);
    }
    public function tambah_ju74a($data)
	{            
            $tambah_74a = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_74a'],
                'operator' =>$data['operator_74a'],
                'kru_operator_74a' =>$data['kru_operator_74a'],
                'target' =>$data['target_74a'],
                'nama_mesin' =>$data['nama_mesin_74a'],
                'druk' =>$data['druk_74a'],
                'total_kertas' =>$data['kertas_74a'],
                'set' =>$data['set_74a'],
                'jenis_cetakan' =>$data['jenis_cetakan_74a']            
            );
            $this->db->insert('mesin_74_a',$tambah_74a);
    }
    public function tambah_ju74b($data)
	{
            $tambah_ju74b = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_74b'],
                'operator' =>$data['operator_74b'],
                'kru_operator_74b' =>$data['kru_operator_74b'],
                'target' =>$data['target_74b'],
                'nama_mesin' =>$data['nama_mesin_74b'],
                'druk' =>$data['druk_74b'],
                'total_kertas' =>$data['kertas_74b'],
                'set' =>$data['set_74b'],
                'jenis_cetakan' =>$data['jenis_cetakan_74b']            
            );
            $this->db->insert('mesin_74_b',$tambah_ju74b);
    }
    public function tambah_ju102a($data)
	{
            $tambah_ju102a = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_102a'],
                'operator' =>$data['operator_102a'],
                'kru_operator_102a' =>$data['kru_operator_102a'],
                'target' =>$data['target_102a'],
                'nama_mesin' =>$data['nama_mesin_102a'],
                'druk' =>$data['druk_102a'],
                'total_kertas' =>$data['kertas_102a'],
                'set' =>$data['set_102a'],
                'jenis_cetakan' =>$data['jenis_cetakan_102a']            
            );
            $this->db->insert('mesin_102_a',$tambah_ju102a);
    }
    public function tambah_ju102b($data)
	{
            $tambah_ju102b = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_102b'],
                'operator' =>$data['operator_102b'],
                'kru_operator_102b' =>$data['kru_operator_102b'],
                'target' =>$data['target_102b'],
                'nama_mesin' =>$data['nama_mesin_102b'],
                'druk' =>$data['druk_102b'],
                'total_kertas' =>$data['kertas_102b'],
                'set' =>$data['set_102b'],
                'jenis_cetakan' =>$data['jenis_cetakan_102b']            
            );
            $this->db->insert('mesin_102_b',$tambah_ju102b);
    }
    public function tambah_jutokko($data)
	{
            $tambah_jutokko = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_tokko'],
                'operator' =>$data['operator_tokko'],
                'kru_operator_tokko' =>$data['kru_operator_tokko'],
                'target' =>$data['target_tokko'],
                'nama_mesin' =>$data['nama_mesin_tokko'],
                'druk' =>$data['druk_tokko'],
                'total_kertas' =>$data['kertas_tokko'],
                'set' =>$data['set_tokko'],
                'jenis_cetakan' =>$data['jenis_cetakan_tokko']            
            );
            $this->db->insert('mesin_tokko',$tambah_jutokko);
    }
    

    public function edit_ju($data)
	{
            $edit_ju = array(         
                'id_order' =>$data['id_order'],
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_72'],
                'operator' =>$data['operator_72'],
                'target' =>$data['target_72'],
                'nama_mesin' =>$data['nama_mesin_72'],
                'druk' =>$data['druk_72'],
                'total_kertas' =>$data['kertas_72'],
                'set' =>$data['set_72'],
                'jenis_cetakan' =>$data['jenis_cetakan_72']  
                               
            );
            $this->db->set($edit_ju);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('mesin_72');

            $edit_74a = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_74a'],
                'operator' =>$data['operator_74a'],
                'target' =>$data['target_74a'],
                'nama_mesin' =>$data['nama_mesin_74a'],
                'druk' =>$data['druk_74a'],
                'total_kertas' =>$data['kertas_74a'],
                'set' =>$data['set_74a'],
                'jenis_cetakan' =>$data['jenis_cetakan_74a']            
            );
            $this->db->set($edit_74a);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('mesin_74_a');    
    }

    // public function get()
    // {
    //     $this->db->select(
    //         'order.id_order as id_order,
    //         order.nomor_so as nomor_so,
    //         order.tanggal_masuk as tanggal_masuk,
    //         order.deadline as deadline,
    //         order.nama_pemesan as nama_pemesan,
    //         order.nama_orderan as nama_orderan,
    //         order.ukuran as ukuran,
    //         order.halaman as halaman,
    //         order.oplag as oplag,
    //         order.so_status as so_status,

    //         finishing.finishing_akhir_bending as bending,
    //         finishing.finishing_akhir_hard_cover as hard_cover,
    //         finishing.finishing_akhir_jahit_benang as jahit_benang,
    //         finishing.finishing_akhir_jahit_kawat as jahit_kawat,
    //         finishing.finishing_akhir_pond as pond,
    //         finishing.finishing_akhir_klem as klem,
    //         finishing.finishing_akhir_spiral as spiral,

    //         jadwal_cetak.id_jadwal_cetak as id_jadwal_cetak,
    //         jadwal_cetak.mesin_cover as mesin_cover,
    //         jadwal_cetak.tanggal_pelaksanaan_cover as tanggal_pelaksanaan_cover,
    //         jadwal_cetak.operator_cover as operator_cover,
    //         jadwal_cetak.target_cover as target_cover,
    //         jadwal_cetak.druk_cover as druk_cover,
    //         jadwal_cetak.mesin_isi as mesin_isi,
    //         jadwal_cetak.tanggal_pelaksanaan_isi as tanggal_pelaksanaan_isi,
    //         jadwal_cetak.operator_isi as operator_isi,
    //         jadwal_cetak.target_isi as target_isi,
    //         jadwal_cetak.druk_isi as druk_isi,
    //         jadwal_cetak.total_kertas as total_kertas,

    //         ',
    //     );
    //     // $this->db->from('order');
    //     // $this->db->join('finishing','finishing.id_order = order.id_order','left');
    //     // $this->db->join('display_cetak','display_cetak.id_order = order.id_order','left');
    //     // $this->db->order_by('id_order', 'desc');    
    //     // $query = $this->db->get($id);
    //     // return $query;
        
    //     $this->db->from('order');
    //     $this->db->join('finishing','finishing.id_order = order.id_order');
    //     $this->db->join('jadwal_cetak','jadwal_cetak.id_order = order.id_order');
    //     if($id != null){
    //         $this->db->where('order.id_order', $id);
    //     }
    //     $query = $this->db->get();
    //     return $query;
    // }

public function cek_72($id)
{
    $this->db->select(
        '   
       id_mesin_72,
       jenis_cetakan,
       tanggal_pelaksanaan as tanggal_pelaksanaan_72
                      
        '
    );
    $this->db->from('mesin_72');                                   
    $this->db->where('id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}


public function cek_74a($id)
{
    $this->db->select(
        '   
       id_mesin_74a,
       jenis_cetakan,
       tanggal_pelaksanaan as tanggal_pelaksanaan_74a
                      
        '
    );
    $this->db->from('mesin_74_a');                                   
    $this->db->where('id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}

public function cek_74b($id)
{
    $this->db->select(
        '   
       id_mesin_74b,
       jenis_cetakan,
       tanggal_pelaksanaan as tanggal_pelaksanaan_74b
                      
        '
    );
    $this->db->from('mesin_74_b');                                   
    $this->db->where('id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}

public function cek_102a($id)
{
    $this->db->select(
        '   
       id_mesin_102a,
       jenis_cetakan,
       tanggal_pelaksanaan as tanggal_pelaksanaan_102a
                      
        '
    );
    $this->db->from('mesin_102_a');                                   
    $this->db->where('id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}


public function cek_102b($id)
{
    $this->db->select(
        '   
       id_mesin_102b,
       jenis_cetakan,
       tanggal_pelaksanaan as tanggal_pelaksanaan_102b
                      
        '
    );
    $this->db->from('mesin_102_b');                                   
    $this->db->where('id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}

public function cek_tokko($id)
{
    $this->db->select(
        '   
       id_mesin_tokko,
       jenis_cetakan,
       tanggal_pelaksanaan as tanggal_pelaksanaan_tokko
                      
        '
    );
    $this->db->from('mesin_tokko');                                   
    $this->db->where('id_order', $id);                   
    $query = $this->db->get();
    return $query;   
}













    

}