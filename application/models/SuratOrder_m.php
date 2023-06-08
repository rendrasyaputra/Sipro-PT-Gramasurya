<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratOrder_m extends CI_Model {

    // ambil data nilai id_order yang paling akhir
    public function get_id_order()
    {
        $this->db->select_max('id_order');
        $this->db->from('order');        
        $query = $this->db->get();
        return $query;   
    }

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
            
            finishing.finishing_akhir_bending as bending,
            finishing.finishing_akhir_hard_cover as hard_cover, 
            finishing.finishing_akhir_jahit_benang as jahit_benang, 
            finishing.finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing.finishing_akhir_pond as pond, 
            finishing.finishing_akhir_klem as klem,
            finishing.finishing_akhir_spiral as spiral'
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order');    
        $this->db->order_by('id_order', 'desc');    
        $query = $this->db->get();
        return $query;   
    }
    public function filter_bulan($bulan,$tahun)
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_klem as klem,finishing.finishing_akhir_spiral as spiral'
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order');    
        $this->db->where('MONTH(order.tanggal_masuk)',$bulan);
        $this->db->where('YEAR(order.tanggal_masuk)',$tahun);
        $this->db->order_by('id_order', 'desc');    
        $query = $this->db->get();
        return $query;   
    }
    public function del($id){
        $this->db->where('id_order', $id);
        $this->db->delete('order');
    }
	public function add($data)
	{
        // tambah bagian surat order  
		$tambah_so = array(            
            'id_order' =>$data['id_order'],            
            'nomor_so' =>$data['nomor_so'],
            'tanggal_masuk' =>$data['tanggal_masuk'],
            'deadline' =>$data['deadline'],
            'nama_pemesan' =>$data['nama_pemesan'],
            'nama_orderan' =>$data['nama_orderan'],
            'ukuran' =>$data['ukuran'],
            'halaman' =>$data['halaman'],
            'oplag' =>$data['oplag'],
            'so_status' =>$data['so_status']                        
        );
        $this->db->insert('order',$tambah_so);

        // // tambah bagian ctcp
        $tambah_ctcp = array(
            'id_order' =>$data['id_order'],
            'ctcp_cover_1' =>$data['ctcp_cover_1'],
            'ctcp_isi_1' =>$data['ctcp_isi_1'],
            'plat_cover_1' =>$data['plat_cover_1'],
            'plat_isi_1' =>$data['plat_isi_1'],
            'ctcp_cover_2' =>$data['ctcp_cover_2'],
            'ctcp_isi_2' =>$data['ctcp_isi_2'],
            'plat_cover_2' =>$data['plat_cover_2'],
            'plat_isi_2' =>$data['plat_isi_2'],
            'ctcp_cover_3' =>$data['ctcp_cover_3'],
            'ctcp_isi_3' =>$data['ctcp_isi_3'],
            'plat_cover_3' =>$data['plat_cover_3'],
            'plat_isi_3' =>$data['plat_isi_3']
        );
        $this->db->insert('ctcp',$tambah_ctcp);

        // tambah bagian kertas
        $tambah_kertas = array(
            'id_order' =>$data['id_order'],
            'jenis_kertas_cover_1' =>$data['jenis_kertas_cover_1'],
            'jenis_kertas_isi_1' =>$data['jenis_kertas_isi_1'],
            'ukuran_plano_cover_1' =>$data['ukuran_plano_cover_1'],
            'ukuran_plano_isi_1' =>$data['ukuran_plano_isi_1'],
            'jumlah_kertas_cover_1' =>$data['jumlah_kertas_cover_1'],
            'jumlah_kertas_isi_1' =>$data['jumlah_kertas_isi_1'],
            'jenis_kertas_cover_2' =>$data['jenis_kertas_cover_2'],
            'jenis_kertas_isi_2' =>$data['jenis_kertas_isi_2'],
            'ukuran_plano_cover_2' =>$data['ukuran_plano_cover_2'],
            'ukuran_plano_isi_2' =>$data['ukuran_plano_isi_2'],
            'jumlah_kertas_cover_2' =>$data['jumlah_kertas_cover_2'],
            'jumlah_kertas_isi_2' =>$data['jumlah_kertas_isi_2'],
            'jenis_kertas_cover_3' =>$data['jenis_kertas_cover_3'],
            'jenis_kertas_isi_3' =>$data['jenis_kertas_isi_3'],
            'ukuran_plano_cover_3' =>$data['ukuran_plano_cover_3'],
            'ukuran_plano_isi_3' =>$data['ukuran_plano_isi_3'],
            'jumlah_kertas_cover_3' =>$data['jumlah_kertas_cover_3'],
            'jumlah_kertas_isi_3' =>$data['jumlah_kertas_isi_3']
        );
        $this->db->insert('kertas',$tambah_kertas);

         // tambah bagian kertas
         $tambah_potong = array(
            'id_order' =>$data['id_order'],
            'potong_cover_1' =>$data['potong_cover_1'],
            'potong_isi_1' =>$data['potong_isi_1'],
            'potong_cover_2' =>$data['potong_cover_2'],
            'potong_isi_2' =>$data['potong_isi_2'],
            'potong_cover_3' =>$data['potong_cover_3'],
            'potong_isi_3' =>$data['potong_isi_3'],
            'potong_isi_4' =>$data['potong_isi_4'],
         );
        $this->db->insert('potong',$tambah_potong);

        // tambah bagian cetak
        $tambah_cetak = array(
            'id_order' =>$data['id_order'],
            'mesin_cover_1' =>$data['mesin_cover_1'],
            'mesin_isi_1' =>$data['mesin_isi_1'],
            'warna_cover_1' =>$data['warna_cover_1'],
            'warna_isi_1' =>$data['warna_isi_1'],
            'insit_cover_1' =>$data['insit_cover_1'],
            'insit_isi_1' =>$data['insit_isi_1'],
            'mesin_cover_2' =>$data['mesin_cover_2'],
            'mesin_isi_2' =>$data['mesin_isi_2'],
            'warna_cover_2' =>$data['warna_cover_2'],
            'warna_isi_2' =>$data['warna_isi_2'],
            'insit_cover_2' =>$data['insit_cover_2'],
            'insit_isi_2' =>$data['insit_isi_2'],
            'mesin_cover_3' =>$data['mesin_cover_3'],
            'mesin_isi_3' =>$data['mesin_isi_3'],
            'warna_cover_3' =>$data['warna_cover_3'],
            'warna_isi_3' =>$data['warna_isi_3'],
            'insit_cover_3' =>$data['insit_cover_3'],
            'insit_isi_3' =>$data['insit_isi_3'],
            'keterangan_cetak_cover' =>$data['keterangan_cetak_cover'],  
            'keterangan_cetak_isi' =>$data['keterangan_cetak_isi']    
            
        );
        $this->db->insert('cetak',$tambah_cetak);

        // tambah bagian finishing
        $tambah_finishing = array(
            'id_order' =>$data['id_order'],
            'finishing_cover_doff' =>$data['finishing_cover_doff'],
            'finishing_cover_emboss' =>$data['finishing_cover_emboss'],
            'finishing_cover_glossy' =>$data['finishing_cover_glossy'],
            'finishing_cover_hotprint' =>$data['finishing_cover_hotprint'],
            'finishing_cover_spot_uvi' =>$data['finishing_cover_spot_uvi'],
            'finishing_cover_uvi' =>$data['finishing_cover_uvi'],
            'finishing_isi_lipat' =>$data['finishing_isi_lipat'],
            'finishing_isi_susun' =>$data['finishing_isi_susun'],
            'finishing_akhir_bending' =>$data['finishing_akhir_bending'],
            'finishing_akhir_hard_cover' =>$data['finishing_akhir_hard_cover'],
            'finishing_akhir_jahit_benang' =>$data['finishing_akhir_jahit_benang'],
            'finishing_akhir_jahit_kawat' =>$data['finishing_akhir_jahit_kawat'],
            'finishing_akhir_pond' =>$data['finishing_akhir_pond'],
            'finishing_akhir_klem' =>$data['finishing_akhir_klem'],
            'finishing_akhir_spiral' =>$data['finishing_akhir_spiral']
            // 'keterangan_finishing_cover' =>$data['keterangan_finishing_cover'],
            // 'keterangan_finishing_isi' =>$data['keterangan_finishing_isi'],
            // 'keterangan_finishing_akhir' =>$data['keterangan_finishing_akhir']
        );
        $this->db->insert('finishing',$tambah_finishing);
    }

    // data edit
    public function get_edit($id)
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status,                     

            ct.ctcp_cover_1 as ctcp_cover_1,
            ct.ctcp_isi_1 as ctcp_isi_1,
            ct.plat_cover_1 as plat_cover_1,
            ct.plat_isi_1 as plat_isi_1,
            ct.ctcp_cover_2 as ctcp_cover_2,
            ct.ctcp_isi_2 as ctcp_isi_2,
            ct.plat_cover_2 as plat_cover_2,
            ct.plat_isi_2 as plat_isi_2,
            ct.ctcp_cover_3 as ctcp_cover_3,
            ct.ctcp_isi_3 as ctcp_isi_3,
            ct.plat_cover_3 as plat_cover_3,
            ct.plat_isi_3 as plat_isi_3,        
               
            ke.jenis_kertas_cover_1 as jenis_kertas_cover_1,
            ke.jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ke.ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ke.ukuran_plano_isi_1  as ukuran_plano_isi_1,
            ke.jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            ke.jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            ke.jenis_kertas_cover_2 as jenis_kertas_cover_2,
            ke.jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ke.ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ke.ukuran_plano_isi_2 as ukuran_plano_isi_2,
            ke.jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            ke.jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            ke.jenis_kertas_cover_3 as jenis_kertas_cover_3,
            ke.jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ke.ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ke.ukuran_plano_isi_3 as ukuran_plano_isi_3,
            ke.jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            ke.jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            po.potong_cover_1 as potong_cover_1,
            po.potong_isi_1 as potong_isi_1,
            po.potong_cover_2 as potong_cover_2,
            po.potong_isi_2 as potong_isi_2,
            po.potong_cover_3 as potong_cover_3,
            po.potong_isi_3 as potong_isi_3,
            po.potong_isi_4 as potong_isi_4,
            
            ce.mesin_cover_1 as mesin_cover_1,
            ce.mesin_isi_1 as mesin_isi_1,
            ce.warna_cover_1 as warna_cover_1,
            ce.warna_isi_1 as warna_isi_1,
            ce.insit_cover_1 as insit_cover_1,
            ce.insit_isi_1 as insit_isi_1,
            ce.mesin_cover_2 as mesin_cover_2,
            ce.mesin_isi_2 as mesin_isi_2,
            ce.warna_cover_2 as warna_cover_2,
            ce.warna_isi_2 as warna_isi_2,
            ce.insit_cover_2 as insit_cover_2,
            ce.insit_isi_2 as insit_isi_2,
            ce.mesin_cover_3 as mesin_cover_3,
            ce.mesin_isi_3 as mesin_isi_3,
            ce.warna_cover_3 as warna_cover_3,
            ce.warna_isi_3 as warna_isi_3,
            ce.insit_cover_3 as insit_cover_3,
            ce.insit_isi_3 as insit_isi_3,
            ce.keterangan_cetak_cover as keterangan_cetak_cover,
            ce.keterangan_cetak_isi as keterangan_cetak_isi,

            fi.finishing_cover_doff as doff,
            fi.finishing_cover_emboss as emboss,
            fi.finishing_cover_glossy as glossy,
            fi.finishing_cover_hotprint as hotprint,
            fi.finishing_cover_spot_uvi as spot_uvi,
            fi.finishing_cover_uvi as uvi,
            fi.finishing_isi_lipat as lipat,
            fi.finishing_isi_susun as susun,
            fi.finishing_akhir_bending as bending, 
            fi.finishing_akhir_hard_cover as hard_cover, 
            fi.finishing_akhir_jahit_benang as jahit_benang, 
            fi.finishing_akhir_jahit_kawat as jahit_kawat, 
            fi.finishing_akhir_pond as pond, 
            fi.finishing_akhir_klem as klem,
            fi.finishing_akhir_spiral as spiral'                        
        );
        $this->db->from('order');
        
        $this->db->join('ctcp as ct','ct.id_order = order.id_order'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order'); 
        $this->db->join('potong as po','po.id_order = order.id_order'); 
        $this->db->join('cetak as ce','ce.id_order = order.id_order');         
        $this->db->join('finishing as fi','fi.id_order = order.id_order');    
        
        $this->db->where('order.id_order', $id);
        $query = $this->db->get();
        return $query;   
    }


    public function edit($data)
	{
        // ubah bagian surat order  
		$ubah_so = array(            
            'id_order' =>$data['id_order'],
            'nomor_so' =>$data['nomor_so'],
            'tanggal_masuk' =>$data['tanggal_masuk'],
            'deadline' =>$data['deadline'],
            'nama_pemesan' =>$data['nama_pemesan'],
            'nama_orderan' =>$data['nama_orderan'],
            'ukuran' =>$data['ukuran'],
            'halaman' =>$data['halaman'],
            'oplag' =>$data['oplag'],
            'so_status' =>$data['so_status']                        
        );
        $this->db->set($ubah_so);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('order');                        
        
        // // ubah bagian ctcp
        $ubah_ctcp = array(
            'id_order' =>$data['id_order'],
            'ctcp_cover_1' =>$data['ctcp_cover_1'],
            'ctcp_isi_1' =>$data['ctcp_isi_1'],
            'plat_cover_1' =>$data['plat_cover_1'],
            'plat_isi_1' =>$data['plat_isi_1'],
            'ctcp_cover_2' =>$data['ctcp_cover_2'],
            'ctcp_isi_2' =>$data['ctcp_isi_2'],
            'plat_cover_2' =>$data['plat_cover_2'],
            'plat_isi_2' =>$data['plat_isi_2'],
            'ctcp_cover_3' =>$data['ctcp_cover_3'],
            'ctcp_isi_3' =>$data['ctcp_isi_3'],
            'plat_cover_3' =>$data['plat_cover_3'],
            'plat_isi_3' =>$data['plat_isi_3']
        );
        $this->db->set($ubah_ctcp);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('ctcp');
        

        // ubah bagian kertas
        $ubah_kertas = array(
            'id_order' =>$data['id_order'],
            'jenis_kertas_cover_1' =>$data['jenis_kertas_cover_1'],
            'jenis_kertas_isi_1' =>$data['jenis_kertas_isi_1'],
            'ukuran_plano_cover_1' =>$data['ukuran_plano_cover_1'],
            'ukuran_plano_isi_1' =>$data['ukuran_plano_isi_1'],
            'jumlah_kertas_cover_1' =>$data['jumlah_kertas_cover_1'],
            'jumlah_kertas_isi_1' =>$data['jumlah_kertas_isi_1'],
            'jenis_kertas_cover_2' =>$data['jenis_kertas_cover_2'],
            'jenis_kertas_isi_2' =>$data['jenis_kertas_isi_2'],
            'ukuran_plano_cover_2' =>$data['ukuran_plano_cover_2'],
            'ukuran_plano_isi_2' =>$data['ukuran_plano_isi_2'],
            'jumlah_kertas_cover_2' =>$data['jumlah_kertas_cover_2'],
            'jumlah_kertas_isi_2' =>$data['jumlah_kertas_isi_2'],
            'jenis_kertas_cover_3' =>$data['jenis_kertas_cover_3'],
            'jenis_kertas_isi_3' =>$data['jenis_kertas_isi_3'],
            'ukuran_plano_cover_3' =>$data['ukuran_plano_cover_3'],
            'ukuran_plano_isi_3' =>$data['ukuran_plano_isi_3'],
            'jumlah_kertas_cover_3' =>$data['jumlah_kertas_cover_3'],
            'jumlah_kertas_isi_3' =>$data['jumlah_kertas_isi_3']
        );
        $this->db->set($ubah_kertas);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('kertas');

         // ubah bagian kertas
         $ubah_potong = array(
            'id_order' =>$data['id_order'],
            'potong_cover_1' =>$data['potong_cover_1'],
            'potong_isi_1' =>$data['potong_isi_1'],
            'potong_cover_2' =>$data['potong_cover_2'],
            'potong_isi_2' =>$data['potong_isi_2'],
            'potong_cover_3' =>$data['potong_cover_3'],
            'potong_isi_3' =>$data['potong_isi_3'],
            'potong_isi_4' =>$data['potong_isi_4']
         );
         $this->db->set($ubah_potong);
         $this->db->where('id_order',$data['id_order']);
         $this->db->update('potong');

        // ubah bagian cetak
        $ubah_cetak = array(
            'id_order' =>$data['id_order'],
            'mesin_cover_1' =>$data['mesin_cover_1'],
            'mesin_isi_1' =>$data['mesin_isi_1'],
            'warna_cover_1' =>$data['warna_cover_1'],
            'warna_isi_1' =>$data['warna_isi_1'],
            'insit_cover_1' =>$data['insit_cover_1'],
            'insit_isi_1' =>$data['insit_isi_1'],
            'mesin_cover_2' =>$data['mesin_cover_2'],
            'mesin_isi_2' =>$data['mesin_isi_2'],
            'warna_cover_2' =>$data['warna_cover_2'],
            'warna_isi_2' =>$data['warna_isi_2'],
            'insit_cover_2' =>$data['insit_cover_2'],
            'insit_isi_2' =>$data['insit_isi_2'],
            'mesin_cover_3' =>$data['mesin_cover_3'],
            'mesin_isi_3' =>$data['mesin_isi_3'],
            'warna_cover_3' =>$data['warna_cover_3'],
            'warna_isi_3' =>$data['warna_isi_3'],
            'insit_cover_3' =>$data['insit_cover_3'],
            'insit_isi_3' =>$data['insit_isi_3'],
            'keterangan_cetak_cover' =>$data['keterangan_cetak_cover'],  
            'keterangan_cetak_isi' =>$data['keterangan_cetak_isi']  
            
        );
        $this->db->set($ubah_cetak);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('cetak');

        // ubah bagian finishing
        $ubah_finishing = array(
            'id_order' =>$data['id_order'],
            'finishing_cover_doff' =>$data['finishing_cover_doff'],
            'finishing_cover_emboss' =>$data['finishing_cover_emboss'],
            'finishing_cover_glossy' =>$data['finishing_cover_glossy'],
            'finishing_cover_hotprint' =>$data['finishing_cover_hotprint'],
            'finishing_cover_spot_uvi' =>$data['finishing_cover_spot_uvi'],
            'finishing_cover_uvi' =>$data['finishing_cover_uvi'],
            'finishing_isi_lipat' =>$data['finishing_isi_lipat'],
            'finishing_isi_susun' =>$data['finishing_isi_susun'],
            'finishing_akhir_bending' =>$data['finishing_akhir_bending'],
            'finishing_akhir_hard_cover' =>$data['finishing_akhir_hard_cover'],
            'finishing_akhir_jahit_benang' =>$data['finishing_akhir_jahit_benang'],
            'finishing_akhir_jahit_kawat' =>$data['finishing_akhir_jahit_kawat'],
            'finishing_akhir_pond' =>$data['finishing_akhir_pond'],
            'finishing_akhir_klem' =>$data['finishing_akhir_klem'],
            'finishing_akhir_spiral' =>$data['finishing_akhir_spiral']
            // 'keterangan_finishing_cover' =>$data['keterangan_finishing_cover'],
            // 'keterangan_finishing_isi' =>$data['keterangan_finishing_isi'],
            // 'keterangan_finishing_akhir' =>$data['keterangan_finishing_akhir']
        );
        $this->db->set($ubah_finishing);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('finishing');
    }
	

}