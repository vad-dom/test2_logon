# test2_logon

II. PHP/JS

Сделать проект с авторизацией пользователя на PHP, JavaScript и MySQL. На стартовом экране выводим форму (логин/пароль),
после успешной авторизации выводим из БД данные с информацией о пользователе (имя, фото, дату рождения) и кнопкой logout.

Дамп БД лежит в папке /sql
Заведено 3 пользователя: pupkin/12345, maria/123, modrich/111
Сделана только авторизация, без регистрации (то что было в требованиях к заданию).
В качестве защиты от брутфорса: капча и небольшая задержка перед отправкой данных для замедления перебора паролей. Можно было сделать ограничение количества попыток входа или вопрос-ответ, сохраненный в БД, но это все просто для реализации, решил сделать капчу - то что посложнее

На всякий случай дублирую сюда требования:

Требования к функционалу:
- если логин/пароль неправильные - выводим ошибку (асинхронно)
- авторизация происходит без перезагрузки страницы
- после успешного входа выводим анимационный блок (JS, текст об успешной авторизации, через 10 секунд скрываем) и данные о пользователе
- хорошая верстка формы входа и страницы с информацией о пользователе
- адаптивная верстка под мобильные устройства
- одновременная поддержка нескольких сессий пользователя
- защита от брутфорса (подбора пароля)

Требования к коду:
- код на чистом PHP/JS (без фреймворков, библиотек, систем сборки и т.д.)
- компактная архитектура (минимальное количество паттернов, функций-оберток, конструкторов, файлов и папок и т.д.)
- авторизация на основе cookies
- код в snake_case

Требования к БД:
- простая и понятная структура данных
- использование индексов
- не хранить пароли в базе в открытом виде
