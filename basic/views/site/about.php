<?php
use yii\helpers\Html;

/* @var $this yii\web\View */ 
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

?>

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        Exercicio 2: Foi adicionado a função date() com a finalidade de mostrar a data e hora atual do sistema. </br>
    </p>
    
    
    <?php
        $data = date('D');
        $mes = date('M');
        $dia = date('d');
        $ano = date('Y');
        $minutos = date('i');
        $segundos = date('s');
        $hora = date('H');
    
        $semana = array(
            'Sun' => 'Domingo', 
            'Mon' => 'Segunda-Feira',
            'Tue' => 'Terca-Feira',
            'Wed' => 'Quarta-Feira',
            'Thu' => 'Quinta-Feira',
            'Fri' => 'Sexta-Feira',
            'Sat' => 'Sábado'
        );
    
        $mes_extenso = array(
            'Jan' => 'Janeiro',
            'Feb' => 'Fevereiro',
            'Mar' => 'Marco',
            'Apr' => 'Abril',
            'May' => 'Maio',
            'Jun' => 'Junho',
            'Jul' => 'Julho',
            'Aug' => 'Agosto',
            'Nov' => 'Novembro',
            'Sep' => 'Setembro',
            'Oct' => 'Outubro',
            'Dec' => 'Dezembro'
    );
    
    echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}" . " {$hora}" . ":{$minutos}" . ":{$segundos}";
    
    ?>
  



