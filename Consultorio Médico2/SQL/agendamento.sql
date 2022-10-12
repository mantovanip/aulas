DROP TABLE IF EXISTS agendamento;
CREATE TABLE agendamento (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    paciente INT NOT NULL,
    atendente INT NOT NULL,
    medico INT NOT NULL,
    data DATE NOT NULL,
    hora_inicial TIME NOT NULL,
    hora_final TIME,
    
    CONSTRAINT fk_agendamento_paciente 
    FOREIGN KEY (paciente)
    REFERENCES paciente(id),
    
    CONSTRAINT fk_agendamento_atendente
    FOREIGN KEY (atendente)
    REFERENCES atendente(id),

    CONSTRAINT fk_agendamento_medico
    FOREIGN KEY (medico)
    REFERENCES medico(id)

)ENGINE=InnoDB;