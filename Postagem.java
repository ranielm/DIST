package poo2t1;
import java.util.*;
public abstract class Postagem extends Feed{
    long tempo;
    Usuario usuario;
    public Postagem(Usuario us){
        Date data = new Date();
        this.tempo = data.getTime();
        this.usuario = us;
    }
}
