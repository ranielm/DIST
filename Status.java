package poo2t1;

public class Status extends Postagem{
    private String texto;
    
    public String getTexto(){
        return this.texto;
    }
    public Status(Usuario us,String te){
        super(us);
        this.texto = te;
    }
}
