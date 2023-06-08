<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QualityControl_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status,

            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,
            
            finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,    

            qc.id_qc as id_qc,
            qc.hasil as hasil,
            qc.rejek as rejek,
            qc.keterangan as keterangan,
            qc.status as status
        
            
            '    
        );           
        

        $this->db->from('order');                
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->join('laminasi','laminasi.id_order = order.id_order','left');
        $this->db->join('mbo','mbo.id_order = order.id_order','left');
        $this->db->join('shoe','shoe.id_order = order.id_order','left');
        $this->db->join('susun','susun.id_order = order.id_order','left');
        $this->db->join('sub_proses','sub_proses.id_order = order.id_order','left');                                          
        $this->db->join('qc','qc.id_order = order.id_order','left');
        $this->db->where('order.so_status', "finishing proses");
        $this->db->or_where('order.so_status', "finishing akhir");
        $this->db->or_where('order.so_status', "quality control");
        
        

        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);
              

               
        $query = $this->db->get();
        return $query; 
}

public function proses_tambah_qc($data)
{
        $tambah_qc = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'status' =>$data['status'],   
            'hasil' =>$data['hasil'],   
            'rejek' =>$data['rejek'],                                 
            'keterangan' =>$data['keterangan'] 

        );                                                          
        $this->db->insert('qc',$tambah_qc);

}

public function proses_edit_qc($data)
{
        $ubah_qc = array(                                                                         
            'id_order' =>$data['id_order'],                                   
            'status' =>$data['status'],   
            'hasil' =>$data['hasil'],   
            'rejek' =>$data['rejek'],                                 
            'keterangan' =>$data['keterangan'] 

        );                                                          
        $this->db->set($ubah_qc);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('qc');

}

public function lihat_qc($id)
{
    $this->db->select(
        'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status,

        finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,
        
        finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,    

        qc.id_qc as id_qc,
        qc.hasil as hasil,
        qc.rejek as rejek,
        qc.keterangan as keterangan,
        qc.status as status
    
        
        '    
    );           

    $this->db->from('order');                
    $this->db->join('finishing','finishing.id_order = order.id_order');
    $this->db->join('laminasi','laminasi.id_order = order.id_order','left');
    $this->db->join('mbo','mbo.id_order = order.id_order','left');
    $this->db->join('shoe','shoe.id_order = order.id_order','left');
    $this->db->join('susun','susun.id_order = order.id_order','left');
    $this->db->join('sub_proses','sub_proses.id_order = order.id_order','left');                                          
    $this->db->join('qc','qc.id_order = order.id_order','left');
    $this->db->where('qc.id_order', $id);
    $this->db->limit(1);
    
    

    $this->db->order_by('order.id_order', 'desc');
    // $this->db->where_in('imposisi.imposisi_status', $status_impo);
          

           
    $query = $this->db->get();
    return $query; 
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
