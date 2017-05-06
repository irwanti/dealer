<?php
class M_servis extends CI_Model {
    function get() {
        $query =$this->db->query("select a.tgl_servis, e.nama_pelanggan, f.merek_mobil, f.plat, 
        h.nama_teknisi_ahli, h.nama_teknisi_pembantu, SUM(b.harga_satuan*d.qty) AS bayar_sparepart, 
        g.bayar AS bayar_teknisi, SUM(b.harga_satuan*d.qty)+g.bayar AS total 
        FROM servis a, sparepart b, servis_detail d, pelanggan e, data_servis f, jasa_teknisi g, tim_teknisi h 
        WHERE (a.id_servis=d.id_servis) AND (a.id_pelanggan=e.id_pelanggan) AND (a.id_data=f.id_data) 
        AND (a.id_jasa_teknisi=g.id_jasa_teknisi) AND (a.id_tim_teknisi=h.id_tim_teknisi) group BY a.id_servis");
        return $query->result();
    }

    /*function get2() {
        $query =$this->db->query("select MONTH(tgl_servis) AS bulan, SUM(harga_satuan*qty)+bayar AS 
            pendapatan_servis FROM servis a, sparepart b, jasa_teknisi c, servis_detail d 
            WHERE a.id_servis=d.id_servis AND a.id_jasa_teknisi=c.id_jasa_teknisi AND 
            b.id_sparepart=d.id_sparepart group BY MONTH(tgl_servis)");
        return $query->result();
    }*/

    function getall() {
        $ambildata = $this->db->get('servis_detail');
          //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function getall2() {
        $ambildata = $this->db->get('sparepart');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    /*function getall3() {
        $ambildata = $this->db->get('servis');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }*/

    /*function getall4() {
        $ambildata = $this->db->get('servis');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }*/

    function getall5() {
        $ambildata = $this->db->get('jasa_teknisi');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function getall6() {
        $this->db->order_by('id_servis', 'desc');
        $this->db->limit('1');
        $ambildata = 
        //$this->db->select('*');
        //$this->db->from('servis');
        $this->db->get('servis');
        
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
          foreach ($ambildata->result() as $data) {
              $hasil[] = $data;
            }
            return $hasil;
       }
    }

    function tambah() {
        $id_servis = $this->input->post('id_servis');
        $id_sparepart = $this->input->post('id_sparepart');
        $qty = $this->input->post('qty');
        $data = array (
            'id_servis'  => $id_servis,
            'id_sparepart'=> $id_sparepart,
            'qty' => $qty
        ); 
        $this->db->insert('servis_detail',$data);
    }
	
	function update($id) {
        $id_data  = $this->input->post('id_data');
        $id_tim_teknisi = $this->input->post('id_tim_teknisi');
        $id_pelanggan = $this->input->post('id_pelanggan');
        $id_jasa_teknisi = $this->input->post('id_jasa_teknisi');
        $tgl_servis = $this->input->post('tgl_servis');
        $tgl_ambil = $this->input->post('tgl_ambil');
        $data = array (
            'id_data'  => $id_data,
            'id_tim_teknisi'=> $id_tim_teknisi,
            'id_pelanggan' => $id_pelanggan,
            'id_jasa_teknisi' => $id_jasa_teknisi,
            'tgl_servis' => $tgl_servis,
            'tgl_ambil' => $tgl_ambil
        );
        $this->db->where('id_servis', $id);
        $this->db->update('servis', $data);
    }
 
    function getById($id) {
        return $this->db->get_where('servis', array('id_servis' => $id))->row();
    }
	
	function hapus($id) {
		$this->db->where('id_servis',$id);
		$this->db->delete('servis');
	}
}
?>