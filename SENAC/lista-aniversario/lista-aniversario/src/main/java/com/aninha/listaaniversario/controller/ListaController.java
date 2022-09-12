package com.aninha.listaaniversario.controller;

import java.util.ArrayList;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class ListaController {
    public ArrayList<String> nomes = new ArrayList<String>();
        

        @GetMapping(value = "/{nome}")
    public String addNome(@PathVariable String nome){
        this.nomes.add(nome);
        return "Obrigado, <b>"+ nome + "</b>. Sua Presença foi confirmada";
    }

    @GetMapping(value ="/listar")
        public String listNome(){
            return this.nomes.toString();
        }
        @GetMapping(value = "/limpar")
    public String clearNome() {
        String mensagem = "";
        if (this.nomes.size() > 0){
            this.nomes.clear();
            mensagem = "Lista limpa com sucesso";
        }
        else{
            mensagem = "A lista jà esta vazia";
        }       
        
        return mensagem;
    }
}
