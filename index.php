<html>
    <head>
        <title>Teste</title>
    </head>

    <body>
        git init -> inicializa repositorio
        git config --global user.name "Matheus Moura" -> Coloca o nome no projeto
        git add "nomeDoArquivo" ou para todos git add * -> adiciona os arquivos para serem monitorados pelo git (track)
        git add -A -> adiciona tudo
        git diff -> lista todas as modificações de maneira detalhada

        git commit -m "descricao do commit" 


        Novos comandos:
        git commit -am "descricao do commit" ->faz o commit ate de arquivos nao track
        

        Voltando a log antigos:
        git reset --hard codigoDoCommit

        Conectando ao respositorio remoto:
        git remote -v ->verifica aonde esta conectado

        git remote rm origin -> remove a conexao com o repositorio

        conectando ao repositorio:
        git remote add origin urlDoRepositorio

        Como puxar do repositorio virtual para local para os dois
        estarem em sincronia ?

        git pull origin master
    </body>

</html>