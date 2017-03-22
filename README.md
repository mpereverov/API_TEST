# API_TEST
Test task. Simple REST API.

Простой пример REST API.
Предоставляет один endpoint /hello.
Принимает на вход данные в формате JSON
Filed: "username",
Type: string,
Description: Имя пользователя.
На выходе возвращает переменную в JSON формате,
содержащую сформированное сообщение
"message: Hello %username%", где %username% - значение переданное в поле "username".

Проверить работу приложения можно командой
$ curl -v -X POST -H "Content-Type: application/json" -d '{"username":"Boris"}' "http://YOUR_IP/api_test/hello/"

Необходимо наличие установленных пакетов Vagrant, Git.

Создайте папку с именем vagrant в домашней дирректории (или любой другой) и перейдите в неё.
Выполните "git clone https://github.com/mpereverov/API_TEST.git" и перейдите в папку API_TEST.
Выполните "vagrant up". С помощью Ansible на гостевую ОС будут установлены Docker и Jenkins с созданной задачей по сборке в Docker-образа приложения и отправке его в Docker Hub.
Перейдите на страницу "VAGRANT_HOST_IP:8081" и войдите с именем/паролем admin/admin.
Запустите сборку задачи Jenkins.
