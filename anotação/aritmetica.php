//Ordem de precedência dos operadores aritméticos em PHP
//Potencia ** primeiro
//Multiplicação *, Divisão / e porcentagem % em segundo
//Soma + e subtração - por último
//antes de qualquer operação aritmética, são resolvidas as expressões entre parênteses ()
// <?php
// $res = 50 / 2 + 3 ** 2;
// echo "Resultado é $res";

//Funções matemáticas em PHP
//abs() - valor absoluto
//echo abs(-15.5); //15.5
//base_convert("A5", 16, 2); //converte o número A5 da base 16 (hexadecimal) para a base 2 (binário)
//ceil() - arredonda para cima
//echo ceil(4.3); //5
//floor() - arredonda para baixo
//echo floor(4.7); //4
//round() - arredonda para o inteiro mais próximo
//echo round(4.5); //5
//hypot() - calcula a hipotenusa de um triângulo retângulo
//echo hypot(3, 4); //5
//intdiv() - divisão inteira
//echo intdiv(7, 3); //2
//min() - retorna o menor valor
//echo min(5, 2, 9, 1, 7); // 1
//max() - retorna o maior valor
//echo max(5, 2, 9, 1, 7); // 9
//pi() - retorna o valor de π
//echo pi(); // 3.1415926535898 (const M_PI também pode ser usado)
//pow() - calcula a potência
//echo pow(2, 3); // 8
//sin() - calcula o seno de um ângulo em radianos
//echo sin(pi() / 2); // 1
//cos() - calcula o cosseno de um ângulo em radianos
//echo cos(0); // 1
//tan() - calcula a tangente de um ângulo em radianos
//echo tan(pi() / 4); // 1
//sqrt() - calcula a raiz quadrada (para fazer raiz cubica ou de outra ordem, use pow() ou 27 ** (1/3))
//echo sqrt(16); // 4
//rand() - gera um número aleatório
//echo rand(1, 100); // número aleatório entre 1 e 100