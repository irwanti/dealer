<?php
class M_teknisi extends CI_Model {
    function getall() {
        $ambildata = $this->db->get('tim_teknisi');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	/*function getall2() {
        $ambildata = $this->db->get('sparepart');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }*/
 
    function tambah() {
		$id_tim_teknisi = $this->input->post('id_tim_teknisi');
        $nama_teknisi_ahli = $this->input->post('nama_teknisi_ahli');
        $nama_teknisi_pembantu = $this->input->post('nama_teknisi_pembantu');
        $data = array (
			'id_tim_teknisi' => $id_tim_teknisi,
            'nama_teknisi_ahli'  => $nama_teknisi_ahli,
            'nama_teknisi_pembantu'=> $nama_teknisi_pembantu
        ); 
        $this->db->insert('tim_teknisi',$data);
    }
	
	function update($id) {
        $nama_teknisi_ahli = $this->input->post('nama_teknisi_ahli');
        $nama_teknisi_pembantu = $this->input->post('nama_teknisi_pembantu');
        $data = array (
            'nama_teknisi_ahli'  => $nama_teknisi_ahli,
            'nama_teknisi_pembantu'=> $nama_teknisi_pembantu
        ); 
        $this->db->where('id_tim_teknisi', $id);
        $this->db->update('tim_teknisi', $data);
    }
 
    function getById($id) {
        return $this->db->get_where('tim_teknisi', array('id_tim_teknisi' => $id))->row();
    }
	
	function hapus($id) {
		$this->db->where('id_tim_teknisi',$id);
		$this->db->delete('tim_teknisi');
	}
}
?>