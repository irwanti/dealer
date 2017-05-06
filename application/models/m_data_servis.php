<?php
class M_data_servis extends CI_Model {
     function get() {
        $query =$this->db->query("select a.nama_pelanggan, b.merek_mobil, b.plat, b.keluhan,b.tgl_beli, DATE_ADD(b.tgl_beli, INTERVAL 1 YEAR) batas_garansi 
            FROM pelanggan a, data_servis b, servis c 
            WHERE a.id_pelanggan=c.id_pelanggan AND b.id_data=c.id_data");
        return $query->result();
    }

    function getall() {
        $ambildata = $this->db->get('data_servis');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function getall2() {
        $this->db->order_by('id_data', 'desc');
        $this->db->limit('1');
        $ambildata = 
        //$this->db->select('*');
        //$this->db->from('servis');
        $this->db->get('data_servis');
        
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
          foreach ($ambildata->result() as $data) {
              $hasil[] = $data;
            }
            return $hasil;
       }
    }

    function getall3() {
        $ambildata = $this->db->get('tim_teknisi');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function getall4() {
        $this->db->order_by('id_tim_teknisi', 'desc');
        $this->db->limit('1');
        $ambildata = 
        //$this->db->select('*');
        //$this->db->from('servis');
        $this->db->get('tim_teknisi');
        
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
          foreach ($ambildata->result() as $data) {
              $hasil[] = $data;
            }
            return $hasil;
       }
    }

    function getall5() {
        $this->db->order_by('id_pelanggan', 'desc');
        $this->db->limit('1');
        $ambildata = 
        //$this->db->select('*');
        //$this->db->from('servis');
        $this->db->get('pelanggan');
        
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
          foreach ($ambildata->result() as $data) {
              $hasil[] = $data;
            }
            return $hasil;
       }
    }

    function getall6() {
        $ambildata = $this->db->get('jasa_teknisi');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function getall7() {
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
		$id_data = $this->input->post('id_data');
        $plat = $this->input->post('plat');
        $merek_mobil = $this->input->post('merek_mobil');
        $tgl_beli = $this->input->post('tgl_beli');
        $keluhan = $this->input->post('keluhan');
        $data = array (
			'id_data' => $id_data,
            'plat'  => $plat,
            'merek_mobil'=> $merek_mobil,
            'tgl_beli' => $tgl_beli,
            'keluhan'=> $keluhan
        ); 
        $id_servis = $this ->input->post('id_servis');
        $id_pelanggan = $this->input->post('id_pelanggan');
        $id_tim_teknisi = $this->input->post('id_tim_teknisi');
        $tgl_servis = $this->input->post('tgl_servis');
        $id_jasa_teknisi = $this->input->post('id_jasa_teknisi');
        $data2 = array(
            'id_servis'=> $id_servis,
            'id_data' => $id_data,
            'id_tim_teknisi' => $id_tim_teknisi,
            'id_pelanggan' => $id_pelanggan,
            'id_jasa_teknisi' => $id_jasa_teknisi,
            'tgl_servis' => $tgl_servis
        );
        $this->db->insert('data_servis',$data);
        $this->db->insert('servis', $data2);
    }
	
	function update($id) {
        $plat = $this->input->post('plat');
        $merek_mobil = $this->input->post('merek_mobil');
        $tgl_beli = $this->input->post('tgl_beli');
        $keluhan = $this->input->post('keluhan');
        $data = array (
            'plat'  => $plat,
            'merek_mobil'=> $merek_mobil,
            'tgl_beli' => $tgl_beli,
            'keluhan'=> $keluhan
        ); 
        $id_pelanggan = $this->input->post('id_pelanggan');
        $id_tim_teknisi = $this->input->post('id_tim_teknisi');
        $tgl_servis = $this->input->post('tgl_servis');
        $id_jasa_teknisi = $this->input->post('id_jasa_teknisi');
        $data2 = array(
            'id_tim_teknisi' => $id_tim_teknisi,
            'id_pelanggan' => $id_pelanggan,
            'id_jasa_teknisi' => $id_jasa_teknisi,
            'tgl_servis' => $tgl_servis
        );
        $this->db->insert('data_servis',$data);
        $this->db->insert('servis', $data2);
    }
 
    function getById($id) {
        return $this->db->get_where('data_servis', array('id_data' => $id))->row();
    }
	
	function hapus($id) {
		$this->db->where('id_data',$id);
		$this->db->delete('data_servis');
	}
}
?>