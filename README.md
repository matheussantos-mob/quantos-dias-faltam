<h1 align="center">Quantos dias faltam?</h1>

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-10.x-orange" alt="Laravel">
    <img src="https://img.shields.io/badge/Bootstrap-5.3-blueviolet" alt="Bootstrap">
    <img src="https://img.shields.io/badge/Carbon-2.x-blue" alt="Carbon">
    <img src="https://img.shields.io/badge/License-MIT-green" alt="License">
</p>

<p align="center">
    Uma aplicação Laravel que calcula a diferença em dias entre duas datas fornecidas pelo usuário, com suporte a feriados nacionais e uma interface responsiva e atraente.
</p>

<hr>

<h2>📜 Funcionalidades</h2>
<ul>
    <li>Inserir <strong>data inicial</strong> e <strong>data final</strong> para calcular a diferença entre elas.</li>
    <li>Mensagens de erro para quando a data inicial for maior que a final.</li>
    <li>Botões de feriados nacionais que preenchem automaticamente as datas no formulário.</li>
    <li>Estilização moderna e responsiva com Bootstrap.</li>
</ul>

<hr>

<h2>⚙️ Tecnologias Utilizadas</h2>
<ul>
    <li><strong>Laravel:</strong> Framework PHP para o backend.</li>
    <li><strong>Bootstrap:</strong> Para estilização e responsividade do frontend.</li>
    <li><strong>Carbon:</strong> Biblioteca PHP para manipulação de datas.</li>
</ul>

<hr>

<h2>📂 Estrutura do Projeto</h2>
<h3>🔗 <code>web.php</code></h3>
<ul>
    <li><strong>GET /:</strong> Exibe o formulário principal de cálculo de datas.</li>
    <li><strong>POST /calculate-days:</strong> Processa os dados do formulário e retorna a diferença de dias.</li>
</ul>

<h3>💡 Lógica Principal</h3>
<ul>
    <li>Uso da biblioteca <strong>Carbon</strong> para comparar datas e calcular diferenças.</li>
    <li>Validação de erros diretamente no backend.</li>
    <li>Exibição de mensagens claras no frontend.</li>
</ul>

<hr>

<h2>🌟 Melhorias Futuras</h2>
<ul>
    <li>Adicionar suporte a feriados móveis (ex.: Carnaval, Páscoa).</li>
    <li>Implementar autenticação para salvar cálculos realizados.</li>
    <li>Adicionar APIs externas para consulta automática de feriados nacionais.</li>
</ul>

<hr>

<h2>📄 Licença</h2>
<p>Este projeto está licenciado sob a <a href="https://opensource.org/licenses/MIT">Licença MIT</a>.</p>

<hr>

<h2>🤝 Contribuições</h2>
<p>Pull requests são bem-vindos! Para mudanças maiores, abra uma issue para discutir suas ideias.</p>
