package com.listanomes.listanome.controller;

import java.util.ArrayList;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RestController;

@RestController

public class CadastroController {
    public ArrayList<String> nomes = new ArrayList<String>();
    
    @GetMapping(value="/{nome}")
         public String addNome(@PathVariable String nome){
         this.nomes.add(nome);
            return "O nome <b> " + nome  + "</b> foi adicionado com sucesso! ";
    }

    @GetMapping(value="/listar")
        public String getLista(){
             return this.nomes.toString();
        }
}