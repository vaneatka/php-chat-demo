<?php
    // класс сообщения в системе
    class Message{
        public $text;
        public $created;
        public $viewed;
        public $from_user;
        public $to_user;

        public function __construct(string $text, User $from_user, User $to_user  ){
            $this->text=$text ;
            $this->created =time() ;
            $this->viewed =$viewed ;
            $this->from_user =$from_user ;
            $this->to_user =$to_user ;            
        }

        public function __toString()
        {
            return json_encode($this);
        }

        public function toHTML(){
            $time = date("D-M-Y H:i:s", $this->created );
            return ("
                <div>
                    <p>{$this->text}</p>
                    <small>created-from({$this->from_user->username})</small> 
                </div>
                ");
        }

            // 1) добавьте свойства
            // + text (string), created (string), viewed (string), from (User), to (User)
            // created - время когда сообщение было отправленно 
            // viewed - время когда сообщение было просмотренно 
            // 2) конструктор должен уточнять типы входных параметров !!! -> php strict typing
            // 3) когда контсруктор выполняется - считается что в этот помент было отправленно сообщение - time()
            // +__construct()

            
            //  4) этот метод должен вернуть
            //     представление сообщения в таком формате
            /*
                <div>
                    <p>text</p>
                    <small>created - from(username)</small>
                </div>
            */
            // +__toString()
    }

?>