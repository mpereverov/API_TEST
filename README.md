# API_TEST
Test task. Simple API.

Простой пример REST API.
Предоставляет один endpoint /hello.
Принимает на вход данные в формате JSON
Filed: "username",
Type: string,
Description: Имя пользователя.
На выходе возвращает переменную закодированную в JSON формат,
содержащую сформированное сообщение
"message: Hello %username%".
Где %username% - значение переданное в поле "username".

Проверить работу приложения можно командой
$ curl -v -X POST -H "Content-Type: application/json" -d '{"username":"Boris"}' "http://YOUR_HOST_NAME/api_test/hello/"