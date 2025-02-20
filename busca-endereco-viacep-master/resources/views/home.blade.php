@extends('layout.master')

@section('content')
    <!-- Estrutura do Formulário -->
    {{-- 
        Desenvolva um formulário para cadastro de endereços com os seguintes campos:
        - CEP
        - Logradouro
        - Rua
        - Bairro
        - Cidade
        - Estado
        - Número
        
        O formulário deverá conter um botão de "Salvar" que será utilizado para enviar os dados.
        Não se esqueça de aplicar as classes CSS necessárias para manter a padronização do layout.
    --}}
@endsection

@section('script')
    <!-- Integração com o ViaCEP e Envio de Dados -->
    {{-- 
        1. Integração com o ViaCEP:
            - No evento "blur" do campo de CEP, faça uma consulta à API do ViaCEP: https://viacep.com.br/ws/{cep}/json/.
            - Preencha os campos do formulário automaticamente com os dados retornados (logradouro, bairro, cidade, estado, etc.).
            - Certifique-se de tratar os erros, como CEPs inválidos ou problemas de conexão com a API.
        
        2. Envio de Dados via AJAX:
            - Ao submeter o formulário, use AJAX para enviar os dados para a rota:
              {{ route('enderecos.store') }}
            - O método HTTP deve ser POST.
            - Certifique-se de capturar e exibir mensagens de erro caso o salvamento falhe.
        
        3. Estrutura do Script:
            - Utilize a biblioteca jQuery para facilitar o desenvolvimento.
            - Insira mensagens de feedback (ex.: "Endereço salvo com sucesso!" ou "Erro ao salvar o endereço").
            - Opcional: Após salvar, limpe o formulário para permitir novos cadastros.
        
        Observação: Lembre-se de garantir que o CSRF token esteja incluído no envio da requisição AJAX.
    --}}
@endsection

