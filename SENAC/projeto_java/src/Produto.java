public abstract class Produto {
    public int id = 0;
    public String nome;
    public boolean isImportado = false;
    public double valor = 0;
    public int quantidade = 0;
    public String cor;
    

    public double retornarValor() {
        return this.valor;

    }

    public double retornarValorTotal() {
        return this.valor * this.quantidade;
    }

    public void exibirNome() {
        System.out.println("O tipo de produto é" + this.nome);
    }
}
