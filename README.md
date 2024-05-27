<h1 align="center">GemyIA - Image analysis</h1>
<p align="center"><img src="https://github.com/Augustocoder/GemyIA/assets/121616883/20327e39-c356-4662-bdd1-5893e04a0446" width="60%" alt="Logo Gemini"></p>

## Sobre GemyIA
O GemyIA oferece uma ferramenta prática que utiliza como LLM, a API Gemini do Google, para analisar imagens a partir de URLs. Basta fornecer a URL da imagem e o sistema irá processá-la, retornando informações detalhadas sobre suas características visuais.

## Contribuições:

_Será bem-vindo ao contribuir com este projeto!_ <br>
_Envie suas sugestões, relatórios de bugs e pull requests para aprimorar ainda mais o GemyIA._

## Precisa de Suporte?
_Entre em contato comigo, pelo email: suporte@augustodev.anonaddy.com, que irei responder assim que possível._

## Uma das Funcionalidades:
* Análise de Conteúdo: Identifica e descreve os objetos, pessoas, cenas e textos.
<img src="https://github.com/Augustocoder/GemyIA/assets/121616883/e434c841-f91e-460a-b712-2d8455ece27d" width="30%" alt="Imagem representando o primeiro tópico.">

* Detecção de Emoções: Reconhece e classifica as emoções expressas pelas pessoas na imagem.
<img src="https://github.com/Augustocoder/GemyIA/assets/121616883/43b8d1ca-e6f2-4de8-8740-316757fc13a4" width="30%" alt="Logo Gemini">

## Pré-requisitos:

* PHP 8.2 ou superior instalado 
* Composer instalado
* Extensão GD instalada

## Instalação:
### 1. Obter uma chave API Gemini:
  * Acesse o <a href="https://console.cloud.google.com/">Google Cloud Plataform</a> e crie um projeto. 
  * Crie uma chave API e habilite-a para uso.
  
### 2. Clonar este repositório:
```bash
git clone https://github.com/Augustocoder/GemyIA.git
```
### 3. Instalar dependências:
```bash
composer install
```
### 4. Configurar a API Gemini:
   * Crie um arquivo .env na pasta raiz do projeto, tem um template já pronto no .env.example .
   * Adicione a seguinte chave no arquivo .env: GEMINI_API_KEY=YOUR_GEMINI_API_KEY
   * Substitua YOUR_GEMINI_API_KEY pela sua chave API Gemini.

### 5. Executar a ferramenta:
   * Para executar é bem simples, basta abrir um prompt dentro da pasta onde se encontra os arquivos e escrever
```bash
php artisan serve
```
