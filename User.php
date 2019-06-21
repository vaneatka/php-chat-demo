<?php
    // класс пользователя системы
    class User{
        public $username;
        public $email;
        public $password;
        public $roles = [];        
        
        public function __construct(string $username, string $email, string $password, array ...$roles)
        {
            $this->username = $username;
            $this->email = $email;
            $this->password = md5($username);
            $this->roles = $roles;
        }

        public function __toString()
        {
            return json_encode($this);
        }
        
        public function toHTML(){
            return (
                " <div>
                <h3>{$this->username} <small>({$this->email})</small></h3>
                </div>"
            );
        }
            // 1) добавьте свойства
            // + username (string), email (string), password (string), roles[] (array of strings)

            // 2) конструктор должен уточнять типы входных параметров !!! -> php strict typing
            // 3) когда контсруктору передают пароль - он должен пароль зашифровать
            //    при помощи функции md5()
            // +__construct()

            
            //  4) этот метод должен вернуть
            //     представление пользователя в таком формате
            /*
                <div>
                    <h3>username <small>(email)</small></h3> 
                </div>
            */
            // +__toString()
    }

?>