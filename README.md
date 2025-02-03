# Teste de Desenvolvimento - Busca de Endereços com ViaCEP

## Objetivo
Desenvolver uma aplicação web para buscar endereços utilizando a API do ViaCEP, preencher automaticamente os campos do formulário e armazenar os dados em um banco de dados. Além disso, criar uma tela para listar os registros cadastrados.

## Requisitos
- Criar uma página para buscar endereços pelo CEP utilizando a API do ViaCEP.
- Preencher automaticamente os campos do formulário com os dados retornados.
- Armazenar os dados preenchidos no banco de dados ao submeter o formulário.
- Criar uma tela para listar os registros cadastrados.

## Tecnologias Recomendadas
- Linguagem: PHP (Laravel) ou Node.js
- Banco de Dados: MySQL ou PostgreSQL
- Frontend: HTML, CSS, JavaScript (com jQuery ou Vue.js)
- API Externa: [ViaCEP](https://viacep.com.br/)

## Passos para Implementação

### 1. Configuração do Ambiente
1. Instalar o framework escolhido (Laravel).
2. Configurar a conexão com o banco de dados.
3. Criar a estrutura de diretórios do projeto.

### 2. Implementação da Página de Busca
1. Criar um formulário com os seguintes campos:
   - CEP
   - Logradouro
   - Bairro
   - Cidade
   - Estado
2. Adicionar um evento para buscar os dados na API do ViaCEP ao inserir o CEP.
3. Preencher os campos automaticamente com os dados retornados pela API.

### 3. Implementação do Cadastro no Banco de Dados
1. Criar uma tabela para armazenar os dados dos endereços.
2. Implementar uma rota para receber os dados do formulário e salvar no banco de dados.

### 4. Implementação da Tela de Listagem
1. Criar uma página para exibir os registros cadastrados.
2. Implementar paginação para facilitar a navegação caso haja muitos registros.

## Exemplo de Estrutura da Tabela
```sql
CREATE TABLE enderecos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    cep VARCHAR(9) NOT NULL,
    logradouro VARCHAR(255) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Exemplo de Requisição à API ViaCEP
```javascript
function buscarEndereco() {
    let cep = document.getElementById('cep').value;
    if (cep.length === 8) {
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('logradouro').value = data.logradouro;
                document.getElementById('bairro').value = data.bairro;
                document.getElementById('cidade').value = data.localidade;
                document.getElementById('estado').value = data.uf;
            })
            .catch(error => console.error('Erro ao buscar o endereço:', error));
    }
}
```

## Como Executar o Projeto
1. Clonar este repositório.
2. Instalar as dependências necessárias (`composer install`).
3. Configurar o banco de dados e rodar as migrações (`php artisan migrate` para Laravel).
4. Iniciar o servidor (`php artisan serve` para Laravel).
5. Acessar `http://localhost:8000` no navegador para testar a aplicação.

## Considerações Finais
O objetivo deste teste é avaliar a capacidade do candidato em integrar APIs externas, manipular dados em formulários, interagir com um banco de dados e criar interfaces funcionais.

Boa sorte!

