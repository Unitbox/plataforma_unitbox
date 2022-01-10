# Unitbox Plataforma

<img src="http://unitbox.com.br/assets/img/web/connect.png" alt="exemplo imagem">

> Unitbox Plataform é um aplicativo web desenvolvido para gerar landing pages e possui vários módulos administrativos, como, cadastro de usuários, cadastro de fornecedores, cadastro de produtos e atendimento ao cliente.

### Ajustes e melhorias

Próximas atualizações:

- [ ] Criação do menu administrativo;
- [ ] Criação da funcionalidade multi Tenants.

## 💻 Pré-requisitos

Antes de começar, verifique se você atendeu aos seguintes requisitos:
<!---Estes são apenas requisitos de exemplo. Adicionar, duplicar ou remover conforme necessário--->
* Você instalou `<PHP / ^7.* / Laravel 6.*>`
* Você tem uma máquina `<Windows / Linux / Mac>`.
* Voce instalou [Laravel Framework](https://laravel.com/docs/6.x/installation#installing-laravel)

## 🚀 Instalando <Unitbox_plataform>

Para instalar o <Unitbox_Plataform>, siga estas etapas:

1. Clone the repo
   ```sh
   git clone https://github.com/Unitbox/plataforma_unitbox.git
   ```
3. Após clonar o projeto, rodar o comando abaixo, esse comando criará um diretório chamado Vendor com todos os componentes do Laravel
   ```sh
   composer install
   ```
4. Remover o ".example" do arquivo `.env.exemple` e preencher todos os campos que estiverem com **
   ```js
   APP_URL = 'INSERIR O URL DO LOCAL HOST OU DO SERVIDOR REMOTO';
   DB_HOST = 'HOST SERVIDOR DATABASE';
   DB_PORT = 'PORT SERVIDOR DATABASE';
   DB_DATABASE = 'NAME DATABASE';
   DB_USERNAME = 'USERNAME DATABASE';
   DB_PASSWORD = 'PASSWORD DATABASE';
   ```

5. Rodar comando key:generate para gerar a chave base64 no arquivo .env
   ```sh
   key:generate
   ```

<p align="right">(<a href="#top">voltar para o topo</a>)</p>

## ☕ Usando <Unitbox_Plataform>

Para usar <Unitbox_Plataform>, siga estas etapas:

1. Rodar os comandos abaixo para limpar as configurações;

```
php artisan cache:clear
php artisan config:clear
php artisan serve
```

2. Rodar comando para rodar o projeto no navegador localhost;

```
php artisan serve
```

## 📫 Contribuindo para <Unitbox_Plataform>

Para contribuir com <Unitbox_Plataform>, siga estas etapas:

1. Fork the Project.
2. Crie um branch: `git checkout -b feature/feature_`.
3. Faça suas alterações e confirme-as: `git commit -m 'digite algo sobre a feature_'`
4. Envie para o branch original: `git push origin feature/feature_`
5. Crie a solicitação de pull.

Como alternativa, consulte a documentação do GitHub em [como criar uma solicitação pull](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

## 🤝 Colaboradores

Agradecemos às seguintes pessoas que contribuíram para este projeto:

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/leonardoaugustus">
        <sub>
          <b>Leonardo Augustus</b>
        </sub>
      </a>
    </td>
  </tr>
</table>


## 😄 Seja um dos contribuidores<br>

Quer fazer parte desse projeto? Clique [AQUI](https://unitbox.com.br/#faleconosco) e preencha os dados do formuário.

## 📝 Licença

Esse projeto está sob licença. Veja o arquivo [LICENÇA](https://unitbox.com.br) para mais detalhes.

[⬆ Voltar ao topo](#unitbox-plataform)<br>