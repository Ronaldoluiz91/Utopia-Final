<?php
class RESERVA
{
    private $conn;
    private $nome;
    private $whatsapp;
    private $tipoReserva;
    private $quantidade;
    private $dataReserva;
    private $hora;

    public function __construct()
    {
        require(__DIR__ . '/../config/db/conn.php'); // Conexão ao banco de dados
        $this->conn = $conn;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setWhatsapp($whatsapp)
    {
        $this->whatsapp = $whatsapp;
    }

    public function setTipoReserva($tipoReserva)
    {
        $this->tipoReserva = $tipoReserva;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function setDataReserva($dataReserva)
    {
        $this->dataReserva = $dataReserva;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    public function criarReserva()
    {
        // Insere os dados da reserva no banco de dados

        $statusReserva = 1;

        $query = "INSERT INTO tbl_reserva (nome, whatsapp, dataReserva, FK_idMesa, FK_idStatusReserva, FK_idHoraReserva, FK_idTipoReserva) 
                  VALUES (:nome, :whatsapp, :dataReserva, :quantidade, :statusReserva, :hora, :tipoReserva)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':whatsapp', $this->whatsapp);
        $stmt->bindParam(':tipoReserva', $this->tipoReserva);
        $stmt->bindParam(':quantidade', $this->quantidade);
        $stmt->bindParam(':dataReserva', $this->dataReserva);
        $stmt->bindParam(':hora', $this->hora);
        $stmt->bindParam(':statusReserva', $statusReserva);


        if ($stmt->execute()) {
            return ['status' => true, 'msg' => "Reserva criada com sucesso"];
        } else {
            return ['status' => false, 'msg' => "Erro ao criar a reserva"];
        }
    }


    public function getReservas($dataInicial, $dataFinal)
    {
        try {
            $query = "SELECT 
                        r.nome, 
                        r.whatsapp, 
                        r.dataReserva, 
                        m.capacidade AS descricaoMesa, 
                        h.descricao AS descricaoHora, 
                        t.descricao AS descricaoTipoReserva 
                      FROM tbl_reserva r
                      JOIN tbl_mesa m ON r.FK_idMesa = m.idMesa
                      JOIN tbl_hora h ON r.FK_idHoraReserva = h.idHora
                      JOIN tbl_tiporeserva t ON r.FK_idTipoReserva = t.idTipoReserva
                      WHERE r.dataReserva BETWEEN :dataInicial AND :dataFinal  ORDER BY r.dataReserva ASC";
    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':dataInicial', $dataInicial);
            $stmt->bindParam(':dataFinal', $dataFinal);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Log o erro ou lance uma exceção
            error_log($e->getMessage());
            return [];
        }
    }  
}
