import java.util.ArrayList;
public class MaisProvavel implements Sugestoes
{
    public ArrayList<Usuario> lista_maisprovavel = new ArrayList<Usuario>();
    
    public MaisProvavel(ArrayList<Usuario> lista)
    {
        this.lista_maisprovavel = lista;
    }
    public ArrayList getLista(){
        return this.lista_maisprovavel;
    }
}
