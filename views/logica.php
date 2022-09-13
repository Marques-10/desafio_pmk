<div class="container mb-4">
    
    <hr>
    
    <h3 class="mb-3">Desafio de lógica</h3>

    <h3>Enunciado: </h3>
    <p>
        Dado o seguinte array: <b>[20,65,682,1050,1558,4032,5065,5095,6063,15000]</b>
        <br>
        Faça uma função que pega a diferença entre os índices <b>(exemplo: 65-20; 682-
        65)</b> e verifique se a diferença dividida por 4 é uma divisão exata
        <br>
        No final a função deve retornar os valores que divido por 4 resulta em uma divisão exata.
        <b>Exemplo: 65-20 = 45</b>
        <br>
        45/4 (não é uma divisão exata porque o resto é 1)
        <br>
        Divisão exata: visão que tem como resto o valor 0.
    </p>

    <hr>

    <h3>Resultado: </h3>
    <ul>
        <?php foreach($array_resposta as $resposta): ?>
            <li><?= $resposta ?></li>
        <?php endforeach; ?>
    </ul>
</div>