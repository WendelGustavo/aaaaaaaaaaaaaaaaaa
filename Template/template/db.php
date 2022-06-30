<main>
    <form action="index.php" method="post">
    <input type="text"required name="nome">
    <label for="">nome</label>
    <input type="text" required name="senha">
    <label for="">senha</label>
    <button type="submit">ENVAR</button>
    </form>
<?php
if(isset($_POST['nome'])){
$funcmysli = new mysqli("localhost", "root","c108","caixa");
$bancos2=mysqli_query($funcmysli,"SELECT nome,senha FROM usuario WHERE nome='$nome' AND senha='$senha';");
if($bancos2->num_rows>0){
    $user=$bancos2->fetch_array(MYSQLI_ASSOC);
if($user['nome']==$_POST['nome'] && $user['senha']==$_POST['senha']){
    setcookie('usuario', $user['nome'], time()+172800);
    echo "Login efetuado com sucesso";
}
else{
    echo "Digite novamente usuario errado";
    }
}
}
?>
</main>
