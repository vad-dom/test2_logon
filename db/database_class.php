<?php

    require_once 'db_config.php';

    class DataBase {

        private static $db = null;
        private $pdo;

        public static function getDB() {
            if (self::$db == null) self::$db = new DataBase();
            return self::$db;
        }

        private function __construct() {
            try {
                $this->pdo = new PDO(
                    'mysql:host='.DB_HOST.';dbname='.DB_NAME,
                    DB_USER,
                    DB_PASSWORD,
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
            } catch (PDOException $e) {
                echo 'Не могу подключиться к БД! '.$e->getMessage().'<br />';
            }
        }

        /* универсальный метод, позволяющий выполнять разные типы запросов к БД */
        /* хотя в данном задании он избыточный */
        public function pdoQuery($query, $params, $fetch_type, $return_value) {
            try {
                $result = $this->pdo->prepare($query);
                $ex_result = $result->execute($params);
                if ($return_value == 'fetch') return $result->$fetch_type(PDO::FETCH_ASSOC);
                if ($return_value == 'select_row_id') {
                    $result = $result->$fetch_type(PDO::FETCH_ASSOC);
                    return $result['id'];
                }
                if ($return_value == 'insert_row_id') return $this->pdo->lastInsertId();
                if ($return_value == 'insert_item') return $ex_result;
            } catch (PDOException $e) {
                $e = 'Ошибка выпонения запроса: '.$e->getMessage().'<br />';
                $e = $e.'Такой был запрос: "'.$query.'"<br />';
                $e = $e.'Такие передали параметры:<br />';
                foreach ($params as $p) $e = $e.'"'.$p.'"<br />';
                /* здесь была запись ошибки в лог с использованием Monolog */
                /* но т.к. использование библиотек запрещено в данном задании, этот код удален */
                /* можно написать свою функцию записи в лог, но этого требования не было в задании */
                echo $e.'<br />';
            }
        }
    }

?>