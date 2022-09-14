<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>calculadora </title>
    </head>
    <body>
            <!--recebe os dados da calculadora-->
        <form id="calculadora_simples" method="post">
            <input type="number" name="n1" placeholder="insira um número aqui" />
            <input type="number" name="n2" placeholder="insira um número aqui" />
            <input type="submit" name="adição" value="+" />
            <input type="submit" name="subtração" value="-" />
            <input type="submit" name="divisão" value="/" />
            <input type="submit" name="multiplicação" value="*" />
            <input type="submit" name="média" value="média" />
        </form>
         <!--verificação de entrada de dados -->
        <?php

        if(isset ($_POST ['adição'])){

            if(empty ($_POST ['n1']) or empty ($_POST ['n2'])){
                print "ERROR um ou mais campos vazios" ;

            }else{

                $n1 = $_POST ['n1'] ;
                $n2 = $_POST ['n2'] ;
                $result = $n1 + $n2 ;
                print "$result" ;
            }
        }

        if(isset ($_POST ['subtração'])){

            if(empty ($_POST ['n1']) or empty ($_POST ['n2'])){
                print "ERROR um ou mais campos vazios" ;

            }else{

                $n1 = $_POST ['n1'] ;
                $n2 = $_POST ['n2'] ;
                $result = $n1 - $n2 ;
                print "$result" ;
            }
        }

        if(isset( $_POST ['divisão'])){

            if(empty ($_POST ['n1']) or empty ($_POST ['n2'])){
                print "ERROR um ou mais campos vazios" ;

            }else{

                $n1 = $_POST ['n1'] ;
                $n2 = $_POST ['n2'] ;
                $result = $n1 / $n2 ;
                print "$result" ;
            }
        }

        if(isset ($_POST ['multiplicação'])){

            if(empty ($_POST ['n1']) or empty ($_POST ['n2'])){
                print "ERROR um ou mais campos vazios" ;

            }else{

                $n1 = $_POST ['n1'] ;
                $n2 = $_POST ['n2'] ;
                $result = $n1 * $n2 ;
                print "$result" ;
            }
        }

        if(isset ($_POST ['média'])){

            if(empty ($_POST ['n1']) or empty ($_POST ['n2'])){
                print "ERROR um ou mais campos vazios" ;

            }else{

                $n1 = $_POST ['n1'] ;
                $n2 = $_POST ['n2'] ;
                $result = $n1 + $n2 /2 ;
                print "$result" ;
            }
        }

        ?>
    </body>
</html>