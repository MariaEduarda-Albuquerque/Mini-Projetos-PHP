# Formulário de Cadastro

Formulário de cadastro desenvolvido em PHP, HTML e CSS, com validação de campos, máscaras de entrada e exibição segura dos dados enviados.

---

## Preview

<p align="center">
  <img src="./preview.png" width="70%" />
</p>

---

## Sobre o projeto

Este projeto consiste em um **formulário de cadastro de dados pessoais**, contendo:

- Campos para nome, data de nascimento, gênero, estado civil, e-mail, telefone e CEP
- Envio dos dados via método `POST` para uma página de confirmação
- Exibição das informações preenchidas em uma segunda página, após o envio

---

## Tecnologias utilizadas

- PHP
- HTML
- CSS
- JavaScript (jQuery + jQuery Mask Plugin)

---

## Funcionalidades

- **Máscaras de input**: os campos de telefone `(00) 00000-0000` e CEP `00000-000` são formatados automaticamente enquanto o usuário digita, usando a biblioteca **jQuery Mask**
- **Campos obrigatórios**: os seletores de gênero e estado civil exigem seleção antes do envio (`required`)
- **Segurança contra XSS**: todos os dados recebidos são tratados com `htmlspecialchars()` antes de serem exibidos na tela, evitando a injeção de código malicioso
- **Layout responsivo e estilizado**, com sombra, bordas arredondadas e organização em cards

---

## Estrutura técnica (diferencial)

O projeto é dividido em duas páginas PHP:

- `index.php`: contém o formulário com todos os campos e as máscaras de entrada via jQuery
- `recuperarDados.php`: recebe os dados enviados via `$_POST`, sanitiza cada campo com `htmlspecialchars()` e exibe as informações formatadas na tela

Essa separação reforça boas práticas de segurança básica no tratamento de dados de formulários em PHP.

---

## Como executar

**Pré-requisito:** PHP instalado (versão 8 ou superior) ou um ambiente local como XAMPP/WAMP.

```bash
# 1. Clone o repositório
git clone https://github.com/MariaEduarda-Albuquerque/Mini-Projetos-PHP.git

# 2. Acesse a pasta do projeto
cd formulario-cadastro

# 3. Inicie o servidor embutido do PHP
php -S localhost:8000

# 4. Acesse no navegador
# http://localhost:8000
```

---

<p align="center">Desenvolvido por Maria Eduarda Albuquerque</p>
