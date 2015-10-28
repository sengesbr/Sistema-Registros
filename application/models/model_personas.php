<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Personas extends CI_Model {

	function __construct() {
		parent::__construct();
    }

    function all() {
        $this->db->select('personas.* , asistencia.valor as asistencia_valor');
        $this->db->from('personas');
        $this->db->join('asistencia', 'personas.id_asistencia = asistencia.id', 'left');

        $query = $this->db->get();
        return $query->result();
    }

    function allFiltered($field, $value) {
        $this->db->select('personas.* , asistencia.valor as asistencia_valor');
        $this->db->from('personas');
        $this->db->join('asistencia', 'personas.id_asistencia = asistencia.id', 'left');
        $this->db->like($field, $value);

        $query = $this->db->get();
        return $query->result();
    }

    function find($id) {
    	$this->db->where('id', $id);
		return $this->db->get('personas')->row();
    }

    function insert($registro) {
    	$this->db->set($registro);
		$this->db->insert('personas');
    }

    function update($registro) {
    	$this->db->set($registro);
		$this->db->where('id', $registro['id']);
		$this->db->update('personas');
    }

    function delete($id) {
    	$this->db->where('id', $id);
		$this->db->delete('personas');
    }

   

    function get_asistencia() {
        $lista = array();
        $this->load->model('Model_Asistencia');
        $registros = $this->Model_Asistencia->all();
        foreach ($registros as $registro) {
            $lista[$registro->id] = $registro->valor;
        }
        return $lista;
    }

}
