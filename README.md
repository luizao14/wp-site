# Descrição

Repositório com código para gerar o site da ONG Crescer

# Pré-requisitos

Ter um ambiente local com os seguintes serviços instalados e rodando:

- PHP >= 7.0
- MariaDB >= 10
- Apache >= 2.4
- NodeJS >= 6

Para usuários de windows recomendado o uso do [XAMPP](https://www.apachefriends.org/download.html).

# Instalação e Configuração

Faça o clone do repositório direto no diretório em que o apache se encontra rodando.

```
git clone https://github.com/ongcrescer/ongcrescer.org.br
```
Crie um banco de dados chamado `ongcrescer`, acesse seu servidor local via navegador e prossiga com a instalação padrão do wordpress

Após a instalação do wordpress, selecione o tema da ONG a partir do menu `aparência -> temas` e instale um plugin chamado Meta Box.

Configure o wordpress seguindo:

- Garantir permissão de escrita na pasta `wp-content/uploads`.
- Acessar `menu -> Configurações -> Leitura -> Pagina Inicial`, colocar o valor `Uma página estática` e valor `Home`
- Acessar `menu -> Configurações -> Links Permanentes`, selecionar valor `Nome do Post`

Abra seu terminal, linha de comando, e acesse o diretório do tema do wordpress:

```
# ex: wordpress instalado em C:\htdocs\wp-site\wp-content\themes\ongcrescer\

cd C:\htdocs\wp-site\wp-content\themes\ongcrescer\
```

Uma vez dentro do diretório instale as dependências do sass:

```
npm install
```

Caso ocorra algum problema, instale o python2 e atualize para a versão mais atual

Será criado um diretório dentro do tema chamado, `node_modules` ele conterá o programa para trabalhar com
o css do tema.

Uma vez instalado rode o seguinte comando:

```
node node_modules/brunch/bin/brunch watch
```

Este comando ficará olhando os arquivos dentro do diretório `themes/ongcrescer/scss`. Qualquer alteração nesses
arquivos será gerado um novo `style.css` na raiz do diretório do tema.

## Gostaria de contribui, por onde começo?

1. Faça um fork do respositório oficial através do Github.
2. Faça um clone do seu fork dentro do seu servidor web
3. Proceda com a instalação das dependências do wordpress conforme orientações da seção `Instalação`
4. Crie um branch para desenvolver seu código
5. Faça um push para seu fork
6. Abra um Pull-Request para o repositório oficial da ONG
7. Esses passos são descritos no link [http://pythonclub.com.br/como-fazer-fork-clone-push-pull-request-no-github.html](http://pythonclub.com.br/como-fazer-fork-clone-push-pull-request-no-github.html)

### Como montar uma página de voluntários

[https://drive.google.com/drive/folders/1cC_dJ3vYuvLHz-g3Ko_k_jHr01qctmS9?usp=sharing](https://drive.google.com/drive/folders/1cC_dJ3vYuvLHz-g3Ko_k_jHr01qctmS9?usp=sharing)

## Links úteis:

- [Como criar manter um theme no Wordpress](https://www.wptotal.com/como-criar-um-wordpress-theme/)
- [Como contribuir com o site](https://blog.da2k.com.br/2015/02/04/git-e-github-do-clone-ao-pull-request/)
- [Criando um tema para Wordpress] (https://www.youtube.com/watch?v=h1JmDwJZu3Q)
- [SASS para geração de CSS](http://sass-lang.com/guide)

## Canais de comunicação

Dúvidas de desenvolvimento entre em contato no nosso chat - [https://ongcrescer.slack.com/](Slack)
