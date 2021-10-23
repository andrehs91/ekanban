<h1 class="text-center mb-3">eKanban</h1>
<section class="mb-3">
    <h2>O que é o eKanban?</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur soluta consequuntur accusantium totam perspiciatis, deleniti pariatur earum delectus quos. Delectus maiores facilis quam accusantium! Possimus aspernatur eos autem reiciendis dicta!</p>
</section>
<section class="mb-3 alert alert-secondary">
    <h3>Decisões Técnicas</h3>
    <h4>Estrutura e Forma</h4>
    <p>A arquitetura deste sistema é baseada nos padrões <u>MVC</u>, <u>DAO</u> e <u>Front Controller</u>. Tais escolhas foram feitas com o objetivo de criar um nível adequado de separação de responsabilidades, fator que facilita a manutenção da base de códigos e viabiliza a escalabilidade do software.</p>
    <p>Além disso, o sistema foi projetado para trabalhar como uma <u>página web clássica</u>. Isto se deve a uma preferência deste desenvolvedor, que defende que diversas aplicações (sobretudo as empresarias) não devem ser desenvolvidas como SPAs se não forem de fato multiplataforma, visto que tal prática aumenta a complexidade do projeto, altera o controle de fluxo natural dos navegadores (voltar/avançar, abrir em múltiplas abas) e pode causar lentidão nos casos de excesso de requisições assíncronas em redes de baixo desempenho, fatores que impactam negativamente a experiência do usuário.</p>
    <h4>Back-End</h4>
    <p class="mb-0">A linguem escolhida para o desenvolvimento do back-end da aplicação foi o <u>PHP</u> em sua <u>versão 8</u>. Seguem alguns dos motivos que influenciaram esta escolha:</p>
        <ol>
            <li>Trata-se de um sistema web, cenário em que o PHP já provou seu valor;</li>
            <li>Por ser uma linguagem consolidada e com documentação abundante, a busca por ajuda se torna bastante fácil;</li>
            <li>O PHP é uma linguagem que vem apresentando diversas evoluções em funcionalidades, desempenho e relacionadas à escrita/leitura de código (Developer Experience).</li>
        </ol>
    <h4>Banco de Dados</h4>
    <p>Por padrão, esta aplicação utiliza o banco de dados <u>MySQL</u> como solução para persistência de dados. Porém, em ambiente de desenvolvimento, ele também foi testado utilizando a biblioteca <u>SQLite3</u> como alternativa. O banco de dados utilizado pode ser alterado através da substituição de apenas duas linhas de código. Apesar da não ser uma prática comum em ambientes de produção, esta substituição é facilitada pela extensão <u>PDO</u> do PHP, que abstrai e padroniza diversos aspectos da conexão com estas ferramentas.</p>
    <h4>Front-End</h4>
    <p>Para agilizar o processo de criação do front-end foi utilizado o framework <u>Bootstrap</u> em sua <u>versão 5</u>. Os conceitos de UX foram observados de forma a proporcionar uma <u>interface responsiva</u>, simples, limpa e de fácil utilização.</p>
</section>