<?php
require "config.php";
include TEMPLATE_PATH."/header.php";
include TEMPLATE_PATH."/nav.php";
if(isset($_COOKIE['usuario'])){
echo($_COOKIE['usuario']);
}
?>

<main>
    <h1>Disciplinas</h1>
    <h3>Os que bebem não sabem falar às mulheres,se perderam de tudo, e ninguém os aceita.
Andam lentos na rua, e as ruas e postes não têm fim.
Alguns deles dão giros mais longos, mas não há o que temer:amanhã eles voltam para casa.
O que bebe imagina que está com mulheres-como postes à noite são sempre os mesmos, assim as mulheres são sempre as mesmas-; nenhuma o escuta.
Mas o bêbado tenta, e as mulheres não o querem.
As mulheres, que riem, conhecem de cor suas palavras.
Por que riem assim as mulheres ou gritam, se choram?
O homem bêbado quer e deseja uma bêbada que o ouvisse calada. Mas elas o atiçam:"Para ter esse filho, é preciso contar com a gente."
O homem bêbado abraça-se ao bêbado amigo que esta noite é seu filho, nascido sem elas.
Como pode umazinha que chora e que grita dar-lhe um filho amigo? Se aquele é um bêbado, não recorda as mulheres no andar inseguro, e esses dois perambulam em paz. O filhinho que conta não nasceu de mulher- pois seria mulher também ele. Caminha com o pai e conversa:toda a noite iluminam-lhe os passos os postes.</h3>
    <?php
    ?>
</main>
<?php
include TEMPLATE_PATH."/footer.php";
?>