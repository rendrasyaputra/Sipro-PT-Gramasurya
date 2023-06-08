<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalMesin_m extends CI_Model {

    public function get_jadwal_72()
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
        

            mesin_72.id_mesin_72 as id_mesin_72,
            mesin_72.nama_mesin as nama_mesin,
            mesin_72.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_72.operator as operator,
            mesin_72.target as target,
            mesin_72.druk as druk,
            mesin_72.total_kertas as total_kertas,
            mesin_72.set as set,
            mesin_72.jenis_cetakan as jenis_cetakan,
            
            

            
            '
            // spk.tanggal_buat_spk as tanggal_buat_spk,
            // spk.ukuran_potong as ukuran_potong,
            // spk.jumlah_cetak as jumlah_cetak,
            // spk.1muka_fc_bw_warna as 1muka_fc_bw_warna,
            // spk.2muka_fc_fc-bw_bw-bw as 2muka_fc_fc-bw_bw-bw,
            // spk.2muka_blk as 2muka_blk,
            // spk.2muka_blg as 2muka_blg,
            // spk.keterangan_spk as keterangan_spk',
        );
        $this->db->from('order');
        $this->db->join('mesin_72','order.id_order = mesin_72.id_order','left');
        // $this->db->join('spk','order.id_order = spk.id_order','left');
        $this->db->where('mesin_72.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('mesin_72.tanggal_pelaksanaan', 'asc');      
        $query = $this->db->get();
        return $query;  
    }

    public function get_jadwal_74a()
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
        

            mesin_74_a.id_mesin_74a as id_mesin_74a,
            mesin_74_a.nama_mesin as nama_mesin,
            mesin_74_a.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_74_a.operator as operator,
            mesin_74_a.target as target,
            mesin_74_a.druk as druk,
            mesin_74_a.total_kertas as total_kertas,
            mesin_74_a.set as set,
            mesin_74_a.jenis_cetakan as jenis_cetakan,
            '
            
           
        );
        $this->db->from('order');
        $this->db->join('mesin_74_a','order.id_order = mesin_74_a.id_order','left');
        // $this->db->join('spk','order.id_order = spk.id_order','left');
        $this->db->where('mesin_74_a.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('mesin_74_a.tanggal_pelaksanaan', 'asc');      
        $query = $this->db->get();
        return $query;  
    }

    public function get_jadwal_74b()
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
        

            mesin_74_b.id_mesin_74b as id_mesin_74b,
            mesin_74_b.nama_mesin as nama_mesin,
            mesin_74_b.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_74_b.operator as operator,
            mesin_74_b.target as target,
            mesin_74_b.druk as druk,
            mesin_74_b.total_kertas as total_kertas,
            mesin_74_b.set as set,
            mesin_74_b.jenis_cetakan as jenis_cetakan,
            
            '
        );

        $this->db->from('order');
        $this->db->join('mesin_74_b','order.id_order = mesin_74_b.id_order','left');
        // $this->db->join('spk','spk.id_mesin_74b = mesin_74_b.id_mesin_74b','left');
        $this->db->where('mesin_74_b.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('mesin_74_b.tanggal_pelaksanaan', 'asc');      
        $query = $this->db->get();
        return $query;  
    }

    public function get_jadwal_102a()
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
        

            mesin_102_a.id_mesin_102a as id_mesin_102a,
            mesin_102_a.nama_mesin as nama_mesin,
            mesin_102_a.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_102_a.operator as operator,
            mesin_102_a.target as target,
            mesin_102_a.druk as druk,
            mesin_102_a.total_kertas as total_kertas,
            mesin_102_a.set as set,
            mesin_102_a.jenis_cetakan as jenis_cetakan,
            
          '
        );

        $this->db->from('order');
        $this->db->join('mesin_102_a','order.id_order = mesin_102_a.id_order','left');
        // $this->db->join('spk','spk.id_mesin_102a = mesin_102_a.id_mesin_102a','left');
        $this->db->where('mesin_102_a.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('mesin_102_a.tanggal_pelaksanaan', 'asc');      
        $query = $this->db->get();
        return $query;  
    }

    public function get_jadwal_102b()
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
        

            mesin_102_b.id_mesin_102b as id_mesin_102b,
            mesin_102_b.nama_mesin as nama_mesin,
            mesin_102_b.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_102_b.operator as operator,
            mesin_102_b.target as target,
            mesin_102_b.druk as druk,
            mesin_102_b.total_kertas as total_kertas,
            mesin_102_b.set as set,
            mesin_102_b.jenis_cetakan as jenis_cetakan,
            
           '
        );
        $this->db->from('order');
        $this->db->join('mesin_102_b','order.id_order = mesin_102_b.id_order','left');
        // $this->db->join('spk','spk.id_mesin_102b = mesin_102_b.id_mesin_102b','left');
        $this->db->where('mesin_102_b.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('mesin_102_b.tanggal_pelaksanaan', 'asc');      
        $query = $this->db->get();
        return $query;  
    }

    public function get_jadwal_tokko()
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
        

            mesin_tokko.id_mesin_tokko as id_mesin_tokko,
            mesin_tokko.nama_mesin as nama_mesin,
            mesin_tokko.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_tokko.operator as operator,
            mesin_tokko.target as target,
            mesin_tokko.druk as druk,
            mesin_tokko.total_kertas as total_kertas,
            mesin_tokko.set as set,
            mesin_tokko.jenis_cetakan as jenis_cetakan,
            
           '
        );
        $this->db->from('order');
        $this->db->join('mesin_tokko','order.id_order = mesin_tokko.id_order','left');
        // $this->db->join('spk','spk.id_mesin_tokko = mesin_tokko.id_mesin_tokko','left');
        $this->db->where('mesin_tokko.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('mesin_tokko.tanggal_pelaksanaan', 'asc');      
        $query = $this->db->get();
        return $query;  
    }

    public function get_tambah_spk_72($id)
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

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral'
        );
        $this->db->from('order');
        $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_72.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_order', 'desc');    
        $this->db->where('mesin_72.id_mesin_72', $id);    
        $query = $this->db->get();
        return $query;  
    }

    public function get_tambah_spk_74a($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_74_a.id_mesin_74a as id_mesin_74a,
            mesin_74_a.nama_mesin as nama_mesin,
            mesin_74_a.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_74_a.operator as operator,
            mesin_74_a.kru_operator_74a as kru_operator_74a,
            mesin_74_a.target as target,
            mesin_74_a.druk as druk,
            mesin_74_a.total_kertas as total_kertas,
            mesin_74_a.set as set,
            mesin_74_a.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral'
        );
        $this->db->from('order');
        $this->db->join('mesin_74_a','mesin_74_a.id_order = order.id_order','left');
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_74_a.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_order', 'desc');    
        $this->db->where('mesin_74_a.id_mesin_74a', $id);    
        $query = $this->db->get();
        return $query;  
    }

    public function get_tambah_spk_74b($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_74_b.id_mesin_74b as id_mesin_74b,
            mesin_74_b.nama_mesin as nama_mesin,
            mesin_74_b.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_74_b.operator as operator,
            mesin_74_b.kru_operator_74b as kru_operator_74b,
            mesin_74_b.target as target,
            mesin_74_b.druk as druk,
            mesin_74_b.total_kertas as total_kertas,
            mesin_74_b.set as set,
            mesin_74_b.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral'
        );
        $this->db->from('order');
        $this->db->join('mesin_74_b','mesin_74_b.id_order = order.id_order','left');
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_74_b.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_order', 'desc');    
        $this->db->where('mesin_74_b.id_mesin_74b', $id);    
        $query = $this->db->get();
        return $query;  
    }

    public function get_tambah_spk_102a($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_102_a.id_mesin_102a as id_mesin_102a,
            mesin_102_a.nama_mesin as nama_mesin,
            mesin_102_a.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_102_a.operator as operator,
            mesin_102_a.kru_operator_102a as kru_operator_102a,
            mesin_102_a.target as target,
            mesin_102_a.druk as druk,
            mesin_102_a.total_kertas as total_kertas,
            mesin_102_a.set as set,
            mesin_102_a.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral'
        );
        $this->db->from('order');
        $this->db->join('mesin_102_a','mesin_102_a.id_order = order.id_order','left');
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_102_a.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_order', 'desc');    
        $this->db->where('mesin_102_a.id_mesin_102a', $id);    
        $query = $this->db->get();
        return $query;  
    }

    public function get_tambah_spk_102b($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_102_b.id_mesin_102b as id_mesin_102b,
            mesin_102_b.nama_mesin as nama_mesin,
            mesin_102_b.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_102_b.operator as operator,
            mesin_102_b.kru_operator_102b as kru_operator_102b,
            mesin_102_b.target as target,
            mesin_102_b.druk as druk,
            mesin_102_b.total_kertas as total_kertas,
            mesin_102_b.set as set,
            mesin_102_b.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral'
        );
        $this->db->from('order');
        $this->db->join('mesin_102_b','mesin_102_b.id_order = order.id_order','left');
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_102_b.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_order', 'desc');    
        $this->db->where('mesin_102_b.id_mesin_102b', $id);    
        $query = $this->db->get();
        return $query;  
    }

    public function get_tambah_spk_tokko($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_tokko.id_mesin_tokko as id_mesin_tokko,
            mesin_tokko.nama_mesin as nama_mesin,
            mesin_tokko.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_tokko.operator as operator,
            mesin_tokko.kru_operator_tokko as kru_operator_tokko,
            mesin_tokko.target as target,
            mesin_tokko.druk as druk,
            mesin_tokko.total_kertas as total_kertas,
            mesin_tokko.set as set,
            mesin_tokko.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral'
        );
        $this->db->from('order');
        $this->db->join('mesin_tokko','mesin_tokko.id_order = order.id_order','left');
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_tokko.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_order', 'desc');    
        $this->db->where('mesin_tokko.id_mesin_tokko', $id);    
        $query = $this->db->get();
        return $query;  
    }


    public function get_lihat_spk_72($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_72.id_mesin_72 as id_mesin_72,
            mesin_72.nama_mesin as nama_mesin,
            mesin_72.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_72.operator as operator,
            mesin_72.target as target,
            mesin_72.druk as druk,
            mesin_72.total_kertas as total_kertas,
            mesin_72.set as set,
            mesin_72.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('order');
        $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');         
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');
        $this->db->where('mesin_72.tanggal_pelaksanaan !=', null);  
        
        $this->db->where('order.id_order', $id);    
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;  
    }
    
    public function get_lihat_spk_72_khusus($id)
    {
        $this->db->select(
            'spk.id_mesin_72,
             mesin_72.jenis_cetakan as jenis_cetakan,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('spk');
        $this->db->join('mesin_72','mesin_72.id_mesin_72 = spk.id_mesin_72','left');
      
        $this->db->where('spk.id_mesin_72', $id);    
        // $this->db->limit(1);
        $query = $this->db->get();
        // var_dump($query->result());die;
        return $query;  
    }



    public function get_lihat_spk_74a($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_74_a.id_mesin_74a as id_mesin_74a,
            mesin_74_a.nama_mesin as nama_mesin,
            mesin_74_a.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_74_a.operator as operator,
            mesin_74_a.target as target,
            mesin_74_a.druk as druk,
            mesin_74_a.total_kertas as total_kertas,
            mesin_74_a.set as set,
            mesin_74_a.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('order');
        $this->db->join('mesin_74_a','mesin_74_a.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');         
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');
        $this->db->where('mesin_74_a.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_spk', 'desc');    
        $this->db->where('order.id_order', $id);   
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;  
    }

       public function get_lihat_spk_74a_khusus($id)
    {
        $this->db->select(
            'spk.id_mesin_74a,
             mesin_74_a.jenis_cetakan as jenis_cetakan,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('spk');
        $this->db->join('mesin_74_a','mesin_74_a.id_mesin_74a = spk.id_mesin_74a','left');
      
        $this->db->where('spk.id_mesin_74a', $id);    
        // $this->db->limit(1);
        $query = $this->db->get();
        // var_dump($query->result());die;
        return $query;  
    }
    
    public function get_lihat_spk_74b($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_74_b.id_mesin_74b as id_mesin_74b,
            mesin_74_b.nama_mesin as nama_mesin,
            mesin_74_b.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_74_b.operator as operator,
            mesin_74_b.target as target,
            mesin_74_b.druk as druk,
            mesin_74_b.total_kertas as total_kertas,
            mesin_74_b.set as set,
            mesin_74_b.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk' 
        );
        $this->db->from('order');
        $this->db->join('mesin_74_b','mesin_74_b.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');         
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');
        $this->db->where('mesin_74_b.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_spk', 'desc');    
        $this->db->where('order.id_order', $id);   
        $this->db->limit(1);    
        $query = $this->db->get();
        return $query;  
    }

    
       public function get_lihat_spk_74b_khusus($id)
    {
        $this->db->select(
            'spk.id_mesin_74b,
             mesin_74_b.jenis_cetakan as jenis_cetakan,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('spk');
        $this->db->join('mesin_74_b','mesin_74_b.id_mesin_74b = spk.id_mesin_74b','left');
      
        $this->db->where('spk.id_mesin_74b', $id);    
        // $this->db->limit(1);
        $query = $this->db->get();
        // var_dump($query->result());die;
        return $query;  
    }
    

    public function get_lihat_spk_102a($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_102_a.id_mesin_102a as id_mesin_102a,
            mesin_102_a.nama_mesin as nama_mesin,
            mesin_102_a.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_102_a.operator as operator,
            mesin_102_a.target as target,
            mesin_102_a.druk as druk,
            mesin_102_a.total_kertas as total_kertas,
            mesin_102_a.set as set,
            mesin_102_a.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('order');
        $this->db->join('mesin_102_a','mesin_102_a.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');         
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');
        $this->db->where('mesin_102_a.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_spk', 'desc');    
        $this->db->where('order.id_order', $id);     
        $this->db->limit(1);
        $query = $this->db->get();

        return $query;  
    }
    
    
       public function get_lihat_spk_102a_khusus($id)
    {
        $this->db->select(
            'spk.id_mesin_102a,
            mesin_102_a.jenis_cetakan as jenis_cetakan,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('spk');
        $this->db->join('mesin_102_a','mesin_102_a.id_mesin_102a = spk.id_mesin_102a','left');
      
        $this->db->where('spk.id_mesin_102a', $id);    
        // $this->db->limit(1);
        $query = $this->db->get();
        // var_dump($query->result());die;
        return $query;  
    }
    

    public function get_lihat_spk_102b($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        

            mesin_102_b.id_mesin_102b as id_mesin_102b,
            mesin_102_b.nama_mesin as nama_mesin,
            mesin_102_b.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_102_b.operator as operator,
            mesin_102_b.target as target,
            mesin_102_b.druk as druk,
            mesin_102_b.total_kertas as total_kertas,
            mesin_102_b.set as set,
            mesin_102_b.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk' 
        );
        $this->db->from('order');
        $this->db->join('mesin_102_b','mesin_102_b.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');         
        $this->db->join('finishing','finishing.id_order = order.id_order','left'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('potong as po','po.id_order = order.id_order','left');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');
        $this->db->where('mesin_102_b.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_order', 'desc');    
        $this->db->where('order.id_order', $id);     
        $this->db->limit(1);
        $query = $this->db->get();

        return $query;  
    }
    
    
       public function get_lihat_spk_102b_khusus($id)
    {
        $this->db->select(
            'spk.id_mesin_102b,
            mesin_102_b.jenis_cetakan as jenis_cetakan,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('spk');
        $this->db->join('mesin_102_b','mesin_102_b.id_mesin_102b = spk.id_mesin_102b','left');
      
        $this->db->where('spk.id_mesin_102b', $id);    
        // $this->db->limit(1);
        $query = $this->db->get();
        // var_dump($query->result());die;
        return $query;  
    }
    
    public function get_lihat_spk_tokko($id)
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
            finishing.finishing_akhir_spiral as spiral,         
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi,

            mesin_tokko.id_mesin_tokko as id_mesin_tokko,
            mesin_tokko.nama_mesin as nama_mesin,
            mesin_tokko.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_tokko.operator as operator,
            mesin_tokko.target as target,
            mesin_tokko.druk as druk,
            mesin_tokko.total_kertas as total_kertas,
            mesin_tokko.set as set,
            mesin_tokko.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'  
        );
        $this->db->from('order');
        $this->db->join('mesin_tokko','mesin_tokko.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');          
        $this->db->join('finishing','finishing.id_order = order.id_order','left');  
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');  
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('potong as po','po.id_order = order.id_order','left'); 
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_tokko.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('id_spk', 'desc');    
        $this->db->where('order.id_order', $id);   
        $this->db->limit(1);
        $query = $this->db->get();
        
        return $query;  
    }
    
    
       public function get_lihat_spk_tokko_khusus($id)
    {
        $this->db->select(
            'spk.id_mesin_tokko,
            mesin_tokko.jenis_cetakan as jenis_cetakan,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('spk');
        $this->db->join('mesin_tokko','mesin_tokko.id_mesin_tokko = spk.id_mesin_tokko','left');
      
        $this->db->where('spk.id_mesin_tokko', $id);    
        // $this->db->limit(1);
        $query = $this->db->get();
        // var_dump($query->result());die;
        return $query;  
    }
    

    
    public function edit_jm($data){
        $edit_ju = array(         
            'id_order' =>$data['id_order'],
            'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_72'],
            'operator' =>$data['operator_72'],
            'kru_operator_72' =>$data['kru_operator_72'],
            'target' =>$data['target_72'],
        
            'druk' =>$data['druk_72'],
        
            'set' =>$data['set_72'],
            'jenis_cetakan' =>$data['jenis_cetakan_72']  
                           
        );
        $this->db->set($edit_ju);
        $this->db->where('id_mesin_72',$data['id_mesin_72']);
        $this->db->update('mesin_72');
    }


    public function edit_jm74a($data){
        $edit_ju = array(         
            'id_order' =>$data['id_order'],
            'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_74a'],
            'operator' =>$data['operator_74a'],
            'kru_operator_74a' =>$data['kru_operator_74a'],
            'target' =>$data['target_74a'],
        
            'druk' =>$data['druk_74a'],
        
            'set' =>$data['set_74a'],
            'jenis_cetakan' =>$data['jenis_cetakan_74a']  
                           
        );
        $this->db->set($edit_ju);
        $this->db->where('id_mesin_74a',$data['id_mesin_74a']);
        $this->db->update('mesin_74_a');
    }

    public function edit_jm74b($data){
        $edit_ju = array(         
            'id_order' =>$data['id_order'],
            'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_74b'],
            'operator' =>$data['operator_74b'],
            'kru_operator_74b' =>$data['kru_operator_74b'],
            'target' =>$data['target_74b'],
        
            'druk' =>$data['druk_74b'],
        
            'set' =>$data['set_74b'],
            'jenis_cetakan' =>$data['jenis_cetakan_74b']  
                           
        );
        $this->db->set($edit_ju);
        $this->db->where('id_mesin_74b',$data['id_mesin_74b']);
        $this->db->update('mesin_74_b');
    }

    public function edit_jm102a($data){
        $edit_ju = array(         
            'id_order' =>$data['id_order'],
            'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_102a'],
            'operator' =>$data['operator_102a'],
            'kru_operator_102a' =>$data['kru_operator_102a'],
            'target' =>$data['target_102a'],
        
            'druk' =>$data['druk_102a'],
        
            'set' =>$data['set_102a'],
            'jenis_cetakan' =>$data['jenis_cetakan_102a']  
                           
        );
        $this->db->set($edit_ju);
        $this->db->where('id_mesin_102a',$data['id_mesin_102a']);
        $this->db->update('mesin_102_a');
    }

    public function edit_jm102b($data){
        $edit_ju = array(         
            'id_order' =>$data['id_order'],
            'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_102b'],
            'operator' =>$data['operator_102b'],
            'kru_operator_102b' =>$data['kru_operator_102b'],
            'target' =>$data['target_102b'],
        
            'druk' =>$data['druk_102b'],
        
            'set' =>$data['set_102b'],
            'jenis_cetakan' =>$data['jenis_cetakan_102b']  
                           
        );
        $this->db->set($edit_ju);
        $this->db->where('id_mesin_102b',$data['id_mesin_102b']);
        $this->db->update('mesin_102_b');
    }

    public function edit_jmtokko($data){
        $edit_ju = array(         
            'id_order' =>$data['id_order'],
            'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_tokko'],
            'operator' =>$data['operator_tokko'],
            'kru_operator_tokko' =>$data['kru_operator_tokko'],
            'target' =>$data['target_tokko'],
        
            'druk' =>$data['druk_tokko'],
        
            'set' =>$data['set_tokko'],
            'jenis_cetakan' =>$data['jenis_cetakan_tokko']  
                           
        );
        $this->db->set($edit_ju);
        $this->db->where('id_mesin_tokko',$data['id_mesin_tokko']);
        $this->db->update('mesin_tokko');
    }

    public function add_spk_72($data){
        $tambah_spk_72 = array(
            'id_order' => $data['id_order'],
            'id_mesin_72' => $data['id_mesin_72'],                                                          
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->insert('spk',$tambah_spk_72);
    }
    public function addd_spk_72($data){
        $tambah_spk_72 = array(
            'id_order' => $data['id_order'],
            'id_mesin_72' => $data['id']
        );
        $this->db->insert('spk',$tambah_spk_72);
    }

    public function addd_spk_74a($data){
        $tambah_spk_74a = array(
            'id_order' => $data['id_order'],
            'id_mesin_74a' => $data['id']
        );
        $this->db->insert('spk',$tambah_spk_74a);
    }

    public function addd_spk_tokko($data){
        $tambah_spk_tokko = array(
            'id_order' => $data['id_order'],
            'id_mesin_tokko' => $data['id']
        );
        $this->db->insert('spk',$tambah_spk_tokko);
    }

    public function addd_spk_74b($data){
        $tambah_spk_74b = array(
            'id_order' => $data['id_order'],
            'id_mesin_74b' => $data['id']
        );
        $this->db->insert('spk',$tambah_spk_74b);
    }

    public function addd_spk_102a($data){
        $tambah_spk_102a = array(
            'id_order' => $data['id_order'],
            'id_mesin_102a' => $data['id']
        );
        $this->db->insert('spk',$tambah_spk_102a);
    }

    public function addd_spk_102b($data){
        $tambah_spk_102b = array(
            'id_order' => $data['id_order'],
            'id_mesin_102b' => $data['id']
        );
        $this->db->insert('spk',$tambah_spk_102b);
    }

    public function add_spk_74a($data){
        $tambah_spk_74a = array(
            'id_order' => $data['id_order'],
            'id_mesin_74a' => $data['id_mesin_74a'],
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->insert('spk',$tambah_spk_74a);
    }

    public function add_spk_74b($data){
        $tambah_spk_74b = array(
            'id_order' => $data['id_order'],
            'id_mesin_74b' => $data['id_mesin_74b'],
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->insert('spk',$tambah_spk_74b);
    }

    public function add_spk_102a($data){
        $tambah_spk_102a = array(
            'id_order' => $data['id_order'],
            'id_mesin_102a' => $data['id_mesin_102a'],
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->insert('spk',$tambah_spk_102a);
    }

    public function add_spk_102b($data){
        $tambah_spk_102b = array(
            'id_order' => $data['id_order'],
            'id_mesin_102b' => $data['id_mesin_102b'],
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->insert('spk',$tambah_spk_102b);
    }

    public function add_spk_tokko($data){
        $tambah_spk_tokko = array(
            'id_order' => $data['id_order'],
            'id_mesin_tokko' => $data['id_mesin_tokko'],
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->insert('spk',$tambah_spk_tokko);
    }
    
    public function edit_spk_72($data){
        $edit_spk_72 = array(
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->set($edit_spk_72);
        $this->db->where('id_mesin_72',$data['id_mesin_72']);
        $this->db->update('spk');
    }

    public function edit_spk_74a($data){
        $edit_spk_74a = array(
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->set($edit_spk_74a);
        $this->db->where('id_mesin_74a',$data['id_mesin_74a']);
        $this->db->update('spk');
    }

    public function edit_spk_74b($data){
        $edit_spk_74b = array(
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->set($edit_spk_74b);
        $this->db->where('id_mesin_74b',$data['id_mesin_74b']);
        $this->db->update('spk');
    }

    public function edit_spk_102a($data){
        $edit_spk_102a = array(
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc-bw_bw-bw'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->set($edit_spk_102a);
        $this->db->where('id_mesin_102a',$data['id_mesin_102a']);
        $this->db->update('spk');
    }

    public function edit_spk_102b($data){
        $edit_spk_102b = array(
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc-bw_bw-bw'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->set($edit_spk_102b);
        $this->db->where('id_mesin_102b',$data['id_mesin_102b']);
        $this->db->update('spk');
    }

    public function edit_spk_tokko($data){
        $edit_spk_tokko = array(
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            'muka1_fc_bw_warna' => $data['muka1_fc_bw_warna'],
            'muka2_fc_fc' => $data['muka2_fc_fc'],
            'muka2_blk'=> $data['muka2_blk'],
            'muka2_blg' => $data['muka2_blg'],
            'keterangan_spk' => $data['keterangan_spk']
        );
        $this->db->set($edit_spk_tokko);
        $this->db->where('id_mesin_tokko',$data['id_mesin_tokko']);
        $this->db->update('spk');
    }
    
    public function get_lihat_72($id)
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
            finishing.finishing_akhir_spiral as spiral,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi,

            mesin_72.id_mesin_72 as id_mesin_72,
            mesin_72.nama_mesin as nama_mesin,
            mesin_72.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_72.operator as operator,
            mesin_72.target as target,
            mesin_72.druk as druk,
            mesin_72.total_kertas as total_kertas,
            mesin_72.set as set,
            mesin_72.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk
            '
        );
        $this->db->from('order');
        $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');         
        $this->db->join('finishing','finishing.id_order = order.id_order','left');
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('potong as po','po.id_order = order.id_order','left'); 
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_72.tanggal_pelaksanaan !=', '0000-00-00','left');  
        $this->db->order_by('id_spk', 'desc');    
        
        $this->db->where('mesin_72.id_order', $id);
        $this->db->limit(1);

        $query = $this->db->get();
        
        return $query;  
    }

    public function get_lihat_74a($id)
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
            finishing.finishing_akhir_spiral as spiral,         
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi,

            mesin_74_a.id_mesin_74a as id_mesin_74a,
            mesin_74_a.nama_mesin as nama_mesin,
            mesin_74_a.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_74_a.operator as operator,
            mesin_74_a.target as target,
            mesin_74_a.druk as druk,
            mesin_74_a.total_kertas as total_kertas,
            mesin_74_a.set as set,
            mesin_74_a.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk' 
        );
        $this->db->from('order');
        $this->db->join('mesin_74_a','mesin_74_a.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');          
        $this->db->join('finishing','finishing.id_order = order.id_order','left');
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');     
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('potong as po','po.id_order = order.id_order','left'); 
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_74_a.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('id_spk', 'desc');    
        $this->db->where('mesin_74_a.id_order', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        
        return $query;  
    }

    public function get_lihat_74b($id)
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
            finishing.finishing_akhir_spiral as spiral,         
        
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi,

            mesin_74_b.id_mesin_74b as id_mesin_74b,
            mesin_74_b.nama_mesin as nama_mesin,
            mesin_74_b.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_74_b.operator as operator,
            mesin_74_b.target as target,
            mesin_74_b.druk as druk,
            mesin_74_b.total_kertas as total_kertas,
            mesin_74_b.set as set,
            mesin_74_b.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk' 
        );
        $this->db->from('order');
        $this->db->join('mesin_74_b','mesin_74_b.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');          
        $this->db->join('finishing','finishing.id_order = order.id_order','left');
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');  
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('potong as po','po.id_order = order.id_order','left'); 
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_74_b.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('id_spk', 'desc');    
        $this->db->where('mesin_74_b.id_order', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        
        return $query;  
    }

    public function get_lihat_102a($id)
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
            finishing.finishing_akhir_spiral as spiral,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi,

            mesin_102_a.id_mesin_102a as id_mesin_102a,
            mesin_102_a.nama_mesin as nama_mesin,
            mesin_102_a.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_102_a.operator as operator,
            mesin_102_a.target as target,
            mesin_102_a.druk as druk,
            mesin_102_a.total_kertas as total_kertas,
            mesin_102_a.set as set,
            mesin_102_a.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'
        );
        $this->db->from('order');
        $this->db->join('mesin_102_a','mesin_102_a.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');          
        $this->db->join('finishing','finishing.id_order = order.id_order','left');  
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');         
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('potong as po','po.id_order = order.id_order','left'); 
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_102_a.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('id_spk', 'desc');    
        $this->db->where('mesin_102_a.id_order', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        
        return $query;  
    }

    public function get_lihat_102b($id)
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
            finishing.finishing_akhir_spiral as spiral,         
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi,

            mesin_102_b.id_mesin_102b as id_mesin_102b,
            mesin_102_b.nama_mesin as nama_mesin,
            mesin_102_b.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_102_b.operator as operator,
            mesin_102_b.target as target,
            mesin_102_b.druk as druk,
            mesin_102_b.total_kertas as total_kertas,
            mesin_102_b.set as set,
            mesin_102_b.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk' 
        );
        $this->db->from('order');
        $this->db->join('mesin_102_b','mesin_102_b.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');          
        $this->db->join('finishing','finishing.id_order = order.id_order','left');  
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');         
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('potong as po','po.id_order = order.id_order','left'); 
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_102_b.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('id_spk', 'desc');    
        $this->db->where('mesin_102_b.id_order', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        
        return $query;  
    }

    public function get_lihat_tokko($id)
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
            finishing.finishing_akhir_spiral as spiral,         
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi,

            mesin_tokko.id_mesin_tokko as id_mesin_tokko,
            mesin_tokko.nama_mesin as nama_mesin,
            mesin_tokko.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_tokko.operator as operator,
            mesin_tokko.target as target,
            mesin_tokko.druk as druk,
            mesin_tokko.total_kertas as total_kertas,
            mesin_tokko.set as set,
            mesin_tokko.jenis_cetakan as jenis_cetakan,

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.muka1_fc_bw_warna as muka1_fc_bw_warna,
            spk.muka2_fc_fc as muka2_fc_fc,
            spk.muka2_blk as muka2_blk,
            spk.muka2_blg as muka2_blg,
            spk.keterangan_spk as keterangan_spk'  
        );
        $this->db->from('order');
        $this->db->join('mesin_tokko','mesin_tokko.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');          
        $this->db->join('finishing','finishing.id_order = order.id_order','left');  
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');  
        $this->db->join('ctcp as ct','ct.id_order = order.id_order','left'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order','left'); 
        $this->db->join('potong as po','po.id_order = order.id_order','left'); 
        $this->db->join('cetak as ce','ce.id_order = order.id_order','left');         
        $this->db->where('mesin_tokko.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('id_spk', 'desc');    
        $this->db->where('mesin_tokko.id_order', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        
        return $query;  
    }
    
    
    


    public function spk_72($id)
{
    $this->db->select(
        '   
       id_mesin_72,
                      
        '
    );
    $this->db->from('spk');                                   
    $this->db->where('id_mesin_72', $id);                   
    $query = $this->db->get();
    return $query;   
}


    public function spk_74a($id)
{
    $this->db->select(
        '   
       id_mesin_74a,
                      
        '
    );
    $this->db->from('spk');                                   
    $this->db->where('id_mesin_74a', $id);                   
    $query = $this->db->get();
    return $query;   
}

    public function spk_74b($id)
{
    $this->db->select(
        '   
       id_mesin_74b,
                      
        '
    );
    $this->db->from('spk');                                   
    $this->db->where('id_mesin_74b', $id);                   
    $query = $this->db->get();
    return $query;   
}

    public function spk_102a($id)
{
    $this->db->select(
        '   
       id_mesin_102a,
                      
        '
    );
    $this->db->from('spk');                                   
    $this->db->where('id_mesin_102a', $id);                   
    $query = $this->db->get();
    return $query;   
}

    public function spk_102b($id)
{
    $this->db->select(
        '   
       id_mesin_102b,
                      
        '
    );
    $this->db->from('spk');                                   
    $this->db->where('id_mesin_102b', $id);                   
    $query = $this->db->get();
    return $query;   
}

    public function spk_tokko($id)
{
    $this->db->select(
        '   
       id_mesin_tokko,
                      
        '
    );
    $this->db->from('spk');                                   
    $this->db->where('id_mesin_tokko', $id);                   
    $query = $this->db->get();
    return $query;   
}
   



}