public class Professor extends Pessoa {
    public String nome;
    public String cpf = 0;
    public double hrtrabalho;
    public double valorhr = 0;

    public double retornarValorhrTotal(){
        return this.valorhr * this.hrtrabalho;
    }=-
}
