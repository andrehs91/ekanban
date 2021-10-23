<h1 class="mb-3">Kanban</h1>
<section class="mb-3">
    <h2>O que é o Kanban?</h2>
    <span class="fst-italic text-secondary">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis magna auctor, dignissim lacus porta, pharetra purus. Mauris fermentum tortor consequat, consectetur justo ultrices, tempor quam. Fusce pellentesque aliquet vulputate. Sed vitae massa dignissim, condimentum lectus vitae, vestibulum urna. Aenean maximus, ligula nec scelerisque lobortis, nibh elit tempor odio, et sagittis eros nulla ac orci. Donec nec varius ligula, id dapibus turpis. Etiam sapien felis, tempus at porta quis, aliquam eu ligula. Quisque auctor nisi quis sollicitudin varius. Ut tempor rutrum tortor nec varius. Aliquam ante sapien, blandit at varius non, semper nec massa. Cras nec eros in nisi tincidunt gravida quis sed ipsum. Etiam aliquet et mi vitae lacinia. Proin fringilla vulputate mauris.</p>
</section>
<section class="alert alert-secondary mb-0">
    <h3>Decisões Técnicas</h3>
    <h4>Estrutura e Forma</h4>
    <p>A arquitetura deste sistema é baseada nos padrões <u>MVC</u>, <u>DAO</u> e <u>Front Controller</u>. Tais escolhas foram feitas com o objetivo de criar um nível adequado de separação de responsabilidades, fator que facilita a manutenção da base de códigos e viabiliza a escalabilidade do software.</p>
    <p>Além disso, o sistema foi projetado para trabalhar como uma <u>página web clássica</u>. Isto se deve a uma preferência deste desenvolvedor, que defende que diversas aplicações (sobretudo as empresarias) não devem ser desenvolvidas como SPAs se não forem de fato multiplataforma, visto que tal prática aumenta a complexidade do projeto, altera o controle de fluxo natural dos navegadores (voltar/avançar, abrir em múltiplas abas) e pode causar lentidão nos casos de excesso de requisições assíncronas em redes de baixo desempenho, fatores que impactam negativamente a experiência do usuário.</p>
    <h4>Back-End</h4>
    <p>A linguem escolhida para o desenvolvimento do back-end da aplicação foi o <u>PHP</u> em sua <u>versão 8</u>. Seguem alguns dos motivos que influenciaram esta escolha:</p>
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