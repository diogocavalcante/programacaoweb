<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $id
 * @property integer $matricula
 * @property string $nome
 * @property string $sexo
 * @property integer $id_curso
 * @property integer $ano_ingresso
 *
 * @property Curso $idCurso
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricula', 'id_curso', 'ano_ingresso', 'nome', 'sexo'], 'required', 'message' => 'Este campo é obrigatório.'],
            [['matricula', 'id_curso', 'ano_ingresso'], 'integer'],
            ['nome', 'string', 'max' => 200],
            [['sexo'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Identificador',
            'matricula' => 'Registro',
            'nome' => 'Nombre',
            'sexo' => 'Sexo',
            'id_curso' => 'Nombre del Curso',
            'ano_ingresso' => 'Año de Entrada',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCurso()
    {
        return $this->hasOne(Curso::className(), ['nome' => 'id_curso']);
    }
    
    public function afterFind() {
        
        if($this->nome != 'da' || 'de' || 'di' || 'du'){
            $this->nome = ucwords(strtolower($this->nome));
        }
        else {
            $this->nome = (strtolower($this->nome));
        }
        
        if($this->sexo === 'F' || $this->sexo === 'f'){
            $this->sexo = 'Feminino';
        }
        else if($this->sexo === 'M' || $this->sexo === 'm'){
            $this->sexo = 'Masculino';
            
        }
    }
    
    
}
