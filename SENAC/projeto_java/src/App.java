//classe é um abstraçao de um objeto. ex: eu posso morar numa casa(objeto pq é concreto) mas a casa é meu lar(classe pq é abstrato).

public class App {
    public static void main(String[] args) throws Exception {
        Camisa  regata              = new Camisa();
        regata.id                   = 1;
        regata.nome                 = " Camisa Regata Maromba ";
        regata.quantidade           = 5;
        regata.valor                = 149.99;
        regata.qnt_botoes           = 3;

        regata.exibirNome();
        System.out.println(" O valor do Produto " + regata.retornarValorTotal());

    }
}
