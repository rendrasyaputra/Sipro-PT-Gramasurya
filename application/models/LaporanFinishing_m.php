<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanFinishing_m extends CI_Model {

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

        $this->db->join('binding','binding.id_order = order.id_order','left');
        $this->db->join('fa_potong','fa_potong.id_order = order.id_order','left');
        $this->db->join('jahit','jahit.id_order = order.id_order','left');
        $this->db->join('hardcover','hardcover.id_order = order.id_order','left');
        $this->db->join('sub_finishing','sub_finishing.id_order = order.id_order','left');  
        $this->db->join('klemseng','klemseng.id_order = order.id_order','left');
        $this->db->join('spiral','spiral.id_order = order.id_order','left');

        $this->db->join('qc','qc.id_order = order.id_order','left');
        
        

        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);
              

               
        $query = $this->db->get();
        return $query; 
}
   public function filter_bulan($bulan, $tahun)
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

        $this->db->join('binding','binding.id_order = order.id_order','left');
        $this->db->join('fa_potong','fa_potong.id_order = order.id_order','left');
        $this->db->join('jahit','jahit.id_order = order.id_order','left');
        $this->db->join('hardcover','hardcover.id_order = order.id_order','left');
        $this->db->join('sub_finishing','sub_finishing.id_order = order.id_order','left');  
        $this->db->join('klemseng','klemseng.id_order = order.id_order','left');
        $this->db->join('spiral','spiral.id_order = order.id_order','left');
        $this->db->where('MONTH(order.tanggal_masuk)',$bulan);
        $this->db->where('YEAR(order.tanggal_masuk)',$tahun);
        $this->db->join('qc','qc.id_order = order.id_order','left');
        
        

        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);
              

               
        $query = $this->db->get();
        return $query; 
}
public function filter_tahun($tahun)
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

        $this->db->join('binding','binding.id_order = order.id_order','left');
        $this->db->join('fa_potong','fa_potong.id_order = order.id_order','left');
        $this->db->join('jahit','jahit.id_order = order.id_order','left');
        $this->db->join('hardcover','hardcover.id_order = order.id_order','left');
        $this->db->join('sub_finishing','sub_finishing.id_order = order.id_order','left');  
        $this->db->join('klemseng','klemseng.id_order = order.id_order','left');
        $this->db->join('spiral','spiral.id_order = order.id_order','left');
        $this->db->where('YEAR(order.tanggal_masuk)',$tahun);
        $this->db->join('qc','qc.id_order = order.id_order','left');
        
        

        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);
              

               
        $query = $this->db->get();
        return $query; 
}




}