<div align="center">

# 🛒 Cadastro de Produtos com Validação

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![SENAI](https://img.shields.io/badge/SENAI-A._Jacob_Lafer-E31E24?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Conclu%C3%ADdo-brightgreen?style=for-the-badge)

</div>

---

## 📌 Sobre o Projeto

Este projeto trata-se da resolução do **Desafio 2**, focado no desenvolvimento de um script **PHP** para cadastro de produtos com **validação de dados no backend** e persistência em banco de dados **MySQL**.

A aplicação garante que apenas informações válidas e seguras sejam gravadas no banco de dados, prevenindo a inserção de registros em branco ou valores incorretos.

---

## 🏫 Instituição e Disciplina

- **Instituição:** SENAI A. Jacob Lafer
- **Curso:** Técnico em Desenvolvimento de Sistemas
- **Matéria:** Programação Back-End
- **Professor:** Denis
- **Aluna:** Maria Eduarda Vilela

---

## ✨ Funcionalidades e Regras de Negócio

- 📝 **Formulário de Cadastro:** Captura de Nome do Produto e Preço via método `POST`.
- 🛡️ **Validações no Back-End (PHP):**
  - **Campo Obrigatório:** Garante que o nome e o preço não estejam vazios.
  - **Tipo de Dado:** Verifica se o valor informado no preço é numérico (`is_numeric`).
  - **Valor Válido:** Valida se o preço é estritamente maior que zero (`> 0`).
- 🗄️ **Banco de Dados (MySQL):**
  - Conexão nativa com a extensão `mysqli`.
  - Inserção dos dados na tabela `produtos` do banco `exercicio`.
  - Exibição de mensagens interativas informando o sucesso ou a causa do erro na validação.

---

## 🛠️ Tecnologias Utilizadas

- **PHP:** Lógica de programação backend, tratamento de requisições HTTP e validações.
- **MySQL (`mysqli`):** Persistência de dados relacional.
- **HTML5:** Estruturação da interface e formulário de dados.

---

## 🗄️ Estrutura do Banco de Dados

Para rodar esta atividade localmente, crie o banco de dados e a tabela utilizando a instrução SQL abaixo:

```sql
CREATE DATABASE IF NOT EXISTS exercicio;
USE exercicio;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);
