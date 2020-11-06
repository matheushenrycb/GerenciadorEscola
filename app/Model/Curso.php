<?php

namespace App\Model;

use \App\Db\Database;
use PDO;

class Curso
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $nome;

    /**
     * @var string
     */
    public $datacriacao;

    /**
     * @var string
     */
    public $enade;

    /**
     * @var string
     */
    public $area;

    /**
     * metodo que cadastra um novo curso
     * @var boolean
     */
    public function cadastrar()
    {
        //definir data  copiar para instituicao
         $this->datacriacao = date('Y-m-d H:i:s');
        // inserir curso no banco
        $obDatabase = new Database('curso');
        $this->id = $obDatabase->insert([
            'nome' => $this->nome,
            'datacriacao' => $this->datacriacao,
            'enade' => $this->enade,
            'area' => $this->area
        ]);
        return true;

        // print_r($this);

        //atribuir o id de curso na instancia

        //retornar sucesso
    }

    /**
     * metodo que atualiza o curso no banco
     * @return boolean
     * 
     */
    public function atualizar()
    {
        return (new Database('curso'))->update('id=' . $this->id, [
            'nome' => $this->nome,
            'datacriacao' => $this->datacriacao,
            'enade' => $this->enade,
            'area' => $this->area
        ]);
    }
    /**
     * metodo responsavel por obter os cursos do banco
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     * 
     */
    public static function getCursos($where = null, $order = null, $limit = null)
    {
        return (new Database('curso'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }



    /**
     * metodo responsavel por encontrar curso atraves do id
     * @param integer
     * @return curso
     * 
     */
    public static function getCurso($id)
    {
        return (new Database('curso'))->select('id=' . $id, null, null, '*')
            ->fetchObject(self::class);
    }

    public function excluir()
    {
        return (new Database('curso'))->delete('id = ' . $this->id);
    }
}
