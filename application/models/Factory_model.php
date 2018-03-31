<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Factory_model extends CI_Model {

    public function shape(){
        $shape = $this->input->post('shape');
        switch ($shape) {
            case 'square':
                $data = $this->square();
                break;
            case 'triangle':
                $data = $this->triangle();
                break;
            case 'circle':
                $data = $this->circle();
                break;
        }
        return $data;
    }

    public function circle(){
        $data = '';
        $diameter = $this->input->post('diameter');
        if ($diameter) {
            $ratio = $diameter / 2;
            $area = $ratio * 3.14;
            $data .= $this->card_begin();  
            $data .= 'El área del Círculo es de <b>'.$area.'</b>';  
            $data .= $this->card_end();  
        }else{
            $data .= $this->card_begin();  
            $data .= 'No se puede calcular el área del Círculo';  
            $data .= $this->card_end();  
        }
        return $data;
    }

    public function triangle(){
        $data = '';
        $height = $this->input->post('height');
        $base = $this->input->post('base');
        if ($height && $base) {
            $area = ($base * $height) / 2;
            $data .= $this->card_begin();  
            $data .= 'El área del triángulo es de <b>'.$area.'</b>';  
            $data .= $this->card_end();  
        }else{
            $data .= $this->card_begin();  
            $data .= 'No se puede calcular el área del triángulo';  
            $data .= $this->card_end();  
        }
        return $data;
    }

    public function square(){
        $data = '';
        $surface = $this->input->post('surface');
        $height = $this->input->post('height');
        $base = $this->input->post('base');
        if ($surface) {
            $data .= $this->card_begin();  
            $data .= 'El área del cuadrado calculado por la superficie es de <b>'.$surface.'</b>';  
            $data .= $this->card_end();  
        }
        if ($height) {
            $height = $height*$height;
            $data .= $this->card_begin();  
            $data .= 'El área del cuadrado calculado por la altura es de <b>'.$height.'</b>';  
            $data .= $this->card_end();  
        }
        if ($base) {
            $base = $base*$base;
            $data .= $this->card_begin();  
            $data .= 'El área del cuadrado calculado por la base es de <b>'.$base.'</b>';  
            $data .= $this->card_end();  
        }
        if (!$surface && !$height && !$base) {
            $data .= $this->card_begin();  
            $data .= 'No se puede calcular el área del cuadrado';  
            $data .= $this->card_end();  
        }
        return $data;
    }

    public function card_begin(){
        return '<br /><div class="card"><div class="card-body">';
    }

    public function card_end(){
        return '</div></div>';
    }
}