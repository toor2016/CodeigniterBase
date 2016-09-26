<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('Curso/cadastroCurso_view');
    }

    public function validaCurso()
    {
        $this->load->model('Curso_model');

        $this->load->library('form_validation');

        $cursonome = $this->input->post('cursonome');
        $cargahoraria = ($this->input->post('cargahoraria'));
        $ementa = $this->input->post('ementa');
        $bibliografia = $this->input->post('bibliografia');
        $modocurso = $this->input->post('modocurso');
        $origem = $this->input->post('origem');
        $situacao = $this->input->post('situacao');
        if($situacao == "ativo"){
            $situacao = true;
        }elseif ($situacao == "inativo"){
            $situacao = false;
        }

        $dadosCurso = array(
            'cursonome' => $cursonome,
            'cargahoraria' => $cargahoraria,
            'ementa' => $ementa,
            'bibliografia' => $bibliografia,
            'modocurso' => $modocurso,
            'origemcurso' => $origem,
            'situacao' => $situacao
        );

        $cadastrado = $this->Curso_model->CadastrarCurso($dadosCurso);


        if ($cadastrado) {
            var_dump($dadosCurso);
            redirect('Curso');
        } else {
            $this->load->view('Erro_view');
        }


    }
}