package poo2t1;

public class Foto extends Postagem {
    private String legenda;
    public String getLegenda(){
        return this.legenda;
    }
    public Foto(Usuario usuario, String legenda){
        super(usuario);
        this.legenda = legenda;        
    }
    public Foto(Usuario usuario){
        super(usuario);
        this.legenda = "";
    }
}
