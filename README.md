## Sobre
<br />

<p align="justify">
Uma das minhas primeiras api desenvolvida em Laravel. A ideia foi criar um CRUD básico para a entidade Produtos. Foi utilizado o banco de dados MySQL.
</p>

<hr />
<br />

## Executando o projeto
<br />

<span>1 - Clone este repositório:</span>

```bash
    $ git clone https://github.com/CleitonBrito/apiProducts.git
```

<span>2 - Acesse a pasta do projeto:</span>

```bash
    $ cd apiProducts/
```

<span>3 - Copie o `.env-example` para `.env`:</span>

```bash
    $ copy .env-example .env
```

<span>4 - Configure seu banco de dados no `.env`:</span>

> 9 &nbsp;&nbsp;&nbsp;&nbsp; DB_CONNECTION=mysql <br>
> 10 &nbsp;&nbsp;&nbsp; DB_HOST=127.0.0.1 <br>
> 11 &nbsp;&nbsp;&nbsp; DB_PORT=3306 <br>
> 12 &nbsp;&nbsp;&nbsp; DB_DATABASE= your_database <br>
> 13 &nbsp;&nbsp;&nbsp; DB_USERNAME= your_user<br>
> 14 &nbsp;&nbsp;&nbsp; DB_PASSWORD= your_password <br>

<br>
<span>5 - Instale as dependências com o composer:</span>

```bash
    $ composer install
```

<span>6 - Execute-o:</span>

```bash
    $ php artisan serve
```

<br />
<br />
