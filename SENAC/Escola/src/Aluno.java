public class Aluno extends Pessoa {
    public String nome;
    public int turma; 
    public boolean matriculado = false;

    public boolean retornarMatriculado(){
        return this.matriculado;
    }
}
