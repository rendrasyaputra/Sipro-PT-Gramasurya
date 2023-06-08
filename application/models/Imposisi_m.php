<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);

class Imposisi_m extends CI_Model {

	public function get($id = null)
    {
        $this->db->select(
            'imposisi.imposisi_status as imposisi_status,
            order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond,finishing.finishing_akhir_klem as klem, finishing.finishing_akhir_spiral as spiral, imposisi.id_imposisi as id_imposisi'
        );
        // $status_impo = array('imposisi', 'imposisi cover', 'imposisi isi','imposisi khusus');
        // $status_ctcp = array('ctcp', 'ctcp cover', 'ctcp isi','ctcp khusus');
        // $status_umum = array('marketing','imposisi');

        $this->db->from('order');
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');
        $this->db->join('data_ctcp','imposisi.id_order = data_ctcp.id_order','left' );
        $this->db->join('finishing','finishing.id_order = order.id_order');
        // $this->db->where_in('order.so_status',$status_umum);
        // $this->db->where('data_ctcp.ctcp_status', "");
        // $this->db->OR_where('data_ctcp.ctcp_status', null);
        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);
              

               
        $query = $this->db->get();
        return $query; 
    }
    public function filter_bulan($bulan,$tahun)
    {
        $this->db->select(
            'imposisi.imposisi_status as imposisi_status,
            order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond,finishing.finishing_akhir_klem as klem, finishing.finishing_akhir_spiral as spiral, imposisi.id_imposisi as id_imposisi'
        );
        // $status_impo = array('imposisi', 'imposisi cover', 'imposisi isi','imposisi khusus');
        // $status_ctcp = array('ctcp', 'ctcp cover', 'ctcp isi','ctcp khusus');
        // $status_umum = array('marketing','imposisi');

        $this->db->from('order');
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left');
        $this->db->join('data_ctcp','imposisi.id_order = data_ctcp.id_order','left' );
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->where('MONTH(order.tanggal_masuk)',$bulan);
        $this->db->where('YEAR(order.tanggal_masuk)',$tahun);
        // $this->db->where_in('order.so_status',$status_umum);
        // $this->db->where('data_ctcp.ctcp_status', "");
        // $this->db->OR_where('data_ctcp.ctcp_status', null);
        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);
              

               
        $query = $this->db->get();
        return $query; 
    }
    public function tampil_tambah_imposisi($id = null)
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond,finishing.finishing_akhir_klem as klem, finishing.finishing_akhir_spiral as spiral, imposisi.id_imposisi as id_imposisi'
        );
        $this->db->from('order');
        $this->db->join('imposisi','imposisi.id_order = order.id_order','left'); 
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->where('order.id_order',$id);
               
        $query = $this->db->get();
        return $query; 
    }
    // mengambil id imposisi untuk mengecek apakah ada datanya atau kaga
    // public function cek_isi_imposisi($id)
    // {
    //     $this->db->select('id_order');
    //     $this->db->from('imposisi');
    //     $this->db->where('id_order',$id);
    //     $query = $this->db->get();
    //     return $query; 
    // }

    public function get_lihat($id = null)
    {
        $this->db->select(
            'imposisi.imposisi_status as imposisi_status, 
            order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral, finishing.finishing_akhir_klem as klem,
            imposisi.id_order as id_order,
            imposisi.id_imposisi as id_imposisi, 
            imposisi.namaoperator1 as namaoperator1, 
            imposisi.namaoperator2 as namaoperator2, 
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 
            imposisi.cover1mesin1 as cover1mesin1, 
            imposisi.jumlahplatecover1 as jumlahplatecover1,
            imposisi.cover1plat1 as cover1plat1,
            imposisi.cover1plat2 as cover1plat2,
            imposisi.cover1plat3 as cover1plat3,
            imposisi.cover1set1 as cover1set1,
            imposisi.cover1set2 as cover1set2,
            imposisi.cover1set3 as cover1set3, 
            imposisi.cover1up1 as cover1up1,
            imposisi.cover1up2 as cover1up2,
            imposisi.cover1up3 as cover1up3, 
            imposisi.cover1lbrcetak1 as cover1lbrcetak1,
            imposisi.cover1lbrcetak2 as cover1lbrcetak2,
            imposisi.cover1lbrcetak3 as cover1lbrcetak3,
            imposisi.cover1warna1 as cover1warna1,
            imposisi.cover1warna2 as cover1warna2,
            imposisi.cover1warna3 as cover1warna3,
            imposisi.cover1status1 as cover1status1,
            imposisi.cover1status2 as cover1status2,
            imposisi.cover1status3 as cover1status3,
            imposisi.cover1keterangan1 as cover1keterangan1,
            imposisi.cover1keterangan2 as cover1keterangan2,
            imposisi.cover1keterangan3 as cover1keterangan3,
            imposisi.cover1tglimposisi1 as cover1tglimposisi1,
            imposisi.cover1tglimposisi2 as cover1tglimposisi2,
            imposisi.cover1tglimposisi3 as cover1tglimposisi3,  
            imposisi.cover2mesin1 as cover2mesin1,
            imposisi.jumlahplatecover2 as jumlahplatecover2,
            imposisi.cover2plat1 as cover2plat1,
            imposisi.cover2plat2 as cover2plat2,
            imposisi.cover2plat3 as cover2plat3,
            imposisi.cover2set1 as cover2set1,
            imposisi.cover2set2 as cover2set2, 
            imposisi.cover2set3 as cover2set3,
            imposisi.cover2up1 as cover2up1, 
            imposisi.cover2up2 as cover2up2,
            imposisi.cover2up3 as cover2up3,
            imposisi.cover2lbrcetak1 as cover2lbrcetak1,
            imposisi.cover2lbrcetak2 as cover2lbrcetak2,
            imposisi.cover2lbrcetak3 as cover2lbrcetak3,
            imposisi.cover2warna1 as cover2warna1,
            imposisi.cover2warna2 as cover2warna2,
            imposisi.cover2warna3 as cover2warna3,
            imposisi.cover2status1 as cover2status1,
            imposisi.cover2status2 as cover2status2,
            imposisi.cover2status3 as cover2status3,
            imposisi.cover2keterangan1 as cover2keterangan1,
            imposisi.cover2keterangan2 as cover2keterangan2,
            imposisi.cover2keterangan3 as cover2keterangan3,
            imposisi.cover2tglimposisi1 as cover2tglimposisi1,
            imposisi.cover2tglimposisi2 as cover2tglimposisi2,
            imposisi.cover2tglimposisi3 as cover2tglimposisi3,
            imposisi.isi1mesin1 as isi1mesin1,
            imposisi.jumlahplateisi1 as jumlahplateisi1,
            imposisi.isi1plat1 as isi1plat1,
            imposisi.isi1plat2 as isi1plat2,
            imposisi.isi1plat3 as isi1plat3,
            imposisi.isi1set1 as isi1set1,
            imposisi.isi1set2 as isi1set2,
            imposisi.isi1set3 as isi1set3,
            imposisi.isi1up1 as isi1up1,
            imposisi.isi1up2 as isi1up2,
            imposisi.isi1up3 as isi1up3,
            imposisi.isi1lbrcetak1 as isi1lbrcetak1,
            imposisi.isi1lbrcetak2 as isi1lbrcetak2,
            imposisi.isi1lbrcetak3 as isi1lbrcetak3,
            imposisi.isi1warna1 as isi1warna1,
            imposisi.isi1warna2 as isi1warna2,
            imposisi.isi1warna3 as isi1warna3,
            imposisi.isi1status1 as isi1status1,
            imposisi.isi1status2 as isi1status2,
            imposisi.isi1status3 as isi1status3,
            imposisi.isi1keterangan1 as isi1keterangan1,
            imposisi.isi1keterangan2 as isi1keterangan2,
            imposisi.isi1keterangan3 as isi1keterangan3,
            imposisi.isi1tglimposisi1 as isi1tglimposisi1,
            imposisi.isi1tglimposisi2 as isi1tglimposisi2,
            imposisi.isi1tglimposisi3 as isi1tglimposisi3,
            imposisi.isi2mesin1 as isi2mesin1, 
            imposisi.jumlahplateisi2 as jumlahplateisi2, 
            imposisi.isi2plat1 as isi2plat1, 
            imposisi.isi2plat2 as isi2plat2,
            imposisi.isi2plat3 as isi2plat3,
            imposisi.isi2set1 as isi2set1, 
            imposisi.isi2set2 as isi2set2, 
            imposisi.isi2set3 as isi2set3, 
            imposisi.isi2up1 as isi2up1,
            imposisi.isi2up2 as isi2up2,
            imposisi.isi2up3 as isi2up3,
            imposisi.isi2lbrcetak1 as isi2lbrcetak1,
            imposisi.isi2lbrcetak2 as isi2lbrcetak2,
            imposisi.isi2lbrcetak3 as isi2lbrcetak3,
            imposisi.isi2warna1 as isi2warna1,
            imposisi.isi2warna2 as isi2warna2,
            imposisi.isi2warna3 as isi2warna3,
            imposisi.isi2status1 as isi2status1, 
            imposisi.isi2status2 as isi2status2,
            imposisi.isi2status3 as isi2status3,
            imposisi.isi2keterangan1 as isi2keterangan1,
            imposisi.isi2keterangan2 as isi2keterangan2,
            imposisi.isi2keterangan3 as isi2keterangan3,
            imposisi.isi2tglimposisi1 as isi2tglimposisi1,
            imposisi.isi2tglimposisi2 as isi2tglimposisi2,
            imposisi.isi2tglimposisi3 as isi2tglimposisi3,
            imposisi.isi3mesin1 as isi3mesin1,
            imposisi.jumlahplateisi3 as jumlahplateisi3,
            imposisi.isi3plat1 as isi3plat1, 
            imposisi.isi3plat2 as isi3plat2,
            imposisi.isi3plat3 as isi3plat3, 
            imposisi.isi3set1 as isi3set1,
            imposisi.isi3set2 as isi3set2,
            imposisi.isi3set3 as isi3set3,
            imposisi.isi3up1 as isi3up1,
            imposisi.isi3up2 as isi3up2,
            imposisi.isi3up3 as isi3up3,
            imposisi.isi3lbrcetak1 as isi3lbrcetak1,
            imposisi.isi3lbrcetak2 as isi3lbrcetak2,
            imposisi.isi3lbrcetak3 as isi3lbrcetak3,
            imposisi.isi3warna1 as isi3warna1,
            imposisi.isi3warna2 as isi3warna2,
            imposisi.isi3warna3 as isi3warna3, 
            imposisi.isi3status1 as isi3status1,
            imposisi.isi3status2 as isi3status2,
            imposisi.isi3status3 as isi3status3,
            imposisi.isi3keterangan1 as isi3keterangan1,
            imposisi.isi3keterangan2 as isi3keterangan2,
            imposisi.isi3keterangan3 as isi3keterangan3,
            imposisi.isi3tglimposisi1 as isi3tglimposisi1,
            imposisi.isi3tglimposisi2 as isi3tglimposisi2,
            imposisi.isi3tglimposisi3 as isi3tglimposisi3, 
            imposisi.tanggal_imposisi_cover as tanggal_imposisi_cover,
            imposisi.tanggal_imposisi_isi as tanggal_imposisi_isi, 
            imposisi.catatan_imposisi as catatan_imposisi'
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->join('imposisi','imposisi.id_order = order.id_order');
        if($id != null){
            $this->db->where('order.id_order', $id);
        }
        $query = $this->db->get();
        return $query;          
    }

   

    public function tambah_imposisi($data)
	{
            $tambah_imposisi = array(
                'id_order' =>$data['id_order'],                                
                'namaoperator1' =>$data['namaoperator1'],
                'namaoperator2' =>$data['namaoperator2'],
                'total_plat_cover' =>$data['total_plat_cover'],
                'total_plat_isi' =>$data['total_plat_isi'],                
                'imposisi_status' =>$data['imposisi_status'],
                'cover1mesin1' =>$data['cover1mesin1'],
                'jumlahplatecover1' =>$data['jumlahplatecover1'],
                'cover1plat1' =>$data['cover1plat1'],
                'cover1plat2' =>$data['cover1plat2'],
                'cover1plat3' =>$data['cover1plat3'],
                'cover1set1' =>$data['cover1set1'],
                'cover1set2' =>$data['cover1set2'],
                'cover1set3' =>$data['cover1set3'],
                'cover1up1' =>$data['cover1up1'],
                'cover1up2' =>$data['cover1up2'],
                'cover1up3' =>$data['cover1up3'],
                'cover1lbrcetak1' =>$data['cover1lbrcetak1'],
                'cover1lbrcetak2' =>$data['cover1lbrcetak2'],
                'cover1lbrcetak3' =>$data['cover1lbrcetak3'],
                'cover1warna1' =>$data['cover1warna1'],
                'cover1warna2' =>$data['cover1warna2'],
                'cover1warna3' =>$data['cover1warna3'],
                'cover1status1' =>$data['cover1status1'],
                'cover1status2' =>$data['cover1status2'],
                'cover1status3' =>$data['cover1status3'],
                'cover1keterangan1' =>$data['cover1keterangan1'],
                'cover1keterangan2' =>$data['cover1keterangan2'],
                'cover1keterangan3' =>$data['cover1keterangan3'],
                'cover1tglimposisi1' =>$data['cover1tglimposisi1'],
                'cover1tglimposisi2' =>$data['cover1tglimposisi2'],
                'cover1tglimposisi3' =>$data['cover1tglimposisi3'],
                'cover2mesin1' =>$data['cover2mesin1'],
                'jumlahplatecover2' =>$data['jumlahplatecover2'],
                'cover2plat1' =>$data['cover2plat1'],
                'cover2plat2' =>$data['cover2plat2'],
                'cover2plat3' =>$data['cover2plat3'],
                'cover2set1' =>$data['cover2set1'],
                'cover2set2' =>$data['cover2set2'],
                'cover2set3' =>$data['cover2set3'],
                'cover2up1' =>$data['cover2up1'],
                'cover2up2' =>$data['cover2up2'],
                'cover2up3' =>$data['cover2up3'],
                'cover2lbrcetak1' =>$data['cover2lbrcetak1'],
                'cover2lbrcetak2' =>$data['cover2lbrcetak2'],
                'cover2lbrcetak3' =>$data['cover2lbrcetak3'],
                'cover2warna1' =>$data['cover2warna1'],
                'cover2warna2' =>$data['cover2warna2'],
                'cover2warna3' =>$data['cover2warna3'],
                'cover2status1' =>$data['cover2status1'],
                'cover2status2' =>$data['cover2status2'],
                'cover2status3' =>$data['cover2status3'],
                'cover2keterangan1' =>$data['cover2keterangan1'],
                'cover2keterangan2' =>$data['cover2keterangan2'],
                'cover2keterangan3' =>$data['cover2keterangan3'],
                'cover2tglimposisi1' =>$data['cover2tglimposisi1'],
                'cover2tglimposisi2' =>$data['cover2tglimposisi2'],
                'cover2tglimposisi3' =>$data['cover2tglimposisi3'],
                'isi1mesin1' =>$data['isi1mesin1'],
                'jumlahplateisi1' =>$data['jumlahplateisi1'],
                'isi1plat1' =>$data['isi1plat1'],
                'isi1plat2' =>$data['isi1plat2'],
                'isi1plat3' =>$data['isi1plat3'],
                'isi1set1' =>$data['isi1set1'],
                'isi1set2' =>$data['isi1set2'],
                'isi1set3' =>$data['isi1set3'],
                'isi1up1' =>$data['isi1up1'],
                'isi1up2' =>$data['isi1up2'],
                'isi1up3' =>$data['isi1up3'],
                'isi1lbrcetak1' =>$data['isi1lbrcetak1'],
                'isi1lbrcetak2' =>$data['isi1lbrcetak2'],
                'isi1lbrcetak3' =>$data['isi1lbrcetak3'],
                'isi1warna1' =>$data['isi1warna1'],
                'isi1warna2' =>$data['isi1warna2'],
                'isi1warna3' =>$data['isi1warna3'],
                'isi1status1' =>$data['isi1status1'],
                'isi1status2' =>$data['isi1status2'],
                'isi1status3' =>$data['isi1status3'],
                'isi1keterangan1' =>$data['isi1keterangan1'],
                'isi1keterangan2' =>$data['isi1keterangan2'],
                'isi1keterangan3' =>$data['isi1keterangan3'],
                'isi1tglimposisi1' =>$data['isi1tglimposisi1'],
                'isi1tglimposisi2' =>$data['isi1tglimposisi2'],
                'isi1tglimposisi3' =>$data['isi1tglimposisi3'],
                'isi2mesin1' =>$data['isi2mesin1'],
                'jumlahplateisi2' =>$data['jumlahplateisi2'],
                'isi2plat1' =>$data['isi2plat1'],
                'isi2plat2' =>$data['isi2plat2'],
                'isi2plat3' =>$data['isi2plat3'],
                'isi2set1' =>$data['isi2set1'],
                'isi2set2' =>$data['isi2set2'],
                'isi2set3' =>$data['isi2set3'],
                'isi2up1' =>$data['isi2up1'],
                'isi2up2' =>$data['isi2up2'],
                'isi2up3' =>$data['isi2up3'],
                'isi2lbrcetak1' =>$data['isi2lbrcetak1'],
                'isi2lbrcetak2' =>$data['isi2lbrcetak2'],
                'isi2lbrcetak3' =>$data['isi2lbrcetak3'],
                'isi2warna1' =>$data['isi2warna1'],
                'isi2warna2' =>$data['isi2warna2'],
                'isi2warna3' =>$data['isi2warna3'],
                'isi2status1' =>$data['isi2status1'],
                'isi2status2' =>$data['isi2status2'],
                'isi2status3' =>$data['isi2status3'],
                'isi2keterangan1' =>$data['isi2keterangan1'],
                'isi2keterangan2' =>$data['isi2keterangan2'],
                'isi2keterangan3' =>$data['isi2keterangan3'],
                'isi2tglimposisi1' =>$data['isi2tglimposisi1'],
                'isi2tglimposisi2' =>$data['isi2tglimposisi2'],
                'isi2tglimposisi3' =>$data['isi2tglimposisi3'],
                'isi3mesin1' =>$data['isi3mesin1'],
                'jumlahplateisi3' =>$data['jumlahplateisi3'],
                'isi3plat1' =>$data['isi3plat1'],
                'isi3plat2' =>$data['isi3plat2'],
                'isi3plat3' =>$data['isi3plat3'],
                'isi3set1' =>$data['isi3set1'],
                'isi3set2' =>$data['isi3set2'],
                'isi3set3' =>$data['isi3set3'],
                'isi3up1' =>$data['isi3up1'],
                'isi3up2' =>$data['isi3up2'],
                'isi3up3' =>$data['isi3up3'],
                'isi3lbrcetak1' =>$data['isi3lbrcetak1'],
                'isi3lbrcetak2' =>$data['isi3lbrcetak2'],
                'isi3lbrcetak3' =>$data['isi3lbrcetak3'],
                'isi3warna1' =>$data['isi3warna1'],
                'isi3warna2' =>$data['isi3warna2'],
                'isi3warna3' =>$data['isi3warna3'],
                'isi3status1' =>$data['isi3status1'],
                'isi3status2' =>$data['isi3status2'],
                'isi3status3' =>$data['isi3status3'],
                'isi3keterangan1' =>$data['isi3keterangan1'],
                'isi3keterangan2' =>$data['isi3keterangan2'],
                'isi3keterangan3' =>$data['isi3keterangan3'],
                'isi3tglimposisi1' =>$data['isi3tglimposisi1'],
                'isi3tglimposisi2' =>$data['isi3tglimposisi2'],
                'isi3tglimposisi3' =>$data['isi3tglimposisi3'],
                // 'tanggal_imposisi_cover' =>$data['tanggal_imposisi_cover'],
                // 'tanggal_imposisi_isi' =>$data['tanggal_imposisi_isi'],
                'catatan_imposisi' =>$data['catatan_imposisi']
            );            
            $this->db->insert('imposisi',$tambah_imposisi);

            
    }

    public function status_umum($data)
    {
        $ganti_status = array(
            'so_status' =>$data['status_order'],
        );
        $this->db->set($ganti_status);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('order');
    }
    
    public function edit_imposisi($data)
	{
            $ubah_imposisi = array(                                                
                'namaoperator1' =>$data['namaoperator1'],
                'namaoperator2' =>$data['namaoperator2'],
                'total_plat_cover' =>$data['total_plat_cover'],
                'total_plat_isi' =>$data['total_plat_isi'],                
                'imposisi_status' =>$data['imposisi_status'],
                'cover1mesin1' =>$data['cover1mesin1'],
                'jumlahplatecover1' =>$data['jumlahplatecover1'],
                'cover1plat1' =>$data['cover1plat1'],
                'cover1plat2' =>$data['cover1plat2'],
                'cover1plat3' =>$data['cover1plat3'],
                'cover1set1' =>$data['cover1set1'],
                'cover1set2' =>$data['cover1set2'],
                'cover1set3' =>$data['cover1set3'],
                'cover1up1' =>$data['cover1up1'],
                'cover1up2' =>$data['cover1up2'],
                'cover1up3' =>$data['cover1up3'],
                'cover1lbrcetak1' =>$data['cover1lbrcetak1'],
                'cover1lbrcetak2' =>$data['cover1lbrcetak2'],
                'cover1lbrcetak3' =>$data['cover1lbrcetak3'],
                'cover1warna1' =>$data['cover1warna1'],
                'cover1warna2' =>$data['cover1warna2'],
                'cover1warna3' =>$data['cover1warna3'],
                'cover1status1' =>$data['cover1status1'],
                'cover1status2' =>$data['cover1status2'],
                'cover1status3' =>$data['cover1status3'],
                'cover1keterangan1' =>$data['cover1keterangan1'],
                'cover1keterangan2' =>$data['cover1keterangan2'],
                'cover1keterangan3' =>$data['cover1keterangan3'],
                'cover1tglimposisi1' =>$data['cover1tglimposisi1'],
                'cover1tglimposisi2' =>$data['cover1tglimposisi2'],
                'cover1tglimposisi3' =>$data['cover1tglimposisi3'],
                'cover2mesin1' =>$data['cover2mesin1'],
                'jumlahplatecover2' =>$data['jumlahplatecover2'],
                'cover2plat1' =>$data['cover2plat1'],
                'cover2plat2' =>$data['cover2plat2'],
                'cover2plat3' =>$data['cover2plat3'],
                'cover2set1' =>$data['cover2set1'],
                'cover2set2' =>$data['cover2set2'],
                'cover2set3' =>$data['cover2set3'],
                'cover2up1' =>$data['cover2up1'],
                'cover2up2' =>$data['cover2up2'],
                'cover2up3' =>$data['cover2up3'],
                'cover2lbrcetak1' =>$data['cover2lbrcetak1'],
                'cover2lbrcetak2' =>$data['cover2lbrcetak2'],
                'cover2lbrcetak3' =>$data['cover2lbrcetak3'],
                'cover2warna1' =>$data['cover2warna1'],
                'cover2warna2' =>$data['cover2warna2'],
                'cover2warna3' =>$data['cover2warna3'],
                'cover2status1' =>$data['cover2status1'],
                'cover2status2' =>$data['cover2status2'],
                'cover2status3' =>$data['cover2status3'],
                'cover2keterangan1' =>$data['cover2keterangan1'],
                'cover2keterangan2' =>$data['cover2keterangan2'],
                'cover2keterangan3' =>$data['cover2keterangan3'],
                'cover2tglimposisi1' =>$data['cover2tglimposisi1'],
                'cover2tglimposisi2' =>$data['cover2tglimposisi2'],
                'cover2tglimposisi3' =>$data['cover2tglimposisi3'],
                'isi1mesin1' =>$data['isi1mesin1'],
                'jumlahplateisi1' =>$data['jumlahplateisi1'],
                'isi1plat1' =>$data['isi1plat1'],
                'isi1plat2' =>$data['isi1plat2'],
                'isi1plat3' =>$data['isi1plat3'],
                'isi1set1' =>$data['isi1set1'],
                'isi1set2' =>$data['isi1set2'],
                'isi1set3' =>$data['isi1set3'],
                'isi1up1' =>$data['isi1up1'],
                'isi1up2' =>$data['isi1up2'],
                'isi1up3' =>$data['isi1up3'],
                'isi1lbrcetak1' =>$data['isi1lbrcetak1'],
                'isi1lbrcetak2' =>$data['isi1lbrcetak2'],
                'isi1lbrcetak3' =>$data['isi1lbrcetak3'],
                'isi1warna1' =>$data['isi1warna1'],
                'isi1warna2' =>$data['isi1warna2'],
                'isi1warna3' =>$data['isi1warna3'],
                'isi1status1' =>$data['isi1status1'],
                'isi1status2' =>$data['isi1status2'],
                'isi1status3' =>$data['isi1status3'],
                'isi1keterangan1' =>$data['isi1keterangan1'],
                'isi1keterangan2' =>$data['isi1keterangan2'],
                'isi1keterangan3' =>$data['isi1keterangan3'],
                'isi1tglimposisi1' =>$data['isi1tglimposisi1'],
                'isi1tglimposisi2' =>$data['isi1tglimposisi2'],
                'isi1tglimposisi3' =>$data['isi1tglimposisi3'],
                'isi2mesin1' =>$data['isi2mesin1'],
                'jumlahplateisi2' =>$data['jumlahplateisi2'],
                'isi2plat1' =>$data['isi2plat1'],
                'isi2plat2' =>$data['isi2plat2'],
                'isi2plat3' =>$data['isi2plat3'],
                'isi2set1' =>$data['isi2set1'],
                'isi2set2' =>$data['isi2set2'],
                'isi2set3' =>$data['isi2set3'],
                'isi2up1' =>$data['isi2up1'],
                'isi2up2' =>$data['isi2up2'],
                'isi2up3' =>$data['isi2up3'],
                'isi2lbrcetak1' =>$data['isi2lbrcetak1'],
                'isi2lbrcetak2' =>$data['isi2lbrcetak2'],
                'isi2lbrcetak3' =>$data['isi2lbrcetak3'],
                'isi2warna1' =>$data['isi2warna1'],
                'isi2warna2' =>$data['isi2warna2'],
                'isi2warna3' =>$data['isi2warna3'],
                'isi2status1' =>$data['isi2status1'],
                'isi2status2' =>$data['isi2status2'],
                'isi2status3' =>$data['isi2status3'],
                'isi2keterangan1' =>$data['isi2keterangan1'],
                'isi2keterangan2' =>$data['isi2keterangan2'],
                'isi2keterangan3' =>$data['isi2keterangan3'],
                'isi2tglimposisi1' =>$data['isi2tglimposisi1'],
                'isi2tglimposisi2' =>$data['isi2tglimposisi2'],
                'isi2tglimposisi3' =>$data['isi2tglimposisi3'],
                'isi3mesin1' =>$data['isi3mesin1'],
                'jumlahplateisi3' =>$data['jumlahplateisi3'],
                'isi3plat1' =>$data['isi3plat1'],
                'isi3plat2' =>$data['isi3plat2'],
                'isi3plat3' =>$data['isi3plat3'],
                'isi3set1' =>$data['isi3set1'],
                'isi3set2' =>$data['isi3set2'],
                'isi3set3' =>$data['isi3set3'],
                'isi3up1' =>$data['isi3up1'],
                'isi3up2' =>$data['isi3up2'],
                'isi3up3' =>$data['isi3up3'],
                'isi3lbrcetak1' =>$data['isi3lbrcetak1'],
                'isi3lbrcetak2' =>$data['isi3lbrcetak2'],
                'isi3lbrcetak3' =>$data['isi3lbrcetak3'],
                'isi3warna1' =>$data['isi3warna1'],
                'isi3warna2' =>$data['isi3warna2'],
                'isi3warna3' =>$data['isi3warna3'],
                'isi3status1' =>$data['isi3status1'],
                'isi3status2' =>$data['isi3status2'],
                'isi3status3' =>$data['isi3status3'],
                'isi3keterangan1' =>$data['isi3keterangan1'],
                'isi3keterangan2' =>$data['isi3keterangan2'],
                'isi3keterangan3' =>$data['isi3keterangan3'],
                'isi3tglimposisi1' =>$data['isi3tglimposisi1'],
                'isi3tglimposisi2' =>$data['isi3tglimposisi2'],
                'isi3tglimposisi3' =>$data['isi3tglimposisi3'],
                // 'tanggal_imposisi_cover' =>$data['tanggal_imposisi_cover'],
                // 'tanggal_imposisi_isi' =>$data['tanggal_imposisi_isi'],
                'catatan_imposisi' =>$data['catatan_imposisi']
            );
            
        $this->db->set($ubah_imposisi);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('imposisi');            
    }


    // public function edit($data)
	// {
    //     // ubah bagian surat order  
	// 	$ubah_so = array(            
    //         'id_order' =>$data['id_order'],
    //         'nomor_so' =>$data['nomor_so'],
    //         'tanggal_masuk' =>$data['tanggal_masuk'],
    //         'deadline' =>$data['deadline'],
    //         'nama_pemesan' =>$data['nama_pemesan'],
    //         'nama_orderan' =>$data['nama_orderan'],
    //         'ukuran' =>$data['ukuran'],
    //         'halaman' =>$data['halaman'],
    //         'oplag' =>$data['oplag'],
    //         'so_status' =>$data['so_status'],                        
    //     );
    //     $this->db->set($ubah_so);
    //     $this->db->where('id_order',$data['id_order']);
    //     $this->db->update('order');                        
        
    //     // // ubah bagian ctcp
    //     $ubah_ctcp = array(
    //         'id_order' =>$data['id_order'],
    //         'ctcp_cover_1' =>$data['ctcp_cover_1'],
    //         'ctcp_isi_1' =>$data['ctcp_isi_1'],
    //         'plat_cover_1' =>$data['plat_cover_1'],
    //         'plat_isi_1' =>$data['plat_isi_1'],
    //         'ctcp_cover_2' =>$data['ctcp_cover_2'],
    //         'ctcp_isi_2' =>$data['ctcp_isi_2'],
    //         'plat_cover_2' =>$data['plat_cover_2'],
    //         'plat_isi_2' =>$data['plat_isi_2'],
    //         'ctcp_cover_3' =>$data['ctcp_cover_3'],
    //         'ctcp_isi_3' =>$data['ctcp_isi_3'],
    //         'plat_cover_3' =>$data['plat_cover_3'],
    //         'plat_isi_3' =>$data['plat_isi_3']
    //     );
    //     $this->db->set($ubah_ctcp);
    //     $this->db->where('id_order',$data['id_order']);
    //     $this->db->update('ctcp');
        

    //     // ubah bagian kertas
    //     $ubah_kertas = array(
    //         'id_order' =>$data['id_order'],
    //         'jenis_kertas_cover_1' =>$data['jenis_kertas_cover_1'],
    //         'jenis_kertas_isi_1' =>$data['jenis_kertas_isi_1'],
    //         'ukuran_plano_cover_1' =>$data['ukuran_plano_cover_1'],
    //         'ukuran_plano_isi_1' =>$data['ukuran_plano_isi_1'],
    //         'jumlah_kertas_cover_1' =>$data['jumlah_kertas_cover_1'],
    //         'jumlah_kertas_isi_1' =>$data['jumlah_kertas_isi_1'],
    //         'jenis_kertas_cover_2' =>$data['jenis_kertas_cover_2'],
    //         'jenis_kertas_isi_2' =>$data['jenis_kertas_isi_2'],
    //         'ukuran_plano_cover_2' =>$data['ukuran_plano_cover_2'],
    //         'ukuran_plano_isi_2' =>$data['ukuran_plano_isi_2'],
    //         'jumlah_kertas_cover_2' =>$data['jumlah_kertas_cover_2'],
    //         'jumlah_kertas_isi_2' =>$data['jumlah_kertas_isi_2'],
    //         'jenis_kertas_cover_3' =>$data['jenis_kertas_cover_3'],
    //         'jenis_kertas_isi_3' =>$data['jenis_kertas_isi_3'],
    //         'ukuran_plano_cover_3' =>$data['ukuran_plano_cover_3'],
    //         'ukuran_plano_isi_3' =>$data['ukuran_plano_isi_3'],
    //         'jumlah_kertas_cover_3' =>$data['jumlah_kertas_cover_3'],
    //         'jumlah_kertas_isi_3' =>$data['jumlah_kertas_isi_3']
    //     );
    //     $this->db->set($ubah_kertas);
    //     $this->db->where('id_order',$data['id_order']);
    //     $this->db->update('kertas');

    //      // ubah bagian kertas
    //      $ubah_potong = array(
    //         'id_order' =>$data['id_order'],
    //         'potong_cover_1' =>$data['potong_cover_1'],
    //         'potong_isi_1' =>$data['potong_isi_1'],
    //         'potong_cover_2' =>$data['potong_cover_2'],
    //         'potong_isi_2' =>$data['potong_isi_2'],
    //         'potong_cover_3' =>$data['potong_cover_3'],
    //         'potong_isi_3' =>$data['potong_isi_3'],
    //         'potong_isi_4' =>$data['potong_isi_4'],
    //      );
    //      $this->db->set($ubah_potong);
    //      $this->db->where('id_order',$data['id_order']);
    //      $this->db->update('potong');

    //     // ubah bagian cetak
    //     $ubah_cetak = array(
    //         'id_order' =>$data['id_order'],
    //         'mesin_cover_1' =>$data['mesin_cover_1'],
    //         'mesin_isi_1' =>$data['mesin_isi_1'],
    //         'warna_cover_1' =>$data['warna_cover_1'],
    //         'warna_isi_1' =>$data['warna_isi_1'],
    //         'insit_cover_1' =>$data['insit_cover_1'],
    //         'insit_isi_1' =>$data['insit_isi_1'],
    //         'mesin_cover_2' =>$data['mesin_cover_2'],
    //         'mesin_isi_2' =>$data['mesin_isi_2'],
    //         'warna_cover_2' =>$data['warna_cover_2'],
    //         'warna_isi_2' =>$data['warna_isi_2'],
    //         'insit_cover_2' =>$data['insit_cover_2'],
    //         'insit_isi_2' =>$data['insit_isi_2'],
    //         'mesin_cover_3' =>$data['mesin_cover_3'],
    //         'mesin_isi_3' =>$data['mesin_isi_3'],
    //         'warna_cover_3' =>$data['warna_cover_3'],
    //         'warna_isi_3' =>$data['warna_isi_3'],
    //         'insit_cover_3' =>$data['insit_cover_3'],
    //         'insit_isi_3' =>$data['insit_isi_3'],
    //         'keterangan_cetak_cover' =>$data['keterangan_cetak_cover'],  
    //         'keterangan_cetak_isi' =>$data['keterangan_cetak_isi'],    
            
    //     );
    //     $this->db->set($ubah_cetak);
    //     $this->db->where('id_order',$data['id_order']);
    //     $this->db->update('cetak');

    //     // ubah bagian finishing
    //     $ubah_finishing = array(
    //         'id_order' =>$data['id_order'],
    //         'finishing_cover_doff' =>$data['finishing_cover_doff'],
    //         'finishing_cover_emboss' =>$data['finishing_cover_emboss'],
    //         'finishing_cover_glossy' =>$data['finishing_cover_glossy'],
    //         'finishing_cover_hotprint' =>$data['finishing_cover_hotprint'],
    //         'finishing_cover_spot_uvi' =>$data['finishing_cover_spot_uvi'],
    //         'finishing_cover_uvi' =>$data['finishing_cover_uvi'],
    //         'finishing_isi_lipat' =>$data['finishing_isi_lipat'],
    //         'finishing_isi_susun' =>$data['finishing_isi_susun'],
    //         'finishing_akhir_bending' =>$data['finishing_akhir_bending'],
    //         'finishing_akhir_hard_cover' =>$data['finishing_akhir_hard_cover'],
    //         'finishing_akhir_jahit_benang' =>$data['finishing_akhir_jahit_benang'],
    //         'finishing_akhir_jahit_kawat' =>$data['finishing_akhir_jahit_kawat'],
    //         'finishing_akhir_pond' =>$data['finishing_akhir_pond'],
    //         'finishing_akhir_klem' =>$data['finishing_akhir_klem'],
    //         'finishing_akhir_spiral' =>$data['finishing_akhir_spiral'],
    //         // 'keterangan_finishing_cover' =>$data['keterangan_finishing_cover'],
    //         // 'keterangan_finishing_isi' =>$data['keterangan_finishing_isi'],
    //         // 'keterangan_finishing_akhir' =>$data['keterangan_finishing_akhir']
    //     );
    //     $this->db->set($ubah_finishing);
    //     $this->db->where('id_order',$data['id_order']);
    //     $this->db->update('finishing');
    // }

}