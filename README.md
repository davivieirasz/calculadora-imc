# 🧮 Calculadora de IMC

Este é um projeto simples de uma **Calculadora de IMC (Índice de Massa Corporal)** desenvolvido com **HTML**, **CSS**, **JavaScript** e **PHP**. O objetivo é praticar conceitos básicos de formulário HTML, requisições POST e lógica em PHP, além de aplicar estilização com CSS e manipulação de eventos com JavaScript.

## 🚀 Funcionalidades

- Entrada de altura e peso pelo usuário.
- Cálculo automático do IMC com base nos dados inseridos.
- Classificação do IMC de acordo com a tabela da OMS:
  - Abaixo do peso
  - Peso normal
  - Excesso de peso
  - Obesidade classe I
  - Obesidade classe II
  - Obesidade classe III
- Exibição do resultado formatado na tela.
- Botão para limpar os dados e retornar ao formulário.

## 💻 Tecnologias utilizadas

- HTML5
- CSS3
- JavaScript
- PHP 8+

## 📂 Estrutura do Projeto

```
📁 raiz do projeto/
├── index.php                # Formulário e processamento do cálculo
├── readme.md               # Documentação do projeto
└── assets/
    ├── img/
    │   ├── logo.png        # Logo do sistema
    │   └── wallpaper.png   # Imagem de fundo
    ├── style.css           # Estilos da interface
    └── script.js           # Função para limpar os dados
```

---

## 🚀 Como Usar

1. Clone este repositório ou baixe os arquivos.
2. Execute o projeto em um servidor local (XAMPP, WAMP, MAMP ou outro com suporte a PHP).
3. Abra o navegador e acesse:  
   `http://localhost/CalculadoraIMC/index.php`
4. Insira seu peso e altura no formulário.
5. Clique em **Calcular** e veja seu IMC com a classificação correspondente.

---

## 📊 Classificação do IMC

| IMC                   | Classificação         |
|-----------------------|----------------------|
| Menor que 18.5        | Abaixo do Peso       |
| 18.5 a 24.9           | Peso Normal          |
| 25.0 a 29.9           | Excesso de Peso      |
| 30.0 a 34.9           | Obesidade classe I   |
| 35.0 a 39.9           | Obesidade classe II  |
| 40.0 ou mais          | Obesidade classe III |

---

## 🧠 Exemplo

> Altura: `1.70`  
> Peso: `70`  
> Resultado:  
> **Seu IMC é de: 24,22**  
> **Classificação: Peso Normal.**

---

## 🧑🏻‍💻 Autor

Desenvolvido por **Davi Vieira de Souza**  
📫 [LinkedIn](https://www.linkedin.com/in/davivieiraa)  
💻 Projeto para fins de aprendizado
