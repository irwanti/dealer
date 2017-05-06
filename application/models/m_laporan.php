<?php
class M_laporan extends CI_Model {
    function get() {
        $query =$this->db->query("select MONTH(tgl_servis) AS bulan, SUM(harga_satuan*qty)+bayar AS 
            pendapatan_servis FROM servis a, sparepart b, jasa_teknisi c, servis_detail d 
            WHERE a.id_servis=d.id_servis AND a.id_jasa_teknisi=c.id_jasa_teknisi AND 
            b.id_sparepart=d.id_sparepart group BY MONTH (tgl_servis)");
        return $query->result();
    }

     function get2() {
        $query =$this->db->query("select a.nama_pelanggan,a.no_hp, DATE_ADD(tgl_servis, INTERVAL 6 MONTH) waktu_servis 
            FROM pelanggan a, servis b 
            WHERE a.id_pelanggan=b.id_pelanggan");
        return $query->result();
    }

    function get3() {
        $query =$this->db->query("select a.nama_pelanggan, b.merek_mobil, b.plat, b.keluhan, d.nama_teknisi_ahli, 
            d.nama_teknisi_pembantu, e.nama_sparepart, f.qty, c.tgl_servis 
            FROM data_servis b, pelanggan a, servis c, tim_teknisi d, sparepart e, servis_detail f 
            WHERE (a.id_pelanggan=c.id_pelanggan) AND (b.id_data=c.id_data) 
            AND (c.id_tim_teknisi=d.id_tim_teknisi) 
            AND (c.id_servis=f.id_servis) AND (e.id_sparepart=f.id_sparepart) order by f.id_servis ");
        return $query->result();
    }

    function get4() {
        $query =$this->db->query("select a.nama_sparepart, a.stok-sum(b.qty) as sisa 
            FROM sparepart a, servis_detail b 
            WHERE a.id_sparepart=b.id_sparepart group by b.id_sparepart");
        return $query->result();
    }

    function get5() {
        $query =$this->db->query("select * FROM `pesan`");
        return $query->result();
    }    

    function getall() {
        $ambildata = $this->db->get('servis');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}
?>