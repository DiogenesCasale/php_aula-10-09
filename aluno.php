    <?php
    class Aluno {
        private $nome;
        private $dataNascimento;
        private $matricula;
        private $cpf;
    
        public function __construct($nome, $dataNascimento, $matricula, $cpf) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->matricula = $matricula;
        $this->cpf = $cpf;
        }

    public function Idade() {
        $dataNascimento = new DateTime($this->dataNascimento);
        $dataAtual = new DateTime();
        $intervalo = $dataAtual->diff($dataNascimento);
        return $intervalo->y;
        }

    public function ConverteString() {
        return  "Nome: ".  $this->nome . "<br>" .
                "DataNascimento: ".  $this->dataNascimento  ."<br>" .
                "Matricula: ".  $this->matricula  ."<br>" .
                "CPF: ". $this->cpf ."<br>" ;
    }

    public function Nome() {
        return  "Nome: ".  $this->nome;
    }
}
    ?>